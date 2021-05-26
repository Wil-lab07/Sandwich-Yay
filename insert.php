<?php
session_start();

require 'functions.php';

function generateRandomString($length = 5)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $charactersLength = strlen($characters);

    $randomString = '';

    for ($i = 0; $i < $length; $i++) {

        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    return $randomString;
}

$Token = generateRandomString();
$uniqueCode = "";

$conn = mysqli_connect("sql207.epizy.com", "epiz_28156823", "N1719T0GpZBk5", "epiz_28156823_sandwichyay");

if (isset($_GET["action"])) {

    if ($_GET["action"] == "insert") {

        if (isset($_SESSION["shopping_cart"])) {

            $NamaMenu = [];
            $Price = [];
            $Quantity = [];
            $Total = [];
            $IDMenu = [];
            $IDOrders = [];


            foreach ($_SESSION["shopping_cart"] as $data) {

                $NamaMenu[] = $data["item_name"];
                $Price[] = $data["item_price"];
                $Quantity[] = $data["item_quantity"];
                $Total[] = $data["item_price"] * $data["item_quantity"];
                $IDMenu[] = $data["item_id"];
            }

            for ($i = 0; $i < count($NamaMenu); $i++) {

                $nama = $NamaMenu[$i];
                $harga = $Price[$i];
                $kuantitas = $Quantity[$i];
                $TotalBayar = $Total[$i];
                $IdMenu = $IDMenu[$i];
                $idCust = $_SESSION["id"];
                $uniqueCode = generateRandomString();
                $date = date("Y-m-d");


                $query = "INSERT INTO orders VALUES ('', $idCust, '$date', $TotalBayar, '$Token', 'Not Done', '$uniqueCode')";

                $result = mysqli_query($conn, $query);

                $query = "SELECT * FROM orders WHERE uniqueCode = '$uniqueCode'";

                $result = mysqli_query($conn, $query);

                $orders = mysqli_fetch_assoc($result);

                $IDOrders = $orders["ID"];

                $query = "INSERT INTO orderdetails VALUES ($IDOrders, $IdMenu, $kuantitas)";

                mysqli_query($conn, $query);
            }

            unset($_SESSION["shopping_cart"]);

            echo "<script>alert('Your Token is $Token. Remember it!')</script>";

            echo "<script>document.location.href = 'menu.php'</script>";
        }
    }
}
