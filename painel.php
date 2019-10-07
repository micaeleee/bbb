<?php
session_start();
include('verificarlogin.php');
?>
 
<h2>Olá, <?php echo $_SESSION['root'];?></h2>
<h2><a href="logout.php">Sair</a></h2>