<?php
include("sess.php");
if (empty($_SESSION['username'])) {
    header('location:login.php');
} else {

    $sql = " UPDATE `employee` SET `status`=1 WHERE `id`='" . $_GET['id'] . "'";
    $res = $conn->query($sql);
    $_SESSION['success'] = ' Employee account activated';
?>
<script>
window.location = "view_employee.php";
</script>
<?php } ?>