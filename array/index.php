<?php

class Post
{
        public $title;

        public $author;

        public $published;

        public function __construct($title,$author,$published)

        {
            $this->title = $title;
            $this->author = $author;
            $this->published = $published;

        }
}


$posts = [
        new Post('My First Post','JW',true),
        new Post('My Second Post','JW',true),
        new Post('My Third Post','AW',true),
        new Post('My Fourth Post','TR',false)
];

//$unpublishedPosts = array_filter($posts, function ($post) {
 //       return ! $post->published;
//});


//$publishedPosts = array_filter($posts, function ($post) {
 //       return  $post->published;
//});

//foreach ($posts as $post) {
//    $post->published = true;
//}




//$modified = array_map(function ($post) {
 //   return ['title' => $post->title];            

//},$posts);

//foreach ($posts as $index => $post)
//{
 //   $posts[$index] = (array) $post;
//}

$posts = array_map(function ($post) {
    return (array) $post;
},$posts);

var_dump($posts);


$authors = array_column($posts, 'author');
var_dump($authors);