<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  

  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
 <!-- <link rel="stylesheet" type="text/css" href="stylee.css"> -->
  <!-- jQuery library -->



<style>

	*{
margin: 0;
padding: 0;

	}
  .home-chatt-container{
      width: 100%;
      max-width: 768px;
      margin: auto;  

  }
  .home-main-container{
   width: 100%;
   overflow: hidden;
   margin-top: 10px;
  
  
  
  }

  /*

    (hover) ek color deta hai us object ke uper cursor ko lane pr

  */
  .home-main-container:hover{

    background-color: #C9DCE9;
  }

  .home-chatt{

  float: left;
  }
  .home-chatt.image{
   width: 25%;

  }
  .home-chatt.name{

  width: 75%;

  padding-bottom: 10px;

   border-bottom:  1px solid #ccc;
  }
  .home-chatt-image{
    width: 100%;
    max-width: 50px;
    margin: auto;
    height: 50px;
    border-radius: 50%;
    overflow: hidden;

  }
  .home-chatt-image img{
   width: 100%;
   height: 100%;

  }
  .home-chatt-name{
    width: 100%;

  }
  .home-chatt-name-inside{
    float: left;
  }
   .home-chatt-name-inside.name{
    width: 85%;

   }
   .home-chatt-name-inside.date{
    width: 15%;
    
   }
   .home-last-image{
    display: none;
   }
   .home-name p{
    margin-top: 5px;
   }
   .home-last p{
    margin-top: 0px;


   }

   .home-chatt-name-inside p{
     margin-top: 5px;

   }
   .home-last-seen{
    float:left;
   }
   .home-last-seen.seen{
    width: 10%;
   }
    .home-last-seen.name{
    width: 90%;
   }
   .home-last-seen.seen{
    margin-top: 6px;
    font-size: 12px;
   }

    .home-last-count span{
      
          background-color: #21E903;
          color: white;
          padding: 3px;
          padding-left: 5px;
          padding-right: 5px;
          border-radius: 50%;
          font-size: 15px;
          margin-top: 15px;
        

    }

  





</style>
  

 <title>whatsapp setting </title>
</head>
<body>


<div class="home-chatt-container">


</div>












<script src="jquery-3.5.1.min.js"></script>
 <script type="text/javascript">


$(document).ready(function(){


var body, createModelBox, model ;

body =('.home-chatt-user');

      fetch_home_chatt();
       setInterval(function(){
        fetch_home_chatt();

          },1000);   
  function fetch_home_chatt()

     {  
   
      var action = 'fetch_home_chatt';
              
      $.ajax({

        url:"whatsapp_action.php",
        method:"post",
        data:{action_chatt_recieve:action},

        success:function(data){

       $('.home-chatt-container').html(data);
              
             
            }
           
       

               });


              }




 //us person pr click karne pr chatt box open hota hai jo whatsapp_chatt.php

              createModelBox =function (userid ,action){


                 $.ajax({

                    url:action,

                    method:"get",

                    data:{userid:userid},
                     
                    cache:false
                   
                    }).done(function(data){
                               
                          
                  $('.home-chatt-user').fadeIn().html(data);
                                
                   $('.home-chatt-user').css({
                      'position':'absolute',
                      'top':'0',
                      'width':'100%',
                      'height':'100%'
                                     

                    });
            
                                      
              });


              }


//us person pr click karne pr chatt box open hota hai jo whatsapp_chatt.php


            $(document).on('click' ,'.main-chatt',function(){
                   
                var userid =$(this).data('user_id');
                var action =$(this).data('chatt');
                 
                   
                  createModelBox(userid ,action);

                  
                            

           });




   });


   window.addEventListener("hashchange", function(e){
    if(e.oldURL.lenght > e.newURL.lenght){

         $('.home-chatt-user').fadeIn();

        location.reload();
    }



   })









   	</script>


</body>
</html>


