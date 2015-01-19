<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to My Personal Website</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
</head>
<body>
<header class="container">
    <br /><br /><br />
    <section class="row">
        <section class="col-md-6">
            <img src="image/logo.png" alt="logo">
        </section>
        <section class="col-md-6">
            <h1 class="text-right">Md. Shahlal Hossain</h1>
            <h3 class="text-right">Welcome to My Personal Website</h3>
        </section>
    </section>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
           <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home <span class="sr-only"></span></a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="registration.php">Registration</a></li>
                    <li><a href="photo.php">Photo Gallery</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About Me <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="personalinfo.php">Personal Information</a></li>
                            <li><a href="contactinfo.php">Contact Information</a></li>
                            <li><a href="academicinfo.php">Academic Information</a></li>
                            <li class="divider"></li>
                            <li><a href="portfolio.php">Portfolio</a></li>
                            <li><a href="skill.php">Skill Information</a></li>
                            <li class="divider"></li>
                            <li><a href="experience.php">Experiences</a></li>
                        </ul>
                    </li>
                    <li><a href="feedback.php">Contact Me</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>

<section class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="text-right"><a href="index.php">Home</a></li>
                <li class="text-right"><a href="login.php">Admin</a></li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>
        </div>
    </div>
</section>
		
