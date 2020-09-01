<?php

    include "connection.php";

    $query          = "SELECT * FROM m_user where username = '".$_POST['username']."'";
    $result         = $mysqli->query($query);
    $rowData        = $result->fetch_assoc();

    if($rowData){
        $lastLogin = date('d-m-Y H:i:s', strtotime($rowData['last_login']));

        echo "Hai <b>". $rowData['username']."</b>, waktu login terakhir anda ".$lastLogin ;
    }
    else{

        /// cek browser untuk Fitur single session (bonus poin)
            //// maaf waktunya tidak sampai .. dikarenakan dirumah banyak gangguan
            
        echo "failed";
    }

?>