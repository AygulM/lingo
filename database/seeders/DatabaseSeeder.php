<?php

namespace Database\Seeders;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // $admin = User::factory()->create([
        //     'name' => 'Manager2',
        //     'email' => 'manager@example.com',
        //     'password'=>bcrypt( 'manager'),
        // ]);

        

        
        // $role = Role::create(['name' => 'manager']);
        // $role2 = Role::create(['name' => 'teacher']);
        // $role3 = Role::create(['name' => 'student']);

        // $admin->assignRole('manager');

        // Course::factory()->create([
        //     'title'=>'Пробный курс',
        //     'duration'=>'3 месяца', 
        //     'max_student'=>10,
        //     'description'=>'Просто пройди курс, ок?',
        //     'preview'=>'Для хороших людей',
        //     'price'=>15000,
        //     'lang_id'=>2,
        //     'start_date'=>'2024.06.17',
        //     'end_date'=>'2024.09.17', 
        // ]);
    }
}
