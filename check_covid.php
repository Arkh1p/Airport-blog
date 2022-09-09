<?php
    require_once 'libs/db.php';

    $phone_num = $_POST['phone_num'];
    $email = $_POST['email'];
    $fio = $_POST['fio'];
    $fio_eng = $_POST['fio_eng'];
    $gender = $_POST['gender'];
    $birth = $_POST['birth'];
    $address = $_POST['address'];
    $place_of_work = $_POST['place_of_work'];
    $test_type = $_POST['test_type'];

    if (trim($phone_num) == "" || trim($email) == "" || trim($fio) == "" || trim($fio_eng) == "" || trim($gender) == "" || trim($birth) == "" || trim($address) == "" || trim($place_of_work) == "" || trim($test_type) == "") {
        echo "Вы ввели не все данные";
    } else {

        global $pdo;

        $sql = "INSERT INTO `test-covid` (`phone`, `email`, `FIO`, `FIO_eng`, `gender`, `date_of_birth`, `residential_address`, `place_of_work_or_study`, `type_of_testing`) VALUES (:phone_num, :email, :fio, :fio_eng, :gender, :birth, :address, :place_of_work, :test_type)";
        $query = $pdo->prepare($sql);
        $query->execute(['phone_num' => $phone_num, 'email' => $email, 'fio' => $fio, 'fio_eng' => $fio_eng, 'gender' => $gender, 'birth' => $birth, 'address' => $address, 'place_of_work' => $place_of_work, 'test_type' => $test_type]);

        header('Location: index.php');
        exit;
    }