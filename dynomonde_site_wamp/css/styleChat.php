<?php
header( 'content-type: text/css' );
?>
html , body{
	background:#ecf0f1;
}

header{
		position:absolute;
		top:0px;
		left:0px;
		width:100%;
		height:60px;
		background:#222;
}

header h1{
		color:white;
		font-family:arial;
		font-size:28px;
		position:absolute;
		top:0px;
		left:0px;
		line-height:60px;
		margin:0;
		margin-left:20px;
		font-weight:normal;
}

header nav{
		position:absolute;
		top:0px;
		right:40px;
		height:60px;
}

header nav a{
		transition:all 0.3s ease;
		color:grey;
		font-family:arial;
		text-decoration:none;
		padding-right:20px;
		line-height:60px;

}


header nav a:hover{
	transition:all 0,3s ease;
	color:white;
}
div.content{
	position:absolute;
	top:60px;
}
div.content h2{
	color:#222;
	font-family:arial;
	font-size:40px;
}





div.content div.chatbox {
	position:fixed;
	bottom:0px;
	right:100px;
	width:300px;
	height:400px;
	background:white;
	-webkit-box-shadow: 1px 1px 20px -2px rgba(0,0,0,0.75);
	-moz-box-shadow: 1px 1px 20px -2px rgba(0,0,0,0.75);
	box-shadow: 1px 1px 20px -2px rgba(0,0,0,0.75);
}

div.content div.chatbox div.msgs {
	position:absolute;
	top:0px;
	left:0px;
	width:100%;
	height:350px;
	font-family:arial;
	padding:10px;
	overflow: scroll;
	overflow-x:hidden;
}

div.content div.chatbox div.form {
	position:absolute;
	top:350px;
	left:0px;
	width:100%;
	height:50px;
	border-top:1px solid grey;
	font-family:arial;
}
div.content div.chatbox div.form form {
	margin:10px;
}

div.content div.chatbox div.form form input {
	width:190px;
	height:30px;
	border:2px solid #222;
	border-radius:5px;
	outline:0;
	padding-left:10px;
}

div.content div.chatbox div.form form button {
	width:62px;
	height:32px;
	background:#222;
	color:white;
	border:0;
	cursor:pointer;
}