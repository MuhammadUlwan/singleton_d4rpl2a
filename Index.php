<?php
require_once 'Player.php';

// Membuat objek Player (transaksi database)
$player = new Player();

// Jika form disubmit untuk menambahkan player baru
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $team = $_POST['team'];
    $gaji = $_POST['gaji'];
    $player->addPlayer($nama, $team, $gaji);
}

// Jika terdapat parameter delete dalam URL
if (isset($_GET['delete'])) {
    $deleteId = $_GET['delete'];
    $player->deletePlayer($deleteId);
}

// Tampilkan tabel data player
$players = $player->getAllPlayers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Player Data</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Player Data</h2>
    <form action="" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <label for="team">Team:</label>
        <input type="text" id="team" name="team" required>
        <label for="gaji">Gaji:</label>
        <input type="number" id="gaji" name="gaji" required>
        <button type="submit">Tambah Player</button>
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Team</th>
            <th>Gaji</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($players as $player) : ?>
            <tr>
                <td><?php echo $player['id']; ?></td>
                <td><?php echo $player['nama']; ?></td>
                <td><?php echo $player['team']; ?></td>
                <td><?php echo $player['gaji']; ?></td>
                <td><a href="?delete=<?php echo $player['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus pemain ini?')">Hapus</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>
