<?php session_start(); ?>
<nav>
    <div class="logo">
        <img src="../store/clothe.jpg" alt="">
    </div>

    <div class="bars" onclick="show()">
        <i class="ham">&#9776;</i>
    </div>
    
    <div class="other">

        <div class="notification navs">
            <span class="notify">Notification</span>
            <i class="fa fa-bell">
                <sup>1</sup>
            </i>
        </div>
        
        <div class="profile navs">
        <span class="me"><?php 
        if(isset($_SESSION['name'])){
        echo $_SESSION['name'];
        }
        else{
            echo " ";
        } ?></span>
        <i class="fa fa-user"></i>
        <div class="menu">
            <div class="triangle"></div>
            <span class="profile">Profile</span>
            <span class="settings">Settings</span>
            <span class="log">Log out</span>
        </div>
        </div>
       
    </div>
</nav>