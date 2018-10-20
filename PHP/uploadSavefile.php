<!doctype html>

<html>
    <head>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <title>File Upload With PHP</title>
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
            <div class=row>
                <div class=col-md-12>
                    <div class="card text-white bg-primary mb-12" >
                        <div class="card-header">File Upload With PHP</div>
                        <div class="card-body">
<?php

//Flag for error
$flag=true;

//Declare a target folder where image will be saved
$dir = "images/";

//Create full path with filename
$file = $dir . basename($_FILES["file"]["name"]);

//Get extension of the file
$extension = strtolower(pathinfo($file,PATHINFO_EXTENSION));

//Validate image file
if($extension!="jpg" && $extension!="png" && $extension!="jpeg" ){
    echo "Not a valid image<br>";
    $flag=false;
}


//Check for the file 
if(file_exists($file)){
    echo "File already exists<br>";
    $flag=false;
}

//Check size
if($_FILES["file"]["size"]>1000000){
    echo "File is too large.<br>";
    $flag=false;
}

//Final upload
if($flag==false){
    echo "Some error occured.<br>";
}
else{
    if(move_uploaded_file($_FILES["file"]["tmp_name"],$file)){
        echo "File uploaded.<br>";
    }
    else{
        echo "Error occured.<br>";
    }
}


?>
<h2>You will be redirected to default page in 20 seconds...Please wait...</h2>
<script>
$(document).ready(function(){
    var timeout = 20;
    setInterval(
        function(){
            if(timeout<=0){
                window.location.href="uploadInterface.html"
            };
            $("h2").text("You will be redirected to default page in "+timeout+" seconds...Please wait...");
            timeout--;
        },1000);
});
</script>
</div>
                      </div>
                </div>
            </div>
        </div>
    </body>
    </html>