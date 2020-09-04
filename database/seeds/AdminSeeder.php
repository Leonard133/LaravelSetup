<?php

use App\Model\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::create([
            "username" => 'khai',
            "name" => 'khai_name',
            "email" => 'admin@admin.com',
            "password" => Hash::make('123123'),
            "identity_no" => null,
            "contact_no" => null,
            "address" => null,
            "status" => 0,
        ]);
        $admin->assignRole('super_admin');
    }
}
