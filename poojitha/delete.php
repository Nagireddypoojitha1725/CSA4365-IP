<?php include 'connect.php'; 
$id=$_GET['id'];
$delete="DELETE FROM details WHERE id='$id'";
$data=mysqli_query($con,$delete);
if ($data)
{
    ?>
    <script type="text/javascript">
        alert("data deleted successfully");
        window.open("http://localhost:80/library/view.php","_self");
        </Script>
        <?php
}
else
{
    ?>
    <script type="text/javascript">
        alert("Please try again");
</script>
<?php
}
?>