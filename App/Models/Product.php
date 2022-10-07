<?php
// Định nghĩa namespace theo tên thư mục từ ngoài vào trong;
namespace App\Models;
// khi sử dụng product ở chỗ khác -> use App\Models\Product;
use App\Models\BaseModel;

class Product extends BaseModel
{
     public $table = 'products';
}
