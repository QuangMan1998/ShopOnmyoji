<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Bạch Bé',
                'price' => '35000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Bát Nhã',
                'price' => '35000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Bỉ Ngạn Hoa',
                'price' => '35000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Búp Bê',
                'price' => '35000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Đại Thiên Cẩu',
                'price' => '35000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Diện Linh Khí',
                'price' => '35000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Điểu',
                'price' => '35000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Hắc Bé',
                'price' => '35000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Hoang',
                'price' => '35000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Hoang_A',
                'price' => '35000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Nội',
                'price' => '35000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Sơn Thố',
                'price' => '35000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Thanh Hằng Đăng',
                'price' => '35000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Tre',
                'price' => '35000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Tửu Thôn',
                'price' => '35000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Tỳ Mộc',
                'price' => '35000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Yên La',
                'price' => '35000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Yêu Đao Cơ',
                'price' => '35000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Diêm Ma',
                'price' => '45000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Diêm Ma_A',
                'price' => '45000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Diêm Ma_B',
                'price' => '45000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Diện Linh Khí',
                'price' => '45000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Quỷ Thiết',
                'price' => '45000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Quỷ Thiết_A',
                'price' => '45000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Sò',
                'price' => '45000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Thiếu chủ',
                'price' => '45000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Tiểu Lộc Nam',
                'price' => '45000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Tửu Thôn_B ',
                'price' => '45000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Tửu Thôn_C',
                'price' => '45000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Tuyết Boy',
                'price' => '45000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Tuyết Boy_A',
                'price' => '45000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Tỳ Mộc_B',
                'price' => '45000',
                'description' => 'Kích thước : 8-10cm x 5cm 
                Chất liệu : hơp kim kẽm , ko gỉ sét 
                Xuất xứ : Quảng Châu
                Bảo hành: 1 đổi 1
                Tư vấn/Mua hàng: Comment SĐT, cân nặng, chiều cao 
                Call: 01203024277 - 090 3838 722 
                Store: 760 Trần Hưng Đạo P7 Q5 (lầu 2)
                Cam kết:
                Bảo hành sản phẩm 1 tháng kể từ ngày mua hàng. Nếu lỗi do nhà sản xuất, chúng tối sẽ đổi sản phẩm mới ngay.
                Sản phẩm chất lượng cao, tinh tế không cạnh tranh với hàng kém chất lượng xấu, giá thấp.
                 ',
                'cate_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
