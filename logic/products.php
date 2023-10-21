<?php
    require 'connect_db.php';
    class Productos {
        private $host;
        private $db;
        private $user;
        private $password;
        private $charset;
        public function __construct(){
            $this->host     = HOST;
            $this->db       = DB;
            $this->user     = USER;
            $this->password = PASSWORD;
            $this->charset  = 'utf8mb4';
        }
        function connect(){
            try{
                $connection = "mysql:host=".$this->host.";dbname=" . $this->db . ";charset=" . $this->charset;
                $options = [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ];
                $pdo = new PDO($connection,$this->user,$this->password);
                return $pdo;
            }catch(PDOException $e){
                print_r('Error connection: ' . $e->getMessage());
            }   
        }
        public function get($id) {
            $query = $this->connect()->prepare('SELECT * FROM articulos WHERE id = id: LIMIT 0,12');
            $query -> execute(['id' => $id]);
            $row = $query->fetch();
            return [
                'id' => $row['id'],
                'name' => $row['names'],
                'price' => $row['price'],
                'stock' => $row['stock'],
                'category' => $row['category'],
                'image' => $row['image'],
            ];
        }
        public function getItemsByCategory($category){
            $query = $this->connect()->prepare('SELECT * FROM articulos WHERE category = :cat LIMIT 0,12');
            $query->execute(['cat' => $category]);
            $items = [];
            while($row = $query->fetch(PDO::FETCH_ASSOC)){
                $item = [
                    'id' => $row['id'],
                    'name' => $row['names'],
                    'price' => $row['price'],
                    'stock' => $row['stock'],
                    'category' => $row['category'],
                    'image' => $row['image'],
                ];
                array_push($items, $item);
            }
            return $items;
        }
    }
?>