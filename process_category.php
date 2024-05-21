<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["category"])) {
        $category = $_POST["category"];

        // Redirect to the appropriate page based on the selected category
        if ($category === "farmer") {
            header("Location: farmer.html");
            exit();
        } elseif ($category === "consumer") {
            header("Location: consumer.html");
            exit();
        }
    }
}
?>