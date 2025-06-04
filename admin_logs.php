<?php
session_start();
$conn = new mysqli("localhost", "root", "", "review_system");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Admin check
$isAdmin = isset($_SESSION['username']) && $_SESSION['username'] === 'admin';

// Form handlers
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add_card']) && $isAdmin) {
        $title = $_POST['title'];
        $image = $_POST['image'];
        $desc = $_POST['description'];
        $conn->query("INSERT INTO cards (title, image_url, description) VALUES ('$title', '$image', '$desc')");
        $conn->query("INSERT INTO admin_logs (admin_username, action) VALUES ('admin', 'Added card: $title')");
    }

    if (isset($_POST['delete_review']) && $isAdmin) {
        $rid = $_POST['review_id'];
        $conn->query("DELETE FROM reviews WHERE id=$rid");
        $conn->query("INSERT INTO admin_logs (admin_username, action) VALUES ('admin', 'Deleted review ID: $rid')");
    }

    if (isset($_POST['edit_review']) && $isAdmin) {
        $rid = $_POST['review_id'];
        $review = $_POST['edited_review'];
        $conn->query("UPDATE reviews SET review='$review' WHERE id=$rid");
        $conn->query("INSERT INTO admin_logs (admin_username, action) VALUES ('admin', 'Edited review ID: $rid')");
    }

    if (isset($_POST['update_card']) && $isAdmin) {
        $cid = $_POST['card_id'];
        $title = $_POST['title'];
        $desc = $_POST['description'];
        $conn->query("UPDATE cards SET title='$title', description='$desc' WHERE id=$cid");
        $conn->query("INSERT INTO admin_logs (admin_username, action) VALUES ('admin', 'Updated card ID: $cid')");
    }

    if (isset($_POST['submit_review'])) {
        $username = $_POST["username"];
        $rating = $_POST["rating"];
        $review = $_POST["review"];

        // Basic moderation
        $bad_words = ['badword1', 'badword2'];
        foreach ($bad_words as $word) {
            if (stripos($review, $word) !== false) {
                die("Inappropriate content detected.");
            }
        }

        $stmt = $conn->prepare("INSERT INTO reviews (username, rating, review) VALUES (?, ?, ?)");
        $stmt->bind_param("sis", $username, $rating, $review);
        $stmt->execute();
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Heritage of Andhra Pradesh</title>
  <style>
    body { font-family: Arial; margin: 20px; }
    .card, .review { border: 1px solid #ccc; padding: 15px; margin: 10px 0; border-radius: 10px; }
    .admin-panel { background: #f0f0f0; padding: 10px; border-radius: 10px; margin-top: 20px; }
    .hidden { display: none; }
  </style>
</head>
<body>

<h1>Welcome to Andhra Pradesh Heritage</h1>

<!-- 🧾 Card Display -->
<h2>Culture Cards</h2>
<?php
$cards = $conn->query("SELECT * FROM cards");
while ($card = $cards->fetch_assoc()) {
  echo "<div class='card'>
          <h3>{$card['title']}</h3>
          <img src='{$card['image_url']}' alt='img' width='200'><br>
          <p>{$card['description']}</p>";

  if ($isAdmin) {
    echo "<form method='POST'>
            <input type='hidden' name='card_id' value='{$card['id']}'>
            <input type='text' name='title' value='{$card['title']}' required>
            <textarea name='description'>{$card['description']}</textarea>
            <button type='submit' name='update_card'>Update Card</button>
          </form>";
  }

  echo "</div>";
}
?>

<!-- 📝 Review Section -->
<h2>Submit a Review</h2>
<form method="POST">
  <input type="text" name="username" placeholder="Your Name" required>
  <input type="number" name="rating" min="1" max="5" required>
  <textarea name="review" placeholder="Your Review" required></textarea>
  <button type="submit" name="submit_review">Submit</button>
</form>

<h2>All Reviews</h2>
<?php
$reviews = $conn->query("SELECT * FROM reviews ORDER BY created_at DESC");
while ($row = $reviews->fetch_assoc()) {
  echo "<div class='review'>
          <strong>{$row['username']}</strong> rated {$row['rating']}⭐<br>
          <p>{$row['review']}</p>
          <small>{$row['created_at']}</small>";

  if ($isAdmin) {
    echo "<div class='admin-panel'>
            <form method='POST' style='display:inline-block;'>
              <input type='hidden' name='review_id' value='{$row['id']}'>
              <button type='submit' name='delete_review'>Delete</button>
            </form>
            <form method='POST'>
              <input type='hidden' name='review_id' value='{$row['id']}'>
              <textarea name='edited_review'>{$row['review']}</textarea>
              <button type='submit' name='edit_review'>Edit</button>
            </form>
          </div>";
  }

  echo "</div>";
}
?>

<!-- 🛠️ Admin - Add New Card -->
<?php if ($isAdmin): ?>
<div class="admin-panel">
  <h3>Add New Card</h3>
  <form method="POST">
    <input type="text" name="title" placeholder="Title" required><br>
    <input type="text" name="image" placeholder="Image URL" required><br>
    <textarea name="description" placeholder="Description" required></textarea><br>
    <button type="submit" name="add_card">Add Card</button>
  </form>
</div>

<!-- 📜 Admin Logs -->
<div class="admin-panel">
  <h3>Admin Action Logs</h3>
  <?php
    $logs = $conn->query("SELECT * FROM admin_logs ORDER BY timestamp DESC");
    while ($log = $logs->fetch_assoc()) {
      echo "<p><b>{$log['admin_username']}</b>: {$log['action']} <small>({$log['timestamp']})</small></p>";
    }
  ?>
</div>
<?php endif; ?>

</body>
</html>
