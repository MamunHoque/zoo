<?php

/**
 * Class Ticket
 *
 * @package \\${NAMESPACE}
 */
class Ticket
{
    public function createTicket($ticket_name,$description, $adult_price, $kids_price, $image)
    {
        try {

            $db = new DbConn;
            $tbl_tickets = $db->tbl_tickets;
            // prepare sql and bind parameters
            $stmt = $db->conn->prepare("INSERT INTO ".$tbl_tickets." (ticket_name,description, adult_price, kids_price, image)
            VALUES (:ticket_name, :description, :adult_price, :kids_price, :image)");
            $stmt->bindParam(':ticket_name', $ticket_name);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':adult_price', $adult_price);
            $stmt->bindParam(':kids_price', $kids_price);
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


    public function getAllTickets($limit=100)
    {
        try {

            $db = new DbConn;
            $tbl_tickets = $db->tbl_tickets;
            // prepare sql and bind parameters
            $stmt = $db->conn->prepare('SELECT * FROM '.$tbl_tickets.' LIMIT '.$limit);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;

        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

            return $err;

        }

    }

}
