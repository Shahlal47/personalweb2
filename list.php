<?php session_start() ?>

<?php
if(isset($_SESSION['name'])){
    $link = mysqli_connect("localhost", "root", "lict@2", "personalweb");
    $query = "SELECT * FROM users";
    $result = mysqli_query($link, $query);
    var_dump($result);
    exit;

}
else{
    header("location:index.php");
}
?>


<?php include_once('header1.php'); ?>

<section class="col-md-7">
    <section class="row">

<ul>
    <li><a href="registration.php">Add New User</a> </li>
</ul>
<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email</td>
<!--        <td>User Name</td>-->
<!--        <td>Password</td>-->
        <td>Created</td>
        <td>Modified</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['first_name']?></td>
            <td><?php echo $row['last_name']?></td>
            <td><?php echo $row['email']?></td>
<!--            <td>--><?php //echo $row['username']?><!--</td>-->
<!--            <td>--><?php //echo $row['password']?><!--</td>-->
            <td><?php echo $row['created']?></td>
            <td><?php echo $row['modified']?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |
                <a href="view.php?id=<?php echo $row['id']?>">View</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>

    </section>
</section>

<?php include_once('footer1.php'); ?>