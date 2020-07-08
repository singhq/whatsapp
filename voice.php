
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  

  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
 <!-- <link rel="stylesheet" type="text/css" href="stylee.css"> -->
  <!-- jQuery library -->


<!-- Latest compiled bootstap cdn -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>    

<style>


</style>
  

 <title>voice</title>
</head>
<body>


<div class="main-container" id="result">
	     
	     <input type="text" name="voice" id="mic">

	     <button id="recording">voice</button>



</div>








 <!-- jQuery library -->

 <script src="jquery-3.5.1.min.js"></script>
   <script type="text/javascript">


///let record = document.getElementById("result");

 const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

 const recognition = new SpeechRecognition();



   const mic = $("#mic");

   recognition.continuous= true;


    recognition.onresult=function(event) {
   
         console.log(event);
        
        }

    
   $("#recording").click(function(event){

        recognition.start();

        console.log("activate");
       
   
    });

   

  







   	</script>


</body>
</html>

