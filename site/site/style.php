<?php
header( 'content-type: text/css' );
?>
html {
    background-color: white;
    background-image: -webkit-linear-gradient(270deg,rgb(230,233,233) 0%,rgb(216,221,221) 100%);
    background-image: linear-gradient(270deg,rgb(230,233,233) 0%,rgb(216,221,221) 100%);
    -webkit-font-smoothing: antialiased;

}

body {
    margin:  auto;
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

.nbmaj {
 width:500px;
 height:50px;
 background:gray;
 margin:10px;
color: #ffffff;
font-size: 40px;
padding-left: 200px;
}
.textemaj {
 width:400px;
 height:300px;
 background:gray;
 margin-left:300px;
 color: #ffffff;
font-size: 20px;
}

.utilimg{
float:right;
width: 50px;
height: 50px;
}

.util{
float:right;
}

.aled {
display: none;
} 

.util li{
list-style-type:none;
}

.util a{
display:inline-block;
text-decoration:none;
}

.aled li a{
padding: 15px 10px;
color:white;
background-color:#333333;
width:110px;
height:20px;
}

.util li:hover .aled{
display: inline-block;
position:absolute;
top:75px;
left:1022px;
padding-top:45px;
z-index:100000;
}

.aled li ul li a{
padding:15px;
width:80px;
}

.util::after{
content="";
display:block;
clear:both;
}
.aled li a:hover {
    background-color: #111111;
}