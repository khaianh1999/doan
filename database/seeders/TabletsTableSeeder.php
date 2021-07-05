<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TabletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tablets')->truncate();

        $tablets = array(
            array('id' => '1','name' => 'Máy tính bảng Samsung Galaxy Tab A7 Lite','code' => 'SST1','origin' => 'Thái Bình','price' => '4490000','picture' => '1624777440.jpg','status' => '1','description' => '<h3><a title="Tham khảo gi&aacute; m&aacute;y t&iacute;nh bảng Samsung Galaxy A7 Lite ch&iacute;nh h&atilde;ng, đang c&oacute; tại Thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang/samsung-galaxy-tab-a7-lite" target="_blank" type="Tham khảo gi&aacute; m&aacute;y t&iacute;nh bảng Samsung Galaxy A7 Lite ch&iacute;nh h&atilde;ng, đang c&oacute; tại Thegioididong.com">Galaxy Tab A7 Lite</a>&nbsp;l&agrave; phi&ecirc;n bản r&uacute;t gọn của&nbsp;d&ograve;ng&nbsp;<a title="Tham khảo gi&aacute; table ch&iacute;nh h&atilde;ng, mới nhất đang được kinh doanh tại Thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang" target="_blank" type="Tham khảo gi&aacute; table ch&iacute;nh h&atilde;ng, mới nhất đang được kinh doanh tại Thegioididong.com">m&aacute;y t&iacute;nh bảng</a>&nbsp;"ăn kh&aacute;ch"&nbsp;<a title="Tham khảo gi&aacute; m&aacute;y t&iacute;nh bảng Samsung Galaxy Tab A7 2020 ch&iacute;nh h&atilde;ng tại Thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang/samsung-galaxy-tab-a7-2020" target="_blank" type="Tham khảo gi&aacute; m&aacute;y t&iacute;nh bảng Samsung Galaxy Tab A7 2020 ch&iacute;nh h&atilde;ng tại Thegioididong.com">Galaxy Tab A7</a>&nbsp;thuộc thương hiệu&nbsp;<a title="Tham khảo sản phẩm Samsung ch&iacute;nh h&atilde;ng mới nhất tại Thegioididong.com" href="https://www.thegioididong.com/samsung" target="_blank" type="Tham khảo sản phẩm Samsung ch&iacute;nh h&atilde;ng mới nhất tại Thegioididong.com">Samsung</a>, đ&aacute;p ứng nhu cầu giải tr&iacute; của&nbsp;kh&aacute;ch h&agrave;ng thuộc ph&acirc;n kh&uacute;c b&igrave;nh d&acirc;n với m&agrave;n h&igrave;nh lớn nhưng vẫn gọn nhẹ hợp t&uacute;i tiền.</h3>
          <h3>Thiết kế si&ecirc;u mỏng nhẹ</h3>
          <p>Galaxy Tab A7 Lite sở hữu kiểu thiết kế đặc trưng của d&ograve;ng Galaxy Tab A7. Thiết bị sử dụng chất liệu nh&ocirc;m với thiết kế nguy&ecirc;n khối gi&uacute;p cho m&aacute;y trở n&ecirc;n cao cấp hơn d&ugrave; chỉ thuộc ph&acirc;n kh&uacute;c tầm trung gi&aacute; rẻ.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/237325/samsung-galaxy-tab-a7-lite-002.jpg"><img class=" ls-is-cached lazyloaded" title="Galaxy Tab A7 Lite | Thiết kế mặt lưng" src="https://cdn.tgdd.vn/Products/Images/522/237325/samsung-galaxy-tab-a7-lite-002.jpg" alt="Galaxy Tab A7 Lite | Thiết kế mặt lưng" data-src="https://cdn.tgdd.vn/Products/Images/522/237325/samsung-galaxy-tab-a7-lite-002.jpg" /></a></p>
          <p>Tuy được ho&agrave;n thiện từ nh&ocirc;m nguy&ecirc;n khối, nhưng Galaxy Tab A7 Lite vẫn c&oacute; độ mỏng nhẹ ấn tượng khi chỉ nặng 371 g v&agrave; d&agrave;y chỉ 8 mm, mang đến sự thoải m&aacute;i khi cầm sử dụng trong thời gian d&agrave;i.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/237325/samsung-galaxy-tab-a7-lite-004.jpg"><img class=" ls-is-cached lazyloaded" title="Galaxy Tab A7 Lite | Thiết kế cạnh viền" src="https://cdn.tgdd.vn/Products/Images/522/237325/samsung-galaxy-tab-a7-lite-004.jpg" alt="Galaxy Tab A7 Lite | Thiết kế cạnh viền" data-src="https://cdn.tgdd.vn/Products/Images/522/237325/samsung-galaxy-tab-a7-lite-004.jpg" /></a></p>
          <p>Với k&iacute;ch thước chỉ tương đương với một quyển sổ n&ecirc;n&nbsp;Galaxy Tab A7 Lite sẽ&nbsp;v&ocirc; c&ugrave;ng gọn g&agrave;ng để bạn c&oacute; thể mang theo khi cần thiết.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/237325/samsung-galaxy-tab-a7-lite-009.jpg"><img class=" ls-is-cached lazyloaded" title="Galaxy Tab A7 Lite | Thiết kế gọn r&agrave;ng, cầm nắm thoải m&aacute;i" src="https://cdn.tgdd.vn/Products/Images/522/237325/samsung-galaxy-tab-a7-lite-009.jpg" alt="Galaxy Tab A7 Lite | Thiết kế gọn r&agrave;ng, cầm nắm thoải m&aacute;i" data-src="https://cdn.tgdd.vn/Products/Images/522/237325/samsung-galaxy-tab-a7-lite-009.jpg" /></a></p>
          <h3>M&agrave;n h&igrave;nh lớn hiển thị nhiều hơn, r&otilde; hơn</h3>
          <p>M&aacute;y t&iacute;nh bảng Galaxy Tab A7 Lite c&oacute; m&agrave;n h&igrave;nh k&iacute;ch thước 8.7 inch, độ ph&acirc;n giải cao 800 x 1340 pixel, cho chất lượng hiển thị kh&aacute;, m&agrave;u sắc tươi tắn, m&agrave;n h&igrave;nh lớn sẽ gi&uacute;p bạn xem được nhiều nội dung hơn, thoải m&aacute;i k&eacute;o thả, chỉnh sửa h&igrave;nh ảnh, văn bản dễ d&agrave;ng.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/237325/samsung-galaxy-tab-a7-lite-001.jpg"><img class=" ls-is-cached lazyloaded" title="Galaxy Tab A7 Lite | Trang bị m&agrave;n h&igrave;nh k&iacute;ch thước lớn 8.7 inch" src="https://cdn.tgdd.vn/Products/Images/522/237325/samsung-galaxy-tab-a7-lite-001.jpg" alt="Galaxy Tab A7 Lite | Trang bị m&agrave;n h&igrave;nh k&iacute;ch thước lớn 8.7 inch" data-src="https://cdn.tgdd.vn/Products/Images/522/237325/samsung-galaxy-tab-a7-lite-001.jpg" /></a></p>
          <p>Phần viền 2 b&ecirc;n cũng được Samsung l&agrave;m mỏng tối đa gi&uacute;p cho khung h&igrave;nh được trải rộng hơn, tăng trải nghiệm khi xem phim hay thưởng thức c&aacute;c chương tr&igrave;nh giải tr&iacute;.</p>
          <h3>Hiệu năng ổn định cho nhu cầu giải tr&iacute; cơ bản</h3>
          <p>Trang bị vi xử l&yacute; Helio P22T 8 nh&acirc;n xung nhịp tối đa 2.3 GHz, Galaxy Tab A7 Lite c&oacute; hiệu năng ổn định, đ&aacute;p ứng cho nhu cầu giải tr&iacute; kh&aacute;c nhau như chơi game nhẹ nh&agrave;ng, kiểm tra email, tin nhắn hay đọc b&aacute;o cập nhật tin tức.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/237325/samsung-galaxy-tab-a7-lite-09.jpg"><img class=" lazyloaded" title="Galaxy Tab A7 Lite | Trang bị con chip Helio P22T đến từ MediaTek" src="https://cdn.tgdd.vn/Products/Images/522/237325/samsung-galaxy-tab-a7-lite-09.jpg" alt="Galaxy Tab A7 Lite | Trang bị con chip Helio P22T đến từ MediaTek" data-src="https://cdn.tgdd.vn/Products/Images/522/237325/samsung-galaxy-tab-a7-lite-09.jpg" /></a></p>
          <p>M&aacute;y được trang bị&nbsp;<a title="Tham khảo th&ecirc;m c&aacute;c mẫu m&aacute;y t&iacute;nh bảng c&oacute; RAM dưới 4 GB gi&aacute; tốt nhất tại Thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang-ram-duoi-4gb" target="_blank" type="Tham khảo th&ecirc;m c&aacute;c mẫu m&aacute;y t&iacute;nh bảng c&oacute; RAM dưới 4 GB gi&aacute; tốt nhất tại Thegioididong.com">RAM 3 GB</a>&nbsp;v&agrave;&nbsp;<a title="Tham khảo th&ecirc;m c&aacute;c mẫu tablet c&oacute; bộ nhớ trong từ 32 đến 64 GB tại Thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang-rom-32-den-64gb" target="_blank" type="Tham khảo th&ecirc;m c&aacute;c mẫu tablet c&oacute; bộ nhớ trong từ 32 đến 64 GB tại Thegioididong.com">bộ nhớ trong 32 GB</a>&nbsp;l&agrave; những th&ocirc;ng số kh&aacute; vừa vặn trong tầm gi&aacute;, vẫn đủ cho đa nhiệm v&agrave; nhu cầu lưu trữ ở mức độ cơ bản. B&ecirc;n cạnh đ&oacute;, m&aacute;y hỗ trợ khe cắm thẻ nhớ l&ecirc;n đến 1 TB gi&uacute;p tăng th&ecirc;m kh&ocirc;ng gian để lưu trữ những b&agrave;i h&aacute;t hay bộ phim y&ecirc;u th&iacute;ch của bạn.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/237325/samsung-galaxy-tab-a7-lite-008.jpg"><img class=" lazyloaded" title="Galaxy Tab A7 Lite | RAM 3 GB, ROM 32 GB hỗ trợ thẻ nhớ mở rộng l&ecirc;n đến 1 TB" src="https://cdn.tgdd.vn/Products/Images/522/237325/samsung-galaxy-tab-a7-lite-008.jpg" alt="Galaxy Tab A7 Lite | RAM 3 GB, ROM 32 GB hỗ trợ thẻ nhớ mở rộng l&ecirc;n đến 1 TB" data-src="https://cdn.tgdd.vn/Products/Images/522/237325/samsung-galaxy-tab-a7-lite-008.jpg" /></a></p>
          <p>Galaxy Tab A7 Lite trang bị vi&ecirc;n pin 5100 mAh gi&uacute;p m&aacute;y c&oacute; thể hoạt động li&ecirc;n tục trong nhiều giờ liền với c&aacute;c t&aacute;c vụ th&ocirc;ng thường.&nbsp;</p>
          <p>Kh&ocirc;ng chỉ vậy, m&aacute;y cũng hỗ trợ&nbsp;<a title="Tham khảo th&ecirc;m c&aacute;c d&ograve;ng m&aacute;y t&iacute;nh bảng hỗ trợ sạc nhanh tại Thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang-sac-pin-nhanh" target="_blank" type="Tham khảo th&ecirc;m c&aacute;c d&ograve;ng m&aacute;y t&iacute;nh bảng hỗ trợ sạc nhanh tại Thegioididong.com">sạc nhanh</a>&nbsp;l&ecirc;n đến 15 W gi&uacute;p pin được nạp đầy nhanh ch&oacute;ng. Tuy nhi&ecirc;n, sạc đi k&egrave;m m&aacute;y chỉ 7.75 W n&ecirc;n bạn cần mua ri&ecirc;ng phụ kiện tương th&iacute;ch nếu muốn sạc nhanh hơn.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/237325/samsung-galaxy-tab-a7-lite-007.jpg"><img class=" lazyloaded" title="Galaxy Tab A7 Lite | Hỗ trợ sạc nhanh 15 W" src="https://cdn.tgdd.vn/Products/Images/522/237325/samsung-galaxy-tab-a7-lite-007.jpg" alt="Galaxy Tab A7 Lite | Hỗ trợ sạc nhanh 15 W" data-src="https://cdn.tgdd.vn/Products/Images/522/237325/samsung-galaxy-tab-a7-lite-007.jpg" /></a></p>
          <p>Galaxy Tab A7 Lite hỗ trợ đầy đủ c&aacute;c kết nối mạng th&ocirc;ng dụng như Wi-Fi, mạng 4G với tốc độ truy cập nhanh v&agrave; ổn định. Bạn cũng c&oacute; thể lắp được&nbsp;<a title="Tham khảo th&ecirc;m c&aacute;c d&ograve;ng m&aacute;y t&iacute;nh bảng c&oacute; hỗ trợ lắp sim nghe gọi tại Thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang-thuc-hien-cuoc-goi" target="_blank" type="Tham khảo th&ecirc;m c&aacute;c d&ograve;ng m&aacute;y t&iacute;nh bảng c&oacute; hỗ trợ lắp sim nghe gọi tại Thegioididong.com">sim nghe gọi</a>, cho ph&eacute;p Galaxy Tab A7 Lite c&oacute; thể nhận v&agrave; thực hiện được cuộc gọi như&nbsp;<a title="Tham khảo gi&aacute; điện thoại, smartphone ch&iacute;nh h&atilde;ng, nhiều khuyến m&atilde;i HOT nhất tại Thegioididong.com" href="https://www.thegioididong.com/dtdd" target="_blank" type="Tham khảo gi&aacute; điện thoại, smartphone ch&iacute;nh h&atilde;ng, nhiều khuyến m&atilde;i HOT nhất tại Thegioididong.com">điện thoại</a>&nbsp;th&ocirc;ng thường.</p>
          <h3>Thưởng thức chất &acirc;m sống động từ loa stereo</h3>
          <p>Đắm ch&igrave;m trong thế giới giải tr&iacute; với loa stereo c&ocirc;ng nghệ Dolby Atmos mang đến chất &acirc;m lớn v&agrave; sống động, cho bạn trải nghiệm nghe nhạc hay xem phim sẽ c&agrave;ng ho&agrave;n hảo v&agrave; ch&acirc;n thật hơn bao giờ hết.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/237325/samsung-galaxy-tab-a7-lite-005.jpg"><img class=" lazyloaded" title="Galaxy Tab A7 Lite | Đắm ch&igrave;m trong thế giới giải tr&iacute; với loa stereo c&ocirc;ng nghệ Dolby Atmos" src="https://cdn.tgdd.vn/Products/Images/522/237325/samsung-galaxy-tab-a7-lite-005.jpg" alt="Galaxy Tab A7 Lite | Đắm ch&igrave;m trong thế giới giải tr&iacute; với loa stereo c&ocirc;ng nghệ Dolby Atmos" data-src="https://cdn.tgdd.vn/Products/Images/522/237325/samsung-galaxy-tab-a7-lite-005.jpg" /></a></p>
          <p>M&aacute;y cũng trang bị camera sau 8 MP&nbsp;quay được video Full HD v&agrave; camera trước 2 MP hỗ trợ gọi video call cũng như ghi lại những tấm ảnh chụp thường ng&agrave;y của gia đ&igrave;nh v&agrave; cuộc sống xung quanh bạn.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/237325/samsung-galaxy-tab-a7-lite-003.jpg"><img class=" lazyloaded" title="Galaxy Tab A7 Lite | Camera sau 8 MP" src="https://cdn.tgdd.vn/Products/Images/522/237325/samsung-galaxy-tab-a7-lite-003.jpg" alt="Galaxy Tab A7 Lite | Camera sau 8 MP" data-src="https://cdn.tgdd.vn/Products/Images/522/237325/samsung-galaxy-tab-a7-lite-003.jpg" /></a></p>
          <h3>OneUI 3.1 th&ocirc;ng minh, mượt m&agrave; dễ sử dụng</h3>
          <p>Galaxy Tab A7 Lite sử dụng giao diện OneUI 3.1 ho&agrave;n to&agrave;n mới được tối ưu, với c&aacute;c thao t&aacute;c sử dụng v&ocirc; c&ugrave;ng th&acirc;n thiện đơn giản v&agrave; kh&ocirc;ng chứa ứng dụng r&aacute;c g&acirc;y nặng m&aacute;y, đảm bảo cho bạn c&oacute; một trải nghiệm tốt nhất.</p>
          <p>Với mức gi&aacute; phải chăng, cấu h&igrave;nh ổn, m&agrave;n h&igrave;nh lớn nhưng vẫn nhỏ gọn, Galaxy Tab A7 Lite sẽ l&agrave; một trong những sản phẩm ph&ugrave; hợp với mọi người đ&aacute;p ứng tốt nhu cầu học tập cũng như&nbsp;cho nhu cầu giải tr&iacute; hằng ng&agrave;y.</p>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','configuration' => '<table style="height: 183px;" width="797">
          <tbody>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">M&agrave;n h&igrave;nh:</td>
          <td style="width: 390.5px; height: 13px;"><span class="comma">8.7"</span><span class="">TFT LCD</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Hệ điều h&agrave;nh:</td>
          <td style="width: 390.5px; height: 13px;">Android 11</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">RAM:</td>
          <td style="width: 390.5px; height: 13px;">3 GB</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Bộ nhớ trong:</td>
          <td style="width: 390.5px; height: 13px;">32 GB</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Kết nối:</td>
          <td style="width: 390.5px; height: 13px;"><span class="comma">4G</span><span class="">C&oacute; nghe gọi</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">SIM:</td>
          <td style="width: 390.5px; height: 13px;">1 Nano SIM</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Camera sau:</td>
          <td style="width: 390.5px; height: 13px;">8 MP</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Camera trước:</td>
          <td style="width: 390.5px; height: 13px;">2 MP</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Pin, Sạc:</td>
          <td style="width: 390.5px; height: 13px;"><span class="comma">5100 mAh</span><span class="">15 W</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">H&atilde;ng</td>
          <td style="width: 390.5px; height: 13px;">Samsung</td>
          </tr>
          </tbody>
          </table>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','created_at' => '2021-06-27 07:04:00','updated_at' => '2021-06-27 07:04:00','deleted_at' => NULL),
            array('id' => '2','name' => 'Máy tính bảng Huawei MatePad T10s (Nền tảng Huawei Mobile Service)','code' => 'HM1','origin' => 'Hồ Chí Minh','price' => '5140000','picture' => '1624777584.jpg','status' => '1','description' => '<h3>Chiếc&nbsp;<a title="Tham khảo c&aacute;c d&ograve;ng m&aacute;y t&iacute;nh bảng gi&aacute; tốt, ch&iacute;nh h&atilde;ng đang kinh doanh tại Thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang" target="_blank" rel="noopener" type="Tham khảo c&aacute;c d&ograve;ng m&aacute;y t&iacute;nh bảng gi&aacute; tốt, ch&iacute;nh h&atilde;ng đang kinh doanh tại Thegioididong.com">m&aacute;y t&iacute;nh bảng</a>&nbsp;của&nbsp;<a title="Tham khảo c&aacute;c mẫu m&aacute;y t&iacute;nh bảng Huawei gi&aacute; tốt tại Thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang-huawei" target="_blank" rel="noopener" type="Tham khảo c&aacute;c mẫu m&aacute;y t&iacute;nh bảng Huawei gi&aacute; tốt tại Thegioididong.com">Huawei</a>,&nbsp;<a title="Tham khảo m&aacute;y t&iacute;nh bảng Huawei MatePad T10s tại Thegioididong.com " href="https://www.thegioididong.com/may-tinh-bang/huawei-matepad-t10s" target="_blank" rel="noopener">Huawei MatePad T10s</a>&nbsp;cũng đ&atilde; ch&iacute;nh thức được ch&agrave;o s&acirc;n. Với vi xử l&yacute; 8 nh&acirc;n mở ra một thế giới giải tr&iacute; mượt m&agrave;, sống động từng khoảnh khắc với m&agrave;n h&igrave;nh cực lớn, h&eacute; lộ một chiếc m&aacute;y t&iacute;nh bảng tốt trong tầm gi&aacute; m&agrave; bất kỳ ai cũng đều y&ecirc;u th&iacute;ch.</h3>
          <p><strong>Sản phẩm chạy hệ điều h&agrave;nh Android tr&ecirc;n nền tảng Huawei Mobile Service (HMS):</strong><br />- Tải ứng dụng tr&ecirc;n cửa h&agrave;ng Huawei AppGallery thay cho CH Play.<br />- Ngo&agrave;i ra, kh&aacute;ch h&agrave;ng c&oacute; thể t&igrave;m ứng dụng bằng Petal Search nếu c&aacute;c ứng dụng kh&ocirc;ng c&oacute; sẵn tr&ecirc;n Huawei AppGallery.<br />- Kh&ocirc;ng c&agrave;i đặt sẵn c&aacute;c ứng dụng / game sử dụng dịch vụ, t&agrave;i khoản Google như: Google Maps, Google Drive, Gmail,...<br />-&nbsp;<a title="Hướng dẫn c&agrave;i đặt ứng dụng cho thiết bị Huawei" href="https://www.thegioididong.com/tin-tuc/cach-cai-ch-play-youtube-drive-len-dien-thoai-huawei-khong-co-google-1354300" target="_blank" rel="noopener">Hướng dẫn c&agrave;i đặt ứng dụng cho thiết bị Huawei</a>.</p>
          <h3>Giải tr&iacute; sống động với m&agrave;n h&igrave;nh cực lớn</h3>
          <p>MatePad T10s sở hữu&nbsp;<a title="Tham khảo c&aacute;c mẫu m&aacute;y t&iacute;nh bảng c&oacute; k&iacute;ch thước m&agrave;n h&igrave;nh từ 10 đến 11 inch tại Thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang-khoang-10-den-11-inch" target="_blank" rel="noopener" type="Tham khảo c&aacute;c mẫu m&aacute;y t&iacute;nh bảng c&oacute; k&iacute;ch thước m&agrave;n h&igrave;nh từ 10 đến 11 inch tại Thegioididong.com">m&agrave;n h&igrave;nh 10.1 inch</a>&nbsp;tr&agrave;n đều c&acirc;n xứng ho&agrave;n hảo ở cả 4 cạnh viền. Gi&uacute;p cho thiết bị c&oacute; một thiết kế gọn, nhẹ v&agrave; mỏng hơn, từng giờ ph&uacute;t trải nghiệm l&agrave; đều l&agrave; sự thoải m&aacute;i.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/233257/huawei-matepad-t10s-181121-031133.jpg"><img class=" ls-is-cached lazyloaded" title="M&agrave;n h&igrave;nh mỏng, cầm nhẹ tr&ecirc;n tay | Huawei MatePad T10s" src="https://cdn.tgdd.vn/Products/Images/522/233257/huawei-matepad-t10s-181121-031133.jpg" alt="M&agrave;n h&igrave;nh mỏng, cầm nhẹ tr&ecirc;n tay | Huawei MatePad T10s" data-src="https://cdn.tgdd.vn/Products/Images/522/233257/huawei-matepad-t10s-181121-031133.jpg" /></a></p>
          <p>Sử dụng tấm nền IPS LCD c&oacute; độ ph&acirc;n giải 1200 x 1920 pixels cho bạn tận hưởng c&aacute;c nội dung giải tr&iacute; lớn hơn, r&otilde; r&agrave;ng hơn với độ sắc n&eacute;t tuyệt vời, nội dung sẽ linh hoạt thay đổi mượt m&agrave; theo chiều cầm ngang hay dọc.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/233257/huawei-matepad-t10s-180921-030921.jpg"><img class=" ls-is-cached lazyloaded" title="M&agrave;n h&igrave;nh lớn sắc n&eacute;t | Huawei MatePad T10s" src="https://cdn.tgdd.vn/Products/Images/522/233257/huawei-matepad-t10s-180921-030921.jpg" alt="M&agrave;n h&igrave;nh lớn sắc n&eacute;t | Huawei MatePad T10s" data-src="https://cdn.tgdd.vn/Products/Images/522/233257/huawei-matepad-t10s-180921-030921.jpg" /></a></p>
          <p>C&ocirc;ng nghệ xử l&yacute; h&igrave;nh ảnh HUAWEI ClariVu độc quyền gi&uacute;p tăng cường chất lượng h&igrave;nh ảnh v&agrave; c&acirc;n bằng m&agrave;u sắc trong nhiều điều kiện kh&aacute;c nhau mang đến trải nghiệm giải tr&iacute; ấn tượng hơn.</p>
          <p><a class="preventdefault" href="https://cdn.tgdd.vn/2021/01/content/huawei-matepad-t10s-20-800x533.jpg"><img class=" ls-is-cached lazyloaded" title="Thay đổi m&agrave;u m&agrave;n h&igrave;nh ph&ugrave; hợp cho mắt | Huawei MatePad T10s" src="https://cdn.tgdd.vn/2021/01/content/huawei-matepad-t10s-20-800x533.jpg" alt="Thay đổi m&agrave;u m&agrave;n h&igrave;nh ph&ugrave; hợp cho mắt | Huawei MatePad T10s" data-src="https://cdn.tgdd.vn/2021/01/content/huawei-matepad-t10s-20-800x533.jpg" /></a></p>
          <p>M&agrave;n h&igrave;nh MatePad T10s đạt chứng nhận bảo vệ mắt T&Uuml;V Rheinland giảm lượng &aacute;nh s&aacute;ng xanh c&oacute; hại, giữ cho đ&ocirc;i mắt của bạn lu&ocirc;n dễ chịu khi sử dụng trong nhiều giờ liền.</p>
          <h3>Loa k&eacute;p Harman Kardon cho chất &acirc;m v&ograve;m ấn tượng</h3>
          <p>Kh&ocirc;ng chỉ c&oacute; phần nh&igrave;n ấn tượng, m&agrave; phần nghe tr&ecirc;n MatePad T10s cũng được đ&aacute;nh gi&aacute; cao khi trang bị bộ đ&ocirc;i loa ngo&agrave;i đối xứng, giả lập hiệu ứng &acirc;m thanh v&ograve;m 3D Histen 6.1 Sound n&acirc;ng tầm trải nghiệm mỗi khi chơi game hay xem phim.</p>
          <p><a class="preventdefault" href="https://cdn.tgdd.vn/2021/01/content/huawei-matepad-t10s-1-800x533.jpg"><img class=" ls-is-cached lazyloaded" title="Hỗ trợ &acirc;m thanh v&ograve;m | Huawei MatePad T10s" src="https://cdn.tgdd.vn/2021/01/content/huawei-matepad-t10s-1-800x533.jpg" alt="Hỗ trợ &acirc;m thanh v&ograve;m | Huawei MatePad T10s" data-src="https://cdn.tgdd.vn/2021/01/content/huawei-matepad-t10s-1-800x533.jpg" /></a></p>
          <p>Chất &acirc;m của T10s đ&atilde; được tinh chỉnh bởi Harman Kardon gi&uacute;p &acirc;m thanh trở n&ecirc;n r&otilde; r&agrave;ng, h&agrave;i h&ograve;a tr&ecirc;n mọi &acirc;m vực, thể hiện đ&uacute;ng sắc th&aacute;i đặc trưng của b&agrave;i h&aacute;t.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/233257/huawei-matepad-t10s-180921-030951.jpg"><img class=" lazyloaded" title="&Acirc;m thanh tinh chỉnh bới Harman Kardon | Huawei MatePad T10s" src="https://cdn.tgdd.vn/Products/Images/522/233257/huawei-matepad-t10s-180921-030951.jpg" alt="&Acirc;m thanh tinh chỉnh bới Harman Kardon | Huawei MatePad T10s" data-src="https://cdn.tgdd.vn/Products/Images/522/233257/huawei-matepad-t10s-180921-030951.jpg" /></a></p>
          <h3>Vi xử l&yacute; 8 nh&acirc;n nhanh v&agrave; si&ecirc;u ổn định</h3>
          <p>Trải nghiệm sự mượt m&agrave; đến từ vi xử l&yacute; 8 nh&acirc;n Kirin 710A, mang đến hiệu năng vượt trội trong tầm gi&aacute;, lướt chạm mượt m&agrave;, ứng dụng k&iacute;ch hoạt nhanh ch&oacute;ng, thỏa sức tận hưởng thế giới giải tr&iacute; th&uacute; vị đến từ kho ứng dụng AppGallery của Huawei.</p>
          <p><a class="preventdefault" href="https://cdn.tgdd.vn/2021/01/content/huawei-matepad-t10s-16-800x533.jpg"><img class=" lazyloaded" title="Giải tr&iacute; ổn định | Huawei MatePad T10s" src="https://cdn.tgdd.vn/2021/01/content/huawei-matepad-t10s-16-800x533.jpg" alt="Giải tr&iacute; ổn định | Huawei MatePad T10s" data-src="https://cdn.tgdd.vn/2021/01/content/huawei-matepad-t10s-16-800x533.jpg" /></a></p>
          <p>B&ecirc;n cạnh đ&oacute;, trang bị&nbsp;<a title="Tham khảo c&aacute;c d&ograve;ng m&aacute;y t&iacute;nh bảng c&oacute; dung lượng RAM từ 3 GB đến 4 GB tại Thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang-ram-duoi-4gb" target="_blank" rel="noopener" type="Tham khảo c&aacute;c d&ograve;ng m&aacute;y t&iacute;nh bảng c&oacute; dung lượng RAM từ 3 GB đến 4 GB tại Thegioididong.com">3 GB RAM</a>&nbsp;cho đa nhiệm ổn định v&agrave;&nbsp;<a title="Tham khảo c&aacute;c d&ograve;ng m&aacute;y t&iacute;nh bảng c&oacute; bộ nhớ trong 32 GB - 64 GB cho nhu cầu lưu trữ cơ bản tại Thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang-rom-32-den-64gb" target="_blank" rel="noopener" type="Tham khảo c&aacute;c d&ograve;ng m&aacute;y t&iacute;nh bảng c&oacute; bộ nhớ trong 32 GB - 64 GB cho nhu cầu lưu trữ cơ bản tại Thegioididong.com">bộ nhớ trong 64 GB</a>, gi&uacute;p lưu trữ thoải m&aacute;i dữ liệu, ứng dụng, nội dung tải xuống, đồng thời mang đến sự ổn định khi mở c&ugrave;ng l&uacute;c 2 cửa sổ tr&ecirc;n một m&agrave;n h&igrave;nh, hay chuyển đổi ứng dụng mượt m&agrave; hơn.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/233257/huawei-matepad-t10s-181021-031055.jpg"><img class=" lazyloaded" title="Hỗ trợ thẻ nhớ ngo&agrave;i MicroSD tối đa 256 GB | Huawei MatePad T10s" src="https://cdn.tgdd.vn/Products/Images/522/233257/huawei-matepad-t10s-181021-031055.jpg" alt="Hỗ trợ thẻ nhớ ngo&agrave;i MicroSD tối đa 256 GB | Huawei MatePad T10s" data-src="https://cdn.tgdd.vn/Products/Images/522/233257/huawei-matepad-t10s-181021-031055.jpg" /></a></p>
          <h3>EMUI 10.1 đa nhiệm tốt hơn, hỗ trợ kh&ocirc;ng gian ri&ecirc;ng cho b&eacute;.</h3>
          <p>EMUI 10.1 hoạt động tr&ecirc;n Android 10 m&atilde; nguồn mở với nhiều t&iacute;nh năng hấp dẫn. T&iacute;nh năng HUAWEI App Multiplier tận dụng m&agrave;n h&igrave;nh lớn cho ph&eacute;p bạn mở c&ugrave;ng l&uacute;c 2 cửa sổ ứng dụng hoạt động ri&ecirc;ng biệt, l&agrave;m 2 việc c&ugrave;ng l&uacute;c gi&uacute;p cho c&ocirc;ng việc của bạn được xử l&yacute; nhanh ch&oacute;ng v&agrave; hiệu quả hơn.</p>
          <p><a class="preventdefault" href="https://cdn.tgdd.vn/2021/01/content/huawei-matepad-t10s-3-800x533.jpg"><img class=" lazyloaded" title="Chạy đa nhiệm tốt | Huawei MatePad T10s" src="https://cdn.tgdd.vn/2021/01/content/huawei-matepad-t10s-3-800x533.jpg" alt="Chạy đa nhiệm tốt | Huawei MatePad T10s" data-src="https://cdn.tgdd.vn/2021/01/content/huawei-matepad-t10s-3-800x533.jpg" /></a></p>
          <p>MatePad T10s c&ograve;n l&agrave; chiếc m&aacute;y t&iacute;nh bảng được hội phụ huynh tin tưởng chọn lựa cho trẻ với Kids Corner, mở ra một thế giới trẻ thơ d&agrave;nh ri&ecirc;ng cho b&eacute;. M&agrave;n h&igrave;nh giảm &aacute;nh s&aacute;ng xanh 6 lớp với độ s&aacute;ng được căn chỉnh hợp l&yacute; bảo vệ mắt b&eacute; tốt hơn.&nbsp;</p>
          <p><a class="preventdefault" href="https://cdn.tgdd.vn/2021/01/content/huawei-matepad-t10s-10-800x533.jpg"><img class=" lazyloaded" title="C&oacute; ứng dụng cho trẻ em | Huawei MatePad T10s" src="https://cdn.tgdd.vn/2021/01/content/huawei-matepad-t10s-10-800x533.jpg" alt="C&oacute; ứng dụng cho trẻ em | Huawei MatePad T10s" data-src="https://cdn.tgdd.vn/2021/01/content/huawei-matepad-t10s-10-800x533.jpg" /></a></p>
          <h3>Pin 5100 mAh giải tr&iacute;, l&agrave;m việc li&ecirc;n tục nhiều giờ liền</h3>
          <p>MatePad T10s được trang bị vi&ecirc;n pin lớn 5100 mAh thoải m&aacute;i cho bạn giải tr&iacute; hay l&agrave;m việc li&ecirc;n tục trong nhiều giờ liền. Ở bất kỳ kh&ocirc;ng gian v&agrave; thời gian n&agrave;o, MatePad T10s sẽ lu&ocirc;n sẵn s&agrave;ng gi&uacute;p bạn ho&agrave;n th&agrave;nh c&ocirc;ng việc nhanh ch&oacute;ng.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/233257/huawei-matepad-t10s-181021-031042.jpg"><img class=" lazyloaded" title="Giải tr&iacute; suốt cả ng&agrave;y với vi&ecirc;n pin 5100 mAh | Huawei MatePad T10s" src="https://cdn.tgdd.vn/Products/Images/522/233257/huawei-matepad-t10s-181021-031042.jpg" alt="Giải tr&iacute; suốt cả ng&agrave;y với vi&ecirc;n pin 5100 mAh | Huawei MatePad T10s" data-src="https://cdn.tgdd.vn/Products/Images/522/233257/huawei-matepad-t10s-181021-031042.jpg" /></a></p>
          <p>Kh&ocirc;ng chỉ vậy, MatePad T10s c&ograve;n c&oacute; đầy đủ cả camera trước sau. Camera sau 5 MP, hỗ trợ quay phim Full HD đủ để cho bạn ghi lại những kỉ niệm đ&aacute;ng nhớ b&ecirc;n gia đ&igrave;nh hay khoảnh khắc th&uacute; vị xung quanh bạn. Camera trước 2 MP sẽ hỗ trợ những cuộc gọi video call r&otilde; n&eacute;t hay tỏa s&aacute;ng với những tấm ảnh selfie thần th&aacute;i.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/233257/huawei-matepad-t10s-180921-030959.jpg"><img class=" lazyloaded" title="Camera sau tr&ecirc;n m&aacute;y | Huawei MatePad T10s" src="https://cdn.tgdd.vn/Products/Images/522/233257/huawei-matepad-t10s-180921-030959.jpg" alt="Camera sau tr&ecirc;n m&aacute;y | Huawei MatePad T10s" data-src="https://cdn.tgdd.vn/Products/Images/522/233257/huawei-matepad-t10s-180921-030959.jpg" /></a></p>
          <p>T&oacute;m lại, MatePad T10s đ&aacute;p ứng tốt mọi nhu cầu bạn cần ở một chiếc m&aacute;y t&iacute;nh bảng từ giải tr&iacute; cho đến c&ocirc;ng việc. Với mức gi&aacute; rẻ dễ tiếp cận, MatePad T10s l&agrave; chiếc m&aacute;y t&iacute;nh bảng l&agrave;m ra để h&agrave;i l&ograve;ng tất cả mọi người từ học sinh, nh&acirc;n vi&ecirc;n văn ph&ograve;ng, trẻ em, người lớn tuổi đều sẽ y&ecirc;u th&iacute;ch mỗi khi sử dụng.</p>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','configuration' => '<table style="height: 183px;" width="797">
          <tbody>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">M&agrave;n h&igrave;nh:</td>
          <td style="width: 390.5px; height: 13px;"><span class="comma">8.7"</span><span class="">TFT LCD</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Hệ điều h&agrave;nh:</td>
          <td style="width: 390.5px; height: 13px;">Android 11</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">RAM:</td>
          <td style="width: 390.5px; height: 13px;">3 GB</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Bộ nhớ trong:</td>
          <td style="width: 390.5px; height: 13px;">32 GB</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Kết nối:</td>
          <td style="width: 390.5px; height: 13px;"><span class="comma">4G</span><span class="">C&oacute; nghe gọi</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">SIM:</td>
          <td style="width: 390.5px; height: 13px;">1 Nano SIM</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Camera sau:</td>
          <td style="width: 390.5px; height: 13px;">8 MP</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Camera trước:</td>
          <td style="width: 390.5px; height: 13px;">2 MP</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Pin, Sạc:</td>
          <td style="width: 390.5px; height: 13px;"><span class="comma">5100 mAh</span><span class="">15 W</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">H&atilde;ng</td>
          <td style="width: 390.5px; height: 13px;">Samsung</td>
          </tr>
          </tbody>
          </table>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','created_at' => '2021-06-27 07:06:24','updated_at' => '2021-06-27 07:06:24','deleted_at' => NULL),
            array('id' => '3','name' => 'Máy tính bảng Samsung Galaxy Tab A7 (2020)','code' => 'SST2','origin' => 'Thái Bình','price' => '7990000','picture' => '1624777648.jpg','status' => '1','description' => '<h3><a title="Tham khảo gi&aacute; m&aacute;y t&iacute;nh bảng Samsung Galaxy Tab A7 (2020) ch&iacute;nh h&atilde;ng" href="https://www.thegioididong.com/may-tinh-bang/samsung-galaxy-tab-a7-2020" target="_blank">Samsung Galaxy Tab A7 (2020)</a>&nbsp;l&agrave; một chiếc&nbsp;<a title="Tham khảo gi&aacute; m&aacute;y t&iacute;nh bảng, tablet ch&iacute;nh h&atilde;ng" href="https://www.thegioididong.com/may-tinh-bang" target="_blank">m&aacute;y t&iacute;nh bảng</a>&nbsp;c&oacute; thiết kế đẹp, cấu h&igrave;nh kh&aacute;, nhiều t&iacute;nh năng tiện &iacute;ch, một c&ocirc;ng cụ đắc lực hỗ trợ bạn trong c&ocirc;ng việc cũng như trong học tập hay giải tr&iacute;.</h3>
          <h3>M&agrave;n h&igrave;nh lớn cho trải nghiệm bất tận</h3>
          <p>Chiếc Galaxy Tab A7 mang kh&aacute; nhiều n&eacute;t kế thừa từ người đ&agrave;n anh ở ph&acirc;n kh&uacute;c cao cấp l&agrave;&nbsp;<a title="Tham khảo gi&aacute; m&aacute;y t&iacute;nh bảng Samsung Galaxy Tab S7 ch&iacute;nh h&atilde;ng" href="https://www.thegioididong.com/may-tinh-bang/samsung-galaxy-tab-s7" target="_blank">Galaxy Tab S7</a>&nbsp;vừa ra mắt kh&ocirc;ng l&acirc;u, sở hữu thiết kế nguy&ecirc;n khối cứng c&aacute;p liền mạch, được ho&agrave;n thiện từ nh&ocirc;m đi k&egrave;m khung viền kim loại sang trọng, ấn tượng.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/228144/samsung-galaxy-tab-a7-2020-200620-110645.jpg"><img class=" ls-is-cached lazyloaded" title="Thiết kế nguy&ecirc;n khối liền mạch, cứng c&aacute;p | Galaxy Tab A7" src="https://cdn.tgdd.vn/Products/Images/522/228144/samsung-galaxy-tab-a7-2020-200620-110645.jpg" alt="Thiết kế nguy&ecirc;n khối liền mạch, cứng c&aacute;p | Galaxy Tab A7" data-src="https://cdn.tgdd.vn/Products/Images/522/228144/samsung-galaxy-tab-a7-2020-200620-110645.jpg" /></a></p>
          <p>Hơn nữa, trọng lượng m&aacute;y cũng tương đối nhẹ v&agrave; độ mỏng chỉ 7 mm n&ecirc;n nh&igrave;n bằng mắt thường cũng c&oacute; thể thấy ngoại h&igrave;nh gọn nhẹ của n&oacute;, rất thoải m&aacute;i để bạn cầm nắm&nbsp;tay hay cho v&agrave;o t&uacute;i x&aacute;ch.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/228144/samsung-galaxy-tab-a7-2020-200320-110330.jpg"><img class=" ls-is-cached lazyloaded" title="Cầm nắm dễ d&agrave;ng, thuận tiện | Galaxy Tab A7" src="https://cdn.tgdd.vn/Products/Images/522/228144/samsung-galaxy-tab-a7-2020-200320-110330.jpg" alt="Cầm nắm dễ d&agrave;ng, thuận tiện | Galaxy Tab A7" data-src="https://cdn.tgdd.vn/Products/Images/522/228144/samsung-galaxy-tab-a7-2020-200320-110330.jpg" /></a></p>
          <p>Ph&iacute;a trước m&aacute;y t&iacute;nh bảng Galaxy Tab A7 (2020) l&agrave; m&agrave;n h&igrave;nh giải tr&iacute; k&iacute;ch thước lớn 10.4 inch, độ ph&acirc;n giải (1200 x 2000 Pixels) hiển thị h&igrave;nh ảnh nịnh mắt, c&oacute; độ sắc n&eacute;t cao, m&agrave;u sắc t&aacute;i tạo rực rỡ, độ chi tiết v&agrave; độ sắc tương phản đạt chuẩn.&nbsp;</p>
          <p>Sử dụng tấm nền TFT LCD, chiếc tablet cho độ s&aacute;ng m&agrave;n h&igrave;nh đạt kh&aacute; cao v&agrave; chất lượng h&igrave;nh ảnh vẫn v&ocirc; c&ugrave;ng ch&acirc;n thực, đặc biệt tốt với mọi g&oacute;c nh&igrave;n, th&ocirc;ng tin hiển thị vẫn r&otilde; n&eacute;t m&agrave; kh&ocirc;ng c&oacute; hiện tượng ch&oacute;i, l&oacute;a.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/228144/samsung-galaxy-tab-a7-2020-200320-110312.jpg"><img class=" ls-is-cached lazyloaded" title="M&agrave;n h&igrave;nh hiển thi r&otilde; n&eacute;t | Galaxy Tab A7" src="https://cdn.tgdd.vn/Products/Images/522/228144/samsung-galaxy-tab-a7-2020-200320-110312.jpg" alt="M&agrave;n h&igrave;nh hiển thi r&otilde; n&eacute;t | Galaxy Tab A7" data-src="https://cdn.tgdd.vn/Products/Images/522/228144/samsung-galaxy-tab-a7-2020-200320-110312.jpg" /></a></p>
          <p>Một điều đ&aacute;ng ch&uacute; &yacute; tr&ecirc;n Galaxy Tab A7 (2020) nữa l&agrave; m&agrave;n h&igrave;nh n&agrave;y được thiết kế theo tỷ lệ 5:3 kh&aacute; l&yacute; tưởng cho trải nghiệm giải tr&iacute; cũng như thao t&aacute;c sử dụng hằng ng&agrave;y như lướt web, check mail, đọc s&aacute;ch, xem video,...</p>
          <h3>Hiệu năng tốt, đa nhiệm mượt m&agrave;</h3>
          <p>B&ecirc;n trong Samsung Galaxy Tab A7 (2020) l&agrave; bộ vi xử l&yacute; Snapdragon 662 gồm 4 l&otilde;i 2.0 GHz v&agrave; 4 lỗi 1.8 Ghz được sản xuất theo tiến tr&igrave;nh 11 nm mang đến hiệu năng ổn định, đảm bảo c&aacute;c t&aacute;c vụ lu&ocirc;n được xử l&yacute; một c&aacute;ch mượt m&agrave;, hiếm khi xảy ra hiện tượng giật lag.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/228144/samsung-galaxy-tab-a7-2020-201120-111154.jpg"><img class=" lazyloaded" title="Chip Snapdragon 662 cho hiệu năng mạnh mẽ | Galaxy Tab S7" src="https://cdn.tgdd.vn/Products/Images/522/228144/samsung-galaxy-tab-a7-2020-201120-111154.jpg" alt="Chip Snapdragon 662 cho hiệu năng mạnh mẽ | Galaxy Tab S7" data-src="https://cdn.tgdd.vn/Products/Images/522/228144/samsung-galaxy-tab-a7-2020-201120-111154.jpg" /></a></p>
          <p>B&ecirc;n cạnh đ&oacute; chipset n&agrave;y c&ograve;n được hỗ trợ bởi&nbsp;<a title="Tham khảo m&aacute;y t&iacute;nh bảng RAM 3 GB tại thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang-ram-3gb" target="_blank">RAM 3 GB</a>&nbsp;đi k&egrave;m với 64 GB dung lượng bộ nhớ trong, hỗ trợ thẻ MicroSD với độ lớn tối đa l&ecirc;n với 1 TB.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/228144/samsung-galaxy-tab-a7-2020-200320-110339.jpg"><img class=" lazyloaded" title="Hỗ trợ mở rộng dung lượng | Galaxy Tab A7" src="https://cdn.tgdd.vn/Products/Images/522/228144/samsung-galaxy-tab-a7-2020-200320-110339.jpg" alt="Hỗ trợ mở rộng dung lượng | Galaxy Tab A7" data-src="https://cdn.tgdd.vn/Products/Images/522/228144/samsung-galaxy-tab-a7-2020-200320-110339.jpg" /></a></p>
          <p>Qua phần test hiệu năng tr&ecirc;n Antutu, Galaxy Tab A7 đạt được 172.259 điểm với số điểm n&agrave;y ho&agrave;n to&agrave;n c&oacute; thể chơi ổn định tr&ecirc;n c&aacute;c tựa game phổ biến hiện nay như Li&ecirc;n Qu&acirc;n Mobile, PUBG Mobile... ở mức cấu h&igrave;nh t&ugrave;y chỉnh ph&ugrave; hợp.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/228144/samsung-galaxy-tab-a7-2020-042620-082616.jpg"><img class=" lazyloaded" title="Antutu 172.259 điểm | Samsung Galaxy Tab A7" src="https://cdn.tgdd.vn/Products/Images/522/228144/samsung-galaxy-tab-a7-2020-042620-082616.jpg" alt="Antutu 172.259 điểm | Samsung Galaxy Tab A7" data-src="https://cdn.tgdd.vn/Products/Images/522/228144/samsung-galaxy-tab-a7-2020-042620-082616.jpg" /></a></p>
          <p>Cũng giống như c&aacute;c thế hệ smartphone&nbsp;<a title="Tham khảo th&ecirc;m m&aacute;y t&iacute;nh bảng Samsung ch&iacute;nh h&atilde;ng" href="https://www.thegioididong.com/may-tinh-bang-samsung" target="_blank">Samsung</a>&nbsp;2020, Galaxy Tab A7 được c&agrave;i đặt sẵn hệ điều h&agrave;nh Android 10 t&ugrave;y biến tr&ecirc;n giao diện OneUI 2.1 mới nhất, th&acirc;n thiện dễ sử dụng, gi&uacute;p cho trải nghiệm sử dụng th&ecirc;m phần trơn tru v&agrave; th&uacute; vị hơn hẳn.</p>
          <h3>Camera cho h&igrave;nh ảnh sắc n&eacute;t</h3>
          <p>Samsung Galaxy Tab A7 (2020) sở hữu hệ thống camera ch&iacute;nh độ ph&acirc;n giải 8 MP vừa đủ để đ&aacute;p ứng trải nghiệm cơ bản của người d&ugrave;ng cho chất lượng h&igrave;nh ảnh ổn định, m&agrave;u sắc h&agrave;i h&ograve;a.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/228144/samsung-galaxy-tab-a7-2020-200320-110318.jpg"><img class=" lazyloaded" title="Camera sau 8 MP | Galaxy Tab A7" src="https://cdn.tgdd.vn/Products/Images/522/228144/samsung-galaxy-tab-a7-2020-200320-110318.jpg" alt="Camera sau 8 MP | Galaxy Tab A7" data-src="https://cdn.tgdd.vn/Products/Images/522/228144/samsung-galaxy-tab-a7-2020-200320-110318.jpg" /></a></p>
          <p>Cụm n&agrave;y vừa đủ để đ&aacute;p ứng tốt c&aacute;c trải nghiệm cơ bản của người d&ugrave;ng như chụp ảnh, quay video trong điều kiện đầy đủ &aacute;nh s&aacute;ng.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/228144/samsung-galaxy-tab-a7-2020-200320-110347.jpg"><img class=" lazyloaded" title="Đ&aacute;p ứng đầy đủ c&aacute;c nhu cầu chụp ảnh | Galaxy Tab A7" src="https://cdn.tgdd.vn/Products/Images/522/228144/samsung-galaxy-tab-a7-2020-200320-110347.jpg" alt="Đ&aacute;p ứng đầy đủ c&aacute;c nhu cầu chụp ảnh | Galaxy Tab A7" data-src="https://cdn.tgdd.vn/Products/Images/522/228144/samsung-galaxy-tab-a7-2020-200320-110347.jpg" /></a></p>
          <p>B&ecirc;n cạnh đ&oacute;, camera trước của m&aacute;y c&oacute; độ ph&acirc;n giải 5 MP được t&iacute;ch hợp th&ecirc;m nhiều t&iacute;nh năng hấp dẫn như l&agrave;m đẹp tự nhi&ecirc;n, cho người d&ugrave;ng thoải m&aacute;i chụp h&igrave;nh selfie được dễ d&agrave;ng, v&agrave; chất lượng đẹp nhất.</p>
          <p>Chế độ Kids Mode sẽ mang đến cho bạn nhiều ứng dụng th&acirc;n thiện với trẻ em, để b&eacute; vừa học vừa chơi v&agrave; ph&aacute;t triển sở th&iacute;ch, t&agrave;i năng.</p>
          <p>Bạn sẽ kh&ocirc;ng cần lo lắng khi trẻ sử dụng m&aacute;y qu&aacute; nhiều nữa, v&igrave; đ&atilde; c&oacute; t&iacute;nh năng c&agrave;i đặt giới hạn thời gian d&agrave;nh ri&ecirc;ng cho trẻ em.</p>
          <h3>Thời lượng pin lớn, c&oacute; hỗ trợ sạc nhanh</h3>
          <p>Galaxy Tab A7 c&oacute; vi&ecirc;n pin l&ecirc;n đến 7040 mAh cho thời gian trải nghiệm tương đương 2 &ndash; 3 ng&agrave;y khi thực thi c&aacute;c t&aacute;c vụ cơ bản.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/228144/samsung-galaxy-tab-a7-2020-200320-110324.jpg"><img class=" lazyloaded" title="Nạp đầy năng lượng th&ocirc;ng qua cổng sạc Type-C | Galaxy Tab A7" src="https://cdn.tgdd.vn/Products/Images/522/228144/samsung-galaxy-tab-a7-2020-200320-110324.jpg" alt="Nạp đầy năng lượng th&ocirc;ng qua cổng sạc Type-C | Galaxy Tab A7" data-src="https://cdn.tgdd.vn/Products/Images/522/228144/samsung-galaxy-tab-a7-2020-200320-110324.jpg" /></a></p>
          <p>Với mức pin lớn như vậy dĩ nhi&ecirc;n m&aacute;y sẽ được hỗ trợ sạc nhanh qua cổng USB Type C, bạn sẽ kh&ocirc;ng phải lo lắng mất kha kh&aacute; thời gian để nạp đầy vi&ecirc;n pin n&agrave;y.&nbsp;</p>
          <p>Ngo&agrave;i ra, Galaxy Tab A7 (2020) c&ograve;n sở hữu tận hai loa đặt ở cạnh dưới, cặp loa n&agrave;y mang đến những trải nghiệm &acirc;m thanh v&ocirc; c&ugrave;ng ấn tượng nhờ v&agrave;o c&ocirc;ng nghệ &acirc;m thanh Dolby Atmos, đặc biệt ở c&aacute;c trải nghiệm xem phim, chơi game, nghe nhạc chất lượng cao.</p>
          <p>C&oacute; thể n&oacute;i Galaxy Tab A7 (2020) l&agrave; một chiếc m&aacute;y t&iacute;nh bảng thuộc ph&acirc;n kh&uacute;c tầm trung nhằm hướng đến nh&oacute;m người d&ugrave;ng chỉ c&oacute; nhu cầu vừa phải, kh&ocirc;ng cần phải chi một khoản tiền lớn để mua một thiết bị vượt qu&aacute; nhu cầu, nhưng vẫn được trang bị nhiều t&iacute;nh năng hiện đại, đ&aacute;p ứng tốt nhu cầu sử dụng của người d&ugrave;ng.</p>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','configuration' => '<table style="height: 183px;" width="797">
          <tbody>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">M&agrave;n h&igrave;nh:</td>
          <td style="width: 390.5px; height: 13px;"><span class="comma">8.7"</span><span class="">TFT LCD</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Hệ điều h&agrave;nh:</td>
          <td style="width: 390.5px; height: 13px;">Android 11</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">RAM:</td>
          <td style="width: 390.5px; height: 13px;">3 GB</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Bộ nhớ trong:</td>
          <td style="width: 390.5px; height: 13px;">32 GB</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Kết nối:</td>
          <td style="width: 390.5px; height: 13px;"><span class="comma">4G</span><span class="">C&oacute; nghe gọi</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">SIM:</td>
          <td style="width: 390.5px; height: 13px;">1 Nano SIM</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Camera sau:</td>
          <td style="width: 390.5px; height: 13px;">8 MP</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Camera trước:</td>
          <td style="width: 390.5px; height: 13px;">2 MP</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Pin, Sạc:</td>
          <td style="width: 390.5px; height: 13px;"><span class="comma">5100 mAh</span><span class="">15 W</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">H&atilde;ng</td>
          <td style="width: 390.5px; height: 13px;">Samsung</td>
          </tr>
          </tbody>
          </table>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','created_at' => '2021-06-27 07:07:28','updated_at' => '2021-06-27 07:07:28','deleted_at' => NULL),
            array('id' => '4','name' => 'Máy tính bảng Lenovo Tab M10 - FHD Plus','code' => 'LT2','origin' => 'Thái Nguyên','price' => '5490000','picture' => '1624777723.jpg','status' => '1','description' => '<h3>Từ việc sử dụng c&aacute;c thiết bị điện tử đa dạng của c&aacute;c gia đ&igrave;nh hiện nay,&nbsp;<a title="Tham khảo c&aacute;c sản phẩm m&aacute;y t&iacute;nh bảng Lenovo tại Thế Giới Di Động" href="https://www.thegioididong.com/may-tinh-bang-lenovo" target="_blank">Lenovo</a>&nbsp;đ&atilde; nắm bắt được nhu cầu thiết yếu n&agrave;y v&agrave; cho ra mắt chiếc m&aacute;y t&iacute;nh bảng&nbsp;<a title="Tham khảo sản phẩm m&aacute;y t&iacute;nh bảng Lenovo Tab M10 - FHD Plus tại Thế Giới Di Động" href="https://www.thegioididong.com/may-tinh-bang/lenovo-tab-m10-fhd-plus" target="_blank">Lenovo Tab M10 - FHD Plus</a>&nbsp;với những t&iacute;nh năng tiện &iacute;ch ấn tượng, &ldquo;kho&aacute;c chiếc &aacute;o&rdquo; của thời đại v&agrave; c&oacute; mức gi&aacute; si&ecirc;u ưu đ&atilde;i.</h3>
          <h3>M&aacute;y t&iacute;nh bảng tiện dụng, gọn nhẹ v&agrave; linh hoạt</h3>
          <p>Lenovo Tab M10 - FHD Plus được bảo vệ ho&agrave;n to&agrave;n bởi khung kim loại rắn chắc, c&aacute;c cạnh viền hơi vu&ocirc;ng, cong uyển chuyển, s&aacute;ng b&oacute;ng. Chiếc&nbsp;<a title="Tham khảo c&aacute;c sản phẩm m&aacute;y t&iacute;nh bảng tại Thế Giới Di Động" href="https://www.thegioididong.com/may-tinh-bang" target="_blank">m&aacute;y t&iacute;nh bảng</a>&nbsp;sở hữu vẻ ngo&agrave;i to&aacute;t l&ecirc;n vẻ hiện đại thời thượng trong thiết kế đơn giản m&agrave; đầy thu h&uacute;t.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/235365/lenovo-tab-m10-fhd-plus-001.jpg"><img class=" ls-is-cached lazyloaded" title="Lenovo Tab M10 - FHD Plus | Thiết kế thời thượng, chắc chắn" src="https://cdn.tgdd.vn/Products/Images/522/235365/lenovo-tab-m10-fhd-plus-001.jpg" alt="Lenovo Tab M10 - FHD Plus | Thiết kế thời thượng, chắc chắn" data-src="https://cdn.tgdd.vn/Products/Images/522/235365/lenovo-tab-m10-fhd-plus-001.jpg" /></a></p>
          <p>Cấu tạo của Tab M10 - FHD Plus hướng đến mọi đối tượng trong gia đ&igrave;nh n&ecirc;n v&ocirc; c&ugrave;ng gọn nhẹ, chỉ d&agrave;y 8.15 mm v&agrave; sở hữu trọng lượng chỉ 460 g. Từ trẻ nhỏ đến người cao tuổi đều dễ d&agrave;ng cầm nắm sử dụng v&agrave; mang theo đến bất cứ đ&acirc;u ngay trong balo nhỏ của bạn.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/235365/a1.jpg"><img class=" ls-is-cached lazyloaded" title="Lenovo Tab M10 - FHD Plus | Cấu tạo mỏng nhẹ chỉ d&agrave;y 8.15 mm v&agrave; sở hữu trọng lượng chỉ 460 g" src="https://cdn.tgdd.vn/Products/Images/522/235365/a1.jpg" alt="Lenovo Tab M10 - FHD Plus | Cấu tạo mỏng nhẹ chỉ d&agrave;y 8.15 mm v&agrave; sở hữu trọng lượng chỉ 460 g" data-src="https://cdn.tgdd.vn/Products/Images/522/235365/a1.jpg" /></a></p>
          <p>An to&agrave;n hơn v&agrave; nhanh ch&oacute;ng mở kh&oacute;a m&aacute;y t&iacute;nh bảng bất cứ khi n&agrave;o bạn cần bằng c&ocirc;ng nghệ nhận diện khu&ocirc;n mặt, chỉ một thao t&aacute;c v&ocirc; c&ugrave;ng đơn giản, Tab M10 - FHD Plus đ&atilde; sẵn s&agrave;ng hoạt động.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/235365/lenovo-tab-m10-fhd-plus-002.jpg"><img class=" ls-is-cached lazyloaded" title="Lenovo Tab M10 - FHD Plus | Mở kh&oacute;a bằng khu&ocirc;n mặt an to&agrave;n" src="https://cdn.tgdd.vn/Products/Images/522/235365/lenovo-tab-m10-fhd-plus-002.jpg" alt="Lenovo Tab M10 - FHD Plus | Mở kh&oacute;a bằng khu&ocirc;n mặt an to&agrave;n" data-src="https://cdn.tgdd.vn/Products/Images/522/235365/lenovo-tab-m10-fhd-plus-002.jpg" /></a></p>
          <p>Lenovo Tab M10 - FHD Plus tự h&agrave;o đảm bảo sức khỏe cho đ&ocirc;i mắt người d&ugrave;ng nhờ khả năng loại bỏ &aacute;nh s&aacute;ng xanh được chứng nhận từ tổ chức T&Uuml;V Rheinland, hạn chế mỏi mắt khi sử dụng m&aacute;y l&acirc;u.</p>
          <h3>M&agrave;n h&igrave;nh lớn v&agrave; rực rỡ sắc m&agrave;u</h3>
          <p>Tab M10 - FHD Plus trang bị c&ocirc;ng nghệ m&agrave;n h&igrave;nh&nbsp;<a title="M&agrave;n h&igrave;nh IPS LCD l&agrave; g&igrave;?" href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">IPS LCD</a>&nbsp;mở rộng g&oacute;c nh&igrave;n, c&oacute; gam m&agrave;u đa dạng, c&ocirc;ng nghệ gi&uacute;p người d&ugrave;ng c&oacute; thể trải nghiệm h&igrave;nh ảnh tốt ngay cả khi kh&ocirc;ng ngồi trực diện.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/235365/lenovo-tab-m10-fhd-plus-003.jpg"><img class=" lazyloaded" title="Lenovo Tab M10 - FHD Plus | Trang bị c&ocirc;ng nghệ m&agrave;n h&igrave;nh IPS LCD k&iacute;ch thước lớn 10.3 inch" src="https://cdn.tgdd.vn/Products/Images/522/235365/lenovo-tab-m10-fhd-plus-003.jpg" alt="Lenovo Tab M10 - FHD Plus | Trang bị c&ocirc;ng nghệ m&agrave;n h&igrave;nh IPS LCD k&iacute;ch thước lớn 10.3 inch" data-src="https://cdn.tgdd.vn/Products/Images/522/235365/lenovo-tab-m10-fhd-plus-003.jpg" /></a></p>
          <p>Một chiếc tablet với k&iacute;ch thước m&agrave;n h&igrave;nh rộng lớn 10.3 inch gi&uacute;p người d&ugrave;ng c&oacute; được những trải nghiệm giải tr&iacute; rộng r&atilde;i v&agrave; ch&acirc;n thật nhất.</p>
          <h3>Gaming xuất sắc c&ugrave;ng hiệu năng ổn</h3>
          <p>M&aacute;y t&iacute;nh bảng Lenovo Tab M10 - FHD Plus tự tin khi sở hữu chip CPU MediaTek Helio P22T 8 nh&acirc;n sản xuất dựa tr&ecirc;n tiến tr&igrave;nh 12 nm, c&oacute; tốc độ xung nhịp 2.3 GHz gi&uacute;p m&aacute;y chạy mượt m&agrave; c&aacute;c t&aacute;c vụ Al, xử l&yacute; mọi hoạt động tr&ocirc;i chảy.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/235365/lenovo-tab-m10-fhd-plus-004.jpg"><img class=" lazyloaded" title="Lenovo Tab M10 - FHD Plus | Sở hữu chip CPU MediaTek Helio P22T 8 nh&acirc;n" src="https://cdn.tgdd.vn/Products/Images/522/235365/lenovo-tab-m10-fhd-plus-004.jpg" alt="Lenovo Tab M10 - FHD Plus | Sở hữu chip CPU MediaTek Helio P22T 8 nh&acirc;n" data-src="https://cdn.tgdd.vn/Products/Images/522/235365/lenovo-tab-m10-fhd-plus-004.jpg" /></a></p>
          <p>MediaTek Helio P22T 8 nh&acirc;n cho hiệu năng m&aacute;y tương đối ổn, nhờ được n&acirc;ng cấp ở nh&acirc;n đồ họa, GPU IMG PowerVR GE8320 hỗ trợ khả năng gaming mạnh mẽ, h&igrave;nh ảnh đồ họa đẹp v&agrave; ch&acirc;n thực. Gi&uacute;p người d&ugrave;ng dễ d&agrave;ng chinh phục nhiều tựa game đang hot với mức thiết lập ph&ugrave; hợp.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/235365/a7.jpg"><img class=" lazyloaded" title="Lenovo Tab M10 - FHD Plus | GPU IMG PowerVR GE8320 hỗ trợ khả năng gaming mạnh mẽ" src="https://cdn.tgdd.vn/Products/Images/522/235365/a7.jpg" alt="Lenovo Tab M10 - FHD Plus | GPU IMG PowerVR GE8320 hỗ trợ khả năng gaming mạnh mẽ" data-src="https://cdn.tgdd.vn/Products/Images/522/235365/a7.jpg" /></a></p>
          <p>B&ecirc;n cạnh đ&oacute;, Tab M10 - FHD Plus trang bị RAM 4 GB v&agrave; bộ nhớ trong 64 GB c&oacute; hỗ trợ th&ecirc;m thẻ nhớ ngo&agrave;i MicroSD tối đa 256 GB cho m&aacute;y c&oacute; nhiều kh&ocirc;ng gian lưu trữ rộng mở để lưu ứng dụng, h&igrave;nh ảnh,... m&agrave; bạn y&ecirc;u th&iacute;ch.</p>
          <h3>Lưu giữ nhanh ch&oacute;ng khoảnh khắc của bạn</h3>
          <p>Chiếc m&aacute;y t&iacute;nh bảng của Lenovo sở hữu một m&aacute;y ảnh sau c&oacute; độ ph&acirc;n giải 8 MP v&agrave; m&aacute;y ảnh mặt trước 5 MP d&ugrave;ng để selfie. Hệ thống camera kh&aacute; đơn giản phục vụ nhu cầu chụp ảnh th&ocirc;ng thường của người d&ugrave;ng khi cần thiết.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/235365/lenovo-tab-m10-fhd-plus-005.jpg"><img class=" lazyloaded" title="Lenovo Tab M10 - FHD Plus | Camera sau c&oacute; độ ph&acirc;n giải 8 MP v&agrave; camera trước 5 MP" src="https://cdn.tgdd.vn/Products/Images/522/235365/lenovo-tab-m10-fhd-plus-005.jpg" alt="Lenovo Tab M10 - FHD Plus | Camera sau c&oacute; độ ph&acirc;n giải 8 MP v&agrave; camera trước 5 MP" data-src="https://cdn.tgdd.vn/Products/Images/522/235365/lenovo-tab-m10-fhd-plus-005.jpg" /></a></p>
          <p>Chức năng&nbsp;<a title="C&aacute;c chuẩn quay phim tr&ecirc;n điện thoại, tablet phổ biến hiện nay" href="https://www.thegioididong.com/hoi-dap/cac-chuan-quay-phim-tren-dien-thoai-tablet-pho-bi-1174134#hd" target="_blank">quay video HD</a>,&nbsp;<a title="Chuẩn quay phim tr&ecirc;n điện thoại" href="https://www.thegioididong.com/tin-tuc/chuan-quay-phim-tren-dien-thoai-596472#fullhd" target="_blank">Full HD</a>&nbsp;tr&ecirc;n Tab M10 - FHD Plus sẵn s&agrave;ng mang đến người d&ugrave;ng những thước phim r&otilde; r&agrave;ng, sắc n&eacute;t khi bắt gặp những khoảnh khắc đ&aacute;ng ghi nhớ.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/235365/lenovo-tab-m10-fhd-plus-006.jpg"><img class=" lazyloaded" title="Lenovo Tab M10 - FHD Plus | Giao diện chụp ảnh" src="https://cdn.tgdd.vn/Products/Images/522/235365/lenovo-tab-m10-fhd-plus-006.jpg" alt="Lenovo Tab M10 - FHD Plus | Giao diện chụp ảnh" data-src="https://cdn.tgdd.vn/Products/Images/522/235365/lenovo-tab-m10-fhd-plus-006.jpg" /></a></p>
          <h3>Kh&ocirc;ng lo toan mọi cuộc vui gi&aacute;n đoạn&nbsp;</h3>
          <p>Như c&aacute;c sản phẩm smartphone hiện đại, Lenovo Tab M10 - FHD Plus được trang bị vi&ecirc;n pin&nbsp;<a title="So s&aacute;nh pin Li ion v&agrave; pin Li Po" href="https://www.thegioididong.com/hoi-dap/so-sanh-pin-li-ion-va-pin-li-po-651833#lipo" target="_blank">Li-Po</a>&nbsp;rất th&ocirc;ng dụng, năng lượng tr&agrave;n đầy 5000 mAh. V&igrave; thế, vi&ecirc;n pin cung cấp nguồn hoạt động xuy&ecirc;n suốt cho m&aacute;y cả ng&agrave;y d&agrave;i.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/235365/lenovo-tab-m10-fhd-plus-007.jpg"><img class=" lazyloaded" title="Lenovo Tab M10 - FHD Plus | Pin Li-Po dung lượng 5000 mAh" src="https://cdn.tgdd.vn/Products/Images/522/235365/lenovo-tab-m10-fhd-plus-007.jpg" alt="Lenovo Tab M10 - FHD Plus | Pin Li-Po dung lượng 5000 mAh" data-src="https://cdn.tgdd.vn/Products/Images/522/235365/lenovo-tab-m10-fhd-plus-007.jpg" /></a></p>
          <p>M&aacute;y c&oacute; t&iacute;nh năng tiết kiệm pin để bạn c&oacute; thể k&eacute;o d&agrave;i th&ecirc;m thời gian sử dụng bất cứ khi n&agrave;o cần. Hạn chế đ&aacute;ng tiếc l&agrave; Tab M10 - FHD Plus kh&ocirc;ng trang bị c&ocirc;ng nghệ&nbsp;<a title="Tham khảo c&aacute;c sản phẩm điện thoại c&oacute; sạc pin nhanh tại Thế Giới Di Động" href="https://www.thegioididong.com/dtdd-sac-pin-nhanh" target="_blank">sạc pin nhanh</a>.</p>
          <h3>Một số t&iacute;nh năng tiện &iacute;ch đ&aacute;ng sở hữu</h3>
          <p>Lenovo c&oacute; chế độ Kids Mode d&ugrave;ng cơ chế kiểm so&aacute;t gi&uacute;p người d&ugrave;ng theo d&otilde;i, c&agrave;i đặt v&agrave; kiểm so&aacute;t nội dung, thời gian sử dụng thiết bị cho trẻ nhỏ. Giờ đ&acirc;y c&aacute;c bậc cha mẹ y&ecirc;n t&acirc;m hơn khi cho trẻ d&ugrave;ng m&aacute;y t&iacute;nh bảng để học tập ph&aacute;t triển v&agrave; kể cả giải tr&iacute;.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/235365/a9.jpg"><img class=" lazyloaded" title="Lenovo Tab M10 - FHD Plus | Hỗ trợ chế độ Kids Mode theo d&otilde;i thời gian sử dụng của trẻ em" src="https://cdn.tgdd.vn/Products/Images/522/235365/a9.jpg" alt="Lenovo Tab M10 - FHD Plus | Hỗ trợ chế độ Kids Mode theo d&otilde;i thời gian sử dụng của trẻ em" data-src="https://cdn.tgdd.vn/Products/Images/522/235365/a9.jpg" /></a></p>
          <p>Hệ thống loa k&eacute;p&nbsp;<a title="T&igrave;m hiểu về c&ocirc;ng nghệ Dolby Atmos tr&ecirc;n di động" href="https://www.thegioididong.com/hoi-dap/cong-nghe-dolby-atmos-tren-smartphone-772074" target="_blank">Dolby Atmos</a>&nbsp;cho &acirc;m thanh trầm bổng, tăng th&ecirc;m cảm hứng ch&igrave;m đắm bất tận khi người d&ugrave;ng xem phim, nghe nhạc,... Dolby Atmos mang chất lượng &acirc;m thanh từ rạp phim đến m&aacute;y t&iacute;nh bảng của bạn.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/235365/a11.jpg"><img class=" lazyloaded" title="Lenovo Tab M10 - FHD Plus | Hệ thống loa k&eacute;p Dolby Atmos cho &acirc;m thanh trầm bổng" src="https://cdn.tgdd.vn/Products/Images/522/235365/a11.jpg" alt="Lenovo Tab M10 - FHD Plus | Hệ thống loa k&eacute;p Dolby Atmos cho &acirc;m thanh trầm bổng" data-src="https://cdn.tgdd.vn/Products/Images/522/235365/a11.jpg" /></a></p>
          <p>Trợ l&yacute; Google với tr&iacute; th&ocirc;ng minh nh&acirc;n tạo c&oacute; khả năng nhận biết v&agrave; hiểu c&acirc;u lệnh của người d&ugrave;ng, bạn c&oacute; thể điều khiển m&aacute;y hoặc c&aacute;c thiết bị th&ocirc;ng minh trong nh&agrave; chỉ bằng giọng n&oacute;i m&agrave; kh&ocirc;ng cần phải chạm tay.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/235365/a13.jpg"><img class=" lazyloaded" title="Lenovo Tab M10 - FHD Plus | Trợ l&iacute; th&ocirc;ng minh của Google tiện lợi" src="https://cdn.tgdd.vn/Products/Images/522/235365/a13.jpg" alt="Lenovo Tab M10 - FHD Plus | Trợ l&iacute; th&ocirc;ng minh của Google tiện lợi" data-src="https://cdn.tgdd.vn/Products/Images/522/235365/a13.jpg" /></a></p>
          <p>Sở hữu mức gi&aacute; v&ocirc; c&ugrave;ng hấp dẫn Lenovo Tab M10 - FHD Plus l&agrave; một chiếc m&aacute;y t&iacute;nh bảng c&oacute; nhiều chức năng hiện đại v&agrave; tiện lợi, được sản xuất để hướng tới mọi th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh hứa hẹn sẽ đ&aacute;p ứng tốt nhu cầu sử dụng của bạn.</p>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','configuration' => '<table style="height: 183px;" width="797">
          <tbody>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">M&agrave;n h&igrave;nh:</td>
          <td style="width: 390.5px; height: 13px;"><span class="comma">8.7"</span><span class="">TFT LCD</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Hệ điều h&agrave;nh:</td>
          <td style="width: 390.5px; height: 13px;">Android 11</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">RAM:</td>
          <td style="width: 390.5px; height: 13px;">3 GB</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Bộ nhớ trong:</td>
          <td style="width: 390.5px; height: 13px;">32 GB</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Kết nối:</td>
          <td style="width: 390.5px; height: 13px;"><span class="comma">4G</span><span class="">C&oacute; nghe gọi</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">SIM:</td>
          <td style="width: 390.5px; height: 13px;">1 Nano SIM</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Camera sau:</td>
          <td style="width: 390.5px; height: 13px;">8 MP</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Camera trước:</td>
          <td style="width: 390.5px; height: 13px;">2 MP</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Pin, Sạc:</td>
          <td style="width: 390.5px; height: 13px;"><span class="comma">5100 mAh</span><span class="">15 W</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">H&atilde;ng</td>
          <td style="width: 390.5px; height: 13px;">Samsung</td>
          </tr>
          </tbody>
          </table>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','created_at' => '2021-06-27 07:08:43','updated_at' => '2021-06-27 07:08:43','deleted_at' => NULL),
            array('id' => '5','name' => 'Máy tính bảng iPad Air 4 Wifi 64GB (2020)','code' => 'IA1','origin' => 'Thái Bình','price' => '16190000','picture' => '1624777794.jpg','status' => '1','description' => '<h3><a title="Tham khảo sản phẩm Apple ch&iacute;nh h&atilde;ng tại Thegioididong.com" href="https://www.thegioididong.com/apple" target="_blank">Apple</a>&nbsp;đ&atilde; tr&igrave;nh l&agrave;ng m&aacute;y t&iacute;nh bảng&nbsp;<a title="Tham khảo m&aacute;y t&iacute;nh bảng iPad Air 2020 ch&iacute;nh h&atilde;ng tại Thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang/ipad-air-4-wifi-64gb-2020" target="_blank">iPad Air 4 Wifi 64 GB (2020)</a>. Đ&acirc;y l&agrave; thiết bị đầu ti&ecirc;n của h&atilde;ng được trang bị chip A14 Bionic - chip di động mạnh nhất của Apple (năm 2020). V&agrave; c&oacute; m&agrave;n lột x&aacute;c nhờ thiết kế được thừa hưởng từ&nbsp;<a title="Tham khảo m&aacute;y t&iacute;nh bảng iPad Pro ch&iacute;nh h&atilde;ng tại Thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang-apple-ipad-pro" target="_blank">iPad Pro</a>&nbsp;với viền m&agrave;n h&igrave;nh mỏng bo cong quanh m&aacute;y.</h3>
          <h3>Chip mạnh h&agrave;ng đầu cho trải nghiệm ho&agrave;n hảo</h3>
          <p>Apple trang bị cho&nbsp;<a title="Tham khảo m&aacute;y t&iacute;nh bảng iPad Air ch&iacute;nh h&atilde;ng tại Thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang-apple-ipad-air" target="_blank">iPad Air</a>&nbsp;4 chip A14 Bionic 6 nh&acirc;n được sản xuất bởi TSMC với tiến tr&igrave;nh 5 nm hiện đại nhất hiện nay. Số lượng b&oacute;ng b&aacute;n dẫn đạt 11.8 tỷ cao hơn 40% so với A13 Bionic (8.5 tỷ). C&oacute; thể thấy số lượng b&oacute;ng b&aacute;n dẫn c&agrave;ng lớn th&igrave; chip c&agrave;ng mạnh v&agrave; tiết kiệm năng lượng hơn.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/228808/ipad-air-4-wifi-64gb-2020-183320-033337.jpg"><img class=" ls-is-cached lazyloaded" title="Trang bị chip A14 mạnh h&agrave;ng đầu của Apple | iPad Air 2020" src="https://cdn.tgdd.vn/Products/Images/522/228808/ipad-air-4-wifi-64gb-2020-183320-033337.jpg" alt="Trang bị chip A14 mạnh h&agrave;ng đầu của Apple | iPad Air 2020" data-src="https://cdn.tgdd.vn/Products/Images/522/228808/ipad-air-4-wifi-64gb-2020-183320-033337.jpg" /></a></p>
          <p>A14 Bionic c&oacute; 6 l&otilde;i chip, trong đ&oacute; 2 l&otilde;i hiệu suất cao cho t&aacute;c vụ phức tạp v&agrave; 4 l&otilde;i c&ograve;n lại cho c&aacute;c t&aacute;c vụ th&ocirc;ng thường.</p>
          <p>B&ecirc;n cạnh đ&oacute;, bộ xử l&yacute; đồ hoạ GPU 4 l&otilde;i mang lại hiệu suất tối đa, nhanh hơn 30% so với thế hệ trước hứa hẹn iPad Air c&oacute; thể chơi c&aacute;c tr&ograve; chơi phức tạp đ&ograve;i hỏi độ ph&acirc;n giải cao, video 4K,...</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/228808/ipad-air-4-wifi-64gb-2020-181220-051239.jpg"><img class=" ls-is-cached lazyloaded" title="Chơi game hay nặng hay xem video 4K đều mượt m&agrave; | iPad Air 2020" src="https://cdn.tgdd.vn/Products/Images/522/228808/ipad-air-4-wifi-64gb-2020-181220-051239.jpg" alt="Chơi game hay nặng hay xem video 4K đều mượt m&agrave; | iPad Air 2020" data-src="https://cdn.tgdd.vn/Products/Images/522/228808/ipad-air-4-wifi-64gb-2020-181220-051239.jpg" /></a></p>
          <p>A14 Bionic mang đến tốc độ xử l&yacute; vượt trội, nhanh ch&oacute;ng hơn c&ugrave;ng với khả năng xử l&yacute; đa nhiệm mượt m&agrave; cũng như bộ nhớ trong 64 GB cho bạn kh&ocirc;ng gian lưu trữ h&igrave;nh ảnh, video,...</p>
          <h3>Tinh tế trong thiết kế c&ugrave;ng nhiều m&agrave;u sắc đi k&egrave;m</h3>
          <p>iPad Air 4 c&oacute; kiểu d&aacute;ng mới tương tự iPad Pro 2020 nhưng c&oacute; k&iacute;ch thước nhỏ hơn v&agrave; d&agrave;y chỉ 6.1 mm, trọng lượng đạt 460 g dễ d&agrave;ng mang theo b&ecirc;n m&igrave;nh mọi l&uacute;c mọi nơi. Thiết kế n&agrave;y gi&uacute;p tương th&iacute;ch với b&agrave;n ph&iacute;m Apple Smart Keyboard Folio, Magic Keyboard của iPad Pro 11 inch v&agrave; hỗ trợ b&uacute;t Apple Pencil 2.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/228808/ipad-air-4-wifi-64gb-2020-184520-034526.jpg"><img class=" ls-is-cached lazyloaded" title="B&agrave;n ph&iacute;m Apple Smart Keyboard Folio | iPad Air 2020" src="https://cdn.tgdd.vn/Products/Images/522/228808/ipad-air-4-wifi-64gb-2020-184520-034526.jpg" alt="B&agrave;n ph&iacute;m Apple Smart Keyboard Folio | iPad Air 2020" data-src="https://cdn.tgdd.vn/Products/Images/522/228808/ipad-air-4-wifi-64gb-2020-184520-034526.jpg" /></a></p>
          <p>Thiết kế trong iPad Air 4 vu&ocirc;ng vắn hơn nếu so với những d&ograve;ng iPad trước, c&aacute;c g&oacute;c cạnh được bo tr&ograve;n nhẹ nh&agrave;ng tạo cảm gi&aacute;c mềm mại hơn cho tổng thể.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/228808/ipad-air-4-wifi-64gb-2020-182620-032617.jpg"><img class=" ls-is-cached lazyloaded" title="G&oacute;c cạnh bo tr&ograve;n cho cảm gi&aacute;c mềm mại  | iPad Air 2020" src="https://cdn.tgdd.vn/Products/Images/522/228808/ipad-air-4-wifi-64gb-2020-182620-032617.jpg" alt="G&oacute;c cạnh bo tr&ograve;n cho cảm gi&aacute;c mềm mại  | iPad Air 2020" data-src="https://cdn.tgdd.vn/Products/Images/522/228808/ipad-air-4-wifi-64gb-2020-182620-032617.jpg" /></a></p>
          <p>iPad Air 2020 được thiết kế nguy&ecirc;n khối đẳng cấp c&ugrave;ng nhiều m&agrave;u sắc trẻ trung cho bạn c&oacute; nhiều sự lựa chọn hơn như: bạc, x&aacute;m đen, hồng, xanh l&aacute; v&agrave; xanh dương.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/228808/ipad-air-4-wifi-64gb-2020-185420-035411.jpg"><img class=" lazyloaded" title="Đa m&agrave;u sắc tăng th&ecirc;m sự lựa chọn | iPad Air 2020" src="https://cdn.tgdd.vn/Products/Images/522/228808/ipad-air-4-wifi-64gb-2020-185420-035411.jpg" alt="Đa m&agrave;u sắc tăng th&ecirc;m sự lựa chọn | iPad Air 2020" data-src="https://cdn.tgdd.vn/Products/Images/522/228808/ipad-air-4-wifi-64gb-2020-185420-035411.jpg" /></a></p>
          <p>N&uacute;t Home truyền thống được loại bỏ, tạo kh&ocirc;ng gian hiển thị rộng hơn v&agrave; t&iacute;ch hợp cảm biến v&acirc;n tay Touch ID tr&ecirc;n n&uacute;t nguồn đặt ở ph&iacute;a tr&ecirc;n của th&acirc;n m&aacute;y. Đồng thời, iPad Air trở th&agrave;nh sản phẩm đầu ti&ecirc;n của Apple t&iacute;ch hợp t&iacute;nh năng nhận diện v&acirc;n tay v&agrave;o chung với n&uacute;t nguồn.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/228808/ipad-air-4-wifi-64gb-2020-185820-035805.jpg"><img class=" lazyloaded" title="Tuoch ID t&iacute;ch hợp n&uacute;t nguồn mở kho&aacute; nhanh ch&oacute;ng | iPad Air 2020" src="https://cdn.tgdd.vn/Products/Images/522/228808/ipad-air-4-wifi-64gb-2020-185820-035805.jpg" alt="Touch ID t&iacute;ch hợp n&uacute;t nguồn mở kho&aacute; nhanh ch&oacute;ng | iPad Air 2020" data-src="https://cdn.tgdd.vn/Products/Images/522/228808/ipad-air-4-wifi-64gb-2020-185820-035805.jpg" /></a></p>
          <h3>M&agrave;n h&igrave;nh 60 Hz kh&ocirc;ng gian hiển thị tuyệt vời</h3>
          <p>iPad Air 2020 sử dụng c&ocirc;ng nghệ Liquid Retina v&agrave; c&oacute; độ ph&acirc;n giải 1640 x 2360 Pixels v&agrave; c&oacute; tần số qu&eacute;t đến 60 Hz gi&uacute;p iPad Air hiển thị h&igrave;nh ảnh mượt m&agrave; hơn, c&aacute;c chuyển động h&igrave;nh ảnh trơn tru hơn, gần như loại bỏ ho&agrave;n to&agrave;n t&igrave;nh trạng giật lag.Từ đ&oacute;, bạn c&oacute; thể tận hưởng trọn ven những thước phim bom tấn ấn tượng hay chơi game phải gọi l&agrave; "bao mướt".&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/228808/ipad-air-4-wifi-64gb-2020-183220-053216.jpg"><img class=" lazyloaded" title="M&agrave;n h&igrave;nh đạt chuẩn Liquid Retina | iPad Air 2020" src="https://cdn.tgdd.vn/Products/Images/522/228808/ipad-air-4-wifi-64gb-2020-183220-053216.jpg" alt="M&agrave;n h&igrave;nh đạt chuẩn Liquid Retina | iPad Air 2020" data-src="https://cdn.tgdd.vn/Products/Images/522/228808/ipad-air-4-wifi-64gb-2020-183220-053216.jpg" /></a></p>
          <p>M&agrave;n h&igrave;nh của iPad Air c&oacute; hỗ trợ hỗ trợ dải m&agrave;u rộng DCI-P3 với t&iacute;nh năng True-Tone cho khả năng t&aacute;i tạo m&agrave;u sắc ch&iacute;nh x&aacute;c hỗ trợ ưu việt cho c&ocirc;ng việc đồ họa. Hơn nữa, c&oacute; lớp phủ chống l&oacute;a bề mặt, độ s&aacute;ng 500 nits gi&uacute;p lu&ocirc;n hiển thị tốt trong nhiều điều &aacute;nh s&aacute;ng kh&aacute;c nhau, ngo&agrave;i trời cũng kh&ocirc;ng th&agrave;nh vấn đề.</p>
          <h3>Camera đơn đa chức năng</h3>
          <p>Camera sau c&oacute; độ ph&acirc;n giải 12 MP với khẩu độ f/1.8 c&ugrave;ng với đ&oacute; l&agrave; khả năng quay video 4K/60fps chống rung được n&acirc;ng cấp, hỗ trợ Smart HDR, slow motion 240fps v&agrave; kh&ocirc;ng c&oacute; đ&egrave;n flash LED.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/228808/ipad-air-4-wifi-64gb-2020-181820-041847.jpg"><img class=" lazyloaded" title="Camera sau với cảm biến 12 MP | iPad Air 2020" src="https://cdn.tgdd.vn/Products/Images/522/228808/ipad-air-4-wifi-64gb-2020-181820-041847.jpg" alt="Camera sau với cảm biến 12 MP | iPad Air 2020" data-src="https://cdn.tgdd.vn/Products/Images/522/228808/ipad-air-4-wifi-64gb-2020-181820-041847.jpg" /></a><br />Ở mặt trước được trang bị camera 7 MP, khẩu độ f/2.2, hỗ trợ quay video Full HD 60fps, hỗ trợ chụp ảnh ch&acirc;n dung, phục vụ tốt c&aacute;c t&aacute;c vụ gọi Facetime họp h&agrave;nh hay đơn giản l&agrave; tr&ograve; chuyện c&ugrave;ng người th&acirc;n.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/228808/ipad-air-4-wifi-64gb-2020-182120-042155.jpg"><img class=" lazyloaded" title="Camera FaceTime với cảm biến 7 MP | iPad Air 2020" src="https://cdn.tgdd.vn/Products/Images/522/228808/ipad-air-4-wifi-64gb-2020-182120-042155.jpg" alt="Camera FaceTime với cảm biến 7 MP | iPad Air 2020" data-src="https://cdn.tgdd.vn/Products/Images/522/228808/ipad-air-4-wifi-64gb-2020-182120-042155.jpg" /></a></p>
          <h3>Cổng sạc Type-C thuận lợi</h3>
          <p>iPad Air 2020 chuyển m&igrave;nh với cổng USB Type-C giống tr&ecirc;n c&aacute;c thiết bị iPad Pro với tốc độ truyền tải 5 Gbps. Vi&ecirc;n pin cũng được n&acirc;ng cấp v&agrave; c&oacute; khả năng lướt web l&ecirc;n 10 tiếng đem đến những trải nghiệm, l&agrave;m việc giải tr&iacute; li&ecirc;n tục.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/228808/ipad-air-4-wifi-64gb-2020-183820-053819.jpg"><img class=" lazyloaded" title="Cổng sạc Type-C thuận lợi trong qu&aacute; tr&igrave;nh sử dụng | iPad Air 2020" src="https://cdn.tgdd.vn/Products/Images/522/228808/ipad-air-4-wifi-64gb-2020-183820-053819.jpg" alt="Cổng sạc Type-C thuận lợi trong qu&aacute; tr&igrave;nh sử dụng | iPad Air 2020" data-src="https://cdn.tgdd.vn/Products/Images/522/228808/ipad-air-4-wifi-64gb-2020-183820-053819.jpg" /></a></p>
          <p>Nh&igrave;n chung c&oacute; thể thấy, iPad Air l&agrave; một phi&ecirc;n bản r&uacute;t gọn của iPad Pro với mức gi&aacute; phải chăng hơn. Trong đ&oacute;, tần số qu&eacute;t 120Hz, Face ID v&agrave; cụm camera LiDAR l&agrave; những thứ kh&ocirc;ng c&oacute; tr&ecirc;n iPad Air. Nếu bạn kh&ocirc;ng cần những thiếu s&oacute;t ấy th&igrave; iPad Air 2020 l&agrave; sự lựa chọn rất hợp l&yacute;.</p>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','configuration' => '<table style="height: 183px;" width="797">
          <tbody>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">M&agrave;n h&igrave;nh:</td>
          <td style="width: 390.5px; height: 13px;"><span class="comma">8.7"</span><span class="">TFT LCD</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Hệ điều h&agrave;nh:</td>
          <td style="width: 390.5px; height: 13px;">Android 11</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">RAM:</td>
          <td style="width: 390.5px; height: 13px;">3 GB</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Bộ nhớ trong:</td>
          <td style="width: 390.5px; height: 13px;">32 GB</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Kết nối:</td>
          <td style="width: 390.5px; height: 13px;"><span class="comma">4G</span><span class="">C&oacute; nghe gọi</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">SIM:</td>
          <td style="width: 390.5px; height: 13px;">1 Nano SIM</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Camera sau:</td>
          <td style="width: 390.5px; height: 13px;">8 MP</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Camera trước:</td>
          <td style="width: 390.5px; height: 13px;">2 MP</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Pin, Sạc:</td>
          <td style="width: 390.5px; height: 13px;"><span class="comma">5100 mAh</span><span class="">15 W</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">H&atilde;ng</td>
          <td style="width: 390.5px; height: 13px;">Samsung</td>
          </tr>
          </tbody>
          </table>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','created_at' => '2021-06-27 07:09:54','updated_at' => '2021-06-27 07:09:54','deleted_at' => NULL),
            array('id' => '6','name' => 'Máy tính bảng Huawei MatePad 64GB (Nền tảng Huawei Mobile Service)','code' => 'HM3','origin' => 'Hà Nội','price' => '6590000','picture' => '1624777852.jpg','status' => '1','description' => '<h3><a title="Tham khảo m&aacute;y t&iacute;nh bảng Huawei kinh doanh tại thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang-huawei" target="_blank" rel="noopener">Huawei</a>&nbsp;cho ra mắt&nbsp;<a title="Tham khảo m&aacute;y t&iacute;nh bảng kinh doanh tại thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang" target="_blank" rel="noopener">m&aacute;y t&iacute;nh bảng</a>&nbsp;Huawei MatePad c&oacute; mức gi&aacute; dễ tiếp cận. Được thiết kế mỏng nhẹ v&agrave; đầy đủ c&aacute;c t&iacute;nh năng cần thiết,&nbsp;<a title="Tham khảo m&aacute;y t&iacute;nh bảng Huawei MatePad ch&iacute;nh h&atilde;ng tại Thế Giới Di Động" href="https://www.thegioididong.com/may-tinh-bang/huawei-matepad" target="_blank" rel="noopener">Huawei MatePad</a>&nbsp;l&agrave; sự lựa chọn tuyệt vời cho những ai y&ecirc;u th&iacute;ch m&agrave;n h&igrave;nh lớn nhưng lại thuận tiện dễ d&agrave;ng di chuyển mang theo.</h3>
          <p><strong>Sản phẩm chạy hệ điều h&agrave;nh Android tr&ecirc;n nền tảng Huawei Mobile Service (HMS):</strong><br />- Tải ứng dụng tr&ecirc;n cửa h&agrave;ng Huawei AppGallery thay cho CH Play.<br />- Ngo&agrave;i ra, kh&aacute;ch h&agrave;ng c&oacute; thể t&igrave;m ứng dụng bằng Petal Search nếu c&aacute;c ứng dụng kh&ocirc;ng c&oacute; sẵn tr&ecirc;n Huawei AppGallery.<br />- Kh&ocirc;ng c&agrave;i đặt sẵn c&aacute;c ứng dụng / game sử dụng dịch vụ, t&agrave;i khoản Google như: Google Maps, Google Drive, Gmail,...<br />-&nbsp;<a title="Hướng dẫn c&agrave;i đặt ứng dụng cho thiết bị Huawei" href="https://www.thegioididong.com/tin-tuc/cach-cai-ch-play-youtube-drive-len-dien-thoai-huawei-khong-co-google-1354300" target="_blank" rel="noopener">Hướng dẫn c&agrave;i đặt ứng dụng cho thiết bị Huawei</a>.</p>
          <h3>Thiết kế cao cấp, bền bỉ</h3>
          <p>Huawei MatePad sử dụng thiết kế nguy&ecirc;n khối với phần khung viền kim loại v&agrave; mặt lưng được phủ mờ, gi&uacute;p phần th&acirc;n m&aacute;y nhẹ nh&agrave;ng, sang trọng cũng như hạn chế dấu v&acirc;n tay.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/233258/huawei-matepad-192021-082026.jpg"><img class=" ls-is-cached lazyloaded" title="M&aacute;y t&iacute;nh bảng Huawei MatePad | Thiết kế nguy&ecirc;n khối bền bỉ" src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-192021-082026.jpg" alt="M&aacute;y t&iacute;nh bảng Huawei MatePad | Thiết kế nguy&ecirc;n khối bền bỉ" data-src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-192021-082026.jpg" /></a></p>
          <p>Sự phối hợp giữa kỹ thuật thủ c&ocirc;ng tinh xảo với bốn cạnh cong mềm mại v&agrave; thiết kế trang nh&atilde;, bền bỉ vừa mang đến vẻ ngo&agrave;i cao cấp vừa n&acirc;ng cao trải nghiệm cầm nắm thoải m&aacute;i, vừa vặn trong tay.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/233258/huawei-matepad-192021-082044.jpg"><img class=" ls-is-cached lazyloaded" title="M&aacute;y t&iacute;nh bảng Huawei MatePad | C&aacute;c ph&iacute;m cứng chắc chắn" src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-192021-082044.jpg" alt="M&aacute;y t&iacute;nh bảng Huawei MatePad | C&aacute;c ph&iacute;m cứng chắc chắn" data-src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-192021-082044.jpg" /></a></p>
          <p>B&uacute;t cảm ứng Huawei M-Pencil được l&agrave;m từ chất liệu composite chọn lọc kỹ lưỡng, bền bỉ, chống trượt v&agrave; m&agrave;i m&ograve;n, gi&uacute;p bạn dễ d&agrave;ng điều khiển những n&eacute;t b&uacute;t liền mạch, linh hoạt c&aacute;c thao t&aacute;c viết, vẽ c&oacute; độ ho&agrave;n mỹ cao.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/233258/huawei-matepad-110921-040954.jpg"><img class=" ls-is-cached lazyloaded" title="M&aacute;y t&iacute;nh bảng Huawei MatePad | Hỗ trợ b&uacute;t cảm ứng Huawei M Pencil" src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-110921-040954.jpg" alt="M&aacute;y t&iacute;nh bảng Huawei MatePad | Hỗ trợ b&uacute;t cảm ứng Huawei M Pencil" data-src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-110921-040954.jpg" /></a></p>
          <p>Ngo&agrave;i ra, m&aacute;y cũng sở hữu 4 loa lớn với hiệu ứng &acirc;m thanh nổi 3D Histen 6.0 chất lượng của Harman Kardon v&agrave; một d&atilde;y gồm bốn micro c&oacute; khả năng giảm tiếng ồn xung quanh. Ngo&agrave;i việc th&uacute;c đẩy trải nghiệm đa phương tiện, n&oacute; cũng tạo điều kiện cho việc học tập v&agrave; lớp học ảo.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/233258/huawei-matepad-110921-040930.jpg"><img class=" lazyloaded" title="M&aacute;y t&iacute;nh bảng Huawei MatePad | Trải nghiệm &acirc;m thanh sống động" src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-110921-040930.jpg" alt="M&aacute;y t&iacute;nh bảng Huawei MatePad | Trải nghiệm &acirc;m thanh sống động" data-src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-110921-040930.jpg" /></a></p>
          <p>Đối với Huawei MatePad, Huawei kh&ocirc;ng trang bị cảm biến v&acirc;n tay hay nhận diện khu&ocirc;n mặt m&agrave; chỉ sử dụng mật khẩu để mở kh&oacute;a m&agrave;n h&igrave;nh.</p>
          <h3>Trải nghiệm ch&acirc;n thực, kh&ocirc;ng giới hạn tầm nh&igrave;n</h3>
          <p>Tỷ lệ m&agrave;n h&igrave;nh của Huawei MatePad đạt đến độ l&yacute; tưởng với viền bezels cực mỏng. M&agrave;n h&igrave;nh c&oacute; k&iacute;ch thước lớn 10.4 inch v&agrave; thiết kế &ldquo;đục lỗ&rdquo; để chứa camera selfie kh&aacute; nhỏ, đem đến trải nghiệm h&igrave;nh ảnh tối ưu với kh&ocirc;ng gian cực rộng.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/233258/huawei-matepad-192021-082020.jpg"><img class=" lazyloaded" title="M&aacute;y t&iacute;nh bảng Huawei MatePad | M&agrave;n h&igrave;nh IPS LCD k&iacute;ch thước lớn" src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-192021-082020.jpg" alt="M&aacute;y t&iacute;nh bảng Huawei MatePad | M&agrave;n h&igrave;nh IPS LCD k&iacute;ch thước lớn" data-src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-192021-082020.jpg" /></a></p>
          <p>Về chất lượng hiển thị, tấm nền IPS LCD của m&aacute;y cho độ ph&acirc;n giải 2K (1200 x 2000 Pixels), khả năng hiển thị 16.7 triệu m&agrave;u sắc v&agrave; độ s&aacute;ng l&ecirc;n đến 470 nits, từng chi tiết s&aacute;ng tối đều đem lại sự sống động v&agrave; r&otilde; r&agrave;ng đạt ti&ecirc;u chuẩn điện ảnh.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/233258/huawei-matepad-192121-082103.jpg"><img class=" lazyloaded" title="M&aacute;y t&iacute;nh bảng Huawei MatePad | Chất lượng m&agrave;n h&igrave;nh sống động, sắc n&eacute;t" src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-192121-082103.jpg" alt="M&aacute;y t&iacute;nh bảng Huawei MatePad | Chất lượng m&agrave;n h&igrave;nh sống động, sắc n&eacute;t" data-src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-192121-082103.jpg" /></a></p>
          <p>B&ecirc;n cạnh đ&oacute;, m&agrave;n h&igrave;nh cũng đạt chứng nhận T&Uuml;V Rheinland, gi&uacute;p bảo vệ mắt của bạn khỏi &aacute;nh s&aacute;ng xanh c&oacute; hại.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/233258/huawei-matepad-110921-040941.jpg"><img class=" lazyloaded" title="M&aacute;y t&iacute;nh bảng Huawei MatePad | Bảo vệ dưới &aacute;nh s&aacute;ng xanh" src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-110921-040941.jpg" alt="M&aacute;y t&iacute;nh bảng Huawei MatePad | Bảo vệ dưới &aacute;nh s&aacute;ng xanh" data-src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-110921-040941.jpg" /></a></p>
          <h3>Bước nhảy vọt về hiệu suất</h3>
          <p>Huawei MatePad được t&iacute;ch hợp vi xử l&yacute; tầm trung Kirin 810 gồm 8 l&otilde;i, sản xuất tr&ecirc;n tiến tr&igrave;nh 7 nm với xung nhịp cơ bản l&ecirc;n tới 2.27 GHz đem lại hiệu suất sử dụng tối ưu v&agrave; to&agrave;n diện trong c&aacute;c nhiệm vụ li&ecirc;n quan đến AI.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/233258/huawei-matepad-111021-041003.jpg"><img class=" lazyloaded" title="M&aacute;y t&iacute;nh bảng Huawei MatePad | Kirin 819 cho hiệu năng mạnh mẽ" src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-111021-041003.jpg" alt="M&aacute;y t&iacute;nh bảng Huawei MatePad | Kirin 819 cho hiệu năng mạnh mẽ" data-src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-111021-041003.jpg" /></a></p>
          <p>Kh&ocirc;ng chỉ hiệu suất CPU được n&acirc;ng cao, GPU Mali-G52 được hỗ trợ bởi c&ocirc;ng nghệ GPU Turbo, cải thiện đ&aacute;ng kể về khả năng xử l&yacute; đồ họa khi xem video độ ph&acirc;n giải cao hay chơi những tựa game nặng, hiện tượng giảm fps hay giật lag &iacute;t xảy ra.</p>
          <p>B&ecirc;n cạnh đ&oacute;, với mức&nbsp;<a title="Tham khảo m&aacute;y t&iacute;nh bảng c&oacute; RAM từ 4GB đến 6GB ch&iacute;nh h&atilde;ng tại Thế Giới Di Động" href="https://www.thegioididong.com/dtdd-ram-4-den-6gb" target="_blank" rel="noopener">RAM 4 GB</a>&nbsp;đủ tốt để hoạt động xử l&yacute; đa nhiệm, c&ugrave;ng với đ&oacute; l&agrave;&nbsp;<a title="Tham khảo m&aacute;y t&iacute;nh bảng c&oacute; ROM từ 32GB đến 64GB ch&iacute;nh h&atilde;ng tại Thế Giới Di Động" href="https://www.thegioididong.com/dtdd-rom-32-den-64gb" target="_blank" rel="noopener">bộ nhớ trong 64 GB</a>&nbsp;cung cấp kh&ocirc;ng gian lưu trữ lớn đồng thời m&aacute;y hỗ trợ khe cắm thẻ nhớ microSD cho ph&eacute;p mở rộng bộ nhớ l&ecirc;n đến 512 GB.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/233258/huawei-matepad-192021-082056.jpg"><img class=" lazyloaded" title="M&aacute;y t&iacute;nh bảng Huawei MatePad | Hỗ trợ thẻ nhớ ngo&agrave;i MircoSD " src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-192021-082056.jpg" alt="M&aacute;y t&iacute;nh bảng Huawei MatePad | Hỗ trợ thẻ nhớ ngo&agrave;i MircoSD " data-src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-192021-082056.jpg" /></a></p>
          <h3>Ghi lại mỗi khoảnh khắc đ&aacute;ng nhớ</h3>
          <p>Huawei cũng trang bị cho Huawei MatePad camera selfie 8 MP hỗ trợ lấy n&eacute;t tự động v&agrave; camera đơn ph&iacute;a sau c&oacute; độ ph&acirc;n giải 8 MP c&ugrave;ng đ&egrave;n flash LED. D&ugrave; l&agrave; chiếc tablet kh&ocirc;ng chuy&ecirc;n về camera nhưng đủ để bạn tha hồ &ldquo;sống ảo&rdquo;.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/233258/huawei-matepad-192021-082032.jpg"><img class=" lazyloaded" title="M&aacute;y t&iacute;nh bảng Huawei MatePad | Camera sau" src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-192021-082032.jpg" alt="M&aacute;y t&iacute;nh bảng Huawei MatePad | Camera sau" data-src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-192021-082032.jpg" /></a></p>
          <p>T&iacute;nh năng chụp ảnh HDR, chuy&ecirc;n nghiệp, chụp ảnh Panorama cho ph&eacute;p dễ d&agrave;ng đem to&agrave;n bộ cảnh vật v&agrave;o trong một bức ảnh đầy chi tiết, sắc n&eacute;t kh&ocirc;ng k&eacute;m g&igrave; smartphone cao cấp.</p>
          <p>Đặc biệt, sức mạnh từ chipset Kirin 810 với IVP + ISP h&agrave;ng đầu gi&uacute;p thuật to&aacute;n AI c&acirc;n bằng trắng, giảm nhiễu tốt, cho ph&eacute;p camera chụp ảnh trong điều kiện &aacute;nh s&aacute;ng yếu chi tiết hơn.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/233258/huawei-matepad-192121-082109.jpg"><img class=" lazyloaded" title="Cụm camera thu s&aacute;ng tốt | Giao diện chụp ảnh" src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-192121-082109.jpg" alt="Cụm camera thu s&aacute;ng tốt | Giao diện chụp ảnh" data-src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-192121-082109.jpg" /></a></p>
          <p>Hơn thế nữa, t&iacute;nh năng quay video của Huawei MatePad cũng kh&aacute; ấn tượng, cho ph&eacute;p tạo ra những thước phim sống động chất lượng cao với độ ph&acirc;n giải Full HD.</p>
          <h3>Tận hưởng trọn vẹn mỗi ng&agrave;y</h3>
          <p>Sự kết hợp giữa c&ocirc;ng nghệ tiết kiệm năng lượng từ chipset v&agrave; giao diện EMUI, c&ugrave;ng với dung lượng pin khủng lồ 7250 mAh gi&uacute;p Huawei MatePad ti&ecirc;u thụ pin &iacute;t đến kinh ngạc. Theo Huawei c&ocirc;ng bố, m&aacute;y cho ph&eacute;p 12 giờ xem video trực tuyến v&agrave; 7 giờ chơi game li&ecirc;n tục chỉ sau một lần sạc đầy.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/233258/huawei-matepad-111021-041030.jpg"><img class=" lazyloaded" title="M&aacute;y t&iacute;nh bảng Huawei MatePad | Dung lượng pin lớn 7250 mAh" src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-111021-041030.jpg" alt="M&aacute;y t&iacute;nh bảng Huawei MatePad | Dung lượng pin lớn 7250 mAh" data-src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-111021-041030.jpg" /></a></p>
          <p>Đồng thời, c&ocirc;ng nghệ sạc nhanh 10 W gi&uacute;p m&aacute;y nạp năng lượng một c&aacute;ch nhanh ch&oacute;ng, kh&ocirc;ng mất nhiều thời giờ. Một đặc điểm th&uacute; vị kh&aacute;c tr&ecirc;n Huawei MatePad l&agrave; n&oacute; c&oacute; thể hỗ trợ sạc ngược cho c&aacute;c thiết bị kh&aacute;c th&ocirc;ng qua c&aacute;p OTG.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/233258/huawei-matepad-192021-082050.jpg"><img class=" lazyloaded" title="Sạc nhanh qua cổng Type-C | Huawei MatePad" src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-192021-082050.jpg" alt="Sạc nhanh qua cổng Type-C | Huawei MatePad" data-src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-192021-082050.jpg" /></a></p>
          <h3>Một số t&iacute;nh năng vượt trội kh&aacute;c</h3>
          <p>Huawei MatePad l&agrave; một thiết bị học tập d&agrave;nh cho c&aacute;c em nhỏ bởi sự x&acirc;y dựng đầy đủ t&agrave;i nguy&ecirc;n học tập b&ecirc;n cạnh c&aacute;c biện ph&aacute;p ngăn chặn th&ocirc;ng b&aacute;o, tin nhắn, gi&uacute;p trẻ ph&aacute;t triển th&oacute;i quen tốt l&agrave; tập trung v&agrave;o việc học.</p>
          <p>T&iacute;nh năng Huawei Share cho ph&eacute;p bạn kết nối chiếc tablet với một smartphone kh&aacute;c để thực hiện c&aacute;c thao t&aacute;c tr&ecirc;n m&agrave;n h&igrave;nh lớn hơn, gi&uacute;p cuộc sống v&agrave; c&ocirc;ng việc của bạn trở n&ecirc;n dễ d&agrave;ng hơn. Hay thậm ch&iacute; l&agrave; chế độ xem đa m&agrave;n h&igrave;nh với khả năng đa t&aacute;c vụ c&ugrave;ng một l&uacute;c, vừa đem đến hiệu quả, vừa thuận tiện, r&uacute;t ngắn thời gian xử l&yacute; c&ocirc;ng việc.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/233258/huawei-matepad-111021-041013.jpg"><img class=" lazyloaded" title="T&iacute;nh năng Huawei Share | Huawei MatePad" src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-111021-041013.jpg" alt="T&iacute;nh năng Huawei Share | Huawei MatePad" data-src="https://cdn.tgdd.vn/Products/Images/522/233258/huawei-matepad-111021-041013.jpg" /></a></p>
          <p>Huawei MatePad xứng đ&aacute;ng l&agrave; m&oacute;n qu&agrave; &yacute; nghĩa m&agrave; bố mẹ d&agrave;nh cho con em m&igrave;nh. D&ugrave; mục đ&iacute;ch l&agrave; học tập, l&agrave;m việc hay giải tr&iacute; nhẹ nh&agrave;ng, với mức gi&aacute; tầm trung nhưng lại sở hữu đầy đủ t&iacute;nh năng đ&aacute;ng c&oacute; của một chiếc tablet, Huawei MatePad dễ d&agrave;ng thuyết phục hầu hết mọi đối tượng, d&ugrave; l&agrave; kh&oacute; t&iacute;nh nhất.</p>','configuration' => '<table style="height: 183px;" width="797">
          <tbody>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">M&agrave;n h&igrave;nh:</td>
          <td style="width: 390.5px; height: 13px;"><span class="comma">8.7"</span><span class="">TFT LCD</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Hệ điều h&agrave;nh:</td>
          <td style="width: 390.5px; height: 13px;">Android 11</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">RAM:</td>
          <td style="width: 390.5px; height: 13px;">3 GB</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Bộ nhớ trong:</td>
          <td style="width: 390.5px; height: 13px;">32 GB</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Kết nối:</td>
          <td style="width: 390.5px; height: 13px;"><span class="comma">4G</span><span class="">C&oacute; nghe gọi</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">SIM:</td>
          <td style="width: 390.5px; height: 13px;">1 Nano SIM</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Camera sau:</td>
          <td style="width: 390.5px; height: 13px;">8 MP</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Camera trước:</td>
          <td style="width: 390.5px; height: 13px;">2 MP</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Pin, Sạc:</td>
          <td style="width: 390.5px; height: 13px;"><span class="comma">5100 mAh</span><span class="">15 W</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">H&atilde;ng</td>
          <td style="width: 390.5px; height: 13px;">Samsung</td>
          </tr>
          </tbody>
          </table>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','created_at' => '2021-06-27 07:10:52','updated_at' => '2021-06-27 07:10:52','deleted_at' => NULL),
            array('id' => '7','name' => 'Máy tính bảng Lenovo Tab M10 - Gen 2','code' => 'LT6','origin' => 'Hà Nam','price' => '4690000','picture' => '1624777930.jpg','status' => '1','description' => '<h3><a title="Tham khảo m&aacute;y t&iacute;nh bảng Lenovo Tab M10 - Gen 2 tại Thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang/lenovo-tab-m10-gen-2" target="_blank">Lenovo Tab M10 Gen 2</a>&nbsp;từ nh&agrave;&nbsp;<a title="Tham khảo m&aacute;y t&iacute;nh bảng của Lenovo kinh doanh tại thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang-lenovo" target="_blank">Lenovo</a>&nbsp;nổi bật trong ph&acirc;n kh&uacute;c tầm trung khi sở hữu thiết kế gọn nhẹ, hiện đại c&ugrave;ng khả năng kết nối mạnh mẽ, vi&ecirc;n pin ấn tượng v&agrave; cấu h&igrave;nh ổn định trong tầm gi&aacute;.</h3>
          <h3>Thiết kế hiện đại, th&acirc;n thiện với người d&ugrave;ng</h3>
          <p>Lenovo Tab M10 Gen 2 được l&agrave;m từ khung kim loại, nổi bật với những đường n&eacute;t cứng c&aacute;p, vu&ocirc;ng vức kết hợp với c&aacute;c g&oacute;c được bo tr&ograve;n tinh tế mang lại vẻ sang trọng cho thiết bị.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/235366/lenovo-tab-m10-gen-2-002-1.jpg"><img class=" ls-is-cached lazyloaded" title="Lenovo Tab M10 - Gen 2 | Thiết kế tinh tế, sang trọng" src="https://cdn.tgdd.vn/Products/Images/522/235366/lenovo-tab-m10-gen-2-002-1.jpg" alt="Lenovo Tab M10 - Gen 2 | Thiết kế tinh tế, sang trọng" data-src="https://cdn.tgdd.vn/Products/Images/522/235366/lenovo-tab-m10-gen-2-002-1.jpg" /></a></p>
          <p>M&aacute;y c&oacute; k&iacute;ch thước 241.54 x 149.38 x 8.25 mm tương đối nhỏ gọn để c&oacute; thể thoải m&aacute;i cầm nắm bằng một tay. Đặc biệt, với trọng chỉ nặng 420 g n&ecirc;n người d&ugrave;ng ho&agrave;n to&agrave;n c&oacute; thể y&ecirc;n t&acirc;m mang theo b&ecirc;n m&igrave;nh mỗi khi ra ngo&agrave;i l&agrave;m việc hoặc đi c&ocirc;ng t&aacute;c.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/235366/lenovo-tab-m10-gen-2-004.jpg"><img class=" ls-is-cached lazyloaded" title="Lenovo Tab M10 - Gen 2 | Thiết kế cạnh viền" src="https://cdn.tgdd.vn/Products/Images/522/235366/lenovo-tab-m10-gen-2-004.jpg" alt="Lenovo Tab M10 - Gen 2 | Thiết kế cạnh viền" data-src="https://cdn.tgdd.vn/Products/Images/522/235366/lenovo-tab-m10-gen-2-004.jpg" /></a></p>
          <p>Đ&aacute;ng ch&uacute; &yacute; l&agrave; hệ thống loa hai b&ecirc;n của Lenovo Tab M10 Gen 2 được t&iacute;ch hợp c&ocirc;ng nghệ &acirc;m thanh v&ograve;m Dolby Atmos, gi&uacute;p bạn đắm ch&igrave;m v&agrave;o kh&ocirc;ng gian bao quanh nhờ chất lượng &acirc;m thanh sống động hơn bao giờ hết.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/235366/lenovo-tab-m10-gen-2-009.jpg"><img class=" ls-is-cached lazyloaded" title="Lenovo Tab M10 - Gen 2 | &Acirc;m thanh v&ograve;m sống động" src="https://cdn.tgdd.vn/Products/Images/522/235366/lenovo-tab-m10-gen-2-009.jpg" alt="Lenovo Tab M10 - Gen 2 | &Acirc;m thanh v&ograve;m sống động" data-src="https://cdn.tgdd.vn/Products/Images/522/235366/lenovo-tab-m10-gen-2-009.jpg" /></a></p>
          <h3>Trải nghiệm th&uacute; vị hơn với m&agrave;n h&igrave;nh lớn</h3>
          <p>Lenovo Tab M10 Gen 2 sở hữu m&agrave;n h&igrave;nh k&iacute;ch thước lớn l&ecirc;n tới 10 inch với phần viền bezel được l&agrave;m mỏng tối ưu gi&uacute;p người d&ugrave;ng c&oacute; thể tận hưởng những khung h&igrave;nh ảnh bắt mắt hơn th&ocirc;ng qua trải nghiệm giải tr&iacute; h&agrave;ng ng&agrave;y.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/235366/lenovo-tab-m10-gen-2-001-1.jpg"><img class=" ls-is-cached lazyloaded" title="Lenovo Tab M10 - Gen 2 | Sở hữu m&agrave;n h&igrave;nh k&iacute;ch thước lớn l&ecirc;n tới 10 inch" src="https://cdn.tgdd.vn/Products/Images/522/235366/lenovo-tab-m10-gen-2-001-1.jpg" alt="Lenovo Tab M10 - Gen 2 | Sở hữu m&agrave;n h&igrave;nh k&iacute;ch thước lớn l&ecirc;n tới 10 inch" data-src="https://cdn.tgdd.vn/Products/Images/522/235366/lenovo-tab-m10-gen-2-001-1.jpg" /></a></p>
          <p>Tấm nền IPS LCD cho độ ph&acirc;n giải 800 x 1280 pixel v&agrave; độ s&aacute;ng tối đa 400 nits mang đến h&igrave;nh ảnh kh&aacute; ch&acirc;n thực, rực rỡ nhờ khả năng t&aacute;i tạo m&agrave;u sắc, độ chi tiết v&agrave; tương phản cao ở c&aacute;c g&oacute;c nh&igrave;n.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/235366/lenovo-tab-m10-gen-2-007.jpg"><img class=" lazyloaded" title="Lenovo Tab M10 - Gen 2 | Tấm nền IPS LCD cho độ ph&acirc;n giải 800 x 1280 pixel" src="https://cdn.tgdd.vn/Products/Images/522/235366/lenovo-tab-m10-gen-2-007.jpg" alt="Lenovo Tab M10 - Gen 2 | Tấm nền IPS LCD cho độ ph&acirc;n giải 800 x 1280 pixel" data-src="https://cdn.tgdd.vn/Products/Images/522/235366/lenovo-tab-m10-gen-2-007.jpg" /></a></p>
          <p>C&ugrave;ng với đ&oacute;, m&agrave;n h&igrave;nh n&agrave;y cũng được chứng nhận từ tổ chức T&Uuml;V Rheinland với c&ocirc;ng nghệ bảo vệ mắt người d&ugrave;ng nhờ khả năng giảm thiểu &aacute;nh s&aacute;ng xanh độc hại g&acirc;y hiện tượng mỏi mắt.</p>
          <h3>Đ&aacute;p ứng tốt nhu cầu sử dụng cơ bản</h3>
          <p>Sức mạnh từ bộ vi xử l&yacute; MediaTek Helio P22T 8 nh&acirc;n gi&uacute;p m&aacute;y hoạt động hiệu quả ở hầu hết c&aacute;c t&aacute;c vụ trong cuộc sống h&agrave;ng ng&agrave;y.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/235366/lenovotabm10-gen27.jpg"><img class=" lazyloaded" title="Lenovo Tab M10 - Gen 2 | Trang bị vi xử l&yacute; MediaTek Helio P22T 8 nh&acirc;n" src="https://cdn.tgdd.vn/Products/Images/522/235366/lenovotabm10-gen27.jpg" alt="Lenovo Tab M10 - Gen 2 | Trang bị vi xử l&yacute; MediaTek Helio P22T 8 nh&acirc;n" data-src="https://cdn.tgdd.vn/Products/Images/522/235366/lenovotabm10-gen27.jpg" /></a></p>
          <p>Trang bị dung lượng&nbsp;<a title="Tham khảo m&aacute;y t&iacute;nh bảng c&oacute; RAM dưới 4 GB kinh doanh tại thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang-ram-duoi-4gb" target="_blank">RAM 2 GB</a>&nbsp;cho ph&eacute;p hoạt động đa nhiệm ổn, &iacute;t xảy ra hiện tượng giật lag. Ngo&agrave;i ra,&nbsp;<a title="Tham khảo m&aacute;y t&iacute;nh bảng c&oacute; ROM 32 - 64 GB kinh doanh tại thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang-rom-32-den-64gb" target="_blank">bộ nhớ trong 32 GB</a>&nbsp;v&agrave; được hỗ trợ mở rộng dung lượng qua thẻ nhớ MicroSD tối đa 1 TB gi&uacute;p người d&ugrave;ng lưu trữ thoải m&aacute;i.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/235366/lenovo-tab-m10-gen-2-006.jpg"><img class=" lazyloaded" title="Lenovo Tab M10 - Gen 2 | Hỗ trợ thẻ nhớ ngo&agrave;i" src="https://cdn.tgdd.vn/Products/Images/522/235366/lenovo-tab-m10-gen-2-006.jpg" alt="Lenovo Tab M10 - Gen 2 | Hỗ trợ thẻ nhớ ngo&agrave;i" data-src="https://cdn.tgdd.vn/Products/Images/522/235366/lenovo-tab-m10-gen-2-006.jpg" /></a></p>
          <p>Với cấu h&igrave;nh n&agrave;y, m&aacute;y chơi tốt hầu hết mọi tựa game nhẹ cơ bản. Đối với những game đ&ograve;i hỏi cấu h&igrave;nh cao, người d&ugrave;ng cần điều chỉnh mức đồ họa thấp hơn để trải nghiệm game được tốt hơn.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/235366/lenovotabm10-gen24.jpg"><img class=" lazyloaded" title="Lenovo Tab M10 - Gen 2 | Đ&aacute;p ứng tốt hầu hết mọi tựa game nhẹ cơ bản" src="https://cdn.tgdd.vn/Products/Images/522/235366/lenovotabm10-gen24.jpg" alt="Lenovo Tab M10 - Gen 2 | Đ&aacute;p ứng tốt hầu hết mọi tựa game nhẹ cơ bản" data-src="https://cdn.tgdd.vn/Products/Images/522/235366/lenovotabm10-gen24.jpg" /></a></p>
          <p>Trang bị chế độ Kid Mode, bằng việc k&iacute;ch hoạt, phụ huynh ho&agrave;n to&agrave;n y&ecirc;n t&acirc;m khi đưa m&aacute;y cho con trẻ bởi sự bảo đảm về nội dung ph&ugrave; hợp, cũng như kiểm so&aacute;t thời gian sử dụng.</p>
          <h3>Khả năng nhiếp ảnh ở mức đủ d&ugrave;ng</h3>
          <p>Lenovo Tab M10 Gen 2 được nh&agrave; sản xuất trang bị cả camera trước v&agrave; sau nhằm phục vụ cho nhu cầu chụp ảnh kh&aacute;c nhau. Camera trước 5 MP nằm ở vị tr&iacute; trung t&acirc;m, chủ yếu phục vụ cho nhu cầu selfie nhanh ch&oacute;ng hay gọi video call tr&ograve; chuyện c&ugrave;ng bạn b&egrave;, người th&acirc;n.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/235366/lenovotabm10-gen25.jpg"><img class=" lazyloaded" title="Lenovo Tab M10 - Gen 2 | Camera trước 5 MP phục vụ cho nhu cầu selfie, gọi video call tr&ograve; chuyện" src="https://cdn.tgdd.vn/Products/Images/522/235366/lenovotabm10-gen25.jpg" alt="Lenovo Tab M10 - Gen 2 | Camera trước 5 MP phục vụ cho nhu cầu selfie, gọi video call tr&ograve; chuyện" data-src="https://cdn.tgdd.vn/Products/Images/522/235366/lenovotabm10-gen25.jpg" /></a></p>
          <p>Trong khi đ&oacute;, camera sau với độ ph&acirc;n giải 8 MP vừa đủ nhu cầu sử dụng v&agrave; m&aacute;y cũng cung cấp đầy đủ c&aacute;c t&iacute;nh năng chụp ảnh kh&ocirc;ng k&eacute;m g&igrave;&nbsp;<a title="Tham khảo điện thoại ch&iacute;nh h&atilde;ng tại Thegioididong.com " href="https://www.thegioididong.com/dtdd" target="_blank">smartphone</a>.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/235366/lenovo-tab-m10-gen-2-003.jpg"><img class=" lazyloaded" title="Lenovo Tab M10 - Gen 2 | Camera sau với độ ph&acirc;n giải 8 MP" src="https://cdn.tgdd.vn/Products/Images/522/235366/lenovo-tab-m10-gen-2-003.jpg" alt="Lenovo Tab M10 - Gen 2 | Camera sau với độ ph&acirc;n giải 8 MP" data-src="https://cdn.tgdd.vn/Products/Images/522/235366/lenovo-tab-m10-gen-2-003.jpg" /></a></p>
          <p>Nh&igrave;n chung, ở điều kiện &aacute;nh s&aacute;ng tốt, m&aacute;y lấy n&eacute;t kh&aacute; nhanh, chất lượng ảnh với độ chi tiết tốt, m&agrave;u sắc trung thực trong tầm gi&aacute;. Ngược lại, h&igrave;nh ảnh thu được trong điều kiện &aacute;nh s&aacute;ng phức tạp, thiếu s&aacute;ng th&igrave; chất lượng kh&ocirc;ng qu&aacute; tốt, nhưng vẫn c&oacute; thể chấp nhận được.</p>
          <h3>Kh&ocirc;ng lo gi&aacute;n đoạn v&igrave; cạn kiệt pin</h3>
          <p>Để đảm bảo nhu cầu học tập, giải tr&iacute; v&agrave; l&agrave;m việc li&ecirc;n tục cả ng&agrave;y d&agrave;i, nh&agrave; sản xuất ưu &aacute;i trang bị vi&ecirc;n pin khủng 5000 mAh tr&ecirc;n chiếc tablet của m&igrave;nh. Với cấu h&igrave;nh vừa phải v&agrave; m&agrave;n h&igrave;nh chỉ dừng ở mức HD th&igrave; thời lượng sử dụng của Lenovo Tab M10 Gen 2 kh&aacute; ấn tượng.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/235366/lenovo-tab-m10-gen-2-005-1.jpg"><img class=" lazyloaded" title="Lenovo Tab M10 - Gen 2 | Trang bị vi&ecirc;n pin khủng 5000 mAh" src="https://cdn.tgdd.vn/Products/Images/522/235366/lenovo-tab-m10-gen-2-005-1.jpg" alt="Lenovo Tab M10 - Gen 2 | Trang bị vi&ecirc;n pin khủng 5000 mAh" data-src="https://cdn.tgdd.vn/Products/Images/522/235366/lenovo-tab-m10-gen-2-005-1.jpg" /></a></p>
          <p>Nếu chỉ sử dụng c&aacute;c t&aacute;c vụ cơ bản, dung lượng pin n&agrave;y cho thời gian trải nghiệm tương đương k&eacute;o d&agrave;i đến ba ng&agrave;y. Ngo&agrave;i ra, m&aacute;y cũng hỗ trợ kết nối OTG để sạc cho c&aacute;c thiết bị kh&aacute;c hoặc lắp th&ecirc;m chuột, b&agrave;n ph&iacute;m.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/235366/lenovotabm10-gen214.jpg"><img class=" lazyloaded" title="Lenovo Tab M10 - Gen 2 | Hỗ trợ kết nối OTG để sạc cho c&aacute;c thiết bị kh&aacute;c hoặc lắp th&ecirc;m chuột, b&agrave;n ph&iacute;m" src="https://cdn.tgdd.vn/Products/Images/522/235366/lenovotabm10-gen214.jpg" alt="Lenovo Tab M10 - Gen 2 | Hỗ trợ kết nối OTG để sạc cho c&aacute;c thiết bị kh&aacute;c hoặc lắp th&ecirc;m chuột, b&agrave;n ph&iacute;m" data-src="https://cdn.tgdd.vn/Products/Images/522/235366/lenovotabm10-gen214.jpg" /></a></p>
          <p>Với những ai đang t&igrave;m kiếm một chiếc tablet tương đối nhỏ gọn phục vụ cho việc học, l&agrave;m việc v&agrave; giải tr&iacute; cơ bản th&igrave; kh&ocirc;ng n&ecirc;n bỏ qua Lenovo Tab M10 Gen 2 bởi những ưu điểm như đ&atilde; n&ecirc;u tr&ecirc;n cũng như sự uy t&iacute;n đến từ thương hiệu Lenovo.</p>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','configuration' => '<table style="height: 183px;" width="797">
          <tbody>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">M&agrave;n h&igrave;nh:</td>
          <td style="width: 390.5px; height: 13px;"><span class="comma">8.7"</span><span class="">TFT LCD</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Hệ điều h&agrave;nh:</td>
          <td style="width: 390.5px; height: 13px;">Android 11</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">RAM:</td>
          <td style="width: 390.5px; height: 13px;">3 GB</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Bộ nhớ trong:</td>
          <td style="width: 390.5px; height: 13px;">32 GB</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Kết nối:</td>
          <td style="width: 390.5px; height: 13px;"><span class="comma">4G</span><span class="">C&oacute; nghe gọi</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">SIM:</td>
          <td style="width: 390.5px; height: 13px;">1 Nano SIM</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Camera sau:</td>
          <td style="width: 390.5px; height: 13px;">8 MP</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Camera trước:</td>
          <td style="width: 390.5px; height: 13px;">2 MP</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Pin, Sạc:</td>
          <td style="width: 390.5px; height: 13px;"><span class="comma">5100 mAh</span><span class="">15 W</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">H&atilde;ng</td>
          <td style="width: 390.5px; height: 13px;">Samsung</td>
          </tr>
          </tbody>
          </table>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','created_at' => '2021-06-27 07:12:10','updated_at' => '2021-06-27 07:12:10','deleted_at' => NULL),
            array('id' => '8','name' => 'Máy tính bảng iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021)','code' => 'IPP1','origin' => 'Thái Bình','price' => '38490000','picture' => '1624777993.jpg','status' => '1','description' => '<h3>M&aacute;y t&iacute;nh bảng&nbsp;<a title="Tham khảo iPad Pro M1 12.9 inch Wifi Cellular 256GB (2021) kinh tại Thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang/ipad-pro-m1-129-inch-wifi-cellular-256gb-2021" target="_blank">iPad Pro M1 12.9 inch Wifi Cellular 256GB (2021)</a>&nbsp;trang bị con chip v&ocirc; c&ugrave;ng mạnh mẽ M1 c&ugrave;ng c&ocirc;ng nghệ m&agrave;n h&igrave;nh mới mini-LED được rất nhiều người d&ugrave;ng đ&oacute;n nhận nồng nhiệt v&agrave; đ&aacute;nh gi&aacute; rất tốt sản phẩm n&agrave;y đến từ&nbsp;<a title="Tham khảo sản phẩm Apple kinh doanh tại thegioididong.com" href="https://www.thegioididong.com/apple" target="_blank">Apple</a>.</h3>
          <h3>Hơn cả một chiếc&nbsp;<a title="Tham khảo m&aacute;y t&iacute;nh bảng kinh doanh tại Thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang" target="_blank">m&aacute;y t&iacute;nh bảng</a>&nbsp;cầm tay</h3>
          <p>iPad Pro 12.9 inch 2021 sử dụng chip M1 8 nh&acirc;n, Apple c&ocirc;ng bố chip M1 c&oacute; hiệu năng CPU nhanh hơn 50% v&agrave; GPU nhanh hơn 40%, đồng thời tiết kiệm năng lượng hơn so với người tiền nhiệm. Đ&acirc;y ch&iacute;nh l&agrave; lợi thế cạnh tranh gi&uacute;p m&aacute;y đ&aacute;nh bại c&aacute;c d&ograve;ng m&aacute;y kh&aacute;c trong c&ugrave;ng ph&acirc;n kh&uacute;c.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-1.jpg"><img class=" ls-is-cached lazyloaded" title="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Sử dụng chip M1 8 nh&acirc;n" src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-1.jpg" alt="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Sử dụng chip M1 8 nh&acirc;n" data-src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-1.jpg" /></a></p>
          <p>Sức mạnh chưa bao giờ l&agrave; vấn đề với m&aacute;y khi thiết bị ho&agrave;n to&agrave;n c&oacute; thể đ&aacute;p ứng được nhiều nhu cầu sử dụng kh&aacute;c nhau từ việc giải tr&iacute; nghe nhạc, xem phim, chơi game cấu h&igrave;nh cao, cho đến kết nối mạng học trực tuyến đều đ&aacute;p ứng rất tốt.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-18.jpg"><img class=" ls-is-cached lazyloaded" title="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Đ&aacute;p ứng tốt nhu cầu giải tr&iacute; nghe nhạc, xem phim, chơi game cấu h&igrave;nh cao" src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-18.jpg" alt="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Đ&aacute;p ứng tốt nhu cầu giải tr&iacute; nghe nhạc, xem phim, chơi game cấu h&igrave;nh cao" data-src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-18.jpg" /></a></p>
          <p>Chưa kể, m&aacute;y được sở hữu&nbsp;<a title="Tham khảo m&aacute;y t&iacute;nh bảng c&oacute; RAM 8 GB trở l&ecirc;n kinh doanh tại thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang-ram-8gb-tro-len" target="_blank">RAM 8 GB</a>&nbsp;đảm bảo xử l&yacute; đa nhiệm vượt trội,&nbsp;<a title="Tham khảo m&aacute;y t&iacute;nh ảng c&oacute; ROM 128-256GB kinh doanh tại thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang-rom-128-den-256gb" target="_blank">bộ nhớ trong 256 GB</a>&nbsp;lưu trữ thoải m&aacute;i v&agrave; hệ điều h&agrave;nh iPadOS 14 rất trực quan, dễ sử dụng v&agrave; chứa h&agrave;ng loạt c&aacute;c t&iacute;nh năng hay ho chờ người d&ugrave;ng kh&aacute;m ph&aacute;.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-14.jpg"><img class=" ls-is-cached lazyloaded" title="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | RAM 8 GB, bộ nhớ trong 256 GB c&ugrave;ng hệ điều h&agrave;nh iPadOS 14 rất trực quan" src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-14.jpg" alt="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | RAM 8 GB, bộ nhớ trong 256 GB c&ugrave;ng hệ điều h&agrave;nh iPadOS 14 rất trực quan" data-src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-14.jpg" /></a></p>
          <p>B&ecirc;n cạnh hỗ trợ Wifi 6, c&ocirc;ng nghệ 5G t&iacute;ch hợp tr&ecirc;n m&aacute;y ch&iacute;nh l&agrave; thứ khiến người d&ugrave;ng sẵn s&agrave;ng &ldquo;m&oacute;c hầu bao&rdquo; để rinh chiếc m&aacute;y về cho ri&ecirc;ng m&igrave;nh.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-2.jpg"><img class=" ls-is-cached lazyloaded" title="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | C&ocirc;ng nghệ 5G được t&iacute;ch hợp" src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-2.jpg" alt="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | C&ocirc;ng nghệ 5G được t&iacute;ch hợp" data-src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-2.jpg" /></a></p>
          <h3>Đắm m&igrave;nh v&agrave;o những ph&uacute;t gi&acirc;y giải tr&iacute;</h3>
          <p>Phi&ecirc;n bản iPad Pro n&agrave;y được trang bị m&agrave;n h&igrave;nh k&iacute;ch thước l&ecirc;n tới 12.9 inch, c&ugrave;ng phần viền xung quanh mỏng gi&uacute;p người d&ugrave;ng c&oacute; được kh&ocirc;ng gian hiển thị tối ưu trong th&acirc;n m&aacute;y gọn, nhẹ nhất c&oacute; thể.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/238651/ipad-pro-m1-129-inch-08.jpg"><img class=" ls-is-cached lazyloaded" title="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Đắm m&igrave;nh v&agrave;o những ph&uacute;t gi&acirc;y giải tr&iacute; với m&agrave;n h&igrave;nh k&iacute;ch thước l&ecirc;n tới 12.9 inch" src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-129-inch-08.jpg" alt="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Đắm m&igrave;nh v&agrave;o những ph&uacute;t gi&acirc;y giải tr&iacute; với m&agrave;n h&igrave;nh k&iacute;ch thước l&ecirc;n tới 12.9 inch" data-src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-129-inch-08.jpg" /></a></p>
          <p>Đương nhi&ecirc;n, khả năng hiển thị của m&aacute;y cũng sẽ nhỉnh hơn so với đ&agrave;n em nhờ tấm nền Liquid Retina XDR. B&ecirc;n cạnh sở hữu độ ph&acirc;n giải 2048 x 2732 pixel, m&agrave;n h&igrave;nh c&ograve;n hỗ trợ gam m&agrave;u P3, True Tone gi&uacute;p c&acirc;n bằng v&agrave; ProMotion cho tốc độ l&agrave;m mới 120 Hz gi&uacute;p h&igrave;nh ảnh trở n&ecirc;n sống động, mượt m&agrave;.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-11.jpg"><img class=" ls-is-cached lazyloaded" title="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Khả năng hiển thị tốt nhờ tấm nền Liquid Retina XDR" src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-11.jpg" alt="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Khả năng hiển thị tốt nhờ tấm nền Liquid Retina XDR" data-src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-11.jpg" /></a></p>
          <p>Đặc biệt, m&agrave;n h&igrave;nh n&agrave;y sử dụng c&ocirc;ng nghệ mini-LED ho&agrave;n to&agrave;n mới, gồm 10.000 b&oacute;ng LED si&ecirc;u nhỏ cho độ tương phản cao 1.000.000:1 v&igrave; thế độ s&aacute;ng tối đa c&oacute; thể đạt 1600 nits để người d&ugrave;ng c&oacute; những ph&uacute;t gi&acirc;y trải nghiệm thị gi&aacute;c tột đỉnh.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-3.jpg"><img class=" lazyloaded" title="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | M&agrave;n h&igrave;nh sử dụng c&ocirc;ng nghệ mini-LED ho&agrave;n to&agrave;n mới, gồm 10.000 b&oacute;ng LED si&ecirc;u nhỏ" src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-3.jpg" alt="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | M&agrave;n h&igrave;nh sử dụng c&ocirc;ng nghệ mini-LED ho&agrave;n to&agrave;n mới, gồm 10.000 b&oacute;ng LED si&ecirc;u nhỏ" data-src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-3.jpg" /></a></p>
          <p>Kh&ocirc;ng chỉ sở hữu m&agrave;n h&igrave;nh chất lượng cao, sản phẩm c&ograve;n được Apple chăm ch&uacute;t rất kỹ lưỡng khi trang bị lớp Oleophobic chống b&aacute;m dấu v&acirc;n tay v&agrave; phủ lớp chống ch&oacute;i, gi&uacute;p người d&ugrave;ng trải nghiệm m&aacute;y tốt hơn m&agrave; kh&ocirc;ng bị mỏi mắt hay kh&oacute; chịu.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/238651/ipad-pro-m1-129-inch-01.jpg"><img class=" lazyloaded" title="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Trang bị lớp Oleophobic chống b&aacute;m dấu v&acirc;n tay v&agrave; phủ lớp chống ch&oacute;i" src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-129-inch-01.jpg" alt="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Trang bị lớp Oleophobic chống b&aacute;m dấu v&acirc;n tay v&agrave; phủ lớp chống ch&oacute;i" data-src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-129-inch-01.jpg" /></a></p>
          <p>Tin vui d&agrave;nh cho những người thường xuy&ecirc;n phải ghi ch&uacute; hay thực hiện c&aacute;c c&ocirc;ng việc đồ họa chuy&ecirc;n nghiệp th&igrave; iPad Pro 12.9 inch 2021 sẽ hỗ trợ b&uacute;t Apple Pencil thế hệ 2 với nhiều cải tiến vượt bậc, mọi t&aacute;c vụ sẽ được xử l&yacute; nhanh ch&oacute;ng v&agrave; ch&iacute;nh x&aacute;c ngay tr&ecirc;n ch&iacute;nh chiếc iPad của m&igrave;nh.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-17.jpg"><img class=" lazyloaded" title="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Hỗ trợ b&uacute;t Apple Pencil thế hệ 2 với nhiều cải tiến" src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-17.jpg" alt="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Hỗ trợ b&uacute;t Apple Pencil thế hệ 2 với nhiều cải tiến" data-src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-17.jpg" /></a></p>
          <p>Lưu &yacute;. C&aacute;c phụ kiện hỗ trợ như b&uacute;t Apple Pencil sẽ kh&ocirc;ng đi k&egrave;m trong hộp m&aacute;y.</p>
          <h3>Từng đường n&eacute;t ho&agrave;n hảo đến lạ kỳ</h3>
          <p>iPad Pro 12.9 inch 2021 được ho&agrave;n thiện từ chất liệu nh&ocirc;m nguy&ecirc;n khối c&oacute; độ s&aacute;ng b&oacute;ng, với thiết kế vu&ocirc;ng vức mang đến ngoại h&igrave;nh đẳng cấp, thời thượng cho thiết bị.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/238651/ipad-pro-m1-129-inch-02.jpg"><img class=" lazyloaded" title="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Thiết kế mặt lưng" src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-129-inch-02.jpg" alt="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Thiết kế mặt lưng" data-src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-129-inch-02.jpg" /></a></p>
          <p>Việc loại bỏ n&uacute;t Home v&agrave; thay v&agrave;o c&ocirc;ng nghệ&nbsp;<a title="Tham khảo m&aacute;y t&iacute;nh bảng c&oacute; bảo vệ khu&ocirc;n mặt kinh doanh tại thegioididong.com" href="https://www.thegioididong.com/may-tinh-bang-bao-mat-khuon-mat" target="_blank">nhận dạng khu&ocirc;n mặt Face ID</a>&nbsp;gi&uacute;p cho mặt trước của chiếc iPad n&agrave;y trở n&ecirc;n th&ocirc;ng tho&aacute;ng v&agrave; sang trọng hơn.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-4.jpg"><img class=" lazyloaded" title="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Bỏ n&uacute;t Home v&agrave; thay v&agrave;o c&ocirc;ng nghệ nhận dạng khu&ocirc;n mặt Face ID" src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-4.jpg" alt="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Bỏ n&uacute;t Home v&agrave; thay v&agrave;o c&ocirc;ng nghệ nhận dạng khu&ocirc;n mặt Face ID" data-src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-4.jpg" /></a></p>
          <p>Thiết kế tổng thể của m&aacute;y kh&ocirc;ng qu&aacute; kh&aacute;c biệt so với phi&ecirc;n bản tiền nhiệm, vẫn sẽ c&oacute; bốn cụm loa ngo&agrave;i để tăng cường trải nghiệm giải tr&iacute; nhờ c&ocirc;ng nghệ &acirc;m thanh v&ograve;m Dolby Atmos, nam ch&acirc;m cho ph&eacute;p dễ d&agrave;ng kết nối với c&aacute;c phụ kiện gắn ngo&agrave;i như b&agrave;n ph&iacute;m v&agrave; hệ thống năm micro với chất lượng thu &acirc;m đa hướng, khử nhiễu tốt.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/238651/ipad-pro-m1-129-inch-06.jpg"><img class=" lazyloaded" title="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | C&ocirc;ng nghệ &acirc;m thanh v&ograve;m Dolby Atmos" src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-129-inch-06.jpg" alt="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | C&ocirc;ng nghệ &acirc;m thanh v&ograve;m Dolby Atmos" data-src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-129-inch-06.jpg" /></a></p>
          <p>Bằng việc sử dụng cổng USB-C chuẩn Thunderbolt cho ph&eacute;p người d&ugrave;ng c&oacute; thể tận dụng tất cả những lợi &iacute;ch tuyệt vời nhất như kết nối với ổ cứng, m&agrave;n h&igrave;nh ngo&agrave;i với tốc độ cao.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-8.jpg"><img class=" lazyloaded" title="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Cổng USB-C chuẩn Thunderbolt kết nối với ổ cứng, m&agrave;n h&igrave;nh ngo&agrave;i với tốc độ cao" src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-8.jpg" alt="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Cổng USB-C chuẩn Thunderbolt kết nối với ổ cứng, m&agrave;n h&igrave;nh ngo&agrave;i với tốc độ cao" data-src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-8.jpg" /></a></p>
          <h3>Chụp ảnh, quay video thỏa th&iacute;ch</h3>
          <p>Camera selfie g&oacute;c si&ecirc;u rộng độ ph&acirc;n giải 12 MP với t&iacute;nh năng Center Stage mới được Apple t&iacute;ch hợp, gi&uacute;p &iacute;ch rất nhiều cho người d&ugrave;ng khi gọi FaceTime bởi khả năng theo d&otilde;i v&agrave; thay đổi g&oacute;c quay giữ cho đối tượng lu&ocirc;n ở giữa khung h&igrave;nh.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-13.jpg"><img class=" lazyloaded" title="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Camera selfie g&oacute;c si&ecirc;u rộng độ ph&acirc;n giải 12 MP với t&iacute;nh năng Center Stage" src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-13.jpg" alt="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Camera selfie g&oacute;c si&ecirc;u rộng độ ph&acirc;n giải 12 MP với t&iacute;nh năng Center Stage" data-src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-13.jpg" /></a></p>
          <p>Tựa như phi&ecirc;n bản trước, m&aacute;y cũng sở hữu hệ thống camera k&eacute;p ở mặt sau, gồm camera ch&iacute;nh 12 MP với khả năng lấy n&eacute;t tự động nhanh, ch&iacute;nh x&aacute;c, camera g&oacute;c rộng 10 MP với trường nh&igrave;n 125 độ bắt trọn mọi khung cảnh thi&ecirc;n nhi&ecirc;n m&agrave; vẫn đảm bảo độ chi tiết.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/238651/ipad-pro-m1-129-inch-03.jpg"><img class=" lazyloaded" title="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Sở hữu hệ thống camera k&eacute;p ở mặt sau" src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-129-inch-03.jpg" alt="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Sở hữu hệ thống camera k&eacute;p ở mặt sau" data-src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-129-inch-03.jpg" /></a></p>
          <p>Nhằm phục vụ tốt hơn khi chụp thiếu s&aacute;ng, Apple trang bị cho m&aacute;y một đ&egrave;n flash True Tone nhờ đ&oacute; chất lượng h&igrave;nh ảnh tr&ocirc;ng r&otilde; n&eacute;t hơn. Khả năng thu nhỏ quang học 2x v&agrave; zoom kỹ thuật số l&ecirc;n đến 5x khiến thiết bị cũng sẽ l&agrave; lựa chọn đ&aacute;ng gi&aacute; cho những ai y&ecirc;u th&iacute;ch chụp cận cảnh hay zoom xa.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/238651/ipad-pro-m1-129-inch-09.jpg"><img class=" lazyloaded" title="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Giao diện chụp ảnh" src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-129-inch-09.jpg" alt="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Giao diện chụp ảnh" data-src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-129-inch-09.jpg" /></a></p>
          <p>Đ&aacute;ng ch&uacute; &yacute; l&agrave; m&aacute;y qu&eacute;t LiDAR đột ph&aacute; cho bạn trải nghiệm AR sống động, khi kết hợp với ISP mạnh mẽ từ thuật to&aacute;n M1 gi&uacute;p lấy n&eacute;t ch&iacute;nh x&aacute;c hơn với h&igrave;nh ảnh v&agrave; video trong những điều kiện &aacute;nh s&aacute;ng yếu.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-12.jpg"><img class=" lazyloaded" title="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | M&aacute;y qu&eacute;t LiDAR đột ph&aacute; cho bạn trải nghiệm AR sống động" src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-12.jpg" alt="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | M&aacute;y qu&eacute;t LiDAR đột ph&aacute; cho bạn trải nghiệm AR sống động" data-src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-12.jpg" /></a></p>
          <p>Để ghi lại những khoảnh khắc đ&aacute;ng nhớ, đầy kỷ niệm với người th&acirc;n, bạn b&egrave; trong những dịp quan trọng th&igrave; nhất định kh&ocirc;ng thể bỏ qua chuẩn quay video 4K ở tốc độ 60 fps.</p>
          <h3>Đồng h&agrave;nh suốt cả ng&agrave;y d&agrave;i</h3>
          <p>Được t&iacute;ch hợp vi&ecirc;n pin khủng l&ecirc;n tới 40.88 Wh khoảng 10.835 mAh, được tối ưu bởi con chip M1 v&agrave; c&ocirc;ng nghệ m&agrave;n h&igrave;nh mini-LED mới gi&uacute;p tiết kiệm điện năng đ&aacute;ng kể để m&aacute;y c&oacute; thể trụ l&ecirc;n tới 10 giờ đồng hồ cho nhiều t&aacute;c vụ, mang đến những trải nghiệm v&ocirc; c&ugrave;ng bất tận.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/238651/ipad-pro-m1-129-inch-07.jpg"><img class=" lazyloaded" title="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Được t&iacute;ch hợp vi&ecirc;n pin khủng l&ecirc;n tới 40.88 Wh khoảng 10.835 mAh" src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-129-inch-07.jpg" alt="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Được t&iacute;ch hợp vi&ecirc;n pin khủng l&ecirc;n tới 40.88 Wh khoảng 10.835 mAh" data-src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-129-inch-07.jpg" /></a></p>
          <p>Ngo&agrave;i ra, để đ&aacute;p ứng nhu cầu sử dụng ng&agrave;y c&agrave;ng cao nhưng đồng thời kh&ocirc;ng cắt giảm dung lượng pin của m&aacute;y, Apple cũng kh&ocirc;ng qu&ecirc;n trang bị c&ocirc;ng nghệ sạc nhanh với c&ocirc;ng suất l&ecirc;n đến 20 W, mọi vấn đề của người d&ugrave;ng đều được giải quyết trong t&iacute;ch tắc.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-19.jpg"><img class=" lazyloaded" title="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Trang bị c&ocirc;ng nghệ sạc nhanh với c&ocirc;ng suất l&ecirc;n đến 20 W" src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-19.jpg" alt="iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021) | Trang bị c&ocirc;ng nghệ sạc nhanh với c&ocirc;ng suất l&ecirc;n đến 20 W" data-src="https://cdn.tgdd.vn/Products/Images/522/238651/ipad-pro-m1-12-9-inch-wifi-cellular-256gb-2021-19.jpg" /></a></p>
          <p>Với những n&acirc;ng cấp nổi bật n&ecirc;u tr&ecirc;n, chắc hẳn người d&ugrave;ng sẽ c&oacute; c&aacute;i nh&igrave;n tổng quan hơn về iPad Pro M1 12.9 inch Wifi Cellular 256GB (2021). Nếu vẫn c&ograve;n đang ph&acirc;n v&acirc;n lựa chọn giữa m&aacute;y với phi&ecirc;n bản 11 inch, th&igrave; k&iacute;ch thước lớn v&agrave; c&ocirc;ng nghệ m&agrave;n h&igrave;nh mini-LED chất lượng cao ch&iacute;nh l&agrave; l&yacute; do thuyết phục nhất để người d&ugrave;ng &ldquo;rước&rdquo; m&aacute;y.</p>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','configuration' => '<table style="height: 183px;" width="797">
          <tbody>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">M&agrave;n h&igrave;nh:</td>
          <td style="width: 390.5px; height: 13px;"><span class="comma">8.7"</span><span class="">TFT LCD</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Hệ điều h&agrave;nh:</td>
          <td style="width: 390.5px; height: 13px;">Android 11</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">RAM:</td>
          <td style="width: 390.5px; height: 13px;">3 GB</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Bộ nhớ trong:</td>
          <td style="width: 390.5px; height: 13px;">32 GB</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Kết nối:</td>
          <td style="width: 390.5px; height: 13px;"><span class="comma">4G</span><span class="">C&oacute; nghe gọi</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">SIM:</td>
          <td style="width: 390.5px; height: 13px;">1 Nano SIM</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Camera sau:</td>
          <td style="width: 390.5px; height: 13px;">8 MP</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Camera trước:</td>
          <td style="width: 390.5px; height: 13px;">2 MP</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">Pin, Sạc:</td>
          <td style="width: 390.5px; height: 13px;"><span class="comma">5100 mAh</span><span class="">15 W</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390.5px; height: 13px;">H&atilde;ng</td>
          <td style="width: 390.5px; height: 13px;">Samsung</td>
          </tr>
          </tbody>
          </table>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','created_at' => '2021-06-27 07:13:13','updated_at' => '2021-06-27 07:16:48','deleted_at' => NULL)
          );
          DB::table('tablets')->insert($tablets);
    }
}
