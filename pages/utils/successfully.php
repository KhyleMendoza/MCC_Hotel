<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MCC Hotel</title>
    <link rel="icon" href="assets/img/logo/logo.png">
    <?php 
        echo '<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">';
    ?>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
        }
        .container {
            text-align: center;
            padding: 20px;
        }
        img {
            max-width: 100%;
            height: auto;
        }
        p {
            font-size: 1.2em;
        }
        a {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #dfa974;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="assets/img/utils/placed.png" alt="404 Error">
        <p>Automatically Redirecting you to my reservation page in <span id="countdown">10</span>.</p>
        <a href="/mcc_hotel/room">Go Back to room page</a>
    </div>
    <script>
        var timeleft = 10;
        var downloadTimer = setInterval(function(){
            if(timeleft <= 0){
                clearInterval(downloadTimer);
                window.location.href = "/mcc_hotel/my-reservation";
            } else {
                document.getElementById("countdown").innerHTML = timeleft;
            }
            timeleft -= 1;
        }, 1000);
    </script>
</body>

</html>
