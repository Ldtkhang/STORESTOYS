<?php
session_start();
$urladmin = "http://localhost:8080/STORE STOYS/admin/";
$urluser = "http://localhost:8080/STORE STOYS/";
$home = "home.php";
$category = "category.php";
$product = "product.php";
$cart = "cart.php";
$order = "order.php";
$user = "user.php";

////////////////////// Connection ////////////////////
$host = "localhost";
$username = "root";
$password = "";
$db = "myshop";
$conn = pg_connect('postgres://qsvwvatlbtxgew:11fd9a5621bb8b2411a2768e1bf6be30c145a863dc8eeb5517744c8988b16772@ec2-52-23-131-232.compute-1.amazonaws.com:5432/d1ah55t3276vdm');
include('theme.php');
