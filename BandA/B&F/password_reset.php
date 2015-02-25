<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <title>Forgot Password</title>
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
        <!-- Bootstrap Core CSS -->
          <link href="assets/css/bootstrap.min.css" rel="stylesheet">
          
       <!-- MetisMenu CSS -->
         <link href="assets/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

         <!-- Custom CSS -->
        <link href="assets/css/sb-admin-2.css" rel="stylesheet">
        <link href="assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

         <!-- Custom Fonts -->
          <link href="assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
          
    </head>
    <body>
        
        <!--<div id="wrapper">-->
        
            <div class="navbar navbar-inverse navbar-static-top">
          <div class="navbar-inner">
         <div class="container">

             </div>
            </div>
            </div>
            
     
            <!--<div class="container">-->
                
                <div class="container-fluid">
                    
                    <div class="col-md-5 col-md-offset-3">
                    <div  class="">
                        
                    </div>
                    
                                        
                    </div>
                    <!--login form-->
                <form class="form-horizontal" method="POST" action="#">
                    
                    <!--sign in logo-->
                    <div class="">
                        <img src="#"/>
                    </div>
                        
                        <!--email text field-->
                        <div class="">
                            <input class="form-control" id="email_field" style="max-width:375px; height: 35px" class=""type="email" placeholder="Email&nbsp;address" required />
                        </div> <br>
                       
                        <!--new password textfield-->
                        <div class="">
                            <input class="form-control" id="newpassword_field" name="newpassword_field" type="password" style="max-width:375px; height: 35px" 
                                   placeholder="New password" required />
                        </div> <br>
                        
                        <!--password textfield-->
                        <div class="">
                            <input class="form-control" id="newpassword2_field" name="newpassword2_field" type="password" style="max-width:375px; height: 35px"
                                   placeholder="Confrim password" required />
                        </div> <br>

                        <!--Remember me checkbox-->
<!--                        <div class="">
                        <label class="checkbox">
                            <input type="checkbox"> Remember me
                         </label>
                         </div> <br>-->

                        <!--login button-->
                        <div class="">
                            <input type="submit" value="Submit" style="max-width:375px; height: 35px"  class="form-control btn btn-large btn-primary"/>
                        </div> <br>
                        
                        <div class="">
                            <span>Already have an account?</span><a href="index.php">&nbsp;Sign In</a>
                        </div>
                        
<!--                        <div class="">
                            <a href="#">Forgot your password?</a>
                        </div> <br>-->
                    
                </form>
                                   
               </div>
            
            <!--</div>-->
        
        
        <script src="assets/js/jquery.js"></script>
        <!-- <script src="assets/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script> -->
       <script type="text/javascript" src="assets/jquery/jquery.classyqr.js"></script>
       <!-- Bootstrap Core JavaScript -->
       <script src="assets/js/bootstrap.min.js"></script>
        
        <script>
        $(function () {
            $("#")
                .popover({ title: 'Example', content: "kofi.ama@gmail.com" })
                .blur(function () {
                    $(this).popover('hide');
                });
         });
        </script>
    </body>
</html>
