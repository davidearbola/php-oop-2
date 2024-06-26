<?php
session_start();
session_unset();
session_destroy();
header("Location: index.php"); // Reindirizza alla pagina principale dopo aver distrutto la sessione
exit();
