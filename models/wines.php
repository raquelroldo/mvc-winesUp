<?php
    require("base.php");

class Wines extends Base {

    public function getList() {
        $query = $this->db->prepare("
            SELECT name, type
            FROM wines
        ");

        $query->execute();

        $wines = $query->fetchAll(PDO::FETCH_ASSOC);
        return $wines;
    }
}