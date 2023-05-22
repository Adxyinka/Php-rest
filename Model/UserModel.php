<?php
 include "model/database.php";
class UserModel extends Database
{
    public function getUsers($limit)
    {
        return $this->select("SELECT * FROM adeyinka.users ORDER BY user_id ASC LIMIT ?", ["i", $limit]);
    }
}