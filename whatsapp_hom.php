<?php
error_reporting();
session_start();
require 'connection.php';

  $userid =$_SESSION['user_id'];

if(!isset($_SESSION['user_id'])){
 header("location: whatsapp_login.php");

}
else{
  //echo $userid;
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

    <script src="jquery-3.5.1.min.js"></script>
    <script src="whatsapp.js"></script>




    <style>
    * {

        margin: 0;
        padding: 0;

    }

    html,
    body {
        height: 100%;
    }

    .home-container {
        width: 100%;
        height: 100%;
        max-width: 768px;
        margin: auto;
        overflow: hidden;

        position: relative;

    }

    .home-top-nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 50px;
        background-color: #075E54;
        cursor: pointer;


    }

    .home-top-nav ul li {
        float: left;


    }

    .home-top-nav ul .name {
        width: 70%;
        margin-left: 7px;
    }

    .home-top-nav ul .icon {
        width: 14%;
    }


    .home-top-nav ul .name a {

        display: block;
        text-align: left;
        font-size: 20px;
        text-decoration: none;
        line-height: 50px;
        color: white;

    }

    .home-top-nav .icon a {

        display: block;
        text-align: center;
        font-size: 20px;
        text-decoration: none;
        margin-top: 15px;
        color: white;
    }

    .home-tab-nav {
        width: 100%;
        height: 50px;
        background-color: #075E54;
        overflow: hidden;
    }

    .home-tab-nav-inside {
        float: left;
    }

    .home-tab-nav-inside.camera {
        width: 7%;

    }

    .home-tab-nav-inside.name {
        width: 93%;

    }

    .home-tab-nav-inside ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 48px;


    }

    .home-tab-nav-inside ul li {
        float: left;


    }

    .home-tab-nav-inside ul li {
        width: 33.33%;

    }

    .home-tab-nav-inside ul li a {

        display: block;
        text-align: center;
        font-size: 16px;
        text-decoration: none;
        line-height: 48px;
        color: white;
        opacity: 0.5;
        filter: alpha(opacity=50);
        cursor: pointer;


    }

    .camera button {


        line-height: 48px;

        width: 100%;
        height: 48px;
        background-color: #075E54;
        border: none;
        color: white;
        opacity: 0.5;
        filter: alpha(opacity=50);

    }

    .home-tab-slide {

        width: 33.33%;
        height: 2px;
        background-color: white;
        overflow: hidden;
    }

    @media screen and (max-width: 320px; ) {
        .home-tab-nav-inside button {


            line-height: 48px;

            width: 100%;
            height: 48px;
            background-color: #075E54;
            border: none;
            color: white;


        }


    }


    .tabs.active {
        opacity: 1.0;
        filter: alpha(opacity=100);
        color: white;
    }

    .home-page-container {
        display: none;
    }

    .home-page-container.activate {
        width: 100%;
        height: 100%;
        display: inherit;
        position: relative;
    }

    .home-top-menu {
        width: 170px;
        top: 4px;
        right: 0;
        right: 5px;
        background-color: white;
        color: #075E54;
        position: absolute;
        display: none;
    }

    .home-top-menu a {
        display: block;
        font-size: 17px;
        padding: 10px;
        cursor: pointer;

    }

    .home-top-menu:target {
        display: inherit;
    }

    .Setting {
        display: none;
        height: 1px;
        color: #075E54;
        top: 0;
        position: absolute;
        width: 100%;

    }

    #Setting:target {

        display: inherit;


    }

    .chatt-icon {
        width: 45px;
        height: 45px;
        background-color: #21E903;
        border-radius: 50%;
        position: absolute;
        top: 70%;
        right: 15%;




    }

    .chatt-icon-image {
        width: 25px;
        height: 25px;
        margin-left: 10px;
        margin-top: 10px;


    }

    .chatt-icon-image img {
        width: 100%;
        height: 100%;
        color: white;

    }

    .home-chatt-user {

        display: none;

    }

    .home-tab-nav-inside ul li a span {}

    .count {

        opacity: 0;
    }
    </style>


    <title>whatsapp home </title>
</head>

