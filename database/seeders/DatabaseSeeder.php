<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Renata Anggun A.S',
        //     'email' => 'renataanggun24@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        // User::create([
        //     'name' => 'Park Jeongseong',
        //     'email' => 'jaypark@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();


        Category::create([
            'name' => 'Web Programmer',
            'slug' => 'web-programmer'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'Personal'
        ]);

        Post::factory(10)->create();


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum illo dolore nihil in facere laborum facilis soluta deserunt fuga odio incidunt explicabo autem minima, possimus praesentium quasi, blanditiis molestiae harum nobis. Placeat quibusdam consequatur minus dicta voluptatem enim tenetur laboriosam necessitatibus nemo ratione, architecto quia corrupti alias, tempore nesciunt blanditiis at aliquid odio eligendi eius repudiandae. Doloremque nihil sit molestias ea dignissimos explicabo amet. Debitis quasi totam nostrum impedit quos quas ratione, minus aperiam quis? Neque qui eius architecto voluptatibus nesciunt facilis doloribus fuga porro amet dolorum placeat perferendis quos quae, quod maiores nisi id eum numquam! Exercitationem, odit similique.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum illo dolore nihil in facere laborum facilis soluta deserunt fuga odio incidunt explicabo autem minima, possimus praesentium quasi, blanditiis molestiae harum nobis. Placeat quibusdam consequatur minus dicta voluptatem enim tenetur laboriosam necessitatibus nemo ratione, architecto quia corrupti alias, tempore nesciunt blanditiis at aliquid odio eligendi eius repudiandae. Doloremque nihil sit molestias ea dignissimos explicabo amet. Debitis quasi totam nostrum impedit quos quas ratione, minus aperiam quis? Neque qui eius architecto voluptatibus nesciunt facilis doloribus fuga porro amet dolorum placeat perferendis quos quae, quod maiores nisi id eum numquam! Exercitationem, odit similique.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum illo dolore nihil in facere laborum facilis soluta deserunt fuga odio incidunt explicabo autem minima, possimus praesentium quasi, blanditiis molestiae harum nobis. Placeat quibusdam consequatur minus dicta voluptatem enim tenetur laboriosam necessitatibus nemo ratione, architecto quia corrupti alias, tempore nesciunt blanditiis at aliquid odio eligendi eius repudiandae. Doloremque nihil sit molestias ea dignissimos explicabo amet. Debitis quasi totam nostrum impedit quos quas ratione, minus aperiam quis? Neque qui eius architecto voluptatibus nesciunt facilis doloribus fuga porro amet dolorum placeat perferendis quos quae, quod maiores nisi id eum numquam! Exercitationem, odit similique.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum illo dolore nihil in facere laborum facilis soluta deserunt fuga odio incidunt explicabo autem minima, possimus praesentium quasi, blanditiis molestiae harum nobis. Placeat quibusdam consequatur minus dicta voluptatem enim tenetur laboriosam necessitatibus nemo ratione, architecto quia corrupti alias, tempore nesciunt blanditiis at aliquid odio eligendi eius repudiandae. Doloremque nihil sit molestias ea dignissimos explicabo amet. Debitis quasi totam nostrum impedit quos quas ratione, minus aperiam quis? Neque qui eius architecto voluptatibus nesciunt facilis doloribus fuga porro amet dolorum placeat perferendis quos quae, quod maiores nisi id eum numquam! Exercitationem, odit similique.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
