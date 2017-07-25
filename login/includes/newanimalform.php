<?php
class NewAnimalForm extends DbConn
{
    public function createAnimal($name, $description, $image)
    {
        try {

            $db = new DbConn;
            $tbl_animals = $db->tbl_animals;
            // prepare sql and bind parameters
            $stmt = $db->conn->prepare("INSERT INTO ".$tbl_animals." (name, description, image)
            VALUES (:name, :description, :image)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':image', $image);
            $stmt->execute();

            $err = '';

        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

        }
        //Determines returned value ('true' or error code)
        if ($err == '') {

            $success = 'true';

        } else {

            $success = $err;

        };

        return $success;

    }
}
