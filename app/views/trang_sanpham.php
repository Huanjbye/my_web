<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In tài khoản cá nhân</title>
    <link rel="stylesheet" href="../../public/CSS/trang_sanpham.css">
    <link rel="icon" href="https://hydrofoilshop.com.au/cdn/shop/files/F-One_Logo_wing_foil_hydrofoiling_320x320.png?v=1669717178">
</head>
<body>
    <div class="quangcao_dau">
        <img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/09/banner/mua1duoc5-1200-44-1200x44.png">
    </div>
    <header class="header">
        <div class="header_top">
            <div class="logo">
                <img src="https://www.infexion.eu/wp-content/uploads/2018/01/f-one-logo.png" alt="F-One">
            </div>
            
            <a href="#" id="address" class="header__address">
                Xem giá, tồn kho tại:
                <span>Hà Nội</span> 
            </a>
            <div class="address_form">
                <div class="address_form-conten">
                    <h2>Chọn địa chỉ nhận hàng <span class="exit_address_form">X Đóng</span></h2>
                    <form action="">
                        <p>Chọn đầy đủ địa chỉ nhận hàng để biết chính sác thời gian giao</p>
                        <select name="" id="">
                            <option value="#">Vui lòng Chọn địa điểm </option>
                            <option value="#">Hà Nội</option>
                            <option value="#">Đà Nẵng</option>
                            <option value="#">Hải Phòng</option>
                            <option value="#">TP.Hồ Chí Minh</option>
                        </select>
                        <select name="" id="">
                            <option value="#">Vui lòng Chọn Quận/Huyện </option>
                            <option value="#">Cầu Giấy</option>
                            <option value="#">Hoàng Mai</option>
                            <option value="#">Đống Đa</option>
                            <option value="#">Nam Từ Liêm</option>
                            <option value="#">Bắc Từ Liêm</option>
                        </select>
                        <select name="" id="">
                            <option value="#">Vui lòng Chọn Phường/Xã </option>
                            <option value="#">Vân canh</option>
                            <option value="#">Phương canh</option>
                            <option value="#">Tây mỗ</option>
                            <option value="#">An khánh</option>
                            <option value="#">Kim chung</option>
                        </select>
                        <input tyle="text" placeholder="Nhập số nhà, tên đường (Không bắt buộc)"></input>
                        <button>Xác Nhận</button>
                    </form>
                </div>
            </div>
            <font class="header_search">
                <input type="text" placeholder="Bạn tìm gì...">
                <button>
                    <img src="data:image/png;base64,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" width="16">
                </button>
            </font>
            
            <a href="trang_sanpham.html" class="name_order">Tài khoản & Đơn hàng</a>
            <a href="gio_hang.html" class="header_cart">
                <div class="box-cart">
                    <img src="https://png.pngtree.com/png-clipart/20230409/original/pngtree-shopping-cart-line-icon-png-image_9041816.png" width="24">
                </div>
                <span>Giỏ hàng</span>
            </a>
            <div class="divitem">
                <a href="">24h<br>Công nghệ</a>
            </div>
            <div class="bordercol"></div>
            <div class="divitem">
                <a href="">Hỏi đáp</a>
            </div>
            <div class="bordercol"></div>
            <div class="divitem">
                <a href="">Game App</a>
            </div> 
        </div>
        <div class="header-bottom">
            <ul class="main-menu">
                <li class="origin underlined">
                    <a href="trangchu.html"> 
                        <span>Trang chủ</span>
                    </a>
                </li>
                <li class="origin underlined">
                    <a href="introduce.html">
                        <span>Giới thiệu</span>
                    </a>
                </li>
                <li class="underlined">
                    <a href="trang_dien_thoai.html">
                        <i><img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn//content/icon-phone-96x96-2.png" width="20"></i>
                        <span> Điện thoại</span>
                    </a>
                </li>
                <li class="underlined">
                    <a href="may_cu.html">
                        <i><img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn//content/icon-header-may-cu-30x30.png" width="20"></i>
                        <span>Máy cũ giá rẻ</span>
                    </a>
                </li>
                <li class="underlined">
                    <a href="trang_iBad.html">
                        <i><img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn//content/icon-tablet-96x96-1.png" width="20"></i> 
                        <span>iBad</span>
                    </a>
                </li>
                <li class="has-list underlined">
                    <a href="#">
                        <i><img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn//content/icon-phu-kien-96x96-1.png" width="20"></i>
                        <span class="has-child">Phụ kiện</span>
                    </a>
                    <div class="navmwg">
                        <div class="item-child ">
                            <strong>Phụ kiện di dộng</strong>
                            <a href="/"><h3>Sạc dự phòng</h3></a>
                            <a href="/"><h3>Sạc, cáp</h3></a>
                            <a href="/"><h3>Ốp lưng điện thoại</h3></a>
                            <a href="/"><h3>Ốp lưng máy tính bảng</h3></a>
                            <a href="/"><h3>Miếng gián</h3></a>
                            <a href="/"><h3>Giậy chụp ảnh, Gimbal</h3></a>
                            <a href="/"><h3>Giá đỡ điện thoại, laptop</h3></a>
                            <a href="/"><h3>Đế, móc điện thoại</h3></a>
                            <a href="/"><h3>Túi đựng AirPods</h3></a>
                            <a href="/"><h3>AirTag, vỏ bảo vệ AirTag</h3></a>
                            <a href="/"><h3>Bàn phím, bút Tablet</h3></a>
                        </div>
                        <div class="item-child ">
                            <strong>Phụ kiện laptop</strong>
                            <a href="/"><h3>Chuột, bàn phím</h3></a>
                            <a href="/"><h3>Thiết bị mạng</h3></a>
                            <a href="/"><h3>Balo, túi chống sốc</h3></a>
                            <a href="/"><h3>Phần mềm</h3></a>
                        </div>
                        <div class="item-child ">
                            <strong>Thiết bị nhà thôbg minh</strong>
                            <a href=""><h3>Camera, Webcam</h3></a>
                            <a href=""><h3>Máy chiếu</h3></a>
                            <a href=""><h3>TV Box</h3></a>
                            <a href=""><h3>Ổ cắm, bóng đèn thông minh</h3></a>
                        </div>
                        <div class="item-child ">
                            <strong>Thương hiệu hàng đầu</strong>
                            <a href=""><h3>Apple</h3></a>
                            <a href=""><h3>Samsung</h3></a>
                            <a href=""><h3>Sony</h3></a>
                            <a href=""><h3>JBL</h3></a>
                            <a href=""><h3>Anker</h3></a>
                        </div>
                        <div class="item-child ">
                            <strong>Thiết bị âm thanh</strong>
                            <a href="/"><h3>Tai nghe</h3></a>
                            <a href="/"><h3>Loa</h3></a>
                            <a href="/"><h3>Micro</h3></a>
                        </div>
                        <div class="item-child ">
                            <strong>Thiết bị lưu trữ</strong>
                            <a href="/"><h3>Ốp cứng di dộng</h3></a>
                            <a href="/"><h3>Thẻ mới</h3></a>
                            <a href="/"><h3>USB</h3></a>
                        </div>
                        <div class="item-child ">
                            <strong>Phụ kiện khác</strong>
                            <a href="/"><h3>Phụ kiện ô tô</h3></a>
                            <a href="/"><h3>Quạt mini</h3></a>
                            <a href="/"><h3>Pin tiểu</h3></a>
                        </div>
                    </div>
                </li>
                <li class="underlined">
                    <a href="smartwatch.html">
                        <i><img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn//content/icon-smartwatch-96x96-1.png" width="20"></i>
                        <span>Smartwatch</span>
                    </a>
                </li>
                <li class="has-list show-left underlined">
                    <a href="#">
                        <i><img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn//content/icon-pc-96x96.png" width="20"></i>
                        <span class="has-child">PC, Máy in</span>
                    </a>
                    <div class="navmwg limit-width">
                        <div class="item-child"><a href="/"><h3>Máy in</h3></a></div>
                        <div class="item-child"><a href="/"><h3>Mực in</h3></a></div>
                        <div class="item-child"><a href="/"><h3>Màn hình máy tính</h3></a></div>
                        <div class="item-child"><a href="/"><h3>Máy tính để bàn</h3></a></div>
                        <div class="item-child"><a href="/"><h3>Máy tính để bàn</h3></a></div>
                    </div>
                </li>
                <li class="has-list show-left underlined">
                    <a href="#">
                        <span class="has-child">Dịch vụ tiện ích</span>
                    </a>
                    <div class="navmwg navmwgs">
                        <div class="item-child ">
                            <strong>Thanh toán hóa đơn</strong>
                            <a href=""><h3>Đóng tiền trả góp</h3></a>
                            <a href=""><h3>Đóng tiền điện</h3></a>
                            <a href=""><h3>Đóng tiền nước</h3></a>
                            <a href=""><h3>Đóng tiền NET FPT</h3></a>
                            <a href=""><h3>Đóng tiền net, cáp VNPT</h3></a>
                            <a href=""><h3>Vé tàu, xe, máy bay</h3></a>
                        </div>
                        <div class="item-child ">
                            <strong>Tài chính bảo hiểm</strong>
                            <a href="/"><h3>Mua bảo hiểm xe máy, ô tô</h3></a>
                            <a href="/"><h3>Đóng tiền bảo hiểm</h3></a>
                            <a href="/"><h3>Mua gói truyền hình</h3></a>

                        </div>
                        <div class="item-child ">
                            <strong>Tiện ích viễn thông</strong>
                            <a href="/"><h3>Mua gói data 3G, 4G</h3></a>
                            <a href="/"><h3>Nạp tiền trả trước</h3></a>
                            <a href="/"><h3>Nạp tiền trả sau</h3></a>
                            <a href="/"><h3>Thẻ cào game</h3></a>
                            <a href="/"><h3>Thẻ cào điện thoại</h3></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>

    
    <section class="wrapper">
        <div class="login">
            <img class="site-icon " src="https://cdn.tgdd.vn/2022/10/banner/TGDD-540x270.png">
            <div class="d1 step1">
                <span>Tra cứu thông tin đơn hàng</span>
                <form id="frmGetVerifyCode">
                    <div class="input-area">
                        <i class="input-icon"><img src="https://www.clipartmax.com/png/full/246-2461247_phone-call-icon-clipart-panda-icon-%C4%91i%E1%BB%87n-tho%E1%BA%A1i-di-%C4%91%E1%BB%99ng.png" alt="Phone Call Icon" width="14"></i>
                        <input type="tel" name="txtPhoneNumber" autocomplete="off" placeholder="Nhập số điện thoại mua hàng" maxlength="10">
                        <button type="submit" class="btn">Tiếp tục</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <footer>
        <div class="footer_top">
            <div class="footer_left">
                <div>
                    <a href="#"><img src="https://webmedia.com.vn/images/2021/09/logo-da-thong-bao-bo-cong-thuong-mau-xanh.png" alt="Hình ảnh đã thông báo" width="100"></a>
                    <a href="#"><img src="https://salavietnam.vn/dataimages/images/20150827110756-dadangky.png" alt="" width="100"></a>
                    <a href="#"><img src="https://tinnhiemmang.vn/storage/photos/shares/Website/Logo-L.png" alt="" width="95"></a> 
                </div>
                <p>Website cùng tập đoàn</p>
                <div class="lienket">
                    <div>
                        <img class="thegioididong" src="https://cms.vietnamreport.net//source/LogoBusiness/202106081228543.thegioididong.png" width="100"><br>
                        <img class="dienmayxanh" src="https://www.tiendauroi.com/wp-content/uploads/2019/09/dien-may-xanh.png" width="100" height="50"><br>
                        <img class="bachhoaxanh" src="https://acb.com.vn/acbwebsite/media/ca9EjXXhcNn6CQwob8iyqWyTg6LnwGftZZgBRVxI.png" width="110"><br>
                        <img class="tantam" src="https://www.dichvutantam.com/images/v2/mobile/menu_logo-mobile.png" width="100">
                    </div>
                    <div>
                        <img class="topzone" src="https://media.loveitopcdn.com/3807/logo-topzone-1.png" alt="" width="100" height="30"><br>
                        <img class="ankhang" src="https://marketingtrips.com/wp-content/uploads/2020/05/nha-thuoc-an-khang.png" alt="" width="100" height="30"><br>
                        <img class="avakids" src="https://static.ybox.vn/2023/6/3/1687358724916-Jy7mCi2A.png" alt="" width="125" height="32"><br>
                        <img class="vieclam" src="https://nghenghiep.vieclam24h.vn/wp-content/uploads/2021/12/Logo-Vi%E1%BB%87c-L%C3%A0m-24h-600x135.png" alt="" width="100" height="30">
                    </div>
                    
                </div>
            </div>
            <div class="footer_right">
                <div class="footer_items">
                    <a href="#">Bạn có câu hỏi? Liên hệ với chúng tôi</a>
                </div>
                <div class="footer_items">
                    <div>
                        <a href="#">Câu hỏi thường gặp</a><br><br>
                        <a href="#">Trung tâm trợ giúp</a><br><br>
                        <a href="#">Tài khoản</a><br><br>
                        <a href="#">Trung tâm đa phương tiên</a>
                    </div>
                    <div>
                        <a href="#">Quan hệ với nhà đầu tư</a><br><br>
                        <a href="#">Việc làm</a><br><br>
                        <a href="#">Các cách xem</a><br><br>
                        <a href="#">Điều khoản sử dụng</a>
                    </div>
                    <div>
                        <a href="#">Quyền riêng tư</a><br><br>
                        <a href="#">Tùy chọn cookie</a><br><br>
                        <a href="#">Thông tin doanh nghiệp</a><br><br>
                        <a href="#">Liên hệ với chúng tôi</a><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="lienket_icon">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/1200px-Facebook_Logo_%282019%29.png" alt="Facebook" width="25">
            <img src="https://www.unipile.com/wp-content/uploads/2022/09/logo_instagram.png" alt="instagram" width="25">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Icon_of_Zalo.svg/1024px-Icon_of_Zalo.svg.png" alt="Zalo" width="25">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Telegram_logo.svg/2048px-Telegram_logo.svg.png" alt="telegram" width="25">
        </div>
    </footer>
    <section class="infor">
        <span>Trường Đại Học Quốc Tế BẮc Hà</span>
        <span>© Bản quyền thuộc về Nhóm 3 Thiết kế Website Công Nghệ Thông Tin(khoa công nghệ phần mềm)</span>
        <span>Thông tin liên hệ Email: hootudung@gmail.com</span>
    </section>
    <script src="../../public/javascript/address.js"></script>
</body>
</html>