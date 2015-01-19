<?php include_once('header1.php'); ?>

<?php session_start() ?>

<?php
if(isset($_SESSION['name'])){
    echo "Hello " . $_SESSION['name'] . "<br>";
}
else{
    header("location:index.php");
}
?>


                <section class="col-md-7">
                    <section class="row">

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis malesuada sapien. Quisque consequat efficitur ex, eu dictum nibh consequat eget. Sed sem mauris, fermentum vitae egestas aliquam, tincidunt eu nibh. Vestibulum et nibh purus. Praesent dictum tellus ac sapien sagittis, et interdum nisl gravida. Sed ullamcorper dui vitae ex condimentum tristique. Phasellus aliquam diam nec arcu aliquet, luctus auctor urna semper. Aenean consectetur nisl ut augue placerat, sed blandit lectus tincidunt. Suspendisse id nunc purus. Cras tempor libero quis sapien ultricies feugiat. Morbi aliquet ex ac nisl faucibus rhoncus. Cras egestas diam quis accumsan elementum. Quisque eu aliquam est. Aliquam erat volutpat. Pellentesque auctor vel orci vel mattis. Donec at orci ut dui eleifend semper. Sed in tortor felis. Integer vel facilisis tortor. Proin eu est ut erat suscipit tincidunt. Suspendisse potenti. Curabitur ultrices eget purus at pulvinar. Sed iaculis turpis eget eros scelerisque, non ullamcorper arcu ultrices. Phasellus pulvinar mollis sapien et porta. Nulla tincidunt felis non mauris fermentum, nec laoreet elit eleifend. Donec ultricies eget magna sed faucibus. Phasellus dapibus nisi dolor, id fringilla urna consequat ut. Nulla nec venenatis ipsum. Cras maximus porta nisi ac iaculis. Phasellus a sodales ex. Duis a leo eu quam viverra laoreet at vitae nulla. Sed fringilla faucibus velit. Fusce sollicitudin porta elit, eu ornare felis accumsan a. Vivamus rutrum nunc id odio mattis, ac aliquam libero consectetur. Curabitur tristique erat sit amet odio eleifend, ut aliquam augue placerat. Curabitur vitae gravida neque. Morbi rhoncus, elit at egestas preti
                    </p>
                </section>
                </section>



<?php include_once('footer1.php'); ?>