<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
    	$user = User::create(
        	[
		        'name' => 'Mauricio',
		        'email' => 'maurosped@gmail.com',
		        'password' => Hash::make('secret'),
		        'remember_token' => str_random(10),
		    ]
        );
       $role = Role::create(['name' => 'Administrador']);
       $user->assignRole('Administrador');
    }
}
