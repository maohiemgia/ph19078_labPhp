<!-- đây là nơi định nghĩa router -->
<?php
// sử dụng thư viện PhRoute

use App\Controllers\Controller;
use App\Controllers\ProductController;
use Phroute\Phroute\RouteCollector;
// khởi tạo đối tượng quản lý danh sách các đường dẫn
$router = new RouteCollector();

// $router->phuong_thuc('duong dan', function() {return xxx;});
// $router->phuong_thuc('duong dan', [Controller, 'ten ham']);
// phương thức: get, post, put, patch, delete, any
$router->get('/', [Controller::class, 'homePage']);
$router->get('/products', [ProductController::class, 'getProducts']);
$router->get('/products-detail/{id}', [ProductController::class, 'getProduct']);
$router->get('/products/create', [ProductController::class, 'createProduct']);

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

// lấy ra đường dẫn hiện tại người dùng đang gõ vào bằng ?url=ds-san-pham
// Nếu kết hợp thêm file .htaccess có thể gõ luôn /ds-san-pham thì webserver sẽ tự hiểu sang đường dẫn bên trên
$url = isset($_GET['url']) ? ($_GET['url']) : '/';
// phát đi sự kiện đọc đường dẫn để route biết đang gọi đến hàm nào
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
// Hiển thị kết quả return của hàm được gọi
echo $response;
