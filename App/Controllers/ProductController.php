<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Product;

class ProductController extends BaseController
{
     public function getProducts()
     {
          // hiển thị danh sách sản phẩm bằng render() của bladeOne
          $viewName = 'product.index'; //mvc-by-namespace/App/Views/product/index.blade.php
          $data = [
               'products' => [
                    ['id' => 1, 'name' => 'coca', 'price' => 10000, 'img' => 'default-img.jpg', 'stock'=>'500'],
                    ['id' => 2, 'name' => 'pepsi', 'price' => 10000, 'img' => 'default-img.jpg', 'stock'=>'500'],
                    ['id' => 3, 'name' => '7up', 'price' => 10000, 'img' => 'default-img.jpg', 'stock'=>'500'],
                    ['id' => 4, 'name' => 'bia HN', 'price' => 30000, 'img' => 'default-img.jpg', 'stock'=>'500'],
                    ['id' => 5, 'name' => 'bia SG', 'price' => 30000, 'img' => 'default-img.jpg', 'stock'=>'500']
               ]
          ];

          return $this->render($viewName, $data);
     }
     public function getProduct($id)
     {
          // hiển thị danh sách sản phẩm bằng render() của bladeOne
          $viewName = 'product.product-detail'; //mvc-by-namespace/App/Views/product/index.blade.php
          $dataFromDB = [
               ['id' => 1, 'name' => 'coca', 'price' => 10000, 'img' => 'default-img.jpg', 'stock'=>'500'],
               ['id' => 2, 'name' => 'pepsi', 'price' => 10000, 'img' => 'default-img.jpg', 'stock'=>'500'],
               ['id' => 3, 'name' => '7up', 'price' => 10000, 'img' => 'default-img.jpg', 'stock'=>'500'],
               ['id' => 4, 'name' => 'bia HN', 'price' => 30000, 'img' => 'default-img.jpg', 'stock'=>'500'],
               ['id' => 5, 'name' => 'bia SG', 'price' => 30000, 'img' => 'default-img.jpg', 'stock'=>'500']
          ];
          $data = [
               'product' => []
          ];

          foreach ($dataFromDB as $key) {
               if ($key['id'] == $id) {
                    $data['product'] = $key;
                    break;
               }
          }

          return $this->render($viewName, $data);
     }
     public function createProduct()
     {
          // hiển thị danh sách sản phẩm bằng render() của bladeOne
          $viewName = 'product.product-create'; //mvc-by-namespace/App/Views/product/index.blade.php
          $data = [];

          return $this->render($viewName, $data);
     }
}
