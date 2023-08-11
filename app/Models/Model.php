<?php
namespace app\Models;

class Model
{
    public $db;
    public function __construct() {
        $this->db = new Db;
    }

    public function getAllPosts($Routes)
    {
        // Your logic to fetch posts from the database
        return $Routes;
    }
}
