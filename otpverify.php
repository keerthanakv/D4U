<?php
include './subheader.php';
?>
<?php
if(isset($_POST["signup"]))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $pws=$_POST['psw'];
  $ph=$phone;
    $otp= rand(10000,100000);
    $msg="OTP for mobile verification is $otp,Thank you for choosing D4U!!!";
    
           $fields = array(
    "sender_id" => "D4U",
    "message" => "$msg",
    "route" => "v3",
    "numbers" => "$ph",
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: sIGZpx4h9kXNQ6tJvcwoamSDMjR0ynb21YCFg8qzHeiBu7fTULjlobrMpzCXG36c8DhvQN2ueyA75dUw",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) 
{
  echo "cURL Error #:" . $err;
} 
$pemail=$email;
$motp= rand(1000,100000);
$to       =$pemail;
$subject  = 'Verification mail';
$message  = "Hello!
                   To verify your email address please choose the verification code!!!!!<br>
                   <br><b>$motp</b>";
$headers  = 'From: d4u2022@gmail.com' . "\r\n" .
                 'MIME-Version: 1.0' . "\r\n" .
				 'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $message, $headers))
{
    //echo $otp;
}
    else
    {
        //echo "Email sending failed";
    }
    
}
?>
<script src="assets/js/jquery-2.1.0.min.js"></script>
<style>
   
      * {
  padding: 0;
  margin: 0;
  color: #1a1f36;
  box-sizing: border-box;
  word-wrap: break-word;
  font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Ubuntu,sans-serif;
}

body {
    min-height: 100%;
    background-color: #ffffff;
}
h1 {
    letter-spacing: -1px;
}
a {
  color: #5469d4;
  text-decoration: unset;
}
.login-root {
    background: #fff;
    display: flex;
    width: 100%;
    min-height: 100vh;
    overflow: hidden;
}
.loginbackground {
    min-height: 692px;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    top: 0;
    z-index: 0;
    overflow: hidden;
}
.flex-flex {
    display: flex;
}
.align-center {
  align-items: center; 
}
.center-center {
  align-items: center;
  justify-content: center;
}
.box-root {
    box-sizing: border-box;
}
.flex-direction--column {
    -ms-flex-direction: column;
    flex-direction: column;
}
.loginbackground-gridContainer {
    display: -ms-grid;
    display: grid;
    -ms-grid-columns: [start] 1fr [left-gutter] (86.6px)[16] [left-gutter] 1fr [end];
    grid-template-columns: [start] 1fr [left-gutter] repeat(16,86.6px) [left-gutter] 1fr [end];
    -ms-grid-rows: [top] 1fr [top-gutter] (64px)[8] [bottom-gutter] 1fr [bottom];
    grid-template-rows: [top] 1fr [top-gutter] repeat(8,64px) [bottom-gutter] 1fr [bottom];
    justify-content: center;
    margin: 0 -2%;
    transform: rotate(-12deg) skew(-12deg);
}
.box-divider--light-all-2 {
    box-shadow: inset 0 0 0 2px #e3e8ee;
}
.box-background--blue {
    background-color: #ffc451;
}
.box-background--white {
  background-color: #ffffff; 
}
.box-background--blue800 {
    background-color: #d99208;
}
.box-background--gray100 {
    background-color: #e3e8ee;
}
.box-background--cyan200 {
    background-color: #7fd3ed;
}
.padding-top--64 {
  padding-top: 64px;
}
.padding-top--24 {
  padding-top: 24px;
}
.padding-top--48 {
  padding-top: 48px;
}
.padding-bottom--24 {
  padding-bottom: 24px;
}
.padding-horizontal--48 {
  padding: 48px;
}
.padding-bottom--15 {
  padding-bottom: 15px;
}


.flex-justifyContent--center {
  -ms-flex-pack: center;
  justify-content: center;
}

.formbg {
    margin: 0px auto;
    width: 100%;
    max-width: 448px;
    background: white;
    border-radius: 4px;
    box-shadow: rgba(60, 66, 87, 0.12) 0px 7px 14px 0px, rgba(0, 0, 0, 0.12) 0px 3px 6px 0px;
}
span {
    display: block;
    font-size: 20px;
    line-height: 28px;
    color: #1a1f36;
}
label {
    margin-bottom: 10px;
}
.reset-pass a,label {
    font-size: 14px;
    font-weight: 600;
    display: block;
}
.reset-pass > a {
    text-align: right;
    margin-bottom: 10px;
}
.grid--50-50 {
    display: grid;
    grid-template-columns: 50% 50%;
    align-items: center;
}

