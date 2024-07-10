<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Loop Vertical Demo - fullPage.js</title>
    <meta name="author" content="Alvaro Trigo Lopez" />
    <meta name="description" content="Create a vertical loop using fullPage.js to go back to first section. Demo with code." />
    <meta name="keywords"  content="fullpage,jquery,demo,loop,looping,vertical,sections" />
    <meta name="Resource-type" content="Document" />
    <meta name="viewport" content="width=device-width,initial-scale=1">

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
</head>
<body>

<!-- fullPage.js HTML -->
<div id="fullpage">
    <div class="section"><h1>Loop Vertical</h1></div>
    <div class="section"><h1>Section 2</h1></div>
    <div class="section"><h1>Section 3</h1></div>
</div>

<!-- fullPage.js JS -->
<script type="text/javascript" src="https://www.unpkg.com/fullpage.js/dist/fullpage.min.js"></script>

<!-- Initialize fullPage.js -->
<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {

        // Loop vertical options
        loopTop: true,
        loopBottom: true,

        // Get your license at https://alvarotrigo.com/fullPage/pricing
        licenseKey: 'xxxxxxxxxxxxxxxxxxxxxxxxx',

        // Optional
        anchors: ['firstPage', 'secondPage', '3rdPage'],
        navigation: true
    });
</script>
</body>
</html>
