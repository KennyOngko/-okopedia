<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ["role_id"=>2,"name"=>'tasyaprajna',"email"=>'prajnacantik@gmail.com','password'=>bcrypt('prajna')],
            ["role_id"=>2,"name"=>'kennyongko',"email"=>'kennyjelek@gmail.com','password'=>bcrypt('kenny')],
        ]);
    }
}
