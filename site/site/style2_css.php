<?php
header( 'content-type: text/css' );
?>
body{
    margin: 0;
    padding: 0;
    background: #efefef;
    background-size: cover;
    background-position: center;
    font-family:"Audiowide";
    font-size:20px;
    
   
}



a.b{
    font-family:sans-serif;
    
}


.loginbox{
    width: 350px;
    height: 460px;
    background: #fff;
    color: #232;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 28px;
    font-family:"Audiowide";
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
    
}

.loginbox input{
    width: 100%;
    margin-bottom: 37px;
    
}

.loginbox input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #aaa;
    background: transparent;
    outline: none;
    height: 40px;
    color: #000;
    font-family:"Audiowide";
    font-size:16px;
}
.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: darkgreen;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
    font-family:"Audiowide";
}
.loginbox input[type="submit"]:hover
{
    cursor: pointer;
    background: #232;
    color: #fff;
    
}
.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
}

.loginbox a:hover
{
    color: #232;
}

































































