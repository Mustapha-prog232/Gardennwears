<?php
session_start();
session_destroy();
header('Location: /gardennwears/pages/login.php');
exit();