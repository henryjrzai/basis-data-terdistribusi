<?php
require ('../mongodb_connection.php');
if (isset($_GET['nim'])){
    $nim = $_GET['nim'];
    $collection = $database->mahasiswa;
    $result = $collection->findOne(['nim' => $nim]);
    try {
        $collection->deleteOne(['nim' => $nim]);
        header('Location: data_mahasiswa.php');

    } catch (Exception $e) {
        echo "Error updating data: " . $e->getMessage();
    }
}