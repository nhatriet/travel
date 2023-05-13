<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="analytics.css">

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
							<a href="#">Analytics</a>
						</li>
					</ul>
				</div>
			</div>

            
<div class="container">
    <!-- DONUT CHART BLOCK (LEFT-CONTAINER) --> 
    <div class="donut-chart-block block"> 
                      <h2 class="titular">OS AUDIENCE STATS</h2>
                      <div class="donut-chart">
   <!-- PORCIONES GRAFICO CIRCULAR
        ELIMINADO #donut-chart
        MODIFICADO CSS de .donut-chart -->
        <div id="porcion1" class="recorte"><div class="quesito ios" data-rel="21"></div></div>
       <div id="porcion2" class="recorte"><div class="quesito mac" data-rel="39"></div></div>
       <div id="porcion3" class="recorte"><div class="quesito win" data-rel="31"></div></div>
       <div id="porcionFin" class="recorte"><div class="quesito linux" data-rel="9"></div></div>
   <!-- FIN AÑADIDO GRÄFICO -->
                              <p class="center-date">JUNE<br><span class="scnd-font-color">2013</span></p>        
                      </div>
                      <ul class="os-percentages horizontal-list">
                          <li>
                              <p class="ios os scnd-font-color">iOS</p>
                              <p class="os-percentage">21<sup>%</sup></p>
                          </li>
                          <li>
                              <p class="mac os scnd-font-color">Mac</p>
                              <p class="os-percentage">39<sup>%</sup></p>
                          </li>
                          <li>
                              <p class="linux os scnd-font-color">Linux</p>
                              <p class="os-percentage">9<sup>%</sup></p>
                          </li>
                          <li>
                              <p class="win os scnd-font-color">Win</p>
                              <p class="os-percentage">31<sup>%</sup></p>
                          </li>
                      </ul>
                  </div>
   <!-- LINE CHART BLOCK (LEFT-CONTAINER) -->
<!-- <div class="line-chart-block block">
<div class="line-chart">
         <div class='grafico'>
         <ul class='eje-y'>
           <li data-ejeY='30'></li>
           <li data-ejeY='20'></li>
           <li data-ejeY='10'></li>
           <li data-ejeY='0'></li>
         </ul>
         <ul class='eje-x'>
           <li>Apr</li>
           <li>May</li>
           <li>Jun</li>
         </ul>
           <span data-valor='25'>
             <span data-valor='8'>
               <span data-valor='13'>
                 <span data-valor='5'>   
                   <span data-valor='23'>   
                   <span data-valor='12'>
                       <span data-valor='15'>
                       </span></span></span></span></span></span></span>
         </div>
         
       </div>
                      <ul class="time-lenght horizontal-list">
                          <li><a class="time-lenght-btn" href="#14">Week</a></li>
                          <li><a class="time-lenght-btn" href="#15">Month</a></li>
                          <li><a class="time-lenght-btn" href="#16">Year</a></li>
                      </ul>
                      <ul class="month-data clear">
                          <li>
                              <p>APR<span class="scnd-font-color"> 2013</span></p>
                              <p><span class="entypo-plus increment"> </span>21<sup>%</sup></p>
                          </li>
                          <li>
                              <p>MAY<span class="scnd-font-color"> 2013</span></p>
                              <p><span class="entypo-plus increment"> </span>48<sup>%</sup></p>
                          </li>
                          <li>
                              <p>JUN<span class="scnd-font-color"> 2013</span></p>
                              <p><span class="entypo-plus increment"> </span>35<sup>%</sup></p>
                          </li>
                      </ul>
                  </div>
                  
   -->
    <!-- bieudocot -->
    <div class="bar-chart-block block">
      <h2 class='titular'>By Country <span>*1000</span></h2>
      <div class='grafico bar-chart'>
         <ul class='eje-y'>
           <li data-ejeY='60'></li>
           <li data-ejeY='45'></li>
           <li data-ejeY='30'></li>
           <li data-ejeY='15'></li>
           <li data-ejeY='0'></li>
         </ul>
         <ul class='eje-x'>
           <li data-ejeX='37'><i>España</i></li>
           <li data-ejeX='56'><i>Portugal</i></li>
           <li data-ejeX='25'><i>Italia</i></li>
           <li data-ejeX='18'><i>Grecia</i></li>
           <li data-ejeX='45'><i>EE.UU</i></li>
           <li data-ejeX='50'><i>México</i></li>
           <li data-ejeX='33'><i>Chile</i></li>
         </ul>
      </div>
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
