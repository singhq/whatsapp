<?php
error_reporting(0);

require 'connection.php';


    session_start();
   $userid =$_SESSION['user_id'];

  $sql ="SELECT * FROM `user` WHERE `user_id` = '$userid' ";

 $result = mysqli_query($conn , $sql);
 while($row = mysqli_fetch_assoc($result)){

  $username = $row['username'];
  $user_image = $row['user_image'];

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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

<script src="jquery-3.5.1.min.js"></script>
<script src="whatsapp.js"></script>   

<style>

	*{
		margin: 0;
		padding: 0;
	}
	.profile-container{
		width: 100%;
		max-width: 768px;
		margin: auto;
    position: relative;
       
	}

	.profile-top-nav{
		width: 100%;
		background-color: #075E54;
		height: 50px;

	}
	.profile-top-nav ul{
	list-style-type: none;
	margin: 0;
	padding: 0;
	width: 100%;
	
	cursor: pointer;


}
.profile-top-nav ul li{
	float: left;


}
.profile-top-nav ul .profile-name  a{
	margin-left: 30px;
	
}

.profile-top-nav ul .profile-icon{
	width: 20%;
}


.profile-top-nav ul li a{

display: block;
text-align: center;
text-decoration: none;
margin-top: 16px;
color: white;
font-size: 16px;

}
.profile-container-image{
   width: 100%;
position: relative;


}
.profile-image{

	width: 100%;
	max-width: 90px;
	height: 90px;
	margin: auto;
	margin-top: 15px;
  border-radius: 50%;
  overflow: hidden;
}
.profile-image img{
	width: 100%;
	height: 100%;

}

.profile-image-cemara{

    width: 40px;
    height: 40px;
   background-color: #075E54;
   border-radius: 50%;
   position: absolute;
   top: 70%;
   left: 52%;

}
.profile-image-cemara img{
    width: 20px;
    height: 20px;
    margin-top: 10px;
    margin-left: 10px;

}

.profile-container-setting{
	width: 100%;
	margin-top: 10px;

}
.profile-setting{
	float: left;
	padding-top: 20px;
}
.profile-setting.name{
	width: 80%;
	padding-bottom: 10px;
	border-bottom: 1px solid #ccc;

}
.profile-setting.image{
	width: 20%;

}
.profile-setting-image{
	width: 100%;
	max-width: 30px;
	margin: auto;

}
.profile-setting-image img{
	width: 100%;

	
}

.profile-setting-setting{
	float: left;
}
.profile-setting-setting.name{
	width: 85%;
}
.profile-setting-setting.image{
	width: 15%;

}
.profile-setting-setting-image{
	width: 100%;
	max-width: 20px;
	margin: auto;


}
.profile-setting-setting-image img{
	width: 100%;



	
}
.profile-setting-name{
	width: 100%;
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









</style>
  

 <title>whatsapp contact </title>
</head>
<body>
	
<div class="profile-container">
	 <div class="profile-top-nav">
     		<ul>

     			<li class="profile-icon"><a><i class="fas fa-arrow-left"></i></a></li>
     			<li class="profile-name"><a style="font-size: 20px;" >Profile</a></li>

     	  </ul>

     </div>

       <div class="profile-container-image">
            <div class="profile-image">

              <?php 

                 echo " <img src='$user_image'>";

              ?>

               

           </div>
              <div class="profile-image-cemara">
                     <img src="image/2.png" id="select_dialog">
             </div>

       </div>

         <div class="profile-container-setting">
         	<div class="profile-setting image">
         		<div class="profile-setting-image">
         			<img src="image/user.png">

                 </div>
         	</div>

         	<div class="profile-setting name">
         		<div class="profile-setting-name">
         			<a>Name</a>

                 </div>
                 <div class="profile-setting-name">
                 	  <div class="profile-setting-setting name">
         			       <a><b>Username</b></a>
                     </div>
                     <div class="profile-setting-setting image">
                     	  <div class="profile-setting-setting-image">
                     	       <img src="image/edit.png" >
         			
                         </div>
         			
                    </div>
                 </div> 
                 <div class="profile-setting-name">
         			<a>This is not your username or pin. this name will be visible to your Whatsapp contacts. </a>

                 </div>
              
           </div>

	  </div> 


	         

         <div class="profile-container-setting">
         	<div class="profile-setting image">
         		<div class="profile-setting-image">
         			<img src="image/About.png">

                 </div>
         	</div>

         	<div class="profile-setting name">
         		<div class="profile-setting-name">
         			<a>About</a>

                 </div>
                 <div class="profile-setting-name">
                 	  <div class="profile-setting-setting name">
         			       <a><b>Hey thre ! am using Whatsapp</b></a>
                     </div>
                     <div class="profile-setting-setting image">
                     	  <div class="profile-setting-setting-image">
                     	       <img src="image/edit.png" >
         			
                         </div>
         			
                    </div>
                 </div> 
                
           </div>

	  </div>


	               <div class="profile-container-setting">
         	<div class="profile-setting image">
         		<div class="profile-setting-image">
         			<img src="image/Phone.png">

                 </div>
         	</div>

         	<div class="profile-setting name">
         		<div class="profile-setting-name">
         			<a>Phone number</a>

                 </div>
                 <div class="profile-setting-name">
                 	  <div class="profile-setting-setting name">
         			       <a><b> +91 8445108839</b></a>
                     </div>
                     <div class="profile-setting-setting image">
                     	  <div class="profile-setting-setting-image">
                     	       <img src="image/edit.png" >
         			
                         </div>
         			
                    </div>
                 </div> 
                
           </div>

	  </div>


            <div class="info-dailog">
               <div class="info-dailog-inside">
                   <?php

                      include ('whatsapp_dailog.php');
                      
                   ?>
            
               </div>
            
           </div>


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




   	</script>


</body>
</html>

