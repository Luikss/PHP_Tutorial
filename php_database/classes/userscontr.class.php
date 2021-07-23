<?php

class UsersContr extends Users {

    public function createUser($firstName, $lastName, $dob) {
        $this->setUser($firstName, $lastName, $dob);
    }    
}