<?php
try {
    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASS = "root";
    const DB_DATABASE = "academy";
} catch (Exception $e) {
    echo $e->getMessage();
}