<?php
$host='localhost';
$database='2685_php_bookstore';
$user='root';
$password='';

function dd($itm){
    echo '<pre>';
    var_dump($itm);
    echo '</pre>';
}

$db=new mysqli($host, $user, $password, $database);
$qry='SELECT * FROM ``;';
$res= $db->query($qry);

$data1=mysqli_fetch_all($res);
$data2= mysqli_fetch_all($res, MYSQLI_NUM);
$data3= mysqli_fetch_all($res, 2);
$data4= mysqli_fetch_all($res, 1);
$data5=mysqli_fetch__all($res, MYSQLI_ASSOC);
$data6=mysqli_fetch_all($res, 3);
$data7=mysqli_fetch_all($res, MYSQLI_BOTH);
dd($data1);
dd($data2);
dd($data3);
dd($data4);
dd($data5);
dd($data6);
dd($data7);
