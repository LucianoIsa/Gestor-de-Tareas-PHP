
<?php

    include ("db.php");

    if (isset($_POST['save_task'])){
        $title = $_POST['title'];
        $descripcion = $_POST['description'];
        $query = "INSERT INTO tarea(title,description) VALUES ('$title','$descripcion')";
        $result = mysqli_query($conn,$query);
        if (!$result) {
            die("Query Failed");
        }

        $_SESSION['message'] = 'Task Save Succesfully';  //mensaje cdo grabamos la tarea
        $_SESSION['message_type'] = 'success';   //Color (VERDE) del mensaje
        header("Location: index.php");
    }



?>
