<?php
    include 'db/dbconnection.php';
    class productsQuery extends DatabaseConnector{

        public function createProduct($nome, $descricao, $image, $link, $claimed = 0, $firstname = null, $lastname = null) {
            $query = "INSERT INTO produtos (nome, descricao, image, link, claimed, firstname, lastname) VALUES ('$nome', '$descricao', '$image', '$link', $claimed, '$firstname', '$lastname')";
            $result = $this->executeQuery($query);
            return $result;
        }

        public function readProduct($id) {
            $query = "SELECT * FROM produtos WHERE id = $id";
            $result = $this->executeQuery($query);
            $fetched = $result->fetchAll();
            return $fetched[0];
        }

        public function updateProduct($id, $nome, $descricao, $image, $link) {
            $query = "UPDATE produtos SET nome = '$nome', descricao = '$descricao', image = '$image', link = '$link' WHERE id = $id";
            $result = $this->executeQuery($query);
            return $result;
        }

        public function deleteProduct($id) {
            $query = "DELETE FROM produtos WHERE id = $id";
            $result = $this->executeQuery($query);
            return $result;
        }

        public function claimProduct($id, $firstname, $lastname) {
            
            $verification = " SELECT claimed FROM produtos WHERE id = $id";
            if ($verification == 1 || $firstname == null || $lastname == null || $id == null || $firstname == "" || $lastname == "") {
                return false;
            }
            $query = "UPDATE produtos SET claimed = 1, firstname = '$firstname', lastname = '$lastname' WHERE id = $id";
            $result = $this->executeQuery($query);
            return $result;
        }

        public function listProducts() {
            $query = "SELECT * FROM produtos";
            $result = $this->executeQuery($query);
            $finished = $result->fetchAll();
            return $finished;
        }

        public function listClaimedProducts() {
            $query = "SELECT * FROM produtos where claimed = 1";
            $result = $this->executeQuery($query);
            return $result;
        } 
        public function listNotClaimedProducts() {
            $query = "SELECT * FROM produtos where claimed = 0";
            $result = $this->executeQuery($query);
            return $result;
        } 

    }

?>