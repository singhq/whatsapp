

  //for whatsapp_profile_inform
$(document).ready(function(){
  
    settings();

	function settings()
	{

      var action = 'settings';

       $.post("whatsapp_action.php",{action:action}

         ,function(data, status){
          
          
          $(".setting-user-profile").html(data);
           
           
         });

     }


    //for whatsapp_profile

$(document).on('change', '#Profile_image' ,function(){

var fordata =new FormData();


var files =document.getElementById('Profile_image').files[0];

fordata.append("file", files);
   
       $.ajax({

       	url:"whatsapp_action.php",
       	method:"post",
       	data:fordata,
       	contentType:false,
       	cache:false,
       	processData:false,

       	success:function(data){

          $(".profile-image").html(data);

               $('.info-dailog').hide();

        
     }
        
           
         });

});


$('#save').click(function(){
  var userName =$('#username').val();

   var userNumber =$('#usernumber').val();

   if(userName !='' && userNumber !='')
   {


  
       $.post("whatsapp_action.php",{username:userName ,usernumber:userNumber}

         ,function(data, status){

        $('.add-contact-container').hide();
             
             fetch_user_contact();

             fetch_user_count();
               
         });

    }
    else{

        $('.message').text("Plss fill all field...");

    }

});


// contact sum function for whatsapp_contact
   fetch_user_contact();
     setInterval(function(){
      fetch_user_contact();

     },1000);

  function fetch_user_contact()
  {

       var action = 'fetch_user_contact';
            
       $.post("whatsapp_action.php",{action_contact:action}

         ,function(data, status){
         
    
          $(".user-contact-users").html(data);
         
          
         });

     }



// contact sum function for whatsapp_counts

 fetch_user_count();
    

  function fetch_user_count()
  {

       var action = 'fetch_user_count';
            
       $.post("whatsapp_action.php",{action_count:action}

         ,function(data, status){
         
    
          $(".contact-top-name").html(data);
         
          
         });

     }






        
});










