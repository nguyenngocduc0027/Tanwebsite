<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Partner;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Type;
use App\Models\Level;
use App\Models\HomePage;
use App\Models\Product;
use App\Models\Slider;
use App\Models\User;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('123456'),
            'phone' => '0123456789',
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Admin2',
            'email' => 'admin@metasoft.com',
            'password' => bcrypt('123456789'),
            'phone' => '0921933898',
            'role' => 'admin',
        ]);

        // Tạo 3 danh mục
        $categories = [
            'Đồ điện tử',
            'Thời trang',
            'Nội thất'
        ];

        foreach ($categories as $catName) {
            $category = Category::create(['name' => $catName]);

            // Mỗi danh mục có 2 loại
            for ($i = 1; $i <= 2; $i++) {
                $type = Type::create([
                    'name' => "Loại $i của $catName",
                    'category_id' => $category->id
                ]);

                // Mỗi loại có 2 kiểu
                for ($j = 1; $j <= 2; $j++) {
                    Level::create([
                        'name' => "Kiểu $j của Loại $i - $catName",
                        'type_id' => $type->id
                    ]);
                }
            }
        }

        HomePage::create([
            'service1' => 'Dịch Vụ 1',
            'content1' => 'Nội Dung 1',
            'image1' => '/images/ser/ser_1.png',
            'service2' => 'Dịch Vụ 2',
            'content2' => 'Nội Dung 2',
            'image2' => '/images/ser/ser_2.png',
            'service3' => 'Dịch Vụ 3',
            'content3' => 'Nội Dung 3',
            'image3' => '/images/ser/ser_3.png',
            'service4' => 'Dịch Vụ 4',
            'content4' => 'Nội Dung 4',
            'image4' => '/images/ser/ser_4.png',
            'set_product_title' => 'Tiêu đề SET sản phẩm',
            'set_product_subtitle' => 'Phụ đề SET sản phẩm',
            'set_product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus deleniti, ea mollitia similique officia corrupti soluta libero, necessitatibus, doloribus sed delectus facere possimus',
            'sale_product_title' => 'Tiêu đề SALE sản phẩm',
            'sale_product_subtitle' => 'Phụ đề SALE sản phẩm',
            'sale_product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus deleniti, ea mollitia similique officia corrupti soluta libero, necessitatibus, doloribus sed delectus facere possimus',
            'coupon_title' => 'Tiêu đề mã giảm giá',
            'coupon_subtitle' => 'Phụ đề mã giảm giá',
            'coupon_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus deleniti, ea mollitia similique officia corrupti soluta libero, necessitatibus, doloribus sed delectus facere possimus',
            'about_title' => 'Tiêu đề về chúng tôi',
            'about_subtitle' => 'Phụ đề về chúng tôi',
            'about_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus deleniti, ea mollitia similique officia corrupti soluta libero, necessitatibus, doloribus sed delectus facere possimus Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus deleniti, ea mollitia similique officia corrupti soluta libero, necessitatibus, doloribus sed delectus facere possimus Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus deleniti, ea mollitia similique officia corrupti soluta libero, necessitatibus, doloribus sed delectus facere possimus',
            'image_about' => '/images/products/section_about_product_1.png',
            'why_title' => 'Tiêu đề vì sao chọn chúng tôi',
            'why_subtitle' => 'Phụ đề vì sao chọn chúng tôi',
            'why1' => 'Vì sao 1',
            'content_why1' => 'Nội dung vì sao 1',
            'image_why1' => '/images/why/why_choise_1_icon.png',
            'why2' => 'Vì sao 2',
            'content_why2' => 'Nội dung vì sao 2',
            'image_why2' => '/images/why/why_choise_2_icon.png',
            'why3' => 'Vì sao 3',
            'content_why3' => 'Nội dung vì sao 3',
            'image_why3' => '/images/why/why_choise_3_icon.png',
            'why4' => 'Vì sao 4',
            'content_why4' => 'Nội dung vì sao 4',
            'image_why4' => '/images/why/why_choise_4_icon.png',
            'why5' => 'Vì sao 5',
            'content_why5' => 'Nội dung vì sao 5',
            'image_why5' => '/images/why/why_choise_5_icon.png',
            'why6' => 'Vì sao 6',
            'content_why6' => 'Nội dung vì sao 6',
            'image_why6' => '/images/why/why_choise_6_icon.png',
            'img_why' => '/images/why/banner_choise.png',
            'product_title' => 'Tiêu đề sản phẩm',
            'product_subtitle' => 'Phụ đề sản phẩm',
            'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus deleniti, ea mollitia similique officia corrupti soluta libero, necessitatibus, doloribus sed delectus facere possimus',
            'feedback_title' => 'Tiêu đề phê duyệt',
            'feedback_subtitle' => 'Phụ đề phê duyệt',
            'feedback_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus deleniti, ea mollitia similique officia corrupti soluta libero, necessitatibus, doloribus sed delectus facere possimus',
            'blog_title' => 'Tiêu đề blog',
            'blog_subtitle' => 'Phụ đề blog',
            'blog_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus deleniti, ea mollitia similique officia corrupti soluta libero, necessitatibus, doloribus sed delectus facere possimus',
            'partner_title' => 'Tiêu đề đối tác',
            'partner_subtitle' => 'Phụ đề đối tác',
            'partner_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus deleniti, ea mollitia similique officia corrupti soluta libero, necessitatibus, doloribus sed delectus facere possimus',
        ]);



        $faker = \Faker\Factory::create('vi_VN');

        $categories = Category::all();

        foreach ($categories as $category) {
            $types = $category->types;

            foreach ($types as $type) {
                $levels = $type->levels;

                foreach ($levels as $level) {
                    // Tạo 3 sản phẩm cho mỗi combination category-type-level
                    for ($i = 1; $i <= 3; $i++) {
                        Product::create([
                            'name' => $faker->words(3, true),
                            'category_id' => $category->id,
                            'type_id' => $type->id,
                            'level_id' => $level->id,
                            'code' => strtoupper(uniqid('PRD')),
                            'status' => $faker->randomElement(['còn hàng', 'hết hàng']),
                            'price' => $faker->numberBetween(100000, 500000),
                            'sale_price' => $faker->numberBetween(80000, 300000),
                            'description' => $faker->paragraph,
                            'document' => $faker->url,
                            'brand' => $faker->company,
                        ]);
                    }
                }
            }
        }

        Slider::create([
            'title' => 'Tiêu đề slider',
            'subtitle' => 'Phụ đề slider',
            'status' => 1,
            'image' => '/images/slider/slider_1.jpg',
            'link' => 'https://example.com',
        ]);
        Slider::create([
            'title' => 'Tiêu đề slider',
            'subtitle' => 'Phụ đề slider',
            'status' => 1,
            'image' => '/images/slider/slider_2.jpg',
            'link' => 'https://example.com',
        ]);
        Slider::create([
            'title' => 'Tiêu đề slider',
            'subtitle' => 'Phụ đề slider',
            'status' => 1,
            'image' => '/images/slider/slider_3.jpg',
            'link' => 'https://example.com',
        ]);
        for ($i = 0; $i < 8; $i++) {
            Testimonial::create([
                'name' => 'Khách hàng số ' . $i,
                'position' => 'Kế Toán',
                'image' => '/images/feedback/feedback_1_avatar.jpg',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, atque omnis distinctio iure dignissimos quam nisi ad cum id eveniet tenetur ea provident, sunt dolorem quos eum hic praesentium eos!'
            ]);
        }
        for ($i = 0; $i < 20; $i++) {
            Blog::create([
                'name' => 'Tin tức DEMO ' . $i,
                'author_id' => 1,
                'date' => Carbon::now(),
                'image' => '/images/blog/09.jpg',
                'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur, nunc nectincidunt fringilla, ',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, atque omnis distinctio iure dignissimos quam nisi ad cum id eveniet tenetur ea provident, sunt dolorem quos eum hic praesentium eos!'
            ]);
        }
        for ($i=0; $i <9; $i++) { 
            Partner::create([
                'name' => 'Đối tác ' . $i,
                'image' => '/images/brand/img_brand_' . $i . '.png',
            ]);
        }
    }
}
