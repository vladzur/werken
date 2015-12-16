<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('roles')->insert([
            'name' => 'admin'
        ]);
        DB::table('roles')->insert([
            'name' => 'contributor'
        ]);
        DB::table('roles')->insert([
            'name' => 'subscriber'
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@blog.com',
            'password' => bcrypt('admin'),
            'role_id' => 1
        ]);

        DB::table('configurations')->insert([
            'blog_title' => 'Werken',
            'blog_description' => 'The most simple blog in the world',
            'blog_footer' => 'This blog is Free Software, so you can modify it as you wish'
        ]);

        Model::reguard();
    }
}
