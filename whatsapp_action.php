<?php
error_reporting(0);
session_start();
require 'connection.php';

  $userid =$_SESSION['user_id'];

if(!isset($_SESSION['user_id'])){
 header("location: whatsapp_login.php");

}

//for whatsapp_setting 

if(isset($_POST['action'])){
  $userid =$_SESSION['user_id'];

$sql ="SELECT * FROM `user` WHERE `user_id` = '$userid' ";

 $result = mysqli_query($conn , $sql);
 while($row = mysqli_fetch_assoc($result)){

 	$username = $row['username'];
 	$user_image = $row['user_image'];

 

 


echo "<a href ='whatsapp_profile.php'>
<div class='setting-profile image'>

      	 	<div class='setting-profile-image'>

      	 	<img src='$user_image'>

            </div>
        </div>
        <div class='setting-profile name'>
        	<a><b>$username</b></a>
        	<a>hey ! there am useing whatsapp</a>

        </div> 
        </a>";

 }

}


// username or photo show karane ke liye 


if($_FILES['file']['name'] !=''){


 $userid =$_SESSION['user_id'];
 $target_dir ="Profile_image/";
$name = $_FILES['file']['name'];
$target_file_name =$target_dir.basename($name);
$profile_url ="http://localhost:8080/whatsapp%20tutorial/Profile_image/".$name;







move_uploaded_file($_FILES['file']['tmp_name'], $target_file_name);


    $sql ="UPDATE `user` SET `user_image`='$profile_url' WHERE `user_id` ='$userid' ";
          
  $result =mysqli_query($conn ,$sql);
  if($result){

  $sql ="SELECT * FROM `user` WHERE `user_id` = '$userid' ";

 $result = mysqli_query($conn , $sql);
 while($row = mysqli_fetch_assoc($result)){

 	$username = $row['username'];
 	$user_image = $row['user_image'];

 


echo " <img src='$user_image'>";

 

 }

}
  

}

//for whatsapp_contact ke liye / new contact add karane ke liye

 

if(isset($_POST['username'])){
 $userid =$_SESSION['user_id'];
 $userName =$_POST['username'];
 $userNumber =$_POST['usernumber'];
  
  
$query =" INSERT INTO `user_contact`(`user_id`, `user_name`, `user_number`) VALUES ('$userid' , '$userName' ,' $userNumber')";

$query_result =mysqli_query($conn, $query);

if($query_result){
  // echo "success";
}
else{
 // echo "error";
}


}


//// contact select all contact function for whatsapp_counts

if(isset($_POST['action_contact'])){
 $userid =$_SESSION['user_id'];

$sql ="SELECT * FROM `user_contact` INNER JOIN `user` ON 
user_contact.user_name = user.username WHERE user_contact.user_id ='$userid' ";


  $result = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_assoc($result)){
         
  $username = $row['username'];
  $user_image = $row['user_image'];
  $userid = $row['user_id'];



  echo "<div class='user-main-users'>
                 <a class='contact' data-action='user-contact' data-user_id='$userid' data-chatt='whatsapp_chats.php'>
                  <div class='user-users image'>
                       <div class='user-users-group'>
                           <div class='user-users-image'>
                                <img src='$user_image'>
                                   
                            </div>
                         </div>
                     </div>
                      <div class='user-users name'>
                       <p><b>$username</b></p>
                       <p>status</p>

                      </div>

               </div>
          </a>


    </div>";




}
}
   // contact of sum function for whatsapp_contact.php

if(isset($_POST['action_count'])){
 $userid =$_SESSION['user_id'];

$sql ="SELECT COUNT(*) sum FROM `user_contact` INNER JOIN `user` ON 
user_contact.user_name = user.username WHERE user_contact.user_id ='$userid' ";


  $result = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_assoc($result)){
         
$count_contact = $row['sum'];

if($count_contact ==null){

     $output="<a style='font-size: 15px;'>0 Contacts</a>";

}
else{

    $output="<a style='font-size: 15px;'>$count_contact Contacts</a>";

}

 echo "<a style='font-size: 20px;'><b>Select contact</b></a>
                $output";


}

}



 /// chatt ke liye jis user pe click kare to usi ki profile dikhai de for whtasapp_chatt

