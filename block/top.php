<div id="header">
<h1 id="hash1">Best smartphones 2017</h1>

<nav role="navigation" class="navbar navbar-default ">
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
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="regis.php">Registration</a></li>
			 <li class="dropdown">
						<a href="all_articles.php" data-toggle="dropdown" class="dropdown-toggle">
						Articles <b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="all_articles.php">Top Phones</a></li>
							<li class="divider"></li>
							<li><a href="article_1.php">Samsung Galaxy S7 edge</a></li>
							<li><a href="article_2.php">Google Pixel</a></li>
							<li><a href="article_3.php">Apple iPhone 7</a></li>							
							<li><a href="article_4.php">OnePlus 3T</a></li>
						</ul>
					</li>
            <li><a href="guestbook.php">Guestbook</a></li>
            <li><a href="messages.php">Messages</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right" id="login">
        <li>
            <!--a href="#">Login</a-->
            <div class="col-xs-12">
                <form class="form-inline" role="form" method="post" action="auth.php">
                <div class="form-group">
                    <label class="sr-only" for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary" name="btn_auth">Login</button>
                </form>
            </div>

        </li>
        </ul>
    </div>
</nav>
</div> <!--End of header -->