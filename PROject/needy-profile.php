<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="Connector_files/bootstrap.css">
    <script src="Connector_files/jquery-1.8.2.min.js"></script>
    <script src="Connector_files/bootstrap.js"></script>
    
        <script type="text/javascript">
        
    $(document).ready(function(){
    
        
        /*
            $(document).ajaxStart(function(){
                $("#chakkar,#chakkar2").css("display","block");
            });
            
            $(document).ajaxStop(function(){
                $("#chakkar,#chakkar2").css("display","none");
            });
        */
            
            $("#saveneedyprocess").click(function(){
                
                //AJAX call-Asynchronous java script and XML
                var uid=$("#uid").val();
                var nname=$("#nname").val();
                var address=$("#address").val();
                var city=$("#city").val();
                var contact=$("#contact").val();
                var acno=$("#acno").val();
                var belongs=$("#belongs").val();
                var ngo=$("#ngo").val();
                var url="needy-profile-process.php?uid="+uid+"&nname="+nname+"&address="+address+"&city="+city+"&contact="+contact+"&acno="+acno+"&belongs="+belongs+"&ngo="+ngo;
                $.get(url,function(response){
                    //alert(response);
                    $("#resp").html(response);
                    
                });
            }); 
//         });
        
                     
            
   //*----------------------------------*
        
        $("#updateneedyprocess").click(function(){
            
            //alert();
            
            var uid=$("#uid").val();
            var nname=$("#nname").val();
            var address=$("#address").val();
            var city=$("#city").val();
            var contact=$("#contact").val();
            var acno=$("#acno").val();
            var belongs=$("#belongs").val();
            var ngo=$("#ngo").val();
            
            var url="needy-profile-process1.php?uid=" +uid+ "&nname=" +nname+ "&address=" +address+ "&city=" +city+ "&contact=" +contact+ "&acno=" +acno+ "&belongs=" +belongs+ "&ngo=" +ngo; 
           // alert(url);
            $.get(url,function(response){
                

                  //alert(response);
            $("#resp1").html(response);
//                if(response=="")
//                    alert("invalid");
//                else if(response== "donor")
//                    location.href="donor-dash.php";
//                    
//                else if(response=="needy")
//                    location.href="needy-dash.php";
//            
        });        
    });
        
            $("#btnsearch").click(function(){
               // alert();
                var uid=$("#uid").val();
                $.getJSON("search-needy-fetch-process.php?uid=" +uid,function(jsonarray){
                    alert(JSON.stringify(jsonarray));
                     //$("#ppic").val("src","upload/"+jsonarray[0].ppic);
                    $("#nname").val(jsonarray[0].nname);
                    //$("#bgroup").val(jsonarray[0].bgroup);
                   
                    $("#address").val(jsonarray[0].address);
                    $("#city").val(jsonarray[0].city);
                    $("#contact").val(jsonarray[0].contact);
                    $("#acno").val(jsonarray[0].acno);
                    $("#belongs").val(jsonarray[0].belongs);
                    $("#ngo").val(jsonarray[0].ngo);
                //    $("#nodo").val(jsonarray[0].nodo);
                  //  $("#disease").val(jsonarray[0].disease);
                    
                });
            });
        
        
});
    
    </script>
    <body>
    

                        <!--------------------------------------------->
                        
                        
<!--
    <div class="jumbotron jumbotron-fluid">
  <div class="container" >
   <img src="Pics/sketch%20madara.jpg" class="card-img-top8" alt="...">
    <h1 class="display-4"><i><b>Cristiano Ronaldo</b></i></h1>
    <p class="lead">Facing life's toughest stage, a single help means a lot.</p>
  </div>
</div>
-->
                       
 <nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Welcome!</span>
</nav>
                        
                        
                        <!--------------------------------------------->
    
    
    
        
<form class="needs-validation" >
   <div class="container">
    <div class="forimage">
    <div class="style1">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">UID</label>
      <input type="text" class="form-control" id="uid" name="uid" placeholder="Userid..." required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
     
     <div class="col-md-1 mb-3">
      <label for="validationTooltip01">search here</label>
<!--      <input type="button" class="form-control" id="btnsearch" value="search" required>-->
      <button class="btn btn-outline-primary" type="submit" id="btnsearch" name="btnnn" value="search">Search</button>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>  
    
<!--
       <div class="col-md-7 mb-3">
    <img src="Pics/dog1.jfif" class="rounded float-right" alt="...">
        </div>
-->
     </div>
    
    </div>
</div>
    
    
<!--                          ************************************************-->
    
    <div class="style2">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Name</label>
      <input type="text" class="form-control" id="nname" name="nname" placeholder="name..." required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  </div>
        </div>
       
           
            <!--                          ************************************************-->
  
  
  <div class="style3">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip03">Address</label>
      <input type="text" class="form-control" placeholder="address..." id="address" name="address" required>
      <div class="invalid-tooltip">
        Please provide a valid address.
      </div>
    </div>
     
     <div class="col-md-3 mb-3">
      <label for="validationTooltip03">City</label>
      <input type="text" class="form-control" placeholder="city..." id="city" name="city" required>
      <div class="invalid-tooltip">
        Please provide a valid city.
      </div>
    </div>
    
      </div>
    
  </div>
  
                <!--                          ************************************************-->
                
            <div class="style4">
        <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip02">Contact</label>
      <input type="text" class="form-control" id="contact" name="contact" placeholder="contact details..." required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  </div>
        </div>
                       <!--                          ************************************************-->
                       
                       <div class="style5">
            <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">AC no.</label>
      <input type="text" class="form-control" id="acno" name="acno" placeholder="dob..." required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    
    
  </div>   
        </div>  
        
              
         <div class="style4">
         
         <div class="col-md-4 mb-3">
      <label for="validationTooltip04">Belongs to NGO</label>
      <select class="custom-select" id="belongs" name="belongs" required>
        <option selected disabled value="">Choose...</option>
        <option value="no">Yes</option>
        <option>No</option>
      </select>
      <div class="invalid-tooltip">
        Please select a valid state.
      </div>
    </div>
         
        </div> 
        
        <div class="style4">
         
         <div class="col-md-4 mb-3">
      <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">NGO address.</label>
      <input type="text" class="form-control" id="ngo" name="ngo" placeholder="ngo..." required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    
    
  </div> 
    </div>
         
        </div>    
                          
                                      
     <div class=onlybtns>
       <center>
        <div class="chill-time">
           <button class="btn btn-outline-primary" id="saveneedyprocess" type="button" name="btn" value="save">Save</button>
            <div class="form-group row">
           <div class="col-sm-10">
               <CENTER>
                  <h3>
             <div id="resp">*</div>
                  </h3>
                </CENTER>
                 </div>
           </div>
              <div class="hello">
           <button class="btn btn-outline-success" id="updateneedyprocess" type="button" name="btn" value="update">Update</button>
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
           </div>
           </center>
    </div>
   </div>
       </form>
</body>
    </head>
</html>