<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $desc = $_POST['description'];

    $conn = new mysqli("localhost", "root", "", "test");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Ensure the column name matches your DB structure
    $stmt = $conn->prepare("INSERT INTO cards (title, description) VALUES (?, ?)");

    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("ss", $title, $desc);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    header("Location: Andp.php");
    exit();
}
?>

<h2>Create a New Card</h2>
<form method="post" enctype="multipart/form-data">
    <label>Title:</label><br>
    <input type="text" name="title" required><br><br>
    
    <label>Description:</label><br>
    <textarea name="description" rows="5" cols="50" required></textarea><br><br>

    <label>Upload Image:</label><br>
    <input type="file" name="image" accept="image/*"><br><br>

    <input type="submit" value="Create Card">
</form>
