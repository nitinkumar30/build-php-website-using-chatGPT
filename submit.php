<?php
include 'conn.php';

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $ingredients = $_POST['ingredients'];
    $process = $_POST['process'];

    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $target_path = "images/" . $image;
    move_uploaded_file($image_tmp, $target_path);

    $sql = "INSERT INTO recipes (title, description, image, ingredients, process) VALUES ('$title', '$description', '$target_path', '$ingredients', '$process')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Recipe added successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Redirect to index.php after a 2-second delay
sleep(2);
header("Location: index.php");
exit;

mysqli_close($conn);
?>
