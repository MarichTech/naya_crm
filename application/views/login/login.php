<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
	<title>Naya Solutions |CRM Application</title>
	<link rel="icon" type="image/x-icon" href="<?php echo base_url() ?>assets/img/favicon.ico"/>
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
	<link href="<?php echo base_url() ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url() ?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url() ?>assets/css/authentication/form-2.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/forms/theme-checkbox-radio.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/forms/switches.css">
	<script src="<?php echo base_url() ?>plugins/sweetalerts/promise-polyfill.js"></script>
	<link href="<?php echo base_url() ?>plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url() ?>plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css"/>
</head>
<body class="form">


<div class="form-container outer">
	<div class="form-form">
		<div class="form-form-wrap">
			<div class="form-container">
				<div class="form-content">

					<h1 class="">Sign In</h1>
					<p class="">Log in to your account to continue.</p>

					<form class="text-left" id="login_form">
						<div class="">

							<div id="username-field" class="field-wrapper input">
								<label for="username">USERNAME</label>
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
									 stroke-linejoin="round" class="feather feather-user">
									<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
									<circle cx="12" cy="7" r="4"></circle>
								</svg>
								<input id="username" name="username" type="text" class="form-control"
									   placeholder="e.g John_Doe">
							</div>

							<div id="password-field" class="field-wrapper input mb-2">
								<div class="d-flex justify-content-between">
									<label for="password">PASSWORD</label>
									<!--									<a href="auth_pass_recovery_boxed.html" class="forgot-pass-link">Forgot Password?</a>-->
								</div>
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
									 stroke-linejoin="round" class="feather feather-lock">
									<rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
									<path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
								</svg>
								<input id="password" name="password" type="password" class="form-control"
									   placeholder="Password">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
									 stroke-linejoin="round" id="toggle-password" class="feather feather-eye">
									<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
									<circle cx="12" cy="12" r="3"></circle>
								</svg>
							</div>
							<div class="d-sm-flex justify-content-between">
								<div class="field-wrapper">
									<button type="submit" onclick="login()" class="btn btn-primary" >Log In
									</button>
								</div>
							</div>

						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>


<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="<?php echo base_url() ?>assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url() ?>bootstrap/js/popper.min.js"></script>
<script src="<?php echo base_url() ?>bootstrap/js/bootstrap.min.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->
<script src="<?php echo base_url() ?>assets/js/authentication/form-2.js"></script>

</body>
</html>
<script type="text/javascript">
//	var basePath = "http://localhost/naya_crm";
	var basePath = "https://41.72.206.78/naya_crm";

	$("#login_form").submit(function(e){
		//prevent form default submission @u70xdn
		return false;
	});
	$(document).ready(function () {


	})

	function login() {
		/*	1. Get login credentials from form  */
		let username = document.getElementById("username").value;
		let password = document.getElementById("password").value;
		/*	2. Validate login credentials from form  */
		if (username === '' || password === '') {
			swal.fire({
				title: 'Please Fill In All Required Fields',
				html: 'No Username or Password',
				animation: true,
				timer: 5000,
				customClass: 'animated tada',
				padding: '2em'
			})
			return false;
		}
		Swal.fire({
			title: 'Logging You In....',
			text: 'Please Wait',
			allowOutsideClick: false,
			onBeforeOpen: () => {
				Swal.showLoading()
			},
		});

		/*	3. Send Request to login  */
		// Send AJAX request
		$.ajax({
			url: '<?= base_url() ?>auth',
			type: 'post',
			dataType: 'JSON',
			data: {
				username : username,
				password : password,
			},
			success: function (response) {
				let respons = (response)
				let status = respons.status
				let messageType = respons.messageType
				let message = respons.message
				document.getElementById("login_form").reset();

				console.log(respons)
				if (status === true) {
					if (messageType == 1) {
						Swal.fire({
							title: message,
							text: "Redirecting...",
							timer: 10000,
						})
						window.location.replace(basePath +'/home');

					} else if (messageType == 2) {
						Swal.fire({
							title: 'Failed!',
							text: message,
							timer: 10000,
						})
						window.location.replace(basePath +'/login');

					}
				} else if (status === false) {
					Swal.fire({
						title: 'Login Failed!',
						text: "Try Again.",
						timer: 10000,
					})
					window.location.replace(basePath +'/login');

				}
			}
		});
	}


	/*	4. Process Request Response  */


</script>
<script src="<?php echo base_url() ?>plugins/sweetalerts/sweetalert2.min.js"></script>
<script src="<?php echo base_url() ?>plugins/sweetalerts/custom-sweetalert.js"></script>
