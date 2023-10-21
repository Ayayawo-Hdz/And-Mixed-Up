<?php
    require 'connect_db.php';
    session_start();
    insert($connect);
    function insert($connect) {
        if(isset($_POST['names'], $_POST['l_names'], $_POST['address'], $_POST['zip'], $_POST['city'] ,$_POST['state'], $_POST['country'])) {
            $names = $_POST['names'];
            $l_names = $_POST['l_names'];
            $address = $_POST['address'];
            $zip = $_POST['zip'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $country = $_POST['country'];
            foreach ($_SESSION['cart'] as $index => $array) {
                $name = array($index);
                $article = $name[0];
                $order_id = rand(1000, 999999);
                $queries = "INSERT INTO pedidos(order_id, id_art, name_art, quantity, direction, zip, city, o_state, country, names, l_names) VALUES 
                ('$order_id', '', '$name[0]', '', '$address', '$zip', '$city', '$state', '$country', '$names', '$l_names')";
                mysqli_query($connect, $queries);
                foreach ($array as $key => $value) {
                    if ($key != 'Imagen') {
                        if ($key != 'Precio') {
                            $items = array($value);
                            if ($key == 'Cantidad') {
                                global $cant;
                                $cant = $items[0];
                                $sql = "UPDATE pedidos SET quantity = $items[0] WHERE order_id = $order_id";
                                $connect -> query($sql);
                            } else if ($key == 'Stock') {
                                $items[0] -= $cant;
                                global $total;
                                $total = $items[0];
                                $sql = "UPDATE articulos SET stock = $total WHERE names = '$article'";
                                $connect -> query($sql);
                            } else if ($key == 'ID') {
                                $sql = "UPDATE pedidos SET id_art = $items[0] WHERE order_id = $order_id";
                                $connect -> query($sql);
                            } 
                        }
                    } else { 
                        break; 
                    }
                }
            }
            echo "<script>alert('¡Su pedido fué procesado con éxito!'); window.location.href = '../cart.php?vaciar=true'</script>";
        }
    }
?>