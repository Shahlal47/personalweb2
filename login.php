<?php include_once('header.php'); ?>
<?php //session_start() ?>


<section class="container">
    <section class="row">
        <section class="col-md-8">

                <br><br><br>
            <form action="checkuser.php" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type="button">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <center><h2 id="myModalLabel" class="modal-title">Login to New World</h2></center>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="well">
                                <form id="loginForm" novalidate="novalidate" action="checkuser.php" method="POST">
                                    <div class="form-group">
                                        <label class="control-label" for="username">Username</label>
                                        <input class="form-control" type="email" placeholder="something@example.com" title="Please enter you username" required="" name="email">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="password">Password</label>
                                        <input class="form-control" type="password" title="Please enter your password" required="" name="password">
                                        <span class="help-block"></span>
                                    </div>
                                    <div id="loginErrorMsg" class="alert alert-error hide">Wrong Username or Password</div>
                                    <div class="checkbox">
                                        <label>
                                            <input id="remember" type="checkbox" name="remember">
                                            Remember Login
                                        </label>
                                    </div>
                                    <button class="btn btn-success btn-block" type="submit" name="submit">Login</button>
                                    <a class="btn btn-default btn-block" href="#">Help to login</a>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <p class="lead">
                                Register now for
                                <span class="text-success">FREE</span>
                            </p>
                            <ul class="list-unstyled" style="line-height: 2">
                                <li>
                                    <span class="fa fa-check text-success"></span>
                                    See All of My Activities
                                </li>
                                <li>
                                    <span class="fa fa-check text-success"></span>
                                    Gather New Experiences
                                </li>
                                <li>
                                    <span class="fa fa-check text-success"></span>
                                    Get Some Special Programming Help!
                                </li>
                                <li>
                                    <span class="fa fa-check text-success"></span>
                                    Enjoy Your Time with More Fun!!!
                                </li>
                                <li>
                                    <a href="/read-more/">
                                        <u>Read more</u>
                                    </a>
                                </li>
                            </ul>
                            <p>
                                <a class="btn btn-info btn-block" href="/new-customer/">Yes Please, Register Now!</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            </form>



            <?php if(isset($_SESSION['msgemail'])) echo $_SESSION['msgemail']; ?><br>
            <?php if(isset($_SESSION['msgpass'])) echo $_SESSION['msgpass']; ?>
            <?php session_unset() ?>
            <?php if(isset($_SESSION['msg'])) echo $_SESSION['msg']; ?><br>

        </section>


<?php include_once('footer.php'); ?>