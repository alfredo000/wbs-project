<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Alfredo Hutagalung",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum amet sunt nesciunt laudantium culpa quibusdam dicta atque totam sit enim consequatur expedita odit qui deserunt cumque, laborum inventore doloribus corrupti animi magni eos obcaecati delectus? Labore, ullam non facilis voluptatibus veritatis vero nulla accusamus, id enim molestiae nam porro, totam quo doloremque. Voluptates voluptatibus mollitia neque nostrum! Magnam necessitatibus assumenda, voluptatibus, aliquid veritatis libero voluptas reprehenderit reiciendis eveniet voluptate minus odit ipsum. Facilis laborum molestias ipsum temporibus, molestiae id eum."
        ],
        [
            "title" => "Judul Post Jeremy",
            "slug" => "judul-post-kedua",
            "author" => "Jeremy Hutagalung",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex fugit nobis impedit similique nulla officia repellendus molestiae fugiat exercitationem, quos qui, minus eius facere nihil neque temporibus vitae consectetur, expedita aspernatur in! Officiis ducimus omnis, delectus quidem ipsam asperiores maiores sequi dolore nam repellat minus accusantium eveniet, fugiat nostrum beatae voluptatibus, itaque maxime rerum amet molestiae obcaecati animi reiciendis illum earum! A unde nihil fugiat dignissimos ullam! Laboriosam quaerat, sunt ducimus, aliquam adipisci repellendus accusantium nam perferendis cum culpa rem. Vel voluptatem id placeat quo, tempora odit delectus ex est laudantium facere soluta neque et expedita distinctio ratione magnam minima."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all(); 
        return $posts->firstWhere('slug',$slug);
    }
}

