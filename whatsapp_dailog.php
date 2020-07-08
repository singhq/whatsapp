
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  

  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
 <!-- <link rel="stylesheet" type="text/css" href="stylee.css"> -->
  <!-- jQuery library -->


<!-- Latest compiled bootstap cdn 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>    -->

<script src="jquery-3.5.1.min.js"></script>
<script src="whatsapp.js"></script>  


<style>

	*{
		margin: 0;
		padding: 0;
	}
	.dailog-container{
		width: 100%;
		max-width: 768px;
		margin: auto;
	}
	.dailog-name{
      width: 100%;
     background-color: #0E94C7;
    padding-top: 5px;
    padding-bottom: 5px;


	}
	.dailog-p{
		margin-left: 9%;
		font-size: 20px;
		color: white;
	}
	.dailog-icon{
     width: 100%;
     background-color: #030D40;
    
	}
	.detail-icon-inside{
		
		width: 44%;
	}
	.detail-icon-image{
		width: 100%;
		height: 75px;
		max-width: 75px;
		margin: auto;
		background-image:url(image/color-wheel.png);
		background-size: cover;
		overflow: hidden;
		
	}
	.dailog-icon-camera{
		width: 100%;
		height: 30px;
		max-width: 30px;
		margin: auto;
		margin-top: 18px;

	}
	.dailog-icon-camera img{
		width: 100%;
		height: 100%;
		margin-top: 5px;
		border: none;
		
	}
	.dailog-icon-camera p{
		margin-top: 10px;
	}
	.detail-icon-image-tag {
		color: white; 
         margin-left: 39%
		
		
	}
	



.detail-icon-inside-gallery{
  width: 87%;


}
	.dailog-icon-gallery{
		width: 100%;
		height: 74px;
		max-width: 74px;
		margin: auto;
		
		background-size: cover;
		overflow: hidden;
		margin-left: 80%;
		margin-top:-93px;
		
	}
	.dailog-gallery-icon{
		width: 100%;
		height: 72px;
		max-width: 72px;
		margin: auto;
        position: relative;
		
		
	}
	.dailog-gallery-icon img{
		width: 100%;
		height: 100%;
		margin-top: 2px;
		border-radius: 52px;
	}

	.detail-icon-inside-gallery p{
         margin-left: 82%;
		color: white;
		
		
	}
	span input[type=file]{
       position: absolute;
       left: 0;
       top: 28px;
       opacity: 0;

	}








</style>
  

 <title>whatsapp dailog</title>
</head>
<body>



<div class="dailog-container">
	<div class="dailog-name">
		 <div class="dailog-p">
		 <p><b>Profile Photo</b></p>
        </div>
	</div>
	<div class="dailog-icon">
		 <div class="detail-icon-inside">
		 	 <div class="detail-icon-image">
		         <div class="dailog-icon-camera">
		
                   <img src="image/2.png">
                    
                  </div>
                  
	         </div>
	             <div class="detail-icon-image-tag">
	             	
	             	<p">Camera</p>
	             </div>
	             
	       
	    </div>

	          
		
	     <div class="detail-icon-inside-gallery">
	     	  <div class="dailog-icon-gallery">
		         <div class="dailog-gallery-icon">
		           
		           <span>
                      <img src="image/green.png" id="select_profile_image"> 
                        
                        <input type="file" name="Profile_images" id="Profile_image" onchange="readUrl(this);" accept="image/+">
                   </span>


	             </div>

	          </div>

	           
	             <p>Gallery</p>
          
		

	     </div>
	        

	</div>
		
 


</div>






 <!-- jQuery library -->

 <script src="jquery-3.5.1.min.js"></script>
   <script type="text/javascript">







   	</script>


</body>
</html>

