<?php
include 'db_helperDATABASE.php';


//Tạo 1 mảng admins chứa các admin trong csdl
$admins = getAdmins();


//test du lieu
// print("<pre>");
// print_r($admins);
// die();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="style.css">

	<title>F5 Team</title>
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
				<a href="settings.php">
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
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
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
							<a href="#">Team</a>
						</li>
					</ul>
				</div>
			</div>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Thông tin thành viên</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Admin</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Update</th>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach($admins as $admin) {
							?>

							<tr>
								<td>
									<img src="img/people.png">
									<p><?php echo $admin['admin_name'] ?></p>
								</td>
								<td><?php echo $admin['Email'] ?></td>
								<td><?php echo $admin['Phone'] ?></td>
								<td>
									<script>
										function clickondelete(){
											alert("DELETED");
										}
									</script>
									<span class="update delete"><a href="team_delete.php?adminemail=<?php echo $admin['Email'] ?>" onclick="clickondelete()">Delete</a></span>
								</td>
							</tr>
							
							<?php
								}
							?>
						</tbody>
					</table>
				</div>
				<!-- <div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div> -->
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