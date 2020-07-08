<?php
error_reporting(0);

require 'connection.php';
  session_start();


$userid =$_SESSION['user_id'];

?>







<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  

  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
 <!-- <link rel="stylesheet" type="text/css" href="stylee.css"> -->
  <!-- jQuery library -->


<!-- Latest compiled bootstap cdn  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/javascript.util/0.12.12/javascript.util.min.js"></script>

<script src="jquery-3.5.1.min.js"></script>
<script src="whatsapp.js"></script>   

<style>

	*{
		margin: 0;
		padding: 0;
	}
  .chatt-container{
    width: 100%;
    max-width:768px; 
    margin:auto;
    max-height: auto;
    height: 100vh;
   background-image:url("image/whtasapp-image.png");
    
  }
  .main-container{
    height: 82%;
    overflow-y:scroll;  
   
  }

.chatt-nav-bar{
  width: 100%;
  height: 50px;
  background-color: #075E54;
  overflow: hidden;
 

}
.chatt-nav{
 float: left;
}
.chatt-nav.back{
 width: 10%;
}
.chatt-nav.image{
 width: 15%;
}


.chatt-nav.name{
width: 50%;
margin-left:-45px;
}
.chatt-nav.camera{
 width: 10%;
 margin-left: 6px;

}
.chatt-nav.call{
  width: 10%
}
.chatt-nav.menu{
 width: 10%;
}
.chatt-nav-icon{
  width: 100%;

  }
  .chatt-nav-icon a{
  width: 100%;
   display: block;
   text-align: center;
   margin-top: 18px;
   color: white;
  }
  .chatt-nav-image{
    width: 100%;
    max-width: 35px;
    height: 35px;
    margin: auto;
    border-radius: 50%;
    overflow: hidden;
    margin-top: 10px;
  }
.chatt-nav-image img{
  width: 100%;
  height: 100%;
}
.chatt-nav-name{
  width: 100%;

 margin-top: 7px;
  }
  .chatt-nav-name a{
  width: 100%;
   display: block;
   text-align: center;
   color: white;
  
  }
  .chatt-bottom-container{
    width: 100%;
    max-width:768px; 
    margin:auto;
    bottom: 10px;
    position: fixed;
    height: 50px;
   
  }
  .chatt-main-container{
    float: left;
  }

  .chatt-main-container.chatt{
     width: 80%;
  }
  .chatt-main-container.send{
     width: 20%;
  }
  .chatt-main-chatt{
   
     width: 100%;
     max-width: 100%;
     height: 50px;
     margin: auto;
     background-color: white;
     border-radius: 30px;


  }

  .chatt-main-icon{
    float: left;
  }
  .chatt-main-icon.smile{
    width: 10%;

  }
  .chatt-main-icon.chatt{
     width: 69%;
  }
  .chatt-main-icon.attach{
    width: 10%;
  }
  .chatt-main-icon.camera{
   width: 10%;
  }
  
  .chatt-main-image{
    width: 100%;
    max-width: 21px;
    height: 21px;
    margin: auto;
    margin-top: 15px;
  }
    .chatt-main-image img{
    width: 100%;
    height: 100%;
  }
  .chatt-main-icon input[type=text]{
    width: 100%;
    padding: 5px;
    margin-top: 10px;
    font-size: 15px;
    border: none;
  }
  .chatt-main-send{
    width: 100%;
    max-width: 40px;
    height: 40px;
    background-color:#075E54;
    border-radius: 50%; 
    margin: auto;
    overflow: hidden;
    margin-top: 5px;

  }

  /*  for recording perpose  */

  .rocording{
    width: 100%;
    max-width: 55px;
    height: 55px;
    background-color:red;
    border-radius: 50%; 
    margin: auto;
    overflow: hidden;
    margin-top: 5px;

  }
.chatt-main-send-image{
  width: 100%;
  max-width: 20px;
  height: 20px;
  margin: auto;
  border-radius: 50px;
  overflow: hidden;
  margin-top: 10px;

}
.chatt-main-send-image img{
  width: 100%;
  height: 100%;
}
.chatt-chatt-container{
 width: 100%;


}
.chatt-chatt-right{
 
 background-color: #E0F19F;
 margin-right: 5px;
 margin-top: 5px;
 border-radius: 10px;
 padding: 10px;
 float: right;
 display: inline-block;
 margin-left: 50%;



}

.chatt-chatt-users{
  width: 100%;
}

.chatt-chatt-seen{
  width: 100%;

}
.chatt-chatt-time{
 float: left;

}
.chatt-chatt-time.time{
  width: 90%;

}
.chatt-chatt-time.seen{
  width: 10%;

}
.chatt-chatt-time p{
  text-align: right;
  margin-right: 3px;
  }
  .chatt-chatt-time a{
  font-size: 10px;
  }
  .chatt-chatt-users p{
  font-size: 17px;

}

.chatt-chatt-left{
 
 background-color: white;
 margin-left: 5px;
 margin-top: 5px;
 border-radius: 10px;
 padding: 10px;
margin-right:50%;
display: inline-block;
float: left;

 

}