if(isset($_POST['action_details'])){

     $userid =$_POST['user_id'];
     
     $senderId =$_SESSION['user_id']; 

  $sql ="SELECT * FROM `user`WHERE user_id ='$userid' "; 

    
  $result = mysqli_query($conn, $sql);


     
  while($row = mysqli_fetch_assoc($result)){
       
  $username = $row['username'];

  $user_image = $row['user_image'];

  $status = $row['status'];

  
  

  echo "<div class='chatt-nav back'>
                 <div class='chatt-nav-icon'>
            
                  <a class='chatt-close' href='whatsapp_hom.php' ><i class='fas fa-arrow-left'></i></a>
                 </div>
  
            </div>
            <div class='chatt-nav image'>
                 <div class='chatt-nav-image'>
               
                    <img src='$user_image'>
                </div>
            </div>
            <div class='chatt-nav name'>
                <div class='chatt-nav-name'>

                    <a><b>$username</b></a>
                   

                      
                   ".make_status($conn, $status)."


 

               </div>
           </div>
           <div class='chatt-nav camera'>
                <div class='chatt-nav-icon'>
            
                  <a><i class='fas fa-video'></i></a>
                </div>
           </div>
           <div class='chatt-nav call'>
                <div class='chatt-nav-icon'>
            
                  <a><i class='fas fa-phone'></i></a>
                </div>
           </div>
           <div class='chatt-nav menu'>
                <div class='chatt-nav-icon'>

            
                  <a><i class='fas fa-ellipsis-v'></i></a>
                </div>



           </div>";

}
// last seen show query  update karne ke liye  zero update karane ke liye


$sql = "UPDATE `user_chatt` SET `last_seen`='0' WHERE sender_id ='$userid' AND recieve_id ='$senderId'
AND `last_seen` ='1'";

    
if($result = mysqli_query($conn, $sql) or die("not find error:" .mysqli_error($conn))){

  /// echo "success";


}
else{
  echo "error";
}








}


function make_status($conn, $status){

   
      date_default_timezone_set('Asia/kolkata');

       // $status= "";

      $timeStamp = strtotime(date("y-m-d H:i:s").'+40 second');

      $current_timeStamp = date('y-m-d H:i:s', $timeStamp);

     // $loggedTime = time() -150;


            
    //echo $loggedTime;
 
   if($status < $current_timeStamp){

            $output = '<a style="margin-left: -6px; font-size:14px;">online</a>';

            

        }
      else{

         $output = '<a style="margin-left: -6px; font-size:14px;">'.$status.'</a>';
             
        
 
         
         }

   return $output; 


     
}



      
    

     

  
                
 /// chatt ke liye jis user pe click kare to usi ke pass message phuche + data insert karne ke liye for whtasapp_chatt.php

if(isset($_POST['send_message'])){

 $senderId =$_SESSION['user_id'];
 $recieverId =$_POST['user_id'];
 $sendMessage =$_POST['send_message'];

 $type ="text";
  
   
$sql ="INSERT INTO `user_chatt`(`sender_id`, `recieve_id`, `message`, `type`, `last_seen`) VALUES ('$senderId','$recieverId','$sendMessage','$type', '1')";

    
if($result = mysqli_query($conn, $sql) or die("not find error:" .mysqli_error($conn))){

  // echo "success";


}
else{

  echo "error";

}




// whatsapp_hom.php on notification karane ke liye 

//WHERE (`sender_id` ='$senderId' AND 
 // `recieve_id` ='$recieverId' AND `last_seen` ='1' ) 

  $query = "SELECT * FROM `user_chatt` WHERE (`sender_id` = '$senderId' AND `recieve_id`= '$recieverId' AND `last_seen` ='1' )"; 
        
  $result = mysqli_query($conn, $query);
   
   if(mysqli_num_rows($result) ==1){

   // while($row =mysqli_fetch_assoc($result)){

        //  $message =$row['message'];

          //echo $message;

        //  }


    $sql = "UPDATE `user` SET count_chatt = count_chatt+1  WHERE user_id ='$recieverId' ";
    
           $sql_result = mysqli_query($conn, $sql)  or die(" find error:" .mysqli_error($conn));

           if($sql_result){
          //  echo "success";

           }
           else{
            echo "error";
           }
      

   }else{

    echo "error";


   }



}



    


 /// massage show karne ke liye message phuche for whtasapp_chatt.php

