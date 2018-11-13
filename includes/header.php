<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="<?php

    if(isset($metaD) && !empty($metaD)) { 
       echo $metaD; 
    } 
    else { 
       echo "Some meta description"; 
    } ?>" />

    <title><?php 
    if(isset($title) && !empty($title)) { 
       echo $title; 
    } 
    else { 
       echo "Default title tag"; 
    } ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="jms-touch-icon-1.png">
    <link rel="short icon" href="jms.ico">
    <!-- Place favicon.ico in the root directory -->
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,500,700,900" rel="stylesheet">
    <!--animate.css-->
    <link rel="stylesheet" href="/css/animate.css/animate.min.css">
    <!--   mailchimp css link -->
    <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
    <!--aos-->
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!--font awesome-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="body-wrap">
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <!--nav-->
        <nav id="menu" class="navbar navbar-expand-xl fixed-top">
            <a class="navbar-brand" href="/index.php">Wi<span class="pink">W</span>P</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <img id="hamburger" src="/img/jms-mobile-menu-round.png" alt="Workshops in Wild Places">
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="nfld.php">Newfoundland</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="scotland.php">Scotland</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="bc.php">British Columbia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="upcoming.php">Upcoming</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://janicemasonsteeves.com">JMS Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mailto:janicemasonsteeves@gmail.com">Contact</a>
              </li>
            </ul>
          </div>
        </nav><!--end nav-->
        
       <div id="barba-wrapper">
            <div class="barba-container">