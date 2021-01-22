<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Product;
use App\Cart;
use Auth;
use Carbon\Carbon;
use App\transaction;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }
    
    public function ambildata(){
        $var1 = Product::paginate(3);

        return view('home',['Product'=>$var1]);
    }
    public function detailproduct($id){
        $var3=Product::find($id);
        return view('productsDetail',['Product'=>$var3]);
    }

    public function insertcart($id, Request $req){
        $findProduct=Product::find($id);
        $findSame = Cart::where('product_id', $id)->where('user_id', Auth::user()->id);
        if($findSame->exists()){
            Cart::where('product_id', $id)->update([
                'product_id' => $findProduct['id'],
                'quantity' => $req->get('formQuantity'),
            ]);
        }
        else {
            $createProduct= Cart::create([
                'product_id' => $findProduct['id'], 
                'user_id'=>Auth::user()->id,
                'quantity'=> $req->get('formQuantity'),
            ]);
        }

    
        return redirect('home');
    }

    public function addcart($id){
        $findProduct=Product::find($id);
        return view('addToCart',['Product'=>$findProduct]);
      }

      public function listcart(){
        $listCart=Cart::where('user_id', Auth::user()->id)->get();
        // dd($listCart->product());
        return view('cartList',['Cart'=>$listCart]);
      }

    public function searchdata(Request $req){
        $key = $req->search;
        $findkey = DB::table('products')->where('name', 'like', '%'.$key.'%')->paginate(3); 
        return view('home', ['Product'=> $findkey]);
    }
    public function destroy($id) 
    {
        DB::table('carts') -> where('id', $id) -> delete();
        return redirect('/cart');
    }

    public function edit($id) 
    {
        $product=Product::find($id);
        return view('edit',['Product'=>$product]);
    }

    public function update($id, Request $req)
    {
        $product=Product::find($id);
        Cart::where('product_id', $product->id)->update([
            'product_id' => $product->id,
            'Quantity' => $req->formQuantity,
        ]);
        return redirect('/cart');
    }
    public function checkout()
    {
        $checkcart = Cart::where('user_id', Auth::user()->id)->get();
        foreach($checkcart as $check){
            transaction::create([
                'user_id'=>Auth::user()->id,
                'product_id'=>$check->product_id,
                'date'=> Carbon::now()->toDateTimeString(),
                'Quantity'=>$check->Quantity,
            ]);

        }
        foreach($checkcart as $delcart ){
            DB::table('carts')
                ->where('user_id','=',Auth::user()->id)
                ->where('product_id','=',$delcart->product_id)
                ->delete();
        }
        return redirect('/home');
    }

    public function history(){
        $var1 = transaction::select('date')->where('user_id', Auth::user()->id)->distinct()->get();

        return view('history',['transaction'=>$var1]);
    }

    public function detailtransaction($date){
        $detailProduct = transaction::where('user_id', Auth::user()->id)->where('date', $date)->get();
        return view('detailTransaction',['transaction'=>$detailProduct]);
    }

    public function addproduct(Request $req){
        $var = Validator::make($req->all(),[
            'name'=>['required', 'unique:products'],
            'category_id'=>['required'],
            'description'=>['required'],
            'price'=>['required','integer', 'min:100'],
            'image'=>['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:10000'],
        ]);
        if($var->fails())
        {
            return redirect('admproduct')->withErrors($var);
        }else{
            $img = $req->file('image')->getClientOriginalName();
            $storage = storage_path('app/public/img');
            if(!File::isDirectory($storage)){
            File::makeDirectory($storage, 0777, true, true);
            }
            Storage::putFileAs('public/img', $req->file('image'), $img);
            Product::create([
                'category_id'=>$req->category_id,
                'name'=> $req->name,
                'description'=>$req->description,
                'price'=>$req->price,
                'image'=>'img/' .$img,
            ]);
            return redirect('admproduct')->with(['message'=>'Data has been added']);
        }
      }
    public function product(){
        $category = Category::all();
        return view ('addproduct',['category'=>$category]);
    }

    public function categoryAdded(Request $req){
        $category = Validator::make($req->all(),[
            'name'=> ['required', 'unique:categories'],
        ]);
        if($category->fails()){
            return redirect('/admin/addCategory')->withErrors($category);
        }else{
            Category::create([
                'name'=>$req->name
            ]);
            return redirect("/admin/addCategory")->with(['message'=>'Data has been added']);
        }
    }

    public function viewCategory(){
        $category = Category::all();
        $product = Product::all();
        return view ('listCategory', ['Category'=>$category, 'Product'=> $product]);
    }

    public function viewProduct(){
        $product = Product::all();
        return view('listProduct', ['Product'=>$product]);
    }

    public function detailcategory($id){
        $var5=Category::all();
        $var6=Product::where('Category_id',$id)->get();
        return view('detailcategory',['Category'=>$var5],['Product'=>$var6]);
    }
    public function productlist(){
        $product=Product::all();
        return view('listproduct',['Product'=>$product]);
    }
    public function destroyProduct($id) 
    {
        DB::table('products') -> where('id', $id)->delete();
        return redirect('/admin/listProduct');
    }

}