<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Article;

class Author extends Model
{
    public $timestamps = false; // để khi chèn dl bỏ qua 2 cột tgian này 
    protected $table = 'tacgia';
    use HasFactory;

    public function articles(){
        return $this->hasMany(Article::class, 'ma_tgia');
    }
}
