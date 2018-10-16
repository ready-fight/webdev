<?php
    class Account {

        private $errorArray;

        public function __construct() {
            $this->errorArray = [];
        }

        public function register($username, $firstName, $lastName,
        $email, $email2, $password, $password2) {
            // Validation
            $this->validateUsername($username);
            $this->validateFirstName($firstName);
            $this->validateLastName($lastName);
            $this->validateEmails($email, $email2);
            $this->validatePasswords($password, $password2);
        }

        private function validateUsername($un) {
            if(strlen($un) > 25 || strlen($un) < 5)  {
                array_push($this->errorArray, "Your username must be between 5 and 25 characters.");
                return;
            }

            //TODO: check if username exists.
        }
    
        private function validateFirstName($fn) {
            if(strlen($fn) > 25 || strlen($fn) < 2)  {
                array_push($this->errorArray, "Your first name must be between 5 and 25 characters.");
                return;
            }
        }
    
        private function validateLastName($ln) {
            if(strlen($ln) > 25 || strlen($ln) < 2)  {
                array_push($this->errorArray, "Your last name must be between 2 and 25 characters.");
                return;
            }
        }
    
        private function validateEmails($em, $em2) {
            if($em != $em2)  {
                array_push($this->errorArray, "Your emails don't match.");
                return;
            }

            if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
                array_push($this->errorArray, "Email is invalid.");
                return;
            }
        }

        //TODO: Check that email hasn't already been used.
    
        private function validatePasswords($pw, $pw2) {
            if($pw != $pw2)  {
                array_push($this->errorArray, "Your passwords don't match.");
                return;
            }

            if(preg_match('/[^A-Za-z0-9]/', $pw)) {
                array_push($this->errorArray, "Your password can only contain numbers and letters.");
                return;
            }

            if(strlen($pw) > 30 || strlen($pw) < 5) {
                array_push($this->errorArray, "Your password must be between 5 and 30 characters.");
                return;
            }
        }
    }
?>