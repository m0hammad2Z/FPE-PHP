<?php
$characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
$randomPassword = '';
for ($i = 0; $i < 8; $i++) {
    $randomPassword .= $characters[rand(0, strlen($characters) - 1)];
}
echo $randomPassword;
?>
