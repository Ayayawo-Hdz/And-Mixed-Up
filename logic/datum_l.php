<?php
    require 'connect_db.php';
    insert($connect);
    function insert($connect) {
        if(isset($_POST['user'], $_POST['passname'])) {
            session_start();
            $user = $_POST['user'];
            $passname = $_POST['passname'];
            $sql = "SELECT * FROM usuarios WHERE user = '$user' AND passname = '$passname'";
            $result = mysqli_query($connect, $sql);
            if(mysqli_num_rows($result) == 1) {
                $_SESSION['user'] = $user;
                echo "<script type='text/javascript'>window.location.href = '../catalogue.php'</script>";
            } else {
                echo "<script type='text/javascript'>alert('¡El usuario o contraseña son incorrectos o inexistentes!'); window.location.href = '../index.php'</script>";
            }
        }
    }
?>