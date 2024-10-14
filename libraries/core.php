<?php
class Core {
    protected $currentController = 'Pages'; // Controller mặc định
    protected $currentMethod = 'index';     // Phương thức mặc định
    protected $params = [];                 // Tham số

    public function __construct() {
        $url = $this->getUrl();

        // Tìm kiếm controller phù hợp trong thư mục controllers
        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
        }

        // Yêu cầu nạp file controller
        require_once '../app/controllers/' . $this->currentController . '.php';

        // Khởi tạo controller
        $this->currentController = new $this->currentController;

        // Kiểm tra xem phương thức trong URL có tồn tại trong controller hay không
        if (isset($url[1])) {
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }

        // Nhận các tham số còn lại trong URL
        $this->params = $url ? array_values($url) : [];

        // Gọi phương thức với tham số
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    // Hàm xử lý URL
    public function getUrl() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
