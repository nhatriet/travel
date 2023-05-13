
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="style.css">
	<title>F5 Admin</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">F5 Admin</span>
		</a>
		<ul class="side-menu top">
		<li class="active">
				<a href="index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<!-- <li>
				<a href="offers.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Offers</span>
				</a>
			</li> -->
			<li>
				<a href="analytics.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Analytics</span>
				</a>
			</li>
			<!-- <li>
				<a href="messages.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Message</span>
				</a>
			</li> -->
			<li>
				<a href="team.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
				</a>
			</li>
            <li>
				<a href="add.php">
				    <i class='bx bxs-smile'></i>
					<span class="text">Add new travel</span>
				</a>
			</li>
			<li>
				<a href="manager.php">
				    <i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Tour manager</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<buttotn class = "dropbtn"><i class='bx bxs-bell' ></i></buttotn>
				<span class="num">8</span>
			</div>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="#" href="#">Settings</a>
						</li>
					</ul>
				</div>
			</div>
            <div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Thông tin cá nhân</h3>
						<i class='bx bx-edit-alt'></i>
						<i class='bx bx-user-circle' ></i>
					</div>
					<table style = "font-size: 20px;">
                        <tr>
                            <td>Name:</td>
                            <td>Đoàn Ngọc Nhã Triết</td>
                        </tr>
                        <tr>
                            <td>D.O.B:</td>
                            <td>24/12/2003</td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td>Female</td>
                        </tr>
                        <tr>
                            <td>Grade:</td>
                            <td>12/12</td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td>Tân Phú, Tp. HCM</td>
                        </tr>
                        <tr>
                            <td>Update my password:</td>
                            <td><input name="pass" type="text" value=""></td>
                        </tr>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>My notes</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
                    <a target="_blank" href="./img/people.png">
                        <img src="./img/people.png" alt="profile">
                    </a>
				</div>
			</div>

		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<footer class="main-footer">
		<strong>Copyright &copy; 2017-2023 <a href="#">F5 Travel</a>.</strong>
		All rights reserved.
		<br>
		  <b>Have a nice tour!</b>
	</footer>
	

	<script src="script.js"></script>
</body>
</html>