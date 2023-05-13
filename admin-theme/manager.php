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
							<a href="#">Tour manager</a>
						</li>
					</ul>
				</div>
			</div>

    </main>
<div style="background: #0056b3; height: 33px; color: #f2f2f2; font-size: 18px; padding-left: 10px; line-height: 33px; ">
    <i class="fab fa-pied-piper-square"></i>
    Quản lý tour du lịch
</div>

<br>
<table style="width: 100%; margin: 5px;">
    <tr style="font-weight: 600; color: #000; font-size: 18px;">
        <td colspan="11" style="text-align: left">
            <i class="fas fa-bars" style="margin-right: 3px;"></i>
            Danh sách tour du lịch</td>
    </tr>
    <tr style="background: #fff; text-align: center">
        <td style="color: #cc0000; font-weight: 500">STT</td>
        <td style="color: #115095; font-weight: 500">Mã tour</td>
        <td style="color: #115095; font-weight: 500">Địa điểm</td>
        <td style="color: #115095; font-weight: 500">Chi tiết</td>
        <td style="color: #115095; font-weight: 500">Số ngày</td>
        <td style="color: #115095; font-weight: 500">Độ tuổi</td>
        <td style="color: #115095; font-weight: 500">Thể loại</td>
        <td style="color: #115095; font-weight: 500">Giá tiền</td>
        <td style="color: #115095; font-weight: 500">Ảnh</td>
		<td style="color: #115095; font-weight: 500">Hành động</td>
    </tr>
    <tr style="background: #e8ffff">
	<td>1</td>
	<td style="text-align: center">DN103</td>
	<td >Đà Nẵng</td>
	<td >Đà Nẵng may mắn khi sở hữu nhiều bãi biển đẹp, trải dài thoai thoải và cát trắng miên man. Biển Đà Nẵng được tạp chí Forbes (Mỹ) bình chọn là một trong 6 bãi biển quyến rũ nhất hành tinh. Nếu bạn là người yêu biển chắc chắn sẽ thỏa mãn khi được ngụp lặn trong nước biếc, đùa giỡn với những con sóng hay các trò chơi như lướt ván, chèo thuyền chuối, motor nước
</td>
    <td style="text-align: center">4</td>
    <td style="text-align: center">12</td>
    <td style="text-align: center">Vacation</td>
    <td style="text-align: center">4500000</td>
	<td style="text-align: center"><img style="width: 80px; height: 50px" src="https://vcdn1-dulich.vnecdn.net/2022/06/03/cauvang-1654247842-9403-1654247849.jpg?w=1200&h=0&q=100&dpr=1&fit=crop&s=Swd6JjpStebEzT6WARcoOA"></td>
    <td style="color: #b21f2d;  font-weight: 500; text-align: center; min-width: 200px;">
        <button onClick="deleteitemn(this.id)" class="btn btn-danger   "  id="8">Xóa</button>
        <a href="?select=edittravel&id=8"><button  onClick="edititem(this.id)" id="8" class="btn btn-primary">Chỉnh sửa</button></a>


    </tr>    <div style="display: none" id="num-rows">1</div>
	<td>2</td>
	<td style="text-align: center">HA001</td>
	<td >Hội An</td>
    <td>Thành phố Hội An nằm bên bờ bắc hạ lưu sông Thu Bồn. Hội An là một đô thị cổ của Việt Nam</td>
    <td style="text-align: center">4</td>
    <td style="text-align: center">10</td>
    <td style="text-align: center">Romantic</td>
    <td style="text-align: center">5000000</td>
	<td style="text-align: center"><img style="width: 80px; height: 50px" src="https://vcdn1-dulich.vnecdn.net/2022/06/01/Hoi-An-VnExpress-5851-16488048-4863-2250-1654057244.jpg?w=0&h=0&q=100&dpr=1&fit=crop&s=Z2ea_f0O7kgGZllKmJF92g"></td>
    <td style="color: #b21f2d;  font-weight: 500; text-align: center; min-width: 200px;">
        <button onClick="deleteitemn(this.id)" class="btn btn-danger   "  id="8">Xóa</button>
        <a href="add.php"><button  class="btn btn-primary">Chỉnh sửa</button></a>

    </td>
	
    <script>
        var n=(parseInt(document.getElementById('num-rows').textContent));

    </script>
</table>

<dialog id="xacnhanxoa" style="border: none; width: 500px;  box-shadow: 0px 0px 5px 5px #666; border-radius: 5px">
    <p style="font-size: 18px;">Bạn có thực sự muốn xóa mục này!!</p>
    <hr>
    <button class="btn btn-danger" style="float: right; margin-left: 10px; padding: 5px;" id="huydelete">Hủy</button>
    <form style="float: right">
        <input name="select" value="travelviewingMana" style="display: none">
        <input id = "dele" name="dele" value="" style="display: none">
        <button style="padding: 5px;" class="btn btn-primary" id="xacnhandelete">Xác nhận</button>
    </form>
</dialog>
<script>function deleteitemn(clicked_id)
{
    var xacnhan = document.getElementById('xacnhanxoa');
    var id =  document.getElementById(clicked_id);
    var huydelete = document.getElementById('huydelete');
    var dele = document.getElementById('dele');
    dele.value = clicked_id;
    huydelete.addEventListener('click', function() {
        xacnhan.close();
    });
    xacnhan.showModal();
}</script>        </div>
    </div>
</div>

<script>
    function hienthiweb() {
        var getthe = document.getElementById('tuychonweb');
        if (getthe.style.display=='none') getthe.style.display = 'block';
        else getthe.style.display = 'none';

    }
</script>
	</section>
	<script src="script.js"></script>
    
</body>
</html>

