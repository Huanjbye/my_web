<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký tài khoản || F-One</title>
    <link rel="stylesheet" href="../../public/CSS/trang_singup.css">
    <link rel="icon" href="https://hydrofoilshop.com.au/cdn/shop/files/F-One_Logo_wing_foil_hydrofoiling_320x320.png?v=1669717178">
</head>
<body>
    <div class="singup">
        <header>
            <div class="logo">
                <img src="https://www.infexion.eu/wp-content/uploads/2018/01/f-one-logo.png" alt="F-One">
            </div>
            <div class="title">
                <h2>Đăng Ký</h2>
            </div>
            <div class="help">
                <a href="#">Bạn cần giúp đỡ ?</a>
            </div>
        </header>
        <div class="container">
            <form class="frmsingup" onsubmit="singup()">
                <div class="dangky">    
                    <h2>Đăng Ký</h2>
                </div>
                <div class="phone-number">
                    <input type="text" id="name" class="phone-number__items" name="name" placeholder="Nhập Email/Số điện thoại/Tên đăng nhập">
                    <img class="icon-user" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAhFBMVEX///8AAADPz8/5+fnv7+/z8/Pd3d18fHzIyMjr6+tRUVFkZGSqqqr8/Pzg4ODj4+O9vb2xsbHX19enp6cSEhIXFxe/v79DQ0PFxcVsbGw1NTVxcXEvLy+2trYiIiIoKCg7OzuFhYVaWlqQkJCfn58LCwuWlpaSkpJISEh6enoWFhZnZ2fTxDlKAAAF7ElEQVR4nO2diVYiOxCGCb2xyi4Mi9KMoozv/37XvoiK9FJJqroqbb4H4NR/OiSpNa2Wx+PxeDwej8fj8Xg8Ho8ewyCMp+1pHAZDblPwieJZ0purC/NeMosjbqPwCHf9B3XLQ38XcpuGQueQo+7CocNtni3BbFGiL2MxCLiNtGA4qNJ31ujsxrPaAvRlrFfcphoR9YH6MvoObqxjDX0Z99wG65JqClQq5TZZi+hVW6BSrw5tqvG8Wk8O8ztuw6G0jfRlTLlNh9ExFqhUm9t4COZf0BGJUyuBSsXcAqoILQWqZ+H+xnBtq1DtuTWU88daoFIbbhFlzBAEKjXjllFMjCJQKbkn/yOSwi23kCL+IglU6i+3lHyw1miGzFOxLOKky4FbTB66Lm85Eh3ivJCoOY/ccm4ZoApUasIt6AZI3FCHBbegn2B/QnkfcY+ucM8t6Robv74IWSkNnegvlDduUd/pEghUSpIv/ESi8Ilb1jewnIprBLkYIxKBSo24hX1Cs0glLdMlkcJXbmEXaHbSDCm76YpMoZTccEqmUEpOsUemsMct7Uz4TKZwLuOPiBmB+omMyCm+a/iFDCcRL0x6i4zAKUY2pggZWRr7hFoxe25xGUNCgUpxq8ugVSihqI/uVprR5ZbXsi9NKEdChQ3dvTtDQsANNyPzkzG3vHd2pAp33PLemXiFzits/iql3Wkk5IKbf1o0/8Rv/q2t+Tfv5ntPzfeAf0EUo/mRqOZHE+8IFcrIkTY/qt/8zEwrJVMoJbtGd/eWcO/OaH6Wm6xSYckt7JPmV5tQVQxJcJ0+aHzV1y+o3LPuOsxF1BSCxlfQ/oIq6OZXshPE9iVEu6/A7ih54BZ0A7anP+AWdEvjO7ta96gKJWRkbmh8hyVqjaKMmsQbjmgCj9xSioDO9qpizS2kkOZPHECaGiHwKPxigyBQRjamiKH9DXwvISlagr0vLMrvzcN2txG8y1ywm4QlofaiEhuJDoz6yjCvsHHiC2aMzOKnWxn5UBCRSUqxJ34XvSLVFiglVwhmpZf7fpbSTKlBpFNn88etFXphBa2WcnRScgYsiiqjaMaUQZVXvBXtK4HolGVt+sKSE4aEu3y3cdOQlwPOxJPku+u4TyYyh85ZEoym7XZ7OnJorLXH4/F4EAmiKIwinFMgas+OaZIeZ51ISug0Pn68djTvJTvLWrRg17+6GEgITd3/eMuiZ1NEMbmJ8CyZ39kJnnJqMJamIbNpfqHqC597PEoLXIY3k8j13VvBrymV8tRhxmWJpo3uxbr019411u+GdKsSaVoPjpU+XXam5gahKKm0SKnFE2xxdfP+zDnUGO0YgitmD7OqOPZoBo8eL+s6O8AxtLNZp/ui/2Q8PmlmVJM6XEut18Y+WCyTwbj96fkGo/Z4kCz/6f+QmtMXS1H24oHo037GLmZplyELyvgc7YQIMHRJHIxaEhSWNOf/HVZRFwYUK5V2woc2+O0mlB3bRmD/GYvv/WwcMI8No7w8OUs8vzGkHAxhwRZLYpeuHd2SR5xTg6p/EoMHDIkjkwtybTzaL1TCiQkoWJejRritMARYzl0ITB72rRm7qmmK3lB0bLozUm7jYZhfw4W4g9WYlm1SDlvHZWm2oQZC72p5mDkaYjx6CCZ/RWEebxX6rlTEbbImJ22FlHPmSNCN+ON29dbBWm8/DWjmsZCi9xQ0XsNrjehsNq5tM2d0DsUTt7FmwLP9kuMWZcA/oqOfUD1DQxq0s48pgWb6ndxI/wc6eMmByEURsFM/4DbTAthuSjtknRZYA5UzsYscYFsNe7WFBTCFtE9y0AKrbXXPcfoC5iS6emfLgF1qaJ8CIOUB6AU7EcrPJYEJdHirgcYUI+wJgXUBD9W8cJtqCDxSE8y5bTVCZ+6wm0eiVsQUUqgujRcdgZTvHVChO3Z46JrEvqbAlmuJC+hZfwXOAL16MGw26bpyfXszr/2aurBUN3bzs8LdSXI6f31Cma0RdLNhD/KYdv34CY/H4/F4PB6Px+PxeH4P/wHRfHOenj42awAAAABJRU5ErkJggg==" alt="" width="22">
                </div>
                <div class="phone_password">
                    <input type="password" id="password" name="password" class="phone-password__items" placeholder="Nhập mật khẩu">
                    <img class="icon-password" src="https://icons.veryicon.com/png/o/miscellaneous/face-monochrome-icon/password-76.png" alt="" width="22">
                    <button></button>
                </div>
                <div class="phone_password">
                    <input type="password" id="password2" name="password2" class="phone-password__items" placeholder="Nhập lại mật khẩu">
                    <img class="icon-password" src="https://icons.veryicon.com/png/o/miscellaneous/face-monochrome-icon/password-76.png" alt="" width="22">
                    <button></button>
                </div>
                <button class="button-dangky">Đăng ký</button>
                
                <div class="title-different">
                    <div class="dash"></div>
                    <div class="letter"> HOẶC</div>
                    <div class="dash"></div>
                </div>
                <div class="link-items">
                    <button class="link-items__facebook">
                        <div class="link-facebook_icon">
                            <img src="https://taphoammo.net/img/clone-fb-zin-new-or-reg-vai-ngay-veri-hotmail-name-viet-avt-bia-2fa-cookie_214331.png" alt="icon-facebook" width="20">
                        </div>
                        <div class="link-facebook_span">Facebook</div>
                    </button>
                    <button class="link-items__google">
                        <div class="link-google_icon">
                            <img src="https://cdn.pixabay.com/photo/2021/05/24/09/15/google-logo-6278331_960_720.png" alt="google" width="20">
                        </div>
                        <div class="link-google_span">Google</div>
                    </button>
                </div>
                <div class="frm_register">
                    <div class="want-know">
                        <a href="#">Bạn đã có tài khoản F.one?</a>
                    </div>
                    <div class="link-register">
                        <a href="trang_login.php">Đăng nhập</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="../../public/javascript/main.js"></script>
</body>
</html>