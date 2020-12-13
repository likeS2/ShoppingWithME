<!DOCTYPE HTML>

<html>
	<head>
		<title>Shopping with ME!</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script type="text/javascript">
			curr = 0;
			function changeImg() {
				if (curr == 0) {
					curr = 1;
					document.getElementById('image').src = "images/lightpurplepick.jpg";
				}
				else {
					curr = 0;
					document.getElementById('image').src = "images/colorpick.jpg";
				}
			}

			function skinAlert() {
				var url = "popup.php";
				var name = "피부색 확인";
				var option = "width = 900, height = 300, top = 100, left = 200, location = no";
				window.open(url, name, option);
			}
		</script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css?after" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div class="wrapper style1">

				<!-- Header -->
					<div id="header" class="skel-panels-fixed">
						<div id="logo">
							<h1><a href="index.html">Shopping with ME!</a></h1>
						</div>
						<nav id="nav">
							<ul>
								<li class="active"><a href="index.html">Home</a></li>
								<li><a href="left-sidebar.html">Sign Up</a></li>
								<li><a href="right-sidebar.html">My Avatar</a></li>
								<li><a href="no-sidebar.html">Shop</a></li>
							</ul>
						</nav>
					</div>

	<!-- Footer -->
		<div id="footer" class="wrapper style2">
			<div class="container">
				<section>
					<header class="major">
						<h2>정보 입력</h2>
						<span class="byline">아바타 생성을 위해 필요한 정보를 입력해주세요!</span>
					</header>
					<form method="post" action="shop.php">
						<div class="row half">
							<div class="12u">
								<br>*
								<input type="radio" id="male" name="gender" value="male" />
								<label for="male">Male</label>
								<input type="radio" id="female" name="gender" value="female" />
								<label for="male">Female</label>
								</br>
							</div>
						</div>
						<div class="row half">
							<div class="12u">
								<input class="text" type="text" name="name" id="name" placeholder="* 닉네임" />
							</div>
						</div>
						<div class="row half">
							<div class="12u">
								<input class="text" type="text" name="height" id="height" placeholder="* 키 (cm)" />
							</div>
						</div>
						<div class="row half">
							<div class="12u">
								<input class="text" type="text" name="weight" id="weight" placeholder="* 몸무게 (kg)" />
							</div>
						</div>
						<div class="row half">
							<div class="12u">
								<input class="text" type="text" name="shoes" id="shoes" placeholder="* 신발 사이즈 (cm)" />
							</div>
						</div>
						<div class="row half">
							<div class="12u">
								<input class="text" type="text" name="shoulder" id="shoulder" placeholder="어깨 단면 사이즈 (cm)" />
							</div>
						</div>
						<div class="row half">
							<div class="12u">
								<input class="text" type="text" name="chest" id="chest" placeholder="가슴 단면 사이즈 (cm)" />
							</div>
						</div>
						<div class="row half">
							<div class="12u">
								<input class="text" type="text" name="waist" id="waist" placeholder="허리 단면 사이즈 (cm)" />
							</div>
						</div>
						<div class="row half" style="margin-right:-20px">
							<div class="12u">
								<label for="wholebody"> <strong>전신 사진</strong> </label>
								<input type="file" name="wholebody" id="wholebody" accept="image/png, image/jpeg"/>
								<label for="skin"> <strong>* 피부색 사진</strong></label>
								<input type="file" name="skin" id="skin" accept="image/png, image/jpeg" onchange="skinAlert()"/>
							</div>
						</div>
						<div class="row half">
								<label for="prefer"> <strong>* 선호 색상</strong> </label> <br>
								<img id="image" onclick="changeImg()" src="images/colorpick.JPG" width=85%/>
						</div>
						<div class="row half">
								<label for="notprefer"> <strong>비선호 색상</strong> </label> <br>
								<img id="notprefer" src="images/colorpick.JPG" width=85%/>
						</div>
						<div class="row half">
							<div class="12u">
								<ul class="actions">
									<li>
										<br><br>
										<input type="submit" value="아바타 생성" class="button alt" />
									</li>
								</ul>
							</div>
						</div>
					</form>
				</section>
			</div>
		</div>

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				<div class="copyright">
					<p>Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)</p>
					<ul class="icons">
						<li><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
						<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
						<li><a href="#" class="fa fa-google-plus"><span>Google+</span></a></li>
					</ul>
				</div>
			</div>
		</div>

	</body>
</html>
