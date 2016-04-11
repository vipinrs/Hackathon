<html>
<?php
session_start();
require 'first.html';
header('Location: first.html');
unset($SESSION['is_logged_in']);
unset($SESSION['user_email']);
 ?>
</html>