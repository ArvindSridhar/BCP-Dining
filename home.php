<!DOCTYPE HTML>

<html>
	<head>
		<title>BCP Cafeteria</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="assets/main.css" />
        <link rel="stylesheet" href="https://www.geofortomorrow.org/assets/css/main.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	</head>
	<body class="classTech1">
		<!-- Page Wrapper -->
			<div id="classTech2">

				<!-- Header -->
					<header id="header" class="alt">
						<nav id="nav">
							<ul>
                                <li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="order.php">Order Food</a></li>
											<li><a href="menu.php">See the Menu</a></li>
                                            <li><a href="settings.html">Settings</a></li>
											<li><a href="info.html">About/Help</a></li>
                                            <p class="small2">Version 1.0 (January 31, 2017). Created by Bellarmine College Preparatory's App Development Club.</p>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>
					

				<!-- Banner -->
					<section id="classTech3" class="full">
						<div class="inner">
						<div class = "boxTitle">
							<h2>Welcome, Arvind!</h2>
							<p style="text-transform: upper">Order food from Bellarmine's
							<br>Cafeteria hassle-free, on-the-go<br></p>
							<ul class="actions">
								<li><a class="button1 special colorImp" id="order">Order Food</a></li>
			                	<li><a href="volunteer.html" class="button1 special colorImp">See the Menu</a></li>
			               		<li><a href="studentregistration.php" class="button1 special colorImp">Settings</a></li>
							</ul>
						</div>
                        <div class="popUp" id="popUp1">
                            <div class="close" id="closeOrder"></div>
                            <h1>Select items to order</h1>
                            <h4 id="left">Entrees</h4>
                            <form>
                                <table class="orderMenu">
                                    <?php 
                                        include_once("config.php");
                                        
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }

                                        $sql = "SELECT * FROM `MenuItems`";
                                        if(!$result = $conn->query($sql)){
                                            die('There was an error running the query [' . $conn->error . ']');
                                        }
                                        
                                        $count=0;
                                        while ($row = $result->fetch_assoc()) {
                                            $name = $row['Name'];
                                            $cost = $row['Price'];
                                            if (substr($cost, -3, -2) != ".") {
                                                $cost = $cost.".00";
                                            }
                                            $id = "item".$count;
                                            echo '<tr>
                                                <th><label class="labelItem">'.$name.'</label></th>
                                                    <th><label class="labelItem">$'.$cost.'</label></th>
                                                    <th><div class="buttonAdd" id="'.$id.'">Add</div></th>
                                                </tr>';
                                            $count = $count+1;
                                        }
                                    ?>
                                </table>
                            </form>
                        </div>
                        <script type="text/javascript">
                        $("#order").click(function(){
                            $("#popUp1").fadeIn(300);
                        });
                        $("#closeOrder").click(function(){
                            $("#popUp1").fadeOut(300);
                        });
                        </script>
						</div>
					</section>
			</div>
            
                <!-- Scripts -->
                <script src="https://www.geofortomorrow.org/assets/js/jquery.min.js"></script>
                <script src="https://www.geofortomorrow.org/assets/js/jquery.scrollex.min.js"></script>
                <script src="https://www.geofortomorrow.org/assets/js/jquery.scrolly.min.js"></script>
                <script src="https://www.geofortomorrow.org/assets/js/skel.min.js"></script>
                <script src="https://www.geofortomorrow.org/assets/js/util.js"></script>
                <!--[if lte IE 8]><script src="https://www.geofortomorrow.org/assets/js/ie/respond.min.js"></script><![endif]-->
                <script src="https://www.geofortomorrow.org/assets/js/main.js"></script>
	</body>
</html>








<!--<!DOCTYPE HTML>

<html>
	<head>
        <title>BCP Cafeteria</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="assets/main.css" />
	</head>
    <body class=homepage>
        <!--<h1>BCP Cafeteria</h1>
        <div></div>
        <h1 id="centerText">Welcome, Arvind!</h1>
        <div class=box>
            <h1>Order Food</h1>
        </div>
        <div class=box>
            <h1>See the Menu</h1>
        </div>
        <div class=box>
            <h1>Settings</h1>
        </div>
    </body>
</html>-->