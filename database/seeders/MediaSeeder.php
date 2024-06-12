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
        $media = Media::create([
            'link' => 'https://tea-2.lozi.vn/v1/images/resized/phuc-long-coffee-and-tea-kha-van-can-quan-thu-duc-ho-chi-minh-1539917160398017509-eatery-avatar-1625908165?w=640&type=s',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://attachment.momocdn.net/common/u/2e02fb5fe4f64fb55bc713540643c6f8eae702d101cea8c59afc49cfc505fc37/ea8caffe-29db-4eda-b02d-b0e2c64f2d9b_av0pdtb.jpeg',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://media.thuonghieucongluan.vn/uploads/2024/01/10/bo-suu-tap-tra-phuc-long-2024-1704859620.jpg',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://loop.com.vn/storage/phuc-long-anh-s.jpg',
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
        $media = Media::create([
            'link' => 'https://thanhnien.mediacdn.vn/uploaded/giangvu/2020_06_16/1_KQKC.jpg?width=500',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://togiaysaigon.com/wp-content/uploads/2020/11/cach-chon-to-pho.jpg',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://monngonmoingay.com/wp-content/uploads/2015/11/PhoBo-e1446825512455.jpg',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://ik.imagekit.io/tvlk/blog/2023/04/go-and-share-cac-quan-pho-tai-ha-noi-2.jpg?tr=dpr-2,w-675',
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
        $media = Media::create([
            'link' => 'https://thenguyen.vn/files/products/product_1832/bun-cha-ha-noi-chi-lay-cha-vien.jpg',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://vnn-imgs-f.vgcloud.vn/2019/05/23/14/cach-lam-bun-cha-don-gian-tai-nha.jpg',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://images.fpt.shop/unsafe/filters:quality(5)/fptshop.com.vn/uploads/images/tin-tuc/173158/Originals/tong-hop-cac-cach-an-bun-cha-ha-noi-chuan-4.png',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://www.bep36.com/wp-content/uploads/2015/09/buncha41.jpg',
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
        $media = Media::create([
            'link' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Summer_roll.jpg/220px-Summer_roll.jpg',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://img.cand.com.vn/resize/800x800/NewFiles/Images/2022/10/21/a_4-1666328801312.jpg',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://i.ytimg.com/vi/wlRabkYSX9M/maxresdefault.jpg',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://mynuong.com/giachanh/?qa=blob&qa_blobid=11943864417991115485',
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
        $media = Media::create([
            'link' => 'https://product.hstatic.net/200000411281/product/banh_mi_xa_xiu_846b2744475043daaf3ee175f58cc826_master.jpg',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://trungnguyenlegendcafe.net/wp-content/uploads/2021/12/38.-Banh-Mi-Tom-_-No.png',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://cdn.tasteatlas.com/images/dishes/09dbb63bb3c84cfeb8264ea9dca8f425.jpg?w=600',
            'type' => 'food_drink',
            'eatery_id' => $eatery->id,
        ]);
        $media = Media::create([
            'link' => 'https://cdn.nhathuoclongchau.com.vn/unsafe/800x0/filters:quality(95)/https://cms-prod.s3-sgn09.fptcloud.com/mach_ban_6_cach_lam_banh_mi_sandwich_day_du_dinh_duong_1_8756a3e8e2.png',
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
