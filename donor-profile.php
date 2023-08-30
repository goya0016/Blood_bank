<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="Connector_files/bootstrap.css">
    <script src="Connector_files/jquery-1.8.2.min.js"></script>
    <script src="Connector_files/bootstrap.js"></script>
    
    <style>
    
        .onlybtns
        {
/*
            height: 400px;
            width: 500px;
            background-color:darkgoldenrod;
            color:silver;
*/
            margin-left:10px;
            margin-right:10px;
            float:left;
            padding:10px;
            
        }
          
        .style1{
            
             margin-left:10px;
             padding:10px;
            
        }.style2{
             margin-left:10px;
             padding:10px;
            
        }.style3{
             margin-left:10px;
             padding:10px;
            
        }.style4{
             margin-left:10px;
             padding:10px;
            
        }.style5{
             margin-left:10px;
             padding:10px;
        }
        
    </style>
    
    
    <script>
    
        function showpreview(file,ref) {

        if (file.files && file.files[0]) {

            var reader = new FileReader();
            reader.onload = function (e) {
                $(ref).prop('src', e.target.result);
            }
            reader.readAsDataURL(file.files[0]);
        }

    }
        
        $(document).ready(function(){
            $("#btnsearchhere").click(function(){
               // alert();
                var uid=$("#uid").val();
                $.getJSON("json-fetch-donor.php?uid=" +uid,function(jsonarray){
                    alert(JSON.stringify(jsonarray));
                     //$("#ppic").val("src","upload/"+jsonarray[0].ppic);
                    $("#dname").val(jsonarray[0].dname);
                    $("#bgroup").val(jsonarray[0].bgroup);
                   
                    $("#address").val(jsonarray[0].address);
                    $("#city").val(jsonarray[0].city);
                    $("#gender").val(jsonarray[0].gender);
                    $("#mobile").val(jsonarray[0].mobile);
                    $("#email").val(jsonarray[0].email);
                    $("#dob").val(jsonarray[0].dob);
                    $("#nodo").val(jsonarray[0].nodo);
                    $("#disease").val(jsonarray[0].disease);
                    
                });
            });
        });
    
    </script>
    
</head>
<body>
    
    <!-- As a heading -->
<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Know your Donor!</span>
</nav>
    <br>
    <br>
                        <!--------------------------------------------->
                        
<!--
                        
    <div class="jumbotron jumbotron-fluid">
  <div class="container" >
   <img src="Pics/zeldrisss.jfif" class="card-img-top8" alt="...">
    <h1 class="display-4"><i><b>LIONEL MESSI</b></i></h1>
    <p class="lead">Believe in helping others, Always help, Be kind and they shall put their faith in you.</p>
  </div>
</div>
-->
                       
                        
                        
                        <!--------------------------------------------->
    <form class="needs-validation" action="donor-profile-process.php" method="post" enctype="multipart/form-data" > <!--*/ 'action' connect tis file with the process one /*-->
    <div class="container">
    <div class="forimage">
     <div class="col-md-5 mt-3">
<!--    <input type="image" class="rounded float-right" alt="..." name="pic" id="pic" src="Pics/upload-male.png" style="width: 150px;height: 150px;">-->
    <input data-brackets-id="14" type="image" class="rounded mx-auto d-block" name="pic" id="pic" src="Pics/upload-male.png" style="width: 150px;height: 150px;">
<!--    <input type="file" class="offset-5" class="form-control-file"  onchange="showpreview(this,pic);" accept="image/*" multiple name="ppic" id="ppic" >-->

<input data-brackets-id="15" type="file" class="offset-5" onchange="showpreview(this,pic);" accept="image/*" name="ppic" id="ppic">

</div>
   
    <div class="style1">
  <div class="form-row">
   
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">UID</label>
      <input type="text" class="form-control" value=<?php echo $_SESSION['email'];?> class="form-control" id="uid" name="uid" placeholder="Userid..." required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
     
     <div class="col-md-1 mb-5">
      <label for="validationTooltip01">search</label>
<!--      <input type="button" class="form-control" id="btnsearch" value="search" required>-->
      <button class="btn btn-outline-primary" type="button" id="btnsearchhere" value="search">Search</button>
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
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Name</label>
      <input type="text" class="form-control" id="dname" name="dname" placeholder="name..." required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">Blood group</label>
      <select class="custom-select" id="bgroup" name="bgroup">
<!--        <option selected disabled value="">Choose...</option>-->
        <option value="OP">O+</option>
        <option value="ON">O-</option>
        <option value="BP">B+</option>
        <option value="BN">B-</option>
        <option value="AP">A+</option>
        <option value="AN">A-</option>
        <option value="ABP">AB+</option>
        <option value="ABN">AB-</option>
      </select>
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
    <div class="col-md-4 mb-3">
      <label for="validationTooltip04">Gender</label>
      <select class="custom-select" id="gender" name="gender" required>
        <option selected disabled value="">Choose...</option>
        <option>Male</option>
        <option>Female</option>
      </select>
      <div class="invalid-tooltip">
        Please select a valid state.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Mobile</label>
      <input type="text" class="form-control" id="mobile" name="mobile" placeholder="mobile..." required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">Email id</label>
      <div class="input-group">
<!--
        <div class="input-group-prepend">
          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
        </div>
-->
        <input type="text" class="form-control" id="email" name="email" placeholder="email..." aria-describedby="validationTooltipUsernamePrepend" required>
        <div class="invalid-tooltip">
          Please choose a unique and valid username.
        </div>
      </div>
    </div>
  </div>
        </div>
                       <!--                          ************************************************-->
                       
                       <div class="style5">
            <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">DOB</label>
      <input type="date" class="form-control" id="dob" name="dob" placeholder="dob..." required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">No. of donations</label>
      <input type="text" class="form-control" id="nodo" name="nodo" placeholder="donations..." required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">Any disease</label>
      <div class="input-group">
<!--
        <div class="input-group-prepend">
          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
        </div>
-->
        <input type="text" class="form-control" id="disease" name="disease" placeholder="disease name..." aria-describedby="validationTooltipUsernamePrepend" required>
        <div class="invalid-tooltip">
          Please choose a unique and valid username.
        </div>
      </div>
    </div>
  </div>   
        </div>        
     <div class=onlybtns>
  
           <button class="btn btn-outline-primary" type="submit" name="btn" value="save">Save</button>
           <button class="btn btn-outline-success" type="submit" name="btn" value="update">Update</button>
           
    </div>
        </div>
       </form>
       
<!--
       <form class="needs-validationn" action="d-profile-process2.php" method="post" >
     <button class="btn btn-outline-success" type="submit" value="update">Update</button>
    </form>
-->
</body>
</html>