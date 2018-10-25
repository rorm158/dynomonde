<?php
header( 'content-type: text/css' );
?>
                                                /* Mise en page site de base*/
html {
    background-color: white;
    background-image: -webkit-linear-gradient(270deg,rgb(230,233,233) 0%,rgb(216,221,221) 100%);
    background-image: linear-gradient(270deg,rgb(230,233,233) 0%,rgb(216,221,221) 100%);
    -webkit-font-smoothing: antialiased;
}
body {
    margin: auto;
    padding: 2em 2em 4em;
    max-width: 800px;
    font-family: "Audiowide";
    font-size: 16px;
    color: #545454;
    background-color: white;
}
h2 {
    font-family:"Audiowide" ;
    color: #232;
    font-weight: bold;
    line-height: 1.6;
}

h1{
    color: #232;
    text-align: center;
    font-family:"Audiowide" ;
}

.principal{
    font-size:50px;
}

p {
    font-family: "Courier New", Courier, monospace;
}

                                                    /* Menu horizontal de navigation*/

.menu {
    list-style-type: none;
    margin: 15px ;
    padding: 0;
    overflow: hidden;
    background-color: #333333;
}

.menu li {
    float: left;
    font-family:"Audiowide" ;
    }

.menu li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
}

.menu li a:hover {
    background-color: #111111;
}

                                                        /* Numéro des mises à jour */

.nbmaj {
 width:500px;
 height:50px;
 background:gray;
 margin:10px;
color: #ffffff;
font-size: 40px;
padding-left: 200px;
}

                                                        /* Contenu des mises à jour */

.textemaj {
 width:400px;
 height:300px;
 background:gray;
 margin-left:300px;
 color: #ffffff;
font-size: 20px;
}

                                                    /* Menu déroulant utilisateur */

.utilimg{
float:right;
width: 50px;
height: 50px;
}

.util{
float:right;
}

.util2 {
display: none;
} 

.util li{
list-style-type:none;
}

.util a{
display:inline-block;
text-decoration:none;
}

.util2 li a{
padding: 15px 10px;
color:white;
background-color:#333333;
width:110px;
height:20px;
}

.util li:hover .util2{
display: inline-block;
position:absolute;
top:75px;
left:1022px;
padding-top:45px;
z-index:100000;
}

.util2 li ul li a{
padding:15px;
width:80px;
}

.util::after{
content="";
display:block;
clear:both;
}
.util2 li a:hover{
    background-color: #111111;
}

                                                    /* Page d'inscription */

.signup{
    margin: auto;
    padding: 2em 2em 4em;
    background-color: #efefef;
    font-size: 16px;
    color: #777;
    font-family: "Audiowide";
    font-weight: 300;
}

#signupbox{
    position: relative;
    margin: 5% auto;
    height: 460px;
    width: 600px;
    background: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
}

.left-box{
    position:absolute;
    top: 0;
    left: 0;
    box-sizing:border-box;
    padding: 50px;
    width: 300px;
    height: 400px;
}

.signup h1{
    font-family:"Audiowide";
    color:#232;
    margin: 0 0 20px 0;
    font-weight: 300;
    font-size: 34px;
}

input[type="text"],input[type="password"]{
    display: block;
    box-sizing: border-box;
    margin-bottom: 20px;
    padding: 4px;
    width: 220px;
    height: 32px;
    border:none;
    outline: none;
    border-bottom: 1px solid #aaa;
    font-family:"Audiowide";
    font-weight: 400;
    font-size: 15px;
    transition: 0.2s ease;
}

input[type="submit"]{
    margin-bottom: 28px;
    width: auto;
    height: 32px;
    background: darkgreen;
    border: none;
    border-radius: 10px;
    color: #fff;
    font-family:"Audiowide";
    font-weight: 500;
    text-transform: uppercase;
    transition: 0.2s ease;
    cursor: pointer;
}

input[type="submit"]:hover,input[type="submit"]:focus{
    background: #232;
    transition: 0.2s ease;
}

.right-box{
    position: absolute;
    top: 0;
    right: 0;
    box-sizing: border-box;
    padding: 40px;
    width: 300px;
    height: 460px;
    background-image: url(../images/image1.jpg);
    background-size: cover;
    background-position: center;

}

.or{
    position: absolute;
    top: 210px;
    left: 280px;
    width: 40px;
    height: 40px;
    background: #efefef;
    border-radius: 50%;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
    line-height: 40px;
    text-align: center;
}

.right-box .signinwith{
    display: block;
    margin-bottom: 40px;
    font-size: 28px;
    color: #fff;
    text-align: center;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
}


button.social{
    margin-bottom: 20px;
    width: 220px;
    height: 36px;
    border:none;
    border-radius: 10px;
    color: #fff;
    font-family: sans-serif;
    font-weight: 500;
    transition: 0.2s ease;
    cursor: pointer;
}

.facebook{
    background: #32508e;

}
.twitter{
    background: #55acee;
}
.google{
    background: #dd4b39;
}

                                                        /* Page de connexion */

.loginbox a{
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

.login h1{
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
    font-family:"Audiowide";
    font-size:18px;
}

.loginbox input{
    width: 100%;
    margin-bottom: 37px;
    
}

.loginbox input[type="text"], input[type="password"], input[type="email"]
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

.loginbox  input[type="submit"]
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