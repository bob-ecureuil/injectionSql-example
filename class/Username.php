<?php
class Username {

    public $username; 

    public function __construct(string $username)
    {
        $this->username= $username;
        
    }

    public function isok(string $username): void
    {
        if (strlen($username) > 4 ){

        }
    }

}


