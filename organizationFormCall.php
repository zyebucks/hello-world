<?php

require 'class/DBConnect.php';

//For country combobox
function getCountry() {
    $db = new DbConnect;
    $conn = $db->connect();

    $stmt = $conn->prepare("SELECT id, countryName FROM country");
    $stmt->execute();
    $countries = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $countries;

}

