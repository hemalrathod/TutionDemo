<?php   

//Get client data


$username = $_POST["uname"];


//Username validation code is here

if($username=="hemal"){
    echo "Username available";
}
else{
    echo "Username not available";
}


?>