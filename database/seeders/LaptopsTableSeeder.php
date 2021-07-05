<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LaptopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laptops')->truncate();

        $data = array(
            array('id' => '1','name' => 'Laptop MSI GF63 10SC i5 10300H 8GB/512GB/4GB GTX1650/144Hz/Win10 (255VN)','code' => 'MSI1','origin' => 'Hồ Chí Minh','price' => '17840000','picture' => '1624767064.jpg','status' => '1','description' => '<h3><a title="MSI GF63 10SC i5 (255VN) đang b&aacute;n tại thegioididong.com" href="https://www.thegioididong.com/laptop/msi-gf63-10sc-i5-255vn" target="_blank">MSI GF63 10SC i5 (255VN)</a>&nbsp;mang vẻ ngo&agrave;i mạnh mẽ, đậm chất gaming sở hữu chip i5 thế hệ 10 c&ugrave;ng card đồ họa NVIDIA GeForce GTX 1650 mang lại hiệu năng vượt trội, thoải m&aacute;i chiến c&aacute;c tựa game y&ecirc;u th&iacute;ch.</h3>
          <h3>Chiến c&aacute;c game thịnh h&agrave;nh với bộ CPU mạnh mẽ</h3>
          <p><a title="Xem th&ecirc;m c&aacute;c mẫu laptop đang b&aacute;n tại thegioididong.com" href="https://www.thegioididong.com/laptop" target="_blank">Laptop</a>&nbsp;sở hữu bộ vi xử l&yacute;&nbsp;<strong><a title="Xem th&ecirc;m c&aacute;c mẫu laptop trang bị Intel Core i5 đang b&aacute;n tại thegioididong.com" href="https://www.thegioididong.com/laptop?g=core-i5" target="_blank">Intel Core i5</a>&nbsp;10300H Gen 10</strong>&nbsp;c&oacute; sức mạnh hiệu năng vượt trội tăng khả năng xử l&yacute; nhanh ch&oacute;ng v&agrave; tiết kiệm năng lượng với tốc độ xung nhịp trung b&igrave;nh&nbsp;<strong>2.50 GHz</strong>&nbsp;đạt cao nhất&nbsp;<strong>Turbo Boost 4.5 GHz</strong>.</p>
          <p><strong><a title="Xem c&aacute;c mẫu laptp 8 GB đang b&aacute;n tại thegioididong.com" href="https://www.thegioididong.com/laptop-8-gb" target="_blank">RAM 8 GB</a></strong>&nbsp;với tốc độ Bus RAM<strong>&nbsp;2666 MHz</strong>&nbsp;cho khả năng xử l&yacute; đa nhiệm, đ&aacute;p ứng được hầu hết c&aacute;c nhu cầu giải tr&iacute; l&agrave;m việc của bạn, d&ugrave; bạn mở nhiều ứng dụng c&ugrave;ng l&uacute;c cũng kh&ocirc;ng lo bị đơ m&aacute;y, đứng m&aacute;y.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/238608/msi-gf63-10sc-i5-255vn-4.jpg"><img class=" ls-is-cached lazyloaded" title="MSI GF63 10SC i5 10300H (255VN) - Cấu h&igrave;nh" src="https://cdn.tgdd.vn/Products/Images/44/238608/msi-gf63-10sc-i5-255vn-4.jpg" alt="MSI GF63 10SC i5 10300H (255VN) - Cấu h&igrave;nh" data-src="https://cdn.tgdd.vn/Products/Images/44/238608/msi-gf63-10sc-i5-255vn-4.jpg" /></a></p>
          <p><a title="Xem c&aacute;c mẫu laptop trang bị card đồ họa rời đang b&aacute;n tại thegioididong.com" href="https://www.thegioididong.com/laptop-card-do-hoa-roi" target="_blank">Card đồ họa rời</a>&nbsp;<strong>NVIDIA GeForce GTX 1650 4 GB</strong>&nbsp;mang lại trải nghiệm chiến c&aacute;c tựa game hot như Far Cry 5, GTA 5, Li&ecirc;n Minh Huyền Thoại, FIFA Online 4,... một c&aacute;ch mượt m&agrave;, trơn tru ở mức c&agrave;i đặt trung b&igrave;nh - cao m&agrave; kh&ocirc;ng lo xảy ra hiện tượng b&oacute;ng ma hay giật lag h&igrave;nh ảnh. Đồng thời, bạn c&ograve;n c&oacute; thể sử dụng chiếc m&aacute;y n&agrave;y để thực hiện thiết kế đồ họa như chỉnh sửa h&igrave;nh ảnh, video bằng Photoshop, Ai, Pr,...</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/238608/msi-gf63-10sc-i5-255vn-5.jpg"><img class=" ls-is-cached lazyloaded" title="MSI GF63 10SC i5 10300H (255VN) - Card đồ họa " src="https://cdn.tgdd.vn/Products/Images/44/238608/msi-gf63-10sc-i5-255vn-5.jpg" alt="MSI GF63 10SC i5 10300H (255VN) - Card đồ họa " data-src="https://cdn.tgdd.vn/Products/Images/44/238608/msi-gf63-10sc-i5-255vn-5.jpg" /></a></p>
          <p><strong>Ổ cứng&nbsp;<a title="Xem th&ecirc;m c&aacute;c sản phẩm laptop SSD 512 GB đang kinh doanh tại thegioididong.com" href="https://www.thegioididong.com/laptop?g=ssd-512-gb" target="_blank">SSD 512 GB</a>&nbsp;NVMe PCIe</strong>&nbsp;gi&uacute;p khởi động m&aacute;y, ứng dụng nhanh ch&oacute;ng v&agrave; cho kh&ocirc;ng gian lưu trữ vừa đủ nhiều tựa game y&ecirc;u th&iacute;ch, file h&igrave;nh ảnh, &acirc;m thanh,... Hơn nữa, MSI cung cấp khe cắm HDD SATA thoả sức n&acirc;ng cấp ổ cứng tuỳ theo nhu cầu của bạn.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/238608/msi-gf63-10sc-i5-255vn-6.jpg"><img class=" ls-is-cached lazyloaded" title="MSI GF63 10SC i5 10300H (255VN) - SSD" src="https://cdn.tgdd.vn/Products/Images/44/238608/msi-gf63-10sc-i5-255vn-6.jpg" alt="MSI GF63 10SC i5 10300H (255VN) - SSD" data-src="https://cdn.tgdd.vn/Products/Images/44/238608/msi-gf63-10sc-i5-255vn-6.jpg" /></a></p>
          <h3>Thiết kế phong c&aacute;ch, thể hiện c&aacute; t&iacute;nh&nbsp;</h3>
          <p>MSI GF63 thể hiện sự mạnh mẽ đặc trưng của d&ograve;ng&nbsp;<a title="Xem th&ecirc;m laptop gaming đang b&aacute;n tại thegioididong.com" href="https://www.thegioididong.com/laptop?g=laptop-gaming" target="_blank">laptop gaming</a>&nbsp;với vỏ mặt lưng được l&agrave;m từ kim loại bền bỉ kết hợp logo c&agrave;ng tăng th&ecirc;m vẻ huyền b&iacute; cho chiếc laptop n&agrave;y. M&aacute;y c&oacute; trọng lượng&nbsp;<strong>1.86 kg</strong>, độ d&agrave;y&nbsp;<strong>21.7 mm</strong>&nbsp;cũng c&oacute; thể được xem l&agrave; gọn nhẹ so với c&aacute;c laptop c&ugrave;ng ph&acirc;n kh&uacute;c.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/238608/msi-gf63-10sc-i5-255vn-2.jpg"><img class=" lazyloaded" title="MSI GF63 10SC i5 10300H (255VN) - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/238608/msi-gf63-10sc-i5-255vn-2.jpg" alt="MSI GF63 10SC i5 10300H (255VN) - Thiết kế" data-src="https://cdn.tgdd.vn/Products/Images/44/238608/msi-gf63-10sc-i5-255vn-2.jpg" /></a></p>
          <p>B&agrave;n ph&iacute;m c&oacute; k&iacute;ch thước hợp l&yacute;, h&agrave;nh tr&igrave;nh ph&iacute;m s&acirc;u, cảm gi&aacute;c g&otilde; ph&iacute;m tốt v&agrave; được trang bị&nbsp;<strong>đ&egrave;n nền</strong>&nbsp;m&agrave;u đỏ gi&uacute;p tăng th&ecirc;m sự th&iacute;ch th&uacute; hơn khi chơi game. B&ecirc;n cạnh đ&oacute;&nbsp;<strong>chiếu nghỉ tay</strong>&nbsp;rất thoải m&aacute;i v&agrave; chắc chắn, bạn sẽ cảm thấy sự m&aacute;t lạnh khi đặt tay l&ecirc;n khu vực n&agrave;y ngay sau khi mở m&aacute;y l&ecirc;n.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/238608/msi-gf63-10sc-i5-255vn-7.jpg"><img class=" lazyloaded" title="MSI GF63 10SC i5 10300H (255VN) - B&agrave;n ph&iacute;m" src="https://cdn.tgdd.vn/Products/Images/44/238608/msi-gf63-10sc-i5-255vn-7.jpg" alt="MSI GF63 10SC i5 10300H (255VN) - B&agrave;n ph&iacute;m" data-src="https://cdn.tgdd.vn/Products/Images/44/238608/msi-gf63-10sc-i5-255vn-7.jpg" /></a></p>
          <p>Hệ thống tản nhiệt&nbsp;<strong>CoolerBoost</strong>&nbsp;độc quyền hoạt động &ecirc;m &aacute;i gi&uacute;p giảm thiểu hơi n&oacute;ng nhanh ch&oacute;ng, tối ưu luồng gi&oacute; để đảm bảo mang lại hiệu năng game cao trong một th&acirc;n m&aacute;y gọn g&agrave;ng.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/238608/msi-gf63-10sc-i5-255vn-8.jpg"><img class=" lazyloaded" title="MSI GF63 10SC i5 10300H (255VN) - Tản nhiệt" src="https://cdn.tgdd.vn/Products/Images/44/238608/msi-gf63-10sc-i5-255vn-8.jpg" alt="MSI GF63 10SC i5 10300H (255VN) - Tản nhiệt" data-src="https://cdn.tgdd.vn/Products/Images/44/238608/msi-gf63-10sc-i5-255vn-8.jpg" /></a></p>
          <p>Ngo&agrave;i ra,&nbsp;<a title="Xem c&aacute;c mẫu laptop MSI đag b&aacute;n tại thegioididong.com" href="https://www.thegioididong.com/laptop-msi" target="_blank">laptop MSI</a>&nbsp;c&ograve;n được trang bị đa dạng c&aacute;c cổng kết nối như HDMI, LAN (RJ45), USB 3.2, USB Type-C kết nối tiện lợi v&agrave; nhanh ch&oacute;ng với chuột, b&agrave;n ph&iacute;m rời, m&agrave;n h&igrave;nh rời, m&aacute;y chiếu,... Chuẩn kết nối kh&ocirc;ng d&acirc;y Bluetooth 5.1,&nbsp;<a title="Xem th&ecirc;m về chuẩn Wi-Fi 6 AX201" href="https://www.thegioididong.com/hoi-dap/wi-fi-chuan-80211ax-la-gi-tim-hieu-ve-wi-fi-the-he-thu-6-1187524" target="_blank">Wi-Fi 6 AX201</a>&nbsp;cho đường truyền mạng lu&ocirc;n ổn định, kh&ocirc;ng lo bị mất kết nối khi chơi game, giải tr&iacute;.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/238608/msi-gf63-10sc-i5-255vn-12.jpg"><img class=" lazyloaded" title="MSI GF63 10SC i5 10300H (255VN) - Cổng kết nối" src="https://cdn.tgdd.vn/Products/Images/44/238608/msi-gf63-10sc-i5-255vn-12.jpg" alt="MSI GF63 10SC i5 10300H (255VN) - Cổng kết nối" data-src="https://cdn.tgdd.vn/Products/Images/44/238608/msi-gf63-10sc-i5-255vn-12.jpg" /></a></p>
          <h3>Trải nghiệm nhập vai qua&nbsp;<a title="Xem th&ecirc;m c&aacute;c mẫu laptop tr&ecirc;n 15 inch đang b&aacute;n tại thegioididong.com" href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">m&agrave;n h&igrave;nh 15.6 inch</a>&nbsp;hiển thị ch&acirc;n thật</h3>
          <p>M&agrave;n h&igrave;nh c&oacute; độ ph&acirc;n giải&nbsp;<strong>Full HD (1920 x 1080)</strong>&nbsp;với tần số qu&eacute;t&nbsp;<strong>144 Hz</strong>&nbsp;mang lại h&igrave;nh ảnh sống động, m&agrave;u sắc được t&aacute;i tạo ch&iacute;nh x&aacute;c v&agrave; gi&uacute;p nắm bắt kịp thời từng chuyển động trong game, tốc độ chuyển đổi giữa c&aacute;c khung h&igrave;nh nhanh hơn, tăng khả năng chiến thắng.</p>
          <p>G&oacute;c nh&igrave;n rộng hơn đến&nbsp;<strong>178 độ</strong>&nbsp;cho h&igrave;nh ảnh chi tiết sắc n&eacute;t với&nbsp;<a title="T&igrave;m hiểu th&ecirc;m về tấm nền IPS" href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">tấm nền IPS</a>&nbsp;c&ugrave;ng c&ocirc;ng nghệ chống ch&oacute;i&nbsp;<a title="T&igrave;m hiểu th&ecirc;m về c&ocirc;ng nghệ chống ch&oacute;i Anti Glare" href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Anti Glare</a>&nbsp;giảm t&igrave;nh trạng ch&oacute;i, nh&ograve;e h&igrave;nh hay mỏi mắt, ch&oacute;ng mặt khi sử dụng m&aacute;y l&acirc;u hay trong điều kiện &aacute;nh s&aacute;ng mạnh.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/238608/msi-gf63-10sc-i5-255vn-9.jpg"><img class=" lazyloaded" title="MSI GF63 10SC i5 10300H (255VN) - H&igrave;nh ảnh" src="https://cdn.tgdd.vn/Products/Images/44/238608/msi-gf63-10sc-i5-255vn-9.jpg" alt="MSI GF63 10SC i5 10300H (255VN) - H&igrave;nh ảnh" data-src="https://cdn.tgdd.vn/Products/Images/44/238608/msi-gf63-10sc-i5-255vn-9.jpg" /></a></p>
          <p>Đắm ch&igrave;m trong c&aacute;c tr&ograve; chơi hay nghe nhạc, xem phim giải tr&iacute; qua kh&ocirc;ng gian &acirc;m thanh ph&aacute;t ra to r&otilde;, ch&acirc;n thật từ c&ocirc;ng nghệ&nbsp;<strong>Nahimic Audio</strong>.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/238608/msi-gf63-10sc-i5-255vn-11.jpg"><img class=" lazyloaded" title="MSI GF63 10SC i5 10300H (255VN) - &Acirc;m thanh" src="https://cdn.tgdd.vn/Products/Images/44/238608/msi-gf63-10sc-i5-255vn-11.jpg" alt="MSI GF63 10SC i5 10300H (255VN) - &Acirc;m thanh" data-src="https://cdn.tgdd.vn/Products/Images/44/238608/msi-gf63-10sc-i5-255vn-11.jpg" /></a></p>
          <p>H&atilde;y sở hữu ngay chiếc&nbsp;<a title="Xem th&ecirc;m laptop gaming MSI đang b&aacute;n tại thegioididong.com" href="https://www.thegioididong.com/laptop-msi?g=laptop-gaming" target="_blank">laptop MSI Gaming</a>&nbsp;n&agrave;y để thỏa sức c&ugrave;ng chiến c&aacute;c tựa game y&ecirc;u th&iacute;ch nh&eacute;.</p>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','configuration' => '<table style="height: 210px;" width="1020">
          <tbody>
          <tr>
          <td style="width: 502px;">CPU:</td>
          <td style="width: 502px;"><span class="comma">Intel Core i5 Comet Lake</span><span class="comma">10300H</span><span class="">2.50 GHz</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">RAM:</td>
          <td style="width: 502px;"><span class="comma">8 GB</span><span class="comma">DDR4 (2 khe)</span><span class="">2666 MHz</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Ổ cứng:</td>
          <td style="width: 502px;"><span class="comma">Hỗ trợ khe cắm HDD SATA</span><span class="">SSD 512 GB NVMe PCIe</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">M&agrave;n h&igrave;nh:</td>
          <td style="width: 502px;"><span class="comma">15.6"</span><span class="">Full HD (1920 x 1080), 144Hz</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Card m&agrave;n h&igrave;nh:</td>
          <td style="width: 502px;"><span class="comma">Card rời</span><span class="">NVIDIA GeForce GTX 1650 4 GB</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Cổng kết nối:</td>
          <td style="width: 502px;"><span class="comma">3 x USB 3.2</span><span class="comma">HDMI</span><span class="comma">LAN (RJ45)</span><span class="">USB Type-C</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Đặc biệt:</td>
          <td style="width: 502px;">C&oacute; đ&egrave;n b&agrave;n ph&iacute;m</td>
          </tr>
          <tr>
          <td style="width: 502px;">Hệ điều h&agrave;nh:</td>
          <td style="width: 502px;">Windows 10 Home SL</td>
          </tr>
          <tr>
          <td style="width: 502px;">Thiết kế:</td>
          <td style="width: 502px;">Nắp lưng v&agrave; chiếu nghỉ tay bằng kim loại</td>
          </tr>
          <tr>
          <td style="width: 502px;">K&iacute;ch thước:</td>
          <td style="width: 502px;"><span class="comma">21.7 mm</span><span class="">1.86 kg</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Thời điểm ra mắt:</td>
          <td style="width: 502px;">2021</td>
          </tr>
          </tbody>
          </table>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','created_at' => '2021-06-27 04:11:04','updated_at' => '2021-06-27 04:32:29','deleted_at' => NULL),
            array('id' => '2','name' => 'Laptop Asus VivoBook X515MA N4020/4GB/256GB/Win10 (BR111T)','code' => 'AS1','origin' => 'Thái Bình','price' => '8490000','picture' => '1624767773.jpg','status' => '1','description' => '<h3>Laptop Asus VivoBook X515MA (BR111T) l&agrave; một mẫu&nbsp;<a title="Xem th&ecirc;m c&aacute;c sản phẩm laptop học tập, văn ph&ograve;ng đang b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop?g=hoc-tap-van-phong" target="_blank" rel="noopener">laptop học tập - văn ph&ograve;ng</a>&nbsp;c&oacute; thiết kế gọn nhẹ, hiệu năng ổn định ph&ugrave; hợp với c&aacute;c bạn thường xuy&ecirc;n sử dụng c&aacute;c ứng dụng văn ph&ograve;ng nhẹ nh&agrave;ng.</h3>
          <h3>Cấu h&igrave;nh ổn định, xử l&yacute; tốt c&aacute;c ứng dụng văn ph&ograve;ng</h3>
          <p><a title="Xem th&ecirc;m c&aacute;c sản phẩm Asus VivoBook đang b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop-asus-vivobook" target="_blank" rel="noopener">Laptop Asus VivoBook</a>&nbsp;được trang bị con chip&nbsp;<a title="Xem th&ecirc;m c&aacute;c laptop Intel Celeron/Pentium đang b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop-celeron-pentium" target="_blank" rel="noopener">Intel Celeron&nbsp;</a>c&oacute; hiệu năng ổn định xử l&yacute; c&aacute;c t&aacute;c vụ căn bản, với<strong>&nbsp;2 nh&acirc;n 2 luồng</strong>&nbsp;c&oacute; xung nhịp&nbsp;<strong>1.10 GHz</strong>&nbsp;gi&uacute;p lướt web, xem phim, nghe nhạc,... V&agrave; đạt xung nhịp tối đa l&agrave;<strong>&nbsp;2.8 GHz</strong>&nbsp;nhờ&nbsp;<strong>Turbo Boost&nbsp;</strong>để xử l&yacute; một số c&ocirc;ng việc văn ph&ograve;ng như: Word, Excel, Powerpoint,...</p>
          <p>Đi c&ugrave;ng với chip l&agrave; card đồ họa t&iacute;ch hợp&nbsp;<strong>Intel UHD Graphics 600</strong>&nbsp;hỗ trợ việc xử l&yacute; h&igrave;nh ảnh tốt hơn v&agrave; tiết kiệm pin hiệu quả nhờ c&oacute; mức ti&ecirc;u thụ điện năng thấp n&ecirc;n th&iacute;ch hợp cho c&aacute;c t&aacute;c vụ văn ph&ograve;ng cơ bản. Thời lượng pin đạt khoảng từ&nbsp;<strong>3 - 4 giờ</strong>&nbsp;đồng hồ t&ugrave;y v&agrave;o mục đ&iacute;ch sử dụng của bạn.</p>
          <p>M&aacute;y c&oacute;&nbsp;<a title="Laptop được trang bị RAM 4 GB đang kinh doanh tại Thegioididong.com" href="https://www.thegioididong.com/laptop?g=4-gb" target="_blank" rel="noopener"><strong>RAM 4 GB</strong></a>&nbsp;cho khả năng xử l&yacute; đa nhiệm ổn định, bạn c&oacute; thể mở c&ugrave;ng l&uacute;c nhiều ứng dụng để phục vụ cho c&ocirc;ng việc tốt hơn m&agrave; kh&ocirc;ng lo m&aacute;y bị đơ hay giật. Nếu 4 GB c&oacute; thể l&agrave; qu&aacute; &iacute;t với bạn th&igrave; m&aacute;y c&ograve;n hỗ trợ n&acirc;ng cấp RAM l&ecirc;n&nbsp;<strong>16 GB</strong>&nbsp;gi&uacute;p bạn dễ d&agrave;ng n&acirc;ng cấp cho ph&ugrave; hợp với nhu cầu.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/233852/asus-vivobook-x515ma-n4020-br111t-151221-101256.jpg"><img class=" ls-is-cached lazyloaded" title="Laptop Asus VivoBook X515MA (BR111T) - Hiệu năng" src="https://cdn.tgdd.vn/Products/Images/44/233852/asus-vivobook-x515ma-n4020-br111t-151221-101256.jpg" alt="Laptop Asus VivoBook X515MA (BR111T) - Hiệu năng" data-src="https://cdn.tgdd.vn/Products/Images/44/233852/asus-vivobook-x515ma-n4020-br111t-151221-101256.jpg" /></a></p>
          <p>Thời gian khởi động m&aacute;y nhanh ch&oacute;ng v&agrave; khả năng lưu trữ lớn nhờ ổ cứng&nbsp;<strong><a title="Xem th&ecirc;m c&aacute;c laptop c&oacute; SSD 256 GB" href="https://www.thegioididong.com/laptop?g=ssd-256-gb" target="_blank" rel="noopener">SSD 256 GB</a>&nbsp;</strong>tr&ecirc;n laptop. Bạn chỉ cần mất khoảng 10 - 15 gi&acirc;y để khởi động laptop v&agrave; 3 &ndash; 5 gi&acirc;y để khởi động c&aacute;c ứng dụng văn ph&ograve;ng, giải tr&iacute;, thỏa sức lưu trữ mọi dữ liệu cần thiết cho c&ocirc;ng việc, học tập hay những bộ phim y&ecirc;u th&iacute;ch để xem khi rảnh.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/233852/asus-vivobook-x515ma-n4020-br111t-151321-101347.jpg"><img class=" ls-is-cached lazyloaded" title="Laptop Asus VivoBook X515MA (BR111T) - SSD" src="https://cdn.tgdd.vn/Products/Images/44/233852/asus-vivobook-x515ma-n4020-br111t-151321-101347.jpg" alt="Laptop Asus VivoBook X515MA (BR111T) - SSD" data-src="https://cdn.tgdd.vn/Products/Images/44/233852/asus-vivobook-x515ma-n4020-br111t-151321-101347.jpg" /></a></p>
          <h3>Thiết kế gọn g&agrave;ng, linh hoạt cho việc di chuyển</h3>
          <p>Chiếc<a title="Xem th&ecirc;m c&aacute;c sản phẩm laptop Asus đang b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop-asus" target="_blank" rel="noopener">&nbsp;laptop Asus</a>&nbsp;c&oacute; lớp vỏ được l&agrave;m từ chất liệu nhựa vừa cho khối lượng nhẹ vừa gi&uacute;p tản nhiệt nhanh ch&oacute;ng, c&aacute;c g&oacute;c cạnh của m&aacute;y được v&aacute;t cong tỉ mỉ tạo n&ecirc;n sự liền mạch cho c&aacute;c bộ phận của laptop.</p>
          <p>M&aacute;y c&oacute; trọng lượng chỉ&nbsp;<strong>1.8 kg&nbsp;</strong>v&agrave; mỏng&nbsp;<strong>19.9 mm</strong>&nbsp;kh&aacute; l&agrave; gọn nhẹ, sẽ kh&ocirc;ng g&acirc;y ra bất cứ vấn đề g&igrave; khi bạn di chuyển c&ugrave;ng với n&oacute;, bạn chỉ cần bỏ n&oacute; v&agrave;o những chiếc balo hay t&uacute;i x&aacute;ch c&oacute; k&iacute;ch thước vừa phải l&agrave; đ&atilde; c&oacute; thể mang theo thuận tiện cho c&ocirc;ng việc.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/233852/asus-vivobook-x515ma-n4020-br111t-151421-101410.jpg"><img class=" lazyloaded" title="Laptop Asus VivoBook X515MA (BR111T) - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/233852/asus-vivobook-x515ma-n4020-br111t-151421-101410.jpg" alt="Laptop Asus VivoBook X515MA (BR111T) - Thiết kế" width="800" height="444" data-src="https://cdn.tgdd.vn/Products/Images/44/233852/asus-vivobook-x515ma-n4020-br111t-151421-101410.jpg" /></a></p>
          <p><a title="T&igrave;m hiểu th&ecirc;m bảo mật v&acirc;n tay l&agrave; g&igrave;?" href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank" rel="noopener"><strong>Cảm biến v&acirc;n tay</strong></a>&nbsp;được t&iacute;ch hợp tr&ecirc;n b&agrave;n di chuột gi&uacute;p bạn mở kh&oacute;a nhanh ch&oacute;ng chỉ với một c&aacute;i chạm nhẹ. B&ecirc;n cạnh tốc độ mở kh&oacute;a nhanh cảm biến c&ograve;n c&oacute; khả năng bảo mật tốt hơn so với mật khẩu trước đ&acirc;y, gi&uacute;p đảm bảo an to&agrave;n cho c&aacute;c dữ liệu quan trọng b&ecirc;n trong m&aacute;y.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/233852/cam-bien-van-tay.jpg"><img class=" lazyloaded" title="Laptop Asus VivoBook X515MA (BR111T) - V&acirc;n tay" src="https://cdn.tgdd.vn/Products/Images/44/233852/cam-bien-van-tay.jpg" alt="Laptop Asus VivoBook X515MA (BR111T) - V&acirc;n tay" data-src="https://cdn.tgdd.vn/Products/Images/44/233852/cam-bien-van-tay.jpg" /></a></p>
          <p>Tuy m&aacute;y c&oacute; k&iacute;ch thước nhỏ gọn nhưng vẫn trang bị đầy đủ c&aacute;c cổng kết nối th&ocirc;ng dụng dọc hai b&ecirc;n th&acirc;n m&aacute;y như: USB 3.2, USB 2.0, HDMI, khe đọc thẻ nhớ Micro SD, USB Type-C gi&uacute;p kết nối c&oacute; d&acirc;y dễ d&agrave;ng với c&aacute;c thiết bị kh&aacute;c như tivi hay m&aacute;y chiếu, chia sẻ dữ liệu nhanh ch&oacute;ng v&agrave; hỗ trợ c&ocirc;ng suất truyền tải điện l&ecirc;n đến 100W. Ngo&agrave;i ra, m&aacute;y c&ograve;n c&oacute; 2 phương thức kết nối kh&ocirc;ng d&acirc;y Bluetooth 4.1 v&agrave; Wi-Fi 802.11 a/b/g/n/ac cho tốc độ đường truyền nhanh, phạm vi kết nối lớn.</p>
          <p><a class="preventdefault" href="https://cdn.tgdd.vn/2021/02/content/ckn-800x500.jpg"><img class=" lazyloaded" src="https://cdn.tgdd.vn/2021/02/content/ckn-800x500.jpg" alt="Laptop Asus VivoBook X515MA (BR111T) - Cổng kết nối" width="800" height="500" data-src="https://cdn.tgdd.vn/2021/02/content/ckn-800x500.jpg" /></a></p>
          <p>VivoBook X515MA cung cấp cho bạn một thời lượng pin từ&nbsp;<strong>3 đến 4 giờ</strong>&nbsp;tuỳ thuộc v&agrave;o nhu cầu sử dụng của bạn, đủ để đi c&ugrave;ng bạn một buổi học tại trường hay c&aacute;c cuộc họp tr&ecirc;n c&ocirc;ng ty.</p>
          <h3>M&agrave;n h&igrave;nh lớn, h&igrave;nh ảnh sắc n&eacute;t</h3>
          <p><a title="Xem th&ecirc;m c&aacute;c mẫu laptop đang kinh doanh tại thegioididong.com" href="https://www.thegioididong.com/laptop" target="_blank" rel="noopener">Laptop</a>&nbsp;sở hữu m&agrave;n h&igrave;nh&nbsp;<strong><a title="Xem th&ecirc;m một số laptop m&agrave;n h&igrave;nh 15.6 inch đang được kinh doanh tại Thegioididong.com" href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank" rel="noopener">15.6 inch</a></strong>&nbsp;với độ ph&acirc;n giải&nbsp;<strong><a title="Xem th&ecirc;m c&aacute;c Laptop c&oacute; độ ph&acirc;n giải HD đang b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop-hd" target="_blank" rel="noopener">HD</a>&nbsp;</strong>cho h&igrave;nh ảnh hiển thị sống động tr&ecirc;n một kh&ocirc;ng gian rộng r&atilde;i với chất lượng tốt nhất. Kết hợp c&ocirc;ng nghệ chống ch&oacute;i&nbsp;<strong>Anti Glare</strong>&nbsp;để h&igrave;nh ảnh chi tiết, ch&acirc;n thực v&agrave; r&otilde; r&agrave;ng nhất ở mọi g&oacute;c nh&igrave;n, thoải m&aacute;i cả khi l&agrave;m việc ngo&agrave;i trời.&nbsp;</p>
          <p>M&agrave;n h&igrave;nh sử dụng c&ocirc;ng nghệ&nbsp;<strong>LED Backlit</strong>&nbsp;cho m&agrave;n h&igrave;nh mỏng, ti&ecirc;u tốn &iacute;t điện năng. Ngo&agrave;i ra c&ograve;n gi&uacute;p tăng độ tương phản của h&igrave;nh ảnh v&agrave; m&agrave;u sắc hiển thị để khung h&igrave;nh trở n&ecirc;n ho&agrave;n hảo hơn, đem đến cho bạn những khung h&igrave;nh tốt nhất.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/233852/asus-vivobook-x515ma-n4020-br111t-151321-101316.jpg"><img class=" lazyloaded" title="Laptop Asus VivoBook X515MA (BR111T) - M&agrave;n h&igrave;nh" src="https://cdn.tgdd.vn/Products/Images/44/233852/asus-vivobook-x515ma-n4020-br111t-151321-101316.jpg" alt="Laptop Asus VivoBook X515MA (BR111T) - M&agrave;n h&igrave;nh" data-src="https://cdn.tgdd.vn/Products/Images/44/233852/asus-vivobook-x515ma-n4020-br111t-151321-101316.jpg" /></a></p>
          <p>M&aacute;y sử dụng&nbsp;<a title="T&igrave;m hiểu về SonicMaster" href="https://www.thegioididong.com/hoi-dap/am-thanh-sonicmaster-la-gi-950390" target="_blank" rel="noopener">c&ocirc;ng nghệ&nbsp;<strong>SonicMaster</strong></a>&nbsp;đ&acirc;y l&agrave; c&ocirc;ng nghệ &acirc;m thanh độc quyền tr&ecirc;n c&aacute;c sản phẩm của Asus. N&oacute; gi&uacute;p tối ưu &acirc;m thanh dựa tr&ecirc;n phần cứng tr&ecirc;n m&aacute;y t&iacute;nh cho &acirc;m thanh ph&aacute;t ra to, r&otilde; r&agrave;ng, lọc bỏ tiếng ồn, &acirc;m Bass s&acirc;u, &acirc;m thanh ch&acirc;n thực v&agrave; sinh động,... tạo n&ecirc;n kh&ocirc;ng gian &acirc;m nhạc sống động để bạn đắm ch&igrave;m v&agrave;o đ&oacute;.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/233852/asus-vivobook-x515ma-n4020-br111t-090221-0438053.jpg"><img class=" lazyloaded" title="Laptop Asus VivoBook X515MA (BR111T) - &Acirc;m thanh" src="https://cdn.tgdd.vn/Products/Images/44/233852/asus-vivobook-x515ma-n4020-br111t-090221-0438053.jpg" alt="Laptop Asus VivoBook X515MA (BR111T) - &Acirc;m thanh" data-src="https://cdn.tgdd.vn/Products/Images/44/233852/asus-vivobook-x515ma-n4020-br111t-090221-0438053.jpg" /></a></p>
          <p><a title="Laptop Asus VivoBook X515MA (BR111T)" href="https://www.thegioididong.com/laptop/asus-vivobook-x515ma-n4020-br111t" target="_blank" rel="noopener">Laptop Asus VivoBook X515MA (BR111T)</a>&nbsp;l&agrave; sự lựa chọn ph&ugrave; hợp d&agrave;nh cho sinh vi&ecirc;n, nh&acirc;n vi&ecirc;n văn ph&ograve;ng khi cần một chiếc laptop mỏng nhẹ, di động nhưng vẫn c&oacute; cấu h&igrave;nh ổn định đ&aacute;p ứng tốt c&aacute;c nhu cầu l&agrave;m việc căn bản.</p>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','configuration' => '<table style="height: 210px;" width="1020">
          <tbody>
          <tr>
          <td style="width: 502px;">CPU:</td>
          <td style="width: 502px;"><span class="comma">Intel Core i5 Comet Lake</span><span class="comma">10300H</span><span class="">2.50 GHz</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">RAM:</td>
          <td style="width: 502px;"><span class="comma">8 GB</span><span class="comma">DDR4 (2 khe)</span><span class="">2666 MHz</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Ổ cứng:</td>
          <td style="width: 502px;"><span class="comma">Hỗ trợ khe cắm HDD SATA</span><span class="">SSD 512 GB NVMe PCIe</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">M&agrave;n h&igrave;nh:</td>
          <td style="width: 502px;"><span class="comma">15.6"</span><span class="">Full HD (1920 x 1080), 144Hz</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Card m&agrave;n h&igrave;nh:</td>
          <td style="width: 502px;"><span class="comma">Card rời</span><span class="">NVIDIA GeForce GTX 1650 4 GB</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Cổng kết nối:</td>
          <td style="width: 502px;"><span class="comma">3 x USB 3.2</span><span class="comma">HDMI</span><span class="comma">LAN (RJ45)</span><span class="">USB Type-C</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Đặc biệt:</td>
          <td style="width: 502px;">C&oacute; đ&egrave;n b&agrave;n ph&iacute;m</td>
          </tr>
          <tr>
          <td style="width: 502px;">Hệ điều h&agrave;nh:</td>
          <td style="width: 502px;">Windows 10 Home SL</td>
          </tr>
          <tr>
          <td style="width: 502px;">Thiết kế:</td>
          <td style="width: 502px;">Nắp lưng v&agrave; chiếu nghỉ tay bằng kim loại</td>
          </tr>
          <tr>
          <td style="width: 502px;">K&iacute;ch thước:</td>
          <td style="width: 502px;"><span class="comma">21.7 mm</span><span class="">1.86 kg</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Thời điểm ra mắt:</td>
          <td style="width: 502px;">2021</td>
          </tr>
          </tbody>
          </table>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','created_at' => '2021-06-27 04:22:53','updated_at' => '2021-06-27 04:32:17','deleted_at' => NULL),
            array('id' => '3','name' => 'Laptop Lenovo ThinkBook 15 G2 ITL i5 1135G7/8GB/512GB/Win10 (20VE006YVN)','code' => 'LE1','origin' => 'Nghệ An','price' => '17190000','picture' => '1624767828.jpg','status' => '1','description' => '<h3><a title="Laptop Lenovo ThinkBook 15 G2 ITL i5 (20VE006YVN)" href="https://www.thegioididong.com/laptop/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn" target="_blank">Laptop Lenovo ThinkBook 15 G2 ITL i5 (20VE006YVN)</a>&nbsp;l&agrave; chiếc laptop thuộc d&ograve;ng laptop doanh nh&acirc;n sở hữu thiết kế sang trọng, độ bền chuẩn qu&acirc;n đội kết hợp với hiệu năng mạnh mẽ, l&agrave; lựa chọn l&yacute; tưởng cho giới doanh nh&acirc;n, văn ph&ograve;ng, người l&agrave;m c&ocirc;ng việc s&aacute;ng tạo nội dung.</h3>
          <h3>Thiết kế kim loại cao cấp sang trọng</h3>
          <p>Với chất liệu vỏ ho&agrave;n to&agrave;n từ kim loại &iacute;t bị b&aacute;m bụi b&aacute;m dấu v&acirc;n tay, đường n&eacute;t của laptop được l&agrave;m vu&ocirc;ng vắn tạo cảm gi&aacute;c khỏe khoắn, thiết kế của&nbsp;<a title="Xem th&ecirc;m một số mẫu laptop Lenovo ThinkBook đang được b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop-lenovo?g=lenovo-thinkbook" target="_blank">Lenovo ThinkBook</a>&nbsp;15 mang đến cảm gi&aacute;c cực k&igrave; đẳng cấp v&agrave; thời trang, tạo phong c&aacute;ch ri&ecirc;ng cho bạn.</p>
          <p>Chiếc&nbsp;<a title="Xem th&ecirc;m một số laptop đang được b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop" target="_blank">laptop</a>&nbsp;n&agrave;y chỉ c&oacute; khối lượng khoảng&nbsp;<strong>1.7 kg</strong>&nbsp;v&agrave; d&agrave;y&nbsp;<strong>18.9 mm</strong>&nbsp;sẽ gi&uacute;p bạn dễ d&agrave;ng di chuyển m&aacute;y khi cần đem theo b&ecirc;n m&igrave;nh.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/235448/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn-4.jpg"><img class=" ls-is-cached lazyloaded" title="lenovo-thinkbook-15-g2-itl-i5-20ve006yvn - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/235448/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn-4.jpg" alt="lenovo-thinkbook-15-g2-itl-i5-20ve006yvn - Thiết kế" data-src="https://cdn.tgdd.vn/Products/Images/44/235448/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn-4.jpg" /></a></p>
          <p>Đặc biệt, bản lề của laptop được thiết kế c&oacute; thể mở rộng đến&nbsp;<strong>180 độ</strong>, tiện lợi khi sử dụng ở nhiều tư thế, hạn chế g&atilde;y bản lề khi v&ocirc; t&igrave;nh va đập.&nbsp;Lenovo ThinkBook đạt chứng nhận&nbsp;<a title="Ti&ecirc;u chuẩn qu&acirc;n sự Mỹ MIL-STD-810G tr&ecirc;n laptop c&oacute; &yacute; nghĩa g&igrave;?" href="https://www.thegioididong.com/hoi-dap/tieu-chuan-quan-su-my-mil-std-810g-1304935" target="_blank"><strong>độ bền chuẩn qu&acirc;n đội</strong></a>, hạn chế hư hỏng trước những va đập thường ng&agrave;y, đồng h&agrave;nh l&acirc;u d&agrave;i với người d&ugrave;ng.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/235448/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn-9.jpg"><img class=" ls-is-cached lazyloaded" title="lenovo-thinkbook-15-g2-itl-i5-20ve006yvn - bản lề" src="https://cdn.tgdd.vn/Products/Images/44/235448/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn-9.jpg" alt="lenovo-thinkbook-15-g2-itl-i5-20ve006yvn - bản lề" data-src="https://cdn.tgdd.vn/Products/Images/44/235448/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn-9.jpg" /></a></p>
          <p>T&iacute;nh năng bảo mật v&acirc;n tay gi&uacute;p&nbsp;<a title="Xem th&ecirc;m một số mẫu laptop lenovo đang được b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop-lenovo" target="_blank">laptop Lenovo</a>&nbsp;ThinkBook ngăn chặn sự x&acirc;m nhập tr&aacute;i ph&eacute;p từ b&ecirc;n ngo&agrave;i đồng thời tiện lợi hơn cho người d&ugrave;ng khi mở m&aacute;y hoặc thanh to&aacute;n trực tuyến.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/235448/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn-8.jpg"><img class=" ls-is-cached lazyloaded" title="lenovo-thinkbook-15-g2-itl-i5-20ve006yvn - cảm biến" src="https://cdn.tgdd.vn/Products/Images/44/235448/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn-8.jpg" alt="lenovo-thinkbook-15-g2-itl-i5-20ve006yvn - cảm biến" data-src="https://cdn.tgdd.vn/Products/Images/44/235448/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn-8.jpg" /></a></p>
          <p>Laptop c&oacute; cho m&igrave;nh 2 cổng USB 3.2, 1 cổng USB-C t&iacute;ch hợp Thunderbolt 4 truyền dữ liệu cực nhanh, USB Type-C hiện đại v&agrave; 1 cổng HDMI tương th&iacute;ch với nhiều thiết bị th&ocirc;ng dụng gi&uacute;p cho việc kết nối thuận tiện, nhanh ch&oacute;ng hơn bao giờ hết.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/235448/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn-7.jpg"><img class=" ls-is-cached lazyloaded" title="lenovo-thinkbook-15-g2-itl-i5-20ve006yvn - cổng kết nối" src="https://cdn.tgdd.vn/Products/Images/44/235448/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn-7.jpg" alt="lenovo-thinkbook-15-g2-itl-i5-20ve006yvn - cổng kết nối" data-src="https://cdn.tgdd.vn/Products/Images/44/235448/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn-7.jpg" /></a></p>
          <h3>Khả năng xử l&yacute; mạnh mẽ</h3>
          <p>Bộ vi xử l&yacute;&nbsp;<strong>Intel&nbsp;<a title="Xem th&ecirc;m một số laptop CPU Core i5 đang được b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop?g=core-i5" target="_blank">Core i5</a>&nbsp;1135G7</strong>&nbsp;vừa được ra mắt cuối năm 2020 được tối ưu hơn so với thế hệ cũ cả về hiệu năng lẫn tốc độ xử l&iacute;, cho khả năng xử l&yacute; nhanh ch&oacute;ng c&aacute;c t&aacute;c vụ văn ph&ograve;ng v&agrave; đồ họa căn bản với xung nhịp trung b&igrave;nh khoảng<strong>&nbsp;2.40 GHz</strong>&nbsp;v&agrave; tối đa&nbsp;<strong>4.2 GHz</strong>&nbsp;khi &eacute;p xung. Chip t&iacute;ch hợp GPU đồ họa&nbsp;<strong>Intel Iris Xe Graphics&nbsp;</strong>mang đến trải nghiệm h&igrave;nh ảnh sắc n&eacute;t, tăng hiệu suất đồ họa cho hiệu năng xử l&iacute; mạnh mẽ, l&agrave;m được nhiều việc hơn tr&ecirc;n chiếc laptop n&agrave;y, từ chỉnh sửa ảnh, bi&ecirc;n tập video nhẹ nh&agrave;ng hay chạy c&aacute;c ứng dụng văn ph&ograve;ng th&ocirc;ng dụng đều mượt m&agrave;.</p>
          <p><strong><a title="Xem th&ecirc;m một số laptop RAM 8 GB đang được b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop-8-gb" target="_blank">RAM 8 GB</a></strong>&nbsp;với tốc độ Bus RAM&nbsp;<strong>3200 MHz&nbsp;</strong>c&oacute; thể sử dụng khi l&agrave;m việc đa nhiệm, bạn c&oacute; thể vừa xử l&iacute; c&ugrave;ng một l&uacute;c h&agrave;ng chục layer tr&ecirc;n Photoshop vừa nghe nhạc, t&igrave;m kiếm t&agrave;i liệu tr&ecirc;n Google Chrome. Nếu bạn cần nhiều RAM hơn, m&aacute;y vẫn hỗ trợ n&acirc;ng cấp tối đa l&ecirc;n đến&nbsp;<strong>40 GB</strong>.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/235448/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn-2.jpg"><img class=" lazyloaded" title="lenovo-thinkbook-15-g2-itl-i5-20ve006yvn - cấu h&igrave;nh" src="https://cdn.tgdd.vn/Products/Images/44/235448/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn-2.jpg" alt="lenovo-thinkbook-15-g2-itl-i5-20ve006yvn - cấu h&igrave;nh" data-src="https://cdn.tgdd.vn/Products/Images/44/235448/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn-2.jpg" /></a></p>
          <p>Bạn sẽ kh&ocirc;ng phải chờ l&acirc;u khi khởi động m&aacute;y hay khởi động ứng dụng, c&aacute;c thao t&aacute;c tr&ecirc;n m&aacute;y cũng được phản hồi chỉ trong v&agrave;i gi&acirc;y nhờ c&oacute;&nbsp;<strong><a title="Xem th&ecirc;m một số laptop c&oacute; Ổ cứng SSD đang được b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop-o-cung-ssd" target="_blank">ổ cứng SSD</a></strong>&nbsp;<a title="Xem th&ecirc;m một số laptop c&oacute; ổ cứng SSD 512 GB đang được b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop?g=ssd-512-gb" target="_blank"><strong>512 GB</strong></a>&nbsp;M.2 PCIe, với 512 GB, bạn cũng c&oacute; thể thả ga lưu trữ h&igrave;nh ảnh những t&agrave;i liệu, ứng dụng tr&ecirc;n ổ cứng n&agrave;y. Hỗ trợ khe cắm HDD SATA để tiện n&acirc;ng cấp nếu bạn cần nhiều dung lượng lưu trữ hơn.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/235448/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn-3.jpg"><img class=" lazyloaded" title="lenovo-thinkbook-15-g2-itl-i5-20ve006yvn - SSD" src="https://cdn.tgdd.vn/Products/Images/44/235448/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn-3.jpg" alt="lenovo-thinkbook-15-g2-itl-i5-20ve006yvn - SSD" data-src="https://cdn.tgdd.vn/Products/Images/44/235448/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn-3.jpg" /></a></p>
          <h3>M&agrave;n h&igrave;nh viền mỏng - hiển thị chất lượng</h3>
          <p>Lenovo trang bị cho chiếc laptop n&agrave;y m&agrave;n h&igrave;nh&nbsp;<a title="Xem th&ecirc;m một số laptop m&agrave;n h&igrave;nh tr&ecirc;n 15 inch đang được b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank"><strong>15.6 inch</strong></a>&nbsp;độ ph&acirc;n giải&nbsp;<strong><a title="Xem th&ecirc;m một số laptop c&oacute; m&agrave;n h&igrave;nh Full HD đang được b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop-full-hd" target="_blank">Full HD</a>&nbsp;(1920 x 1080)</strong>&nbsp;cho h&igrave;nh ảnh sống động, r&otilde; n&eacute;t từng chi tiết, m&agrave;u sắc ch&iacute;nh x&aacute;c. Viền m&agrave;n h&igrave;nh si&ecirc;u mỏng để bạn c&oacute; được kh&ocirc;ng gian giải tr&iacute; ch&igrave;m đắm, thoải m&aacute;i nhất. Tấm nền<strong>&nbsp;IPS</strong>&nbsp;gi&uacute;p h&igrave;nh ảnh lu&ocirc;n đồng nhất từ c&aacute;c g&oacute;c nh&igrave;n kh&aacute;c nhau để trải nghiệm quan s&aacute;t tốt hơn.</p>
          <p>Hơn nữa, m&agrave;n h&igrave;nh c&ograve;n c&oacute; c&ocirc;ng nghệ&nbsp;<a title="T&igrave;m hiểu về m&agrave;n h&igrave;nh chống ch&oacute;i Anti Glare" href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Anti Glare</a>&nbsp;gi&uacute;p hạn chế m&agrave;n h&igrave;nh bị b&oacute;ng, l&oacute;a khi sử dụng ngo&agrave;i trời, gi&uacute;p cho mắt đỡ mỏi khi l&agrave;m việc thoải m&aacute;i trong thời gian d&agrave;i.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/235448/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn-6.jpg"><img class=" lazyloaded" title="lenovo-thinkbook-15-g2-itl-i5-20ve006yvn - m&agrave;n h&igrave;nh" src="https://cdn.tgdd.vn/Products/Images/44/235448/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn-6.jpg" alt="lenovo-thinkbook-15-g2-itl-i5-20ve006yvn - m&agrave;n h&igrave;nh" data-src="https://cdn.tgdd.vn/Products/Images/44/235448/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn-6.jpg" /></a></p>
          <p>Với c&ocirc;ng nghệ&nbsp;<a title="C&ocirc;ng nghệ &acirc;m thanh Dolby Audio Premium l&agrave; g&igrave;?" href="https://www.thegioididong.com/hoi-dap/am-thanh-dolby-audio-premium-co-gi-dac-biet-1017812" target="_blank">Dolby Audio</a>, Lenovo ThinkBook mang đến &acirc;m thanh to r&otilde;, tạo n&ecirc;n hiệu ứng &acirc;m th&agrave;nh v&ograve;m ph&aacute;t ra từ nhiều hướng cho bạn thỏa sức tận hưởng bản nhạc y&ecirc;u th&iacute;ch.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/235448/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn-10.jpg"><img class=" lazyloaded" title="lenovo-thinkbook-15-g2-itl-i5-20ve006yvn - &acirc;m thanh" src="https://cdn.tgdd.vn/Products/Images/44/235448/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn-10.jpg" alt="lenovo-thinkbook-15-g2-itl-i5-20ve006yvn - &acirc;m thanh" data-src="https://cdn.tgdd.vn/Products/Images/44/235448/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn-10.jpg" /></a></p>
          <p>Lenovo ThinkBook 15 G2 ITL i5 (20VE006YVN) thuộc ph&acirc;n kh&uacute;c&nbsp;<a title="Xem th&ecirc;m một số mẫu laptop Cao cấp - sang trọng đang được b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop?g=cao-cap-sang-trong" target="_blank">laptop cao cấp - sang trọng</a>&nbsp;với nhiều điểm mạnh về cả ngoại h&igrave;nh lẫn hiệu năng, chế độ bảo mật an to&agrave;n.</p>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','configuration' => '<table style="height: 210px;" width="1020">
          <tbody>
          <tr>
          <td style="width: 502px;">CPU:</td>
          <td style="width: 502px;"><span class="comma">Intel Core i5 Comet Lake</span><span class="comma">10300H</span><span class="">2.50 GHz</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">RAM:</td>
          <td style="width: 502px;"><span class="comma">8 GB</span><span class="comma">DDR4 (2 khe)</span><span class="">2666 MHz</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Ổ cứng:</td>
          <td style="width: 502px;"><span class="comma">Hỗ trợ khe cắm HDD SATA</span><span class="">SSD 512 GB NVMe PCIe</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">M&agrave;n h&igrave;nh:</td>
          <td style="width: 502px;"><span class="comma">15.6"</span><span class="">Full HD (1920 x 1080), 144Hz</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Card m&agrave;n h&igrave;nh:</td>
          <td style="width: 502px;"><span class="comma">Card rời</span><span class="">NVIDIA GeForce GTX 1650 4 GB</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Cổng kết nối:</td>
          <td style="width: 502px;"><span class="comma">3 x USB 3.2</span><span class="comma">HDMI</span><span class="comma">LAN (RJ45)</span><span class="">USB Type-C</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Đặc biệt:</td>
          <td style="width: 502px;">C&oacute; đ&egrave;n b&agrave;n ph&iacute;m</td>
          </tr>
          <tr>
          <td style="width: 502px;">Hệ điều h&agrave;nh:</td>
          <td style="width: 502px;">Windows 10 Home SL</td>
          </tr>
          <tr>
          <td style="width: 502px;">Thiết kế:</td>
          <td style="width: 502px;">Nắp lưng v&agrave; chiếu nghỉ tay bằng kim loại</td>
          </tr>
          <tr>
          <td style="width: 502px;">K&iacute;ch thước:</td>
          <td style="width: 502px;"><span class="comma">21.7 mm</span><span class="">1.86 kg</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Thời điểm ra mắt:</td>
          <td style="width: 502px;">2021</td>
          </tr>
          </tbody>
          </table>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','created_at' => '2021-06-27 04:23:48','updated_at' => '2021-06-27 04:32:09','deleted_at' => NULL),
            array('id' => '4','name' => 'Laptop Acer Aspire 7 A715 75G 52S5 i5 9300H/8GB/512GB/4GB GTX1650Ti/Balo/Win10 (NH.Q85SV.002)','code' => 'AC1','origin' => 'Hà Nam','price' => '20890000','picture' => '1624767891.jpg','status' => '1','description' => '<h3><a title="Acer Aspire 7 A715 75G 52S5 i5 (NH.Q85SV.002)" href="https://www.thegioididong.com/laptop/acer-aspire-7-a715-75g-52s5-i5-nhq85sv002" target="_blank">Acer Aspire 7 A715 75G 52S5 i5 (NH.Q85SV.002)</a>&nbsp;với&nbsp;cấu h&igrave;nh mạnh mẽ, ổ cứng SSD dung lượng lớn, m&agrave;n h&igrave;nh Full HD sắc n&eacute;t, t&iacute;ch hợp card đồ họa rời cho ph&eacute;p chơi game, đồ họa thật mượt m&agrave;.</h3>
          <h3>Cấu h&igrave;nh mạnh mẽ l&agrave;m việc văn ph&ograve;ng, chơi game, đồ họa mượt m&agrave;</h3>
          <p><a title="Xem th&ecirc;m c&aacute;c sản phẩm Acer Aspire đang b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop-acer-aspire">Acer Aspire</a>&nbsp;7 A715 75G 52S5 với d&ograve;ng&nbsp;<strong>CPU Intel&nbsp;<a title="Xem th&ecirc;m c&aacute;c laptop Core i5 đang b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop?g=core-i5" target="_blank">Core i5</a>&nbsp;thế hệ thứ 9&nbsp;</strong>sản xuất tr&ecirc;n tiến tr&igrave;nh&nbsp;<strong>14 nm</strong>&nbsp;ti&ecirc;n tiến đem lại&nbsp;hiệu năng đa l&otilde;i vượt trội, xử l&yacute; đa nhiệm mượt m&agrave; v&agrave; tiết kiệm pin tốt.</p>
          <p>C&ugrave;ng với card đồ họa rời&nbsp;<strong><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-card-do-hoa-nvidia-geforce-gtx-1650ti-uu-nhuoc-1284193" target="_blank">NVIDIA GeForce GTX 1650Ti 4GB</a></strong>&nbsp;gia tăng đ&aacute;ng kể hiệu năng của thiết bị, cho việc đồ họa 2D (tr&ecirc;n Photoshop, AI&hellip;), chạy đồ họa 3ds Max, render video v&agrave;i chục gi&acirc;y hay chiến c&aacute;c tựa game đỉnh (League of Legends, Hitman 3, War Zone&hellip;) trở n&ecirc;n thật đơn giản, mượt m&agrave;.</p>
          <p><strong><a title="Laptop được trang bị RAM 8 GB đang kinh doanh tại Thegioididong.com" href="https://www.thegioididong.com/laptop?g=8-gb" target="_blank">RAM 8 GB</a></strong>&nbsp;c&ugrave;ng khả năng n&acirc;ng cấp tối đa l&ecirc;n đến&nbsp;<strong>32 GB</strong>&nbsp;cho laptop xử l&yacute; đa nhiệm cực nhanh, di chuyển mượt m&agrave; giữa c&aacute;c ứng dụng, chạy đồng thời c&aacute;c ứng dụng đồ họa với h&agrave;ng chục tab chrome thật đơn giản.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/236962/acer-aspire-7-a715-75g-52s5-i5-nhq85sv002-4-1.jpg"><img class=" lazyloaded" title="Acer Aspire 7 A715 75G 52S5 i5 9300H (NH.Q85SV.002) - Cấu h&igrave;nh" src="https://cdn.tgdd.vn/Products/Images/44/236962/acer-aspire-7-a715-75g-52s5-i5-nhq85sv002-4-1.jpg" alt="Acer Aspire 7 A715 75G 52S5 i5 9300H (NH.Q85SV.002) - Cấu h&igrave;nh" data-src="https://cdn.tgdd.vn/Products/Images/44/236962/acer-aspire-7-a715-75g-52s5-i5-nhq85sv002-4-1.jpg" /></a></p>
          <p>Ổ cứng&nbsp;<strong><a title="Xem th&ecirc;m c&aacute;c laptop c&oacute; SSD 512 GB" href="https://www.thegioididong.com/laptop?g=ssd-512-gb" target="_blank">SSD 512 GB</a></strong>&nbsp;l&agrave; kho lưu trữ tuyệt vời cho t&agrave;i liệu c&ocirc;ng việc v&agrave; giải tr&iacute;, đồng thời hỗ trợ cực tốt cho tốc độ xử l&yacute; của m&aacute;y t&iacute;nh, khởi động nhanh, ghi ch&eacute;p tốc độ cao ấn tượng.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/236962/acer-aspire-7-a715-75g-52s5-i5-nhq85sv002-5-1.jpg"><img class=" lazyloaded" title="Acer Aspire 7 A715 75G 52S5 i5 9300H (NH.Q85SV.002) - SSD" src="https://cdn.tgdd.vn/Products/Images/44/236962/acer-aspire-7-a715-75g-52s5-i5-nhq85sv002-5-1.jpg" alt="Acer Aspire 7 A715 75G 52S5 i5 9300H (NH.Q85SV.002) - SSD" data-src="https://cdn.tgdd.vn/Products/Images/44/236962/acer-aspire-7-a715-75g-52s5-i5-nhq85sv002-5-1.jpg" /></a></p>
          <h3><a title="Xem th&ecirc;m một số laptop m&agrave;n h&igrave;nh tr&ecirc;n 15 inch đang được kinh doanh tại Thegioididong.com" href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">Laptop 15.6 inch</a>&nbsp;cho h&igrave;nh ảnh sắc n&eacute;t với độ ph&acirc;n giải Full HD</h3>
          <p>Được hỗ trợ<strong>&nbsp;tấm nền IPS</strong>&nbsp;v&agrave; c&ocirc;ng nghệ chống ch&oacute;i&nbsp;<a title="Anti-Glare" href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Anti Glare</a>, chiếc&nbsp;<a title="Xem th&ecirc;m c&aacute;c sản phẩm laptop Acer đang b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop-acer" target="_blank">laptop Acer</a>&nbsp;mang đến g&oacute;c nh&igrave;n rộng c&ugrave;ng khả năng hiển thị r&otilde; n&eacute;t c&aacute;c chi tiết tr&ecirc;n m&agrave;n h&igrave;nh trong cả điều kiện &aacute;nh s&aacute;ng ch&oacute;i, trải nghiệm tốt hơn, bảo vệ thị gi&aacute;c của bạn.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/236962/acer-aspire-7-a715-75g-52s5-i5-nhq85sv002-8-1.jpg"><img class=" lazyloaded" title="Acer Aspire 7 A715 75G 52S5 i5 9300H (NH.Q85SV.002) - H&igrave;nh ảnh" src="https://cdn.tgdd.vn/Products/Images/44/236962/acer-aspire-7-a715-75g-52s5-i5-nhq85sv002-8-1.jpg" alt="Acer Aspire 7 A715 75G 52S5 i5 9300H (NH.Q85SV.002) - H&igrave;nh ảnh" data-src="https://cdn.tgdd.vn/Products/Images/44/236962/acer-aspire-7-a715-75g-52s5-i5-nhq85sv002-8-1.jpg" /></a></p>
          <p>C&ocirc;ng nghệ &acirc;m thanh&nbsp;<strong><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-am-thanh-trueharmony-co-gi-dac-biet-1017616" target="_blank">Acer TrueHarmony</a></strong>&nbsp;mang đến trải nghiệm &acirc;m thanh r&otilde; r&agrave;ng, c&ugrave;ng khả năng t&aacute;i tạo &acirc;m thanh v&ograve;m cho trải nghiệm khi xem phim, nghe nhạc v&agrave; tham chiến game tuyệt vời.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/236962/acer-aspire-7-a715-75g-52s5-i5-nhq85sv002-9-1.jpg"><img class=" ls-is-cached lazyloaded" title="Acer Aspire 7 A715 75G 52S5 i5 9300H (NH.Q85SV.002) - &Acirc;m thanh" src="https://cdn.tgdd.vn/Products/Images/44/236962/acer-aspire-7-a715-75g-52s5-i5-nhq85sv002-9-1.jpg" alt="Acer Aspire 7 A715 75G 52S5 i5 9300H (NH.Q85SV.002) - &Acirc;m thanh" data-src="https://cdn.tgdd.vn/Products/Images/44/236962/acer-aspire-7-a715-75g-52s5-i5-nhq85sv002-9-1.jpg" /></a></p>
          <h3>Thiết kế thời trang, hợp cho mọi độ tuổi</h3>
          <p>Sở hữu vỏ nhựa m&agrave;u đen với trọng lượng m&aacute;y&nbsp;<strong>2.1 kg</strong>, c&oacute; độ d&agrave;y&nbsp;<strong>20.9 mm</strong>, thiết kế kh&aacute; mềm mại, đơn giản m&agrave; đẹp mắt, Acer Aspire NH.Q85SV.002 l&agrave; lựa chọn ph&ugrave; hợp cho mọi người d&ugrave;ng.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/236962/acer-aspire-7-a715-75g-52s5-i5-nhq85sv002-2-1.jpg"><img class=" ls-is-cached lazyloaded" title="Acer Aspire 7 A715 75G 52S5 i5 9300H (NH.Q85SV.002) - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/236962/acer-aspire-7-a715-75g-52s5-i5-nhq85sv002-2-1.jpg" alt="Acer Aspire 7 A715 75G 52S5 i5 9300H (NH.Q85SV.002) - Thiết kế" data-src="https://cdn.tgdd.vn/Products/Images/44/236962/acer-aspire-7-a715-75g-52s5-i5-nhq85sv002-2-1.jpg" /></a></p>
          <p>B&agrave;n ph&iacute;m hỗ trợ đ&egrave;n nền gi&uacute;p thao t&aacute;c dễ d&agrave;ng, chuẩn x&aacute;c trong điều kiện thiếu s&aacute;ng, soạn thảo văn bản hay chiến game về đ&ecirc;m trở n&ecirc;n thuận lợi hơn rất nhiều.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/236962/acer-aspire-7-a715-75g-52s5-i5-nhq85sv002-7-1.jpg"><img class=" ls-is-cached lazyloaded" title="Acer Aspire 7 A715 75G 52S5 i5 9300H (NH.Q85SV.002) - B&agrave;n ph&iacute;m" src="https://cdn.tgdd.vn/Products/Images/44/236962/acer-aspire-7-a715-75g-52s5-i5-nhq85sv002-7-1.jpg" alt="Acer Aspire 7 A715 75G 52S5 i5 9300H (NH.Q85SV.002) - B&agrave;n ph&iacute;m" data-src="https://cdn.tgdd.vn/Products/Images/44/236962/acer-aspire-7-a715-75g-52s5-i5-nhq85sv002-7-1.jpg" /></a></p>
          <p><a title="Xem th&ecirc;m Laptop ch&iacute;nh h&atilde;ng được kinh doanh tại thegioididong.com" href="https://www.thegioididong.com/laptop" target="_blank">Laptop</a>&nbsp;trang bị nhiều cổng kết nối th&ocirc;ng dụng: 2 cổng USB 3.2, HDMI, LAN (RJ45), USB 2.0, USB Type-C kết nối dễ d&agrave;ng với nhiều thiết bị hiện đại. Đồng thời với kết nối kh&ocirc;ng d&acirc;y Wi-Fi 6 v&agrave; Bluetooth 5.0 tốc độ đường truyền cao, mọi nhu cầu giải tr&iacute; v&agrave; c&ocirc;ng việc đều được đ&aacute;p ứng một c&aacute;ch tối ưu.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/236962/acer-aspire-7-a715-75g-52s5-i5-nhq85sv002-10-1.jpg"><img class=" lazyloaded" title="Acer Aspire 7 A715 75G 52S5 i5 9300H (NH.Q85SV.002) - Cổng kết nối" src="https://cdn.tgdd.vn/Products/Images/44/236962/acer-aspire-7-a715-75g-52s5-i5-nhq85sv002-10-1.jpg" alt="Acer Aspire 7 A715 75G 52S5 i5 9300H (NH.Q85SV.002) - Cổng kết nối" data-src="https://cdn.tgdd.vn/Products/Images/44/236962/acer-aspire-7-a715-75g-52s5-i5-nhq85sv002-10-1.jpg" /></a></p>
          <p>Acer Aspire 7 A715 75G 52S5 i5 (NH.Q85SV.002) sẽ l&agrave; một lựa chọn tuyệt vời cho cả nhu cầu sử dụng&nbsp;<a title="Xem th&ecirc;m c&aacute;c sản phẩm laptop đồ hoạ kỹ thuật đang kinh doanh tại thegioididong.com" href="https://www.thegioididong.com/laptop?g=do-hoa-ky-thuat" target="_blank">laptop đồ họa kỹ thuật</a>&nbsp;hay l&agrave;m việc văn ph&ograve;ng, để thỏa m&atilde;n cả ti&ecirc;u ch&iacute; phục vụ tốt cho c&ocirc;ng việc v&agrave; giải tr&iacute; ho&agrave;n hảo.</p>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','configuration' => '<table style="height: 210px;" width="1020">
          <tbody>
          <tr>
          <td style="width: 502px;">CPU:</td>
          <td style="width: 502px;"><span class="comma">Intel Core i5 Comet Lake</span><span class="comma">10300H</span><span class="">2.50 GHz</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">RAM:</td>
          <td style="width: 502px;"><span class="comma">8 GB</span><span class="comma">DDR4 (2 khe)</span><span class="">2666 MHz</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Ổ cứng:</td>
          <td style="width: 502px;"><span class="comma">Hỗ trợ khe cắm HDD SATA</span><span class="">SSD 512 GB NVMe PCIe</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">M&agrave;n h&igrave;nh:</td>
          <td style="width: 502px;"><span class="comma">15.6"</span><span class="">Full HD (1920 x 1080), 144Hz</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Card m&agrave;n h&igrave;nh:</td>
          <td style="width: 502px;"><span class="comma">Card rời</span><span class="">NVIDIA GeForce GTX 1650 4 GB</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Cổng kết nối:</td>
          <td style="width: 502px;"><span class="comma">3 x USB 3.2</span><span class="comma">HDMI</span><span class="comma">LAN (RJ45)</span><span class="">USB Type-C</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Đặc biệt:</td>
          <td style="width: 502px;">C&oacute; đ&egrave;n b&agrave;n ph&iacute;m</td>
          </tr>
          <tr>
          <td style="width: 502px;">Hệ điều h&agrave;nh:</td>
          <td style="width: 502px;">Windows 10 Home SL</td>
          </tr>
          <tr>
          <td style="width: 502px;">Thiết kế:</td>
          <td style="width: 502px;">Nắp lưng v&agrave; chiếu nghỉ tay bằng kim loại</td>
          </tr>
          <tr>
          <td style="width: 502px;">K&iacute;ch thước:</td>
          <td style="width: 502px;"><span class="comma">21.7 mm</span><span class="">1.86 kg</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Thời điểm ra mắt:</td>
          <td style="width: 502px;">2021</td>
          </tr>
          </tbody>
          </table>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','created_at' => '2021-06-27 04:24:51','updated_at' => '2021-06-27 04:32:02','deleted_at' => NULL),
            array('id' => '5','name' => 'Laptop HP 340s G7 i5 1035G1/8GB/512GB/Win10 (36A35PA)','code' => 'HP2','origin' => 'Thái Nguyên','price' => '16900000','picture' => '1624767958.jpg','status' => '1','description' => '<h3><a title="Laptop HP 340s G7 i5 (36A35PA) đang b&aacute;n tại thegioididong.com" href="https://www.thegioididong.com/laptop/hp-340s-g7-i5-36a35pa" target="_blank">HP 340s G7 i5 (36A35PA)</a>&nbsp;thuộc d&ograve;ng&nbsp;<a title="Xem th&ecirc;m c&aacute;c mẫu laptop học tập - văn ph&ograve;ng đang b&aacute;n tại thegioididong.com" href="https://www.thegioididong.com/laptop?g=hoc-tap-van-phong" target="_blank">m&aacute;y t&iacute;nh học tập - văn ph&ograve;ng</a>&nbsp;mang kiểu d&aacute;ng thanh lịch với bộ vi xử l&yacute; Intel Core i5 1035G1 thế hệ 10 chạy mượt m&agrave; c&aacute;c t&aacute;c vụ học tập, l&agrave;m việc v&agrave; giải tr&iacute; cơ bản.</h3>
          <h3>Thiết kế tối giản, hiện đại</h3>
          <p><a title="Xem th&ecirc;m c&aacute;c mẫu laptop đnag b&aacute;n tại thegioididong.com" href="https://www.thegioididong.com/laptop" target="_blank">Laptop</a>&nbsp;được thiết kế gọn nhẹ với khung vỏ nhựa phủ m&agrave;u bạc sang trọng c&ugrave;ng những đường n&eacute;t ph&acirc;y xước c&agrave;ng bền bỉ bảo vệ m&aacute;y trước những t&aacute;c động vật l&yacute;. M&aacute;y chỉ nhẹ&nbsp;<strong>1.38 kg</strong>&nbsp;v&agrave; mỏng&nbsp;<strong>17.9 mm</strong>&nbsp;n&ecirc;n bạn c&oacute; thể dễ d&agrave;ng bỏ vừa balo mang đi khắp nơi để học tập, giải tr&iacute;.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/238015/hp340sg7i536a35pa-2.jpg"><img class=" ls-is-cached lazyloaded" title="HP 340s G7 i5 (36A35PA) - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/238015/hp340sg7i536a35pa-2.jpg" alt="HP 340s G7 i5 (36A35PA) - Thiết kế" data-src="https://cdn.tgdd.vn/Products/Images/44/238015/hp340sg7i536a35pa-2.jpg" /></a></p>
          <p>B&agrave;n ph&iacute;m c&oacute; khoảng c&aacute;ch giữa c&aacute;c ph&iacute;m hợp l&yacute; cho&nbsp;cảm gi&aacute;c g&otilde; ph&iacute;m thoải m&aacute;i, h&agrave;nh tr&igrave;nh ph&iacute;m s&acirc;u, độ nảy tốt v&agrave;&nbsp;bề mặt được phủ nh&aacute;m chống b&aacute;m, chống phai trong thời gian d&agrave;i sử dụng.</p>
          <p>Chế độ&nbsp;<a title="Cảm biến v&acirc;n tay tr&ecirc;n laptop l&agrave; g&igrave;" href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank">cảm biến v&acirc;n tay</a>&nbsp;đặc biệt gi&uacute;p mở kh&oacute;a khởi động m&aacute;y an to&agrave;n, nhanh ch&oacute;ng chỉ với một chạm, tiết kiệm thời gian ghi nhớ v&agrave; đăng nhập t&agrave;i khoản mỗi ng&agrave;y.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/238015/hp340sg7i536a35pa-6.jpg"><img class=" ls-is-cached lazyloaded" title="HP 340s G7 i5 (36A35PA) - Cảm biến v&acirc;n tay" src="https://cdn.tgdd.vn/Products/Images/44/238015/hp340sg7i536a35pa-6.jpg" alt="HP 340s G7 i5 (36A35PA) - Cảm biến v&acirc;n tay" data-src="https://cdn.tgdd.vn/Products/Images/44/238015/hp340sg7i536a35pa-6.jpg" /></a></p>
          <p>Ngo&agrave;i ra,&nbsp;<a title="Xem th&ecirc;m c&aacute;c mẫu laptop HP đang b&aacute;n tại thegioididong.com" href="https://www.thegioididong.com/laptop-hp-compaq" target="_blank">laptop HP</a>&nbsp;c&ograve;n trang bị đầy đủ c&aacute;c cổng kết nối thiết yếu như cổng USB 3.1, cổng USB Type-C, HDMI, Jack sạc, Jack tai nghe hỗ trợ kết nối với c&aacute;c thiết bị ngoại vi v&agrave; truyền dữ liệu nhanh ch&oacute;ng.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/238015/hp340sg7i536a35pa-7.jpg"><img class=" ls-is-cached lazyloaded" title="HP 340s G7 i5 (36A35PA) - Cổng kết nối" src="https://cdn.tgdd.vn/Products/Images/44/238015/hp340sg7i536a35pa-7.jpg" alt="HP 340s G7 i5 (36A35PA) - Cổng kết nối" data-src="https://cdn.tgdd.vn/Products/Images/44/238015/hp340sg7i536a35pa-7.jpg" /></a></p>
          <p>Chuẩn kết nối kh&ocirc;ng d&acirc;y Bluetooth v5.0 v&agrave; Wi-Fi 802.11 a/b/g/n/ac định hướng ch&ugrave;m s&oacute;ng, ổn định đường truyền v&agrave; kết nối th&ocirc;ng tin đủ tốt để phục vụ việc học tập, giải tr&iacute;.</p>
          <h3>Hiệu năng đa nhiệm c&aacute;c t&aacute;c vụ văn ph&ograve;ng&nbsp;</h3>
          <p>Cung cấp sức mạnh cho HP 340s G7 l&agrave; chip&nbsp;<strong><a title="Xem c&aacute;c mẫu laptop Intel Core i5 đang b&aacute;n tại thegioididong.com" href="https://www.thegioididong.com/laptop?g=core-i5" target="_blank">Intel Core i5</a>&nbsp;Ice Lake Gen 10</strong>&nbsp;với l&otilde;i&nbsp;<strong>4 nh&acirc;n 8 luồng</strong>&nbsp;c&oacute; xung nhịp trung b&igrave;nh&nbsp;<strong>1.00 GHz</strong>, &eacute;p xung&nbsp;cao nhất&nbsp;<strong>3.6 GHz</strong>&nbsp;nhờ&nbsp;<strong>Turbo Boost</strong>. Bộ vi xử l&yacute; n&agrave;y cho khả năng xử l&yacute; mượt m&agrave; c&aacute;c t&aacute;c vụ văn ph&ograve;ng cũng như lướt web giải tr&iacute;.</p>
          <p><a title="T&igrave;m hiểu th&ecirc;m về card đồ họa t&iacute;ch hợp" href="https://www.thegioididong.com/hoi-dap/card-do-hoa-tich-hop-la-gi-950047" target="_blank">Card đồ họa t&iacute;ch hợp</a><strong>&nbsp;Intel UHD Graphics</strong>&nbsp;xử l&yacute; tốt c&aacute;c th&ocirc;ng tin h&igrave;nh ảnh, chi tiết m&agrave;u sắc hỗ trợ bạn c&oacute; thể thao t&aacute;c được c&aacute;c phần mềm thiết kế như Photoshop, Ai,... cơ bản hoặc c&aacute;c game giải tr&iacute; nhẹ nh&agrave;ng.</p>
          <p><strong><a title="Xem th&ecirc;m c&aacute;c mẫu laptop RAM 8 GB đang b&aacute;n tại thegioididong.com" href="https://www.thegioididong.com/laptop-8-gb" target="_blank">RAM 8 GB</a>&nbsp;DDR4 (2 khe)</strong>&nbsp;hỗ trợ n&acirc;ng cấp tối đa&nbsp;<strong>32 GB</strong>&nbsp;c&oacute; hiệu năng đa nhiệm v&agrave; gi&uacute;p việc thao t&aacute;c chuyển từ ứng dụng n&agrave;y sang ứng dụng kh&aacute;c sẽ diễn ra trơn tru trong qu&aacute; tr&igrave;nh l&agrave;m việc, giải tr&iacute; c&ugrave;ng l&uacute;c.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/238015/hp-340s-g7-i5-36a35pa-04.jpg"><img class=" ls-is-cached lazyloaded" title="HP 340s G7 i5 1035G1 (36A35PA) - Cấu h&igrave;nh" src="https://cdn.tgdd.vn/Products/Images/44/238015/hp-340s-g7-i5-36a35pa-04.jpg" alt="HP 340s G7 i5 1035G1 (36A35PA) - Cấu h&igrave;nh" data-src="https://cdn.tgdd.vn/Products/Images/44/238015/hp-340s-g7-i5-36a35pa-04.jpg" /></a></p>
          <p>M&aacute;y c&ograve;n được trang bị&nbsp;<strong><a title="Xem th&ecirc;m c&aacute;c mẫu laptop SSD 512 GB đang b&aacute;n tại thegioididong.com" href="https://www.thegioididong.com/laptop?g=ssd-512-gb" target="_blank">ổ cứng SSD 512GB</a>&nbsp;NVMe PCIe</strong>&nbsp;gi&uacute;p tăng tốc độ đọc ghi, truy xuất dữ liệu ch&iacute;nh x&aacute;c cũng như khởi động, vận h&agrave;nh m&aacute;y v&agrave; chạy phần mềm nhanh ch&oacute;ng.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/238015/hp340sg7i536a35pa-4.jpg"><img class=" lazyloaded" title="HP 340s G7 i5 (36A35PA) - SSD" src="https://cdn.tgdd.vn/Products/Images/44/238015/hp340sg7i536a35pa-4.jpg" alt="HP 340s G7 i5 (36A35PA) - SSD" data-src="https://cdn.tgdd.vn/Products/Images/44/238015/hp340sg7i536a35pa-4.jpg" /></a></p>
          <h3><a title="Xem th&ecirc;m c&aacute;c mẫu laptop 14 inch đang b&aacute;n tại thegioididong.com" href="https://www.thegioididong.com/laptop-14-inch" target="_blank">M&agrave;n h&igrave;nh 14 inch</a>&nbsp;hiển thị h&igrave;nh ảnh r&otilde; n&eacute;t, ch&acirc;n thật</h3>
          <p>Trải nghiệm ch&acirc;n thật từng khung h&igrave;nh phim ảnh sắc n&eacute;t c&oacute; độ ph&acirc;n giải&nbsp;<strong>Full HD (1920 x 1080)</strong>&nbsp;qua m&agrave;n h&igrave;nh c&oacute; k&iacute;ch thước 14 inch viền mỏng.&nbsp;</p>
          <p>Kh&ocirc;ng gian m&agrave;n ảnh trở n&ecirc;n rộng r&atilde;i hơn từ nhiều g&oacute;c nh&igrave;n nhờ&nbsp;<strong>tấm nền IPS</strong>&nbsp;v&agrave; c&ocirc;ng nghệ&nbsp;<strong>chống ch&oacute;i Anti Glare</strong>&nbsp;gi&uacute;p bạn c&oacute; thể sử dụng laptop ngay cả khi dưới &aacute;nh s&aacute;ng mặt trời.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/238015/hp340sg7i536a35pa-5.jpg"><img class=" lazyloaded" title="HP 340s G7 i5 (36A35PA) - M&agrave;n h&igrave;nh" src="https://cdn.tgdd.vn/Products/Images/44/238015/hp340sg7i536a35pa-5.jpg" alt="HP 340s G7 i5 (36A35PA) - M&agrave;n h&igrave;nh" data-src="https://cdn.tgdd.vn/Products/Images/44/238015/hp340sg7i536a35pa-5.jpg" /></a></p>
          <p><strong>Hệ thống loa k&eacute;p (2 k&ecirc;nh)</strong>&nbsp;c&ugrave;ng&nbsp;<strong>c&ocirc;ng nghệ Realtek High Definition Audio</strong>&nbsp;khuếch đại &acirc;m thanh gi&uacute;p bạn h&ograve;a m&igrave;nh đắm ch&igrave;m trong kh&ocirc;ng gian &acirc;m nhạc sống động v&agrave; ch&acirc;n thật khi chơi game hay xem phim, nghe nhạc giải tr&iacute;.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/238015/hp340sg7i536a35pa-8.jpg"><img class=" lazyloaded" title="HP 340s G7 i5 (36A35PA) - &Acirc;m thanh" src="https://cdn.tgdd.vn/Products/Images/44/238015/hp340sg7i536a35pa-8.jpg" alt="HP 340s G7 i5 (36A35PA) - &Acirc;m thanh" data-src="https://cdn.tgdd.vn/Products/Images/44/238015/hp340sg7i536a35pa-8.jpg" /></a></p>
          <p>Chiếc&nbsp;<a title="Xem th&ecirc;m c&aacute;c mẫu laptop HP 340s đang b&aacute;n tại thegioididong.com" href="https://www.thegioididong.com/laptop-hp-compaq-hp-340s" target="_blank">laptop HP 340s</a>&nbsp;n&agrave;y l&agrave; một trong những sự lựa chọn l&yacute; tưởng cho c&aacute;c bạn học sinh, sinh vi&ecirc;n hay nh&acirc;n vi&ecirc;n văn ph&ograve;ng c&oacute; nhu cầu muốn t&igrave;m d&ograve;ng m&aacute;y gọn nhẹ m&agrave; vẫn đảm bảo cấu h&igrave;nh ổn định.&nbsp;</p>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','configuration' => '<table style="height: 210px;" width="1020">
          <tbody>
          <tr>
          <td style="width: 502px;">CPU:</td>
          <td style="width: 502px;"><span class="comma">Intel Core i5 Comet Lake</span><span class="comma">10300H</span><span class="">2.50 GHz</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">RAM:</td>
          <td style="width: 502px;"><span class="comma">8 GB</span><span class="comma">DDR4 (2 khe)</span><span class="">2666 MHz</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Ổ cứng:</td>
          <td style="width: 502px;"><span class="comma">Hỗ trợ khe cắm HDD SATA</span><span class="">SSD 512 GB NVMe PCIe</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">M&agrave;n h&igrave;nh:</td>
          <td style="width: 502px;"><span class="comma">15.6"</span><span class="">Full HD (1920 x 1080), 144Hz</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Card m&agrave;n h&igrave;nh:</td>
          <td style="width: 502px;"><span class="comma">Card rời</span><span class="">NVIDIA GeForce GTX 1650 4 GB</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Cổng kết nối:</td>
          <td style="width: 502px;"><span class="comma">3 x USB 3.2</span><span class="comma">HDMI</span><span class="comma">LAN (RJ45)</span><span class="">USB Type-C</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Đặc biệt:</td>
          <td style="width: 502px;">C&oacute; đ&egrave;n b&agrave;n ph&iacute;m</td>
          </tr>
          <tr>
          <td style="width: 502px;">Hệ điều h&agrave;nh:</td>
          <td style="width: 502px;">Windows 10 Home SL</td>
          </tr>
          <tr>
          <td style="width: 502px;">Thiết kế:</td>
          <td style="width: 502px;">Nắp lưng v&agrave; chiếu nghỉ tay bằng kim loại</td>
          </tr>
          <tr>
          <td style="width: 502px;">K&iacute;ch thước:</td>
          <td style="width: 502px;"><span class="comma">21.7 mm</span><span class="">1.86 kg</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Thời điểm ra mắt:</td>
          <td style="width: 502px;">2021</td>
          </tr>
          </tbody>
          </table>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','created_at' => '2021-06-27 04:25:58','updated_at' => '2021-06-27 04:31:54','deleted_at' => NULL),
            array('id' => '6','name' => 'Laptop HP EliteBook X360 1040 G7 i7 10710U/16GB/512GB+32GB/Pen/Touch/Win10 Pro (230P8PA)','code' => 'HP3','origin' => 'Thái Bình','price' => '48900000','picture' => '1624768153.jpg','status' => '1','description' => '<h3>Laptop&nbsp;<a title="HP EliteBook X360 1040 (230P8PA)" href="https://www.thegioididong.com/laptop/hp-elitebook-x360-1040-g7-i7-230p8pa" target="_blank">HP EliteBook X360 1040 (230P8PA)</a>&nbsp;l&agrave; một phi&ecirc;n bản laptop với thiết kế mỏng nhẹ c&ugrave;ng với chip Core i7 hiệu năng mạnh mẽ. Đ&acirc;y thực sự l&agrave; con laptop đ&aacute;ng mong đợi d&agrave;nh cho doanh nh&acirc;n hay c&aacute;c bạn c&oacute; nhu cầu di chuyển cao.</h3>
          <h3>Cấu h&igrave;nh khủng, n&acirc;ng cao năng suất l&agrave;m việc</h3>
          <p>Được sử dụng bộ vi xử l&yacute; đến từ h&atilde;ng Intel,&nbsp;<a title="Xem th&ecirc;m c&aacute;c laptop Core i7 đang b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop?g=core-i7" target="_blank">Intel Core i7</a>&nbsp;<strong>Comet Lake</strong>&nbsp;được trang bị&nbsp;<strong>6 nh&acirc;n 12 luồng</strong>&nbsp;đem đến sự cải tiến về hiệu năng lẫn tốc độ xử l&yacute;, gi&uacute;p n&acirc;ng cao năng suất l&agrave;m việc của người d&ugrave;ng với xung nhịp cơ sở l&agrave;&nbsp;<strong>1.1 GHz</strong>&nbsp;v&agrave; được &eacute;p xung tối đa l&ecirc;n đến&nbsp;<strong>4.7 GHz.</strong></p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315620-025603.jpg"><img class=" ls-is-cached lazyloaded" title="HP EliteBook X360 1040 (230P8PA) - CPU" src="https://cdn.tgdd.vn/Products/Images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315620-025603.jpg" alt="HP EliteBook X360 1040 (230P8PA) - CPU" data-src="https://cdn.tgdd.vn/Products/Images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315620-025603.jpg" /></a></p>
          <p>B&ecirc;n cạnh đ&oacute;, laptop HP c&ograve;n được trang bị bộ nhớ&nbsp;<strong><a title="Laptop được trang bị RAM 16 GB đang kinh doanh tại Thegioididong.com" href="https://www.thegioididong.com/laptop?g=16-gb" target="_blank">RAM 16 GB</a></strong>&nbsp;gi&uacute;p bạn c&oacute; thể chạy được Photoshop, Ai, chỉnh sửa video, dựng vlog mượt m&agrave;, đ&aacute;p ứng tốt nhu cầu c&ocirc;ng việc của bạn.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315620-025646.jpg"><img class=" ls-is-cached lazyloaded" title="HP EliteBook X360 1040 (230P8PA) - RAM" src="https://cdn.tgdd.vn/Products/Images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315620-025646.jpg" alt="HP EliteBook X360 1040 (230P8PA) - RAM" data-src="https://cdn.tgdd.vn/Products/Images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315620-025646.jpg" /></a></p>
          <p>Ngo&agrave;i ra, laptop c&oacute; trang bị ổ cứng&nbsp;<strong><a title="Xem th&ecirc;m c&aacute;c laptop c&oacute; SSD 512 GB" href="https://www.thegioididong.com/laptop?g=ssd-512-gb" target="_blank">SSD 512 GB</a></strong>&nbsp;<strong>M.2 PCIe&nbsp;</strong>vận h&agrave;nh mượt m&agrave;, nhanh ch&oacute;ng,&nbsp;tăng tốc độ khởi động m&aacute;y với thời gian&nbsp;chỉ khoảng 10-15 gi&acirc;y. Đồng thời n&oacute; c&ograve;n gi&uacute;p laptop&nbsp;truy cập ứng dụng cũng như truy xuất dữ liệu với tốc độ cực nhanh, mang đến cho bạn một sự h&agrave;i l&ograve;ng đ&aacute;ng mong đợi.</p>
          <p>Kh&ocirc;ng chỉ vậy, HP c&ograve;n hỗ trợ th&ecirc;m&nbsp;<a title="Xem th&ecirc;m c&aacute;c sản phẩm laptop HP c&oacute; Intel Optane tại Thegioididong.com" href="https://www.thegioididong.com/laptop-hp-compaq-bo-nho-intel-optane" target="_blank">Intel Optane 32GB (H10)</a>, đem đến cho người d&ugrave;ng một kh&ocirc;ng gian cực kỳ lớn để lưu trữ c&aacute;c tệp tin như phim, t&agrave;i liệu hoặc album ảnh m&agrave; kh&ocirc;ng cần lo lắng dung lượng bị đầy l&agrave;m giảm tốc độ m&aacute;y.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315720-025703.jpg"><img class=" lazyloaded" title="HP EliteBook X360 1040 (230P8PA) - SSD" src="https://cdn.tgdd.vn/Products/Images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315720-025703.jpg" alt="HP EliteBook X360 1040 (230P8PA) - SSD" data-src="https://cdn.tgdd.vn/Products/Images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315720-025703.jpg" /></a></p>
          <h3><strong>Si&ecirc;u phẩm trong thiết kế mỏng nhẹ, lịch l&atilde;m</strong></h3>
          <p>Được bao bọc bởi vỏ kim loại nguy&ecirc;n khối,&nbsp;<a title="Xem th&ecirc;m c&aacute;c sản phẩm Hp Elitebook X360 đang b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop-hp-compaq-elitebook" target="_blank">laptop HP EliteBook</a>&nbsp;sẽ kh&ocirc;ng khiến bạn thất vọng bởi vẻ ngo&agrave;i chắc chắn nhưng đường n&eacute;t rất tỉ mỉ v&agrave; kh&ocirc;ng k&eacute;m phần sang trọng của m&igrave;nh.</p>
          <p>Kh&ocirc;ng chỉ ấn tượng bởi vẻ bề ngo&agrave;i cao cấp, laptop HP v&ocirc; c&ugrave;ng mỏng chỉ&nbsp;<strong>16.1 mm</strong>&nbsp;v&agrave; trọng lượng chỉ dừng lại ở&nbsp;<strong>1.392 kg</strong>. Nhờ vậy, bạn c&oacute; thể dễ d&agrave;ng đem theo hay để gọn trong balo v&agrave; di chuyển một c&aacute;ch tiện lợi nhất.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-001.jpg"><img class=" lazyloaded" title="HP EliteBook X360 1040 G7 i7 10710U (230P8PA) - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-001.jpg" alt="HP EliteBook X360 1040 G7 i7 10710U (230P8PA) - Thiết kế" data-src="https://cdn.tgdd.vn/Products/Images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-001.jpg" /></a></p>
          <p>Tuy mỏng nhẹ như vậy nhưng&nbsp;<a title="Xem th&ecirc;m c&aacute;c sản phẩm laptop HP đang b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop-hp-compaq" target="_blank">laptop HP</a>&nbsp;c&oacute; kh&aacute; đầy đủ c&aacute;c cổng kết nối th&ocirc;ng dụng như&nbsp;<strong>USB 3.1 Type-C với Thunderbolt</strong>,&nbsp;<strong>USB 3.1</strong>&nbsp;v&agrave; cổng&nbsp;<strong>HDMI</strong>.</p>
          <p>Ngo&agrave;i ra, HP c&ograve;n được trang bị c&aacute;c cổng kết nối ngo&agrave;i kh&ocirc;ng d&acirc;y v&ocirc; c&ugrave;ng tiện lợi như&nbsp;<a title="T&igrave;m hiểu về wifi thế hệ thứ 6" href="https://www.thegioididong.com/hoi-dap/wi-fi-chuan-80211ax-la-gi-tim-hieu-ve-wi-fi-the-he-1187524" target="_blank">Wi-Fi 6 - 802.11ax</a>&nbsp;gi&uacute;p laptop&nbsp;<strong>cải thiện tốc độ tải</strong>, gi&uacute;p&nbsp;<strong>tr&aacute;nh mất kết nối</strong>&nbsp;v&agrave; những vấn đề kh&aacute;c.,&nbsp;<a title="T&igrave;m hiểu về Bluetooth 5.0" href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a>&nbsp;với tốc độ kết nối cao l&ecirc;n đến&nbsp;<strong>50 Mbps</strong>&nbsp;v&agrave; ph&aacute;t s&oacute;ng l&ecirc;n đến<strong>&nbsp;300 m</strong>&nbsp;kh&ocirc;ng c&oacute; vật cản.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315520-025544.jpg"><img class=" lazyloaded" title="HP EliteBook X360 1040 (230P8PA) - Kết nối" src="https://cdn.tgdd.vn/Products/Images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315520-025544.jpg" alt="HP EliteBook X360 1040 (230P8PA) - Kết nối" data-src="https://cdn.tgdd.vn/Products/Images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315520-025544.jpg" /></a></p>
          <h3><strong>Trải nghiệm th&uacute; vị với m&agrave;n h&igrave;nh sắc n&eacute;t, ch&acirc;n thật</strong></h3>
          <p>Với độ ph&acirc;n giải&nbsp;<strong>Full HD</strong>, m&agrave;n h&igrave;nh laptop&nbsp;<a title="Xem th&ecirc;m một số laptop m&agrave;n h&igrave;nh 14 inch đang được kinh doanh tại Thegioididong.com" href="https://www.thegioididong.com/laptop-14-inch" target="_blank">14 inch</a>&nbsp;đem đến cho người d&ugrave;ng ch&igrave;m đắm trong những thước phim tuyệt đỉnh, ch&acirc;n thật với h&igrave;nh ảnh r&otilde; n&eacute;t hơn bao giờ hết. Hơn nữa, m&agrave;n h&igrave;nh c&ograve;n được trang bị c&ocirc;ng nghệ chống ch&oacute;i&nbsp;<a title="T&igrave;m hiểu về Anti Glare" href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Anti Glare</a>, người d&ugrave;ng dễ d&agrave;ng l&agrave;m việc trong m&ocirc;i trường nhiều &aacute;nh s&aacute;ng hoặc đem lại khả năng nh&igrave;n r&otilde; khi ở ngo&agrave;i trời.</p>
          <p>Nhờ&nbsp;<a title="T&igrave;m hiểu về IPS" href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">tấm nền IPS</a>, m&agrave;n h&igrave;nh laptop&nbsp;hiển thị h&igrave;nh ảnh với g&oacute;c nh&igrave;n rộng 178 độ, thường được sử dụng trong c&aacute;c thiết bị cao cấp, rất th&iacute;ch hợp cho thiết kế đồ họa vốn đ&ograve;i hỏi khắt khe về chất lượng hiển thị.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315520-025521.jpg"><img class=" lazyloaded" title="HP EliteBook X360 1040 (230P8PA) - M&agrave;n h&igrave;nh" src="https://cdn.tgdd.vn/Products/Images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315520-025521.jpg" alt="HP EliteBook X360 1040 (230P8PA) - M&agrave;n h&igrave;nh" data-src="https://cdn.tgdd.vn/Products/Images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315520-025521.jpg" /></a></p>
          <p>Sở hữu thiết kế bản lề&nbsp;<a title="Xem th&ecirc;m c&aacute;c sản phẩm laptop HP c&oacute; M&agrave;n h&igrave;nh gập 360 độ tại Thegioididong.com" href="https://www.thegioididong.com/laptop-hp-compaq-man-hinh-gap-360-do" target="_blank">gập xoay 360 độ</a>,&nbsp;<a title="Xem th&ecirc;m c&aacute;c sản phẩm laptop HP c&oacute; M&agrave;n h&igrave;nh cảm ứng tại Thegioididong.com" href="https://www.thegioididong.com/laptop-hp-compaq-man-hinh-cam-ung" target="_blank">m&agrave;n h&igrave;nh cảm ứng</a>&nbsp;hiện đại c&oacute; thể dễ d&agrave;ng chuyển đổi từ chế độ laptop sang m&aacute;y t&iacute;nh bảng hoặc bất cứ tư thế n&agrave;o bạn muốn. B&ecirc;n cạnh đ&oacute;,&nbsp;<a title="Xem th&ecirc;m c&aacute;c mẫu laptop đang kinh doanh tại thegioididong.com" href="https://www.thegioididong.com/laptop" target="_blank">laptop</a>&nbsp;c&ograve;n được đi k&egrave;m b&uacute;t cảm ứng cực nhạy, thiết kế, chỉnh sửa ảnh nhanh ch&oacute;ng, cho bạn thỏa sức s&aacute;ng tạo với niềm đam m&ecirc; của m&igrave;nh.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315620-025626.jpg"><img class=" lazyloaded" title="HP EliteBook X360 1040 (230P8PA) - Cảm ứng" src="https://cdn.tgdd.vn/Products/Images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315620-025626.jpg" alt="HP EliteBook X360 1040 (230P8PA) - Cảm ứng" data-src="https://cdn.tgdd.vn/Products/Images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315620-025626.jpg" /></a></p>
          <h3><strong>Mở kh&oacute;a v&acirc;n tay chỉ với một chạm&nbsp;</strong></h3>
          <p>Ngo&agrave;i ra, laptop HP EliteBook c&ograve;n c&oacute; t&iacute;nh năng&nbsp;<a title="T&igrave;m hiểu về bảo mật v&acirc;n tay" href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank">bảo mật bằng v&acirc;n tay</a>&nbsp;hiện đại, mở m&aacute;y nhanh chỉ bằng một chạm, gi&uacute;p bạn bảo vệ c&aacute;c dữ liệu an to&agrave;n hơn, kh&ocirc;ng lo bị đ&aacute;nh cắp mật khẩu. Được&nbsp;<strong>trang bị đ&egrave;n nền&nbsp;</strong>tr&ecirc;n b&agrave;n ph&iacute;m, người d&ugrave;ng dễ d&agrave;ng, tiện lợi sử dụng laptop ở bất cứ nơi n&agrave;o ngay cả trong điều kiện thiếu s&aacute;ng.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315720-025755.jpg"><img class=" lazyloaded" title="HP EliteBook X360 1040 (230P8PA) - V&acirc;n tay" src="https://cdn.tgdd.vn/Products/Images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315720-025755.jpg" alt="HP EliteBook X360 1040 (230P8PA) - V&acirc;n tay" data-src="https://cdn.tgdd.vn/Products/Images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315720-025755.jpg" /></a></p>
          <p>Trải nghiệm &acirc;m thanh chất lượng cao từ c&ocirc;ng nghệ&nbsp;<a title="T&igrave;m hiểu về Bang &amp; Olufsen audio" href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-bang-olufsen-va-cong-nghe-am-thanh-cua-955118" target="_blank">Bang &amp; Olufsen audio</a>, c&ocirc;ng nghệ tự động tinh chỉnh &acirc;m thanh v&agrave; lọc tiếng ồn, mang đến trải nghiệm như một rạp h&aacute;t tại nh&agrave; gi&uacute;p bạn thoải m&aacute;i thư gi&atilde;n trong căn ph&ograve;ng của m&igrave;nh.</p>
          <p>Với c&aacute;c t&iacute;nh năng tr&ecirc;n, Laptop HP EliteBook X360 1040 (230P8PA) tự tin l&agrave; một trong những chiếc laptop doanh nh&acirc;n văn ph&ograve;ng hiện đại đ&aacute;ng sở hữu nhất d&agrave;nh cho giới doanh nh&acirc;n, văn ph&ograve;ng nhờ&nbsp;<a title="Xem th&ecirc;m c&aacute;c sản phẩm laptop mỏng nhẹ đang b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop?g=mong-nhe-thoi-trang" target="_blank">thiết kế mỏng nhẹ</a>&nbsp;nhưng kh&ocirc;ng k&eacute;m phần sang trọng, lịch l&atilde;m.</p>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','configuration' => '<table style="height: 210px;" width="1020">
          <tbody>
          <tr>
          <td style="width: 502px;">CPU:</td>
          <td style="width: 502px;"><span class="comma">Intel Core i5 Comet Lake</span><span class="comma">10300H</span><span class="">2.50 GHz</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">RAM:</td>
          <td style="width: 502px;"><span class="comma">8 GB</span><span class="comma">DDR4 (2 khe)</span><span class="">2666 MHz</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Ổ cứng:</td>
          <td style="width: 502px;"><span class="comma">Hỗ trợ khe cắm HDD SATA</span><span class="">SSD 512 GB NVMe PCIe</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">M&agrave;n h&igrave;nh:</td>
          <td style="width: 502px;"><span class="comma">15.6"</span><span class="">Full HD (1920 x 1080), 144Hz</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Card m&agrave;n h&igrave;nh:</td>
          <td style="width: 502px;"><span class="comma">Card rời</span><span class="">NVIDIA GeForce GTX 1650 4 GB</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Cổng kết nối:</td>
          <td style="width: 502px;"><span class="comma">3 x USB 3.2</span><span class="comma">HDMI</span><span class="comma">LAN (RJ45)</span><span class="">USB Type-C</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Đặc biệt:</td>
          <td style="width: 502px;">C&oacute; đ&egrave;n b&agrave;n ph&iacute;m</td>
          </tr>
          <tr>
          <td style="width: 502px;">Hệ điều h&agrave;nh:</td>
          <td style="width: 502px;">Windows 10 Home SL</td>
          </tr>
          <tr>
          <td style="width: 502px;">Thiết kế:</td>
          <td style="width: 502px;">Nắp lưng v&agrave; chiếu nghỉ tay bằng kim loại</td>
          </tr>
          <tr>
          <td style="width: 502px;">K&iacute;ch thước:</td>
          <td style="width: 502px;"><span class="comma">21.7 mm</span><span class="">1.86 kg</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Thời điểm ra mắt:</td>
          <td style="width: 502px;">2021</td>
          </tr>
          </tbody>
          </table>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','created_at' => '2021-06-27 04:29:13','updated_at' => '2021-06-27 04:31:46','deleted_at' => NULL),
            array('id' => '7','name' => 'Laptop HP Envy 15 ep0145TX i7 10750H/16GB/1TB SSD/6GB GTX 1660Ti Max-Q/Office H&S2019/Touch/Win10 (231V7PA)','code' => 'HP4','origin' => 'Hà Nội','price' => '46740000','picture' => '1624768216.jpg','status' => '1','description' => '<h3><a title="Laptop HP Envy 15 ep1045TX i7 (231V7PA)" href="https://www.thegioididong.com/laptop/hp-envy-15-ep1045tx-i7-231v7pa" target="_blank">HP Envy 15 ep1045TX i7 (231V7PA)</a>&nbsp;thể hiện sự đẳng cấp của m&igrave;nh với thiết kế kim loại nguy&ecirc;n khối sang trọng, hiệu năng đỉnh nhờ trang bị chip Intel d&ograve;ng H thế hệ 10 c&ugrave;ng độ bảo mật tối ưu. HP Envy l&agrave; chiếc laptop l&yacute; tưởng d&agrave;nh cho doanh nh&acirc;n, người l&agrave;m&nbsp;<a title="Laptop đồ họa kỹ thuật đang kinh doanh tại Thế Giới Di Động" href="https://www.thegioididong.com/laptop?g=do-hoa-ky-thuat" target="_blank">đồ họa kỹ thuật</a>.</h3>
          <h3>Thiết kế sang trọng từ vỏ kim loại nguy&ecirc;n khối</h3>
          <p><a title="Xem th&ecirc;m c&aacute;c sản phẩm Hp Envy đang b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop-hp-compaq-envy" target="_blank">HP Envy</a>&nbsp;được ho&agrave;n thiện từ nh&ocirc;m nguy&ecirc;n khối với thiết kế cắt kim cương, đường viền sắc sảo đem đến vẻ quyến rũ, sang trọng cho m&aacute;y.&nbsp;Trọng lượng&nbsp;<strong>2.14 kg</strong>, độ d&agrave;y&nbsp;<strong>18.4 mm&nbsp;</strong>thuận tiện v&agrave;&nbsp;dễ d&agrave;ng để bạn đem theo khi đi l&agrave;m, đi học m&agrave; kh&ocirc;ng qu&aacute; cồng kềnh.</p>
          <p><a title="Xem th&ecirc;m c&aacute;c mẫu laptop đang kinh doanh tại thegioididong.com" href="https://www.thegioididong.com/laptop" target="_blank">Laptop</a>&nbsp;c&oacute; đ&egrave;n nền b&agrave;n ph&iacute;m để bạn thoải m&aacute;i l&agrave;m việc trong m&ocirc;i trường &aacute;nh s&aacute;ng yếu hoặc tr&ecirc;n c&aacute;c chuyến bay đ&ecirc;m ra nước ngo&agrave;i. Với b&agrave;n ph&iacute;m được chiếu s&aacute;ng, thoải m&aacute;i g&otilde; ph&iacute;m trong nhiều điều kiện m&ocirc;i trường.</p>
          <p>&nbsp;<a class="preventdefault" href="https://www.thegioididong.com/images/44/230555/hp-envy-15-ep1045tx-i7-231v7pa-065820-095844.jpg"><img class=" ls-is-cached lazyloaded" title="HP Envy 15 ep1045TX i7 (231V7PA) - Thiết kế " src="https://cdn.tgdd.vn/Products/Images/44/230555/hp-envy-15-ep1045tx-i7-231v7pa-065820-095844.jpg" alt="HP Envy 15 ep1045TX i7 (231V7PA) - Thiết kế " data-src="https://cdn.tgdd.vn/Products/Images/44/230555/hp-envy-15-ep1045tx-i7-231v7pa-065820-095844.jpg" /></a><br />Mở m&aacute;y hoặc truy cập v&agrave;o c&aacute;c t&agrave;i khoản trực tuyến nhanh ch&oacute;ng với đầu đọc v&acirc;n tay gi&uacute;p tiết kiệm thời gian nhập mật khẩu đồng thời tr&aacute;nh bị đ&aacute;nh cắp mật khẩu.&nbsp;</p>
          <p>Với c&ocirc;ng tắc camera,&nbsp;<a title="Xem th&ecirc;m c&aacute;c sản phẩm laptop HP đang b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop-hp-compaq" target="_blank">laptop HP</a>&nbsp;Envy bảo mật h&igrave;nh ảnh người d&ugrave;ng, người d&ugrave;ng c&oacute; thể kiểm so&aacute;t khi sử dụng webcam.</p>
          <h3>Hiệu năng mạnh mẽ, đồ họa mượt m&agrave;&nbsp;</h3>
          <p>HP Envy mang lại hiệu suất nặng trong một cấu tr&uacute;c nhẹ vừa &yacute;. Bộ xử l&yacute; Intel&nbsp;<a title="Xem th&ecirc;m c&aacute;c laptop Core i7 đang b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop?g=core-i7" target="_blank"><strong>Core i7</strong></a>&nbsp;thế hệ thứ 10 d&ograve;ng H với 6 nh&acirc;n 12 luồng cho xung nhịp tối đa l&ecirc;n đến 5 GHz hoạt động ổn định, mới nhất nhằm tối ưu h&oacute;a về khả năng tăng tốc xử l&yacute;, cũng l&agrave; một cải tiến phục vụ đặc biệt cho c&aacute;c game thủ.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/230555/hp-envy-15-ep1045tx-i7-231v7pa-060020-100005.jpg"><img class=" ls-is-cached lazyloaded" title="HP Envy 15 ep1045TX i7 (231V7PA) - Cấu h&igrave;nh" src="https://cdn.tgdd.vn/Products/Images/44/230555/hp-envy-15-ep1045tx-i7-231v7pa-060020-100005.jpg" alt="HP Envy 15 ep1045TX i7 (231V7PA) - Cấu h&igrave;nh" data-src="https://cdn.tgdd.vn/Products/Images/44/230555/hp-envy-15-ep1045tx-i7-231v7pa-060020-100005.jpg" /></a></p>
          <p>Bộ nhớ&nbsp;<a title="Laptop được trang bị RAM 16 GB đang kinh doanh tại Thegioididong.com" href="https://www.thegioididong.com/laptop?g=16-gb" target="_blank"><strong>RAM 16 GB</strong></a>&nbsp;(n&acirc;ng cấp tối đa đến 64 GB) gi&uacute;p l&agrave;m việc đa nhiệm mượt m&agrave;, loại bỏ hiện tượng giật lag khi sử dụng nhiều ứng dụng. Dung lượng RAM lớn c&ograve;n cho khả năng đồ họa ổn định khi sử dụng Photoshop, Ai,...</p>
          <p><a title="Xem th&ecirc;m c&aacute;c sản phẩm laptop c&oacute; SSD tại Thegioididong.com" href="https://www.thegioididong.com/laptop-o-cung-ssd" target="_blank">Ổ cứng SSD</a>&nbsp;dung lượng l&ecirc;n đến&nbsp;<a title="Xem th&ecirc;m c&aacute;c laptop c&oacute; SSD 1 TB" href="https://www.thegioididong.com/laptop-ssd-1-tb" target="_blank"><strong>1 TB</strong></a>&nbsp;tăng tốc độ xử l&iacute; cũng như khả năng lưu trữ khủng cho kho h&igrave;nh ảnh, video phim ảnh, t&agrave;i liệu,... thỏa sức l&agrave;m việc hiệu suất cao.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/230555/hp-envy-15-ep1045tx-i7-231v7pa-060120-100140.jpg"><img class=" lazyloaded" title="HP Envy 15 ep1045TX i7 (231V7PA) - SSD" src="https://cdn.tgdd.vn/Products/Images/44/230555/hp-envy-15-ep1045tx-i7-231v7pa-060120-100140.jpg" alt="HP Envy 15 ep1045TX i7 (231V7PA) - SSD" data-src="https://cdn.tgdd.vn/Products/Images/44/230555/hp-envy-15-ep1045tx-i7-231v7pa-060120-100140.jpg" /></a></p>
          <p>Thỏa sức s&aacute;ng tạo với&nbsp;<a title="Xem th&ecirc;m c&aacute;c sản phẩm laptop c&oacute; Card đồ họa rời tại Thegioididong.com" href="https://www.thegioididong.com/laptop-card-do-hoa-roi" target="_blank"><strong>card đồ họa rờ</strong></a>i&nbsp;<strong>NVIDIA GeForce GTX 1660Ti Max-Q 6 GB</strong>&nbsp;cho hiệu năng đồ họa cực đỉnh, từ cắt sửa h&igrave;nh ảnh tr&ecirc;n Photoshop, thiết kế, vẽ poster tr&ecirc;n Ai đến render video đều mượt m&agrave;, tốc độ xuất video nhanh ch&oacute;ng.&nbsp;</p>
          <h3>H&igrave;nh ảnh hiển thị với chất lượng tốt</h3>
          <p>Laptop HP Envy được trang bị m&agrave;n h&igrave;nh rộng&nbsp;<strong><a title="Xem th&ecirc;m một số laptop m&agrave;n h&igrave;nh tr&ecirc;n 15 inch đang được kinh doanh tại Thegioididong.com" href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">15.6 inch</a></strong>&nbsp;với độ ph&acirc;n giải&nbsp;<strong>Full HD</strong>&nbsp;gi&uacute;p hiển thị h&igrave;nh ảnh ch&acirc;n thực, sắc n&eacute;t cho bạn những gi&acirc;y ph&uacute;t l&agrave;m việc hiệu quả cũng như thư gi&atilde;n tuyệt vời.&nbsp;</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/230555/hp-envy-15-ep1045tx-i7-231v7pa-060220-100217.jpg"><img class=" lazyloaded" title="HP Envy 15 ep1045TX i7 (231V7PA) - M&agrave;n h&igrave;nh" src="https://cdn.tgdd.vn/Products/Images/44/230555/hp-envy-15-ep1045tx-i7-231v7pa-060220-100217.jpg" alt="HP Envy 15 ep1045TX i7 (231V7PA) - M&agrave;n h&igrave;nh" data-src="https://cdn.tgdd.vn/Products/Images/44/230555/hp-envy-15-ep1045tx-i7-231v7pa-060220-100217.jpg" /></a></p>
          <p>Viền m&agrave;n h&igrave;nh mỏng cộng với tấm nền IPS gi&uacute;p g&oacute;c nh&igrave;n rộng, kh&ocirc;ng giới hạn g&oacute;c nh&igrave;n. Độ s&aacute;ng m&agrave;n h&igrave;nh l&ecirc;n đến&nbsp;<strong>400 nit</strong>&nbsp;hiển thị m&agrave;u sắc rực rỡ, sống động ngay cả dưới trời nắng.&nbsp;</p>
          <p><a title="Laptop c&oacute; m&agrave;n h&igrave;nh cảm ứng đang kinh doanh tại Thế Giới Di Động" href="https://www.thegioididong.com/laptop-man-hinh-cam-ung" target="_blank">M&agrave;n h&igrave;nh cảm ứng</a>&nbsp;sẽ gi&uacute;p bạn thao t&aacute;c như sử dụng một chiếc m&aacute;y t&iacute;nh bảng, đọc b&aacute;o v&agrave; chỉnh sửa h&igrave;nh ảnh dễ d&agrave;ng.&nbsp;</p>
          <p>Kết nối kh&ocirc;ng giới hạn với 2 cổng SuperSpeed USB A, 2 cổng Thunderbolt 3 (USB-C) hiện đại, truyền dữ liệu nhanh ch&oacute;ng v&agrave; tiện lợi.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/230555/hp-envy-15-ep1045tx-i7-231v7pa-060220-100254.jpg"><img class=" lazyloaded" title="HP Envy 15 ep1045TX i7 (231V7PA) - Kết nối" src="https://cdn.tgdd.vn/Products/Images/44/230555/hp-envy-15-ep1045tx-i7-231v7pa-060220-100254.jpg" alt="HP Envy 15 ep1045TX i7 (231V7PA) - Kết nối" data-src="https://cdn.tgdd.vn/Products/Images/44/230555/hp-envy-15-ep1045tx-i7-231v7pa-060220-100254.jpg" /></a></p>
          <p>HP Envy 15 ep1045TX i7 (231V7PA) đem đến một thiết kế&nbsp;<a title="Laptop cao cấp - sang trọng đang kinh doanh tại Thế Giới Di Động" href="https://www.thegioididong.com/laptop?g=cao-cap-sang-trong" target="_blank">cao cấp - sang trọng</a>&nbsp;c&ugrave;ng với hiệu năng mạnh mẽ cho khả năng l&agrave;m việc đa phương tiện cực đỉnh, đảm bảo đ&aacute;p ứng mọi nhu cầu từ giải tr&iacute; đến đồ họa.</p>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','configuration' => '<table style="height: 210px;" width="1020">
          <tbody>
          <tr>
          <td style="width: 502px;">CPU:</td>
          <td style="width: 502px;"><span class="comma">Intel Core i5 Comet Lake</span><span class="comma">10300H</span><span class="">2.50 GHz</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">RAM:</td>
          <td style="width: 502px;"><span class="comma">8 GB</span><span class="comma">DDR4 (2 khe)</span><span class="">2666 MHz</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Ổ cứng:</td>
          <td style="width: 502px;"><span class="comma">Hỗ trợ khe cắm HDD SATA</span><span class="">SSD 512 GB NVMe PCIe</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">M&agrave;n h&igrave;nh:</td>
          <td style="width: 502px;"><span class="comma">15.6"</span><span class="">Full HD (1920 x 1080), 144Hz</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Card m&agrave;n h&igrave;nh:</td>
          <td style="width: 502px;"><span class="comma">Card rời</span><span class="">NVIDIA GeForce GTX 1650 4 GB</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Cổng kết nối:</td>
          <td style="width: 502px;"><span class="comma">3 x USB 3.2</span><span class="comma">HDMI</span><span class="comma">LAN (RJ45)</span><span class="">USB Type-C</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Đặc biệt:</td>
          <td style="width: 502px;">C&oacute; đ&egrave;n b&agrave;n ph&iacute;m</td>
          </tr>
          <tr>
          <td style="width: 502px;">Hệ điều h&agrave;nh:</td>
          <td style="width: 502px;">Windows 10 Home SL</td>
          </tr>
          <tr>
          <td style="width: 502px;">Thiết kế:</td>
          <td style="width: 502px;">Nắp lưng v&agrave; chiếu nghỉ tay bằng kim loại</td>
          </tr>
          <tr>
          <td style="width: 502px;">K&iacute;ch thước:</td>
          <td style="width: 502px;"><span class="comma">21.7 mm</span><span class="">1.86 kg</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Thời điểm ra mắt:</td>
          <td style="width: 502px;">2021</td>
          </tr>
          </tbody>
          </table>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','created_at' => '2021-06-27 04:30:16','updated_at' => '2021-06-27 04:30:16','deleted_at' => NULL),
            array('id' => '8','name' => 'Laptop Apple MacBook Pro M1 2020 16GB/512GB/Space Grey (Z11C)','code' => 'AP4','origin' => 'Hà Nội','price' => '44490000','picture' => '1624768275.jpg','status' => '1','description' => '<h3><a title="Apple Macbook Pro 2020 (Z11C)" href="https://www.thegioididong.com/laptop/apple-macbook-pro-2020-z11c" target="_blank">Apple Macbook Pro M1 2020 (Z11C)</a>&nbsp;được n&acirc;ng cấp với bộ vi xử l&yacute; mới cực kỳ mạnh mẽ, con laptop n&agrave;y sẽ phục vụ tốt cho c&ocirc;ng việc của bạn, đặc biệt b&ecirc;n lĩnh vực đồ họa, kỹ thuật.</h3>
          <h3>Tăng cường kh&ocirc;ng gian lưu trữ, tốc độ xử l&yacute;</h3>
          <p>Chip&nbsp;<a title="T&igrave;m hiểu về chip Apple M1" href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-chip-apple-m1-con-chip-arm-5nm-dau-tien-danh-1305955" target="_blank">Apple M1</a>&nbsp;l&agrave; một bộ vi xử l&yacute; mạnh mẽ, được ra mắt lần đầu ti&ecirc;n tr&ecirc;n MAC. Đ&acirc;y l&agrave; con chip với bộ xử l&yacute; 5 nm, t&iacute;ch hợp&nbsp;<strong>CPU 8 l&otilde;i&nbsp;</strong>với 4 l&otilde;i CPU tốc độ v&agrave; v&agrave; 4 l&otilde;i tiết kiệm năng lượng. Nhờ vậy, thời lượng pin của laptop được k&eacute;o d&agrave;i đến tận 10 tiếng đồng hồ, gi&uacute;p cho bạn thoải m&aacute;i l&agrave;m việc với một hiệu suất cực kỳ cao.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/231255/apple-macbook-pro-2020-z11c-060520-120550.jpg"><img class=" ls-is-cached lazyloaded" title="Laptop Apple Macbook Pro 2020 M1/16GB/512GB (Z11C) - Apple M1" src="https://cdn.tgdd.vn/Products/Images/44/231255/apple-macbook-pro-2020-z11c-060520-120550.jpg" alt="Laptop Apple Macbook Pro 2020 M1/16GB/512GB (Z11C) - Apple M1" data-src="https://cdn.tgdd.vn/Products/Images/44/231255/apple-macbook-pro-2020-z11c-060520-120550.jpg" /></a></p>
          <p>Ngo&agrave;i ra, card đồ họa t&iacute;ch hợp&nbsp;<strong>8 nh&acirc;n GPU&nbsp;</strong>gi&uacute;p người d&ugrave;ng xử l&yacute; c&aacute;c t&aacute;c vụ văn ph&ograve;ng cũng như đồ họa một c&aacute;ch trơn tru, mượt m&agrave; với tốc độ xử l&yacute; gấp 5 lần c&aacute;c thế hệ trước đ&oacute;. Nhờ vậy, bạn c&oacute; thể n&acirc;ng cao hiệu suất l&agrave;m việc cũng như tiết kiệm được thời gian một c&aacute;ch tối ưu nhất.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/231255/apple-macbook-pro-2020-z11c-060520-120542.jpg"><img class=" ls-is-cached lazyloaded" title="Laptop Apple Macbook Pro 2020 M1/16GB/512GB (Z11C) - GPU" src="https://cdn.tgdd.vn/Products/Images/44/231255/apple-macbook-pro-2020-z11c-060520-120542.jpg" alt="Laptop Apple Macbook Pro 2020 M1/16GB/512GB (Z11C) - GPU" data-src="https://cdn.tgdd.vn/Products/Images/44/231255/apple-macbook-pro-2020-z11c-060520-120542.jpg" /></a></p>
          <p>Với ổ cứng&nbsp;<strong><a title="Xem th&ecirc;m c&aacute;c laptop c&oacute; SSD 512 GB" href="https://www.thegioididong.com/laptop?g=ssd-512-gb" target="_blank">SSD 512 GB</a></strong>&nbsp;gi&uacute;p bạn&nbsp;tăng tốc to&agrave;n diện m&aacute;y t&iacute;nh với tốc độ khởi động, mở ứng dụng, truyền dữ liệu nhanh vượt trội so với ổ cứng HDD truyền thống. B&ecirc;n cạnh đ&oacute;,&nbsp;<a title="Laptop được trang bị RAM 16 GB đang kinh doanh tại Thegioididong.com" href="https://www.thegioididong.com/laptop?g=16-gb" target="_blank">RAM 16 GB</a>&nbsp;của laptop gi&uacute;p n&acirc;ng cao khả năng đa nhiệm, dễ d&agrave;ng mở những tập tin lớn, nặng hay mở nhiều tr&igrave;nh duyệt c&ugrave;ng l&uacute;c nhưng kh&ocirc;ng xảy ra t&igrave;nh trạng giật lag.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/231255/apple-macbook-pro-2020-z11c-060620-120607.jpg"><img class=" ls-is-cached lazyloaded" title="Laptop Apple Macbook Pro 2020 M1/16GB/512GB (Z11C) - RAM" src="https://cdn.tgdd.vn/Products/Images/44/231255/apple-macbook-pro-2020-z11c-060620-120607.jpg" alt="Laptop Apple Macbook Pro 2020 M1/16GB/512GB (Z11C) - RAM" data-src="https://cdn.tgdd.vn/Products/Images/44/231255/apple-macbook-pro-2020-z11c-060620-120607.jpg" /></a></p>
          <p>C&oacute; thể xem&nbsp;<a title="Danh s&aacute;ch ứng dụng chạy được tr&ecirc;n Macbook chip Apple M1" href="https://www.thegioididong.com/game-app/danh-sach-ung-dung-chay-duoc-tren-macbook-chip-apple-m1-1310311" target="_blank">danh s&aacute;ch ứng dụng chạy được tr&ecirc;n Macbook chip Apple M1</a>&nbsp;để c&agrave;i đặt tương th&iacute;ch nhất.</p>
          <h3>Kiểu d&aacute;ng thời trang, mỏng nhẹ</h3>
          <p>Chiếc&nbsp;<a title="Xem th&ecirc;m c&aacute;c mẫu laptop đang kinh doanh tại thegioididong.com" href="https://www.thegioididong.com/laptop" target="_blank">laptop</a>&nbsp;phi&ecirc;n bản m&agrave;u bạc với vỏ kim loại nguy&ecirc;n khối cực kỳ sang trọng, nhỏ gọn v&agrave; thời trang. Bạn cũng c&oacute; thể dễ d&agrave;ng cho&nbsp;<a title="Xem th&ecirc;m c&aacute;c sản phẩm MacBook đang b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop-apple-macbook-pro" target="_blank">Macbook Pro</a>&nbsp;2020 v&agrave;o cặp x&aacute;ch hay balo, cầm tr&ecirc;n tay nhẹ nh&agrave;ng để di chuyển bất cứ nơi đ&acirc;u chỉ với trọng lượng&nbsp;<strong>1.4 kg</strong>&nbsp;v&agrave; mỏng&nbsp;<strong>15.6 mm</strong>.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/231255/apple-macbook-pro-2020-z11c-060620-120611.jpg"><img class=" lazyloaded" title="Laptop Apple Macbook Pro 2020 M1/16GB/512GB (Z11C) - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/231255/apple-macbook-pro-2020-z11c-060620-120611.jpg" alt="Laptop Apple Macbook Pro 2020 M1/16GB/512GB (Z11C) - Thiết kế" data-src="https://cdn.tgdd.vn/Products/Images/44/231255/apple-macbook-pro-2020-z11c-060620-120611.jpg" /></a></p>
          <p>B&agrave;n ph&iacute;m<strong>&nbsp;Magic Keyboard</strong>&nbsp;mới tr&ecirc;n&nbsp;<a title="Xem th&ecirc;m Macbook M1 đang b&aacute;n tại Thế Giới Di Động" href="https://www.thegioididong.com/laptop-apple-macbook-m1" target="_blank">MacBook M1&nbsp;</a>c&oacute; cơ chế cắt k&eacute;o tinh tế, mang lại cho bạn trải nghiệm g&otilde; nhạy, thoải m&aacute;i v&agrave; y&ecirc;n tĩnh. Kh&ocirc;ng thể kh&ocirc;ng nhắc đến đ&egrave;n LED được t&iacute;ch hợp tr&ecirc;n b&agrave;n ph&iacute;m gi&uacute;p bạn l&agrave;m việc linh hoạt, năng suất hơn kể cả khi ở trong điều kiện thiếu s&aacute;ng.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/231255/apple-macbook-pro-2020-z11c-060520-120558.jpg"><img class=" lazyloaded" title="Laptop Apple Macbook Pro 2020 M1/16GB/512GB (Z11C) - Magic Keyboard" src="https://cdn.tgdd.vn/Products/Images/44/231255/apple-macbook-pro-2020-z11c-060520-120558.jpg" alt="Laptop Apple Macbook Pro 2020 M1/16GB/512GB (Z11C) - Magic Keyboard" data-src="https://cdn.tgdd.vn/Products/Images/44/231255/apple-macbook-pro-2020-z11c-060520-120558.jpg" /></a></p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/231255/apple-macbook-pro-2020-z11c-060520-120538.jpg"><img class=" lazyloaded" title="Laptop Apple Macbook Pro 2020 M1/16GB/512GB (Z11C) - Thanh cảm ứng" src="https://cdn.tgdd.vn/Products/Images/44/231255/apple-macbook-pro-2020-z11c-060520-120538.jpg" alt="Laptop Apple Macbook Pro 2020 M1/16GB/512GB (Z11C) - Thanh cảm ứng" data-src="https://cdn.tgdd.vn/Products/Images/44/231255/apple-macbook-pro-2020-z11c-060520-120538.jpg" /></a></p>
          <p>Được trang bị cổng kết nối USB Type-C hỗ trợ kết nối 2 chiều cực kỳ tiện lợi với 2 cổng&nbsp;Thunderbolt 3, đem đến&nbsp;tốc độ nhanh hơn nhiều so với c&aacute;c cổng kết nối trước đ&acirc;y. Ngo&agrave;i ra,&nbsp;<a title="Xem th&ecirc;m c&aacute;c sản phẩm MacBook đang b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop-apple-macbook" target="_blank">MacBook</a>&nbsp;bạn c&ograve;n c&oacute; c&aacute;c cổng kết nối kh&ocirc;ng d&acirc;y kh&aacute;c như&nbsp;<a title="Wi-Fi chuẩn 802.11ax l&agrave; g&igrave;? T&igrave;m hiểu về Wi-Fi thế hệ thứ 6" href="https://www.thegioididong.com/hoi-dap/wi-fi-chuan-80211ax-la-gi-tim-hieu-ve-wi-fi-the-he-thu-6-1187524" target="_blank">Wi-Fi 6 802.11ax</a>,&nbsp;<a title="Bluetooth 5.0 chuẩn Bluetooth d&agrave;nh cho thời đại kh&ocirc;ng d&acirc;y" href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-kho-1113891" target="_blank">Bluetooth v5.0</a>&nbsp;để phục vụ tốt cho những c&ocirc;ng việc của bạn.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/231255/apple-macbook-pro-2020-z11c-060620-120615.jpg"><img class=" lazyloaded" title="Laptop Apple Macbook Pro 2020 M1/16GB/512GB (Z11C) - Kết nối" src="https://cdn.tgdd.vn/Products/Images/44/231255/apple-macbook-pro-2020-z11c-060620-120615.jpg" alt="Laptop Apple Macbook Pro 2020 M1/16GB/512GB (Z11C) - Kết nối" data-src="https://cdn.tgdd.vn/Products/Images/44/231255/apple-macbook-pro-2020-z11c-060620-120615.jpg" /></a></p>
          <h3>H&igrave;nh ảnh ch&acirc;n thật đến từng chi tiết</h3>
          <p>Với độ ph&acirc;n giải&nbsp;<strong>2560 x 1600</strong>&nbsp;v&ocirc; c&ugrave;ng sắc n&eacute;t,&nbsp;<a title="M&agrave;n h&igrave;nh Retina l&agrave; g&igrave;? | Thegioididiong.com" href="https://www.thegioididong.com/hoi-dap/man-hinh-retina-la-gi-905780" target="_blank">m&agrave;n h&igrave;nh Retina</a>&nbsp;<a title="Xem th&ecirc;m một số laptop m&agrave;n h&igrave;nh 13 inch đang được kinh doanh tại Thegioididong.com" href="https://www.thegioididong.com/laptop-13-inch" target="_blank">13.3 inch</a>&nbsp;hiển thị l&yacute; tưởng mọi nội dung bạn cần theo d&otilde;i, từ trang web, văn bản r&otilde; r&agrave;ng cho đến những đoạn phim sống động.</p>
          <p>Ấn tượng hơn nữa, với độ&nbsp;s&aacute;ng m&agrave;n h&igrave;nh l&ecirc;n đến&nbsp;<strong>500 nits</strong>, bạn sẽ c&oacute; được một trải nghiệm &aacute;nh s&aacute;ng tuyệt vời tr&ecirc;n một m&agrave;n h&igrave;nh hiển thị h&igrave;nh ảnh cực kỳ sống động v&agrave; ch&acirc;n thật. B&ecirc;n cạnh đ&oacute;, với&nbsp;<a title="Tấm nền IPS" href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">tấm nền IPS</a>, bạn sẽ đắm ch&igrave;m v&agrave;o một thế giới m&agrave;u sắc v&ocirc; c&ugrave;ng rực rỡ v&agrave; c&oacute; được một g&oacute;c nh&igrave;n rộng hơn.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/231255/apple-macbook-pro-2020-z11c-060620-120603.jpg"><img class=" lazyloaded" title="Laptop Apple Macbook Pro 2020 M1/16GB/512GB (Z11C) - M&agrave;n h&igrave;nh" src="https://cdn.tgdd.vn/Products/Images/44/231255/apple-macbook-pro-2020-z11c-060620-120603.jpg" alt="Laptop Apple Macbook Pro 2020 M1/16GB/512GB (Z11C) - M&agrave;n h&igrave;nh" data-src="https://cdn.tgdd.vn/Products/Images/44/231255/apple-macbook-pro-2020-z11c-060620-120603.jpg" /></a></p>
          <p>H&igrave;nh ảnh của bạn sẽ kh&ocirc;ng bị mờ đi, m&agrave; c&ograve;n trở n&ecirc;n lung linh hơn, xinh đẹp hơn với&nbsp;<strong>webcam HD</strong>&nbsp;đem lại một h&igrave;nh ảnh si&ecirc;u n&eacute;t khi sử dụng&nbsp;FaceTime camera. Những cuộc họp trực tuyến cũng sẽ được diễn ra tr&ocirc;i chảy với &acirc;m thanh ổn định nhờ t&iacute;ch hợp&nbsp;<strong>3 micro</strong>&nbsp;tr&ecirc;n laptop.</p>
          <p>Mở kh&oacute;a m&aacute;y t&iacute;nh x&aacute;ch tay dễ d&agrave;ng v&agrave; bảo mật hơn bao giờ hết tr&ecirc;n Macbook Pro 2020 bởi n&oacute; sẽ c&oacute;&nbsp;<a title="Bảo mật v&acirc;n tay" href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank">cảm biến v&acirc;n tay</a>&nbsp;tr&ecirc;n laptop, bạn sẽ kh&ocirc;ng cần phải nhập mật khẩu khi đăng nhập m&agrave; chỉ một lần chạm l&agrave; đủ.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/231255/apple-macbook-pro-2020-z11c-062620-122635.jpg"><img class=" lazyloaded" title="Laptop Apple Macbook Pro 2020 M1/16GB/512GB (Z11C) - Tiện &iacute;ch" src="https://cdn.tgdd.vn/Products/Images/44/231255/apple-macbook-pro-2020-z11c-062620-122635.jpg" alt="Laptop Apple Macbook Pro 2020 M1/16GB/512GB (Z11C) - Tiện &iacute;ch" data-src="https://cdn.tgdd.vn/Products/Images/44/231255/apple-macbook-pro-2020-z11c-062620-122635.jpg" /></a></p>
          <h3>Tận hưởng &acirc;m thanh cao cấp</h3>
          <p>Nếu bạn l&agrave; một người th&iacute;ch nghe nhạc, xem phim th&igrave; đ&acirc;y l&agrave; một con laptop ph&ugrave; hợp để đ&aacute;p ứng &acirc;m thanh cực chất. Bạn sẽ được trải nghiệm chiều s&acirc;u &acirc;m nhạc mới đầy sống động v&agrave; ch&acirc;n thực với&nbsp;<a title="T&igrave;m hiểu về loa k&eacute;p (2 k&ecirc;nh)" href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-am-thanh-stereo-am-thanh-kep-dual-spea-920547" target="_blank">loa k&eacute;p (2 k&ecirc;nh)</a>&nbsp;cộng với c&ocirc;ng nghệ &acirc;m thanh&nbsp;<a title="C&ocirc;ng nghệ &acirc;m thanh Dolby Altmos l&agrave; g&igrave;? C&oacute; những g&igrave; nổi bật?" href="https://www.thegioididong.com/hoi-dap/cong-nghe-am-thanh-dolby-altmos-la-gi-co-nhung-gi-noi-bat-1280672" target="_blank">Dolby Altmos</a>, đem lại cho bạn những &acirc;m thanh chi tiết, chất lượng cao để được tận hưởng cuộc sống tuyệt vời hơn.</p>
          <p><a class="preventdefault" href="https://www.thegioididong.com/images/44/231255/apple-macbook-pro-2020-z11c-062620-122631.jpg"><img class=" lazyloaded" title="Laptop Apple Macbook Pro 2020 M1/16GB/512GB (Z11C) - &Acirc;m thanh" src="https://cdn.tgdd.vn/Products/Images/44/231255/apple-macbook-pro-2020-z11c-062620-122631.jpg" alt="Laptop Apple Macbook Pro 2020 M1/16GB/512GB (Z11C) - &Acirc;m thanh" data-src="https://cdn.tgdd.vn/Products/Images/44/231255/apple-macbook-pro-2020-z11c-062620-122631.jpg" /></a></p>
          <p>Kh&ocirc;ng chỉ dừng lại ở thiết kế&nbsp;<a title="Xem th&ecirc;m c&aacute;c sản phẩm laptop mỏng nhẹ đang b&aacute;n tại Thegioididong.com" href="https://www.thegioididong.com/laptop?g=mong-nhe-thoi-trang" target="_blank">mỏng nhẹ, cao cấp</a>,&nbsp;Macbook Pro M1 2020 (Z11C) thật sự đem lại một hiệu năng mới cực kỳ mạnh mẽ, xứng đ&aacute;ng l&agrave; một người bạn đồng h&agrave;nh trong học tập cũng như l&agrave;m việc.</p>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','configuration' => '<table style="height: 210px;" width="1020">
          <tbody>
          <tr>
          <td style="width: 502px;">CPU:</td>
          <td style="width: 502px;"><span class="comma">Intel Core i5 Comet Lake</span><span class="comma">10300H</span><span class="">2.50 GHz</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">RAM:</td>
          <td style="width: 502px;"><span class="comma">8 GB</span><span class="comma">DDR4 (2 khe)</span><span class="">2666 MHz</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Ổ cứng:</td>
          <td style="width: 502px;"><span class="comma">Hỗ trợ khe cắm HDD SATA</span><span class="">SSD 512 GB NVMe PCIe</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">M&agrave;n h&igrave;nh:</td>
          <td style="width: 502px;"><span class="comma">15.6"</span><span class="">Full HD (1920 x 1080), 144Hz</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Card m&agrave;n h&igrave;nh:</td>
          <td style="width: 502px;"><span class="comma">Card rời</span><span class="">NVIDIA GeForce GTX 1650 4 GB</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Cổng kết nối:</td>
          <td style="width: 502px;"><span class="comma">3 x USB 3.2</span><span class="comma">HDMI</span><span class="comma">LAN (RJ45)</span><span class="">USB Type-C</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Đặc biệt:</td>
          <td style="width: 502px;">C&oacute; đ&egrave;n b&agrave;n ph&iacute;m</td>
          </tr>
          <tr>
          <td style="width: 502px;">Hệ điều h&agrave;nh:</td>
          <td style="width: 502px;">Windows 10 Home SL</td>
          </tr>
          <tr>
          <td style="width: 502px;">Thiết kế:</td>
          <td style="width: 502px;">Nắp lưng v&agrave; chiếu nghỉ tay bằng kim loại</td>
          </tr>
          <tr>
          <td style="width: 502px;">K&iacute;ch thước:</td>
          <td style="width: 502px;"><span class="comma">21.7 mm</span><span class="">1.86 kg</span></td>
          </tr>
          <tr>
          <td style="width: 502px;">Thời điểm ra mắt:</td>
          <td style="width: 502px;">2021</td>
          </tr>
          </tbody>
          </table>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>
          <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">&nbsp;</div>','created_at' => '2021-06-27 04:31:15','updated_at' => '2021-06-27 04:31:15','deleted_at' => NULL)
          );

          DB::table('laptops')->insert($data);
    }
}
