<?php
const BASE_URL = "http://localhost:3000/";

// require autoload.php của composer giúp auto require các file trong thư mục "App\"
require_once './vendor/autoload.php';
require_once './configs/router.php';

use App\Controllers\ProductController;

// Cần autoload để tránh việc require quá nhiều ở code mất thời gian công sức
// cần composer để việc autoload có thể làm tự động
// getcomposer.org