</style>
  

 <title>whatsapp contact </title>
</head>
<body>

<div class="chatt-container">
      
       <div class="chatt-nav-bar">
           
          

     </div>

  <div class="main-container">
     <div class="chatt-chatt-container">
     


   </div>





         <div class="chatt-bottom-container">
                 <div class="chatt-main-container chatt">
                      <div class="chatt-main-chatt">
                            <div class="chatt-main-icon smile">
                                  <div class="chatt-main-image">
                            
                                    <img src="image/5.png">
                                 </div>
                      
                            </div>
                            <div class="chatt-main-icon chatt" id="msg">
                              
                                <input type="text"  name="" placeholder="Type a message...." id="type_chatt">

                            </div>
                            <div class="chatt-main-icon attach">
                                 <div class="chatt-main-image">
                            
                                    <img src="image/paperclip.png" id="attach">
                                 </div>

                            </div>
                            <div class="chatt-main-icon camera">
                                  <div class="chatt-main-image" id="camer">
                            
                                    <img src="image/6.png" id="camera">

                                    <img src="image/paperclip.png" id="files" style="display: none;">

                                 </div>

                            </div>
                            
                      </div>

                 </div>
               <div class="chatt-main-container send">
                      <div class="chatt-main-send">
                            <div class="chatt-main-send-image">
           
                              <img src="image/microphone.png" id="record">

                              <img src="image/send.png" id="send">
                               
                            </div>

                     </div>

               </div>


         </div>
   </div>
</div>






 <!-- jQuery library -->


   <script type="text/javascript">
 $(document).ready(function(){



     
   var time =  setInterval(function(){

        fetch_user_details();

        fetch_message();

        count_unseen_message();



     },10000);



$(window).on('popstate' , function(){

$('.home-chatt-user').remove();

$('chatt-user').remove();

clearInterval(time);

});


     $('#type_chatt').keyup(function(){ 
      
         var chatt_length =$('#type_chatt').val();

      
         if(chatt_length.length > 0){
          
                $('#record').hide();

                $('#send').show();

                $('#attach').hide();

                $('#camera').hide();

                $('#files').show();
     
         //  $('#camera').attr('src', 'image/paperclip.png'); 

         }

         else{
                 $('#record').show();

                 $('#send').hide();

                 $('#attach').show();

                 $('#camera').show();

                 $('#files').hide();

         
       }

       }); 

     
      $('.chatt-close').click(function(e){ 
         e.preventDefault();

         window.history.go(-1).fadeOut();

        });


      /// chatt ke liye jis user pe click kare to usi ki profile dikhai de 

  fetch_user_details();

  function fetch_user_details()
  {

      var userid = <?php echo $_GET['userid']; ?> 

      var action = 'fetch_user_details';
              
       $.post("whatsapp_action.php",{action_details:action,user_id:userid}
           
         ,function(data, status){

          $('.chatt-nav-bar').html(data);

      
         });

     }



 /// chatt ke liye jis user pe click kare to usi ke pass message phuche 

      send_message();
   
  function send_message()
  {

     $('#send').click(function(){ 

       var send_message =$('#type_chatt').val();

      var userid = <?php echo $_GET['userid']; ?> 

      var action = 'send_message';
              
       $.post("whatsapp_action.php",{action_send:action,user_id:userid,send_message:send_message}
           
         ,function(data, status){

            
         fetch_message();
             
           
                });


        });

    

   

     }




    
     fetch_message();
     setInterval(function(){
      fetch_message();

     },1000);   
 function fetch_message()

   {  
  

      var userid = <?php echo $_GET['userid']; ?> 

      var action = 'fetch_message';
              
      $.ajax({

        url:"whatsapp_action.php",
        method:"post",
        data:{action_recieve:action,user_id:userid},

        success:function(data){

       $('.chatt-chatt-container').html(data);
              
            }
           
                });

      

     }








     count_unseen_message();
     setInterval(function(){
      count_unseen_message();

     },1000);  

 function count_unseen_message()

   {  
  

      var userid = <?php echo $_GET['userid']; ?> 

      var action = 'fetch_message';
              
      $.ajax({

        url:"whatsapp_action.php",
        method:"post",
        data:{action_count_unseen_message:action, user_id:userid},

        success:function(data){

      
              
            }
           
                });

      

     }



 });






// javascript cod  for speech recognitio 


let record = document.getElementById("record");

//let send = document.getElementById('type_chatt')

 const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

 const recognition = new SpeechRecognition();



   recognition.onresult=function(event) {

        let resultIndex =event.resultIndex;
        let transcript = event.results[resultIndex][0].transcript;

 
         document.getElementById('type_chatt').value =transcript;
         
             console.log(transcript);

      
              }

        recognition.onend=function(){

          record.style.background='';
        }

    record.addEventListener("click", function(){
       record.style.background='red';

        recognition.start();

        console.log("activate");
       
   
    });

    // send karne ke bad message ko blank karne ke liye 

    





   	</script>


</body>
</html>

