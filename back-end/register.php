<?php

    include "connection.php";
    
    $query          = "SELECT * FROM m_user where username = '".$_POST['inputUsername']."'";
    $result         = $mysqli->query($query);
    $rowData        = $result->fetch_assoc();

   
    if($rowData){

        echo "Silahkan ganti Username, dikarenakan Username <b>".$_POST['inputUsername']."</b> telah digunakan<br><br>";
        
    }
    else{
        $pass               = md5($_POST['inputPassword']); 

        $queryInsert       = "
        insert into
            m_user
                (username, password)
            values
                ('".$_POST['inputUsername']."', '".$pass."')
        
        ";
        $mysqli->query($queryInsert);

        echo "success";
    }

?>