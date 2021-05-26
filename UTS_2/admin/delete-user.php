<?php
session_start();
if (!isset($_SESSION["name"])) {
    echo "<script>document.location.href='../login.php'</script>";
    // header("Location: ../login.php");
    exit;
}
?>
<?php
require_once "../koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM user WHERE ID='$id'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "<script>document.location.href='user.php'</script>";
        // header('Location: user.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
