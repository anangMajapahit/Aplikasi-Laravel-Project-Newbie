<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Analisis UTAUT Teknologi 5G Lingkup Public University",
            "slug" => "post-pertama",
            "author" => "Anang Marsyal",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Numquam assumenda sed perferendis dolorum esse, delectus voluptatum ratione, non velit, excepturi accusantium dicta tenetur nemo.
            Repudiandae deserunt nobis numquam. Facilis velit beatae, excepturi voluptates deleniti voluptatem repellat odit veritatis maiores corporis, commodi, illo explicabo nam placeat. 
            Quidem aspernatur voluptate consequatur quisquam harum illo unde, sed laboriosam distinctio nesciunt eius ipsa possimus error corporis rerum molestias veniam. 
            Nihil reiciendis nemo et hic temporibus, eligendi nobis sint id ipsam ullam ab in quod."
        ],
        [
            "title" => "Analisis Penggunaan Enterprice Resource Planing Dalam Sebuah Vendor",
            "slug" => "post-kedua",
            "author" => "Aan Marsyal",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Numquam assumenda sed perferendis dolorum esse, delectus voluptatum ratione, non velit, excepturi accusantium dicta tenetur nemo.
            Repudiandae deserunt nobis numquam. Facilis velit beatae, excepturi voluptates deleniti voluptatem repellat odit veritatis maiores corporis, commodi, illo explicabo nam placeat. 
            Quidem aspernatur voluptate consequatur quisquam harum illo unde, sed laboriosam distinctio nesciunt eius ipsa possimus error corporis rerum molestias veniam. 
            Nihil reiciendis nemo et hic temporibus, eligendi nobis sint id ipsam ullam ab in quod."
        ]
        ];

        public static function all(){
            return collect(self::$blog_posts);
        }

        public static function find($slug){
            $posts = static::all();
            return $posts->firstWhere('slug',$slug);
        }
    }