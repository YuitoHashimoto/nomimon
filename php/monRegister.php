<?php
    require_once("dbConnect.php");
    session_start();

    if(ISSET($_POST)){
        // データセット
        $newPass = $_POST["password"];
        $id = $_SESSION["id"];

        $query = $db->query("UPDATE userData SET familyPass='{$newPass}' WHERE id='{$id}';");
    }

    header("Location: ../regiComp.php")
?>