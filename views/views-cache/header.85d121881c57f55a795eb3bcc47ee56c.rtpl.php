<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Arbor</title>
<!-- Google Font: Source Sans Pro -->
<link rel="icon" type="image/png" href="library\layout\dist\img\logo arbor p.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100&display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="library\layout\plugins\fontawesome-free\css\all.min.css">
   <!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="library\layout\dist\css\adminlte.min.css">
  <!-- jQuery -->
  <script src="library/layout/plugins/jquery/jquery.min.js"></script>
    <!-- Table Sorter -->
<script src="library\plugins\tablesorter\js\jquery.tablesorter.js"></script>
<!-- Check List App -->
<script  type="text/javascript" src="library/layout/dist/js/checklist_arbor.js"></script>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
        <i class="fas fa-th-large"></i>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#" role="button">
        sair
        </a>
    </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
    <img src="library/layout/dist/img/logo arbor p.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text"><h4>Adaggio</h4></span></i>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->

        <li class="nav-item">
            <a href="/despesas/" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>despesas</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/catalogos/" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>catálogos</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/pagamentos/" class="nav-link">
            <i class="nav-icon fas fa-chart-line"></i>
            <p>pagamentos</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/relatorios/" class="nav-link">
            <i class="nav-icon fas fa-lock"></i>
            <p>
                relatórios
            </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/documentos/" class="nav-link">
            <i class="nav-icon fas fa-calendar-check"></i>
            <p>
                documentos
            </p>
            </a>
        </li>
       
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
    <div class="col-sm-12">
        <h4 class="m-0"></h4>
    </div>
    <!-- /.col -->
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<div class="content">
<div class="container-fluid">
<div class="row">


