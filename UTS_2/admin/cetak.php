<?php 
session_start();
require 'function.php';

$total = query('SELECT SUM(Total) FROM orders');

if($total[0]["SUM(Total)"]==null){
    $total[0]["SUM(Total)"] = 0;

    

}
$resultpesanan = query('SELECT count(Token) FROM orders');
require_once __DIR__ . '/vendor/autoload.php';
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="css/stylecetak.css" rel="stylesheet" type="text/css">
    <title>Laporan Admin</title>
</head>
<body>

        <div class="container-fluid">
            <div class="row kop">
                <img style="width: 120px;" src="img/logo2.png">
                <h3>Daily Report Sandwich-Yay</h3>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    Nama: <strong>'.$_SESSION["name"];

                    $html .= '</strong>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    Date Printed: <strong>';
                    $html.= date("l, F jS Y").'</strong>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pendapatan</h5>
                        <p class="card-text">Rp'. $total[0]["SUM(Total)"].'</p>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Order Masuk</h5>
                        <p class="card-text">'.$resultpesanan[0]["count(Token)"].'</p>
                    </div>
                    </div>
                </div>
            </div>
           
        </div>
        <hr style="border-top: 1px solid rgba(0, 0, 0, 0)">
        <div class="container-fluid">
        <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> ID Order </th>
                            <th> Nama Customer </th>
                            <th> Tanggal Transaksi </th>
                            <th> Total </th>
                            <th> Token </th>
                            <th> Status </th>
                        </tr>
                    </thead>
                    <tbody>';
                        $index = 1;
                        $query = "SELECT o.ID, concat(u.FirstName, u.LastName), date(o.TransactionDate), o.total, o.token, o.Status
                                FROM orders o
                                INNER JOIN user u on o.IDCust = u.ID;";
                        $orders = query($query);
                       
                        foreach($orders as $order)
                        
                           $html.= '<tr>
                            
                                <td>'. $index .'</td>
                                <td>'. $order["ID"] .'</td>
                                <td>'. $order["concat(u.FirstName, u.LastName)"].'</td>
                                <td>'. $order["date(o.TransactionDate)"] .'</td>
                                <td>'. $order["total"] .'</td>
                                <td>'. $order["token"] .'</td>
                                <td>'. $order["Status"].'</td>
                            </tr>
                        '.$index++;
                        
                        $html.='
                        
                    </tbody>
                </table>
            </div>
            </div>
    <footer class="sticky-footer bg-white">
    
</footer>
</body>
</html>';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();
