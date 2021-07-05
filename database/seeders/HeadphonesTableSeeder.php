<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HeadphonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headphones')->truncate();

        $headphones = array(
            array('id' => '1','name' => 'Tai nghe Bluetooth True Wireless JBL T115TWS','code' => 'TN1','origin' => 'Thái Bình','price' => '1490000','picture' => '1624779502.jpg','status' => '1','description' => '<h3><a title="Tham khảo một số mẫu tai nghe JBL tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe-jbl" target="_blank">Tai nghe JBL</a>&nbsp;dạng oval thon gọn, hộp sạc cứng c&aacute;p, 2 phi&ecirc;n bản m&agrave;u trắng - đen</h3>
          <p>Thiết kế housing với đường n&eacute;t tinh tế, uốn cong theo h&igrave;nh oval, bề mặt bằng nhựa sần tốt, bền bỉ, kh&aacute;ng vỡ, cầm nắm dễ chịu, xoay chuyển vị tr&iacute; linh hoạt để đeo tai vừa vặn.&nbsp;<strong>N&uacute;t tai silicone</strong>&nbsp;mềm mại, n&acirc;ng cao khả năng c&aacute;ch &acirc;m khi chọn n&uacute;t tai&nbsp;ph&ugrave; hợp với khổ tai của m&igrave;nh.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/243041/tai-nghe-bluetooth-true-wireless-jbl-tune-115-3.jpg"><img class=" ls-is-cached lazyloaded" title="Tai nghe Bluetooth True Wireless JBL T115TWS - Tai nghe vừa vặn" src="https://cdn.tgdd.vn/Products/Images/54/243041/tai-nghe-bluetooth-true-wireless-jbl-tune-115-3.jpg" alt="Tai nghe Bluetooth True Wireless JBL T115TWS - Tai nghe vừa vặn" data-src="https://cdn.tgdd.vn/Products/Images/54/243041/tai-nghe-bluetooth-true-wireless-jbl-tune-115-3.jpg" /></a></p>
          <p>Hộp sạc c&oacute; đồng m&agrave;u sắc v&agrave; chất liệu, h&igrave;nh khối vững chắc, trang bị bản lề đ&oacute;ng mở nắp dễ d&agrave;ng, b&ecirc;n trong hộp c&oacute; vị tr&iacute; đặt&nbsp;<a title="Xem th&ecirc;m c&aacute;c sản phẩm tai nghe Bluetooth tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe-bluetooth" target="_blank">tai nghe Bluetooth</a>&nbsp;đảm bảo phần tr&ecirc;n tai nghe nh&ocirc; cao cho bạn tiện nhấc v&agrave; đặt trở lại hộp.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/243041/tai-nghe-bluetooth-true-wireless-jbl-tune-115-8.jpg"><img class=" ls-is-cached lazyloaded" title="Tai nghe Bluetooth True Wireless JBL T115TWS - C&oacute; 2 m&agrave;u" src="https://cdn.tgdd.vn/Products/Images/54/243041/tai-nghe-bluetooth-true-wireless-jbl-tune-115-8.jpg" alt="Tai nghe Bluetooth True Wireless JBL T115TWS - C&oacute; 2 m&agrave;u" data-src="https://cdn.tgdd.vn/Products/Images/54/243041/tai-nghe-bluetooth-true-wireless-jbl-tune-115-8.jpg" /></a></p>
          <h3>Cải thiện chất &acirc;m, t&aacute;i tạo &acirc;m bass s&acirc;u, uy lực hơn với&nbsp;JBL Pure Bass Sound</h3>
          <p>B&ecirc;n trong tai nghe c&oacute;&nbsp;<strong>m&agrave;ng loa 5.8 mm</strong>, hỗ trợ c&ocirc;ng nghệ &acirc;m thanh ti&ecirc;n tiến của h&atilde;ng&nbsp;JBL mang đến l&agrave;n &acirc;m thanh trung thực,&nbsp;<strong>tăng cường dải &acirc;m bass</strong>&nbsp;c&agrave;ng th&ecirc;m chắc khỏe, dứt kho&aacute;t, đủ hay khi thưởng thức nhiều thể loại nhạc như EDM, Dance,&nbsp;Vinahouse, Pop,...&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/243041/tai-nghe-bluetooth-true-wireless-jbl-tune-115-7.jpg"><img class=" ls-is-cached lazyloaded" title="Tai nghe Bluetooth True Wireless JBL T115TWS - &Acirc;m thanh" src="https://cdn.tgdd.vn/Products/Images/54/243041/tai-nghe-bluetooth-true-wireless-jbl-tune-115-7.jpg" alt="Tai nghe Bluetooth True Wireless JBL T115TWS - &Acirc;m thanh" data-src="https://cdn.tgdd.vn/Products/Images/54/243041/tai-nghe-bluetooth-true-wireless-jbl-tune-115-7.jpg" /></a></p>
          <h3>Nghe nhạc cả ng&agrave;y với&nbsp;<a title="Xem th&ecirc;m một số mẫu tai nghe Bluetooth đang được kinh doanh tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe-jbl-bluetooth" target="_blank">tai nghe Bluetooth JBL</a>&nbsp;cung cấp 6 giờ d&ugrave;ng, hộp sạc 15 giờ&nbsp;</h3>
          <p>Sạc đầy pin trong&nbsp;<strong>2 giờ</strong>&nbsp;c&ugrave;ng&nbsp;<strong>cổng Type-C&nbsp;</strong>cho tốc độ kết nối v&agrave; sạc cao. Đặc biệt, tai nghe c&oacute; t&iacute;nh năng sạc nhanh, chỉ mất<strong>&nbsp;15 ph&uacute;t sạc</strong>, tai nghe sẽ sẵn s&agrave;ng cho&nbsp;<strong>60 ph&uacute;t</strong>&nbsp;sử dụng.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/243041/tai-nghe-bluetooth-true-wireless-jbl-tune-115-5.jpg"><img class=" ls-is-cached lazyloaded" title="Tai nghe Bluetooth True Wireless JBL T115TWS - Thời gian sử dụng" src="https://cdn.tgdd.vn/Products/Images/54/243041/tai-nghe-bluetooth-true-wireless-jbl-tune-115-5.jpg" alt="Tai nghe Bluetooth True Wireless JBL T115TWS - Thời gian sử dụng" data-src="https://cdn.tgdd.vn/Products/Images/54/243041/tai-nghe-bluetooth-true-wireless-jbl-tune-115-5.jpg" /></a><a class="preventdefault" href="https://www.thegioididong.com/images/54/243041/tai-nghe-bluetooth-true-wireless-jbl-tune-115-6.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless JBL T115TWS - Cổng sạc" src="https://cdn.tgdd.vn/Products/Images/54/243041/tai-nghe-bluetooth-true-wireless-jbl-tune-115-6.jpg" alt="Tai nghe Bluetooth True Wireless JBL T115TWS - Cổng sạc" data-src="https://cdn.tgdd.vn/Products/Images/54/243041/tai-nghe-bluetooth-true-wireless-jbl-tune-115-6.jpg" /></a></p>
          <h3>Ngồi ở khoảng c&aacute;ch xa vẫn c&oacute; t&iacute;n hiệu ổn định với kết nối&nbsp;<strong>Bluetooth 5.0</strong></h3>
          <p>Kh&ocirc;ng cần phải duy tr&igrave; khoảng c&aacute;ch&nbsp;<a title="Tham khảo th&ecirc;m một số tai nghe tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe" target="_blank">tai nghe</a>&nbsp;với&nbsp;<a title="Tham khảo điện thoại gi&aacute; rẻ ch&iacute;nh h&atilde;ng b&aacute;n tại Thế Giới Di Động" href="https://www.thegioididong.com/dtdd" target="_blank">điện thoại</a>,&nbsp;<a title="Tham khảo tablet gi&aacute; rẻ ch&iacute;nh h&atilde;ng b&aacute;n tại Thế Giới Di Động" href="https://www.thegioididong.com/may-tinh-bang" target="_blank">tablet</a>,&nbsp;<a title="Tham khảo laptop gi&aacute; rẻ ch&iacute;nh h&atilde;ng b&aacute;n tại Thế Giới Di Động" href="https://www.thegioididong.com/laptop" target="_blank">laptop</a>&nbsp;qu&aacute; gần, với phạm vi kết nối đến&nbsp;<strong>10 m</strong>, độ trễ thấp, bạn c&oacute; thể nghe nhạc, xem video, l&agrave;m việc ở nhiều tư thế, vị tr&iacute;, vui vẻ tận hưởng cuộc sống c&ugrave;ng JBL T115.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/243041/tai-nghe-bluetooth-true-wireless-jbl-tune-115-4.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless JBL T115TWS - Bluetooth" src="https://cdn.tgdd.vn/Products/Images/54/243041/tai-nghe-bluetooth-true-wireless-jbl-tune-115-4.jpg" alt="Tai nghe Bluetooth True Wireless JBL T115TWS - Bluetooth" data-src="https://cdn.tgdd.vn/Products/Images/54/243041/tai-nghe-bluetooth-true-wireless-jbl-tune-115-4.jpg" /></a></p>
          <h3>N&uacute;t nhấn in logo&nbsp;JBL chỉnh được nhiều chức năng</h3>
          <p>Dễ d&agrave;ng thao t&aacute;c ph&aacute;t/dừng nghe nhạc, chuyển b&agrave;i h&aacute;t, trả lời/từ chối cuộc gọi, tương t&aacute;c trợ l&yacute; ảo&nbsp;Google Assistant.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/243041/tai-nghe-bluetooth-true-wireless-jbl-tune-115-2.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless JBL T115TWS - N&uacute;t điều khiển" src="https://cdn.tgdd.vn/Products/Images/54/243041/tai-nghe-bluetooth-true-wireless-jbl-tune-115-2.jpg" alt="Tai nghe Bluetooth True Wireless JBL T115TWS - N&uacute;t điều khiển" data-src="https://cdn.tgdd.vn/Products/Images/54/243041/tai-nghe-bluetooth-true-wireless-jbl-tune-115-2.jpg" /></a></p>
          <h3>Phụ kiện đi k&egrave;m đầy đủ</h3>
          <p>T&iacute;nh cả n&uacute;t tai gắn sẵn v&agrave;o housing th&igrave; sản phẩm c&oacute;&nbsp;<strong>3 cặp n&uacute;t tai</strong>&nbsp;kh&aacute;c k&iacute;ch thước v&agrave;&nbsp;<strong>1 d&acirc;y sạc cổng Type-C</strong>.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/243041/tai-nghe-bluetooth-true-wireless-jbl-tune-115-1.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless JBL T115TWS - Phụ kiện k&egrave;m theo" src="https://cdn.tgdd.vn/Products/Images/54/243041/tai-nghe-bluetooth-true-wireless-jbl-tune-115-1.jpg" alt="Tai nghe Bluetooth True Wireless JBL T115TWS - Phụ kiện k&egrave;m theo" data-src="https://cdn.tgdd.vn/Products/Images/54/243041/tai-nghe-bluetooth-true-wireless-jbl-tune-115-1.jpg" /></a></p>
          <p>Với vẻ ngo&agrave;i thời thượng, chất &acirc;m cuốn h&uacute;t, thời gian d&ugrave;ng l&acirc;u, gi&aacute; cả b&igrave;nh d&acirc;n,&nbsp;<a title="tai nghe Bluetooth True Wireless JBL T115" href="https://www.thegioididong.com/tai-nghe/bluetooth-true-wireless-jbl-t115twswhtas" target="_blank">tai nghe Bluetooth True Wireless JBL T115</a>&nbsp;rất tuyệt để c&ugrave;ng bạn trải nghiệm &acirc;m nhạc hằng ng&agrave;y, mang theo mọi l&uacute;c.</p>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','configuration' => '<table style="height: 158px;" width="796">
          <tbody>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Thời gian tai nghe:</td>
          <td style="width: 390px; height: 13px;">D&ugrave;ng 6 giờ - Sạc 2 giờ</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Thời gian hộp sạc:</td>
          <td style="width: 390px; height: 13px;">D&ugrave;ng 15 giờ</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Cổng sạc:</td>
          <td style="width: 390px; height: 13px;">Type-C</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">C&ocirc;ng nghệ &acirc;m thanh:</td>
          <td style="width: 390px; height: 13px;">JBL Pure Bass</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Tương th&iacute;ch:</td>
          <td style="width: 390px; height: 13px;"><span class="comma">Android</span><span class="comma">iOS (iPhone)</span><span class="">Windows</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Tiện &iacute;ch:</td>
          <td style="width: 390px; height: 13px;">Mic đ&agrave;m thoại</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Hỗ trợ kết nối:</td>
          <td style="width: 390px; height: 13px;">10 m (Bluetooth 5.0)</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Điều khiển bằng:</td>
          <td style="width: 390px; height: 13px;">Ph&iacute;m nhấn</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">H&atilde;ng</td>
          <td style="width: 390px; height: 13px;">JBL</td>
          </tr>
          </tbody>
          </table>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','created_at' => '2021-06-27 07:38:22','updated_at' => '2021-06-27 07:46:49','deleted_at' => NULL),
            array('id' => '2','name' => 'Tai nghe Bluetooth True Wireless Harman/Kardon FLY TWSBLK','code' => 'TN2','origin' => 'Hải Phòng','price' => '4490000','picture' => '1624779608.jpg','status' => '1','description' => '<h3>Thiết kế nhỏ gọn, sang trọng, tiện lợi khi mang theo</h3>
          <p><a title="Tham khảo th&ecirc;m tai nghe True Wireless tại Thế giới di động " href="https://www.thegioididong.com/tai-nghe-khong-day" target="_blank">Tai nghe True Wireless</a>&nbsp;Harman/Kardon FLYTWS ấn tượng với hộp bằng nhựa phủ lớp cao su b&aacute;m chắc tốt, mặt tr&ecirc;n bọc lớp da sang trọng với điểm nhấn logo nổi bật.</p>
          <p>K&iacute;ch thước nhỏ gọn trong l&ograve;ng b&agrave;n tay sẽ thật dễ d&agrave;ng để bạn mang theo trong h&agrave;nh trang thường nhật của m&igrave;nh.</p>
          <p>Xem th&ecirc;m:&nbsp;<a title="Tai nghe True Wireless l&agrave; g&igrave;? Ưu nhược điểm thế n&agrave;o? C&oacute; n&ecirc;n mua kh&ocirc;ng?" href="https://www.thegioididong.com/hoi-dap/tai-nghe-true-wireless-la-gi-uu-nhuoc-diem-the-nao-1201555" target="_blank">Tai nghe True Wireless l&agrave; g&igrave;? Ưu nhược điểm thế n&agrave;o? C&oacute; n&ecirc;n mua kh&ocirc;ng?</a></p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-091420-031458.jpg"><img class=" ls-is-cached lazyloaded" title="Tai nghe Bluetooth True Wireless Harman/Kardon FLY TWSBLK - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-091420-031458.jpg" alt="Tai nghe Bluetooth True Wireless Harman/Kardon FLY TWSBLK - Thiết kế" data-src="https://cdn.tgdd.vn/Products/Images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-091420-031458.jpg" /></a></p>
          <h3>Phần tai nghe kh&aacute; gọn g&agrave;ng với vẻ ngo&agrave;i sang trọng v&agrave; đồng điệu với hộp sạc</h3>
          <p>Bề mặt thao t&aacute;c cảm ứng bọc da với viền kim loại sang trọng, tai nghe dạng tr&ograve;n quen thuộc, thoải m&aacute;i khi sử dụng l&acirc;u.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-092520-072505.jpg"><img class=" ls-is-cached lazyloaded" title="Tai nghe Bluetooth True Wireless Harman/Kardon FLY TWSBLK - Tai đeo nhỏ gọn" src="https://cdn.tgdd.vn/Products/Images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-092520-072505.jpg" alt="Tai nghe Bluetooth True Wireless Harman/Kardon FLY TWSBLK - Tai đeo nhỏ gọn" data-src="https://cdn.tgdd.vn/Products/Images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-092520-072505.jpg" /></a></p>
          <h3>Trải nghiệm &acirc;m thanh rất ri&ecirc;ng Harman Kardon đầy s&ocirc;i động, trong trẻo, &acirc;m bass lực v&agrave; chắc, nhiều bass</h3>
          <p>B&ecirc;n trong tai nghe được trang bị driver dynamic k&iacute;ch thước 5.6 mm c&oacute; dải tần đ&aacute;p ứng từ 10Hz đến 20kHz v&agrave; được tinh chỉnh để c&oacute; được chất lượng tốt, đ&aacute;p ứng nhiều thể loại nhạc.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-094120-034142.jpg"><img class=" ls-is-cached lazyloaded" title="Tai nghe Bluetooth True Wireless Harman/Kardon FLY TWSBLK - &Acirc;m thanh" src="https://cdn.tgdd.vn/Products/Images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-094120-034142.jpg" alt="Tai nghe Bluetooth True Wireless Harman/Kardon FLY TWSBLK - &Acirc;m thanh" data-src="https://cdn.tgdd.vn/Products/Images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-094120-034142.jpg" /></a></p>
          <h3>Cảm biến tiệm cận để tự động ngưng v&agrave; ph&aacute;t nhạc khi lấy tai nghe ra khỏi tai, hay đeo v&agrave;o lại</h3>
          <p>Gi&uacute;p tiết kiệm năng lượng tối ưu cho thiết bị.</p>
          <p>2 tai nghe tự kết nối ngay trong hộp sạc. Khi sử dụng 1 tai nghe, cụ thể với tai nghe phải đeo l&ecirc;n tai c&ograve;n tai nghe tr&aacute;i để trong hộp sạc, đ&oacute;ng nắp hộp lại th&igrave; bạn vẫn nghe nhạc b&igrave;nh thường, nếu l&agrave;m ngược lại th&igrave; kh&ocirc;ng nghe được nhạc ph&aacute;t ra.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-091520-031510.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless Harman/Kardon FLY TWSBLK - Cảm biến tiệm cận" src="https://cdn.tgdd.vn/Products/Images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-091520-031510.jpg" alt="Tai nghe Bluetooth True Wireless Harman/Kardon FLY TWSBLK - Cảm biến tiệm cận" data-src="https://cdn.tgdd.vn/Products/Images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-091520-031510.jpg" /></a></p>
          <h3><a title="Tai nghe gi&aacute; rẻ ch&iacute;nh h&atilde;ng b&aacute;n tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe" target="_blank">Tai nghe</a>&nbsp;dễ d&agrave;ng sạc pin qua cổng Type-C, c&oacute; đ&egrave;n b&aacute;o dung lượng pin tiện theo d&otilde;i</h3>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-091520-031531.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless Harman/Kardon FLY TWSBLK - Cổng sạc" src="https://cdn.tgdd.vn/Products/Images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-091520-031531.jpg" alt="Tai nghe Bluetooth True Wireless Harman/Kardon FLY TWSBLK - Cổng sạc" data-src="https://cdn.tgdd.vn/Products/Images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-091520-031531.jpg" /></a></p>
          <h3>Thời lượng pin lớn, sạc lại nhanh ch&oacute;ng, c&oacute; chế độ sạc nhanh tiện dụng</h3>
          <p>Tai nghe Harman Kardon với 1 lần sạc đầy c&oacute; thể sử dụng li&ecirc;n tục đến 6 tiếng, đồng thời cose sạc c&ograve;n cung cấp th&ecirc;m cho tai nghe đến 14 tiếng sử dụng.</p>
          <p>Đặc biệt tiện lợi cho những người sử dụng tai nghe với tần suất cao bởi t&iacute;nh năng sạc nhanh trong 10 ph&uacute;t, cho ph&eacute;p sử dụng th&ecirc;m đến 60 ph&uacute;t.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-052120-102126.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless Harman/Kardon FLY TWSBLK - Thời gian sử dụng" src="https://cdn.tgdd.vn/Products/Images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-052120-102126.jpg" alt="Tai nghe Bluetooth True Wireless Harman/Kardon FLY TWSBLK - Thời gian sử dụng" data-src="https://cdn.tgdd.vn/Products/Images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-052120-102126.jpg" /></a></p>
          <h3>Đi k&egrave;m sản phẩm gồm 3 cỡ đệm tai</h3>
          <p>2 bộ đệm cao su k&egrave;m theo v&agrave; 1 bộ gắn với tai nghe để người d&ugrave;ng t&ugrave;y chọn cho ph&ugrave; hợp nhất với tai của m&igrave;nh, mang lại cảm gi&aacute;c thoải m&aacute;i cả khi sử dụng l&acirc;u.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-091520-031538.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless Harman/Kardon FLY TWSBLK - Th&ecirc;m phụ kiện" src="https://cdn.tgdd.vn/Products/Images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-091520-031538.jpg" alt="Tai nghe Bluetooth True Wireless Harman/Kardon FLY TWSBLK - Th&ecirc;m phụ kiện" data-src="https://cdn.tgdd.vn/Products/Images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-091520-031538.jpg" /></a></p>
          <h3>Chuẩn kh&aacute;ng nước IPX5</h3>
          <p>Bạn c&oacute; thể d&ugrave;ng&nbsp;<a title="Tham khảo tai nghe Bluetooth kinh doanh tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe-bluetooth" target="_blank">tai nghe Bluetooth</a>&nbsp;ngay cả khi gặp cơn mưa bất chợt hay vận động ra mồ h&ocirc;i nhiều m&agrave; kh&ocirc;ng lo hư hại sản phẩm.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-091520-031520.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless Harman/Kardon FLY TWSBLK - Kh&aacute;ng nước" src="https://cdn.tgdd.vn/Products/Images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-091520-031520.jpg" alt="Tai nghe Bluetooth True Wireless Harman/Kardon FLY TWSBLK - Kh&aacute;ng nước" data-src="https://cdn.tgdd.vn/Products/Images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-091520-031520.jpg" /></a></p>
          <h3><a title="Tham khảo th&ecirc;m tai nghe kh&ocirc;ng d&acirc;y tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe-khong-day" target="_blank">Tai nghe kh&ocirc;ng d&acirc;y</a>&nbsp;kết nối Bluetooth 5.0</h3>
          <p>Chuẩn kết nối cho độ phủ s&oacute;ng xa, tốc độ kết nối nhanh v&agrave; ổn định, khoảng c&aacute;ch đường truyền tới 10 m&eacute;t thoải m&aacute;i cho hoạt động giải tr&iacute; nghe nhạc, đ&agrave;m thoại khi d&ugrave;ng tai nghe.</p>
          <p>Sản phẩm tương th&iacute;ch dễ d&agrave;ng với&nbsp;<a title="Điện thoại gi&aacute; rẻ ch&iacute;nh h&atilde;ng b&aacute;n tại Thế Giới Di Động" href="https://www.thegioididong.com/dtdd" target="_blank">điện thoại</a>,&nbsp;<a title="Tham khảo m&aacute;y t&iacute;nh bảng kinh doanh tại Thế Giới Di Động" href="https://www.thegioididong.com/may-tinh-bang" target="_blank">m&aacute;y t&iacute;nh bảng</a>,&nbsp;<a title="Tham khảo laptop kinh doanh tại Thế Giới Di Động" href="https://www.thegioididong.com/laptop" target="_blank">laptop</a>,... chạy hệ điều h&agrave;nh&nbsp;Android, Windows, iOS, MacOS.</p>
          <p>Tai nghe kết nối với thiết bị di động nhanh v&agrave; ổn định nhưng sẽ c&oacute; độ trễ khi chơi game.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-094020-034010.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless Harman/Kardon FLY TWSBLK - Bluetooth" src="https://cdn.tgdd.vn/Products/Images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-094020-034010.jpg" alt="Tai nghe Bluetooth True Wireless Harman/Kardon FLY TWSBLK - Bluetooth" data-src="https://cdn.tgdd.vn/Products/Images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-094020-034010.jpg" /></a></p>
          <h3>&nbsp;<a title="Tai nghe nh&eacute;t trong ch&iacute;nh h&atilde;ng gi&aacute; rẻ b&aacute;n tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe-nhet-trong" target="_blank">Tai nghe nh&eacute;t trong</a>&nbsp;với c&ocirc;ng nghệ TalkThru v&agrave; Ambient Aware</h3>
          <p>-&nbsp;TalkThru được ứng dụng gi&uacute;p giảm &acirc;m thanh nền v&agrave; l&agrave;m r&otilde; n&eacute;t c&aacute;c lời thoại của người b&ecirc;n kia trong c&aacute;c trường hợp đ&agrave;m thoại khi d&ugrave;ng tai nghe.</p>
          <p>-&nbsp;Ambient Aware cho ph&eacute;p người d&ugrave;ng nghe được nhiều &acirc;m thanh từ m&ocirc;i trường ngo&agrave;i, gi&uacute;p&nbsp;bạn dễ d&agrave;ng tương t&aacute;c khi giao tiếp, l&agrave;m việc hay di chuyển,&hellip;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-093920-033953.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless Harman/Kardon FLY TWSBLK - C&ocirc;ng nghệ TalkThru v&agrave; Ambient Aware" src="https://cdn.tgdd.vn/Products/Images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-093920-033953.jpg" alt="Tai nghe Bluetooth True Wireless Harman/Kardon FLY TWSBLK - C&ocirc;ng nghệ TalkThru v&agrave; Ambient Aware" data-src="https://cdn.tgdd.vn/Products/Images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-093920-033953.jpg" /></a></p>
          <h3>Ứng dụng điều khiển My harman/kardon Headphones hỗ trợ tr&ecirc;n nền tảng iOS v&agrave; Android</h3>
          <p>Người d&ugrave;ng tải ứng dụng n&agrave;y về thiết bị di động để sử dụng t&ugrave;y chỉnh t&iacute;nh năng theo sở th&iacute;ch.</p>
          <p>Ứng dụng với giao diện kh&aacute; th&acirc;n thiện, dễ thao t&aacute;c, bạn c&oacute; thể bật/tắt nhanh chế độ Talk-Through hoặc Ambient Aware, kiểm tra dung lượng pin, tinh chỉnh lại thao t&aacute;c cảm ứng của hai b&ecirc;n tai theo &yacute; muốn, chỉnh c&aacute;c chế độ chơi nhạc c&oacute; sẵn để ph&ugrave; hợp hơn với thể loại nhạc đang nghe.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-091520-031543.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless Harman/Kardon FLY TWSBLK - Hỗ trợ ứng dụng t&ugrave;y chỉnh" src="https://cdn.tgdd.vn/Products/Images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-091520-031543.jpg" alt="Tai nghe Bluetooth True Wireless Harman/Kardon FLY TWSBLK - Hỗ trợ ứng dụng t&ugrave;y chỉnh" data-src="https://cdn.tgdd.vn/Products/Images/54/242990/tai-nghe-bluetooth-tws-harman-kardon-fly-den-091520-031543.jpg" /></a></p>
          <p>Nh&igrave;n chung,&nbsp;<a title="tai nghe Bluetooth True Wireless Harman/Kardon FLYTWS" href="https://www.thegioididong.com/tai-nghe/bluetooth-true-wireless-harman-kardon-fly-twsblk" target="_blank">tai nghe Bluetooth True Wireless Harman/Kardon FLYTWS</a>&nbsp;đủ sức thuyết phục người d&ugrave;ng cả về t&iacute;nh thẩm mỹ, tiện &iacute;ch sử dụng v&agrave; chất lượng &acirc;m thanh, rất xứng đ&aacute;ng để trải nghiệm.</p>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','configuration' => '<table style="height: 158px;" width="796">
          <tbody>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Thời gian tai nghe:</td>
          <td style="width: 390px; height: 13px;">D&ugrave;ng 6 giờ - Sạc 2 giờ</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Thời gian hộp sạc:</td>
          <td style="width: 390px; height: 13px;">D&ugrave;ng 15 giờ</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Cổng sạc:</td>
          <td style="width: 390px; height: 13px;">Type-C</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">C&ocirc;ng nghệ &acirc;m thanh:</td>
          <td style="width: 390px; height: 13px;">JBL Pure Bass</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Tương th&iacute;ch:</td>
          <td style="width: 390px; height: 13px;"><span class="comma">Android</span><span class="comma">iOS (iPhone)</span><span class="">Windows</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Tiện &iacute;ch:</td>
          <td style="width: 390px; height: 13px;">Mic đ&agrave;m thoại</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Hỗ trợ kết nối:</td>
          <td style="width: 390px; height: 13px;">10 m (Bluetooth 5.0)</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Điều khiển bằng:</td>
          <td style="width: 390px; height: 13px;">Ph&iacute;m nhấn</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">H&atilde;ng</td>
          <td style="width: 390px; height: 13px;">JBL</td>
          </tr>
          </tbody>
          </table>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','created_at' => '2021-06-27 07:40:08','updated_at' => '2021-06-27 07:40:08','deleted_at' => NULL),
            array('id' => '3','name' => 'Tai nghe chụp tai Gaming Rapoo VH160','code' => 'TN3','origin' => 'Hải Phòng','price' => '499000','picture' => '1624779665.jpg','status' => '1','description' => '<h3>Kiểu d&aacute;ng hầm hố, m&agrave;u đen lịch l&atilde;m</h3>
          <p>Thiết kế&nbsp;<a title="Tai nghe gi&aacute; rẻ ch&iacute;nh h&atilde;ng b&aacute;n tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe" target="_blank">tai nghe</a>&nbsp;chuy&ecirc;n dụng khi chơi game với c&uacute;p tai lớn, &ocirc;m trọn tai cho khả năng c&aacute;ch &acirc;m mạnh mẽ, d&agrave;n treo được l&agrave;m mềm nhẹ, tạo độ thoải m&aacute;i tối đa cho game thủ khi đeo.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242174/tai-nghe-chup-tai-gaming-rapoo-vh160-1.jpg"><img class=" ls-is-cached lazyloaded" title="Tai nghe chụp tai Gaming Rapoo VH160 - Kiểu d&aacute;ng hầm hố, m&agrave;u đen lịch l&atilde;m" src="https://cdn.tgdd.vn/Products/Images/54/242174/tai-nghe-chup-tai-gaming-rapoo-vh160-1.jpg" alt="Tai nghe chụp tai Gaming Rapoo VH160 - Kiểu d&aacute;ng hầm hố, m&agrave;u đen lịch l&atilde;m" data-src="https://cdn.tgdd.vn/Products/Images/54/242174/tai-nghe-chup-tai-gaming-rapoo-vh160-1.jpg" /></a></p>
          <h3>Chơi game đắm ch&igrave;m với hệ thống&nbsp;<a title="Xem th&ecirc;m c&ocirc;ng nghệ &acirc;m thanh v&ograve;m 7.1 l&agrave; g&igrave;" href="https://www.thegioididong.com/hoi-dap/cac-cong-nghe-am-thanh-thuong-thay-tren-tai-nghe-h-1222527#am-vom-71" target="_blank">&acirc;m thanh v&ograve;m 7.1</a></h3>
          <p>Hiệu ứng &acirc;m v&ograve;m rộng, c&oacute; chiều s&acirc;u cho người chơi ho&agrave;n to&agrave;n nhập vai trong mọi đầu game, nghe được nhiều thể loại nhạc.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242174/tai-nghe-chup-tai-gaming-rapoo-vh160-3.jpg"><img class=" ls-is-cached lazyloaded" title="Tai nghe chụp tai Gaming Rapoo VH160 - Chơi game đắm ch&igrave;m với hệ thống &acirc;m thanh v&ograve;m 7.1" src="https://cdn.tgdd.vn/Products/Images/54/242174/tai-nghe-chup-tai-gaming-rapoo-vh160-3.jpg" alt="Tai nghe chụp tai Gaming Rapoo VH160 - Chơi game đắm ch&igrave;m với hệ thống &acirc;m thanh v&ograve;m 7.1" data-src="https://cdn.tgdd.vn/Products/Images/54/242174/tai-nghe-chup-tai-gaming-rapoo-vh160-3.jpg" /></a></p>
          <p><a title="Tham khảo th&ecirc;m tai nghe gaming tại Thế Giới Di Động " href="https://www.thegioididong.com/tai-nghe-gaming" target="_blank">Tai nghe chơi game</a>&nbsp;trang bị&nbsp;<strong>m&agrave;ng loa cỡ 50 mm</strong>&nbsp;tạo n&ecirc;n chất &acirc;m sắc n&eacute;t, gi&uacute;p bạn lu&ocirc;n nắm thế chủ động, dễ d&agrave;ng d&agrave;nh chiến thắng trong bất kỳ tựa game n&agrave;o.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242174/tai-nghe-chup-tai-gaming-rapoo-vh160-7.jpg"><img class=" ls-is-cached lazyloaded" title="Tai nghe chụp tai Gaming Rapoo VH160 - M&agrave;ng loa cỡ 50 mm" src="https://cdn.tgdd.vn/Products/Images/54/242174/tai-nghe-chup-tai-gaming-rapoo-vh160-7.jpg" alt="Tai nghe chụp tai Gaming Rapoo VH160 - M&agrave;ng loa cỡ 50 mm" data-src="https://cdn.tgdd.vn/Products/Images/54/242174/tai-nghe-chup-tai-gaming-rapoo-vh160-7.jpg" /></a></p>
          <h3>Giọng thoại trong trẻo, r&otilde; hơn khi tương t&aacute;c với trang bị micro&nbsp;</h3>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242174/tai-nghe-chup-tai-gaming-rapoo-vh160-2.jpg"><img class=" ls-is-cached lazyloaded" title="Tai nghe chụp tai Gaming Rapoo VH160 - Giọng thoại trong trẻo, r&otilde; hơn khi tương t&aacute;c với trang bị micro " src="https://cdn.tgdd.vn/Products/Images/54/242174/tai-nghe-chup-tai-gaming-rapoo-vh160-2.jpg" alt="Tai nghe chụp tai Gaming Rapoo VH160 - Giọng thoại trong trẻo, r&otilde; hơn khi tương t&aacute;c với trang bị micro " data-src="https://cdn.tgdd.vn/Products/Images/54/242174/tai-nghe-chup-tai-gaming-rapoo-vh160-2.jpg" /></a></p>
          <h3>Sử dụng được với c&aacute;c thiết bị c&oacute; cổng USB như&nbsp;<a title="Laptop gi&aacute; rẻ ch&iacute;nh h&atilde;ng b&aacute;n tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe-gaming" target="_blank">laptop</a>,&nbsp;<a title="M&aacute;y t&iacute;nh để b&agrave;n gi&aacute; rẻ ch&iacute;nh h&atilde;ng b&aacute;n tại Thế Giới Di Động" href="https://www.thegioididong.com/may-tinh-de-ban" target="_blank">m&aacute;y t&iacute;nh để b&agrave;n</a>,... nhờ t&iacute;ch hợp jack USB</h3>
          <p><strong>Chiều d&agrave;i d&acirc;y l&ecirc;n tới 246 cm</strong>, phối gh&eacute;p&nbsp;<a title="Tai nghe Rapoo đang b&aacute;n tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe-rapoo" target="_blank">tai nghe Rapoo</a>&nbsp;với c&aacute;c thiết bị dễ d&agrave;ng, kh&ocirc;ng sợ căng, hụt d&acirc;y.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242174/tai-nghe-chup-tai-gaming-rapoo-vh160-4.jpg"><img class=" lazyloaded" title="Tai nghe chụp tai Gaming Rapoo VH160 - Sử dụng được với c&aacute;c thiết bị c&oacute; cổng USB" src="https://cdn.tgdd.vn/Products/Images/54/242174/tai-nghe-chup-tai-gaming-rapoo-vh160-4.jpg" alt="Tai nghe chụp tai Gaming Rapoo VH160 - Sử dụng được với c&aacute;c thiết bị c&oacute; cổng USB" data-src="https://cdn.tgdd.vn/Products/Images/54/242174/tai-nghe-chup-tai-gaming-rapoo-vh160-4.jpg" /></a></p>
          <h3>N&acirc;ng cao vẻ thời thượng, h&ograve;a nhập hơn với m&agrave;n game nhờ hiệu ứng đ&egrave;n&nbsp;RGB rực rỡ</h3>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242174/tai-nghe-chup-tai-gaming-rapoo-vh160-6.jpg"><img class=" lazyloaded" title="Tai nghe chụp tai Gaming Rapoo VH160 - N&acirc;ng cao vẻ thời thượng, h&ograve;a nhập hơn với m&agrave;n game nhờ hiệu ứng đ&egrave;n RGB rực rỡ" src="https://cdn.tgdd.vn/Products/Images/54/242174/tai-nghe-chup-tai-gaming-rapoo-vh160-6.jpg" alt="Tai nghe chụp tai Gaming Rapoo VH160 - N&acirc;ng cao vẻ thời thượng, h&ograve;a nhập hơn với m&agrave;n game nhờ hiệu ứng đ&egrave;n RGB rực rỡ" data-src="https://cdn.tgdd.vn/Products/Images/54/242174/tai-nghe-chup-tai-gaming-rapoo-vh160-6.jpg" /></a></p>
          <h3>Thao t&aacute;c với n&uacute;t xoay để chỉnh &acirc;m lượng th&iacute;ch hợp&nbsp;</h3>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242174/tai-nghe-chup-tai-gaming-rapoo-vh160-5.jpg"><img class=" lazyloaded" title="Tai nghe chụp tai Gaming Rapoo VH160 - Thao t&aacute;c với n&uacute;t xoay để chỉnh &acirc;m lượng th&iacute;ch hợp " src="https://cdn.tgdd.vn/Products/Images/54/242174/tai-nghe-chup-tai-gaming-rapoo-vh160-5.jpg" alt="Tai nghe chụp tai Gaming Rapoo VH160 - Thao t&aacute;c với n&uacute;t xoay để chỉnh &acirc;m lượng th&iacute;ch hợp " data-src="https://cdn.tgdd.vn/Products/Images/54/242174/tai-nghe-chup-tai-gaming-rapoo-vh160-5.jpg" /></a></p>
          <p>C&oacute; thể thấy, với kiểu d&aacute;ng hiện đại, nổi bật, kết nối th&ocirc;ng dụng, t&aacute;i tạo chất &acirc;m sinh động, gi&aacute; cả phải chăng,&nbsp;<a title="tai nghe chụp tai Gaming Rapoo VH160" href="https://www.thegioididong.com/tai-nghe/chup-tai-gaming-rapoo-vh160" target="_blank">tai nghe chụp tai Gaming Rapoo VH160</a>&nbsp;l&agrave; lựa chọn ho&agrave;n hảo cho mọi người chơi game.&nbsp;</p>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','configuration' => '<table style="height: 158px;" width="796">
          <tbody>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Thời gian tai nghe:</td>
          <td style="width: 390px; height: 13px;">D&ugrave;ng 6 giờ - Sạc 2 giờ</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Thời gian hộp sạc:</td>
          <td style="width: 390px; height: 13px;">D&ugrave;ng 15 giờ</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Cổng sạc:</td>
          <td style="width: 390px; height: 13px;">Type-C</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">C&ocirc;ng nghệ &acirc;m thanh:</td>
          <td style="width: 390px; height: 13px;">JBL Pure Bass</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Tương th&iacute;ch:</td>
          <td style="width: 390px; height: 13px;"><span class="comma">Android</span><span class="comma">iOS (iPhone)</span><span class="">Windows</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Tiện &iacute;ch:</td>
          <td style="width: 390px; height: 13px;">Mic đ&agrave;m thoại</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Hỗ trợ kết nối:</td>
          <td style="width: 390px; height: 13px;">10 m (Bluetooth 5.0)</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Điều khiển bằng:</td>
          <td style="width: 390px; height: 13px;">Ph&iacute;m nhấn</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">H&atilde;ng</td>
          <td style="width: 390px; height: 13px;">JBL</td>
          </tr>
          </tbody>
          </table>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','created_at' => '2021-06-27 07:41:05','updated_at' => '2021-06-27 07:41:05','deleted_at' => NULL),
            array('id' => '4','name' => 'Tai nghe Có Dây EP Gaming Rapoo VM150','code' => 'TN4','origin' => 'Hà Nội','price' => '499000','picture' => '1624779722.jpg','status' => '1','description' => '<h3>EP Gaming Rapoo VM150 thiết kế dạng&nbsp;<a title="Tham khảo tai nghe nh&eacute;t tai kinh doanh tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe-nhet-trong" target="_blank">tai nghe nh&eacute;t tai</a>&nbsp;gọn nhẹ, c&aacute; t&iacute;nh, hiện đại</h3>
          <p>D&ugrave; k&iacute;ch thước nhỏ nhắn nhưng rất đẹp mắt, cuốn h&uacute;t nhờ phong c&aacute;ch gaming được t&iacute;ch hợp tr&ecirc;n kim loại ở củ tai, gia tăng sự sang trọng v&agrave; chắc chắn cho sản phẩm m&agrave; vẫn đảm bảo nhẹ nh&agrave;ng, thoải m&aacute;i khi đeo.</p>
          <p>D&acirc;y nối chiều d&agrave;i đến&nbsp;<strong>129 cm</strong>&nbsp;sử dụng rất thoải m&aacute;i cả khi bạn vừa d&ugrave;ng&nbsp;<a title="Tham khảo tai nghe kinh doanh tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe" target="_blank">tai nghe</a>&nbsp;vừa di chuyển.</p>
          <p>Củ tai dạng n&uacute;t với độ nghi&ecirc;ng vừa phải để vừa kh&iacute;t với ống tai khi đeo, th&ecirc;m dễ chịu v&agrave; chắc chắn, đồng thời tăng cường khả năng c&aacute;ch &acirc;m khi sử dụng.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242172/ep-gaming-rapoo-vm150-den-do-1-1.jpg"><img class=" ls-is-cached lazyloaded" title="Phong c&aacute;ch - Tai nghe C&oacute; D&acirc;y EP Gaming Rapoo VM150" src="https://cdn.tgdd.vn/Products/Images/54/242172/ep-gaming-rapoo-vm150-den-do-1-1.jpg" alt="Phong c&aacute;ch - Tai nghe C&oacute; D&acirc;y EP Gaming Rapoo VM150" data-src="https://cdn.tgdd.vn/Products/Images/54/242172/ep-gaming-rapoo-vm150-den-do-1-1.jpg" /></a></p>
          <h3>Hỗ trợ 3 bộ đệm tai silicone, tăng độ &ecirc;m &aacute;i khi đeo</h3>
          <p>Đi k&egrave;m theo tai nghe gồm&nbsp;<strong>1 cặp đệm tai gắn sẵn v&agrave; 2 cặp rời&nbsp;</strong>đủ&nbsp;k&iacute;ch thước S-M-L ph&ugrave; hợp cho mọi người d&ugrave;ng, chất liệu silicone an to&agrave;n, bền bỉ v&agrave; &ecirc;m &aacute;i khi đeo, cho bạn thoải m&aacute;i sử dụng tai nghe suốt ng&agrave;y d&agrave;i m&agrave; kh&ocirc;ng g&acirc;y đau, kh&oacute; chịu.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242172/ep-gaming-rapoo-vm150-den-do-2-1.jpg"><img class=" ls-is-cached lazyloaded" title="Đệm tai &ecirc;m &aacute;i - Tai nghe C&oacute; D&acirc;y EP Gaming Rapoo VM150" src="https://cdn.tgdd.vn/Products/Images/54/242172/ep-gaming-rapoo-vm150-den-do-2-1.jpg" alt="Đệm tai &ecirc;m &aacute;i - Tai nghe C&oacute; D&acirc;y EP Gaming Rapoo VM150" data-src="https://cdn.tgdd.vn/Products/Images/54/242172/ep-gaming-rapoo-vm150-den-do-2-1.jpg" /></a></p>
          <h3><a title="Tai nghe c&oacute; d&acirc;y gi&aacute; tốt b&aacute;n tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe-co-day" target="_blank">Tai nghe c&oacute; d&acirc;y</a>&nbsp;chất &acirc;m sống động, cuốn h&uacute;t</h3>
          <p>C&aacute;c dải &acirc;m tương đối t&aacute;ch bạch với &acirc;m bass s&acirc;u, rắn v&agrave; &acirc;m cao trong trẻo, &acirc;m thanh chơi game sống động, thưởng thức tốt c&aacute;c loại nhạc m&agrave; bạn y&ecirc;u th&iacute;ch.</p>
          <p>Đ&agrave;m thoại với giọng thoại trong trẻo, r&agrave;nh mạch qua 2 lựa chọn mic thoại</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242172/ep-gaming-rapoo-vm150-den-do-4-1.jpg"><img class=" ls-is-cached lazyloaded" title="Chất &acirc;m tốt - Tai nghe C&oacute; D&acirc;y EP Gaming Rapoo VM150" src="https://cdn.tgdd.vn/Products/Images/54/242172/ep-gaming-rapoo-vm150-den-do-4-1.jpg" alt="Chất &acirc;m tốt - Tai nghe C&oacute; D&acirc;y EP Gaming Rapoo VM150" data-src="https://cdn.tgdd.vn/Products/Images/54/242172/ep-gaming-rapoo-vm150-den-do-4-1.jpg" /></a></p>
          <h3>Giọng thoại trong trẻo nhờ t&iacute;ch hợp mic thoại</h3>
          <p><a title="Tai nghe Rapoo đang b&aacute;n tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe-rapoo" target="_blank">Tai nghe Rapoo</a>&nbsp;được trang bị tới&nbsp;<strong>2 mic thoại</strong>&nbsp;với 1 mic in-line ở bộ điều khiển tr&ecirc;n d&acirc;y dẫn v&agrave; 1 mic rời để hỗ trợ đ&agrave;m thoại tốt hơn, giao tiếp với th&ocirc;ng tin chuẩn x&aacute;c, dễ nắm bắt hơn cho người d&ugrave;ng.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242172/ep-gaming-rapoo-vm150-den-do-5-1.jpg"><img class=" ls-is-cached lazyloaded" title="2 mic thoại - Tai nghe C&oacute; D&acirc;y EP Gaming Rapoo VM150" src="https://cdn.tgdd.vn/Products/Images/54/242172/ep-gaming-rapoo-vm150-den-do-5-1.jpg" alt="2 mic thoại - Tai nghe C&oacute; D&acirc;y EP Gaming Rapoo VM150" data-src="https://cdn.tgdd.vn/Products/Images/54/242172/ep-gaming-rapoo-vm150-den-do-5-1.jpg" /></a></p>
          <h3>Jack&nbsp;3.5 mm kết nối được với nhiều thiết bị</h3>
          <p>Tai nghe hỗ trợ tr&ecirc;n hệ điều h&agrave;nh&nbsp;<strong>Android ,iOS (iPhone), Windows</strong>, tương th&iacute;ch với hầu hết c&aacute;c&nbsp;<a title="Tham khảo điện thoại kinh doanh tại Thế Giới Di Động" href="https://www.thegioididong.com/dtdd" target="_blank">điện thoại</a>,&nbsp;<a title="Tham khảo m&aacute;y t&iacute;nh bảng kinh doanh tại Thế Giới Di Động" href="https://www.thegioididong.com/may-tinh-bang" target="_blank">m&aacute;y t&iacute;nh bảng</a>&nbsp;v&agrave; c&aacute;c thiết bị&nbsp;c&oacute;&nbsp;<strong>cổng kết nối 3.5 mm</strong>.</p>
          <p>Ngo&agrave;i ra, đi k&egrave;m c&ograve;n c&oacute; c&aacute;p chia 1 cổng 3.5 c&aacute;i ra 2 cổng 3.5 đực để dễ d&agrave;ng sử dụng với 2 cổng audio v&agrave; mic tr&ecirc;n 1 số m&aacute;y t&iacute;nh, PC.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242172/ep-gaming-rapoo-vm150-den-do-3-1.jpg"><img class=" lazyloaded" title="Jack 3.5 - Tai nghe C&oacute; D&acirc;y EP Gaming Rapoo VM150" src="https://cdn.tgdd.vn/Products/Images/54/242172/ep-gaming-rapoo-vm150-den-do-3-1.jpg" alt="Jack 3.5 - Tai nghe C&oacute; D&acirc;y EP Gaming Rapoo VM150" data-src="https://cdn.tgdd.vn/Products/Images/54/242172/ep-gaming-rapoo-vm150-den-do-3-1.jpg" /></a></p>
          <p><a title="Tai nghe C&oacute; D&acirc;y EP Gaming Rapoo VM150 " href="https://www.thegioididong.com/tai-nghe/ep-gaming-rapoo-vm150" target="_blank">Tai nghe C&oacute; D&acirc;y EP Gaming Rapoo VM150&nbsp;</a>1 sản phẩm phong c&aacute;ch, thời thượng, đầy tiện dụng, l&agrave; lựa chọn chất lượng v&agrave; ph&ugrave; hợp cho mọi đối tượng người d&ugrave;ng.</p>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','configuration' => '<table style="height: 158px;" width="796">
          <tbody>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Thời gian tai nghe:</td>
          <td style="width: 390px; height: 13px;">D&ugrave;ng 6 giờ - Sạc 2 giờ</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Thời gian hộp sạc:</td>
          <td style="width: 390px; height: 13px;">D&ugrave;ng 15 giờ</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Cổng sạc:</td>
          <td style="width: 390px; height: 13px;">Type-C</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">C&ocirc;ng nghệ &acirc;m thanh:</td>
          <td style="width: 390px; height: 13px;">JBL Pure Bass</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Tương th&iacute;ch:</td>
          <td style="width: 390px; height: 13px;"><span class="comma">Android</span><span class="comma">iOS (iPhone)</span><span class="">Windows</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Tiện &iacute;ch:</td>
          <td style="width: 390px; height: 13px;">Mic đ&agrave;m thoại</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Hỗ trợ kết nối:</td>
          <td style="width: 390px; height: 13px;">10 m (Bluetooth 5.0)</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Điều khiển bằng:</td>
          <td style="width: 390px; height: 13px;">Ph&iacute;m nhấn</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">H&atilde;ng</td>
          <td style="width: 390px; height: 13px;">JBL</td>
          </tr>
          </tbody>
          </table>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','created_at' => '2021-06-27 07:42:02','updated_at' => '2021-06-27 07:42:02','deleted_at' => NULL),
            array('id' => '5','name' => 'Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc','code' => 'TN5','origin' => 'Hà Nội','price' => '3999000','picture' => '1624779781.jpg','status' => '1','description' => '<h3>Thiết kế sang trọng, thời thượng c&ugrave;ng hộp sạc đồng nhất m&agrave;u sắc đi k&egrave;m</h3>
          <p><a title="Tai nghe Bluetooth True Wireless Samsung Buds Pro" href="https://www.thegioididong.com/tai-nghe/bluetooth-true-wireless-galaxy-buds-pro-bac" target="_blank">Tai nghe Bluetooth True Wireless Samsung Buds Pro</a>&nbsp;sở hữu vẻ ngo&agrave;i đẹp mắt thời thượng với hai m&agrave;u đen v&agrave; trắng. Thiết kế&nbsp;mới tr&ecirc;n h&igrave;nh dạng tai nghe cổ điển, c&oacute; khả năng l&agrave;m giảm bớt sự kh&oacute; chịu khi sử dụng tai nghe trong nhiều giờ v&agrave; tai nghe cũng nằm chắc chắn ph&iacute;a trong tai khi bạn tập luyện hay vận động. Đồng thời, c&aacute;c lỗ tho&aacute;t kh&iacute; gi&uacute;p c&acirc;n bằng &aacute;p suất trong tai v&agrave; tăng lưu lượng kh&ocirc;ng kh&iacute;, tạo cảm gi&aacute;c mềm mại dễ chịu khi sử dụng.</p>
          <p>Tai nghe c&oacute; thiết kế nhỏ gọn n&ecirc;n bạn dễ d&agrave;ng bỏ v&agrave;o t&uacute;i x&aacute;ch, balo v&agrave; mang theo b&ecirc;n m&igrave;nh di chuyển mọi nơi.&nbsp;Ngo&agrave;i ra, c&oacute; k&egrave;m theo n&uacute;m tai nghe với ba k&iacute;ch thước cho người d&ugrave;ng dễ thay đổi sao cho ph&ugrave; hợp.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-1.jpg"><img class=" ls-is-cached lazyloaded" title="Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc" src="https://cdn.tgdd.vn/Products/Images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-1.jpg" alt="Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc - Thiết kế" data-src="https://cdn.tgdd.vn/Products/Images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-1.jpg" /></a></p>
          <p>Hộp sạc gọn đẹp, ph&iacute;a b&ecirc;n trong t&iacute;ch hợp nam ch&acirc;m giữ củ tai an to&agrave;n, hạn chế thất lạc.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-2.jpg"><img class=" ls-is-cached lazyloaded" title="Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc" src="https://cdn.tgdd.vn/Products/Images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-2.jpg" alt="Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc - Hộp sạc" data-src="https://cdn.tgdd.vn/Products/Images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-2.jpg" /></a></p>
          <h3>Nghe r&otilde; bất kỳ đ&acirc;u c&ugrave;ng c&ocirc;ng nghệ chống ồn chủ động (ANC)</h3>
          <p><a title="Tham khảo c&aacute;c mẫu tai nghe Samsung tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe-samsung" target="_blank">Tai nghe Samsung</a>&nbsp;cho bạn thoải m&aacute;i&nbsp;gọi điện v&agrave; tr&ograve; truyện với đối t&aacute;c, bạn b&egrave; m&agrave; kh&ocirc;ng lo ngại tiếng ồn với c&ocirc;ng nghệ&nbsp;<a title="Active Noise Cancelling" href="https://www.thegioididong.com/hoi-dap/cac-cong-nghe-am-thanh-thuong-thay-tren-tai-nghe-h-1222527#Active" target="_blank">Active Noise Canceling</a>&nbsp;lọc ấn tượng đến 99% tiếng ồn xung quanh. B&ecirc;n cạnh đ&oacute;,&nbsp;bạn c&oacute; thể chọn c&aacute;c mức ANC để tăng hoặc giảm &acirc;m thanh ph&ugrave; hợp theo từng kh&ocirc;ng gian t&ugrave;y theo mức độ kh&aacute;c nhau.&nbsp;Nhờ đ&oacute;, mang đến&nbsp;chất lượng cuộc gọi ho&agrave;n hảo nhất tr&ecirc;n tai nghe kh&ocirc;ng d&acirc;y v&agrave; truyền tải r&otilde; r&agrave;ng giọng n&oacute;i, ngay cả khi bạn gọi điện ở nh&agrave; hay ở b&ecirc;n ngo&agrave;i.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-3.jpg"><img class=" ls-is-cached lazyloaded" title="Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc" src="https://cdn.tgdd.vn/Products/Images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-3.jpg" alt="Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc - Chống ồn Active Noise Cancelling" data-src="https://cdn.tgdd.vn/Products/Images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-3.jpg" /></a></p>
          <p>Hơn nữa, tai nghe c&ograve;n c&oacute;&nbsp;hệ thống 3 mic t&iacute;ch hợp v&agrave; bộ phận thu nhận giọng n&oacute;i (Voice Pickup Unit), gi&uacute;p mọi từ ngữ đều được truyền tải một c&aacute;ch trọn vẹn nhất. Hơn nữa, tr&ecirc;n tai nghe c&oacute; giải ph&aacute;p chắn gi&oacute; hiện đại v&agrave; ti&ecirc;n tiến gi&uacute;p ngăn chặn &acirc;m thanh của gi&oacute; khi đang gọi điện, cho bạn tận hưởng chất &acirc;m ho&agrave;n hảo hơn.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-4.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc" src="https://cdn.tgdd.vn/Products/Images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-4.jpg" alt="Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc - T&iacute;ch hợp 3 mic" data-src="https://cdn.tgdd.vn/Products/Images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-4.jpg" /></a></p>
          <h3>Kết nối kh&ocirc;ng d&acirc;y Bluetooth 5.0 dễ d&agrave;ng với c&aacute;c thiết bị ngo&agrave;i, đường truyền mượt m&agrave; l&ecirc;n đến 10 m</h3>
          <p>Tai nghe trang bị kết nối kh&ocirc;ng d&acirc;y Bluetooth 5.0 cho đường truyền li&ecirc;n kết kh&ocirc;ng d&acirc;y giữa tai nghe v&agrave;&nbsp;<a title="Tham khảo một số điện thoại tại Thế Giới Di Động" href="https://www.thegioididong.com/dtdd" target="_blank">điện thoại</a>,&nbsp;<a title="Xem th&ecirc;m một số laptop tại Thế Giới Di Động" href="https://www.thegioididong.com/laptop" target="_blank">laptop</a>,&nbsp;<a title="Tham khảo một số m&aacute;y t&iacute;nh bảng tại Thế Giới Di Động" href="https://www.thegioididong.com/may-tinh-bang" target="_blank">m&aacute;y t&iacute;nh bảng</a>&nbsp;được duy tr&igrave; tốt trong phạm vi rộng l&ecirc;n đến 10 m, nhờ đ&oacute; bạn thoải m&aacute;i duy tr&igrave; c&aacute;c cuộc gọi hoặc những bản nhạc một c&aacute;ch liền mạch v&agrave; tự do.&nbsp;Kết nối được 2 m&aacute;y đồng thời, linh hoạt d&ugrave;ng.</p>
          <p>B&ecirc;n cạnh đ&oacute;,&nbsp;<a title="Xem th&ecirc;m một số tai nghe tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe" target="_blank">tai nghe</a>&nbsp;c&ograve;n t&iacute;ch hợp&nbsp;t&iacute;nh năng chuyển đổi hiện đại c&oacute; khả năng ph&aacute;t hiện những g&igrave; cấp b&aacute;ch nhất v&agrave; lập tức chuyển kết nối sang thiết bị đ&oacute;, chẳng hạn như khi bạn đang xem phim tr&ecirc;n m&aacute;y t&iacute;nh bảng v&agrave; c&oacute; cuộc gọi đến th&igrave; &acirc;m thanh sẽ được chuyển sang điện thoại ngay lập tức, sau đ&oacute; khi bạn g&aacute;c m&aacute;y th&igrave; &acirc;m thanh sẽ trở lại m&aacute;y t&iacute;nh bảng.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-5.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc" src="https://cdn.tgdd.vn/Products/Images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-5.jpg" alt="Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc - Kết nối Bluetooth 5.0" data-src="https://cdn.tgdd.vn/Products/Images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-5.jpg" /></a></p>
          <h3>D&ugrave;ng li&ecirc;n tục trong 8 giờ, sạc pin đơn giản qua cổng USB-C</h3>
          <p>Tai nghe sẽ cho bạn trải nghiệm li&ecirc;n tục với những cuộc gọi hay những giờ nghe nhạc kh&ocirc;ng gi&aacute;n đoạn với thời lượng d&agrave;i đến hơn 8 giờ v&agrave; c&ograve;n l&acirc;u d&agrave;i hơn khi c&oacute; hộp sạc. Bạn sẽ c&oacute; tổng cộng 18 giờ trải nghiệm ấn tượng khi bật chống ồn với 5 giờ nghe nhạc v&agrave; th&ecirc;m 13 giờ khi sử dụng hộp sạc. Đồng thời, khi tắt chống ồn th&igrave;&nbsp;bạn c&oacute; tổng cộng 28 giờ trải nghiệm, nghe trong 8 giờ v&agrave; th&ecirc;m 20 giờ nữa khi sử dụng với hộp sạc.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-6.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc" src="https://cdn.tgdd.vn/Products/Images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-6.jpg" alt="Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc - Thời lượng pin" data-src="https://cdn.tgdd.vn/Products/Images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-6.jpg" /></a></p>
          <h3>Khả năng kh&aacute;ng nước hiệu quả c&ugrave;ng xếp hạng chống nước IPX7 mạnh nhất</h3>
          <p><a title="Tham khảo tai nghe Bluetooth kinh doanh tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe-bluetooth" target="_blank">Tai nghe bluetooth</a>&nbsp;sở hữu đạt chuẩn chống nước IPX7 c&oacute; khả năng&nbsp;bảo vệ thiết bị khỏi t&aacute;c động của việc ng&acirc;m trong nước l&ecirc;n tới 1 m, trong thời gian 30 ph&uacute;t, nhờ đ&oacute;&nbsp;gi&uacute;p chống nước, mồ h&ocirc;i hiệu quả đảm bảo khả năng truy cập cuộc gọi, nghe nhạc vẫn ổn định khi lỡ bị d&iacute;nh nước.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-7.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc" src="https://cdn.tgdd.vn/Products/Images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-7.jpg" alt="Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc - Chống nước IPX7" data-src="https://cdn.tgdd.vn/Products/Images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-7.jpg" /></a></p>
          <h3>&Acirc;m thanh được c&acirc;n bằng, dải &acirc;m rộng hơn với loa 2 chiều AKG mạnh mẽ</h3>
          <p>Từng &acirc;m thanh qua tai nghe được chọn lọc cho mọi nốt nhạc đều được thể hiện một c&aacute;ch trọn vẹn, từ &acirc;m treble cao nhất đến &acirc;m bass trầm ho&agrave;n hảo&nbsp;với loa 2 chiều được tinh chỉnh bởi AKG. Loa 2 chiều được t&iacute;ch hợp cho &acirc;m thanh được c&acirc;n bằng v&agrave; dải &acirc;m được rộng hơn với loa&nbsp;loa trầm 11 mm v&agrave; loa tweeter 6.5 mm cho chất &acirc;m trong trẻo, mượt m&agrave;.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-8.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc" src="https://cdn.tgdd.vn/Products/Images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-8.jpg" alt="Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc - Loa 2 chiều" data-src="https://cdn.tgdd.vn/Products/Images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-8.jpg" /></a></p>
          <h3>Tận hưởng &acirc;m thanh v&ograve;m sống động, đầy kịch t&iacute;nh từ 360 Audio</h3>
          <p>Tai nghe sở hữu c&ocirc;ng nghệ&nbsp;Dolby Head Tracking&trade; sẽ cho bạn như h&ograve;a m&igrave;nh v&agrave;o thế giới sống động của những bộ phim, b&agrave;i nhạc hoặc chương tr&igrave;nh truyền h&igrave;nh bạn y&ecirc;u th&iacute;ch. Đồng thời, c&ocirc;ng nghệ c&oacute; khả năng cảm biến theo d&otilde;i th&ocirc;ng minh v&agrave; x&aacute;c định ch&iacute;nh x&aacute;c hướng ph&aacute;t ra của &acirc;m thanh khi bạn di chuyển đầu, mang lại trải nghiệm nghe &acirc;m thanh ch&acirc;n thực, sống động từng chi tiết.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-9.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc" src="https://cdn.tgdd.vn/Products/Images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-9.jpg" alt="Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc - &Acirc;m thanh v&ograve;m sống động" data-src="https://cdn.tgdd.vn/Products/Images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-9.jpg" /></a></p>
          <h3>Xua tan nỗi lo thất lạc, dễ d&agrave;ng định vị tai nghe với ứng dụng SmartThings</h3>
          <p>Đối với chiếc tai nghe&nbsp;Galaxy Buds Pro n&agrave;y th&igrave; bạn sẽ kh&ocirc;ng phải lo&nbsp;việc t&igrave;m kiếm tai nghe bị thất lạc. Bởi v&igrave; nhờ c&ocirc;ng nghệ&nbsp;SmartThings hiện đại, bạn dễ d&agrave;ng t&igrave;m kiếm v&agrave; định vị, khi đ&oacute; tai&nbsp;nghe của bạn sẽ ph&aacute;t ra tiếng b&iacute;p để bạn c&oacute; thể dễ d&agrave;ng t&igrave;m thấy ch&uacute;ng ở bất kỳ đ&acirc;u trong nh&agrave;.</p>
          <p>Xem chi tiết hướng dẫn sử dụng v&agrave; tải ứng dụng tại đ&acirc;y:&nbsp;<a title="SmartThings - Ứng dụng quản l&yacute; thiết bị th&ocirc;ng minh Samsung" href="https://www.thegioididong.com/game-app/smartthings-ung-dung-quan-ly-thiet-bi-thong-minh-236414" target="_blank">SmartThings - Ứng dụng quản l&yacute; thiết bị th&ocirc;ng minh Samsung</a></p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-10.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc" src="https://cdn.tgdd.vn/Products/Images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-10.jpg" alt="Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc - Định vị tai nghe" data-src="https://cdn.tgdd.vn/Products/Images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-10.jpg" /></a></p>
          <h3>Thao t&aacute;c dễ d&agrave;ng, đơn giản chỉ cần chạm nhẹ l&agrave; c&oacute; thể sử dụng&nbsp;</h3>
          <p>Chỉ với thao t&aacute;c chạm hoặc chạm giữ l&agrave; bạn đ&atilde; c&oacute; thể ph&aacute;t hoặc dừng nhạc, trả lời hoặc từ chối cuộc gọi. Bạn cũng c&oacute; thể đặt tai nghe để thực hiện c&aacute;c t&aacute;c vụ kh&aacute;c bằng c&aacute;ch chạm.</p>
          <p>- Ph&aacute;t hoặc tạm dừng b&agrave;i nhạc chỉ với một lần chạm.</p>
          <p>- Ph&aacute;t b&agrave;i nhạc tiếp theo, trả lời hoặc kết th&uacute;c cuộc gọi chỉ cần chạm hai lần.</p>
          <p>- Ph&aacute;t b&agrave;i nhạc trước chỉ cần chạm ba lần.</p>
          <p>- K&iacute;ch hoạt một t&iacute;nh năng đặt trước (mặc định: Khởi chạy t&iacute;nh năng kiểm so&aacute;t tiếng ồn). Từ chối cuộc gọi hoặc kết nối Bluetooth chỉ với thao t&aacute;c chạm v&agrave; giữ tr&ecirc;n tai nghe.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-11.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc" src="https://cdn.tgdd.vn/Products/Images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-11.jpg" alt="Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc - HDSD" data-src="https://cdn.tgdd.vn/Products/Images/54/242034/bluetooth-true-wireless-galaxy-buds-pro-bac-11.jpg" /></a></p>
          <p>Tai nghe Bluetooth True Wireless Samsung Buds Pro sẽ l&agrave; sự lựa chọn ph&ugrave; hợp v&agrave; tuyệt vời d&agrave;nh cho bạn nếu bạn đang muốn t&igrave;m một chiếc tai nghe c&oacute; thiết kế thời trang, sang trọng c&ugrave;ng c&aacute;c tiện &iacute;ch th&ocirc;ng minh đ&aacute;p ứng c&aacute;c nhu cầu nghe nhạc chất lượng cao th&igrave; kh&ocirc;ng n&ecirc;n bỏ qua em tai nghe n&agrave;y nh&eacute;!</p>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','configuration' => '<table style="height: 158px;" width="796">
          <tbody>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Thời gian tai nghe:</td>
          <td style="width: 390px; height: 13px;">D&ugrave;ng 6 giờ - Sạc 2 giờ</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Thời gian hộp sạc:</td>
          <td style="width: 390px; height: 13px;">D&ugrave;ng 15 giờ</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Cổng sạc:</td>
          <td style="width: 390px; height: 13px;">Type-C</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">C&ocirc;ng nghệ &acirc;m thanh:</td>
          <td style="width: 390px; height: 13px;">JBL Pure Bass</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Tương th&iacute;ch:</td>
          <td style="width: 390px; height: 13px;"><span class="comma">Android</span><span class="comma">iOS (iPhone)</span><span class="">Windows</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Tiện &iacute;ch:</td>
          <td style="width: 390px; height: 13px;">Mic đ&agrave;m thoại</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Hỗ trợ kết nối:</td>
          <td style="width: 390px; height: 13px;">10 m (Bluetooth 5.0)</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Điều khiển bằng:</td>
          <td style="width: 390px; height: 13px;">Ph&iacute;m nhấn</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">H&atilde;ng</td>
          <td style="width: 390px; height: 13px;">JBL</td>
          </tr>
          </tbody>
          </table>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','created_at' => '2021-06-27 07:43:01','updated_at' => '2021-06-27 07:43:01','deleted_at' => NULL),
            array('id' => '6','name' => 'Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4 Trắng','code' => 'TN6','origin' => 'Hà Nam','price' => '2790000','picture' => '1624779852.jpg','status' => '1','description' => '<h3>Chất &acirc;m sống động, kiểm so&aacute;t tối ưu với củ loa 6 mm v&agrave; c&ocirc;ng nghệ &acirc;m thanh vượt trội của Meridian -&nbsp;Anh Quốc</h3>
          <p>&Acirc;m thanh&nbsp;<a title="Tham khảo c&aacute;c mẫu tai nghe LG ch&iacute;nh h&atilde;ng gi&aacute; tốt tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe-lg" target="_blank">tai nghe LG</a>&nbsp;được xử l&yacute; tinh vi, kiểm so&aacute;t t&iacute;n hiệu mạnh mẽ ngay cả trong m&ocirc;i trường ồn &agrave;o hay y&ecirc;n tĩnh nhờ sử dụng&nbsp;<strong>c&ocirc;ng nghệ Xử l&yacute; T&iacute;n hiệu Số (DSP).</strong></p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014220-044220.jpg"><img class=" ls-is-cached lazyloaded" title="DSP - Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4 Trắng" src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014220-044220.jpg" alt="DSP - Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4 Trắng" data-src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014220-044220.jpg" /></a></p>
          <p><strong>C&ocirc;ng nghệ Xử l&yacute; Kh&ocirc;ng gian Tai nghe - Headphone Spatial Processing</strong>&nbsp;v&agrave; sự li&ecirc;n kết ho&agrave;n hảo của 2 housing m&ocirc; phỏng kh&ocirc;ng gian &acirc;m thanh cuốn h&uacute;t, trung thực, cho bạn ho&agrave;n to&agrave;n ch&igrave;m đắm trong thế giới &acirc;m nhạc y&ecirc;u th&iacute;ch.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014220-044240.jpg"><img class=" ls-is-cached lazyloaded" title="HSP - Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4 Trắng" src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014220-044240.jpg" alt="HSP - Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4 Trắng" data-src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014220-044240.jpg" /></a></p>
          <p>B&ecirc;n cạnh đ&oacute;,&nbsp;<strong>c&ocirc;ng nghệ truyền ph&aacute;t nhạc MQA</strong>&nbsp;t&aacute;i tạo chất &acirc;m chuẩn ph&ograve;ng thu, t&aacute;i hiện trọn vẹn từng sắc &acirc;m.</p>
          <p>Tiện &iacute;ch hơn, với hệ cảm biến t&iacute;ch hợp tr&ecirc;n tai nghe, khi bạn th&aacute;o tai nghe ra, n&oacute; sẽ ngừng chơi nhạc v&agrave; bắt đầu chơi tiếp khi bạn đeo tai nghe trở lại, gi&uacute;p tiết kiệm pin tối đa.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014220-044229.jpg"><img class=" ls-is-cached lazyloaded" title="MQA - Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4 Trắng" src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014220-044229.jpg" alt="MQA - Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4 Trắng" data-src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014220-044229.jpg" /></a></p>
          <h3>Kiểu d&aacute;ng nhỏ nhắn, đường n&eacute;t mềm mại, m&agrave;u trắng thời trang&nbsp;</h3>
          <p>Houssing thiết kế tinh xảo, bề mặt b&oacute;ng s&aacute;ng, dễ d&agrave;ng đeo v&agrave; th&aacute;o. Hộp sạc tr&ograve;n trĩnh&nbsp;<strong>đựng housing chắc chắn</strong>, bảo vệ tối ưu, kh&ocirc;ng sợ rơi rớt trong khi dịch chuyển.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014120-044159.jpg"><img class=" lazyloaded" title="Sang đẹp - Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4 Trắng" src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014120-044159.jpg" alt="Sang đẹp - Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4 Trắng" data-src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014120-044159.jpg" /></a></p>
          <p>Đệm tai silicone đeo vừa vặn, b&aacute;m chặt, chống ồn, chất liệu được d&ugrave;ng trong y khoa khi tiếp x&uacute;c với v&ugrave;ng tai rất &ecirc;m &aacute;i, an to&agrave;n, kh&ocirc;ng tạo k&iacute;ch ứng cho da. C&oacute; 3 k&iacute;ch cỡ cho bạn dễ lựa chọn theo khổ tai cảu m&igrave;nh.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014220-044211.jpg"><img class=" lazyloaded" title="C&aacute;ch &acirc;m tốt - Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4 Trắng" src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014220-044211.jpg" alt="C&aacute;ch &acirc;m tốt - Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4 Trắng" data-src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014220-044211.jpg" /></a></p>
          <h3>&Acirc;m thanh đ&agrave;m thoại trong trẻo, chi tiết với hệ thống micro k&eacute;p&nbsp;</h3>
          <p>Trong khi mic dưới gi&uacute;p giảm tiếng ồn &agrave;o, khử vang, mic dưới cho giọng n&oacute;i của bạn trong hơn, gi&uacute;p bạn lu&ocirc;n tr&ograve; chuyện dễ d&agrave;ng với đối t&aacute;c, bạn b&egrave; qua&nbsp;<a title="Tai nghe gi&aacute; rẻ ch&iacute;nh h&atilde;ng b&aacute;n tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe" target="_blank">tai nghe</a>&nbsp;ở bất kỳ địa điểm n&agrave;o.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014320-044303.jpg"><img class=" lazyloaded" title="Đ&agrave;m thoại chất lượng cao - Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4 Trắng" src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014320-044303.jpg" alt="Đ&agrave;m thoại chất lượng cao - Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4 Trắng" data-src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014320-044303.jpg" /></a></p>
          <h3>Nhận thức &acirc;m thanh xung quanh bạn chỉ với thao t&aacute;c chạm nhẹ v&agrave;o housing&nbsp;</h3>
          <p>T&iacute;nh năng n&agrave;y đặc biệt hữu dụng khi bạn kh&ocirc;ng muốn th&aacute;o tai nghe ra m&agrave; vẫn muốn thực hiện 1 cuộc hội thoại nhanh với mọi người, nắm bắt c&aacute;c th&ocirc;ng b&aacute;o khi đang di chuyển,...&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014220-044251.jpg"><img class=" lazyloaded" title="Kết nối với m&ocirc;i trường xung quanh - Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4 Trắng" src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014220-044251.jpg" alt="Kết nối với m&ocirc;i trường xung quanh - Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4 Trắng" data-src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014220-044251.jpg" /></a></p>
          <h3>Kết nối kh&ocirc;ng d&acirc;y chuẩn Bluetooth 5.0 cho đường truyền ổn định trong phạm vi đến 10m</h3>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014320-044311.jpg"><img class=" lazyloaded" title="Bluetooth 5.0 - Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4 Trắng" src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014320-044311.jpg" alt="Bluetooth 5.0 - Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4 Trắng" data-src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014320-044311.jpg" /></a></p>
          <h3>Y&ecirc;n t&acirc;m khi mang tai nghe những khi chơi thể thao, chợt gặp mưa nhờ chuẩn chống nước IPX4&nbsp;</h3>
          <p>Chuẩn n&agrave;y cho khả năng chống nước bắn v&agrave;o tai nghe từ mọi vị tr&iacute;.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014320-044323.jpg"><img class=" lazyloaded" title="Kh&aacute;ng nước IPX4 - Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4 Trắng" src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014320-044323.jpg" alt="Kh&aacute;ng nước IPX4 - Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4 Trắng" data-src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014320-044323.jpg" /></a></p>
          <h3>Cung cấp đến 18 giờ d&ugrave;ng li&ecirc;n tục khi kết hợp cả tai nghe v&agrave; hộp sạc</h3>
          <p>Trong đ&oacute;,&nbsp;<strong>tai nghe cho 6 giờ</strong>&nbsp;nghe nhạc,&nbsp;<strong>hộp sạc cho 12 giờ</strong>. Khi cần d&ugrave;ng gấp m&agrave; tai nghe cạn năng lượng, bạn c&oacute; thể sử dụng t&iacute;nh năng&nbsp;<strong>sạc nhanh 5 ph&uacute;t để c&oacute; 1 giờ d&ugrave;ng</strong>&nbsp;ngay khi cần.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014320-044332.jpg"><img class=" lazyloaded" title="Dung lượng pin tốt - Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4 Trắng" src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014320-044332.jpg" alt="Dung lượng pin tốt - Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4 Trắng" data-src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014320-044332.jpg" /></a></p>
          <h3>Nắm bắt vị tr&iacute;, dễ d&agrave;ng t&ugrave;y chỉnh chức năng&nbsp;tai nghe&nbsp;qua ứng dụng TONE Free</h3>
          <p>Nếu bạn lạc mất&nbsp;<a title="Tham khảo th&ecirc;m tai nghe Bluetooth tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe-bluetooth" target="_blank">tai nghe Bluetooth</a>, chỉ cần v&agrave;o mục&nbsp;<strong>T&igrave;m tai nghe của t&ocirc;i</strong>&nbsp;trong&nbsp;TONE Free&nbsp;để d&ograve; t&igrave;m, bằng c&aacute;ch chọn cho tai nghe ph&aacute;t ra &acirc;m thanh (tiếng b&iacute;p), bạn sẽ dễ d&agrave;ng nhận biết v&agrave; t&igrave;m ra tai nghe.</p>
          <p>Mặt kh&aacute;c, ứng dụng n&agrave;y c&ograve;n cho ph&eacute;p người d&ugrave;ng chỉnh tăng giảm c&aacute;c chức năng, tần số gi&uacute;p bạn tối ưu chất &acirc;m của tai nghe theo phong c&aacute;ch của bạn.</p>
          <p>Link tải&nbsp;TONE Free:&nbsp;<a title="TONE Free tr&ecirc;n Android" href="https://play.google.com/store/apps/details?id=com.lge.tonentalkplus.tonentalkfree&amp;hl=vi&amp;gl=US" target="_blank">Android</a>&nbsp;|&nbsp;<a title="TONE Free tr&ecirc;n iOS" href="https://apps.apple.com/vn/app/lg-tone-free/id1498881097?l=vi" target="_blank">iOS</a>.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014320-044341.jpg"><img class=" lazyloaded" title="Tone Free - Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4 Trắng" src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014320-044341.jpg" alt="Tone Free - Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4 Trắng" data-src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014320-044341.jpg" /></a></p>
          <p>Nh&igrave;n chung, với thiết kế sang trọng, thời gian sử dụng l&acirc;u, kết nối v&agrave; chất &acirc;m tuyệt hảo,&nbsp;<a title="tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4" href="https://www.thegioididong.com/tai-nghe/bluetooth-tws-lg-tone-free-hbs-fn4" target="_blank">tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4</a>&nbsp;hứa hẹn sẽ mang đến nhiều tiện nghi cho cuộc sống bận rộn của bạn</p>','configuration' => '<table style="height: 158px;" width="796">
          <tbody>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Thời gian tai nghe:</td>
          <td style="width: 390px; height: 13px;">D&ugrave;ng 6 giờ - Sạc 2 giờ</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Thời gian hộp sạc:</td>
          <td style="width: 390px; height: 13px;">D&ugrave;ng 15 giờ</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Cổng sạc:</td>
          <td style="width: 390px; height: 13px;">Type-C</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">C&ocirc;ng nghệ &acirc;m thanh:</td>
          <td style="width: 390px; height: 13px;">JBL Pure Bass</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Tương th&iacute;ch:</td>
          <td style="width: 390px; height: 13px;"><span class="comma">Android</span><span class="comma">iOS (iPhone)</span><span class="">Windows</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Tiện &iacute;ch:</td>
          <td style="width: 390px; height: 13px;">Mic đ&agrave;m thoại</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Hỗ trợ kết nối:</td>
          <td style="width: 390px; height: 13px;">10 m (Bluetooth 5.0)</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Điều khiển bằng:</td>
          <td style="width: 390px; height: 13px;">Ph&iacute;m nhấn</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">H&atilde;ng</td>
          <td style="width: 390px; height: 13px;">JBL</td>
          </tr>
          </tbody>
          </table>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','created_at' => '2021-06-27 07:44:12','updated_at' => '2021-06-27 07:44:12','deleted_at' => NULL),
            array('id' => '7','name' => 'Tai nghe Bluetooth True Wireless Samsung Galaxy Buds+ R175','code' => 'TN7','origin' => 'Nam Định','price' => '1490000','picture' => '1624779915.jpg','status' => '1','description' => '<h3><a title="Tai nghe kh&ocirc;ng d&acirc;y True Wireless tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe-khong-day" target="_blank">Tai nghe True Wireless</a>&nbsp;thiết kế nhỏ gọn, m&agrave;u đen sang trọng, b&oacute;ng bẩy</h3>
          <p>Housing c&oacute; bề mặt chất liệu&nbsp;<strong>nhựa b&oacute;ng bền đẹp</strong>, nh&igrave;n hơi th&ocirc; nhưng đeo v&agrave;o khu&ocirc;n tai rất vừa vặn, n&uacute;t tai thiết kế hướng thẳng v&agrave;o tai cho độ k&iacute;n cao, nghe r&otilde; &acirc;m thanh hơn. Hộp sạc cũng l&agrave;m từ nhựa b&oacute;ng, trọng lượng&nbsp;<strong>39.6 g</strong>, k&iacute;ch thước nhỏ nhắn, nằm gọn trong tay bạn, dễ cho v&agrave;o t&uacute;i quần hoặc t&uacute;i x&aacute;ch, balo mang theo khi đi chơi, đi học, du lịch,...</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-1-1.jpg"><img class=" ls-is-cached lazyloaded" title="Tai nghe Bluetooth True Wireless Samsung Galaxy Buds+ R175 - Thiết kế nhỏ gọn, m&agrave;u đen sang trọng, b&oacute;ng bẩy" src="https://cdn.tgdd.vn/Products/Images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-1-1.jpg" alt="Tai nghe Bluetooth True Wireless Samsung Galaxy Buds+ R175 - Thiết kế nhỏ gọn, m&agrave;u đen sang trọng, b&oacute;ng bẩy" data-src="https://cdn.tgdd.vn/Products/Images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-1-1.jpg" /></a></p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-2-1.jpg"><img class=" ls-is-cached lazyloaded" title="Tai nghe Bluetooth True Wireless Samsung Galaxy Buds+ R175 - Đeo housing vừa kh&iacute;t" src="https://cdn.tgdd.vn/Products/Images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-2-1.jpg" alt="Tai nghe Bluetooth True Wireless Samsung Galaxy Buds+ R175 - Đeo housing vừa kh&iacute;t" data-src="https://cdn.tgdd.vn/Products/Images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-2-1.jpg" /></a></p>
          <p>C&oacute;&nbsp;<strong>3 cặp n&uacute;t tai, v&agrave;nh đeo tai&nbsp;k&iacute;ch cỡ S, M, L</strong>, cho người d&ugrave;ng t&ugrave;y chọn để đeo thoải m&aacute;i, chắc chắn.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-3-1.jpg"><img class=" ls-is-cached lazyloaded" title="Tai nghe Bluetooth True Wireless Samsung Galaxy Buds+ R175 - C&oacute; 3 cặp n&uacute;t tai, v&agrave;nh đeo tai" src="https://cdn.tgdd.vn/Products/Images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-3-1.jpg" alt="Tai nghe Bluetooth True Wireless Samsung Galaxy Buds+ R175 - C&oacute; 3 cặp n&uacute;t tai, v&agrave;nh đeo tai" data-src="https://cdn.tgdd.vn/Products/Images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-3-1.jpg" /></a></p>
          <h3>&Acirc;m thanh chất lượng chuẩn studio qua hệ thống loa 2 chiều ti&ecirc;n tiến&nbsp;AKG</h3>
          <p>Với<strong>&nbsp;loa cao tần v&agrave; thấp tần</strong>, Galaxy Buds+ R175 t&aacute;i tạo&nbsp;<strong>sắc &acirc;m tr&ograve;n đầy tinh tế</strong>, &acirc;m bass d&agrave;y lực, &acirc;m mid v&agrave; treble trong trẻo, nốt cao sắc n&eacute;t, cảm nhận được độ ngọt, trong vắt từ giọng h&aacute;t của ca sĩ.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-4.jpg"><img class=" ls-is-cached lazyloaded" title="Tai nghe Bluetooth True Wireless Samsung Galaxy Buds+ R175 - &Acirc;m thanh chất lượng chuẩn studio qua hệ thống loa 2 chiều ti&ecirc;n tiến AKG" src="https://cdn.tgdd.vn/Products/Images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-4.jpg" alt="Tai nghe Bluetooth True Wireless Samsung Galaxy Buds+ R175 - &Acirc;m thanh chất lượng chuẩn studio qua hệ thống loa 2 chiều ti&ecirc;n tiến AKG" data-src="https://cdn.tgdd.vn/Products/Images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-4.jpg" /></a></p>
          <p>Duy tr&igrave; chất &acirc;m đ&agrave;m thoại ổn định, loại bỏ tối đa tạp &acirc;m trong m&ocirc;i trường với&nbsp;<strong>2 mic ngo&agrave;i v&agrave; 1 mic t&iacute;ch hợp b&ecirc;n trong</strong>.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-5.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless Samsung Galaxy Buds+ R175 - 2 mic ngo&agrave;i v&agrave; 1 mic t&iacute;ch hợp b&ecirc;n trong" src="https://cdn.tgdd.vn/Products/Images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-5.jpg" alt="Tai nghe Bluetooth True Wireless Samsung Galaxy Buds+ R175 - 2 mic ngo&agrave;i v&agrave; 1 mic t&iacute;ch hợp b&ecirc;n trong" data-src="https://cdn.tgdd.vn/Products/Images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-5.jpg" /></a></p>
          <h3>Kết nối kh&ocirc;ng d&acirc;y nhanh ch&oacute;ng qua c&ocirc;ng nghệ Bluetooth 5.0</h3>
          <p><a title="Tham khảo c&aacute;c mẫu tai nghe Samsung tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe-samsung" target="_blank">Tai nghe Samsung</a>&nbsp;c&oacute; khả năng tương th&iacute;ch tốt với c&aacute;c thiết bị di động hoạt động tr&ecirc;n nền tảng<strong>&nbsp;Android 5.0 trở l&ecirc;n,&nbsp;iOS 10 trở l&ecirc;n</strong>, từ d&ograve;ng iPhone 7 về sau,&nbsp;Galaxy S20 | S20+ | S20 Ultra, Galaxy S21 | S21+ | S21 Ultra 5G, Galaxy Tab S6, Galaxy Tab S7 | S7+,...</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-6.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless Samsung Galaxy Buds+ R175 - Kết nối kh&ocirc;ng d&acirc;y nhanh ch&oacute;ng qua c&ocirc;ng nghệ Bluetooth 5.0" src="https://cdn.tgdd.vn/Products/Images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-6.jpg" alt="Tai nghe Bluetooth True Wireless Samsung Galaxy Buds+ R175 - Kết nối kh&ocirc;ng d&acirc;y nhanh ch&oacute;ng qua c&ocirc;ng nghệ Bluetooth 5.0" data-src="https://cdn.tgdd.vn/Products/Images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-6.jpg" /></a></p>
          <h3>Bắt nhịp với cuộc sống diễn ra quanh bạn c&ugrave;ng chế độ Ambient Sound</h3>
          <p>Khi tắt&nbsp;Ambient Sound, bạn sẽ ho&agrave;n to&agrave;n đắm ch&igrave;m trong thế giới &acirc;m nhạc của m&igrave;nh v&agrave; khi bật, tăng dần chế độ Ambient Sound, bạn sẽ dễ d&agrave;ng nắm bắt mọi &acirc;m thanh từ m&ocirc;i trường b&ecirc;n ngo&agrave;i m&agrave; chẳng cần phải th&aacute;o&nbsp;Galaxy Buds+ R175 ra khỏi tai m&igrave;nh.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-10.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless Samsung Galaxy Buds+ R175 - Bắt nhịp với cuộc sống diễn ra quanh bạn c&ugrave;ng chế độ Ambient Sound" src="https://cdn.tgdd.vn/Products/Images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-10.jpg" alt="Tai nghe Bluetooth True Wireless Samsung Galaxy Buds+ R175 - Bắt nhịp với cuộc sống diễn ra quanh bạn c&ugrave;ng chế độ Ambient Sound" data-src="https://cdn.tgdd.vn/Products/Images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-10.jpg" /></a></p>
          <h3>Tận hưởng giai điệu y&ecirc;u th&iacute;ch cả ng&agrave;y với thời gian nghe nhạc đến 11 giờ, cho 22 giờ khi d&ugrave;ng c&ugrave;ng hộp sạc</h3>
          <p>Nếu đang lỡ xem phim, trận b&oacute;ng gay cấn m&agrave; pin yếu?&nbsp;<strong>Sạc nhanh&nbsp;<a title="Xem th&ecirc;m một số tai nghe tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe" target="_blank">tai nghe</a>&nbsp;3 ph&uacute;t</strong>, bạn sẽ c&oacute; ngay&nbsp;<strong>1 giờ sử dụng li&ecirc;n tục</strong>. T&iacute;ch hợp<strong>&nbsp;cổng sạc Type-C</strong>&nbsp;nằm ở mặt lưng hộp sạc, cho bạn dễ d&agrave;ng cắm d&acirc;y c&aacute;p sạc (đi k&egrave;m khi mua sản phẩm) v&agrave; sạc đầy pin cho tai nghe dễ d&agrave;ng bất cứ l&uacute;c n&agrave;o.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-9.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless Samsung Galaxy Buds+ R175 - Tận hưởng giai điệu y&ecirc;u th&iacute;ch cả ng&agrave;y với thời gian nghe nhạc đến 11 giờ, cho 22 giờ khi d&ugrave;ng c&ugrave;ng hộp sạc" src="https://cdn.tgdd.vn/Products/Images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-9.jpg" alt="Tai nghe Bluetooth True Wireless Samsung Galaxy Buds+ R175 - Tận hưởng giai điệu y&ecirc;u th&iacute;ch cả ng&agrave;y với thời gian nghe nhạc đến 11 giờ, cho 22 giờ khi d&ugrave;ng c&ugrave;ng hộp sạc" data-src="https://cdn.tgdd.vn/Products/Images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-9.jpg" /></a></p>
          <p>Th&uacute; vị hơn, chiếc tai nghe kh&ocirc;ng d&acirc;y n&agrave;y c&ograve;n c&oacute; thể sạc với&nbsp;<strong>mọi thiết bị sạc&nbsp;kh&ocirc;ng d&acirc;y chuẩn Qi</strong>, cho bạn nạp pin lại cho&nbsp;<a title="Xem th&ecirc;m c&aacute;c sản phẩm tai nghe Bluetooth tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe-bluetooth" target="_blank">tai nghe Bluetooth</a>&nbsp;linh hoạt, thuận lợi hơn bao giờ hết.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-7.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless Samsung Galaxy Buds+ R175 - C&oacute; thể sạc với mọi thiết bị sạc kh&ocirc;ng d&acirc;y chuẩn Qi" src="https://cdn.tgdd.vn/Products/Images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-7.jpg" alt="Tai nghe Bluetooth True Wireless Samsung Galaxy Buds+ R175 - C&oacute; thể sạc với mọi thiết bị sạc kh&ocirc;ng d&acirc;y chuẩn Qi" data-src="https://cdn.tgdd.vn/Products/Images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-7.jpg" /></a></p>
          <h3>Chạm nhẹ để t&ugrave;y chỉnh c&aacute;c chức năng</h3>
          <p>- Chạm 1 lần: Ph&aacute;t/tạm ngừng b&agrave;i h&aacute;t.</p>
          <p>- Chạm 2 lần: Nhận/Kết th&uacute;c cuộc gọi, chuyển b&agrave;i tiếp theo.</p>
          <p>- Chạm 3 lần: Chuyển lại b&agrave;i trước đ&oacute;.</p>
          <p>- Chạm v&agrave; giữ:&nbsp;Gọi trợ l&yacute; ảo Siri, Google Assistant, k&iacute;ch hoạt t&iacute;nh năng thiết lập sẵn kh&aacute;c.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-8.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless Samsung Galaxy Buds+ R175 - Chạm nhẹ để t&ugrave;y chỉnh c&aacute;c chức năng" src="https://cdn.tgdd.vn/Products/Images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-8.jpg" alt="Tai nghe Bluetooth True Wireless Samsung Galaxy Buds+ R175 - Chạm nhẹ để t&ugrave;y chỉnh c&aacute;c chức năng" data-src="https://cdn.tgdd.vn/Products/Images/54/238231/bluetooth-tws-samsung-galaxy-bub-r175-8.jpg" /></a></p>
          <p>C&oacute; thể thấy rằng với thiết kế b&oacute;ng đẹp, thời trang, thời lượng pin khủng, chất &acirc;m tuyệt vời,&nbsp;<a title="tai nghe Bluetooth True Wireless Samsung Galaxy Buds+ R175" href="https://www.thegioididong.com/tai-nghe/bluetooth-tws-samsung-galaxy-bub-r175" target="_blank">tai nghe Bluetooth True Wireless Samsung Galaxy Buds+ R175</a>&nbsp;hứa hẹn sẽ l&agrave; người bạn ho&agrave;n hảo để đồng h&agrave;nh tr&ecirc;n mọi h&agrave;nh tr&igrave;nh, c&ugrave;ng bạn cảm nhận thế giới mu&ocirc;n m&agrave;u mu&ocirc;n vẻ đầy &yacute; nghĩa.&nbsp;</p>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','configuration' => '<table style="height: 158px;" width="796">
          <tbody>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Thời gian tai nghe:</td>
          <td style="width: 390px; height: 13px;">D&ugrave;ng 6 giờ - Sạc 2 giờ</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Thời gian hộp sạc:</td>
          <td style="width: 390px; height: 13px;">D&ugrave;ng 15 giờ</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Cổng sạc:</td>
          <td style="width: 390px; height: 13px;">Type-C</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">C&ocirc;ng nghệ &acirc;m thanh:</td>
          <td style="width: 390px; height: 13px;">JBL Pure Bass</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Tương th&iacute;ch:</td>
          <td style="width: 390px; height: 13px;"><span class="comma">Android</span><span class="comma">iOS (iPhone)</span><span class="">Windows</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Tiện &iacute;ch:</td>
          <td style="width: 390px; height: 13px;">Mic đ&agrave;m thoại</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Hỗ trợ kết nối:</td>
          <td style="width: 390px; height: 13px;">10 m (Bluetooth 5.0)</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Điều khiển bằng:</td>
          <td style="width: 390px; height: 13px;">Ph&iacute;m nhấn</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">H&atilde;ng</td>
          <td style="width: 390px; height: 13px;">JBL</td>
          </tr>
          </tbody>
          </table>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','created_at' => '2021-06-27 07:45:15','updated_at' => '2021-06-27 07:45:15','deleted_at' => NULL),
            array('id' => '8','name' => 'Tai nghe Bluetooth True Wireless Hydrus TS12BC','code' => 'TN8','origin' => 'Nam Định','price' => '330000','picture' => '1624779974.jpg','status' => '1','description' => '<h3>Thiết kế kh&ocirc;ng d&acirc;y hiện đại, m&agrave;u hồng - trắng đẹp mắt, trẻ trung</h3>
          <p><a title="Tai nghe kh&ocirc;ng d&acirc;y True Wireless tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe-khong-day" target="_blank">Tai nghe True Wireless</a>&nbsp;đồng bộ m&agrave;u sắc ho&agrave;n hảo giữa housing v&agrave; hộp sạc, thiết kế&nbsp;<strong>housing như dạng hạt đậu nhỏ nhắn</strong>, th&acirc;n thiện, đeo v&agrave; th&aacute;o dễ d&agrave;ng.</p>
          <p>Hộp sạc c&oacute; bề mặt đ&aacute;y được l&agrave;m phẳng n&ecirc;n đặt thăng bằng tr&ecirc;n mặt kệ, b&agrave;n. Nắp đậy kh&iacute;t với th&acirc;n hộp sạc, đảm bảo an to&agrave;n cho tai nghe khi bảo quản.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/238028/bluetooth-true-wireless-hydrus-ts12bc-1.jpg"><img class=" ls-is-cached lazyloaded" title="Tai nghe Bluetooth True Wireless Hydrus TS12BC - Thiết kế kh&ocirc;ng d&acirc;y hiện đại, m&agrave;u hồng - trắng đẹp mắt, trẻ trung" src="https://cdn.tgdd.vn/Products/Images/54/238028/bluetooth-true-wireless-hydrus-ts12bc-1.jpg" alt="Tai nghe Bluetooth True Wireless Hydrus TS12BC - Thiết kế kh&ocirc;ng d&acirc;y hiện đại, m&agrave;u hồng - trắng đẹp mắt, trẻ trung" data-src="https://cdn.tgdd.vn/Products/Images/54/238028/bluetooth-true-wireless-hydrus-ts12bc-1.jpg" /></a></p>
          <p>N&uacute;t tai tr&ograve;n được l&agrave;m mềm mại,&nbsp;<strong>c&oacute; đến 3 cặp kh&aacute;c k&iacute;ch thước&nbsp;</strong>để người d&ugrave;ng t&ugrave;y chọn theo khổ tai của m&igrave;nh đảm bảo&nbsp;<a title="Xem th&ecirc;m c&aacute;c sản phẩm tai nghe Bluetooth tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe-bluetooth" target="_blank">tai nghe Bluetooth</a>&nbsp;b&aacute;m chặt, trải nghiệm nghe tốt hơn.&nbsp;&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/238028/bluetooth-true-wireless-hydrus-ts12bc-2.jpg"><img class=" ls-is-cached lazyloaded" title="Tai nghe Bluetooth True Wireless Hydrus TS12BC - N&uacute;t tai tr&ograve;n được l&agrave;m mềm mại" src="https://cdn.tgdd.vn/Products/Images/54/238028/bluetooth-true-wireless-hydrus-ts12bc-2.jpg" alt="Tai nghe Bluetooth True Wireless Hydrus TS12BC - N&uacute;t tai tr&ograve;n được l&agrave;m mềm mại" data-src="https://cdn.tgdd.vn/Products/Images/54/238028/bluetooth-true-wireless-hydrus-ts12bc-2.jpg" /></a></p>
          <h3>Bao tr&ugrave;m đ&ocirc;i tai bạn với chất &acirc;m ch&acirc;n thật, sinh động, &acirc;m bass chắc khỏe, đầy uy lực&nbsp;</h3>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/238028/bluetooth-true-wireless-hydrus-ts12bc-4.jpg"><img class=" ls-is-cached lazyloaded" title="Tai nghe Bluetooth True Wireless Hydrus TS12BC - Bao tr&ugrave;m đ&ocirc;i tai bạn với chất &acirc;m ch&acirc;n thật, sinh động, &acirc;m bass chắc khỏe, đầy uy lực " src="https://cdn.tgdd.vn/Products/Images/54/238028/bluetooth-true-wireless-hydrus-ts12bc-4.jpg" alt="Tai nghe Bluetooth True Wireless Hydrus TS12BC - Bao tr&ugrave;m đ&ocirc;i tai bạn với chất &acirc;m ch&acirc;n thật, sinh động, &acirc;m bass chắc khỏe, đầy uy lực " data-src="https://cdn.tgdd.vn/Products/Images/54/238028/bluetooth-true-wireless-hydrus-ts12bc-4.jpg" /></a></p>
          <h3>T&iacute;n hiệu kết nối kh&ocirc;ng d&acirc;y ổn định tới 10 m qua c&ocirc;ng nghệ&nbsp;Bluetooth 5.0&nbsp;</h3>
          <p>Phi&ecirc;n bản&nbsp;Bluetooth n&agrave;y cho đường truyền kết nối mạnh mẽ giữa&nbsp;<a title="Tham khảo c&aacute;c mẫu tai nghe Hydrus tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe-hydrus" target="_blank">tai nghe Hydrus</a>&nbsp;v&agrave;&nbsp;<a title="Tham khảo điện thoại kinh doanh tại Thế Giới Di Động" href="https://www.thegioididong.com/dtdd" target="_blank">điện thoại</a>,&nbsp;<a title="M&aacute;y t&iacute;nh bảng ch&iacute;nh h&atilde;ng, gi&aacute; rẻ, b&aacute;n tại Thế giới Di Động" href="https://www.thegioididong.com/may-tinh-bang" target="_blank">m&aacute;y t&iacute;nh bảng,</a>&nbsp;<a title="Laptop ch&iacute;nh h&atilde;ng, gi&aacute; rẻ, b&aacute;n tại Thế giới Di Động" href="https://www.thegioididong.com/laptop" target="_blank">laptop</a>, tiết kiệm năng lượng tối đa cho thiết bị sử dụng.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/238028/bluetooth-true-wireless-hydrus-ts12bc-3.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless Hydrus TS12BC - T&iacute;n hiệu kết nối kh&ocirc;ng d&acirc;y ổn định tới 10 m qua c&ocirc;ng nghệ Bluetooth 5.0 " src="https://cdn.tgdd.vn/Products/Images/54/238028/bluetooth-true-wireless-hydrus-ts12bc-3.jpg" alt="Tai nghe Bluetooth True Wireless Hydrus TS12BC - T&iacute;n hiệu kết nối kh&ocirc;ng d&acirc;y ổn định tới 10 m qua c&ocirc;ng nghệ Bluetooth 5.0 " data-src="https://cdn.tgdd.vn/Products/Images/54/238028/bluetooth-true-wireless-hydrus-ts12bc-3.jpg" /></a></p>
          <h3>Tận hưởng sở th&iacute;ch nghe nhạc với tai nghe cho 3.5 giờ d&ugrave;ng, hộp sạc th&ecirc;m 12 giờ,&nbsp;thời gian chờ cho 200 giờ</h3>
          <p>Hydrus TS12BC kh&ocirc;ng chỉ cung cấp thời gian d&ugrave;ng l&acirc;u m&agrave; thời gian&nbsp;<strong>sạc chỉ 1 giờ</strong>&nbsp;qua&nbsp;<strong>cổng Type-C</strong>, cũng l&agrave; điểm cộng cực ấn tượng của&nbsp;<a title="Xem th&ecirc;m một số tai nghe tại Thế Giới Di Động" href="https://www.thegioididong.com/tai-nghe" target="_blank">tai nghe</a>, nhờ đ&oacute; kh&ocirc;ng l&agrave;m gi&aacute;n đoạn thời gian trải nghiệm của bạn tối ưu.&nbsp;</p>
          <p>C&oacute; đ&egrave;n b&aacute;o LED khi&nbsp;<strong>đ&egrave;n c&oacute; m&agrave;u đỏ</strong>&nbsp;v&agrave; &acirc;m b&aacute;o<strong>&nbsp;Please charge</strong>&nbsp;bạn cần cắm sạc cho tai nghe, trong khi sạc đ&egrave;n sẽ nhấp nh&aacute;y m&agrave;u đỏ, sau khi sạc đầy, đ&egrave;n b&aacute;o sẽ tắt.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/238028/bluetooth-true-wireless-hydrus-ts12bc-5.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless Hydrus TS12BC - Tận hưởng sở th&iacute;ch nghe nhạc với tai nghe cho 3.5 giờ d&ugrave;ng, hộp sạc th&ecirc;m 12 giờ, thời gian chờ cho 200 giờ" src="https://cdn.tgdd.vn/Products/Images/54/238028/bluetooth-true-wireless-hydrus-ts12bc-5.jpg" alt="Tai nghe Bluetooth True Wireless Hydrus TS12BC - Tận hưởng sở th&iacute;ch nghe nhạc với tai nghe cho 3.5 giờ d&ugrave;ng, hộp sạc th&ecirc;m 12 giờ, thời gian chờ cho 200 giờ" data-src="https://cdn.tgdd.vn/Products/Images/54/238028/bluetooth-true-wireless-hydrus-ts12bc-5.jpg" /></a></p>
          <h3>Tr&ecirc;n mỗi housing&nbsp;c&oacute; t&iacute;ch hợp 1 n&uacute;t nhấn to dễ sử dụng</h3>
          <p>-&nbsp;<strong>Nhận cuộc gọi/Kết th&uacute;c cuộc gọi</strong>: Nhấn 1 lần.</p>
          <p>-&nbsp;<strong>Từ chối cuộc gọi</strong>: Nhấn v&agrave; giữ trong 2 gi&acirc;y.</p>
          <p>-&nbsp;<strong>Ph&aacute;t/Tạm dừng chơi nhạc</strong>: Nhấn 1 lần.&nbsp;</p>
          <p>-&nbsp;<strong>Chuyển b&agrave;i h&aacute;t tiếp theo</strong>: Nhấn 2 lần v&agrave;o housing tr&aacute;i.</p>
          <p>-&nbsp;<strong>Chuyển b&agrave;i h&aacute;t cuối c&ugrave;ng</strong>: Nhấn 2 lần v&agrave;o housing phải.</p>
          <p>Đặc biệt, tai nghe c&oacute;&nbsp;<strong>b&aacute;o động chống mất</strong>, khi 1 housing đặt ở xa hoặc ngắt kết nối bất thường, bạn sẽ nghe thấy lời nhắc bằng giọng n&oacute;i tr&ecirc;n housing c&ograve;n lại v&agrave; n&oacute; sẽ cố kết nối trong 3 ph&uacute;t, sau 3 ph&uacute;t tai nghe tự động tắt.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/54/238028/bluetooth-true-wireless-hydrus-ts12bc-89.jpg"><img class=" lazyloaded" title="Tai nghe Bluetooth True Wireless Hydrus TS12BC - Tr&ecirc;n mỗi housing c&oacute; t&iacute;ch hợp 1 n&uacute;t nhấn to dễ sử dụng" src="https://cdn.tgdd.vn/Products/Images/54/238028/bluetooth-true-wireless-hydrus-ts12bc-89.jpg" alt="Tai nghe Bluetooth True Wireless Hydrus TS12BC - Tr&ecirc;n mỗi housing c&oacute; t&iacute;ch hợp 1 n&uacute;t nhấn to dễ sử dụng" data-src="https://cdn.tgdd.vn/Products/Images/54/238028/bluetooth-true-wireless-hydrus-ts12bc-89.jpg" /></a></p>
          <p>C&oacute; thể thấy, mẫu m&atilde; thời thượng, thời gian d&ugrave;ng l&acirc;u, &acirc;m thanh sống động, tiện dụng của&nbsp;<a title="tai nghe Bluetooth True Wireless Hydrus TS12BC" href="https://www.thegioididong.com/tai-nghe/bluetooth-true-wireless-hydrus-ts12bc" target="_blank">tai nghe Bluetooth True Wireless Hydrus TS12BC</a>&nbsp;v&ocirc; c&ugrave;ng xứng đ&aacute;ng để c&ugrave;ng bạn chinh phục mọi thử th&aacute;ch cuộc sống, tận hưởng &acirc;m nhạc thỏa th&iacute;ch.&nbsp;</p>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','configuration' => '<table style="height: 158px;" width="796">
          <tbody>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Thời gian tai nghe:</td>
          <td style="width: 390px; height: 13px;">D&ugrave;ng 6 giờ - Sạc 2 giờ</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Thời gian hộp sạc:</td>
          <td style="width: 390px; height: 13px;">D&ugrave;ng 15 giờ</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Cổng sạc:</td>
          <td style="width: 390px; height: 13px;">Type-C</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">C&ocirc;ng nghệ &acirc;m thanh:</td>
          <td style="width: 390px; height: 13px;">JBL Pure Bass</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Tương th&iacute;ch:</td>
          <td style="width: 390px; height: 13px;"><span class="comma">Android</span><span class="comma">iOS (iPhone)</span><span class="">Windows</span></td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Tiện &iacute;ch:</td>
          <td style="width: 390px; height: 13px;">Mic đ&agrave;m thoại</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Hỗ trợ kết nối:</td>
          <td style="width: 390px; height: 13px;">10 m (Bluetooth 5.0)</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">Điều khiển bằng:</td>
          <td style="width: 390px; height: 13px;">Ph&iacute;m nhấn</td>
          </tr>
          <tr style="height: 13px;">
          <td style="width: 390px; height: 13px;">H&atilde;ng</td>
          <td style="width: 390px; height: 13px;">JBL</td>
          </tr>
          </tbody>
          </table>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','created_at' => '2021-06-27 07:46:14','updated_at' => '2021-06-27 07:47:57','deleted_at' => NULL)
          );
          DB::table('headphones')->insert($headphones);
    }
}
