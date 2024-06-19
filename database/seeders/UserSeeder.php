<?php

namespace Database\Seeders; 
 
use Illuminate\Database\Console\Seeds\WithoutModelEvents; 
use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash; 
 
class UserSeeder extends Seeder 
{ 
    /** 
     * Run the database seeds. 
     * 
     * @return void 
     */ 
    public function run()
{
    try {
        DB::table('users')->insert([
            'name' => 'admin01',
            'email' => 'admin01@gmail.com',
            'umur' => '33',
            'password' => Hash::make('1234567890'),
            'level' => 'admin',
            'alamat' => 'alamat',
            'jeniskelamin' => 'Laki-laki'
        ]);
    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage(); // Tampilkan pesan error
    }
}

}