<?php
include 'conn.php';

// Check if the 'id' parameter is provided in the URL
if (isset($_GET['id'])) {
    $recipeId = $_GET['id'];

    // Fetch the recipe details from the database based on the provided 'id'
    $sql = "SELECT * FROM recipes WHERE id = $recipeId";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $title = $row['title'];
        $description = $row['description'];
        $image = $row['image'];
        $ingredients = $row['ingredients'];
        $process = $row['process'];
    } else {
        echo "Recipe not found.";
        exit();
    }
} else {
    echo "Invalid request.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header class="template-header">
            <h1><?php echo $title; ?></h1>
        </header>

        <div class="template-description">
            <p><?php echo $description; ?></p>
        </div>

        <div class="template-image">
            <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
        </div>

        <div class="template-ingredients">
            <h2>Ingredients:</h2>
            <ul>
                <?php
                $ingredientList = explode("\n", $ingredients);
                foreach ($ingredientList as $ingredient) {
                    echo "<li>$ingredient</li>";
                }
                ?>
            </ul>
        </div>

        <div class="template-process">
            <h2>Process:</h2>
            <ol>
                <?php
                $processList = explode("\n", $process);
                foreach ($processList as $step) {
                    echo "<li>$step</li>";
                }
                ?>
            </ol>
        </div>
    </div>
</body>

</html>

<?php
mysqli_close($conn);
?>
