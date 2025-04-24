<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Student List</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Book List</h1>
  <a href="add.php">+ Add New</a>
  <table>
    <tr>
      <th> TITLE</TITLE></th><th> Author Name</th><th>Year</th><th>Actions</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM students");
    while($row = $result->fetch_assoc()):
    ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= $row['name'] ?></td>
      <td><?= $row['email'] ?></td>
      <td>
        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
        <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
      </td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
