<!DOCTYPE html>
<?php
require 'static/php/system/database.php';
require 'static/php/system/config.php';
?>
<html lang="pt-br">
<head>
<title>AniFlix - Error 404</title>
<link rel="stylesheet" type="text/css" href="http://localhost/assets/css/style.css"/>
<script type="text/javascript" src="http://localhost/assets/js/index.js"></script>
<script type="text/javascript" src="http://localhost/assets/js/all.js"></script>
<script type="text/javascript" src="http://localhost/assets/js/scroll.js"></script>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<link rel="stylesheet" href="http://localhost/aniflix/assets/css/google/icons.css">
<meta charset="utf-8">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
          <style>
		    div#endcopy{float:left; width:100%; height:auto; color:#FFF; background-color:#000;}
div#endcopy div#aligncts{float:left; margin-left:10%; width:80%; padding-top:0.8vw; padding-bottom:0.8vw;}
div#endcopy p{float:left; font-size:1.5vw; width:33.333%; text-align:center;}
div#endcopy p#right{border-left:0.1vw solid #111; padding-top:1vw; height:5.5vw;}
div#endcopy p a{color:#FFF; transition:color 0.25s; -webkit-transition:color 0.25s;}
div#endcopy p a:hover{color:#e50000;}
		 /*--Info Importantes--*/
