<!DOCTYPE html>


<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ajax Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>
            //Get document object by using $ sign and ready function
            $(document).ready(function(){
                //alert("hi");

                $(".txtusername").blur(function(){
                    var username = $(this).val();
                    //alert("hi");
                    //Server ajax call
                    $.ajax({
                        method:"POST",
                        url:"ajax.php",
                        data:{uname:username},
                        //data:{
                        //    msg:"",
                        //    user:"",
                        //    friend:""
                        //}
                        success:function(r){
                            console.log(r);
                            if(r=="Username available"){
                                $("span").text(r).css("color","green");
                                $(":submit").prop("disabled",false);
                            }
                            else{
                                $("span").text(r).css("color","red");
                                $(":submit").prop("disabled",true);
                            }
                        }
                    });
                });
            });
        </script>
</head>
<body>
    <label>Username</label>
    <input name=username type=text class=txtusername />
    <span></span>
    <input type=submit value=Register />
</body>
</html>