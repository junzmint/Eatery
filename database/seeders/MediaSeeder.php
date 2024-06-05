<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Eatery;
use App\Models\Media;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eatery = Eatery::where('name', 'Phúc Long Coffee & Tea')->first();
        $media = Media::create([
            'link' => 'https://media.vneconomy.vn/w800/images/upload/2024/01/04/86fcccd426788e26d769.jpg',
            'type' => 'view',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://aeonmall-haiphong-lechan.com.vn/wp-content/uploads/2023/01/phuc-long-tra-sua-ct.jpg',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);

        $eatery = Eatery::where('name', 'Phở 10')->first();
        $media = Media::create([
            'link' => 'https://blog.dktcdn.net/files/mo-quan-pho.png',
            'type' => 'view',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://giadinh.mediacdn.vn/zoom/740_463/2020/9/13/photo1600006283495-16000062834991179244544-crop-1600006327048196380539.jpg',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);

        $eatery = Eatery::where('name', 'Bún Chả Hàng Mành')->first();
        $media = Media::create([
            'link' => 'https://www.pos365.vn/storage/app/media/2023/3/mo-quan-bun-cha/chi-phi-mat-bang.webp',
            'type' => 'view',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://cdn-i.vtcnews.vn/files/lcm/2017/09/13/d5da1d25-d262-4ae6-ad92-8ba7485345b8ava-104339.jpg',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);

        $eatery = Eatery::where('name', 'Gỏi cuốn ABC')->first();
        $media = Media::create([
            'link' => 'https://dalatreviews.com/wp-content/uploads/2022/10/Quan-nuong-Top-Tep-3.jpg',
            'type' => 'view',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://cdn.alongwalk.info/vn/wp-content/uploads/2022/03/11231006/image-cang-bung-cung-top-9-quan-goi-cuon-noi-tieng-nhat-quan-1-tp-ho-chi-minh-164698980661370.jpg',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);

        $eatery = Eatery::where('name', 'Bánh mì Oishii')->first();
        $media = Media::create([
            'link' => 'https://pos.nvncdn.com/4e732c-26/art/artCT/20201207_OUU1ZjXabDaM48jFfo6qqABj.jpg',
            'type' => 'view',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://nemnuonghungviet.com/nemhungviet/uploads/2023/02/banh-mi-chao-hung-viet-1.jpg',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);

        $eatery = Eatery::where('name', 'Cơm thố Bách Khoa')->first();
        $media = Media::create([
            'link' => 'https://nhaphonet.vn/wp-content/uploads/2023/04/com-tho-bach-khoa-4-1.jpg',
            'type' => 'view',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://images.foody.vn/res/g99/981195/prof/s640x400/image-151cc2e9-230423125618.jpeg',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);

        $eatery = Eatery::where('name', 'Bún bò Huế 098')->first();
        $media = Media::create([
            'link' => 'https://www.bep36.com/wp-content/uploads/2017/01/thiet-ke-bep-nha-hang-bun-bo-hue-1.jpg',
            'type' => 'view',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://dulichkhampha24.com/wp-content/uploads/2021/04/quan-bun-bo-da-nang-c.jpg',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);

        $eatery = Eatery::where('name', 'Highlands Coffee & Tea')->first();
        $media = Media::create([
            'link' => 'https://thicongnhahang.vn/storage/app/media/uploaded-files/thiet-ke-quan-highlands-coffee9.jpg',
            'type' => 'view',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZfa-Kol9NP5YE3dBW2KxqJo2KOfEc3Ti_2ifccl49eFay4xm_cBxFZzEIYVAQYf3123c&usqp=CAU',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);

        $eatery = Eatery::where('name', 'Wine Bar')->first();
        $media = Media::create([
            'link' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/05/17/2a/1a/uva-wine-bar.jpg?w=1200&h=-1&s=1',
            'type' => 'view',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://www.bradleysofflicence.ie/wp-content/uploads/2023/10/IMG-0482__69566-scaled-1000x1000.webp',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);

        $eatery = Eatery::where('name', 'Real Cohi')->first();
        $media = Media::create([
            'link' => 'https://sumatocoffee.com/cdn/shop/articles/the-importance-of-coffee-shops-in-communities-782577_900x.jpg?v=1713277728',
            'type' => 'view',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://foodworld.vn/wp-content/uploads/2020/07/C%C3%A0-ph%C3%AA-ngon.jpg',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);

        $eatery = Eatery::where('name', 'Lẩu Nabe')->first();
        $media = Media::create([
            'link' => 'https://cosp.com.vn/uploaded/thiet-ke-nha-hang-lau-nuong-Nh%C3%A2t.jpg',
            'type' => 'view',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://cdn.tgdd.vn/2021/03/CookProduct/thumb1-1200x676-23.jpg',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);

        $eatery = Eatery::where('name', 'Cơm nhà làm')->first();
        $media = Media::create([
            'link' => 'https://storage.googleapis.com/unifa-travel/2023/05/quan-com-gia-dinh-da-nang-10.jpg',
            'type' => 'view',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://storage.googleapis.com/unifa-travel/2023/05/quan-com-gia-dinh-da-nang-6.jpg',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);

        $eatery = Eatery::where('name', 'Bánh Việt Nam')->first();
        $media = Media::create([
            'link' => 'https://media-cdn.tripadvisor.com/media/photo-p/18/ce/f5/3b/quan-banh-vi-t-vietnamese.jpg',
            'type' => 'view',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://cdn.tgdd.vn/2022/02/CookDish/cach-lam-banh-tai-yen-gion-rum-ngot-ngao-huong-vi-mien-tay-avt-1200x676.jpg',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);

        $eatery = Eatery::where('name', 'Vietnam Noddels')->first();
        $media = Media::create([
            'link' => 'https://images.foody.vn/images/foody-mi-quang-ech-bep-trang-ha-bong-848-63644355343741531000000000000.jpg',
            'type' => 'view',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://hcm.inhat.vn/wp-content/uploads/2019/10/quan-mi-quang-sai-gon-8.jpg',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);

        $eatery = Eatery::where('name', 'Ăn vặt')->first();
        $media = Media::create([
            'link' => 'https://daylambanh.edu.vn/wp-content/uploads/2019/11/kinh-doanh-quan-an-vat-600x490.jpg',
            'type' => 'view',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUoRG4Hgbsi-rv7Rj-d2KOqwH_2za4wW-Inw&s',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);
    }
}
