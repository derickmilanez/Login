<?php
session_start();
unset($_SESSION["nome"]);
session_destroy();

echo "<script>window.location = 'index.php'</script>";;
?>