if(isset($_POST['action_recieve'])){
  
   $senderId =$_SESSION['user_id'];
   $recieverId =$_POST['user_id'];
     
   $sql ="SELECT * FROM `user_chatt` WHERE (sender_id ='$senderId' AND recieve_id ='$recieverId') OR (sender_id ='$recieverId' AND recieve_id ='$senderId')"; 
       
    

  $result = mysqli_query($conn, $sql);

   if(mysqli_num_rows($result) >0){            

  
  while($row = mysqli_fetch_assoc($result)){
       
   $message = $row['message'];

    $sendId = $row['sender_id'];
    $date = $row['date'];
    $time = date('H:i' , STRTOTIME($date));
    $lastseen =$row['last_seen'];


 

if($sendId == $senderId){

  if($lastseen==1){

  
  echo " <div class='chatt-chatt-right'>
          <div class='chatt-chatt-users '>
       
               <p>$message</p>

          </div>
          <div class='chatt-chatt-seen'>
              <div class='chatt-chatt-time time'>
                 <p>$time</p>

               </div>
               <div class='chatt-chatt-time seen'>
                   
                  <a><i class='fas fa-check'></i></a>
                  
               </div>
          </div>
       </div>";

}
else{

  echo " <div class='chatt-chatt-right'>
          <div class='chatt-chatt-users '>
       
               <p>$message</p>

          </div>
          <div class='chatt-chatt-seen'>
              <div class='chatt-chatt-time time'>
                 <p>$time</p>

               </div>
               <div class='chatt-chatt-time seen'>
                   
                  <a style='color:green;'><i class='fas fa-check-double'></i></a>
                  
               </div>
          </div>
       </div>";




}



}


else{

  if($lastseen==1){
   
     echo "<div class='chatt-chatt-left'>
                     <div class='chatt-chatt-users ''>
       
              <p>$message</p>

          </div>
                  <div class='chatt-chatt-seen'>
                      <div class='chatt-chatt-time time'>
                         <p>$time</p>

                       </div>
                       <div class='chatt-chatt-time seen'>
                           
                          <a><i class='fas fa-check'></i></a>
                          
                       </div>
                  </div>

          </div>";

        }
        else{

            echo "<div class='chatt-chatt-left'>
                     <div class='chatt-chatt-users ''>
       
              <p>$message</p>

          </div>
                  <div class='chatt-chatt-seen'>
                      <div class='chatt-chatt-time time'>
                         <p>$time</p>

                       </div>
                       <div class='chatt-chatt-time seen'>
                           
                       <a style='color:green;'><i class='fas fa-check-double'></i></a>
                          
                       </div>
                  </div>

          </div>";





        }

  
}


}

}



}



 /// contact show karne ke liye home page pr  show karne ke liye message phuche for whtasapp_home_chatt.php

if(isset($_POST['action_chatt_recieve'])){
 $senderId =$_SESSION['user_id'];

$sql ="SELECT * FROM `user_contact` INNER JOIN `user` ON 
user_contact.user_name = user.username WHERE user_contact.user_id ='$senderId' ";


  $result = mysqli_query($conn, $sql);

 foreach ($result as $row) {

   $recieverId =$row['user_id'];

   $user_image =$row['user_image'];
   $Username =$row['username'];



$sql ="SELECT * FROM `user_chatt` WHERE (sender_id ='$senderId' AND recieve_id ='$recieverId') OR (sender_id ='$recieverId' AND recieve_id ='$senderId') ORDER BY id DESC LIMIT 1"; 
       
     
  $result = mysqli_query($conn, $sql);

   if(mysqli_num_rows($result) >0){            

  
  while($row = mysqli_fetch_assoc($result)){
  

       
   $message = $row['message'];

   $date = $row['date'];
    $time = date('Y/m/d' , STRTOTIME($date));
     
     $lastseen = $row['last_seen'];

if($lastseen == 1){



echo " <div class='home-main-container'>

  <a class='main-chatt' data-action='user-chatt' data-user_id='$recieverId' data-chatt='whatsapp_chats.php'>
      <div class='home-chatt image'>
          <div class='home-chatt-image'>
  
           <img src='$user_image'>
         </div>
         
      </div>
      <div class='home-chatt name'>
             <div class='home-chatt-name'>
                 <div class='home-chatt-name-inside name'>
                       <div class='home-name'>
                         <p><b>$Username</b></p>

                      </div>

                       <div class='home-last-seen seen'>

                            <a><i class='fas fa-check'></i></a>
                           
                        </div>
                    <div class='home-last-seen name'>

                      <div class='home-last'>
                         <p>$message</p>
                            
                      </div>
                      <div class='home-last-image'>
                         <p>image</p>
                            
                      </div>
                   </div>
                </div>
                 <div class='home-chatt-name-inside date'>
                      <p style='margin-left:-32px; padding-bottom:5px;'>$time</p>

                 </div>

                         <div class='home-last-count'>
                       
                           
                            ".make_chatt_message($conn ,$senderId ,$recieverId)."
                           
                        </div>

           </div>

      </div>

   </a>
   
 </div>";

}
else{


echo " <div class='home-main-container'>

  <a class='main-chatt' data-action='user-chatt' data-user_id='$recieverId' data-chatt='whatsapp_chats.php'>
      <div class='home-chatt image'>
          <div class='home-chatt-image'>
  
           <img src='$user_image'>
         </div>
         
      </div>
      <div class='home-chatt name'>
             <div class='home-chatt-name'>
                 <div class='home-chatt-name-inside name'>
                       <div class='home-name'>
                         <p><b>$Username</b></p>

                      </div>

                       <div class='home-last-seen seen'>

                            <a style='color:green;'><i class='fas fa-check-double'></i></a>
                           
                        </div>
                    <div class='home-last-seen name'>

                      <div class='home-last'>
                         <p>$message</p>
                            
                      </div>
                      <div class='home-last-image'>
                         <p>image</p>
                            
                      </div>
                   </div>
                </div>
                 <div class='home-chatt-name-inside date'>
                      <p style='margin-left:-32px; padding-bottom:5px;'>$time</p>

                 </div>

                         <div class='home-last-count'>
                       
                           
                            ".make_chatt_message($conn ,$senderId ,$recieverId)."
                           
                        </div>

           </div>

      </div>

   </a>
   
 </div>";




}



}

 }  
   
 }

}


 // user of notification show karane ke liye 

