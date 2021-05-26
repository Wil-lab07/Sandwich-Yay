<?php
// session_start();
if (!isset($_SESSION["name"])) {
    echo "<script>document.location.href='../login.php'</script>";
    // header("Location: ../login.php");
    exit;
}
?>


<?php
require '../koneksi.php';

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function add($data)
{
    global $conn;
    $namaMenu = htmlspecialchars($data["NamaMenu"]);
    $deskripsi = htmlspecialchars($data["Deskripsi"]);
    $harga = htmlspecialchars($data["Harga"]);
    $kategori = htmlspecialchars($data["Kategori"]);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO menu VALUES('', '$namaMenu', '$deskripsi', '$harga', '$kategori', '$gambar');";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES['Gambar']['name'];
    $ukuranFile = $_FILES['Gambar']['size'];
    $error = $_FILES['Gambar']['error'];
    $tmpName = $_FILES['Gambar']['tmp_name'];

    if ($error === 4) {
        echo "<script>
                alert('Tolong masukkan gambar!');
              </script>";
        return false;
    }
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('File harus berupa gambar!');
              </script>";
    }

    if ($ukuranFile > 1000000) {
        echo "<script>
                alert('Ukuran gambar terlalu besar!');
              </script>";
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;
}

function edit($data)
{
    global $conn;
    $id = $data["id"];
    $namaMenu = htmlspecialchars($data["NamaMenu"]);
    $deskripsi = htmlspecialchars($data["Deskripsi"]);
    $harga = htmlspecialchars($data["Harga"]);
    $kategori = htmlspecialchars($data["Kategori"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE menu SET NamaMenu = '$namaMenu', Deskripsi = '$deskripsi', Harga = $harga, Kategori = '$kategori', Gambar = '$gambar' WHERE ID = $id;";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
