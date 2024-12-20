<?php
class HomeController extends Controller
{
    public function index()
    {
        require_once __DIR__ . '/../models/Post.php';
        $postsModel = new Post($this->db);
        $posts = $postsModel->getAllPosts();
        return $posts;
    }
}