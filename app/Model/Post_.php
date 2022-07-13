<?php

namespace App\Models;

class Post {
  private static $tulisan_blog = [
    [
      "title" => "Curahan hati seorang Wanita",
      "slug" => "curahan-hati-seorang-wanita",
      "penulis" => "Dini agustina",
      "isi" => "Malam ini serasa sunyi tanpa kehadiran dirimu"
      ],
      [
        "title" => "Curhatan seorang Wanita",
        "slug" => "curhatan-seorang-wanita",
        "penulis" => "Amanda dwi",
        "isi" => "entah mengapa kamu membuat ku slalh berpikir apakah kamu juga menyukai ku?",
        ],
    ];
    
    public static function all() {
      
      return collect(self::$tulisan_blog);
    }
    
    public static function find($slug) {
      $posts = static::all();
      
    
    return $posts->firstWhere('slug', $slug);
    }
}