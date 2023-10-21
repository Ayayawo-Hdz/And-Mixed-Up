<?php include 'page_layout/head.php' ?>
<title>Carrito | & Mixed Up</title>
<link rel="icon" type="image/x-icon" href="img/icono.png">
<link rel="stylesheet" href="main_style.css">
<link rel="stylesheet" href="c_style.css">
<style>
    .button {
        font-size: 1.7rem;
        background-color: darkmagenta;
        color: white;
        padding: 0.4rem;
        border-style: none;
        border-radius: 5px;
        font-weight: 500;
    }
    .regist {
        margin: 0.5rem 0 0.5rem;
        width: 90%;
        padding-bottom: 0.2rem;
        border-top: none;
        border-left: none;
        border-right: none;
        border-bottom: solid 1px darkmagenta;
        outline: none;
        transition: 0.4s;
    }
    input[type="text"].regist:hover {
        border-bottom: solid 2px white;
    }
</style>
<body>
    <?php 
        include 'page_layout/header_main.php';
        include 'page_layout/navbar.php';
    ?>
    <div class="container-fluid mt-3" style="background-color: white;">
        <p style="font-size: 1.3rem;">
            <a href="catalogue.php" style="text-decoration: none; color: dimgray;">Inicio</a> / <span style="color: darkmagenta;">Carrito</span>
        </p>
        <p style="font-size: 3rem; font-weight: 200;">Carrito de compras</p>
    </div>
    <?php
        $total = 0;
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $index => $array) {
                $image = $array['Imagen'];
                ?>
            <div class="row d-flex justify-content-center align-items-center mx-3 my-3" style="font-size: 1.3rem; box-shadow: 0 -1px 5px rgba(0,0,0,0.2);">
                <div class="col text-center p-5">
                    <?php echo $index; ?>
                    <br><img style="height: 15rem; width: 15rem; object-fit: contain;" src="img/products/<?php echo $image; ?>">
                </div>
                <?php
                    $total +=  $array['Cantidad'] * $array['Precio'];
                    foreach ($array as $key => $value) {
                        if ($key != 'Imagen' && $key != 'ID' && $key != 'Stock') {
                ?>
                <div class="col text-center">
                    <?php echo $key . ': ' . $value; ?>
                </div>
                <?php
                        } else { break; }
                    }
                ?>
                <div class="col text-center">
                    <?php 
                    if (str_contains($index, '&')) {
                        $amper = array('&');
                        $hex = array('%26');
                        $index = str_replace($amper, $hex, $index);
                    } 
                    echo '<a href="cart.php?item=' . $index . '" style="text-decoration: none; color: darkmagenta;">Eliminar item</a><br>'; ?>
                </div>
            </div>
        <?php
            }
        if ($total == 0) {
            unset($_SESSION['cart']);
            echo "<script>window.location.href = 'cart.php'</script>";
        }
        ?>
        <div class="mx-4 d-flex" style="font-size: 1.5rem; float: right">
            <a href="cart.php?vaciar=true" style="text-decoration: none; color: darkmagenta;">Vaciar carrito</a>
        </div>
        <div class="container-fluid mt-4" style="background-color: white;">
            <p style="font-size: 2.5rem; font-weight: 200;">Detalles del pedido y envío</p>
        </div>
        <div class="container-fluid row mx-0 my-3">
            <div class="col-12 col-sm-6" style="font-size: 1.3rem; display: flex; align-items: center;">
                <form action="logic/orders.php" method="POST">
                    <div class="row">
                        <div class="col-12 col-xl-6 my-1">
                            <label for="names"><span style="color: darkmagenta;;">*</span> Nombres:</label>
                            <input class="regist" style="text-align: center;" type="text" name="names" required>
                        </div>
                        <div class="col-12 col-xl-6 my-1">
                            <label for="l_names"><span style="color: darkmagenta;;">*</span> Apellidos:</label>
                            <input class="regist" style="text-align: center;" type="text" name="l_names" required>
                        </div>
                        <div class="col-12 col-xl-6 my-1">
                            <label for="address"><span style="color: darkmagenta;;">*</span> Dirección / num. ext e int:</label>
                            <input class="regist" style="text-align: center;" type="text" name="address" required>
                        </div>
                        <div class="col-12 col-xl-6 my-1">
                            <label for="zip"><span style="color: darkmagenta;;">*</span> Código Postal:</label>
                            <input class="regist" style="text-align: center;" type="text" name="zip" required>
                        </div>
                        <div class="col-12 col-xl-6 my-1">
                            <label for="city"><span style="color: darkmagenta;;">*</span> Ciudad:</label>
                            <input class="regist" style="text-align: center;" type="text" name="city" required>
                        </div>
                        <div class="col-12 col-xl-6 my-1">
                            <label for="state"><span style="color: darkmagenta;;">*</span> Estado:</label>
                            <input class="regist" style="text-align: center;" type="text" name="state" required>
                        </div>
                        <div class="col-12 col-xl-6 my-1">
                            <label for="country"><span style="color: darkmagenta;;">*</span> País:</label>
                            <input class="regist" style="text-align: center;" type="text" name="country" required>
                        </div>
                    </div>                    
            </div>
            <div class="col-12 col-sm-6" style="font-size: 1.2rem; text-align: right;">
                <?php
                foreach ($_SESSION['cart'] as $index => $array) {
                    echo '<br><span style= "font-weight: 600">'. $index . '</span><br>';
                    foreach ($array as $key => $value) {
                        if ($key != 'Imagen' && $key != 'ID' && $key != 'Stock') {
                            echo ''. $key . ': <span style= "font-weight: 600">' . $value . '</span><br>';
                        } else { 
                            break; 
                        }
                    }
                }
                ?>
                    <br>
                    <p style="font-weight: 600; font-size: 2rem;">TOTAL: $<?php echo $total ?></p>
                    <input class="button" type="submit" value="Completar pedido">
                </form>
            </div>
        </div>
        <?php
        } else {
        ?> 
            <div class="my-4"> 
                <p class="text-center" style="opacity: 0.5; font-size: 2.7rem; font-weight: 400;">¡El carrito está vacío!</p> 
                <img src="img/empty-cart.png" alt="carrito" class="d-block mx-auto" style="opacity: 0.5; height: 25rem; width: 25rem;"> 
            </div> 
        <?php
        }
        if (isset($_REQUEST['vaciar'])) {
            unset($_SESSION['cart']);
            echo "<script>window.location.href = 'cart.php'</script>";
        }
        if (isset($_REQUEST['item'])) {
            $producto = $_REQUEST['item'];
            unset($_SESSION['cart'][$producto]);
            echo "<script>window.location.href = 'cart.php'</script>";
        }
        include 'page_layout/footer_main.php'; 
    ?>
</body>