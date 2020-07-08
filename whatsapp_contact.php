
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  

  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
 <!-- <link rel="stylesheet" type="text/css" href="stylee.css"> -->
  <!-- jQuery library -->



 <script src="jquery-3.5.1.min.js"></script>
   <script src="whatsapp.js"></script>


<style>

	*{
		margin: 0;
		padding: 0;
	}
	.contact-container{

		width: 100%;
		max-width: 768px;
		margin: auto;
		position: relative;
	}
	.contact-top-nav{
		width: 100%;
		background-color: #075E54;
		height: 50px;

	}
	.contact-top-nav ul{
	list-style-type: none;
	margin: 0;
	padding: 0;
	width: 100%;
	
	cursor: pointer;


}
.contact-top-nav ul li{
	float: left;


}
.contact-top-nav ul .contact-name{
	width: 55%;
	
}

.contact-top-nav ul .contact-icon{
	width: 15%;
}


.contact-top-nav ul .contact-icon a{

display: block;
text-align: center;
text-decoration: none;
margin-top: 18px;
color: white;

}

.contact-top-name   a{

display: block;
text-align: left;
text-decoration: none;
color: white;
margin-top: 3px;

margin-left: 15px;

}

.user-contact-container{
	width: 100%;

}
.user-contact-group{

	width: 100%;
	padding-top: 10px;
	padding-bottom: 10px;
	
}
.user-group{
	float: left;
	
}
.user-group.image{
	width: 30%;
	
}
.user-group.name{
	width: 70%;
	
}
.user-group-group{
	width: 100%;
	max-width: 43px;
	height: 43px;
	margin: auto;
    background-color: #21E903;
    border-radius: 50%;
    overflow: hidden;


	}
	.user-group-image{
	width: 100%;
	max-width: 25px;
	height: 25px;
	margin-top: 8.5px;
	margin-left: 10px;

	}
	.user-group-image img{
		width: 100%;
		height: 100%;
	}
	.user-group p{
	text-align: left;
	font-size: 17px;
	margin-top: 10px;

	}



.user-contact-add{

	width: 100%;
	padding-top: 10px;
	padding-bottom: 10px;
	overflow: hidden;
	
}
.user-add{
	float: left;
	
}
.user-add.image{
	width: 30%;
	
}
.user-add.name{
	width: 70%;
	
}
.user-add-group{
	width: 100%;
	max-width: 43px;
	height: 43px;
	margin: auto;
    background-color: #21E903;
    border-radius: 50%;
    overflow: hidden;


	}
	.user-add-image{
	width: 100%;
	max-width: 25px;
	height: 25px;
	margin-top: 8px;
	margin-left: 12px;

	}
	.user-add-image img{
		width: 100%;
		height: 100%;
	}
   .user-add p{
    text-align: left;
    font-size: 17px;
    margin-top: 10px;

     }



.user-contact-users{

	width: 100%;
	padding-top: 11px;
	padding-bottom: 11px;
	overflow: hidden;
		
}
.user-main-users{

	width: 100%;
	padding-top: 11px;
	padding-bottom: 11px;
	overflow: hidden;
		
}
.user-main-users:hover{
background-color: #C9DCE9;


}

.user-users{
	float: left;
	
}
.user-users.image{
	width: 29%;
	
}
.user-users.name{
	width: 70%;
	
}
.user-users-group{
	width: 100%;
	max-width: 45px;
	height: 45px;
	margin: auto;
   


	}
	.user-users-image{
	width: 100%;
	max-width: 40px;
	height: 40px;
    margin-left: 9px;
    

	}
	.user-users-image img{
	width: 100%;
	height: 100%;
	 border-radius: 50%;

	}

	.user-users p{
	text-align: left;
	font-size: 17px;
	margin-top: 3px;

	}
	.add-contact-container{
		width: 100%;
		max-width: 400px;
		margin: auto;
		position: absolute;
		top:60%;
		left:20%;
		border: 1px solid #075E54;
		background-color: white;
		display: none;
	}
	.add-contact{
		float: left;
        }
	.add-contact.image{
		width: 30%;
		
	}
	.add-contact.name{
	 width: 70%;
	}
	.add-contact-image{
		width: 100%;
		max-width: 20PX;
		height: 20PX;
		margin: auto;
		margin-top: 5px;
	}
	.add-contact-image img{
		width: 100%;
		height: 100%;
	}
	.add-contact-container p{
      text-align: center;
      font-size: 20px;
      padding-top: 10px;
      padding-bottom: 10px;
      color: #075E54;
	}
	.add-contact input[type=text]{
		padding: 5px;
		width: 100%;
		display: block;
		border: none;
		border-bottom: 3px solid #075E54;
		margin-top: 5px;
		margin-bottom: 5px;
		
	}

	.save-contact{
		width: 50%;
		float: left;
		margin-top: 10px;
		margin-bottom: 10px;
	}
      .save-button{
		width: 100%;
		max-width: 100PX;
		
		margin: auto;
	}
      .save-button button{
            padding: 5px;
            border: none;
            background-color: #075E54;
            color: white;
            font-size: 17px;
      }
    .chatt-user{
    display: none;

    
    }