.field input {
    font-size: 16px;
    line-height: 28px;
    padding: 8px 16px;
    width: 100%;
    min-height: 44px;
    border: unset;
    border-radius: 4px;
    outline-color: rgb(84 105 212 / 0.5);
    background-color: rgb(255, 255, 255);
    box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(60, 66, 87, 0.16) 0px 0px 0px 1px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px;
}

input[type="submit"] {
    background-color: #ffc451;
    /*box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0.12) 0px 1px 1px 0px, 
                rgb(84, 105, 212) 0px 0px 0px 1px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(60, 66, 87, 0.08) 0px 2px 5px 0px;*/
    color: #fff;
    font-weight: 600;
    cursor: pointer;
}
.field-checkbox input {
    width: 20px;
    height: 15px;
    margin-right: 5px; 
    box-shadow: unset;
    min-height: unset;
}
.field-checkbox label {
    display: flex;
    align-items: center;
    margin: 0;
}
a.ssolink {
    display: block;
    text-align: center;
    font-weight: 600;
}
.footer-link span {
    font-size: 14px;
    text-align: center;
}
.listing a {
    color: #697386;
    font-weight: 600;
    margin: 0 10px;
}

.animationRightLeft {
  animation: animationRightLeft 2s ease-in-out infinite;
}
.animationLeftRight {
  animation: animationLeftRight 2s ease-in-out infinite;
}
.tans3s {
  animation: animationLeftRight 3s ease-in-out infinite;
}
.tans4s {
  animation: animationLeftRight 4s ease-in-out infinite;
}

@keyframes animationLeftRight {
  0% {
    transform: translateX(0px);
  }
  50% {
    transform: translateX(1000px);
  }
  100% {
    transform: translateX(0px);
  }
} 

@keyframes animationRightLeft {
  0% {
    transform: translateX(0px);
  }
  50% {
    transform: translateX(-1000px);
  }
  100% {
    transform: translateX(0px);
  }
} 
  </style>
  <script>
  function ValidateEmailAddress(emailString) 
    {
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	return !!emailString && typeof emailString === 'string'
		&& emailString.match(emailRegex);
    }
   /* function extmail(email)
    {
      
    }*/
function vemail(emailString)
{
    document.getElementById("checkingval").innerHTML='<i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="margin-left: 88%;"></i>';
    $("#checkingval").css("display","block");
     var Result= ValidateEmailAddress(emailString);
	//alert(Result);
	 if(Result)
	 {
             $.post("sendotpemail.php",{em:emailString},function(data){
                 document.getElementById("veotp").value=data;
                 $("#checkeotp").css("display","block");
             });
            //alert("fadf");
             
	     
        }
	 else
	 {
             document.getElementById("checkingval").innerHTML='<i style="color:red">NOT a Valid Email Id</i>';
		document.getElementById("evmsg").innerHTML="NOT a Valid Email Id";
	 }
}
function Resendemailotp()
{
    //alert("dsd");
    document.getElementById("eotp").value="";
    document.getElementById("checkingval").innerHTML='<i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="margin-left: 88%;color:red"></i>';
     var Result= document.getElementById("email").value;
	//alert(Result);
	 
             vemail(Result);
            //alert("fadf");
             
	     
        
}

function checkemailotp()
{
    var chotp=document.getElementById("veotp").value;
    var entotp=document.getElementById("eotp").value;
    if(chotp==entotp)
    {
        document.getElementById("checkingval").innerHTML='<i class="fa fa-check" style="margin-left: 88%;color:green"></i>';
    }
    else
    {
        document.getElementById("checkingval").innerHTML='<a onclick="Resendemailotp()">Resend otp</a><i class="fa fa-times" style="margin-left: 88%;color:red"></i>';
        document.getElementById("eotp").focus();
        document.getElementById("eotp").value="";
        //$("#checkeotp").css("display","none");
    }
}
function checkmob(mob)
{
     document.getElementById("checkingmobval").innerHTML='<i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="margin-left: 88%;"></i>';
    //$("#checkingmobval").css("display","block");
   //alert(mob);
             $.post("sendotpmob.php",{mb:mob},function(data){
                 //alert(data);
                 document.getElementById("vmobotp").value=data;
                // $("#checkemobotp").css("display","block");
             });
            //alert("fadf");
             
	     
        
}
function checkmobotp()
{
    var chotp=document.getElementById("vmobotp").value;
    var entotp=document.getElementById("mobotp").value;
    //alert(chotp+entotp);
    if(chotp==entotp)
    {
      //  alert("enter");
        document.getElementById("checkingmobval").innerHTML='<i class="fa fa-check" style="margin-left: 88%;color:green"></i>';
    }
    else
    {
        document.getElementById("checkingmobval").innerHTML='<a onclick="Resendmobotp()">Resend otp</a><i class="fa fa-times" style="margin-left: 88%;color:red"></i>';
        document.getElementById("mobotp").focus();
        document.getElementById("mobotp").value="";
        //$("#checkeotp").css("display","none");
    }
}
function Resendmobotp()
{
    //alert("dsd");
    document.getElementById("mobotp").value="";
    document.getElementById("checkingmobval").innerHTML='<i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="margin-left: 88%;color:red"></i>';
     var Result= document.getElementById("mob").value;
	//alert(Result);
	 
             checkmob(Result);
            //alert("fadf");
             
	     
        
}
  </script>
