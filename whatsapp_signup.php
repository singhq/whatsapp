<?php

error_reporting(0);
require 'connection.php';
//include 'connect.php';
if(isset($_POST['submit'])){

	$email =$_POST['email'];
	$phonenumber =$_POST['phonenumber'];
	$password =$_POST['password'];



	if(empty($email) || empty($phonenumber) ||empty($password)){

		$output ="<h6 class='output'>"."Plss fill all field"."</h6>";
	

	}       
	else{

		$sql ="SELECT * FROM `user` WHERE `phonenumber` ='$phonenumber'";
		$result =mysqli_query($conn ,$sql);
		if(mysqli_num_rows($result)){
			$output ="<h6 class='output'>"."Phone number already excist please Login"."</h6>";

		}
		else{
               $query ="INSERT INTO `user`( `email`, `phonenumber`, `password`) VALUES ('$email' ,'$phonenumber','$password')";
		       $query_result =mysqli_query($conn ,$query);

		       if($query_result){
                   $output ="<h6 class='output' style='color:#075E54;'>"."Sign up successfully."."</h6>";
                   header("location:file/whatsapp_login.php");
		       }
		       else{
		       	$output ="<h6 class='output'>"."Phone number already excist"."</h6>";
		       }

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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  -->  

<style>
	*{
		padding: 0;
		margin: 0;
	}
	.sign-container{
		width: 100%;
		max-width: 350px;
		margin: auto;
		border: 1px solid #ccc;
		margin-top: 20px;
		margin-bottom: 10px;
		padding: 10px;

	}
	.signup-container-name{
		width: 100%;
		margin-top: 10px;
		margin-bottom: 10px;

	}
	h2{
		text-align: center;
		font-size: 30px;
		color: #075E54;

	}
	input[type=phonenumber],[type=email],[type=password]{
		display: block;
		width: 100%;
		padding: 8px;
		margin-top:5px;
		box-sizing: border-box;
		font-size:13px; 
		display: inline-block;
		background-color: #e9e9e9;
		border-radius: 7px;

	}
	button{
		width: 100%;
		margin-top: 8px;
		border: none;
		background-color: #075E54;
		padding: 8px;
		margin-bottom: 10px;
		color: white;
		border-radius: 7px;
	}
	.signup-container-number{
		width: 100%;

	}

	h6{
		text-align: center;
		color: #ccc;
		margin-top: 10px;
		margin-bottom: 10px;

	}
	.signup-container-bottom{
		width: 100%;
		max-width: 350px;
		margin: auto;
		border: 1px solid #ccc;
		padding: 10px;
	}
	h5{
		text-align: center;
		color: #ccc;
		margin-top: 10px;
		margin-bottom: 10px;
        font-size: 15px;

	}
	.output{
		text-align: center;
		color: red;
		font-size: 17px;

	}



</style>
  

 <title>whatsapp Sign up </title>
</head>
 <body>

 <div class="sign-container">
 	  <div class="signup-container-name">
 	    <h2>Whatsapp</h2>
 	 </div>
     <div class="signup-container-number">
     	<button>Log in with Phone number </button>


     </div>
     <h6>OR</h6>
       <span> <?php echo $output; ?></span>  
 	 <div class="signup-container-form">
 	      <form action="" method="post">

 	      	<input type="email" name="email" placeholder="Email...">

 	      	<input type="phonenumber" name="phonenumber" placeholder="Mobile number..">

            <input type="password" name="password" placeholder="Password...">

             <button type="submit" name="submit" >Sign up</button>


 	      </form>
    </div>


</div>
       <div class="signup-container-bottom">
             <h5>Have an account ? <a style="color: blue; text-decoration: none; " href="whatsapp_login.php">Log In</a></h5>

	   </div>

	<!-- jQuery library -->

 <script src="jquery-3.5.1.min.js"></script>
   <script type="text/javascript">







  </script>


</body>
</html>
