<?php

class Users extends Dbh {

    protected function getUser($name) {
        $sql = "SELECT * FROM users WHERE users_firstname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function setUser($firstName, $lastName, $dob) {
        $sql = "INSERT INTO users(users_firstname, users_lastname, users_dateofbirth) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName, $dob]);
    }    
}