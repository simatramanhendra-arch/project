<?php
include 'config.php';
header('Content-Type: application/json');

$action = $_GET['action'] ?? '';

if($action == 'insert_perm'){
    $stmt = $conn->prepare("INSERT INTO permintaan(nama,departemen,jabatan,spesifikasi,waktu) VALUES(?,?,?,?,NOW())");
    $stmt->bind_param("ssss", $_POST['nama'], $_POST['departemen'], $_POST['jabatan'], $_POST['spesifikasi']);
    $stmt->execute();
    echo json_encode(["status"=>"OK"]);
}
elseif($action == 'get_perm'){
    $result = $conn->query("SELECT * FROM permintaan ORDER BY id DESC");
    echo json_encode($result->fetch_all(MYSQLI_ASSOC));
}
// Aksi lain: insert stok, aset, serah_terima dll...
?>
