<?php

namespace Database\Seeders;

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
       

         // User::create([
         //    'name' => 'Bruce Wayne',
         //    'email' => 'Wayne@gmail.com',
         //    'password' => bcrypt('12345')
         // ]);

         // User::create([
         //    'name' => 'Alfred Pennyworth',
         //    'email' => 'Pennyworth@gmail.com',
         //    'password' => bcrypt('12345')
         // ]);

         User::factory(4)->create();

         Category::create([
            'name' => 'Business',
            'slug' => 'Business'
         ]);

         Category::create([
            'name' => 'Food',
            'slug' => 'Food'
         ]);

         Category::create([
            'name' => 'Shipping',
            'slug' => 'Shipping'
         ]);

         Category::create([
            'name' => 'Construction',
            'slug' => 'Construction'
         ]);

         Category::create([
            'name' => 'Donation',
            'slug' => 'Donation'
         ]);

         Post::factory(20)->create();

         // Post::create([
         //    'title' => 'Wayne Entrepreneur',
         //    'category_id' => 1,
         //    'user_id' => 1,
         //    'slug' => 'Wayne Entrepreneur is a...',
         //    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
         //    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse modi beatae voluptatum dolorem inventore fuga corrupti ad numquam velit </p><p>quia explicabo amet voluptates veniam, excepturi quae commodi enim sint dolore nemo optio magni, neque totam. Quod qui ducimus necessitatibus harum a suscipit,</p> <p>exercitationem itaque enim! Itaque porro exercitationem corporis asperiores maxime et facere saepe eius magnam animi nulla quidem, quis nostrum dolorum accusamus eos quaerat quam repellendus distinctio non dicta ducimus libero maiores? Doloremque explicabo qui minima id iure. Consequuntur doloribus, assumend a quam, sunt harum incidunt impedit veniam, non voluptatum laboriosam doloremque neque tenetur repellendus? Provident suscipit hic beatae dicta.</p>'
         // ]);

         // Post::create([
         //    'title' => 'Wayne Cooking Competition',
         //    'category_id' => 2,
         //    'user_id' => 2,
         //    'slug' => 'Wayne Cooking Competition is a...',
         //    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
         //    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse modi beatae voluptatum dolorem inventore fuga corrupti ad numquam velit </p><p>quia explicabo amet voluptates veniam, excepturi quae commodi enim sint dolore nemo optio magni, neque totam. Quod qui ducimus necessitatibus harum a suscipit,</p> <p>exercitationem itaque enim! Itaque porro exercitationem corporis asperiores maxime et facere saepe eius magnam animi nulla quidem, quis nostrum dolorum accusamus eos quaerat quam repellendus distinctio non dicta ducimus libero maiores? Doloremque explicabo qui minima id iure. Consequuntur doloribus, assumend a quam, sunt harum incidunt impedit veniam, non voluptatum laboriosam doloremque neque tenetur repellendus? Provident suscipit hic beatae dicta.</p>'
         // ]);

         // Post::create([
         //    'title' => 'Wayne Investation',
         //    'category_id' => 1,
         //    'user_id' => 1,
         //    'slug' => 'Wayne Investation is a...',
         //    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
         //    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse modi beatae voluptatum dolorem inventore fuga corrupti ad numquam velit </p><p>quia explicabo amet voluptates veniam, excepturi quae commodi enim sint dolore nemo optio magni, neque totam. Quod qui ducimus necessitatibus harum a suscipit,</p> <p>exercitationem itaque enim! Itaque porro exercitationem corporis asperiores maxime et facere saepe eius magnam animi nulla quidem, quis nostrum dolorum accusamus eos quaerat quam repellendus distinctio non dicta ducimus libero maiores? Doloremque explicabo qui minima id iure. Consequuntur doloribus, assumend a quam, sunt harum incidunt impedit veniam, non voluptatum laboriosam doloremque neque tenetur repellendus? Provident suscipit hic beatae dicta.</p>'
         // ]);

         // Post::create([
         //    'title' => 'Wayne Shipping',
         //    'category_id' => 1,
         //    'user_id' => 1,
         //    'slug' => 'Wayne Shipping is a...',
         //    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
         //    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse modi beatae voluptatum dolorem inventore fuga corrupti ad numquam velit </p><p>quia explicabo amet voluptates veniam, excepturi quae commodi enim sint dolore nemo optio magni, neque totam. Quod qui ducimus necessitatibus harum a suscipit,</p> <p>exercitationem itaque enim! Itaque porro exercitationem corporis asperiores maxime et facere saepe eius magnam animi nulla quidem, quis nostrum dolorum accusamus eos quaerat quam repellendus distinctio non dicta ducimus libero maiores? Doloremque explicabo qui minima id iure. Consequuntur doloribus, assumend a quam, sunt harum incidunt impedit veniam, non voluptatum laboriosam doloremque neque tenetur repellendus? Provident suscipit hic beatae dicta.</p>'
         // ]);
    }
}
