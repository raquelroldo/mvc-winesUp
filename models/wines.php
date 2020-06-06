<?php
    require("base.php");

class Wines extends Base {

    public function getList() {
        $query = $this->db->prepare("
            SELECT name, type, wine_id, image_path
            FROM wines
        ");

        $query->execute();

        $wines = $query->fetchAll(PDO::FETCH_ASSOC);
        return $wines;
    }

    public function getItem($id) {
        $query = $this->db->prepare("
            SELECT wine_id, name, type, region, year, producer, alcohol, grapes, flavours, image_path, consumption
            FROM wines 
            WHERE wine_id = ?
        ");

        $query->execute([$id]);

        $wine = $query->fetchAll(PDO::FETCH_ASSOC);
        return $wine;
    }

    public function create($data, $file) {
        $data = $this->sanitizer($data);
        
        if(
            !empty($data["name"]) &&
            !empty($data["type"]) &&
            !empty($data["region"]) &&
            !empty($data["year"]) &&
            !empty($data["grapes"]) &&
            !empty($data["producer"]) &&
            !empty($data["alcohol"]) &&
            !empty($_SESSION["user_id"])
            ) {
                
            $query = $this->db->prepare("
                INSERT INTO wines
                (name, type, region, year, grapes, producer, alcohol, 
                    flavours, image_path, consumption, user_id)
                VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
            ");
            
            if (isset($file["image_path"]["name"])) {
                $image_file = "assets/images/".basename($file["image_path"]["name"]);
            }

            $status = $query->execute([
                $data["name"],
                $data["type"],
                $data["region"],
                $data["year"],
                $data["grapes"],
                $data["producer"],
                $data["alcohol"],
                $data["flavours"] ?? "",
                $file["image_path"] ? $image_file : "",
                $data["consumption"] ?? "",
                $_SESSION["user_id"]
            ]);

            return $status;
        }
        else {
            return false;
        }
    }

    public function update($data, $file) {
        $data = $this->sanitizer($data);

        if(
            !empty($data["name"]) &&
            !empty($data["type"]) &&
            !empty($data["region"]) &&
            !empty($data["year"]) &&
            !empty($data["grapes"]) &&
            !empty($data["producer"]) &&
            !empty($data["alcohol"]) &&
            !empty($_SESSION["user_id"])
        ) {
            $query = $this->db->prepare("
                UPDATE wines
                SET 
                    name = ?, 
                    type = ?, 
                    region = ?, 
                    year = ?, 
                    grapes = ?, 
                    producer = ?, 
                    alcohol = ?, 
                    flavours = ?, 
                    image_path = ?, 
                    consumption = ?, 
                    updated_by = ?

                WHERE wine_id = ?
            ");

            if (isset($file["image_path"]["name"])) {
                $image_file = "assets/images/".basename($file["image_path"]["name"]);
                $old_img = $data["old_img"];
                if ($image_file != "assets/images/") {
                    move_uploaded_file($_FILES["image_path"]["tmp_name"], $image_file);
                } else {
                    $image_file = $old_img;
                }
            }

            $query->execute([
                $data["name"],
                $data["type"],
                $data["region"],
                $data["year"],
                $data["grapes"],
                $data["producer"],
                $data["alcohol"],
                $data["flavours"] ?? "",
                $file["image_path"] ? $image_file : "",
                $data["consumption"] ?? "",
                $_SESSION["user_id"],
                $data["wine_id"]
            ]);

            return true;
        }
        else {
            return false;
        }
    }

    public function delete($data) {
        $query = $this->db->prepare("
            DELETE FROM wines
            WHERE wine_id = ?
        ");

        return $query->execute([
            $data["wine_id"]
        ]);
    }
}