<body>

    <div class="home-container">
        <div class="home-top-nav">
            <ul>
              <li class="name"><a>Whatsapp</a></li>
                <li class="icon"><a><i class="fas fa-search"></i></a></li>
                <li class="icon"><a href="#menu"><i class="fas fa-ellipsis-v"></i></a></li>
            </ul>

        </div>

        <div class="home-tab-nav">
            <div class="home-tab-nav-inside camera">
                <button><a><i class="fas fa-camera"></i></a></button>
            </div>
            <div class="home-tab-nav-inside name">

                <ul>
                    <li class="tab-name"><a class="tabs active " id="tab-chats" contaninerId="chats">CHATS<span
                                class="count">0</span></a></li>
                    <li class="tab-name"><a class="tabs " id="tab-status" contaninerId="status">STATUS</a></li>
                    <li class="tab-name"><a class="tabs " id="tab-calls" contaninerId="calls">CALLS</a></li>
                </ul>

                <div class="home-tab-slide">
                </div>
            </div>
        </div>

        <div id="chats" class="home-page-container activate">

            <div class="home-chatt-main-container">

                <?php 

                    include 'whatsapp_home_chatt.php';

                    ?>

            </div>

            <div class="chatt-icon">
                <div class="chatt-icon-image">
                    <a href="whatsapp_contact.php"><img src="image/consult.png"></a>
                </div>

            </div>

        </div>

        <div id="status" class="home-page-container">


            <div class="chatt-icon">
                <div class="chatt-icon-image">
                    <img src="image/2.png">
                </div>

            </div>


        </div>

        <div id="calls" class="home-page-container">


            <div class="chatt-icon">
                <div class="chatt-icon-image">
                    <a href="#"><img src="image/call.png"></a>
                </div>

            </div>



        </div>


        <div class="home-top-menu" id="menu">
            <a> New group</a>

            <a> New broadcast</a>

            <a> Whatsapp Web</a>

            <a> Starred massages</a>

            <a href="whatsapp_Setting.php" style="color: #075E54; text-decoration: none;"> Setting</a><br>


        </div>

        <!---HOME CLASS ONLY CHATT BOX KO SHOW KARAANE KE LIYE HAI WHATSAPP_CHATT.PHP
             -->

        <div class="home-chatt-user">


        </div>


    </div>




    <div class="Setting" id="Setting">
        <?php
          include ('whatsapp_setting.php');
                      
          ?>
    </div>

    <div class="Setting" id="contact">
        <?php
          include ('whatsapp_contact.php');
                      
          ?>
    </div>











    <!-- jQuery library -->

    <script src="jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {

        $('.tabs').click(function() {

            $('.tabs').removeClass('active');
            $(this).addClass('active');
            //content for setting

            $('.home-page-container').removeClass('activate');
            var contaninerId = $(this).attr('contaninerId');
            $("#" + contaninerId).addClass('activate');

            $('#menu').hide();

        });

        $('#tab-chats').click(function() {
            $('.home-tab-slide').animate({
                marginLeft: "0%"
            });

        });




        $('#tab-status').click(function() {

            $('.home-tab-slide').animate({
                marginLeft: "33.33%"
            });

        });

        $('#tab-calls').click(function() {

            $('.home-tab-slide').animate({
                marginLeft: "66.66%"
            });

        });





        // user status  time 

        user_status();
        setInterval(function() {
            user_status();

        }, 10000);

        function user_status()

        {

            var action = 'user_status';

            $.ajax({

                url: "whatsapp_action.php",
                method: "post",
                data: {
                    action_status: action
                },

                success: function(data) {





                }

            });



        }



        // user status last seen or notifuication 

        user_count_unseen_messages();
        setInterval(function() {
            user_count_unseen_messages();

        }, 10000);

        function user_count_unseen_messages()

        {

            var action = 'user_count_unseen_messages';

            $.ajax({

                url: "whatsapp_action.php",
                method: "post",
                data: {
                    action_count_unseen_messages: action
                },

                success: function(data) {

                    $('.count').html(data);



                    $('.count').css({


                        'background-color': 'white',
                        'color': '#075E54',
                        'padding-left': ' 5px',
                        'padding': '3px',
                        'padding-right': '5px',
                        'border-radius': '50%',
                        'font-size': '15px',
                        'margin-left': '3px',
                        'opacity': '1'



                    });



                }

            });



        }







    });
    </script>

</body>

</html>