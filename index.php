<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Food Blog</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Welcome to My Food Blog</h1>
        <p>Check out the latest recipes:</p>

        <?php
        include('conn.php');

        $query = "SELECT * FROM recipes ORDER BY id DESC";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $title = $row['title'];
            $description = $row['description'];
            $image = $row['image'];
        ?>

            <div class="recipe">
                <h2><?php echo $title; ?></h2>
                <p><?php echo $description; ?></p>
                <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
                <a href="template.php?id=<?php echo $id; ?>">Read More</a>
            </div>

        <?php
        }
        ?>

    </div>
</body>

</html>
