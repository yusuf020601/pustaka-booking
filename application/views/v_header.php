<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>Web programming II |Merancang Template sederhana dengan codeignetir|</title>
        <link rel="stylesheet" type="text/css" href="http://localhost/pustaka-booking/assets/css/stylebuku.css">
    </head>
    <body>
        <div id="wrapper">
            <header>
                <hgroup>
                    <h1>RentalBuku.net</h1>
                    <h3>Membuat template sederhana dengan codeigneter</h3>
                </hgroup>
                <nav>
                    <ul>
                        <li><a href="<?php echo base_url().'index.php/web' ?>">HOME</a></li>
                        <li><a href="<?php echo base_url().'index.php/web/about' ?>">ABOUT</a></li>
                    </ul>
                </nav>
                <div class="clear"></div>
            </header>