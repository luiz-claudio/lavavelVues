<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class userSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $senha = bcrypt('admin');

        DB::insert('insert into users
    (name,email,password)
    values (?,?,?)',array('admin','admin@admin.com',$senha));

        //
    }
}
