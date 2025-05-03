<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortofolioModel extends Model
{
  protected $table = 'portofolio';
  protected $fillable = [
        'slug', 'title', 'sort_desc', 'category', 'instansi',
        'client', 'date', 'url', 'head_desc', 'desc', 'img'
    ];

    protected $appends = ['gambar'];

public function getGambarAttribute()
{
    $gambar = array_filter(
        explode('<break>', $this->img),
        fn($val) => trim($val) !== ''
    );
    $gambar = array_values($gambar);
    shuffle($gambar);
    return $gambar;
}

}
