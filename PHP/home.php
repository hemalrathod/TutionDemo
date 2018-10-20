<!doctype html>

<html>
    <head>
        <title>Bootstrap Introduction</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <style>
            .custom
            {
                height:200px;
                background-color: aquamarine
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class=col-md-3>
                <?php include "menu.php";  ?>
            </div>
            <div class=col-md-9>
                Main content
            </div>
        </div>
    </body>
    </html>