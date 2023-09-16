<?php
session_start();
include "../connection.php";
?>
<html>
<head>
<title>Punjab Tennis Club : Tenez</title>
<link href="..\css\bootstrap.min.css" type="text/css" rel="stylesheet">
<style>
    #bg{
        background-image: url(../images/admin.jpeg);
        background-size: cover;
        background-repeat: no-repeat;
        height: 448px;
        }
    .link{
        margin-top: 150px;
        }
    #dash{
        text-align: center;
        margin-top: -55px;
        padding: 8px;
        font-size: 27px;
        }
    #feed h3{
        margin-top: -55px;
        padding: 2px;
        margin-bottom: 20px;
        }
</style>
</head>
<body>
<div class="container-fluid">
<div class="row bg-info">
<div class="col-md-2 offset-10 ps-5 p-2">
<a class="btn btn-light border-dark border" href="dashboard.php">HOME</a>
</div>
</div>
