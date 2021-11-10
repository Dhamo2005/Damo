<?php
require('db.php');
require('controls/damo_filters.php');
session_start();
session_regenerate_id(true);
$token = damo_validate(base64_decode(base64_decode(mysqli_real_escape_string($GLOBALS['con'], $_GET['token']), true), true));
function file_download($file)
{
    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($file));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
    }else{
        $reg_pattern = "/(((http|https|ftp|ftps)\:\/\/)|(www\.))[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\:[0-9]+)?(\/\S*)?/" ;
        if (preg_match($reg_pattern, $file, $matches)) {
            header("location:".$file);
        } else {
            echo "File not found";
        }
    }
}
if ($result = $GLOBALS['con']->query("INSERT INTO `mydownloads` ( `uid`, `fileid`, `time`) VALUES ('{$_SESSION['myid']}', '{$token}', current_timestamp())")) {
    if ($result = $GLOBALS['con']->query("SELECT DISTINCT materials.link as link from materials where materials.id = $token LIMIT 1")) {
        file_download(mysqli_fetch_array($result)['link']);
    } else {
        echo 'Sorry Something Went Wrong!';
    }
} else {
    header('location:index.php');
}
?>