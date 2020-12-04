<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'id'=> 1,
            'name' => 'XYZ Company',
            'created_at' =>NOW()
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'company_id' => 1,
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
            'created_at' =>NOW()
        ]);

        


    }
}
