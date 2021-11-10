<?php require('../db.php');
function validator($val)
{
    return trim(htmlspecialchars(mysqli_real_escape_string($GLOBALS['con'], $val)));
}
$name = validator($_POST['name']);
$email = validator($_POST['email']);
$phone_number = validator($_POST['phone_number']);
$class = validator($_POST['classs']);
$medium = validator($_POST['medium']);
$about = validator($_POST['about']);
$place = validator($_POST['place']);
$type = validator($_POST['type']);
$gender = validator($_POST['gender']);
$password = validator($_POST['password']);
$confirm_password = validator($_POST['confirm_password']);

$email_pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
$number = preg_match('@[0-9]@', $password);
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$specialChars = preg_match('@[^\w]@', $password);
$err = "Something Went Wrong!";
if (empty($name && $email && $phone_number && $class && $medium && $about && $place && $type && $password && $confirm_password)) {
    echo $err;
} elseif ($password !== $confirm_password) {
    echo $err;
} elseif (!preg_match($email_pattern, $email) === 1) {
    echo $err;
} elseif (strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
    echo $err;
} elseif ($class !== '10' && $class !== '11' && $class !== '12' && $class !== '9') {
    echo $err;
} elseif ($medium != 'tm' && $medium != 'em') {
    echo $err;
} elseif ($type !== "student" && $type !== "teacher") {
    echo $err;
} elseif ($gender !== "m" && $gender !== "f") {
    echo $err;
} else {
    
    $statement = DB::con()->prepare("SELECT email FROM users WHERE email=:email");
    $statement->execute(['email' => $email]);

    if ($statement->rowCount() < 0) {
        $password_hash = md5($password);
    $statement = DB::con()->prepare("INSERT INTO `users` (`name`, `phone_number`, `class`, `medium`, `email`, `password`, `about`, `Joined`, `place`, `type`,`gender`) VALUES (:name, :phone_number, :class, :medium, :email,:password,:about,:Joined,:place,:type,:gender)");
    try {
        $statement->execute(['name' => $name, 'phone_number' => $phone_number, 'class' => $class, 'medium' => $medium, 'email' => $email, 'password' => $password_hash, 'about' => $about, 'Joined' => 'now()', 'place' => $place, 'type' => $type, 'gender' => $gender]);
        echo 1;
    } catch (exception $err) {
        echo $err;
    }
    } else {
        echo $statement->rowCount();
    }
    
    
}