<main id="main" >

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2 style="margin-left: 45%">Sign up</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Sign up</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<section class="inner-page">
      <div class="container">
          <div class="contact">
              <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
            <h1 style="margin-top: -76px;color: #ffc451;text-decoration: unset;">OTP Verification</h1>
        </div>
        <div class="formbg-outer" style="margin-top: -38px;">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">To Verify your account</span>
              <form id="stripe-login" method="post">
                  <div class="field padding-bottom--24" style="display: none">
                  <label for="email">Name</label>
                  <input type="text" value="<?php echo $name;?>" name="name" pattern="[A-Z a-z]*" required="required" title="Only Enter Capital letters and small letter ,also include space">
                </div>
                <div class="field padding-bottom--24"style="display: none">
                  <label for="email">Email</label>
                  <input type="email" name="email" value="<?php echo $email;?>" id="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="required" >
                  
                </div>
                
                <div class="field padding-bottom--24" style="display: none">
                  <label for="email">Mobile no</label>
                  <input type="text" name="phone" value="<?php echo $phone;?>" id="mob" pattern="[6789][0-9]{9}" autocomplete="off"  required title="Plase Enter 10 degit mobile number starting with 6,7,8,9">
                  
                </div>
                
                <div class="field padding-bottom--24" style="display: none">
                  <div class="grid--50-50">
                    <label for="password">Password</label>
                  </div>
                    <input type="password" name="psw" value="<?php echo $pws;?>">
                </div>
                <div class="field padding-bottom--24" id="checkemobotp" >
                  <label for="email">Enter Mobile otp</label>
                  <input type="hidden" name="vmobotp" id="vmobotp" value="<?php echo $otp;?>">
                  <input type="text" name="mobotp" required  id="mobotp" onchange="checkmobotp()">
                  <div id="checkingmobval" >
                  <a onclick="Resendmobotp()">Resend otp</a>
                  </div>
                </div>
                  <div class="field padding-bottom--24" id="checkeotp" >
                  <label for="email">Enter Email otp</label>
                  <input type="hidden" name="veotp" id="veotp" value="<?php echo $motp;?>">
                  <input type="text" name="eOtp" required onchange="checkemailotp()" id="eotp">
                  <div id="checkingval" >
                      <a onclick="Resendemailotp()">Resend otp</a>
                  </div>
                </div>
                  
                <div class="field padding-bottom--24">
                  <input type="submit" name="check" value="Register">
                </div>
                
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  
            
              </div>
      </div>
    </section>

  </main><!-- End #main -->
<?php
//include './footer.php';
?>
<?php
if(isset($_POST["check"]))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $pws=$_POST['psw'];
    include './dbconnection.php';
    
    $sql="INSERT INTO `tb_registration`(`name`,`email`,`mobileno`)VALUES('$name', '$email', '$phone')";
    $login="INSERT INTO `tb_login` VALUES('$email','$pws','USER')";
   // echo $sql;
    $sq= mysqli_query($con, $sql);
    if($sq>0)
    {
        
        $log= mysqli_query($con, $login);
        if($log>0)
        {
            $msg="Registred as User in D4U is successfully,username:$email & password:$pws Please login";
            $fields = array(
    "sender_id" => "D4U",
    "message" => "$msg",
    "route" => "v3",
    "numbers" => "$phone",
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: sIGZpx4h9kXNQ6tJvcwoamSDMjR0ynb21YCFg8qzHeiBu7fTULjlobrMpzCXG36c8DhvQN2ueyA75dUw",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) 
{
  echo "cURL Error #:" . $err;
} 
else 
{
        echo "<script>alert('Registration successfully');window.location.href='login.php';</script>";
        }
    }
    }
}
?>