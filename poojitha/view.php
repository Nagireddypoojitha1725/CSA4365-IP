<?php include 'connect.php'; ?>
<a href="index.php">Home</a>
<table border="1px" cellpadding="10px" cellspacing="10px">
    <tr>
       
        <th>booktitle</th>
        <th>author</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php
    $query="SELECT * FROM details";
    $data=mysqli_query($con,$query);
    $result=mysqli_num_rows($data);
    if ($result) {
        while ($row = mysqli_fetch_array($data)) {
            ?>
            <tr>
                
                <td><?php echo $row['booktitle']; ?></td>
                <td><?php echo $row['author']; ?></td>
                <td><a href="update.php?id=<?php echo $row['id']; ?>">Edit</a> </td>
                <td><a onclick="return confirm('Are you sure, you want to  delete?')"a href="delete.php?id=<?php echo $row['id']; ?>">Delete</td>
            </tr>
            <?php
        }
    } else {
        ?>
        <tr>
            <td colspan="5">No Records Found</td>
        </tr>
        <?php
    }

    // Close the database connection
    mysqli_close($con);
    ?>
</table>n