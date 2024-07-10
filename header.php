<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="author" content="Alvaro Trigo Lopez | Adaptacion Panoptica SPA." />
    <meta name="description" content="fullPage full-screen normal scrolling with autoScrolling." />
    <meta name="keywords"  content="fullpage,jquery,demo,screen,fullscreen,normal scroll,autoscrolling, scroll" />
    <meta name="Resource-type" content="Document" />
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/main.css?v2.4" />

    <!-- fullPage.js CSS -->
    <link rel="stylesheet" type="text/css" href="https://www.unpkg.com/fullpage.js/dist/fullpage.min.css" />

    <!-- Styles for the demo -->
    <style>
        body{
            font-family: arial,helvetica;
        }

        h1{
            font-size: 6em;
            font-size: calc(2em + 2vw);
            margin:0;
        }

        .section{
            color: #fff;
            text-align:center;
        }

        /* Overwriting styles for the navigation dots */
        #fp-nav ul li a span, 
        .fp-slidesNav ul li a span{
            background: white;
        }

        /* Backgrounds colors for sections */
        .fp-section:nth-child(1){
            background-image: linear-gradient(128deg,#40afff,#3f61ff);
        }

        .fp-section:nth-child(2){
            background-image: linear-gradient(128deg,#ff9a3f,#ff4b40);
        }

        .fp-section:nth-child(3){
            background-image: linear-gradient(128deg,#fc40ff,#543fff);
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Hook -->
    <?php wp_head(); ?>

</head>
<body>

    <div class="container-fluid m-0 p-0">

        <div class="row m-0 p-0">

            <div class="col-sm-12 m-0 p-0">
                <img src="<?php bloginfo('template_url'); ?>/images/logo.svg" class="img-fluid w-100 header-letras" alt="...">
            </div>

        </div>

    </div>