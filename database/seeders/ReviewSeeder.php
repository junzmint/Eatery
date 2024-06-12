<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Eatery;
use App\Models\Review;
use Faker\Factory as Faker;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $eateries = Eatery::all();

        foreach ($eateries as $eatery) {
            Review::create([
                'eatery_id' => $eatery->id,
                'reviewer' => $faker->name,
                'rating' => 1,
                'content' => "Không ngon, khô, không đậm đà, vị không hấp dẫn, giá hơi cao",
                'image_link' => "https://cdn.pixabay.com/photo/2016/08/12/16/01/cake-1589012_640.jpg",
                'like' => $faker->numberBetween(0, 10),
                'dislike' => $faker->numberBetween(0, 10),
            ]);
            Review::create([
                'eatery_id' => $eatery->id,
                'reviewer' => $faker->name,
                'rating' => 1,
                'content' => "Không ngon như mong đợi",
                'image_link' => "https://nguyenlieuphachehanoi.com/wp-content/uploads/2019/12/nguyen-tac-chup-hinh.jpg",
                'like' => $faker->numberBetween(0, 10),
                'dislike' => $faker->numberBetween(0, 10),
            ]);
            Review::create([
                'eatery_id' => $eatery->id,
                'reviewer' => $faker->name,
                'rating' => 1,
                'content' => "Cứng, không thơm",
                'image_link' => "https://blog.abit.vn/wp-content/uploads/2020/08/y-tuong-kinh-doanh-do-uong-2.jpg",
                'like' => $faker->numberBetween(0, 10),
                'dislike' => $faker->numberBetween(0, 10),
            ]);

            Review::create([
                'eatery_id' => $eatery->id,
                'reviewer' => $faker->name,
                'rating' => 2,
                'content' => "Không ngon, ngọt quá, không tươi",
                'image_link' => "https://genk.mediacdn.vn/2018/photo-1-1516273559638.jpg",
                'like' => $faker->numberBetween(0, 10),
                'dislike' => $faker->numberBetween(0, 10),
            ]);
            Review::create([
                'eatery_id' => $eatery->id,
                'reviewer' => $faker->name,
                'rating' => 2,
                'content' => "Không ngon như mong đợi",
                'image_link' => "https://tuonglamphotos.com/wp-content/uploads/2023/08/chup-anh-mon-an-5.webp",
                'like' => $faker->numberBetween(0, 10),
                'dislike' => $faker->numberBetween(0, 10),
            ]);
            Review::create([
                'eatery_id' => $eatery->id,
                'reviewer' => $faker->name,
                'rating' => 2,
                'content' => "Cứng, không thơm",
                'image_link' => "https://mediawinwin.vn/upload/images/sanpham/bao-gia-chup-mon-an-dich-vu-chup-anh-do-an-chuyen-nghiep-3.JPG",
                'like' => $faker->numberBetween(0, 10),
                'dislike' => $faker->numberBetween(0, 10),
            ]);

            Review::create([
                'eatery_id' => $eatery->id,
                'reviewer' => $faker->name,
                'rating' => 3,
                'content' => "Bình thường, không có gì đặc biệt, giá cả hợp lý",
                'image_link' => "https://foodphoto.vn/wp-content/uploads/2021/10/Chup-anh-mon-an-tach-nen-3.jpg",
                'like' => $faker->numberBetween(0, 10),
                'dislike' => $faker->numberBetween(0, 10),
            ]);
            Review::create([
                'eatery_id' => $eatery->id,
                'reviewer' => $faker->name,
                'rating' => 3,
                'content' => "Khá ngon, mềm, thơm, giá hơi cao",
                'image_link' => "https://www.uplevo.com/blog/wp-content/uploads/2019/07/kinh-doanh-tra-sua-do-an-vat.jpg",
                'like' => $faker->numberBetween(0, 10),
                'dislike' => $faker->numberBetween(0, 10),
            ]);
            Review::create([
                'eatery_id' => $eatery->id,
                'reviewer' => $faker->name,
                'rating' => 3,
                'content' => "Khá ngon, giòn, nhân đầy đủ, giá hơi cao",
                'image_link' => "https://image.plo.vn/Uploaded/2024/tmuihk/2021_07_11/banh-ngot-1_acjc.gif",
                'like' => $faker->numberBetween(0, 10),
                'dislike' => $faker->numberBetween(0, 10),
            ]);

            Review::create([
                'eatery_id' => $eatery->id,
                'reviewer' => $faker->name,
                'rating' => 4,
                'content' => "Ngon nhất mình từng ăn! Mềm, ngọt vừa, rất đáng thử!",
                'image_link' => "https://images.squarespace-cdn.com/content/v1/53883795e4b016c956b8d243/1562602167815-2IR4B74MGP8OGR5HTUTV/chup-anh-mon-an-mandarine-2.jpg",
                'like' => $faker->numberBetween(0, 100),
                'dislike' => $faker->numberBetween(0, 100),
            ]);
            Review::create([
                'eatery_id' => $eatery->id,
                'reviewer' => $faker->name,
                'rating' => 4,
                'content' => "Khá ngon, mềm, thơm, giá hơi cao",
                'image_link' => "https://entergroup.vn/upload/product/chup-menu-mon-an-cafe-laperle-002-6409.jpg",
                'like' => $faker->numberBetween(0, 100),
                'dislike' => $faker->numberBetween(0, 100),
            ]);
            Review::create([
                'eatery_id' => $eatery->id,
                'reviewer' => $faker->name,
                'rating' => 4,
                'content' => "Đầy đủ, mềm, ngọt vừa, rất đáng thử",
                'image_link' => "https://toquoc.mediacdn.vn/thumb_w/640/280518851207290880/2022/8/24/cc3a0-phc3aa-se1bbafa-c491c3a1-vie1bb87t-nam-1024x800-1661308923626-16613089237991567833549.jpg",
                'like' => $faker->numberBetween(0, 100),
                'dislike' => $faker->numberBetween(0, 100),
            ]);

            Review::create([
                'eatery_id' => $eatery->id,
                'reviewer' => $faker->name,
                'rating' => 5,
                'content' => "Ngọt vừa, phục vụ nhanh chóng. Chắc chắn sẽ quay lại!",
                'image_link' => "https://cdn.24h.com.vn/upload/3-2019/images/2019-08-20/10-1566275115-409-width650height488.gif",
                'like' => $faker->numberBetween(0, 100),
                'dislike' => $faker->numberBetween(0, 100),
            ]);
            Review::create([
                'eatery_id' => $eatery->id,
                'reviewer' => $faker->name,
                'rating' => 5,
                'content' => "Ngon nhất mình từng ăn! Chua vừa, rất đáng thử!",
                'image_link' => "https://spacet-release.s3.ap-southeast-1.amazonaws.com/img/blog/2023-11-30/hinh-anh-do-uong-va-banh-cua-cheese-coffee-656899fd392db7810f9831e1.webp",
                'like' => $faker->numberBetween(0, 100),
                'dislike' => $faker->numberBetween(0, 100),
            ]);
            Review::create([
                'eatery_id' => $eatery->id,
                'reviewer' => $faker->name,
                'rating' => 5,
                'content' => "Amazing",
                'image_link' => "https://dnraw.com/wp-content/uploads/2023/09/chup-anh-hinh-mon-an-viet-quang-cao-do-an-da-nang-35.jpg",
                'like' => $faker->numberBetween(0, 100),
                'dislike' => $faker->numberBetween(0, 100),
            ]);
        }
    }
}
