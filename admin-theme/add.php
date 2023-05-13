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
							<a href="#">Add new travel</a>
						</li>
					</ul>
				</div>
			</div>


			<div class="title-content" style="color: #eee;">
    <i style="margin-right: 5px" class="fas fa-plus-square"></i>
    Thêm tour du lịch mới
</div>
<div class="content">
    <div class="row">
        <div class = "col-5">
            <form method="POST"  enctype="multipart/form-data">
                <table style="width:100%">
                    <tr>
                        <td>
                            <i class="fas fa-plus-square"></i>
                            <span style="font-weight: 600;">Nội dung bài viết</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <textarea name="post" id="cmt"></textarea>
                            <script> CKEDITOR.replace('cmt');</script>
                        </td>
                    </tr>
                </table>
        </div>
        <div class = "col-7">
            <table style="width:100%">
                <tr>
                    <td>
                        <i class='fas fa-plus-square'></i>
                        <span style="font-weight: 600;">Các thành phần</span>
                    </td>
                </tr>
                <tr>
                    <td style="background: #f2f2f2;">
                        <table style="border: none; width: 100%">
                            <tr style="border: none; width: 100%; ">
                                <td style="border: none; width: 50%; padding: 15px;">
                                    <label style="color: #000; font-weight: 500;" for="">Tiêu đề bài viết</label>
                                    <input type="text" style=" width: 70%" class="form-control"  id="password" required="" placeholder="enter post title" name="title">
                                    <br>
                                    <div class="form-group">
                                        <label style="color: #000; font-weight: 500;" for="">Ảnh Carousel 1</label><br>
                                        <img id="blah" src="" alt="Ảnh đại diện" style="height: 200px; width: 200px;" /><br><br>
                                        <input type='file' style="font-size: 12px;" name="imgInp" id="imgInp" />
                                    </div>
                                    
                                </td>
                                <td style="border: none; width: 50%; padding: 15px;">

                                    <div class="form-group">
                                        <label style="color: #000; font-weight: 500;" for="">Mã tour</label><br>
                                        <input type="text" placeholder="DTFHFDS-76HG" name="code">
                                    </div>
                                    <div class="form-group">
                                        <label style="color: #000; font-weight: 500;" for="">Ngày khởi hành</label><br>
                                        <input type="date" name="Dday">
                                    </div>
                                    <div class="form-group">
                                        <label style="color: #000; font-weight: 500;" for="">Thời gian</label><br>
                                        <input type="number" value="3" name="time">
                                    </div>
                                    <div class="form-group">
                                        <label style="color: #000; font-weight: 500;" for="">Địa điểm xuất phát</label><br>
                                        <input type="text" placeholder="Ha noi" name="startingplace">
                                    </div>
                                    <div class="form-group">
                                        <label style="color: #000; font-weight: 500;" for="">Địa điểm đến</label><br>
                                        <input type="text" placeholder="Ho Chi Minh" name="ToLocation">
                                    </div>
                                    <div class="form-group">
                                        <label style="color: #000; font-weight: 500;" for="">Số lượng hành khách tối đa</label><br>
                                        <input type="number" value="15" name="Numberofseats">
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <br><br>
                        <div style="width:100%; text-align:center" >
                            <button class="btn btn-danger">Tải lên địa điểm</button></div> <br>
                    </td>
                </tr>

            </table>
            </form>
        </div>
    </div>
</div>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah2').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURL3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah3').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });


    $("#imgInp2").change(function(){
        readURL2(this);
    });
    $("#imgInp3").change(function(){
        readURL3(this);
    });

</script>

        </div>
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