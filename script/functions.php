<?php

function redirect($href)
    {
        header('Location:' . $href);
        exit();
    }
    function mysql_connection()
    {
        $HOSTNAME = 'localhost';
        $USERNAME = 'root';
        $PASSWORD = '';
        $DATABASE = 'php_intermediaire_4';

        return new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
    }