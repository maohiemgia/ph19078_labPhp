<?php

namespace App\Controllers;

use eftec\bladeone\BladeOne;

class BaseController
{
     // function giúp hiển thị views theo cách của thư viện BladeOne thay vì dùng include_once để gọi views
     // render (tên file, dữ liệu)
     // tên file là tiền tố của file view: post.blade.php -> post
     // dữ liệu sẽ ở dạng mảng
     // nếu $viewName trỏ vào từ thư mục cha, ví dụ product/index.php -> 'product.index'
     public function render($viewName, $data)
     {
          $views = './App/Views';  // mvc-by-namespace/App/Views
          $cache = './cache';      // mvc-by-namespace/cache -> nơi thư viện lưu cache -> cần cấp quyền ghi file
          // -> máy Mac cấp quyền ghi file cho folder cache -> mở terminal gõ: chmod -R 777 cache

          $blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.
          echo $blade->run($viewName, $data); // it calls mvc-by-namespace/App/Views/$viewName.blade.php
     }
}

