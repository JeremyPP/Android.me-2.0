<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
		<link rel="icon" sizes="64x64" href="favicon.ico">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <title>Android.me</title>
        <meta name="description" content="The new Android.me is coming soon. Stay tuned!">
		<style>
			*,
			:before,
			:after {
				box-sizing: border-box;
			}
			html, body {
				margin: 0;
				padding: 0;
			}
			body {
				height: 100%;
				width: 100%;
				font-family: 'Roboto', sans-serif;
				-webkit-font-smoothing: antialiased;
				background-color: #6472cd;
				color: #fff;
			}
			.noCopy {
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}
			.centerContainer {
				height: 370px;
				width: 320px;
				position: absolute;
				margin: auto;
				top: 0;
				bottom: 0;
				left: 0;
				right: 0;
				padding: 0 15px;
				text-align: center;
			}
			.centerContainer img.logo {
				width: 200px;
				padding: 10px;
				margin-bottom: 30px;
			}
			.centerContainer p.text {
				font-size: 16px;
				line-height: 24px;
				padding: 15px;
				margin: 0;
			}
			form {
				max-width: 260px;
				margin: 0 auto;
				font-family: 'Roboto', sans-serif;
			}
			.group {
				position: relative;
				margin: 30px 0;
				text-align: left;
			}
			input{
				background: none;
				color: #fff;
				font-size: 16px;
				padding: 10px 0 10px 0;
				display: block;
				width: 100%;
				border: none;
				border-radius: 0;
				border-bottom: 1px solid #fff;
				font-family: 'Roboto', sans-serif;
			}
			input:focus {
				outline: none;
			}
			input:focus ~ label, input:valid ~ label {
				top: -14px;
				font-size: 12px;
				color: #00BCD4;
			}
			input.hasValue ~ label {
				top: -14px;
				font-size: 12px;
				color: #00BCD4;
			}
			input:focus ~ .bar:before {
				width: 100%;
			}
			label {
				color: #fff;
				font-size: 16px;
				font-weight: normal;
				position: absolute;
				pointer-events: none;
				top: 10px;
				-webkit-transition: 300ms ease all;
				transition: 300ms ease all;
			}
			.bar {
				position: relative;
				display: block;
				width: 100%;
			}
			.bar:before {
				content: '';
				height: 2px;
				width: 0;
				bottom: 0px;
				position: absolute;
				background: #00BCD4;
				-webkit-transition: 300ms ease all;
				transition: 300ms ease all;
				left: 0%;
			}
			.emailBtn {
				background: #00BCD4;
				border: none;
				border-radius: 2px;
				width: 100%;
				color: #fff;
				box-shadow: 0 2px 5px 0 rgba(0,0,0,.26);
				text-transform: uppercase;
				font-size: 14px;
				padding: 0 16px;
				font-weight: 500;
				height: 36px;
				line-height: 36px;
				cursor: pointer;
				letter-spacing: .8px;
				margin-top: 48px;
			}
			.emailBtn:focus,
			.emailBtn:active {
				background: #26C6DA;
			}
			.submitionSuccess {
				background: #26C6DA;
				border: none;
				border-radius: 2px;
				width: 100%;
				color: #fff;
				text-transform: uppercase;
				font-size: 14px;
				padding: 0 16px;
				font-weight: 500;
				height: 36px;
				line-height: 36px;
				cursor: default;
				letter-spacing: .8px;
				margin-top: 48px;
				text-align: center;
			}
		</style>
    </head>
    <body>
		<div class="centerContainer noCopy">
			<img src="logo_large.png" alt="" class="logo">
			<p class="text">A new Android.me is on his way!
			<br>
			Leave your email below to know when the new site goes live.</p>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
				<div class="group">
				  <input type="email" spellcheck="false" required="required" name="email" maxlength="200" id="emailSubmitInput"/>
				  <span class="highlight"></span>
				  <span class="bar"></span>
				  <label>Enter your email</label>
				</div>
				<?php
					if (isset($_POST['submitEmail'])) {   
						echo '<div class="submitionSuccess">Thanks! :)</div>'; 
						?>
							<script>$(".group").css('visibility', 'hidden')</script>
						<?php
					}
					else {
						echo '<input type="submit" value="Notify me" class="emailBtn" name="submitEmail"/>';
					}
				?>
			</form>
			<?php
				if (isset($_POST['email'])) {   
					$log_file_name = 'emails.txt';
					$message = $_POST['email'] . PHP_EOL;
					file_put_contents($log_file_name, $message, FILE_APPEND);		
				}				
			?>
		</div>
		<script>
			$('input').keyup(function(){
				if($('#emailSubmitInput').val().length > 0)
					$("#emailSubmitInput").addClass('hasValue');
				else
					$("#emailSubmitInput").removeClass('hasValue');
			});
		</script>
    </body>
</html>