<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST['title'];
  $author = $_POST['author'];
  $year = $_POST['year'];
  $conn->query("INSERT INTO students (name, email) VALUES ('$title', '$author', '$year')"); // Assuming your table has these columns
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Add New Book</title>
<style>
  body {
    font-family: sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
  }

  form {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    width: 80%;
    max-width: 500px;
    animation: fadeIn 0.5s ease-out;
  }

  h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
  }

  label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
    color: #555;
  }

  input[type="text"],
  input[type="varchar"] {
    width: calc(100% - 22px);
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 1em;
  }

  input[type="submit"] {
    background-color: #007bff;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s ease, transform 0.2s ease;
  }

  input[type="submit"]:hover {
    background-color: #0056b3;
    transform: scale(1.02);
  }

  .error {
    color: red;
    margin-top: 5px;
    font-size: 0.9em;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }
</style>
</head>
<body>
  <form method="post">
    <h2>Add New Book</h2>
    <label for="title">Title:</label>
    <input type="text" name="title" required><br>

    <label for="author">Author Name:</label>
    <input type="text" name="author" required><br>

    <label for="year">Year:</label>
    <input type="varchar" name="year"><br>

    <input type="submit" value="Add Book">
  </form>
</body>
</html>