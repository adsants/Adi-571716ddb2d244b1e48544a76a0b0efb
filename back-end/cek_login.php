<?php

    include "connection.php";
    
    $pass           = md5($_POST['inputPassword']);
    $query          = "SELECT * FROM m_user where username = '".$_POST['inputUsername']."' and password = '".$pass."'";

    $result         = $mysqli->query($query);
    $rowData        = $result->fetch_assoc();

   
    if($rowData){
        $queryUpdate        = "update m_user set last_login ='".date('Y-m-d H:i:s')."' where id_user = '".$rowData['id_user']."'";
        $mysqli->query($queryUpdate);

        echo "success";
    }
    else{
        echo "failed";
    }

?>