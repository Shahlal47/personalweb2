<?php include_once('header.php'); ?>

<section class="container">
    <section class="row">
        <section class="col-md-8">

            <br><br>

            <div class="panel panel-success">
                <div class="panel-heading"><center><h2>Send Your Suggestion</h2></center></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="message.php" method="post">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Full Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Your Full Name" name="name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-md-4 control-label">Email Address</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Your Email Address" name="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Phone/Mobile</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Your Contact Number" name="subject">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Subject</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Subject/Topic" name="subject">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Your Message</label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="message"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 col-lg-offset-5">
                                <input type="submit" name="submit" value="Send Message">

                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </section>




<?php include_once('footer.php'); ?>
