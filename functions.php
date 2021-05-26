<?php

    $conn = mysqli_connect("sql207.epizy.com", "epiz_28156823", "N1719T0GpZBk5", "epiz_28156823_sandwichyay");
    
    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    

?>