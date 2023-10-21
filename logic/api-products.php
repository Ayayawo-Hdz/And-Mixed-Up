<?php
    require 'products.php';
    if (isset($_GET['category'])){
        $categoria = $_GET['category'];
        if ($categoria == '') {
            echo json_encode(['statuscode ' => 400, 'response' => 'No existe ésta categoria']);
        } else {
            $productos = new Productos();
            $items = $productos->getItemsByCategory($categoria);
            echo json_encode(['statuscode ' => 200, 'items' => $items]);
        }
    } else if (isset($_GET['get-item'])){
        $id = $_GET['get-item'];
        if ($id == ''){
            echo json_encode(['statuscode ' => 400, 'response' => 'No hay valor para id']);
        } else{
            $productos = new Productos();
            $item = $productos->get($id);
            echo json_encode(['statuscode' => 200, 'item' => $item]);
        }
    } else{
        echo json_encode(['statuscode ' => 400, 'response' => 'No hay acción']);
    }
?>