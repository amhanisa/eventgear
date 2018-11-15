<?php
    session_start();
    try{
        session_unset();
        session_destroy();
        echo 'BISA LOGOUT';
        header('Location: ../');
     } catch (Exception $e) 
     {die("GABISA LOGOUT");}
?>