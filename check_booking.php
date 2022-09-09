<?php
    require_once 'libs/db.php';

    $date_of_flight = $_POST['date_of_flight'];
    $num_of_flight = $_POST['num_of_flight'];
    $pass1_surname = $_POST['pass1_surname'];
    $pass1_name = $_POST['pass1_name'];
    $pass2_surname = $_POST['pass2_surname'];
    $pass2_name = $_POST['pass2_name'];

    if (trim($date_of_flight) == "" || trim($num_of_flight) == "" || trim($pass1_surname) == "" || trim($pass1_name) == "") {
        echo "Вы должны ввести дату рейса, номер рейса, и хотя бы одного пассажира";
    } else {
        global $pdo;

        $sql = "INSERT INTO `registration of service` (`flight_datetime`, `num_of_race`, `pass1_second_name`, `pass1_first_name`, `pass2_second_name`, `pass2_first_name`) VALUES (:date_of_flight, :num_of_flight, :pass1_surname, :pass1_name, :pass2_surname, :pass2_name)";
        $query = $pdo->prepare($sql);
        $query->execute(['date_of_flight' => $date_of_flight, 'num_of_flight' => $num_of_flight, 'pass1_surname' => $pass1_surname, 'pass1_name' => $pass1_name, 'pass2_surname' => $pass2_surname, 'pass2_name' => $pass2_name]);

        header('Location: index.php');
        exit;
    }
    					