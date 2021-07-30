<?php

function empty_input_su($name , $email , $phone , $password){
$result = 0;
if(empty($name) || empty($email) || empty($phone) || empty($password)){
    $result = true;
}else{
    $result = false;
}
return $result;
}

function existing_email($connect , $email){
    $sql = "SELECT * FROM `student` WHERE email = ?;";
    $stmt = mysqli_stmt_init($connect);
    if (!mysqli_stmt_prepare($stmt , $sql)) {
        header("location: /xampp/htdocs/ultras/index.php");
        exit();
    }
    mysqli_stmt_bind_param( $stmt , "s" , $email);
mysqli_stmt_execute($stmt);

$resultdata = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($resultdata)) {
  return $row;
}
else {
    $result = false;
    return $result;
}
mysqli_stmt_close($stmt);
}

function empty_input_si($email , $password){
    $result = 0;
    if(empty($email) || empty($password)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

?>