<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>404 Error</title>
    <link rel="icon" href="assets/img/logo/logo.png">
    <?php 
        echo '<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">';
    ?>
    <style>
        body,
        html {
            height: 100%;
        }
    </style>
</head>
 
<body class="d-flex justify-content-center align-items-center">
    <div class="col-md-12 text-center">
        <h1>404</h1>
        <h2>Page Not Found</h2>
        <p>Sorry, the page you are looking for does not exist.</p>
        <p>Automatically Redirecting you to main page in <span id="countdown">10</span>.</p>
        <a href="/mcc_hotel/">Go Back to main page</a>
    </div>
</body>
<script>
    var timeleft = 10;
    var downloadTimer = setInterval(function(){
    if(timeleft <= 0){
        clearInterval(downloadTimer);
        window.location.href = "/mcc_hotel/"
    } else {
        document.getElementById("countdown").innerHTML = timeleft;
    }
    timeleft -= 1;
    }, 1000);
 </script>
</html>