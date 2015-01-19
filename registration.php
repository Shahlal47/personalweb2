<?php include_once('header.php'); ?>


<section class="container">
    <section class="row">
        <section class="col-md-8">
            <br><br>
            <div class="panel-heading panel panel-success"><center><h2>Registration Form</h2></center>
                <hr>
                <div class="panel-body">
                    <form class="form-horizontal col-md-10" action="add.php" method="post">
                        <div class="form-group">
                            <label class="col-md-6 control-label">First Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Your First Name" name="first_name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-6 control-label">Last Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Your Last Name" name="last_name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-6 control-label">Your Email</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Your Email" name="email">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-6 control-label">Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-6 control-label">Your Mobile/Phone</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Mobile/Phone Number" name="phone">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-6 control-label">Gender</label>
                            <div class="col-md-6">
                                <input type="radio" name="gender" value="Male">&nbsp;&nbsp;Male
                                <input type="radio" name="gender" value="Female">&nbsp;&nbsp;Female
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-6 control-label">Your Hobby(s)</label>
                            <div class="col-md-6">
                                <input type="checkbox" name="hobby[]" value="Gardening">&nbsp;&nbsp;Gardening<br>
                                <input type="checkbox" name="hobby[]" value="Reading">&nbsp;&nbsp;Reading<br>
                                <input type="checkbox" name="hobby[]" value="Dancing">&nbsp;&nbsp;Dancing<br>
                                <input type="checkbox" name="hobby[]" value="Singing">&nbsp;&nbsp;Singing<br>
                                <input type="checkbox" name="hobby[]" value="Traveling">&nbsp;&nbsp;Traveling<br>
                                <input type="checkbox" name="hobby[]" value="Drawing">&nbsp;&nbsp;Drawing<br>
                                <input type="checkbox" name="hobby[]" value="Game & Sports">&nbsp;&nbsp;Game & Sports
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-6 control-label">Date of Birth</label>
                            <div class="col-md-6">
                                <select name="year">
                                    <option selected>Year</option>
                                    <option value="1980">1980</option>
                                    <option value="1981">1981</option>
                                    <option value="1982">1982</option>
                                    <option value="1983">1983</option>
                                    <option value="1984">1984</option>
                                    <option value="1985">1985</option>
                                    <option value="1986">1986</option>
                                    <option value="1987">1987</option>
                                    <option value="1988">1988</option>
                                    <option value="1989">1989</option>
                                    <option value="1990">1990</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2000">1990</option>
                                </select>
                                <select name="month">
                                    <option selected>Month</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                                <select name="day">
                                    <option selected>Day</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-6 control-label">Favorite Cities</label>
                            <div class="col-md-6">
                                <select name="city[]" multiple>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Rajshahi">Rajshahi</option>
                                    <option value="Chittagong">Chittagong</option>
                                    <option value="Khulna">Khulna</option>
                                    <option value="Barisal">Barisal</option>
                                    <option value="Comilla">Comilla</option>
                                    <option value="Chandpur">Chandpur</option>
                                    <option value="Sylhet">Sylhet</option>
                                    <option value="Rangpur">Rangpur</option>
                                    <option value="Dinajpur">Dinajpur</option>
                                    <option value="Bogra">Bogra</option>
                                    <option value="Faridpur">Faridpur</option>
                                    <option value="Narayogonj">Narayogonj</option>
                                    <option value="Nilfamari">Nilfamari</option>
                                    <option value="Cox Bazar">Cox Bazar</option>
                                    <option value="Brahmanbaria">Brahmanbaria</option>
                                    <option value="Bandarban">Bandarban</option>
                                    <option value="Feni">Feni</option>
                                    <option value="Lakshmipur">Lakshmipur</option>
                                    <option value="Noakhali">Noakhali</option>
                                    <option value="Rangamati">Rangamati</option>
                                    <option value="Gazipur">Gazipur</option>
                                    <option value="Gopalganj">Gopalganj</option>
                                    <option value="Khagrachari">Khagrachari</option>
                                    <option value="Jamalpur">Jamalpur</option>
                                    <option value="Jessore">Jessore</option>
                                    <option value="Kishoreganj">Kishoreganj</option>
                                    <option value="Madaripur">Madaripur</option>
                                    <option value="Manikganj">Manikganj</option>
                                    <option value="Mymensingh">Mymensingh</option>
                                    <option value="Munshiganj">Munshiganj</option>
                                    <option value="Narsingdi">Narsingdi</option>
                                    <option value="Netrokona">Netrokona</option>
                                    <option value="Kushtia">Kushtia</option>
                                    <option value="Naogaon">Naogaon</option>
                                    <option value="Tangail">Tangail</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-6 control-label">Comments</label>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <textarea class="form-control" name="comments" cols="" rows="2"></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8 col-lg-offset-6">
                                    <input type="submit" name="submit" value="Register Me">
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </section>

<?php include_once('footer.php'); ?>