<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 0,
            'email' => 'w@w.com',
            'password' => bcrypt('123'),
            'name' => str_random(10),
            'sobrenome' => str_random(10),
            'admin' => 0,
            'foto_user' => 'user.jpg',
            'remember_token' => str_random(10),
        ]);

        factory('App\User', 50)->create()->each(function($u) {
            $u->posts()->save(factory('App\Post')->make());
        });
        
        $this->call(Cursos::class);
    }
}
