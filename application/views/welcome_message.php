<HTML>
	<head>
		<meta charset="utf-8">
		<title>LCP Portal</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<!-- <meta name="description" content="System description [concise / brief description' 1-2 sentences only"/> -->
		<!-- <meta name="keywords" content="System related keywords [most related keywords for system functions]" /> -->
		<meta name="author" content="Lung Center of the Philippines"/>

		<!-- Styles
		=================================================== -->
		<!-- Stylesheet for Bootstrap -->
		<link rel="stylesheet"
				href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
				integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
				crossorigin="anonymous">

		<!-- Stylesheet for Yeti -->
		<link rel="stylesheet"
				href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/yeti/bootstrap.min.css">

		<!-- Stylesheet for DataTables -->
		<link rel="stylesheet"
				href="https://cdn.datatables.net/2.1.8/css/dataTables.semanticui.css">

		<!-- Stylesheet for Select2 -->
		<link rel="stylesheet"
				href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />

		<!-- Stylesheet for FontAwesome -->
		<link rel="stylesheet"
				href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css"/>
		<link rel="stylesheet"
				href="assets/css/ace.min.css"/>


		<!-- Scripts
		================================================== -->

		<!-- For JQuery -->
		<script src="https://code.jquery.com/jquery-3.7.1.min.js"
				integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
				crossorigin="anonymous">
		</script>

		<!-- For Bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
				integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
				crossorigin="anonymous">
		</script>

		<!-- For DataTables -->
		<script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/2.1.8/js/dataTables.semanticui.js"></script>

		<!-- For Select2 -->
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

		<!-- For FontAwesome -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/js/all.min.js"></script>
	</head>

	<!-- Body
	================================================== -->
	<body>
		<nav class="navbar navbar-expand-lg bg-primary mb-3" data-bs-theme="dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="https://lcp.gov.ph"><img src="img/LCP.png" alt="DMS" height="100%" width="35%"/></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarColor01">
					<ul class="navbar-nav me-auto">
						<li class="nav-item">
						<a class="nav-link" href="#"></a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="#"></a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="#"></a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="#"></a>
						</li>
						<li class="nav-item dropdown">
						<a class="nav-link" href="#"></a>
						</li>
					</ul>
					<div class="d-flex text-white">
						<a class="nav-link" data-bs-toggle="modal" data-bs-target="#help" style = "padding-right:15px;"><i class="fa-solid fa-clipboard-question fa-2xl"></i></a>
						<a class="nav-link" data-bs-toggle="modal" data-bs-target="#login" title = "Proceed to Login"><i class="fa-solid fa-right-to-bracket fa-2xl"></i></a>
					</div>
				</div>
			</div>
		</nav>

		<div class="container mb-3">
			<div class="row">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" data-bs-toggle="tab" href="#is" aria-selected="true" role="tab">Information Systems</a>
					</li>
					<!-- <li class="nav-item" role="presentation">
						<a class="nav-link" data-bs-toggle="tab" href="#support" aria-selected="false" tabindex="-1" role="tab">MISD Support</a>
					</li> -->
				</ul>
				<div id="myTabContent" class="tab-content mb-3">
					<br/>
					<div class="tab-pane fade show active" id="is" role="tabpanel">
						<div class="row">
							<div class="col-sm-4">
								<div class="list-group mb-3">
									<a href="http://lcpdmas/portals/default/" target="_blank" class="list-group-item list-group-item-action flex-column align-items-start">
										<div class="d-flex w-100 justify-content-between">
											<h3 class="mb-1">Document Management System (DMS)</h3>
											<small><i class="fa-solid fa-circle-arrow-right fa-2xl"></i></small>
										</div>
										<!-- <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
										<small>Donec id elit non mi porta.</small> -->
									</a>
									<a href="http://192.168.3.161:8012/bdots/" target="_blank" class="list-group-item list-group-item-action flex-column align-items-start">
										<div class="d-flex w-100 justify-content-between">
											<h3 class="mb-1">Document Tracking System (DTS)</h3>
											<small><i class="fa-solid fa-circle-arrow-right fa-2xl"></i></small>
										</div>
										<!-- <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
										<small>Donec id elit non mi porta.</small> -->
									</a>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="list-group mb-3">
									<a href="https://ph.ipatientcare.net/LCHP/HIS/Account/Login" target="_blank" class="list-group-item list-group-item-action flex-column align-items-start">
										<div class="d-flex w-100 justify-content-between">
											<h3 class="mb-1">Electronic Medical Records (EMR)</h3>
											<small><i class="fa-solid fa-circle-arrow-right fa-2xl"></i></small>
										</div>
										<!-- <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
										<small>Donec id elit non mi porta.</small> -->
									</a>
									<a href="http://192.168.3.161:8012/lcp/" target="_blank" class="list-group-item list-group-item-action flex-column align-items-start">
										<div class="d-flex w-100 justify-content-between">
											<h3 class="mb-1">Inventory Management System (IMS)</h3>
											<small><i class="fa-solid fa-circle-arrow-right fa-2xl"></i></small>
										</div>
										<!-- <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
										<small>Donec id elit non mi porta.</small> -->
									</a>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="list-group mb-3">
									<a href="http://weblis.com" target="_blank" class="list-group-item list-group-item-action flex-column align-items-start">
										<div class="d-flex w-100 justify-content-between">
											<h3 class="mb-1">Laboratory Information System (LIS)</h3>
											<small><i class="fa-solid fa-circle-arrow-right fa-2xl"></i></small>
										</div>
										<!-- <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
										<small>Donec id elit non mi porta.</small> -->
									</a>
									<a href="https://lungcenter.voyagerpacs.com:8443/ZeroFP/" target="_blank" class="list-group-item list-group-item-action flex-column align-items-start">
										<div class="d-flex w-100 justify-content-between">
											<h3 class="mb-1">Radiology Information System (RIS)</h3>
											<small><i class="fa-solid fa-circle-arrow-right fa-2xl"></i></small>
										</div>
										<!-- <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
										<small>Donec id elit non mi porta.</small> -->
									</a>
								</div>
							</div>
							
						</div>
						<br><br>
						<div class = "row">
							<div id="carouselExample" class="carousel slide">
								<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Next</span>
								</button>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<div class="container animated animated-done bootdey" data-animate="fadeIn" data-animate-delay="0.05" style="animation-delay: 0.05s;">
											<hr class="hr-lg mt-0 mb-2 w-10 mx-auto hr-primary">
											<h2 class="text-slab text-center text-uppercase mt-0 mb-5"> <b>JANUARY <?php echo date('Y'); ?> EVENTS </b> </h2>
											<div class="timeline timeline-left mx-lg-10">
											<div class="timeline-breaker">Monday</div>
											<!--Timeline item 1-->
											<div class="timeline-item mt-3 row text-center p-2">
												<div class="col font-weight-bold text-md-right">West Ham</div>
												<div class="col-1">vs</div>
												<div class="col font-weight-bold text-md-left">Chelsea</div>
												<div class="col-12 text-xs text-muted">Football - English Premier League - 19:45 GMT</div>
											</div>
											<!--Timeline item 2 - NOTE: the .right class-->
											<div class="timeline-item mt-3 row text-center p-2">
												<div class="col font-weight-bold text-md-right">Man Utd</div>
												<div class="col-1">vs</div>
												<div class="col font-weight-bold text-md-left">Liverpool</div>
												<div class="col-12 text-xs text-muted">Football - English Premier League - 19:45 GMT</div>
											</div>
											<div class="timeline-breaker timeline-breaker-middle">Tuesday</div>
											<div class="timeline-item mt-3 row text-center p-2">
												<div class="col font-weight-bold text-md-right">England</div>
												<div class="col-1">vs</div>
												<div class="col font-weight-bold text-md-left">India</div>
												<div class="col-12 text-xs text-muted">Cricket - 3rd test - from 10:45 GMT</div>
											</div>
											<div class="timeline-item mt-3 row text-center p-2">
												<div class="col font-weight-bold text-md-right">New Zealand</div>
												<div class="col-1">vs</div>
												<div class="col font-weight-bold text-md-left">South Africa</div>
												<div class="col-12 text-xs text-muted">Cricket - 5th test - from 15:45 GMT</div>
											</div>
											<div class="timeline-item mt-3 row text-center p-2">
												<div class="col font-weight-bold text-md-right">Man Utd</div>
												<div class="col-1">vs</div>
												<div class="col font-weight-bold text-md-left">Liverpool</div>
												<div class="col-12 text-xs text-muted">Football - Europa League - 19:45 GMT</div>
											</div>
											<div class="timeline-breaker timeline-breaker-middle">Saturday</div>
											<div class="timeline-item mt-3 row text-center p-2">
												<div class="col font-weight-bold text-md-right">England</div>
												<div class="col-1">vs</div>
												<div class="col font-weight-bold text-md-left">India</div>
												<div class="col-12 text-xs text-muted">Cricket - 3rd test - from 10:45 GMT</div>
											</div>
											<div class="timeline-item mt-3 row text-center p-2">
												<div class="col font-weight-bold text-md-right">New Zealand</div>
												<div class="col-1">vs</div>
												<div class="col font-weight-bold text-md-left">South Africa</div>
												<div class="col-12 text-xs text-muted">Cricket - 5th test - from 15:45 GMT</div>
											</div>
											<div class="timeline-breaker timeline-breaker-bottom">More next week........</div>
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="container animated animated-done bootdey" data-animate="fadeIn" data-animate-delay="0.05" style="animation-delay: 0.05s;">
											<hr class="hr-lg mt-0 mb-2 w-10 mx-auto hr-primary">
											<h2 class="text-slab text-center text-uppercase mt-0 mb-5"> <b>FEBRUARY <?php echo date('Y'); ?> EVENTS </b> </h2>
											<div class="timeline timeline-left mx-lg-10">
											<div class="timeline-breaker">Monday</div>
											<!--Timeline item 1-->
											<div class="timeline-item mt-3 row text-center p-2">
												<div class="col font-weight-bold text-md-right">West Ham</div>
												<div class="col-1">vs</div>
												<div class="col font-weight-bold text-md-left">Chelsea</div>
												<div class="col-12 text-xs text-muted">Football - English Premier League - 19:45 GMT</div>
											</div>
											<!--Timeline item 2 - NOTE: the .right class-->
											<div class="timeline-item mt-3 row text-center p-2">
												<div class="col font-weight-bold text-md-right">Man Utd</div>
												<div class="col-1">vs</div>
												<div class="col font-weight-bold text-md-left">Liverpool</div>
												<div class="col-12 text-xs text-muted">Football - English Premier League - 19:45 GMT</div>
											</div>
											<div class="timeline-breaker timeline-breaker-middle">Tuesday</div>
											<div class="timeline-item mt-3 row text-center p-2">
												<div class="col font-weight-bold text-md-right">England</div>
												<div class="col-1">vs</div>
												<div class="col font-weight-bold text-md-left">India</div>
												<div class="col-12 text-xs text-muted">Cricket - 3rd test - from 10:45 GMT</div>
											</div>
											<div class="timeline-item mt-3 row text-center p-2">
												<div class="col font-weight-bold text-md-right">New Zealand</div>
												<div class="col-1">vs</div>
												<div class="col font-weight-bold text-md-left">South Africa</div>
												<div class="col-12 text-xs text-muted">Cricket - 5th test - from 15:45 GMT</div>
											</div>
											<div class="timeline-item mt-3 row text-center p-2">
												<div class="col font-weight-bold text-md-right">Man Utd</div>
												<div class="col-1">vs</div>
												<div class="col font-weight-bold text-md-left">Liverpool</div>
												<div class="col-12 text-xs text-muted">Football - Europa League - 19:45 GMT</div>
											</div>
											<div class="timeline-breaker timeline-breaker-middle">Saturday</div>
											<div class="timeline-item mt-3 row text-center p-2">
												<div class="col font-weight-bold text-md-right">England</div>
												<div class="col-1">vs</div>
												<div class="col font-weight-bold text-md-left">India</div>
												<div class="col-12 text-xs text-muted">Cricket - 3rd test - from 10:45 GMT</div>
											</div>
											<div class="timeline-item mt-3 row text-center p-2">
												<div class="col font-weight-bold text-md-right">New Zealand</div>
												<div class="col-1">vs</div>
												<div class="col font-weight-bold text-md-left">South Africa</div>
												<div class="col-12 text-xs text-muted">Cricket - 5th test - from 15:45 GMT</div>
											</div>
											<div class="timeline-breaker timeline-breaker-bottom">More next week........</div>
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="container animated animated-done bootdey" data-animate="fadeIn" data-animate-delay="0.05" style="animation-delay: 0.05s;">
											<hr class="hr-lg mt-0 mb-2 w-10 mx-auto hr-primary">
											<h2 class="text-slab text-center text-uppercase mt-0 mb-5"> <b>MARCH <?php echo date('Y'); ?> EVENTS </b> </h2>
											<div class="timeline timeline-left mx-lg-10">
											<div class="timeline-breaker">Monday</div>
											<!--Timeline item 1-->
											<div class="timeline-item mt-3 row text-center p-2">
												<div class="col font-weight-bold text-md-right">West Ham</div>
												<div class="col-1">vs</div>
												<div class="col font-weight-bold text-md-left">Chelsea</div>
												<div class="col-12 text-xs text-muted">Football - English Premier League - 19:45 GMT</div>
											</div>
											<!--Timeline item 2 - NOTE: the .right class-->
											<div class="timeline-item mt-3 row text-center p-2">
												<div class="col font-weight-bold text-md-right">Man Utd</div>
												<div class="col-1">vs</div>
												<div class="col font-weight-bold text-md-left">Liverpool</div>
												<div class="col-12 text-xs text-muted">Football - English Premier League - 19:45 GMT</div>
											</div>
											<div class="timeline-breaker timeline-breaker-middle">Tuesday</div>
											<div class="timeline-item mt-3 row text-center p-2">
												<div class="col font-weight-bold text-md-right">England</div>
												<div class="col-1">vs</div>
												<div class="col font-weight-bold text-md-left">India</div>
												<div class="col-12 text-xs text-muted">Cricket - 3rd test - from 10:45 GMT</div>
											</div>
											<div class="timeline-item mt-3 row text-center p-2">
												<div class="col font-weight-bold text-md-right">New Zealand</div>
												<div class="col-1">vs</div>
												<div class="col font-weight-bold text-md-left">South Africa</div>
												<div class="col-12 text-xs text-muted">Cricket - 5th test - from 15:45 GMT</div>
											</div>
											<div class="timeline-item mt-3 row text-center p-2">
												<div class="col font-weight-bold text-md-right">Man Utd</div>
												<div class="col-1">vs</div>
												<div class="col font-weight-bold text-md-left">Liverpool</div>
												<div class="col-12 text-xs text-muted">Football - Europa League - 19:45 GMT</div>
											</div>
											<div class="timeline-breaker timeline-breaker-middle">Saturday</div>
											<div class="timeline-item mt-3 row text-center p-2">
												<div class="col font-weight-bold text-md-right">England</div>
												<div class="col-1">vs</div>
												<div class="col font-weight-bold text-md-left">India</div>
												<div class="col-12 text-xs text-muted">Cricket - 3rd test - from 10:45 GMT</div>
											</div>
											<div class="timeline-item mt-3 row text-center p-2">
												<div class="col font-weight-bold text-md-right">New Zealand</div>
												<div class="col-1">vs</div>
												<div class="col font-weight-bold text-md-left">South Africa</div>
												<div class="col-12 text-xs text-muted">Cricket - 5th test - from 15:45 GMT</div>
											</div>
											<div class="timeline-breaker timeline-breaker-bottom">More next week........</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="support" role="tabpanel">
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="help" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="AddWardLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header bg-primary text-white">
						<h5 class="modal-title" id="Title">Need Help?</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<figure>
							<blockquote class="blockquote">
								<p class="mb-0">For any questions or concerns, you may contact MISD at misd@lcp.gov.ph or call at 1089</p>
							</blockquote>
						</figure>
					</div>
					<div class="modal-footer">
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="AddWardLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header bg-primary text-white">
						<h5 class="modal-title" id="Title">Login</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form class = "form-control" name = "frmLogin" id = "frmLogin" method = "post" action = "Welcome/login">
								<div class="input-group mb-3">
									<span class="input-group-text"><i class="fa-regular fa-user"></i></span>
									<input type="text" id = "username" name = "username" autocomplete = "off" class="form-control" placeholder="Email" />
								</div>

								<div class="input-group mb-3">
									<span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
									<input type="password" id = "password" autocomplete = "off" name = "password" class="form-control" placeholder="Password" />
									<button class="btn btn-outline-secondary" onclick="showPassword()" type="button" id="inputGroupFileAddon04"><i class="fa-solid fa-eye"></i></button>
								</div>
						</form>
					</div>
					<div class="modal-footer">
						<div class="clearfix">
							<small> Do not have an account? <a class = "text-primary" data-bs-toggle="modal" data-bs-target="#modRegister" style = "padding-right:15px; "><u>Register here</u></a></small>
							<button type="submit" class="width-35 float-end btn btn-sm btn-primary" id = "submitLogin" name = "submitLogin">
								<i class="icon-signin"></i>
								<span class="bigger-110">Login</span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>

	<!-- Footer
	================================================== -->
	<footer style="position: fixed; margin-left: 10px; bottom: 0; height: 100px; width: 98.5%; background: #FFFFFF;">
		<hr/>
		<div class="row" style="background: #FFFFFF;">
			<div class="col-lg-12">
				<b class="copyright"> &copy; <?php echo date("Y"); ?> Lung Center of the Philippines</b>
			</div>
		</div>
	</footer>
</HTML>
<script type="text/javascript">
	function showPassword() {
		var passField = document.getElementById("password");
		if (passField.type === "password") {
			passField.type = "text";
		} else {
			passField.type = "password";
		}
	}
</script>