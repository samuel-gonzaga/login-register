<?php
require_once __DIR__ . '/../models/Post.php';
class HomeController
{
    private $postModel;

    public function __construct($db)
    {
        $this->postModel = new Post($db);
    }

    public function index()
    {
        $posts = $this->postModel->getAllPosts();
        include __DIR__ . "/../views/home.php";
    }
}