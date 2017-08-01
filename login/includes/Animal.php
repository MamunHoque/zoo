<?php

/**
 * Class Animal
 *
 * @package \\${NAMESPACE}
 */
class Animal
{
    public function getAllAnimals($limit=100)
    {
        try {

            $db = new DbConn;
            $tbl_animals = $db->tbl_animals;
            // prepare sql and bind parameters
            $stmt = $db->conn->prepare('SELECT * FROM '.$tbl_animals.' LIMIT '.$limit);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


            return $result;

        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

            return $err;

        }

    }



    public function delete($id)
    {
        try {

            $db = new DbConn;
            $tbl_animals = $db->tbl_animals;
            // prepare sql and bind parameters
            $stmt = $db->conn->prepare("DELETE FROM ".$tbl_animals." WHERE id = ?");
            $stmt->execute(array($id));
            $count = $stmt->rowCount();
            if($count>0){
                return true;
            }

        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

            return false;

        }

    }
}