function make_chatt_message($conn ,$senderId ,$recieverId){

  $query = "SELECT COUNT(*) As countMessage FROM `user_chatt` WHERE (`sender_id` ='$recieverId' AND 
  `recieve_id` ='$senderId' AND `last_seen` ='1' ) "; 
       
   //or die("not find error:" .mysqli_error($conn))  
  $result = mysqli_query($conn, $query) or die(" find error:" .mysqli_error($conn));

   if(mysqli_num_rows($result) > 0){            

  while($row = mysqli_fetch_assoc($result)){
       
   $countMessage = $row['countMessage'];


   if($countMessage == 0){
      
      $output ='<span style="background-color:white; display:none;"></span>';
           
   }
   else{
       
      $output ='<span>'.$countMessage.'</span>';
  

   }


}

return $output;
}



}




// user status update for chatt


if(isset($_POST['action_status'])){
   
     $userid =$_SESSION['user_id']; 

    
   $sql ="UPDATE `user` SET `status`=now() WHERE `user_id` ='$userid' "; 

    
      $result = mysqli_query($conn, $sql);
     
  
      if( $result){

        //  echo "success";

       }

else{
     echo "error";

  }

        }



/// last seen chatt on notification for whatsapp_hom.php


    if(isset($_POST['action_count_unseen_messages'])){
              
      $senderId =$_SESSION['user_id'];
  
     
   $sql ="SELECT * FROM `user` WHERE user_id ='$senderId'  "; 
         
  $result = mysqli_query($conn, $sql);

   if(mysqli_num_rows($result) >0){            

  while($row = mysqli_fetch_assoc($result)){
       
   $countMessage = $row['count_chatt'];

    echo  $countMessage;



}

}

}




// 


if(isset($_POST['action_count_unseen_message'])){

     $recieverId =$_POST['user_id'];
     
     $senderId =$_SESSION['user_id']; 

 

  $query = "SELECT * FROM `user_chatt` WHERE (`sender_id` ='$recieverId' AND 
  `recieve_id` ='$senderId' AND `last_seen` ='1' ) "; 
       
   //or die("not find error:" .mysqli_error($conn))  
  $result = mysqli_query($conn, $query) or die(" find error:" .mysqli_error($conn));

   if(mysqli_num_rows($result) > 0){            

    while($row = mysqli_fetch_assoc($result)){


       $sql = "UPDATE `user_chatt` SET `last_seen`='0' WHERE sender_id ='$recieverId' AND recieve_id ='$senderId'
          AND `last_seen` ='1'";

    
         if($result = mysqli_query($conn, $sql) or die("not find error:" .mysqli_error($conn))){

            //echo "success";


         } else{

           echo "error";

             }


  $sql = "UPDATE `user` SET count_chatt = count_chatt-1  WHERE user_id ='$senderId' ";
    
           $sql_result = mysqli_query($conn, $sql)  or die(" find error:" .mysqli_error($conn));

           if($sql_result){
          //  echo "success";

           }
           else{
            echo "error";
           }
      










    



}

}


}


?>