</style>
  

 <title>whatsapp contact </title>
</head>
<body>


	<div class="contact-container">
		  <div class="contact-top-nav">
     		<ul>

     			<li class="contact-icon"><a href="whatsapp_hom.php"><i class="fas fa-arrow-left"></i></a></li>
     			<li class="contact-name">


                <div class="contact-top-name">
     				

     			</div>

     			</li>

     			<li class="contact-icon"><a><i class="fas fa-search"></i></a></li>
     			<li class="contact-icon"><a><i class="fas fa-ellipsis-v"></i></a></li>
     			
     	  </ul>

       </div>

         <div class="user-contact-container">
         	   <div class="user-contact-group">
                     <div class="user-group image">
                     	  <div class="user-group-group">
                     	  	 <div class="user-group-image">
                                <a href="whatsapp_new_group.php"><img src="image/friend.png"></a>
                                   
                            </div>
                          </div>
                     </div>
                     <div class="user-group name">
                     	 <a href="whatsapp_new_group.php" style="color: black; text-decoration: none; margin-top: 10px;"><b>New group</b></a>


                     </div>

               </div>
               <div class="user-contact-add">
                       <div class="user-add image">
                     	 <div class="user-add-group">
                     	  	 <div class="user-add-image">
                                <img src="image/add-friend.png" id="add-contact">
                                   
                            </div>
                         </div>
                     </div>
                      <div class="user-add name">
                     	 <p><b>New contact</b></p>


                      </div>



               </div>
               <div class="user-contact-users">
                
               </div>

             <div class="add-contact-container">
                    <p><b>Phone Contact</b></p>
                    <p class="message"></p>

                  <div class="add-contact image">
                         <div class="add-contact-image">
                         
                          <img src="image/user.png">

                        </div>

                   </div>

                   <div class="add-contact name">
                  
                       <input type="text" name="username" id="username" placeholder="Contact name.....">
                   </div>


                  <div class="add-contact image">
                         <div class="add-contact-image">
                         
                          <img src="image/Phone.png">

                        </div>

                   </div>

                   <div class="add-contact name">
                  
                       <input type="text" name="usernumber" id="usernumber" placeholder="Contact number.....">
                   </div>

                   <div class="save-contact">
                        <div class="save-button">
                          <button id="Cancel">Cancel</button>
                         </div>
                   </div>

                     <div class="save-contact">
                        <div class="save-button">
                          <button type="submit" id="save" >Save</button>
                         </div>
                   </div>


          </div>


</div>

<!--
only use let 
-->
<div class="chatt-user">
          

 </div>





 <!-- jQuery library -->

 <script src="jquery-3.5.1.min.js"></script>
   <script type="text/javascript">
   $(document).ready(function(){

        $('#add-contact').click(function(){
              $('.add-contact-container').show();
     
          });

         $('#Cancel').click(function(){
              $('.add-contact-container').hide();
     
          });


         // contact pr click karane pr particular usi contact me ek chat box khulta hai jo whtasapp_chatt bala 
        // jis  contact pr click karne pr whatsapp_chatt page opne hota jis pr ham chatting karte hai

            $(document).on('click' ,'.contact',function(){
                   
                var userid =$(this).data('user_id');
                var chatt =$(this).data('chatt');
                 
                          
                        $.ajax({

						       	url:chatt,

						       	method:"get",

						       	data:{userid:userid},
						       	 
						       	cache:false
						       
						       	}).done(function(data){
                               
                                  
						      $('.chatt-user').fadeIn().html(data);
                                
                                $('.chatt-user').css({
                                     'position':'absolute',
                                     'top':'0',
                                     'width':'100%',
                                     'height':'100%'
                                     

                                });
						
						                          
						  });
						                

                     });




   });


   window.addEventListener("hashchange", function(e){
   	if(e.oldURL.lenght > e.newURL.lenght){

   		   $('.chatt-user').fadeIn();


   	}



   })






   	</script>


</body>
</html>

