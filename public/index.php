<?php
// Start the session (if needed)
session_start();

// Get the requested URL and split it into components
$request = $_SERVER['../my_web/app/controllers/TrangchuController.php'];
$request = trim($request, '/');
require_once '.././app/init.php';

$init = new Core();
// Basic routing logic
switch ($request) {
    case '':
    case 'trangchu':
        require __DIR__ . './app/controllers/TrangchuController.php';
        break;

    case 'trang_dien_thoai':
        require __DIR__ . '/app/controllers/TrangDienThoaiController.php';
        break;

    case 'gio_hang':
        require __DIR__ . '/app/controllers/GioHangController.php';
        break;
    case 'introduce':
        require __DIR__ . './app/controllers/IntroduceController.php';
        break;
    case 'may_cu':
        require __DIR__ . './app/controllers/MayCuController.php';
        break;
    case 'smartwatch':
        require __DIR__ . './app/controllers/SmartwatchController.php';
        break;
    case 'trang_iBad':
        require __DIR__ . './app/controllers/TrangIpadController.php';
        break;
    case 'trang_login':
        require __DIR__ . './app/controllers/TrangLoginController.php';
        break;
    case 'trang_singup':
        require __DIR__ . './app/controllers/TrangSignupController.php';
        break;
    case 'trang_sanpham':
        require __DIR__ . './app/controllers/TrangSanPhamController.php';
        break;
        

    
    default:
        http_response_code(404);
        echo "Page không hoạt động";
        break;
}
?>
