<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="Connector_files/bootstrap.css">
    <script src="Connector_files/jquery-1.8.2.min.js"></script>
    <script src="Connector_files/bootstrap.js"></script>
    
    

    <script type="text/javascript">
        $(document).ready(function() {
            $(document).ajaxStart(function() {
                $("#chakkar,#chakkar2").css("display", "block");
            });

            $(document).ajaxStop(function() {
                $("#chakkar,#chakkar2").css("display", "none");
            });

            $("#signUpProcess").click(function() {
                //AJAX call-Asynchronous java script and XML
                var email = $("#email").val();
                var password = $("#password").val();
                var mobile = $("#mobile").val();
                var type = $("#type").val();
                var url = "signup-process.php?email=" + email + "&password=" + password + "&mobile=" + mobile + "&type=" + type;
                $.get(url, function(response) {
                    //alert(response);
                    $("#resp").html(response);

                });
            });


            //*----------------------------------*

            $("#LoginProcess").click(function() {

                //   alert();

                var email2 = $("#email2").val();
                var password2 = $("#password2").val();
//                var type2 = $("#type2").val();

                var url2 = "login-process.php?email=" + email2 + "&password=" + password2;
                $.get(url2, function(response) {

                    // alert(response);
                    $("#resp1").html(response);
                    if (response == "")
                        alert("invalid");
                    else 
                        if (response == "donor")
                        location.href = "donor-dash.php";

                    else if (response == "needy")
                        location.href = "needy-dash.php";

                });
            });
        });

    </script>

    <style>
        
#logo
 {
    width: 70px;
    height: 70px;
    border:  0px red solid;
    background-image: url(../PROject/Pics/blood2.jfif);
    background-size: contain;  
    border-radius: 50%;
    margin-left: 20px;
    margin-top: 10px;
    float: left;
        }
        
        #chakkar {
            background-image: url(Pics/Gif1.gif);
            width: 70px;
            height: 70px;
            background-size: cover;
            float: right;
            display: none;
        }

        #chakkar2 {
            background-image: url(Pics/Gif1.gif);
            width: 70px;
            height: 70px;
            background-size: cover;
            float: right;
            display: none;
        }

    </style>
    
</head>

<body style="background-color: gray">
<!--   <div class="mainbody">-->
    
    <div class="container">
    
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
       
        <div id="logo" style="margin-top: -2px; margin-left: 5px"></div>
        
        <a class="navbar-brand" href="#" style="margin-left: 18px" >www.BloodBank.com</a>

        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">

                <button class="btn btn-outline-primary" type="button" id="first" data-toggle="modal" data-target="#exampleModal1" style="margin-right: 8px">SignUp</button> <!--  data-target should be same as id at 273 line(*140*)-->

            </li>


            <li class="nav-item">
                <button class="btn btn-outline-success" type="button" id="second" data-toggle="modal" data-target="#exampleModal2">LogIn</button> </li> <!--  data-target should be same as id at 273 line(*2*)-->

        </ul>    
        
        <a class="navbar-brand" href="#">About us</a>
        <a class="navbar-brand" href="#">Contact us</a>
        
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <!--(*1*)-->
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign UP</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <center>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Password:</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputCity">Mobile no.:</label>
                                <input type="text" class="form-control" name="mobile" id="mobile">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputState">Type:</label>
                                <select class="form-control" name="type" id="type">
                                    <option selected>Choose...</option>
                                    <option value="donor">donor</option>
                                    <option value="needy">needy</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <CENTER>
                                    <button type="button" class="btn btn-primary" value="Sign UP" id="signUpProcess">Sign in Here</button>
                                    <div id="chakkar"></div>

                                </CENTER>
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-sm-10">
                                <CENTER>
                                    <h3>
                                        <div id="resp">*</div>
                                    </h3>
                                </CENTER>
                            </div>
                        </div>

                    </center>


                </div>

            </div>
        </div>
    </div>

    <!--                                 =-=-=-=-=-=-=-=-=-=-=-==-=-=--------------------------------->

    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <!--(*2*)-->
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="">
                        <center>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="email2">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputPassword4">Password:</label>
                                    <input type="password" class="form-control" id="password2">
                                </div>
                            </div>


<!--
                            <div class="form-row">

                                <div class="form-group col-md-12">
                                    <label for="inputState">Type:</label>
                                    <select class="form-control" id="type2">
                                        <option selected>Choose...</option>
                                        <option value="donor">donor</option>
                                        <option value="needy">needy</option>
                                    </select>
                                </div>
                            </div>
-->

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <CENTER>
                                        <button type="button" class="btn btn-primary" value="login" id="LoginProcess">Login</button>
                                        <div id="chakkar2"></div>
                                    </CENTER>
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <CENTER>
                                        <h3>
                                            <div id="resp1">*</div>
                                        </h3>
                                    </CENTER>
                                </div>
                            </div>

                        </center>
                    </form>


                </div>

            </div>
        </div>
    </div>

<!--                                       =-=-=-=-=-=============================================-->
    
    
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Pics/kakashi.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Pics/zeldrisss.jfif" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Pics/sketch-madara.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <hr>
   
<!--                          =-=-=-=---------------------------------------------------->
  
  <table class="table table-striped table-dark">
    <tr>
     <center>
      <th>Our Products</th>
      </center>
    </tr>
 </table>
  
  
  <div class="card-deck">
  <div class="card">
    <img src="Pics/zeldrisss.jfif" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Donate blood</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="Pics/Pain.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Get blood</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.kkkkkkkkkkkkkkkkkkkkk</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="Pics/sketch-madara.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even </p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
<hr>
                          
<!--                          =-=-=---=-=--=-=-=-=--------------------------------------------------->
   
   <table class="table table-striped table-dark">
    <tr>
     <center>
      <th>Meet developers</th>
      </center>
    </tr>
 </table>
   
   
   <div class="row row-cols-1 row-cols-md-2">
  <div class="col mb-4">
    <div class="card">
      <img src="Pics/lllklklIMG_5265.jpg" class="card-img-top" alt="..."  style="height:600px">
      <div class="card-body">
        <h5 class="card-title">Keshav Sandhu</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="Pics/java.jpg" class="card-img-top" alt="..." style="height:600px">
      <div class="card-body">
        <h5 class="card-title">Rajesh Kumar Bansal</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
   
                     <!--=-=-=-=-=-=-=-=-=-=----------------------------------------------->
    
    <table class="table table-striped table-dark">
    <tr>
     <center>
      <th>Reach us</th>
      </center>
    </tr>
 </table>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13791.522932618522!2d74.9523281!3d30.2119513!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4a0d6293513f98ce!2sBanglore%20Computer%20Education%20(C%20C%2B%2B%20Android%20J2EE%20PHP%20Python%20AngularJs%20Spring%20Java%20Training%20Institute)!5e0!3m2!1sen!2sin!4v1579585110259!5m2!1sen!2sin" width="1110" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                  
                  
                   <!--=-=-=-=-=-=-=-=-=-=----------------------------------------------->
   

   <table class="table table-striped table-dark">
    <tr>
     <center>
      <th>©2020 Keshav Sandhu.All rights reserved.</th>
      </center>
    </tr>
 </table>
    
         
    </div>
<!--    </div>-->
</body>

</html>
