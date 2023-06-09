<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Author;
use App\Models\Category;

class Article extends Model
{
    public $timestamps = false; // để khi chèn dl bỏ qua 2 cột tgian này 
    
    protected $table = 'baiviet';
    use HasFactory;

    public function author(){
        return $this->belongsTo(Author::class, 'ma_tgia');
    }

    public function category(){
        return $this->belongsTo(Category::class,'ma_tloai');
    }
}
