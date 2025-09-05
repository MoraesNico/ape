<?php session_start();
if($_SESSION["Logado"]==false)
{
    header("Location: login.php?erro=Você precisa estar logado");
}
?>
<?php include "header.php"; ?>



<?php include "footer.php"; ?>