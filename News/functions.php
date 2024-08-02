<?php

require "config.php";

function dbConnect(){
    $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

    if ($mysqli->connect_errno != 0){
        return false;
    }
    else{
        return $mysqli;
    }
}

function getnews($int){
    $mysqli = dbConnect();

    $result = $mysqli ->query("SELECT * FROM noticia ORDER BY rand() LIMIT $int");

    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    return $data;
}

