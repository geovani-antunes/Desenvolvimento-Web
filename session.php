<?php
session_start();

class poo
{
    public static function session()
    {
        if (isset($_SESSION['username'])) {
            return true;
        } else {
            header("Location: index.php");
            exit;
        }
    }
}
