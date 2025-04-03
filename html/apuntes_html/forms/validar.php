<?php
if (isset($_POST['index']) && strtolower($_POST['pokemon']== 'pikachu')) {
    session_start();

    $_SESSION['pantalla1'] = 'check';
    header('Location: ../forms/pantalla1.php');
} else if (isset($_POST['index'])) {
    header('Location: ./index.html');
}
// $pokemon = $_POST['pokemon'];
?>

