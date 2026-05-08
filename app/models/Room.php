<?php

require_once '../core/Model.php';

class Room extends Model {
    public function getAll() {
        $result = $this->db->query("SELECT * FROM rooms");
        return $result;
    }

    public function create($name, $price, $capacity) {
        $stmt = $this->db->prepare("INSERT INTO rooms (name, price, capacity) VALUES (?, ?, ?)");
        $stmt->bind_param("sdi", $name, $price, $capacity);
        return $stmt->execute();
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM rooms WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function update($id, $name, $price, $capacity) {
        $stmt = $this->db->prepare("UPDATE rooms SET name = ?, price = ?, capacity = ? WHERE id = ?");
        $stmt->bind_param("sdii", $name, $price, $capacity, $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM rooms WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }


}