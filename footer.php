<link rel="stylesheet" href="assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<?php
include('connect.php');

if (isset($_SESSION['success']) && $_SESSION['success']  != '') {
?>
    <script>
        Swal.fire(
             '<?php echo $_SESSION['successtitle']; ?>',
            '<?php echo $_SESSION['success']; ?>',
            '<?php echo $_SESSION['status_code']; ?>',
        )
    </script>
<?php
    unset($_SESSION['success']);
}
?>

