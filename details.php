<?php

  include('config/db_connect.php');

  if (isset($_POST['delete'])) {
    $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

    $sql = "DELETE FROM pizzas WHERE id = $id_to_delete";

    if (mysqli_query($conn, $sql)) {
      header('Location: index.php');
    } else {
      echo 'Query error ' . mysqli_error($conn);
    }
  }

  // Check GET request Id Param
  if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Make SQL
    $sql = "SELECT * FROM pizzas WHERE id = $id";

    // Get the query result
    $result = mysqli_query($conn, $sql);

    // Fetch the associative array
    $pizza = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);

  }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include('templates/header.php'); ?>

  <div class="container center grey-text text-darken-2">
    <?php if($pizza): ?>
      <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
      <p>Created by: <?php echo htmlspecialchars($pizza['email']); ?></p>
      <p><?php echo htmlspecialchars($pizza['created_at']); ?></p>
      <h5>Ingredients:</h5>
      <p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>

      <!-- Delete Form -->
      <form action="details.phP" method="POST">
        <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id']; ?>">
        <input type="submit" name="delete" value="Delete Pizza" class="btn red darken-4 z-depth-0">
      </form>

    <?php else: ?>
      <h5>No such pizza exists!</h5>
    <?php endif; ?>
  </div>

  <?php include('templates/footer.php'); ?>
</html>
