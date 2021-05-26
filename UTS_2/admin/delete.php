<?php
session_start();
if (!isset($_SESSION["name"])) {
    header("Location: ../login.php");
    exit;
}
?>
<?php
require_once "../koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM menu WHERE ID='$id'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: admin.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
?>