<?php
//print_r($_SERVER);
?>

<ul>
    <?php
    foreach($_SERVER as $row){
        ?>

        <li><?php echo $row; ?></li>

    <?php
    }
    ?>
</ul>


<ul>
    <?php
    foreach($_SERVER as $key => $value){
        ?>

        <li><?php echo $key; ?></li>

    <?php
    }
    ?>
</ul>



<ul>
    <?php
    foreach($_SERVER as $key => $value){
        ?>

        <li><?php echo $key ."___". $value; ?></li>

    <?php
    }
    ?>
</ul>