:focus{outline:0;}
*{margin:0; padding:0; -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box;}
a,li{text-decoration:none; list-style:none;}
html,body{font-family:Arial, Helvetica, sans-serif; background-color:#f7f7f7; overflow-x:hidden; overflow:auto; width:100%; height:100%;}
input,textarea{font-family:Arial, Helvetica, sans-serif;}
body#inikopy{overflow-y:auto;}
body#fullscreen{overflow-y:hidden;}
video{object-fit:contain;}
		 /*--Header--*/
header{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;position:fixed;top:0;left:0;z-index:10;width:100%;height: 4.72vw;background-color:rgba(0,0,0,0.95);padding-top:1.1%;overflow:hidden;padding-bottom:1%;border-bottom:0.1vw solid #111;display:inline-block;}
header div#alignco{left:0; margin-left:10%; position:relative;  width:80%;} 
header div#logo{background:url('https://www.playanima.com/static/img/logo.png'); float:left; width:6.2vw; height:2.4vw; margin-right:2vw; backgrond-repeat:no-repeat; background-size:cover;}
header nav#left{display:inline; left:0;}
header nav#left ol a{color:#FFF; display:inline;} 
header nav#left ol li{font-family:Arial, Helvetica, sans-serif; font-weight:bold; overflow:hidden; float:left; display:inline; margin-right:2vw; font-size:1.4vw; background:transparent; border:0.1vw solid transparent; padding-top:0.4vw; padding-bottom:0.4vw; padding-left:0.6vw; padding-right:0.6vw; color:#FFF; border-radius:0.2vw; transition:border 0.25s; -webkit-transition:border 0.25s; transition:background-color 0.25s; -webkit-transition:background-color 0.25s;}
header nav#left ol li#selected{border:0.1vw solid #e50000; background-color:#e50000;}
header nav#left ol a:hover > li{border:0.1vw solid #e50000; background-color:#e50000;}
header div#right{right:0; display:inline; position:relative;}
header input{float:left; position:relative; font-family:Arial, Helvetica, sans-serif; text-align:left; height:2.6vw; width:16vw; margin-right:2vw; color:#FFF; font-size:1.2vw; background-color:rgba(0,0,0,0.2); border:0.1vw solid #FFF; border-radius:0.2vw; padding-top:0.2vw; padding-bottom:0.2vw; padding-left:2vw; padding-right:2vw; transition:border 0.25s; -webkit-transition:border 0.25s;}
header form button{float:left; border:none; cursor:pointer; background:transparent; position:relative; width:2.4vw; height:2.4vw; margin-top:0; margin-left:-4.7vw;}
header form button svg{float:left; width:100%; height:100%; padding-top:0.2vw; padding-bottom:0.2vw;}
header input:hover{border:0.1vw solid #e50000;}
header input:focus{border:0.1vw solid #e50000;}
header div#right button{font-family:Arial, Helvetica, sans-serif;font-weight:bold;overflow:hidden;margin-left: 1vw;float:right;position:relative;background:transparent;color:#FFF;cursor:pointer;border:0.1vw solid transparent;border-radius:0.2vw;padding-top:0.4vw;padding-bottom:0.4vw;font-size:1.4vw;padding-left:0.6vw;padding-right:0.6vw;transition:border 0.25s;-webkit-transition:border 0.25s;transition:background-color 0.25s;-webkit-transition:background-color 0.25s;}
header div#right button.username{max-width:10.5vw; overflow:hidden; white-space:nowrap; text-overflow:ellipsis;}
header div#right button:hover{border:0.1vw solid #e50000; background-color:#e50000;}
header div#right div#dehoveracc{cursor:pointer; opacity:0; position:fixed; width:auto; z-index:10; height:auto; top:4.7vw; right:17.35vw; transition:opacity 0.25s; -webkit-transition:opacity 0.25s;}
header div#right div#dehoveracc.user1{right:7.35vw;}header div#right div#dehoveracc.watch{position:fixed; z-index:15; right:7.35vw;}
header div#right div#dehoveracc.anime1{right:17.35vw;}
header div#right div#dehoveracc ol{cursor:pointer; position:relative; float:left; background-color:rgba(0,0,0,0.95); padding:0.4vw; z-index:11; width:10vw; border-radius:0vw 0vw 0.2vw 0.2vw; transition:opacity 0.25s; -webkit-transition:opacity 0.25s;}
header div#right div#dehoveracc ol a{color:#FFF; float:left; width:100%; position:relative; transition:color 0.25s; -webkit-transition:color 0.25s;}
header div#right div#dehoveracc ol a li:hover{color:#e50000}
header div#right div#dehoveracc ol a li{text-align:center; position:relative; float:left; width:100%; height:auto; padding-top:0.2vw; padding-bottom:0.2vw; color:#FFF; font-size:1.2vw; font-weight:bold;}
div#localhover:hover + div#dehoveracc{opacity:1; transition:opacity 0.25s; -webkit-transition:opacity 0.25s;}
header div#right div#dehoveracc:hover{opacity:1;}
        body {
          background-color: #232222;
          color: #A09895;
          font-family: "Helvetica Neue", Arial, sans-serif;
          font-size: 1rem;
          line-height: 1.5;
        }

        a {
          color: #FFF;
          text-decoration: none;
        }

        a:hover {
          color: RED;
          text-decoration: underline;
        }

        main {
          border-spacing: 1rem;
          display: table;
          margin: 6rem auto;
          max-width: 37rem;
          text-align: left;
        }

        main p:first-child {
          font-size: 2rem;
          font-weight: bold;
          margin-top: 0;
        }

        .error-image {
          display: table-cell;
          width: 120px;
        }

        .error-text {
          display: table-cell;
          vertical-align: top;
        }

        .status-code {
          font-size: 2em;
          line-height: 0.75em;
        }

        .copyright {
          color: #A09895;
          font-size: 0.75em;
          margin: 0 auto;
          text-align: center;
        }
      </style>
      </head>
  <body>
    <main>
	<!--Header-->
<header id="header">
<center><div class="logo"></div></center>
<?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession']))){
$iduser = $_COOKIE['iduser'];
$users = DBRead( 'users', "WHERE id = $iduser ORDER BY id ASC LIMIT 1" );
 if (!$users)
	echo "";
else 
	foreach ($users as $user):
?>


<script type="text/javascript">
	var perfilli = document.getElementById('perfil');
	var perfilright = document.getElementById('perfil-right');
	var closeperfil = document.getElementById('closeinfoprofile');
	perfilli.addEventListener('click', function(e){
 				e.stopPropagation();
				perfilright.style = 'display:block;';
 			});
				closeperfil.addEventListener('click', function(e){
 				e.stopPropagation();
				perfilright.style = 'display:none;';
 			});
			</script>

<script type="text/javascript">
	var menuusuario = document.getElementById('divmenuusuario');
	var fotoperfil = document.getElementById('profilefoto');
	fotoperfil.addEventListener('click', function(e){
 				e.stopPropagation();
				menuusuario.style = 'opacity:0.85;transition:opacity 0.25s; -webkit-transition:opacity 0.25s;';
 			});
			document.addEventListener('click', function(){
				menuusuario.style = 'opacity:0;transition:opacity 0.25s; -webkit-transition:opacity 0.25s;';
			});
			document.addEventListener('click', function(){
					dp.style = 'opacity:0;opacity 1.25s; -webkit-transition:opacity 0.25s;transition:width 0.25s; -webkit-transition:width 0.25s;';
					icon_not.style = 'opacity:1;';
				});
</script>

<?php endforeach; }else{ ?>
<a href="http://localhost/account"><p class="login-cadastro">Login</p></a>
<?php }?>

<script>
				var icon_not = document.getElementById('button-search');
				var dp = document.getElementById('searchinput');
				var input = document.getElementsByClassName('nome');
 			icon_not.addEventListener('click', function(e){
 				e.stopPropagation();
 				dp.style = 'opacity:1;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;';
				icon_not.style = 'opacity:0;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;';	
				input.style = 'opacity:1;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;width:15vw;transition:width 1.25s; -webkit-transition:width.25s;';
				input.style = 'opacity:1;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;width:15vw;transition:width 1.25s; -webkit-transition:width 1.25s;';
 			});
			dp.addEventListener('click', function(e){
 				e.stopPropagation();
 				dp.style = 'opacity:1;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;';
				icon_not.style = 'opacity:1;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;';
				input.style = 'opacity:1;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;width:15vw;transition:width 1.25s; -webkit-transition:width 1.25s;';
 			});
			input.addEventListener('click', function(e){
 				e.stopPropagation();
				input.style = 'opacity:1;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;width:15vw;transition:width 1.25s; -webkit-transition:width 1.25s;';
 			});
</script>
</div>
</header>
            <div class="error-image">  <svg viewBox="0 0 130 188">
  <g id="XMLID_53_">
    <path id="XMLID_84_" fill="#E8E8E8" d="M37.8,146.5c0-0.8-0.1-1.5-0.2-2.2c-0.8-4.8-6.5-8.6-11.3-7.6c-6.6,1.4-5.6,11-5,15.9
      c0.5,3.7,1.2,7.4,2.3,11c1.8,5.9,3.1,11.8,6.9,16.7c1.3,1.7,5.9,2.6,7.5,0.8c1.4-1.7,0-4.4-0.2-6.4c-0.4-7.6-0.2-15.1-0.2-22.8
      C37.6,150.2,37.8,148.3,37.8,146.5z"/>
    <path id="XMLID_83_" fill="#E8E8E8" d="M92.8,146.5c0-0.8,0.1-1.5,0.2-2.2c0.8-4.8,6.5-8.6,11.3-7.6c6.6,1.4,5.6,11,5,15.9
      c-0.5,3.7-1.2,7.4-2.3,11c-1.8,5.9-3.1,11.8-6.9,16.7c-1.3,1.7-5.9,2.6-7.5,0.8c-1.4-1.7,0-4.4,0.2-6.4c0.4-7.6,0.2-15.1,0.2-22.8
      C93,150.2,92.8,148.3,92.8,146.5z"/>
    <path id="XMLID_82_" fill="#E8E8E8" d="M63.3,163.2c-0.8,0.5-1.6,1-2.6,1.3c-1.9,0.6-3.9,1.2-6,1.3c-3,0.1-5.9-0.4-8.8-1.3
      c-7.4-2.4-14.5-6.5-19.9-12.2c-10.5-11.1-13.4-27.8-9.9-42.3c1.6-6.5-8.7-7.9-10.3-1.5c-4.7,19,0.9,39.9,15.2,53.3
      c8.9,8.3,21.9,14.5,34.3,13.4c3.3-0.3,6.5-1.4,9.3-3.2c1.8-1.1,3.7-2.6,4.5-4.6c1-2.7-1.3-5.6-4.2-5
      C64.5,162.6,63.9,162.9,63.3,163.2z"/>
    <path id="XMLID_81_" fill="#FFFFFF" d="M92.5,95.1c-1.7-3.1-3.6-1.5-7-3.4c-5.2-2.9-11.6-3.4-17.5-3.1c-1.2,0.1-2,0.1-2.7,0.2
      c-0.6-0.1-1.5-0.2-2.7-0.2c-5.9-0.3-12.4,0.3-17.5,3.1c-3.4,1.9-5.4,0.3-7,3.4c-3.8,7-32,62.8-9,76.8c6.4,3.9,19.7,5.7,32.9,6v0
      c0.3,0,0.5,0,0.8,0c0,0,0.1,0,0.1,0c0.4,0,0.7,0,1.1,0c0.2,0,0.3,0,0.5,0c0.3,0,0.5,0,0.8,0c0.3,0,0.5,0,0.8,0c0.2,0,0.3,0,0.5,0
      c0.4,0,0.7,0,1.1,0c0,0,0.1,0,0.1,0c0.3,0,0.5,0,0.8,0v0c13.3-0.3,26.6-2.1,32.9-6C124.5,157.9,96.3,102.1,92.5,95.1z"/>
    <path id="XMLID_80_" fill="#E8E8E8" d="M88.2,148.8c-0.4-0.5-0.8-1-1.2-1.5c0,0.1,0,0.2,0,0.3c-0.4,4.4-0.6,8.8-2.3,13
      c-3.1,7.5-11.3,11.1-19,11.1c-7.4,0.1-16.1-2.3-20-9.2c-1.4-2.4-2.7-5.4-3.5-8.5c-0.2,5.6,1.3,11.5,2.8,16.7c0.6,2.1,1.3,4.1,2,6.2
      c4.8,0.6,9.9,0.9,15.1,1v0c0.3,0,0.5,0,0.8,0c0,0,0.1,0,0.1,0c0.4,0,0.7,0,1.1,0c0.2,0,0.3,0,0.5,0c0.3,0,0.5,0,0.8,0
      c0.3,0,0.5,0,0.8,0c0.2,0,0.3,0,0.5,0c0.4,0,0.7,0,1.1,0c0,0,0.1,0,0.1,0c0.3,0,0.5,0,0.8,0v0c5.7-0.1,11.3-0.5,16.5-1.2
      C88.4,167.8,93.9,156.7,88.2,148.8z"/>
    <path id="XMLID_79_" fill="#FFFFFF" d="M46.6,146.5c0-0.8-0.1-1.5-0.2-2.2c-0.8-4.8-6.5-8.6-11.3-7.6c-6.6,1.4-5.6,11-5,15.9
      c0.5,3.7,1.2,7.4,2.3,11c1.8,5.9,3.1,11.8,6.9,16.7c1.3,1.7,5.9,2.6,7.5,0.8c1.4-1.7,0-4.4-0.2-6.4c-0.4-7.6-0.2-15.1-0.2-22.8
      C46.4,150.2,46.6,148.3,46.6,146.5z"/>
    <path id="XMLID_78_" fill="#FFFFFF" d="M83.9,146.5c0-0.8,0.1-1.5,0.2-2.2c0.8-4.8,6.5-8.6,11.3-7.6c6.6,1.4,5.6,11,5,15.9
      c-0.5,3.7-1.2,7.4-2.3,11c-1.8,5.9-3.1,11.8-6.9,16.7c-1.3,1.7-5.9,2.6-7.5,0.8c-1.4-1.7,0-4.4,0.2-6.4c0.4-7.6,0.2-15.1,0.2-22.8
      C84.1,150.2,83.9,148.3,83.9,146.5z"/>
    <path id="XMLID_77_" fill="#79C900" d="M66.3,149.7c28.7-0.4,28.4-29.8,28.7-30.9c-0.4-1-0.9,0.2-1.3-0.7
      c-2.2-4.7-4.1-10.3-8.9-12.8c-3-1.6-5.8-2.5-9.2-3.1c-11.3-1.9-23.7-3.5-32.1,6.3c-3.9,4.5-5.6,4.9-8,10.1
      C35.5,125.8,40.8,150,66.3,149.7z"/>
    <path id="XMLID_76_" fill="#E75125" d="M97.1,108.8c-2.6,0.1-7.1,2-9,2.3c-6.5,1.2-13.2,1.6-19.9,1.6c-8.5,0-17.1-0.6-25.5-1.8
      c-2.4-0.3-4.9-0.9-7.3-1.1c-3.9-0.4-4,2.4-3.3,5.9c1.1,5.7,7.7,8.1,12.5,9.2c11.7,2.6,24.2,2.6,36,0.9c5.8-0.8,14.3-2.9,17.1-9
      c0.4-0.9,2.1-7.3,0.6-7.8C98,108.9,97.6,108.8,97.1,108.8z"/>
    <g id="XMLID_32_">
      <path id="XMLID_75_" fill="#E5A007" d="M83.2,117.6c-2.1-2.1-5-3.3-8-3.3s-5.9,1.2-8,3.3c-2.1,2.1-3.3,5-3.3,8c0,3,1.2,5.9,3.3,8
        c2.1,2.1,5,3.3,8,3.3s5.9-1.2,8-3.3c2.1-2.1,3.3-5,3.3-8C86.5,122.6,85.3,119.7,83.2,117.6z"/>
      <path id="XMLID_74_" fill="#070707" d="M66.3,132.4c0.3,0.4,0.6,0.8,1,1.1c1.4,1.4,3.2,2.4,5.1,2.9
        C74.8,134.1,67.8,130,66.3,132.4z"/>
      <path id="XMLID_73_" fill="#070707" d="M81.7,132c-1.1,1-1.3,2.1-0.4,3c0.7-0.4,1.3-0.9,1.8-1.5c0.8-0.8,1.5-1.7,2-2.7
        C83.9,130.7,82.6,131.2,81.7,132z"/>
      <path id="XMLID_72_" fill="#FCB915" d="M86.3,122.4c-7.2-1.3-14.6-0.6-21.9,0.1c-2.2,0.2-2.3,3.4,0,3.5c7,0.1,13.9-1.2,20.8,0.1
        C87.7,126.6,88.7,122.9,86.3,122.4z"/>
    </g>
    <g id="XMLID_8_">
      <g id="XMLID_3_">
        <path id="XMLID_71_" fill="#E8E8E8" d="M42.7,31c-0.8-7.2-2.4-17.3-8-22.5c-9.2-8.4-19.6,1-23.5,10c-4.7,11-7.1,28.4,0.4,38.6
          c0.1,0.2,0.3,0.3,0.6,0.2c2.2-0.8,2.4-3.3,2.2-5.5c0.8-0.1,1.5-0.5,2-1.3c3.9,1.3,7.1-2.3,9.7-6.1c0.6,0,1.2-0.2,1.8-0.6
          c0.2-0.1,0.4-0.3,0.7-0.6l0,0c0.2-0.2,0.3-0.4,0.5-0.5c0.7-0.7,1.5-1.4,1.9-1.4c1.9,0.1,3-1,3.5-2.3c1.6,1,4.1,0.4,5.1-1.4
          c0.9,0.5,2.1,0.4,2.6-0.6C42.9,35.6,42.9,33.4,42.7,31z"/>
        <path id="XMLID_70_" fill="#FFFFFF" d="M39.6,16.4c-3.4-5.5-9.2-7.7-15.2-4.8c-5.9,2.9-10.4,8.8-12.7,14.9
          C9.8,31.7,7.3,37.3,7,42.8C6.8,47.7,8.6,53,11.7,57.2c0.1,0.2,0.3,0.3,0.6,0.2c2.2-0.8,2.4-3.3,2.2-5.5c0.8-0.1,1.5-0.5,2-1.3
          c3.9,1.3,7.1-2.3,9.7-6.1c0.6,0,1.2-0.2,1.8-0.6c0.2-0.1,0.4-0.3,0.7-0.6l0,0c0.2-0.2,0.3-0.4,0.5-0.5c0.7-0.7,1.5-1.4,1.9-1.4
          c1.9,0.1,3-1,3.5-2.3c1.6,1,4.1,0.4,5.1-1.4c0.9,0.5,2.1,0.4,2.6-0.6c0.7-1.5,0.7-3.7,0.4-6.1c-0.4-3.8-1.1-8.5-2.4-12.7
          C40.1,17.7,39.8,17.1,39.6,16.4z"/>
        <path id="XMLID_69_" fill="#E75125" d="M28.9,49.7c3.9-1.9,9.1-4.1,11.7-7.9c0.3-4.9,0.2-9.5-1.7-14.3
          c-2.4-6.1-9.7-10.2-15.5-6.3c-6.4,4.4-8.4,13.6-9.1,21.1c-0.3,2.7-0.8,7.9-0.1,12.2C19.2,53.5,24,52.1,28.9,49.7z"/>
      </g>
      <g id="XMLID_4_">
        <path id="XMLID_68_" fill="#E8E8E8" d="M88.5,31c0.8-7.2,2.4-17.3,8-22.5c9.2-8.4,19.6,1,23.5,10c4.7,11,7.1,28.4-0.4,38.6
          c-0.1,0.2-0.3,0.3-0.6,0.2c-2.2-0.8-2.4-3.3-2.2-5.5c-0.8-0.1-1.5-0.5-2-1.3c-3.9,1.3-7.1-2.3-9.7-6.1c-0.6,0-1.2-0.2-1.8-0.6
          c-0.2-0.1-0.4-0.3-0.7-0.6l0,0c-0.2-0.2-0.3-0.4-0.5-0.5c-0.7-0.7-1.5-1.4-1.9-1.4c-1.9,0.1-3-1-3.5-2.3c-1.6,1-4.1,0.4-5.1-1.4
          c-0.9,0.5-2.1,0.4-2.6-0.6C88.2,35.6,88.2,33.4,88.5,31z"/>
        <path id="XMLID_67_" fill="#FFFFFF" d="M91.5,16.4c3.4-5.5,9.2-7.7,15.2-4.8c5.9,2.9,10.4,8.8,12.7,14.9
          c1.9,5.2,2.3,10.8,2.6,16.2c0.2,4.9,0.6,10.2-2.5,14.4c-0.1,0.2-0.3,0.3-0.6,0.2c-2.2-0.8-2.4-3.3-2.2-5.5
          c-0.8-0.1-1.5-0.5-2-1.3c-3.9,1.3-7.1-2.3-9.7-6.1c-0.6,0-1.2-0.2-1.8-0.6c-0.2-0.1-0.4-0.3-0.7-0.6l0,0
          c-0.2-0.2-0.3-0.4-0.5-0.5c-0.7-0.7-1.5-1.4-1.9-1.4c-1.9,0.1-3-1-3.5-2.3c-1.6,1-4.1,0.4-5.1-1.4c-0.9,0.5-2.1,0.4-2.6-0.6
          c-0.7-1.5-0.7-3.7-0.4-6.1c0.4-3.8,1.1-8.5,2.4-12.7C91.1,17.7,91.3,17.1,91.5,16.4z"/>
        <path id="XMLID_66_" fill="#E75125" d="M102.2,49.7c-3.9-1.9-9.1-4.1-11.7-7.9c-0.3-4.9-0.2-9.5,1.7-14.3
          c2.4-6.1,9.7-10.2,15.5-6.3c6.4,4.4,8.4,13.6,9.1,21.1c0.3,2.7,0.8,7.9,0.1,12.2C111.9,53.5,107.1,52.1,102.2,49.7z"/>
      </g>
      <path id="XMLID_65_" fill="#FFFFFF" d="M117.5,47.3c-4.1-7-10-13.1-17.4-17.2c-16.6-9.3-37.8-11-55.9-5.5
        c-2.3,0.7-4.6,1.6-6.8,2.6c-14,6.3-25.9,19.3-29.8,34.3c-2,7.6-1.6,16,0.7,23.5c2.1,6.8,6.3,12.3,11.6,17.2
        c14.1,13.2,34.1,17.2,53,15.1c18.3-2,38.7-10.4,46-28.3C124.5,75.1,125.1,60.6,117.5,47.3z"/>
      <path id="XMLID_64_" fill="#FCB915" d="M72.9,72.3c-1.4-1.8-4-1.7-6.1-1.8c-2.3,0-5,0-7.3,0.7c-1.6,0.5-2,2.4-1,3.6
        c1.4,1.5,3.7,2.5,5.9,3.1c0,0,0.1,0,0.1,0C67,79.1,75.7,76,72.9,72.3z"/>
      <path id="XMLID_5_" fill="#070707" d="M76.1,101.7c-0.3-0.2-0.7-0.3-1.1-0.5c-4.1-1.1-10.1-1.1-14.2,0.3c-3.1,1.1-1.4,3.2,1.2,3.4
        c2.5,0.2,4.9-0.5,7.3-0.6c2.1-0.1,4.2,0,6.2-0.7C77.1,103,77,102.2,76.1,101.7z"/>
      <path id="XMLID_62_" fill="#E8E8E8" d="M97.1,55.9c-0.1-0.3-0.2-0.7-0.3-1c-0.2-0.3-0.6-0.5-1-0.4c-0.4,0.1-0.6,0.5-0.7,0.9
        c0,0.3,0,0.5,0,0.8c0,0,0,0.4,0,0.3c-0.1,0.3,0,0.5,0,0.9c0.1,0.5,0.6,0.8,1.1,0.8c0.6,0,1-0.5,1.1-1.1
        C97.3,56.6,97.2,56.3,97.1,55.9z"/>
      <path id="XMLID_61_" fill="#E8E8E8" d="M102.8,55.7c0,0.1,0-0.3,0-0.4l-0.1-0.7c-0.1-1.1-1.6-1.1-1.7,0l-0.1,0.7
        c0,0.1-0.1,0.4,0,0.4c-0.4,0.7,0.1,1.7,1,1.7S103.2,56.5,102.8,55.7z"/>
      <path id="XMLID_60_" fill="#E8E8E8" d="M36.3,55.3c-0.2-0.4-0.3-0.9-0.4-1.4c-0.1-0.7-1.1-0.9-1.3-0.2c-0.1,0.4-0.2,0.8-0.2,1.2
        c0,0.2,0,0.3,0,0.5c0-0.3-0.1,0.5,0,0.2c0,0.1,0,0.1,0,0.2c0,0.7,0.6,1.2,1.3,1C36.3,56.7,36.6,55.9,36.3,55.3z"/>
      <g id="XMLID_6_">
        <path id="XMLID_59_" fill="#E8E8E8" d="M41.7,43.7c0-0.1,0-0.1,0-0.2l0,0C41.7,43.5,41.7,43.6,41.7,43.7z"/>
      </g>
      <path id="XMLID_58_" fill="#C1DBF4" d="M43.5,74.1c-1.9,0.1-3.7,0.2-5.4,0.3c-6.6,0.6-13.3,1.2-19.9,1.9c-0.7,0.1-1.2-0.2-1.4-0.6
        c-0.2,2.6-0.4,5.3-0.6,7.8c-0.3,4.6-0.8,9.1-1.1,13.7c1.4,1.7,3,3.3,4.7,4.9c7.4,6.9,16.3,11.2,25.9,13.6
        c-0.1-8.2-0.8-16.4-1.3-24.5C44.2,85.5,44.1,79.8,43.5,74.1z"/>
      <path id="XMLID_57_" fill="#070707" d="M46.3,73.2c0-0.4-0.4-0.6-0.7-0.6c0,0,0,0-0.1,0c-0.1-0.2-11.1,0.4-16.1,0.9
        c-2.9,0.3-5.8,0.5-8.7,0.8c-2.2,0.2-4.8,0.1-7,0.7c-0.6,0.2-1,0.7-1,1.3c0,1,0,2.2,0.9,2.7c0.1,0.2,0.3,0.3,0.5,0.3
        c0.2,0,0.3,0,0.5-0.1c0,0,0.1,0,0.1,0c3-0.3,6-0.5,9.1-0.8c7.1-0.3,21.7-1.7,21.9-1.7c0.4,0,0.9-0.5,0.8-0.9
        c0-0.3-0.1-0.6-0.1-0.9C46.4,74.4,46.3,73.8,46.3,73.2z"/>
      <g id="XMLID_7_">
        <path id="XMLID_56_" fill="#C1DBF4" d="M112.6,75.8c-2.4-0.2-4.7-0.4-7.1-0.7C99.3,75,93,74.7,86.8,73.9c-0.4,0-0.7-0.2-0.9-0.4
          c-0.6,5.8-0.7,11.6-1,17.3c-0.5,8.1-1.2,16.4-1.3,24.5c9.6-2.3,18.5-6.7,25.9-13.6c1.7-1.6,3.3-3.2,4.7-4.9
          c-0.3-4.6-0.7-9.2-1.1-13.7C113,80.8,112.8,78.3,112.6,75.8z"/>
      </g>
      <path id="XMLID_55_" fill="#070707" d="M82.8,73.1c0-0.4,0.4-0.6,0.7-0.6c0,0,0,0,0.1,0c0.1-0.2,11.1,0.4,16.1,0.9
        c2.9,0.3,5.8,0.5,8.7,0.8c2.2,0.2,4.8,0.1,7,0.7c0.6,0.2,1,0.7,1,1.3c0,1,0,2.2-0.9,2.7c-0.1,0.2-0.3,0.3-0.5,0.3
        c-0.2,0-0.3,0-0.5-0.1c0,0-0.1,0-0.1,0c-3-0.3-6-0.5-9.1-0.8c-7.1-0.3-21.7-1.7-21.9-1.7c-0.4,0-0.9-0.5-0.8-0.9
        c0-0.3,0.1-0.6,0.1-0.9C82.8,74.3,82.8,73.7,82.8,73.1z"/>
      <path id="XMLID_54_" fill="#E8E8E8" d="M28.2,55.9c-0.2-0.4-0.3-0.9-0.4-1.4c-0.1-0.7-1.1-0.9-1.3-0.2c-0.1,0.4-0.2,0.8-0.2,1.2
        c0,0.2,0,0.3,0,0.5c0-0.3-0.1,0.5,0,0.2c0,0.1,0,0.1,0,0.2c0,0.7,0.6,1.2,1.3,1C28.2,57.3,28.5,56.5,28.2,55.9z"/>
    </g>
  </g>
</svg>
</div>
      <div class="error-text">  <p>Página não encontrada <span class="status-code">404</span></p>

  <p>
    Nós não conseguimos encontrar a página que você estava procurando. 	Volte ao <a href="http://localhost/">AniFlix</a>.
  </p>
</div>
    </main>

  </body>
</html>
