<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en" class="loading">
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="img/favicon.png">
        <title>Payumoney Codeigniter</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">   
        <!--<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
         
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>  
                <div class="col-md-8 text-center">
                    <?php 
                         echo "<h3>Your order status is ". $status .".</h3>";
                         echo "<h4>Your transaction id for this transaction is ".$txnid.".</h4> <h4> Contact our customer support.</h4>";
                    ?>
                 </div> 
                <div class="col-md-2"></div>
            </div>
        </div>    
    </body>
</html>  
