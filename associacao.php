<?php

class Category
{
    public $name;
}

class Post
{
    public $title;
    public $content;
    private $category;

    public function setCategory(Category $category)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }
}

$php = new Category;
$php->name = 'PHP';

$post01 = new Post;
$post01->content = 'PHP é legal';
$post01->content = '....';
$post01->setCategory($php);
$category = $post01->getCategory();
echo $category->name;

/* echo $post01->title;
echo $post01->content; */


