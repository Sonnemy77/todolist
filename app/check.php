<?php

if (isset($_POST['id'])) {
    require '../db_conn.php';

    $id = $_POST['id'];

    if (empty($id)) {
        echo 'error';
    } else {
        $todos = $db->prepare("SELECT id, checked FROM todos WHERE id=?");
        $todos->execute([$id]);

        $todo = $todos->fetch();
        $uId = $todo['id'];
        $checked = $todo['checked'];

        $uChecked = $checked ? 0 : 1;

        $res = $db->query("UPDATE todos SET checked=$uChecked WHERE id=$uId");

        if ($res) {
            echo $checked;
        } else {
            echo "error";
        }
        $db = null;
        exit();
    }
} else {
    header("Location: ../index.php?mess=error");
}
