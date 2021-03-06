
<!DOCTYPE html>
<html>
<head>
	<title>Password Message</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styleforregistermenu21.css">
	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="http://rawgit.com/notifyjs/notifyjs/master/dist/notify.js"></script>
<link rel="stylesheet" type="text/css" href="search.css">
	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="http://rawgit.com/notifyjs/notifyjs/master/dist/notify.js"></script> <script src="https://kit.fontawesome.com/67c66657c7.js"></script>
      <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  <style>
  	
section .container .user .formBx input{
	width: 100%;
	padding: 10px;
	background: #f5f5f5;
	color: #333;
	border: none;
	outline: none;
	box-shadow: none;
	font-size: 14px;
	margin: 8px 0;
	letter-spacing: 1px;
	font-weight: 300;
}

section .container .user .formBx input[type="submit"]{
	max-width: 100px;
	background: #677eff;
	color: #fff;
	cursor: pointer;
	font-size: 14px;
	font-weight: 500;
	letter-spacing: 1px;
	transition: 0.5s;
}

section .container .user.signupBx .formBx input[type="submit"]{
	background: #e73e49;
}

section{
	position: relative;
	min-height: 100vh;
	background-image: url(weknowback.jpg);
	background-size: 100% 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 10%;
	transition: 0.5s;
}
  </style>



</head>
<body>
	 <header>
      <a href="mainmenu.php">
      <div class="logoos">
        <img class="logo" src="https://img.icons8.com/bubbles/2x/books.png" alt="logo">
      </div>
      </a>



      <div class="searchbar">
        <form action="search.php" method="get">
          <input type="search" name="search" placeholder="Search for fun!">
        <!-- <span class="fa fa-search"></span> -->  
        </form>
      </div>

   

  </header>
  <!-- end of single -->


  <div  style="position: absolute; z-index: 50; width: 100%;"  class="nav-scroller py-1 mb-2">
    <nav style="background-color: #F0D49D;" class="nav d-flex justify-content-around">
      <a style="font-size: 15px;" class="p-2 link-secondary" href="primer.php">All Book</a>
      <a style="font-size: 15px;" class="p-2 link-secondary" href="#">Topseller</a>
      <a style="font-size: 15px;" class="p-2 link-secondary" href="stocks.php">Stocks</a>
      <a style="font-size: 15px;" class="p-2 link-secondary" href="Yerasyl/book_map.php">Map of Knowledge</a>
    </nav>
  </div>
	<section>
		<div class="container">
			<div class="user signinBx">
				<div class="imgBx"><img src="images/weknow.jpg"></div>
				<div class="formBx">
					<form action="changepass.php" method="post" id="logform">
						<h2>Password assistance</h2>
						<p style="text-align: center;">Change Password<p><br>
						<input type="password" placeholder="New Password" name="newpass" id="password1">
						<input type="password" placeholder="Confirm Password" name="code" id="password2">
						<input type="button" value="Send" name="login" id="send">
						
						<p class="signup"><a style="font-size: 12px;" href="registerpage.html">Remember your password?</a></p>
					</form>
				</div>
			</div>
	</section>



		<script>
			
				
			var errorPassword = true;

			var errorPassword1 = true;

			var checkNull = function(){
			  $(this).val($(this).val().trim());
			  if ($(this).val() =="") {
			    $(this).notify("The field must be filled in", "error");
			    $(this).addClass("errtextbox");
			    errorNull = true;
			  } else {
			    errorNull = false;
			    $(this).removeClass("errtextbox");
			  }
			};

			$("#password2").focusout(checkNull);
			$("#password1").focusout(checkNull);
			

			$("#password1").focusout(function(){
				  var value = $(this).val();
				  if (value.length <= 4) { 
				    $(this).notify("Minimum of 5 characters", "error");
				    $(this).addClass("errtextbox");
				    errorPassword1 = true;
				  } else {
				    if (value.length > 16) {
				      $(this).notify("Maximum of 16 characters", "error");
				      $(this).addClass("errtextbox");
				      errorPassword1 = true;
				    } else {
				      errorPassword1 = false;
				      $(this).removeClass("errtextbox");
				    }
				  }
			});

			$("#password2").focusout(function(){
				  var value = $(this).val();
				  if (value != $("#password1").val()) {
				    $(this).notify("The password doesn't match", "error");
				    $(this).addClass("errtextbox");
				    errorPassword2 = true;
				  } else {
				    errorPassword2 = false;
				    $(this).removeClass("errtextbox");     
				  }
			});

			$("#send").click(function(){
				  if (!(errorPassword1 || errorPassword2)) {
				    $("#logform").submit();
				  } else {
				    $(this).notify("The form is empty or filled in incorrectly", "error");
				  }
				});










		</script>

<footer>
  <div class="footer-content">
    <h3>Book Store</h3>
    <p>These initials mean that all the authors of this site have tried their best. Don't judge so harshly</p>
    <ul class="socials">
      <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
      <li> <a href="#"> <i class="fa fa-telegram"></i> </a> </li>
      <li> <a href="#"> <i class="fa fa-twitter"></i> </a> </li>
      <li> <a href="#"> <i class="fa fa-youtube"></i> </a> </li>
      <li> <a href="#"> <i class="fa fa-instagram"></i> </a> </li>
    </ul>
  </div>
  <div class="footer-bottom">
    <p>copyright &copy;2021 Sodium Corporate. Designed by <span>ZEB</span> </p>

  </div>


</footer>

</body>
</html>