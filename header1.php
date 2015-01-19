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
                    <li><a href="dashboard.php">Home <span class="sr-only"></span></a></li>
                    <li><a href="list.php">All Users</a></li>
                    <li><a href="poem.php">All Poems</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">All Songs<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="modern.php">Modern Songs</a></li>
                            <li><a href="classical.php">Classical Songs</a></li>
                            <li><a href="band.php">Band Songs</a></li>
                            <li class="divider"></li>
                            <li><a href="portfolio.php">Folk Songs</a></li>
                        </ul>
                    </li>
                    <li><a href="story.php">All Stories</a></li>
                    <li><a href="quote.php">All Quotations</a></li>
                    <li><a href="feedback.php">All Feedback</a></li>
                    <li><a href="logout.php">Logout</a></li>
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

<section class="container">
    <section class="row">
        <section class="col-md-2">
            <br><br>
            <div class="btn-group-vertical" aria-label="Vertical button group" role="group">
                <button class="btn btn-default" type="button">Poems</button>
                <button class="btn btn-default" type="button">Jokes</button>
                <div class="btn-group" role="group">
                    <button id="btnGroupVerticalDrop1" class="btn btn-default dropdown-toggle" aria-expanded="false" data-toggle="dropdown" type="button">
                        Song Lyrics
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1" role="menu">
                        <li>
                            <a href="#">Modern Song</a>
                        </li>
                        <li>
                            <a href="#">Classical Song</a>
                        </li>
                        <li>
                            <a href="#">Band Song</a>
                        </li>
                        <li>
                            <a href="#">Folk Song</a>
                        </li>
                    </ul>
                </div>
                <button class="btn btn-default" type="button">Stories</button>
                <button class="btn btn-default" type="button">Quotations</button>
            </div>
        </section>
