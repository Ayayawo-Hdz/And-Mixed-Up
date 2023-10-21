<?php
    session_start();
    if (isset($_REQUEST['btnAdd'])) {
        $producto = $_REQUEST['txtProduct'];
        $cantidad = $_REQUEST['cant'];
        $precio = $_REQUEST['txtPrice'];
        $stock = $_REQUEST['stock'];
        $imagen = $_REQUEST['image'];
        $id = $_REQUEST['id'];
        $total_c = 0;
        if (isset($_SESSION["cart"])) {
            foreach($_SESSION["cart"] as $index => $array){
                if($producto == $index){
                    $total_c = intval($array["Cantidad"]);
                }
            }
        }
        $_SESSION['cart'][$producto]['Cantidad'] = $total_c + $cantidad;
        $_SESSION['cart'][$producto]['Precio'] = $precio;
        $_SESSION['cart'][$producto]['Stock'] = $stock;
        $_SESSION['cart'][$producto]['ID'] = $id;
        $_SESSION['cart'][$producto]['Imagen'] = $imagen;
        
        echo "<script>window.location.href = '../cart.php'</script>";
    }
?>