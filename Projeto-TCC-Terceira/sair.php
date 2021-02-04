<?php
// Inicia sessões, para assim poder destruí-las
session_start();
session_destroy();
echo "<script>location.href='login/login.php'</script>";

?>