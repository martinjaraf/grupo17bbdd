<?php
session_start();
session_destroy();
header('Location: /~grupo17/index.php', true);
exit();
?>