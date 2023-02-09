<?php
$messageArr = [
  1 => "Thành công",
    2 => ".."
];
function redirect($path){
    header("Location: ".$path);
    exit;
}
function get_message($code){
    global $messageArr;
    if (array_key_exists($code, $messageArr)){
        return $messageArr[$code];
    }
    return false;
}
