<?php
require("base.php");

class Users extends Base {
   
    public function register($data) {
        $data = $this->sanitizer($data);

        if(
            !empty($data["name"]) &&
            mb_strlen($data["password"]) > 5 &&
            mb_strlen($data["password"]) <= 1000 &&
            $data["password"] === $data["rep_password"] &&
            filter_var($data["email"], FILTER_VALIDATE_EMAIL)
        ) {
            $query = $this->db->prepare("
                INSERT INTO users
                (name, password, email, admin, birth_date)
                VALUES(?, ?, ?, 0, ?)
            ");

            $query->execute([
                $data["name"],
                password_hash($data["password"], PASSWORD_DEFAULT),
                $data["email"],
                $data["birth_date"]
            ]);

            return true;
        }

        return false;
    }

    public function login($data) {
        $data = $this->sanitizer($data);

        if(
            !empty($data["email"]) && 
            !empty($data["password"]) &&
            mb_strlen($data["password"]) <= 1000
        ) {

            $query = $this->db->prepare("
                SELECT user_id, password
                FROM users
                WHERE email = ?            
            ");

            $query->execute([
                $data["email"]
            ]);

            $user = $query->fetch( PDO::FETCH_ASSOC );

            if(!empty($user) && password_verify($data["password"], $user['password'])) {
                $_SESSION["user_id"] = $user["user_id"];

                return true;
            }

            return false;

        }
    }

}