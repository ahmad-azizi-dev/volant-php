<?php

namespace App\Models;

use PDO;

/**
 * Post model
 *
 */
class Post extends \Core\Model
{

    /**
     * Get all the posts as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
    
        try {

            $db = static::getDB();

            $stmt = $db->query('SELECT id, title, content, created_at FROM posts ORDER BY created_at');

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
