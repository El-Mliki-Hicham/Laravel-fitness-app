<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- start linking  -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/app.css">
  <!-- icon -->
  <link rel="icon" href="img/log.png">
  <!-- end linking -->
  <title>NutFlix - admin</title>
</head>
<body>
<!-- start admin -->
<section id="admin">
  <!-- start sidebar -->
  <div class="sidebar">
    <!-- start with head -->
    <div class="head">
      <div class="">
        <img src="logo/logo-spartel-gym.png" alt="" style="width: 100px;">
      </div>
      <a href="#" class="btn btn-danger">SUBMIT new MOVIE</a>
    </div>
    <!-- end with head -->
    <!-- start the list -->
    <div id="list">
      <ul class="nav flex-column">
        <li class="nav-item"><a href="index.html" class="nav-link active" ><i class="fa fa-adjust"></i>Dashboard</a></li>
        <!-- end user interface submenu -->
        <!-- start with charts -->
        <li class="nav-item"><a href="forms.html" class="nav-link"><i class="fa fa-edit"></i>forms</a></li>
        <li class="nav-item"><a href="tabels.html" class="nav-link"><i class="fa fa-table"></i>tables</a></li>
        <li class="nav-item"><a href="inserer.html" class="nav-link"><i class="fa fa-plus" aria-hidden="true"></i>Ajouter</a></li>
      </ul>
    </div>
    <!-- end the list -->
  </div>
  <!-- end sidebar -->
  <!-- start content -->
  <div class="content">
    <!-- start content head -->
    <div class="head">
      <!-- head top -->
      <div class="top">
        <div class="left">
          <button id="on" class="btn btn-info"><i class="fa fa-bars"></i></button>
          <button id="off" class="btn btn-info hide"><i class="fa fa-align-left"></i></button>
          <button class="btn btn-info hidden-xs-down"><i class="fa fa-expand-arrows-alt"></i></button>
          <button class="btn btn-info hidden-xs-down"><i class="fa fa-home"></i>Back Home</button>
        </div>
        <div class="right">
          <button class="btn btn-info hidden-xs-down"><i class="fa fa-bell"></i></button>
          <button class="btn btn-info hidden-xs-down"><i class="fa fa-envelope"></i></button>
          <div class="dropdown">
            <button class="btn btn-info dropdown-toggle" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">mohamed</button>
            <div class="dropdown-menu" aria-labelledby="userDropdown">
             <a class="dropdown-item" href="#">profile</a>
             <a class="dropdown-item" href="#">sitting</a>
             <a class="dropdown-item" href="#">log out</a>
           </div>
          </div>
        </div>
      </div>
      <!-- end head top -->
      <!-- start head bottom -->
      <div class="bottom">
        <div class="left">
          <h1>dashboard</h1>
        </div>
        <div class="right">
          <h1>dashboard /</h1>
          <a href="#">page name</a>
        </div>
      </div>
      <!-- end head bottom -->
    </div>
    <!-- end content head -->

