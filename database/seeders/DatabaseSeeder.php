<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

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
        //     'name' => 'Andi Aliansyah',
        //     'email' => 'andi.aliansyah212@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Kuro Neko',
        //     'email' => 'kuroneko@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

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

        // Post::create([
        //     'title' => 'Judul Post Pertama',
        //     'slug' => 'judul-post-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis vel voluptatum, officia illum velit optio quo',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur consequuntur quisquam repellat rem suscipit quis sapiente molestiae aperiam error, consectetur accusamus! Laboriosam esse beatae alias suscipit ut. Cupiditate sequi repellendus voluptate, possimus similique in explicabo natus accusantium minus iste ab deserunt rem veniam ratione quos, delectus molestiae impedit consequatur, porro fuga dicta atque? Quibusdam sunt ab cupiditate laboriosam. Vel sequi quam natus aliquam accusantium, molestiae ad corrupti aspernatur quis iure illum quasi autem fuga expedita ipsum quidem quod quibusdam. Eveniet eligendi fugiat beatae mollitia pariatur similique inventore placeat fugit? Pariatur nemo culpa blanditiis aspernatur, dignissimos amet adipisci ipsam similique itaque! Voluptates, eos. Officia cupiditate tempore repellat libero, blanditiis culpa? Vero deleniti ab, esse, exercitationem ea voluptate possimus porro quaerat dignissimos id nisi sed dolorum? Ab nam quam quasi libero non. Necessitatibus debitis rerum accusamus repudiandae error, laborum quo ex, voluptatibus nemo ratione distinctio, magnam aspernatur a temporibus blanditiis placeat natus.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Kedua',
        //     'slug' => 'judul-post-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis vel voluptatum, officia illum velit optio quo',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur consequuntur quisquam repellat rem suscipit quis sapiente molestiae aperiam error, consectetur accusamus! Laboriosam esse beatae alias suscipit ut. Cupiditate sequi repellendus voluptate, possimus similique in explicabo natus accusantium minus iste ab deserunt rem veniam ratione quos, delectus molestiae impedit consequatur, porro fuga dicta atque? Quibusdam sunt ab cupiditate laboriosam. Vel sequi quam natus aliquam accusantium, molestiae ad corrupti aspernatur quis iure illum quasi autem fuga expedita ipsum quidem quod quibusdam. Eveniet eligendi fugiat beatae mollitia pariatur similique inventore placeat fugit? Pariatur nemo culpa blanditiis aspernatur, dignissimos amet adipisci ipsam similique itaque! Voluptates, eos. Officia cupiditate tempore repellat libero, blanditiis culpa? Vero deleniti ab, esse, exercitationem ea voluptate possimus porro quaerat dignissimos id nisi sed dolorum? Ab nam quam quasi libero non. Necessitatibus debitis rerum accusamus repudiandae error, laborum quo ex, voluptatibus nemo ratione distinctio, magnam aspernatur a temporibus blanditiis placeat natus.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Ketiga',
        //     'slug' => 'judul-post-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis vel voluptatum, officia illum velit optio quo',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur consequuntur quisquam repellat rem suscipit quis sapiente molestiae aperiam error, consectetur accusamus! Laboriosam esse beatae alias suscipit ut. Cupiditate sequi repellendus voluptate, possimus similique in explicabo natus accusantium minus iste ab deserunt rem veniam ratione quos, delectus molestiae impedit consequatur, porro fuga dicta atque? Quibusdam sunt ab cupiditate laboriosam. Vel sequi quam natus aliquam accusantium, molestiae ad corrupti aspernatur quis iure illum quasi autem fuga expedita ipsum quidem quod quibusdam. Eveniet eligendi fugiat beatae mollitia pariatur similique inventore placeat fugit? Pariatur nemo culpa blanditiis aspernatur, dignissimos amet adipisci ipsam similique itaque! Voluptates, eos. Officia cupiditate tempore repellat libero, blanditiis culpa? Vero deleniti ab, esse, exercitationem ea voluptate possimus porro quaerat dignissimos id nisi sed dolorum? Ab nam quam quasi libero non. Necessitatibus debitis rerum accusamus repudiandae error, laborum quo ex, voluptatibus nemo ratione distinctio, magnam aspernatur a temporibus blanditiis placeat natus.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Keempat',
        //     'slug' => 'judul-post-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis vel voluptatum, officia illum velit optio quo',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur consequuntur quisquam repellat rem suscipit quis sapiente molestiae aperiam error, consectetur accusamus! Laboriosam esse beatae alias suscipit ut. Cupiditate sequi repellendus voluptate, possimus similique in explicabo natus accusantium minus iste ab deserunt rem veniam ratione quos, delectus molestiae impedit consequatur, porro fuga dicta atque? Quibusdam sunt ab cupiditate laboriosam. Vel sequi quam natus aliquam accusantium, molestiae ad corrupti aspernatur quis iure illum quasi autem fuga expedita ipsum quidem quod quibusdam. Eveniet eligendi fugiat beatae mollitia pariatur similique inventore placeat fugit? Pariatur nemo culpa blanditiis aspernatur, dignissimos amet adipisci ipsam similique itaque! Voluptates, eos. Officia cupiditate tempore repellat libero, blanditiis culpa? Vero deleniti ab, esse, exercitationem ea voluptate possimus porro quaerat dignissimos id nisi sed dolorum? Ab nam quam quasi libero non. Necessitatibus debitis rerum accusamus repudiandae error, laborum quo ex, voluptatibus nemo ratione distinctio, magnam aspernatur a temporibus blanditiis placeat natus.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
