<?php

require_once 'Database.php';

class Player
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    // Metode untuk menambahkan pemain baru
    public function addPlayer($nama, $team, $gaji)
    {
        $query = "INSERT INTO player (nama, team, gaji) VALUES (:nama, :team, :gaji)";
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':team', $team);
        $stmt->bindParam(':gaji', $gaji);
        $stmt->execute();
    }

    // Metode untuk mengambil semua data pemain
    public function getAllPlayers()
    {
        $query = "SELECT * FROM player";
        $stmt = $this->db->getConnection()->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Metode untuk menghapus pemain berdasarkan ID
    public function deletePlayer($id)
    {
        $query = "DELETE FROM player WHERE id = :id";
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}

?>
