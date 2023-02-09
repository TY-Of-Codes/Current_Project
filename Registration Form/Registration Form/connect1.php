<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "reg_test";

$conn = mysqli_connect($servername, $username, $password, $database_name);
//conection
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
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

    $sql_query = "INSERT INTO entry_details (surName, otherName, stateOrg, locGov, offCon, tiTle, occupaTion, posRan, birthDate, eMail, mobNum, areaSpec, nextName, nextAdd, nextRel, nextPhon, permAdd, sponsNam, sponsAdd, chalNum, nameReg, studAll)
    VALUES ('$surName', '$otherName', '$stateOrg', '$locGov', '$offCon', '$tiTle', '$occupaTion', '$posRan', '$birthDate', '$eMail', '$mobNum', '$areaSpec', '$nextName', '$nextAdd', '$nextRel', '$nextPhon', '$permAdd', '$sponsNam', '$sponsAdd', '$chalNum', '$nameReg', '$studAll')";

    if (mysqli_query($conn, $sql_query))
    {
        echo "Registration Successful !";
    }
    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>