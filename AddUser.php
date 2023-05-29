<?php
    include('DBOperations.php');

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $data = DBOperations::getData('users',$_POST['id']);
        print_r($data);
    }
?>