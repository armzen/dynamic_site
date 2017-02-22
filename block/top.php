<div id="header">
<h1>Best smartphones 2017</h1>

<nav role="navigation" class="navbar navbar-default">
<!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="index.php" class="navbar-brand">
            <img src="images/logo.jpg" alt="" class="img-rounded">
        </a>
    </div>
    <!-- Collection of nav links and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse ">
        <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="registration.php">Registration</a></li>
			 <li class="dropdown">
						<a href="all_articles.php" data-toggle="dropdown" class="dropdown-toggle">
						Articles <b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="all_articles.php">Top Phones</a></li>
							<li class="divider"></li>
							<?php
							$r_all = getAllArticles();
                            foreach($r_all as $k => $prop) {
                                foreach($prop as $i => $value) {
                                     $id = $prop['id'];
                                     $title = $prop['title'];        
                                }
                             echo "<li><a href='article_1.php?id=$id'>$id $title</a></li>";
                            }
                            ?>
						</ul>
					</li>
            <li><a href="guestbook.php">Guestbook</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right" id="login">
        <li>
			<div class="col-xs-12">
			<?php
			/*
			echo function_exists('checkUser') . ' checkUser() exist.<br>';
			echo session_status().' session active status - 2, true.<br>';
			
			
			
			echo '<pre>session data <br>';
			var_dump($_SESSION);
			echo '</pre>';
			
			echo '<pre>post data <br>';
			var_dump($_POST);
			echo '</pre>';
			*/
			
			
			if(empty($_SESSION['email']) && empty($_SESSION['password'])) {								
				require_once "block/form_auth.php";				
			}
			elseif(checkUser($_SESSION['email'], $_SESSION['password'])){
				require_once "block/welcome.php";
			}
			?>
				            
          </div>
        </li>
        </ul>
    </div>
</nav>
</div> <!--End of header -->
