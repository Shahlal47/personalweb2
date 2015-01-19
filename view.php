<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "", "personalweb");
$query = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($link, $query);
?>


<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>User Name</td>
        <td>Password</td>
        <td>Created</td>
        <td>Modified</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['username']?></td>
            <td><?php echo $row['password']?></td>
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