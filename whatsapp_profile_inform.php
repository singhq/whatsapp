<?php
error_reporting(0);
session_start();
require 'connection.php';

  $userid =$_SESSION['user_id'];

if(!isset($_SESSION['user_id'])){
   header("location: whatsapp_login.php");
}



if(isset($_POST['submit'])){
    $userid =$_SESSION['user_id'];
    

$username =$_POST['username'];
$target_dir ="Profile_image/";
$name = $_FILES['Profile_images']['name'];
$target_file_name =$target_dir.basename($name);
$profile_url ="http://localhost:8080/whatsapp%20tutorial/Profile_image/".$name;







move_uploaded_file($_FILES['Profile_images']['tmp_name'], $target_file_name);




if(empty($username) || $name ==null){
//$output ="<h6 class='output' style='color:red;>"."you are required to enter your name before continue"."</h6>";
       
      $error ="<h6>"." Please select image"."</h6>";
      
}
else{

    $sql ="UPDATE `user` SET `username`='$username',`user_image`='$profile_url' WHERE `user_id` ='$userid' ";
          
          $result =mysqli_query($conn ,$sql);
          if($result){
           
           $error ="<h5>"." Successfully Update "."</h5>";
      
         

                header("location: whatsapp_hom.php");
          }
          else{
               $error ="<h6>"." Profile not Update "."</h6>";
          }

}

}

?>



<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  

  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
 <!-- <link rel="stylesheet" type="text/css" href="stylee.css"> -->
  <!-- jQuery library -->


<!-- Latest compiled bootstap cdn
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   -->  

<style>

  *{
    margin: 0;
    padding: 0;
  }
.info-container{
    width: 100%;
    max-width: 768px;
    margin: auto;
    position: relative;
}
.info-detail{
    width: 100%;
    margin-top: 20px;
    float: left;

}
.info-detail-inside{
    float: left;
}
.info-detail-inside.image{
    width: 30%;
}
.info-detail-inside.text{
    width: 50%;
}
.info-detail-inside.icon{
    width: 20%;
}
.info-detail-inside-image{
    width: 100%;
    max-width: 60px;
    height: 60px;
    margin: auto;
    border-radius: 50%;
    background-color: #eee;
    overflow: hidden;
}
.info-detail-image{
    width: 100%;
    max-width: 41px;
    height: 41px;
    margin: auto;
    margin-top: 11px;


   

}

.info-detail-image img{
    width: 100%;
    height: 100%

}
input[type=text]{
    width: 100%;
    border: none;
    border-bottom: 2px solid #075E54;
    margin-top: 8px;
    padding: 8px;
    font-size: 17px;
}
.info-detail-icon{
    width: 100%;
    max-width: 20px;
    height: 20px;
    margin: auto;
    margin-top: 15px;
}
.info-name{
    width: 100%;
    margin-top: 30px;
}
.info-name p{
  text-align: center;
  font-size: 20px;
  color: #075E54;
}
.info-sub-name{
    width: 100%;
    margin-top: 30px;
}
.info-sub-name p{
  text-align: center;
  font-size: 20px;
  color: #075E54;
}
.info-button{
    width: 100%;
    max-width: 80px;
    height: 80px;
    margin: auto;
    margin-top: 350px;


}
.info-button button{
border: none;
color: white;
background-color: #0EC73B;
padding: 8px;
font-size: 17px;

}
.info-dailog{
 top: 0;
  width: 100%;
  position: absolute;
 display: none;
}
.info-dailog-inside{
 
  width: 100%;
 max-width: 350px;
 margin: auto;
 margin-top: 200px;

}
.info-detail-image.active{
    width: 100%;
    max-width: 60px;
    height: 60px;
    margin: auto;
   

   

}

h6{
  text-align: center;
  color: red;
  font-size: 17px;
}

h5{
  text-align: center;
  color: green;
  font-size: 17px;
}










</style>
  

 <title>whatsapp profile information </title>
</head>
<body>

<div class="info-container">
    <div class="info-name">
        
        <p>Profile info</p>
    </div>
    

<div class="info-sub-name">
    <p>Please provide your name and an optional profile photo</p>


</div>


<div class="info-detail">

    <?php 
     echo $error;

    ?>


<form action="" method="post" enctype="multipart/form-data">
     <div class="info-detail-inside image">
        <div class="info-detail-inside-image">
             <div class="info-detail-image">
                <img src="image/download.png" id="select_dialog" class="select_image">
             </div>
        </div>
        
    </div>

    <div class="info-detail-inside text">
         <input type="text" name="username" placeholder="Type your name here">
        
    </div>

    <div class="info-detail-inside icon">
          <div class="info-detail-icon">
            <a><i class="far fa-grin"></i></a>
        
         </div>
        
    </div>


 </div>

       <div class="info-button">
            <button type="submit" name="submit">NEXT</button>
        
       </div>



            <div class="info-dailog">
               <div class="info-dailog-inside">
                   <?php

                      include ('whatsapp_dailog.php');
                      
                   ?>
            
               </div>
            
           </div>
</form>


</div>






 <!-- jQuery library -->

 <script src="jquery-3.5.1.min.js"></script>
   <script type="text/javascript">

    $(document).ready(function(){
        $('#select_dialog').click(function(){

             $('.info-dailog').show();
             
          });

         $('#select_profile_image').click(function(e){
              e.preventDefault();

            $('#Profile_image').trigger('click');

           });
   
 });
    function readUrl(input)
      {
if(input.files && input.files[0]){

  var reader = new FileReader();
  reader.onload = function(e){
    $('.select_image').attr('src' , e.target.result);
       $('.info-detail-image').addClass('active')
            $('.info-dailog').hide();
  }
reader.readAsDataURL(input.files[0]);

}

    }
   


</script>


</body>
</html>

