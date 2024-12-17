<?php

class Post
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllPosts()
    {
        try {
            $query = "SELECT * FROM posts";
            $stmt = $this->db->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Erro ao buscar posts: " . $e->getMessage());
        }

    }
}