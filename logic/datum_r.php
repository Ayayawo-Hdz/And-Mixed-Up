<?php
    require 'connect_db.php';
    insert($connect);
    function insert($connect) {
        if(isset($_POST['names'], $_POST['l_names'], $_POST['tel'] ,$_POST['email'], $_POST['user'], $_POST['passname'])) {
            $names = $_POST['names'];
            $l_names = $_POST['l_names'];
            $tel = $_POST['tel'];
            $email = $_POST['email'];
            $user = $_POST['user'];
            $sql =  "SELECT * FROM usuarios WHERE user = '$user'";
            $result = mysqli_query($connect, $sql);
            if(mysqli_num_rows($result) >= 1) {
                echo "<script type='text/javascript'>alert('¡Éste nombre de usuario ya está en existencia!'); window.location.href = '../index.php'</script>";
                exit();
            }
            $password = $_POST['passname'];
            if(isset($names, $l_names, $tel, $email, $user, $password)) {
                $queries = "INSERT INTO usuarios(names, l_names, tel, email, user, passname) VALUES ('$names', '$l_names', '$tel', '$email', '$user', '$password')";
                mysqli_query($connect, $queries);
                echo "<script type='text/javascript'>alert('¡Se ha creado su cuenta con éxito!'); window.location.href = '../index.php'</script>";
            }
        }
    }
?>