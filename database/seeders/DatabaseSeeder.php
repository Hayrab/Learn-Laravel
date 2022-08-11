<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Haykal Rabani',
        //     'email' => 'haykal.rabani@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);

        // User::create([
        //     'name' => 'Narun Hamiya',
        //     'email' => 'narun.hamiya@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Web',
            'slug' => 'web'

        ]);

        Category::create([
            'name' => 'Python',
            'slug' => 'python'

        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati perspiciatis, est nostrum et repellendus ipsum quae labore alias expedita blanditiis corporis ea beatae?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati perspiciatis, est nostrum et repellendus ipsum quae labore alias expedita blanditiis corporis ea beatae? Rerum nam doloribus amet libero quibusdam dolorum expedita pariatur animi natus eligendi accusamus, saepe reiciendis deserunt adipisci laudantium eveniet dicta excepturi tempore perferendis voluptates vero architecto numquam! Commodi doloribus laudantium dolore nihil sint unde facere facilis vel accusantium tenetur officia, quod, minima qui cum non nisi ea ut distinctio cumque quam. Aliquam explicabo vero sed labore. Nihil ipsam sint, sit veritatis necessitatibus unde repellendus fugiat! Odit labore recusandae nesciunt earum in. Enim repellat sed dolorem molestiae porro!' ,
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati perspiciatis, est nostrum et repellendus ipsum quae labore alias expedita blanditiis corporis ea beatae?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati perspiciatis, est nostrum et repellendus ipsum quae labore alias expedita blanditiis corporis ea beatae? Rerum nam doloribus amet libero quibusdam dolorum expedita pariatur animi natus eligendi accusamus, saepe reiciendis deserunt adipisci laudantium eveniet dicta excepturi tempore perferendis voluptates vero architecto numquam! Commodi doloribus laudantium dolore nihil sint unde facere facilis vel accusantium tenetur officia, quod, minima qui cum non nisi ea ut distinctio cumque quam. Aliquam explicabo vero sed labore. Nihil ipsam sint, sit veritatis necessitatibus unde repellendus fugiat! Odit labore recusandae nesciunt earum in. Enim repellat sed dolorem molestiae porro!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati perspiciatis, est nostrum et repellendus ipsum quae labore alias expedita blanditiis corporis ea beatae?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati perspiciatis, est nostrum et repellendus ipsum quae labore alias expedita blanditiis corporis ea beatae? Rerum nam doloribus amet libero quibusdam dolorum expedita pariatur animi natus eligendi accusamus, saepe reiciendis deserunt adipisci laudantium eveniet dicta excepturi tempore perferendis voluptates vero architecto numquam! Commodi doloribus laudantium dolore nihil sint unde facere facilis vel accusantium tenetur officia, quod, minima qui cum non nisi ea ut distinctio cumque quam. Aliquam explicabo vero sed labore. Nihil ipsam sint, sit veritatis necessitatibus unde repellendus fugiat! Odit labore recusandae nesciunt earum in. Enim repellat sed dolorem molestiae porro!',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
    }
}
