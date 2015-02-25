<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <title>Welcome to Before and After</title>
        
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
    
    <!--body-->
    <body style="background-color: lightgray">
        
        <!--header-->
        <div class="navbar navbar-inverse navbar-static-top">
            <div class="navbar-inner">
                <div class="container">

                 </div>
          </div>
       </div>
            
            
        <!--container-->
        <!--<div class="container">-->
                
            <div class="container-fluid">
                    
                <div class="row">
                    
                <div class="col-md-4 col-md-offset-2">
                    
                    
                <!--<div class="col-md-3 col-md-offset-2">-->
                <!--<img class="img-circle" alt="..." src="...">-->    
                
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="max-width:400px; text-align: center">
                        
                        <div class="panel panel-primary">
                          <div class="panel-heading" role="tab" id="headingOne">
                              <h4 class="panel-title"><small style="color: white">Already on B&F</small>
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  <small><b style="color: white">Sign In</b></small><span class="caret"></span>
                              </a>
                            </h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                
                                <!--sign form-->
                                <form class="form-horizontal" method="POST" action="#" enctype="multipart/form-data">
                    
                    <!--sign in logo-->
                    <div class="">
                        <!--<img src="#"/>-->
                    </div>
                        
                        <!--email text field-->
                        <div class="">
                            <input class="form-control" id="email_field" style="max-width:375px; height: 35px" class=""type="email" placeholder="Email&nbsp;address" required />
                        </div> <br>
                       
                        <!--password textfield-->
                        <div class="">
                            <input class="form-control" id="password_field" type="password" style="max-width:375px; height: 35px" placeholder="Password" required />
                        </div> <br>

                        <!--Remember me checkbox-->
<!--                        <div class="">
                        <label class="checkbox">
                            <input type="checkbox"> Remember me
                         </label>
                         </div> <br>-->

                        <!--login button-->
                        <div class="">
                            <input type="submit" value="Sign In" style="max-width:375px; height: 35px"  class="form-control btn btn-large btn-primary"/>
                        </div> <br>
                        
<!--                        <div class="">
                            <span>First time here?</span><a href="signup.php">&nbsp;Sign Up</a>
                        </div>-->
                        
                        <div class="">
                            <a href="password_confirm.php" id="password_reset">Forgot your password?</a>
                        </div>
                    
                </form>
                
                            </div>
                          </div>
                        </div>
                        
                        <div class="panel panel-success">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title"><small>First time here?</small>
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <small><b>Sign Up</b></small><span class="caret"></span>
                                </a>
                              </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                              <div class="panel-body">
                                  
                                  <!--signup form-->
                                  <form class="form-horizontal" method="POST" action="#"  enctype="multipart/form-data">
                                      
                                      <!--upload image-->
                                      <div class="">
                                          <!--<img class="">-->
                                          <!--<a id="display"class="fa fa-user fa-5x"></a><br>-->
                                          <img src="#" id="display" alt="Image to display" style="width: 100px; height: 100px">
                                      </div><br>
                                      
                                      <!--image chooser-->
                                      <div class="">
                                          <input type="file" name="image" id="image" onchange="readURL(this);">
                                      </div><br>
                                                                            
                                       <!--signup full name-->
                                      <div class="">
                                           <input class="form-control" name="signup_fullname" id="signup_fullname" type="text" placeholder="Full name"
                                             style="max-width:375px; height: 35px"required >
                                      </div><br>
                                      
                                      <!--signup email-->
                                      <div class="">
                                           <input class="form-control" name="signup_email" id="signup_email" type="email" placeholder="Email address"
                                             style="max-width:375px; height: 35px"required >
                                      </div><br>
                                      
                                      <!--signup password-->
                                      <div class="">
                                      <input class="form-control" name="signup_password" id="signup_password" type="password" placeholder="Password" 
                                             style="max-width:375px; height: 35px" required>
                                      </div><br>
                                      
                                      <!--signup button-->
                                      <div class="">
                                      <input name="signup_button" id="signup_button" type="submit" value="Sign Up" class="form-control btn btn-large btn-success"
                                             style="max-width:375px; height: 35px">
                                      </div><br>
                                      
                                  </form>
                              </div>
                            </div>
                             </div>
                    </div>
                    
                </div>
                    
                    <div class="col-md-3 col-md-offset-1" style="color: black">
                        <div class="">
                            <h2>Welcome to B&F.</h2><br>

                            <!--<h4>-->
                            <p><strong>Share changing moments</strong> with friends using pictures.</p> 
                            <p><strong>See evolution happen</strong> before your eyes on your story board.</p>
                                <p>And watch events unfold, in real time, from every angle.</p>
                            <!--</h4>-->           
                        </div>
                    </div>
                    
                </div>
                                                       
               </div>
                    
            <!--</div>-->
        
        <!--footer-->
<!--            <div class="navbar navbar-inverse navbar-fixed-bottom">
          <div class="navbar-inner">
         <div class="container">

         </div>
          </div>
           </div>-->
        
        
        <script src="assets/js/jquery.js"></script>
         <!--<script src="assets/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>--> 
       <script type="text/javascript" src="assets/jquery/jquery.classyqr.js"></script>
        <!--Bootstrap Core JavaScript--> 
       <script src="assets/js/bootstrap.min.js"></script>
        
        <script type="text/javascript">
            
//            $("input").change(function(e) {
//
//    for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
//        
//        var file = e.originalEvent.srcElement.files[i];
//        
//        var img = document.createElement("img");
//        var reader = new FileReader();
//        reader.onloadend = function() {
//             img.src = reader.result;
//        }
//        reader.readAsDataURL(file);
//        $("input").after(img);
//    }
//});
            
//            function readURL(input) {
//        if (input.files && input.files[0]) {
//            var reader = new FileReader();
//
//            reader.onload = function (e) {
//                $('#display')
//                    .attr('src', e.target.result)
//                    .width(150)
//                    .height(200);
//            };
//
//            reader.readAsDataURL(input.files[0]);
//        }
//    }

  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#display').css('background', 'transparent url('+e.target.result +') left top no-repeat');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
       
        //       popover for signup fullname
        $(function () {
            $("#signup_fullname")
                .popover({ title: 'Name', content: "example: Kofi Ama" })
                .blur(function () {
                    $(this).popover('hide');
                });
         });
       
       //       popover for signup email
        $(function () {
            $("#signup_email")
                .popover({ title: 'Email', content: "example: kofi.ama@gmail.com" })
                .blur(function () {
                    $(this).popover('hide');
                });
         });
         
         //     popover for signup password
        $(function () {
            $("#signup_password")
                .popover({ title: 'Password', content: "mix characters for high security" })
                .blur(function () {
                    $(this).popover('hide');
                });
         });
         
        </script>
        
    </body>
    
</html>
