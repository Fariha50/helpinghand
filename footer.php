
<html>
<body>
<script src="js/sweetalert.js"></script>
<?php
    echo "hi";
    if(isset($_SESSION['status']) && $_SESSION['status'] !='')
    {
        ?>
        <script>
       swal({
                title: "<?php echo $_SESSION['status'];?>",
               // text: "You clicked the button!",
                icon: "<?php echo $_SESSION['status_code'];?>",
                button: "OK",
            });
       </script>
        <?php
        unset($_SESSION['status']);
              

    }
    ?>


</body>
</html>
