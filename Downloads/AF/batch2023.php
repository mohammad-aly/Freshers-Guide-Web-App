<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
    <title>Team profile cards</title>
	<style>
		.mail{
			font-size: 20px;
		}
		
	</style>
</head>
<body>

  
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
	  <a class="navbar-brand" href="#">PlacementHunt</a>
	  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
		  <!-- <li class="nav-item">
			<a class="nav-link" href="index.html">Home</a>
		  </li> -->
		  <!-- <li class="nav-item">
			<a class="nav-link" href="About.html">About</a>
		  </li> -->
		  <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			  Batches
			</a>
			<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
			  <li><a class="dropdown-item" href="batch2023.php">2023</a></li>
			  <li><a class="dropdown-item" href="batch2022.php">2022</a></li>
			  <!-- <li><hr class="dropdown-divider"></li>
			  <li><a class="dropdown-item" href="#">Something else here</a></li> -->
			</ul>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Privacy Policy</a>
		  </li>
		</ul>
		<form class="d-flex">
		  <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
		  <button class="btn btn-outline-primary" type="submit"> <a href="logout.php">Logout</a></button>
		</form>
	  </div>
	</div>
   </nav>
<!-- navbar -->

<br>

<center>
	<h1 style="color: rgb(239, 239, 239); "">BATCH 2023</h1>
</center>


<div class="container">
	<div class="row">
		<div class="col-lg-4">
			<div class="card p-0">
				<div class="card-image">
					<a href="2023profiles/ahmed.php">
						<img src="2023profiles/ahmed_poster.JPG?auto=compress&cs=tinysrgb&dpr=1&w=500"
						alt="">
					</a>
				</div>
				<div class="card-content d-flex flex-column align-items-center">
					<h4 class="pt-2">MUDASSAR AHMED KHAN</h4>
					<h5 style="color: black; font-size: 12px; font-weight: bold">ACCENTURE</h5>
					<h2>7 LPA</h2>

					<ul class="social-icons d-flex justify-content-center">
						<li style="--i:1">
							<a href="#">
								<span class="fab fa-facebook"></span>
							</a>
						</li>
						<li style="--i:2">
							<a href="#">
								<span class="fab fa-twitter"></span>
							</a>
						</li>
						<li style="--i:3">
							<a href="#">
								<span class="fab fa-instagram"></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>


		<div class="col-lg-4">
			<div class="card p-0">
				<div class="card-image">
					<a href="2023profiles/vaheed.php">
						<img src="2023profiles/vaheed_poster.JPG?auto=compress&cs=tinysrgb&dpr=1&w=500"
						alt="">
					</a>
				</div>
				<div class="card-content d-flex flex-column align-items-center">
					<h4 class="pt-2">MOHAMMAD VAHEED</h4>
					<h5 style="color: black; font-size: 12px; font-weight: bold">ACCENTURE</h5>
					<h2>6.5 LPA</h2>

					<ul class="social-icons d-flex justify-content-center">
						<li style="--i:1">
							<a href="#">
								<span class="fab fa-facebook"></span>
							</a>
						</li>
						<li style="--i:2">
							<a href="#">
								<span class="fab fa-twitter"></span>
							</a>
						</li>
						<li style="--i:3">
							<a href="#">
								<span class="fab fa-instagram"></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card p-0">
				<div class="card-image">
					<img src="2023profiles/charan_poster.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
						alt="">
				</div>
				<div class="card-content d-flex flex-column align-items-center">
					<h4 class="pt-2">NARUKULA CHARAN</h4>
					<h5 style="color: black; font-size: 12px; font-weight: bold">SAP</h5>
					<h2>15 LPA</h2>

					<ul class="social-icons d-flex justify-content-center">
						<li style="--i:1">
							<a href="#">
								<span class="fab fa-facebook"></span>
							</a>
						</li>
						<li style="--i:2">
							<a href="#">
								<span class="fab fa-twitter"></span>
							</a>
						</li>
						<li style="--i:3">
							<a href="#">
								<span class="fab fa-instagram"></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-lg-4">
			<div class="card p-0">
				<div class="card-image">
					<img src="2023profiles/akhil_poster.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500"
						alt="">
				</div>
				<div class="card-content d-flex flex-column align-items-center">
					<h4 class="pt-2">AKHIL KUMAR</h4>
					<h5 style="color: black; font-size: 12px; font-weight: bold">INFORMATICA</h5>
					<h2>9 LPA</h2>

					<ul class="social-icons d-flex justify-content-center">
						<li style="--i:1">
							<a href="#">
								<span class="fab fa-facebook"></span>
							</a>
						</li>
						<li style="--i:2">
							<a href="#">
								<span class="fab fa-twitter"></span>
							</a>
						</li>
						<li style="--i:3">
							<a href="#">
								<span class="fab fa-instagram"></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>


		<div class="col-lg-4">
			<div class="card p-0">
				<div class="card-image">
					<img src="2023profiles/prakash_poster.JPG?auto=compress&cs=tinysrgb&dpr=1&w=500"
						alt="">
				</div>
				<div class="card-content d-flex flex-column align-items-center">
					<h4 class="pt-2">PRAKASH</h4>
					<h5 style="color: black; font-size: 12px; font-weight: bold">CAPGEMINI</h5>
					<h2>7.5 LPA</h2>

					<ul class="social-icons d-flex justify-content-center">
						<li style="--i:1">
							<a href="#">
								<span class="fab fa-facebook"></span>
							</a>
						</li>
						<li style="--i:2">
							<a href="#">
								<span class="fab fa-twitter"></span>
							</a>
						</li>
						<li style="--i:3">
							<a href="#">
								<span class="fab fa-instagram"></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card p-0">
				<div class="card-image">
					<img src="2023profiles/riyaz_poster.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
						alt="">
				</div>
				<div class="card-content d-flex flex-column align-items-center">
					<h4 class="pt-2"></h4>
					<h5 style="color: black; font-size: 12px; font-weight: bold">SAP</h5>
					<h2>15 LPA</h2>

					<ul class="social-icons d-flex justify-content-center">
						<li style="--i:1">
							<a href="#">
								<span class="fab fa-facebook"></span>
							</a>
						</li>
						<li style="--i:2">
							<a href="#">
								<span class="fab fa-twitter"></span>
							</a>
						</li>
						<li style="--i:3">
							<a href="#">
								<span class="fab fa-instagram"></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>