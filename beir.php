<<?php

require './MySqlDB.php';
$mySql = new MySqlDB();
$todo = $_POST["todo"];
$datum = $_POST["datum"];
       
$mySql->ujRekord("teendok", "(todo,datum,allapot)", "('$todo','$datum',0)");
//print_r($_POST);
echo json_encode($_POST);
