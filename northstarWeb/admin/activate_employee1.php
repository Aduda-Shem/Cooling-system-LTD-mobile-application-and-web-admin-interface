<?php
include("sess.php");
if (empty($_SESSION['username'])) {
    header('location:login.php');
} else {

    $sql = " UPDATE `employee` SET `status`=2 WHERE `id`='" . $_GET['id'] . "'";
    $res = $conn->query($sql);
    $_SESSION['success'] = ' Employee account deactivated';
?>
<script>
window.location = "view_employee.php";
</script>
<?php } ?>