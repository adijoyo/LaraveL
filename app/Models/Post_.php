<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
            [
                "title" => "Wayne Chemical",
                "slug" => "Wayne-Chemical",
                "author" => "Thomas Wayne",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eaque voluptatem debitis, voluptate maxime ratione, aut minima animi, quam quod repudiandae nulla commodi itaque quia consequuntur aliquam explicabo velit amet autem necessitatibus voluptas. Consequuntur molestiae consequatur cum doloribus? Voluptate dolore pariatur animi distinctio esse dicta sapiente velit assumenda odit porro nostrum veniam a officiis autem libero, modi qui similique. Amet rem porro tempora aliquam, vitae nostrum possimus ullam, consequatur, modi incidunt laborum dolore odio harum neque! Nihil magnam id quisquam."
            ],
            [
                "title" => "Wayne Manufacturing",
                "slug" => "Wayne-Manufacturing",
                "author" => "Bruce Wayne",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eaque voluptatem debitis, voluptate maxime ratione, aut minima animi, quam quod repudiandae nulla commodi itaque quia consequuntur aliquam explicabo velit amet autem necessitatibus voluptas. Consequuntur molestiae consequatur cum doloribus? Voluptate dolore pariatur animi distinctio esse dicta sapiente velit assumenda odit porro nostrum veniam a officiis autem libero, modi qui similique. Amet rem porro tempora aliquam, vitae nostrum possimus ullam, consequatur, modi incidunt laborum dolore odio harum neque! Nihil magnam id quisquam."
            ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstwhere('slug', $slug);
    }
}
