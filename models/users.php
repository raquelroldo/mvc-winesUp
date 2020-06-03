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
                SELECT user_id, password, name, admin
                FROM users
                WHERE email = ?  
            ");

            $query->execute([
                $data["email"]
            ]);

            $user = $query->fetch( PDO::FETCH_ASSOC );

            if(!empty($user) && password_verify($data["password"], $user["password"])) {
                $_SESSION["user_id"] = $user["user_id"];
                $_SESSION["user_name"] = $user["name"];
                $_SESSION["is_admin"] = $user["admin"];

                return true;
            }

            return false;
        }
    }

    public function getList() {
        $query = $this->db->prepare("
            SELECT name, user_id
            FROM users
        ");

        $query->execute();

        $users = $query->fetchAll( PDO::FETCH_ASSOC );
        
        return $users;
    }

    public function getDetail($id) {
        $query = $this->db->prepare("
            SELECT name, user_id, email, birth_date
            FROM users
            WHERE user_id = ?
        ");

        $query->execute([$id]);

        return $query->fetch( PDO::FETCH_ASSOC );
    }

    public function create($data) {
        $data = $this->sanitizer($data);

        if(
            !empty($data["name"]) &&
            !empty($data["password"]) &&
            !empty($data["email"]) &&
            mb_strlen($data["password"]) > 5 &&
            mb_strlen($data["password"]) <= 1000 &&
            filter_var($data["email"], FILTER_VALIDATE_EMAIL)
        ) {

            $query = $this->db->prepare("
                INSERT INTO users
                (name, password, email, admin, birth_date)
                VALUES(?, ?, ?, ?, ?)
            ");

            $status = $query->execute([
                $data["name"],
                password_hash($data["password"], PASSWORD_DEFAULT),
                $data["email"],
                $data["admin"] ? 1 : 0,
                $data["birth_date"]
            ]);
            
            return $status;
        }
        else {
            return false;
        }
    }

    public function update($data) {
        $data = $this->sanitizer($data);
        if( 
            !empty($data["password"]) &&
            !empty($data["email"]) &&
            mb_strlen($data["password"]) > 5 &&
            mb_strlen($data["password"]) <= 1000 &&
            filter_var($data["email"], FILTER_VALIDATE_EMAIL)
        ) {
            $query = $this->db->prepare("
                UPDATE
                    users
                SET
                    password = ?,
                    email = ?,
                    name = ?,
                    birth_date = ?,
                    admin = ?
                WHERE 
                    user_id = ?
            ");

            $result = $query->execute([
                password_hash($data["password"], PASSWORD_DEFAULT),
                $data["email"],
                $data["name"],
                $data["birth_date"],
                $data["admin"] ? 1 : 0,
                $data["user_id"]
            ]);
            return $result;
        }
        else {
            return false;
        }
    }

    public function delete($data) {
    
        $query = $this->db->prepare("
            DELETE FROM users
            WHERE user_id = ? AND
                user_id = ?
        ");

        return $query->execute([ $data["id"],  $data["user_id"] ]);

    }

}