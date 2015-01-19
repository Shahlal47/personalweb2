<?php include_once('header.php'); ?>


<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "", "personalweb");
$query = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysql_fetch_assoc($result);

//print_r($result);
//var_dump($row);

exit;
?>


    <section class="container">
        <section class="row">
            <section class="col-md-8">
                <br><br>
                <div class="panel-heading panel panel-success"><center><h2>Registration Form</h2></center>
                    <hr>
                    <div class="panel-body">
                        <form class="form-horizontal col-md-10" action="update.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                            <div class="form-group">
                                <label class="col-md-6 control-label">First Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name'];?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-6 control-label">Last Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name'];?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-6 control-label">Your Email</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="<?php echo $row['email'];?>">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-6 control-label">Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password" value="<?php echo $row['password'];?>">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-6 control-label">Your Mobile/Phone</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'];?>">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-6 control-label">Gender</label>
                                <div class="col-md-6">
                                    <input type="radio" name="gender" <?php if ($row['gender'] == "Male") echo 'checked'; ?> value="Male">&nbsp;&nbsp;Male
                                    <input type="radio" name="gender" <?php if ($row['gender'] == "Female") echo 'checked'; ?> value="Female">&nbsp;&nbsp;Female
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-6 control-label">Your Hobby(s)</label>
                                <div class="col-md-6">
                                    <input type="checkbox" name="hobby[]" <?php if ($row['hobby'] == "Gardening") echo 'checked'; ?> value="Gardening">&nbsp;&nbsp;Gardening<br>
                                    <input type="checkbox" name="hobby[]" <?php if ($row['hobby'] == "Reading") echo 'checked'; ?> value="Reading">&nbsp;&nbsp;Reading<br>
                                    <input type="checkbox" name="hobby[]" <?php if ($row['hobby'] == "Dancing") echo 'checked'; ?> value="Dancing">&nbsp;&nbsp;Dancing<br>
                                    <input type="checkbox" name="hobby[]" <?php if ($row['hobby'] == "Singing") echo 'checked'; ?> value="Singing">&nbsp;&nbsp;Singing<br>
                                    <input type="checkbox" name="hobby[]" <?php if ($row['hobby'] == "Traveling") echo 'checked'; ?> value="Traveling">&nbsp;&nbsp;Traveling<br>
                                    <input type="checkbox" name="hobby[]" <?php if ($row['hobby'] == "Drawing") echo 'checked'; ?> value="Drawing">&nbsp;&nbsp;Drawing<br>
                                    <input type="checkbox" name="hobby[]" <?php if ($row['hobby'] == "Game & Sports") echo 'checked'; ?> value="Game & Sports">&nbsp;&nbsp;Game & Sports
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-6 control-label">Date of Birth</label>
                                <div class="col-md-6">
                                    <select name="year">
                                        <option selected>Year</option>
                                        <option <?php if ($row['year'] == "1980") echo 'selected'; ?> value="1980">1980</option>
                                        <option <?php if ($row['year'] == "1981") echo 'selected'; ?> value="1981">1981</option>
                                        <option <?php if ($row['year'] == "1982") echo 'selected'; ?> value="1982">1982</option>
                                        <option <?php if ($row['year'] == "1983") echo 'selected'; ?> value="1983">1983</option>
                                        <option <?php if ($row['year'] == "1984") echo 'selected'; ?> value="1984">1984</option>
                                        <option <?php if ($row['year'] == "1985") echo 'selected'; ?> value="1985">1985</option>
                                        <option <?php if ($row['year'] == "1986") echo 'selected'; ?> value="1986">1986</option>
                                        <option <?php if ($row['year'] == "1987") echo 'selected'; ?> value="1987">1987</option>
                                        <option <?php if ($row['year'] == "1988") echo 'selected'; ?> value="1988">1988</option>
                                        <option <?php if ($row['year'] == "1989") echo 'selected'; ?> value="1989">1989</option>
                                        <option <?php if ($row['year'] == "1990") echo 'selected'; ?> value="1990">1990</option>
                                        <option <?php if ($row['year'] == "1991") echo 'selected'; ?> value="1991">1991</option>
                                    </select>
                                    <select name="month">
                                        <option selected>Month</option>
                                        <option <?php if ($row['month'] == "01") echo 'selected'; ?> value="01">January</option>
                                        <option <?php if ($row['month'] == "02") echo 'selected'; ?> value="02">February</option>
                                        <option <?php if ($row['month'] == "03") echo 'selected'; ?> value="03">March</option>
                                        <option <?php if ($row['month'] == "04") echo 'selected'; ?> value="04">April</option>
                                        <option <?php if ($row['month'] == "05") echo 'selected'; ?> value="05">May</option>
                                        <option <?php if ($row['month'] == "06") echo 'selected'; ?> value="06">June</option>
                                        <option <?php if ($row['month'] == "07") echo 'selected'; ?> value="07">July</option>
                                        <option <?php if ($row['month'] == "08") echo 'selected'; ?> value="08">August</option>
                                        <option <?php if ($row['month'] == "09") echo 'selected'; ?> value="09">September</option>
                                        <option <?php if ($row['month'] == "10") echo 'selected'; ?> value="10">October</option>
                                        <option <?php if ($row['month'] == "11") echo 'selected'; ?> value="11">November</option>
                                        <option <?php if ($row['month'] == "12") echo 'selected'; ?> value="12">December</option>
                                    </select>
                                    <select name="day">
                                        <option selected>Day</option>
                                        <option <?php if ($row['day'] == "1") echo 'selected'; ?> value="1">1</option>
                                        <option <?php if ($row['day'] == "2") echo 'selected'; ?> value="2">2</option>
                                        <option <?php if ($row['day'] == "3") echo 'selected'; ?> value="3">3</option>
                                        <option <?php if ($row['day'] == "4") echo 'selected'; ?> value="4">4</option>
                                        <option <?php if ($row['day'] == "5") echo 'selected'; ?> value="5">5</option>
                                        <option <?php if ($row['day'] == "6") echo 'selected'; ?> value="6">6</option>
                                        <option <?php if ($row['day'] == "7") echo 'selected'; ?> value="7">7</option>
                                        <option <?php if ($row['day'] == "8") echo 'selected'; ?> value="8">8</option>
                                        <option <?php if ($row['day'] == "9") echo 'selected'; ?> value="9">9</option>
                                        <option <?php if ($row['day'] == "10") echo 'selected'; ?> value="10">10</option>
                                        <option <?php if ($row['day'] == "11") echo 'selected'; ?> value="11">11</option>
                                        <option <?php if ($row['day'] == "12") echo 'selected'; ?> value="12">12</option>
                                        <option <?php if ($row['day'] == "13") echo 'selected'; ?> value="13">13</option>
                                        <option <?php if ($row['day'] == "14") echo 'selected'; ?> value="14">14</option>
                                        <option <?php if ($row['day'] == "15") echo 'selected'; ?> value="15">15</option>
                                        <option <?php if ($row['day'] == "16") echo 'selected'; ?> value="16">16</option>
                                        <option <?php if ($row['day'] == "17") echo 'selected'; ?> value="17">17</option>
                                        <option <?php if ($row['day'] == "18") echo 'selected'; ?> value="18">18</option>
                                        <option <?php if ($row['day'] == "19") echo 'selected'; ?> value="19">19</option>
                                        <option <?php if ($row['day'] == "20") echo 'selected'; ?> value="20">20</option>
                                        <option <?php if ($row['day'] == "21") echo 'selected'; ?> value="21">21</option>
                                        <option <?php if ($row['day'] == "22") echo 'selected'; ?> value="22">22</option>
                                        <option <?php if ($row['day'] == "23") echo 'selected'; ?> value="23">23</option>
                                        <option <?php if ($row['day'] == "24") echo 'selected'; ?> value="24">24</option>
                                        <option <?php if ($row['day'] == "25") echo 'selected'; ?> value="25">25</option>
                                        <option <?php if ($row['day'] == "26") echo 'selected'; ?> value="26">26</option>
                                        <option <?php if ($row['day'] == "27") echo 'selected'; ?> value="27">27</option>
                                        <option <?php if ($row['day'] == "28") echo 'selected'; ?> value="28">28</option>
                                        <option <?php if ($row['day'] == "29") echo 'selected'; ?> value="29">29</option>
                                        <option <?php if ($row['day'] == "30") echo 'selected'; ?> value="30">30</option>
                                        <option <?php if ($row['day'] == "31") echo 'selected'; ?> value="31">31</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-6 control-label">Favorite Cities</label>
                                <div class="col-md-6">
                                    <select name="city[]" multiple>
                                        <option <?php if ($row['city'] == "Dhaka") echo 'selected'; ?> value="Dhaka">Dhaka</option>
                                        <option <?php if ($row['city'] == "Rajshahi") echo 'selected'; ?> value="Rajshahi">Rajshahi</option>
                                        <option <?php if ($row['city'] == "Chittagong") echo 'selected'; ?> value="Chittagong">Chittagong</option>
                                        <option <?php if ($row['city'] == "Khulna") echo 'selected'; ?> value="Khulna">Khulna</option>
                                        <option <?php if ($row['city'] == "Barisal") echo 'selected'; ?> value="Barisal">Barisal</option>
                                        <option <?php if ($row['city'] == "Comilla") echo 'selected'; ?> value="Comilla">Comilla</option>
                                        <option <?php if ($row['city'] == "Chandpur") echo 'selected'; ?> value="Chandpur">Chandpur</option>
                                        <option <?php if ($row['city'] == "Sylhet") echo 'selected'; ?> value="Sylhet">Sylhet</option>
                                        <option <?php if ($row['city'] == "Rangpur") echo 'selected'; ?> value="Rangpur">Rangpur</option>
                                        <option <?php if ($row['city'] == "Dinajpur") echo 'selected'; ?> value="Dinajpur">Dinajpur</option>
                                        <option <?php if ($row['city'] == "Bogra") echo 'selected'; ?> value="Bogra">Bogra</option>
                                        <option <?php if ($row['city'] == "Faridpur") echo 'selected'; ?> value="Faridpur">Faridpur</option>
                                        <option <?php if ($row['city'] == "Narayogonj") echo 'selected'; ?> value="Narayogonj">Narayogonj</option>
                                        <option <?php if ($row['city'] == "Nilfamari") echo 'selected'; ?> value="Nilfamari">Nilfamari</option>
                                        <option <?php if ($row['city'] == "Cox Bazar") echo 'selected'; ?> value="Cox Bazar">Cox Bazar</option>
                                        <option <?php if ($row['city'] == "Brahmanbaria") echo 'selected'; ?> value="Brahmanbaria">Brahmanbaria</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-6 control-label">Comments</label>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <textarea name="comments" cols="" rows="2" value="<?php echo $row['comments'];?>"></textarea>
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