<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
Use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
            // User::create([
            //     'name' => 'Alfredo Hutagalung',
            //     'email' => 'alfredo@gmail.com',
            //     'password' => bcrypt('12345')
            // ]);
            // User::create([
            //     'name' => 'Jeremy Hutagalung',
            //     'email' => 'Jeremy@gmail.com',
            //     'password' => bcrypt('12345')
            // ]);

        
        
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
        User::factory(3)->create();
        
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Excerpt Pertama...',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis similique, inventore nam hic dolor sequi porro suscipit incidunt repudiandae. Corporis quod, repellat facilis expedita voluptatum excepturi sunt, eum aliquid officia quam ut? Quaerat cupiditate dolores dolore quidem nihil ex harum cumque fugit quibusdam minima, placeat labore corporis facilis! Reprehenderit doloribus consectetur aspernatur ut ipsa neque libero quas autem veniam quaerat et officiis maxime, porro ab distinctio aliquam quo recusandae sapiente nostrum quos sequi modi sit tenetur. Perspiciatis obcaecati ipsa fugit perferendis non accusamus. Dolorem ipsam odit, ab maxime dolor iusto a, nihil vero, esse suscipit nulla dignissimos amet ipsa quod.',
        //     'category_id' => 1,
        //     'user_id' => 1    
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Excerpt kedua...',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis similique, inventore nam hic dolor sequi porro suscipit incidunt repudiandae. Corporis quod, repellat facilis expedita voluptatum excepturi sunt, eum aliquid officia quam ut? Quaerat cupiditate dolores dolore quidem nihil ex harum cumque fugit quibusdam minima, placeat labore corporis facilis! Reprehenderit doloribus consectetur aspernatur ut ipsa neque libero quas autem veniam quaerat et officiis maxime, porro ab distinctio aliquam quo recusandae sapiente nostrum quos sequi modi sit tenetur. Perspiciatis obcaecati ipsa fugit perferendis non accusamus. Dolorem ipsam odit, ab maxime dolor iusto a, nihil vero, esse suscipit nulla dignissimos amet ipsa quod.',
        //     'category_id' => 1,
        //     'user_id' => 1    
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Excerpt Ketiga...',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis similique, inventore nam hic dolor sequi porro suscipit incidunt repudiandae. Corporis quod, repellat facilis expedita voluptatum excepturi sunt, eum aliquid officia quam ut? Quaerat cupiditate dolores dolore quidem nihil ex harum cumque fugit quibusdam minima, placeat labore corporis facilis! Reprehenderit doloribus consectetur aspernatur ut ipsa neque libero quas autem veniam quaerat et officiis maxime, porro ab distinctio aliquam quo recusandae sapiente nostrum quos sequi modi sit tenetur. Perspiciatis obcaecati ipsa fugit perferendis non accusamus. Dolorem ipsam odit, ab maxime dolor iusto a, nihil vero, esse suscipit nulla dignissimos amet ipsa quod.',
        //     'category_id' => 2,
        //     'user_id' => 1    
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Excerpt Ketiga...',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis similique, inventore nam hic dolor sequi porro suscipit incidunt repudiandae. Corporis quod, repellat facilis expedita voluptatum excepturi sunt, eum aliquid officia quam ut? Quaerat cupiditate dolores dolore quidem nihil ex harum cumque fugit quibusdam minima, placeat labore corporis facilis! Reprehenderit doloribus consectetur aspernatur ut ipsa neque libero quas autem veniam quaerat et officiis maxime, porro ab distinctio aliquam quo recusandae sapiente nostrum quos sequi modi sit tenetur. Perspiciatis obcaecati ipsa fugit perferendis non accusamus. Dolorem ipsam odit, ab maxime dolor iusto a, nihil vero, esse suscipit nulla dignissimos amet ipsa quod.',
        //     'category_id' => 2,
        //     'user_id' => 2    
        // ]);
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
