<?php
    $surName = $_POST['surName'];
    $otherName = $_POST['otherName'];
    $stateOrg = $_POST['stateOrg'];
    $locGov = $_POST['locGov'];
    $offCon = $_POST['offCon'];
    $tiTle = $_POST['tiTle'];
    $occupaTion = $_POST['occupaTion'];
    $posRan = $_POST['posRan'];
    $birthDate = $_POST['birthDate'];
    $eMail = $_POST['eMail'];
    $mobNum = $_POST['mobNum'];
    $areaSpec = $_POST['areaSpec'];
    $nextName = $_POST['nextName'];
    $nextAdd = $_POST['nextAdd'];
    $nextRel = $_POST['nextRel'];
    $nextPhon = $_POST['nextPhon'];
    $permAdd = $_POST['permAdd'];
    $sponsNam = $_POST['sponsNam'];
    $sponsAdd = $_POST['sponsAdd'];
    $chalNum = $_POST['chalNum'];
    $nameReg = $_POST['nameReg'];
    $studAll = $_POST['studAll'];

    //Database Connection
    $conn = new mysqli('localhost', 'root', '', 'reg_test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(surName, otherName, stateOrg, locGov, offCon, tiTle, occupaTion, posRan, birthDate, eMail,
        mobNum, areaSpec, nextName, nextAdd, nextRel, nextPhon, permAdd, sponsNam, sponsAdd, chalNum, nameReg, studAll)
        values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssisissssissssss",$surName, $otherName, $stateOrg, $locGov, $offCon, $tiTle, $occupaTion, $posRan, $birthDate, $eMail,
        $mobNum, $areaSpec, $nextName, $nextAdd, $nextRel, $nextPhon, $permAdd, $sponsNam, $sponsAdd, $chalNum, $nameReg, $studAll);
        $stmt->execute();
        echo "Registration Successful...";
        $stmt->close();
        $conn->close();
    }
?>