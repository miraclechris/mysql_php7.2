<?php

    $dbname = "napierdev';
    $conn = 
    $user = 'dbuser';
    $pass = 'dbpass';

    $userTable = <<<_DB
    CREATE TABLE IF NOT EXISTS user(
        id int(11) NOT NULL auto_increment,
        email varchar(100) NOT NULL,
        password varchar(255) NOT NULL,
        PRIMARY KEY (id),
        UNIQUE KEY email (email)
    );