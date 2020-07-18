<?php

  include('config/db_connect.php');

  // Write query for all pizzas
  $sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

  // Make query and get results
  $result = mysqli_query($conn, $sql);

  // Fetch the resulting rows
  $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // Free result from memeory
  mysqli_free_result($result);

  // Close connection
  mysqli_close($conn);

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <?php include('templates/header.php'); ?>

  <h4 class="center red-text text-lighten-2">Pizzas!</h4>

  <div class="container">
    <div class="row">
      <?php foreach($pizzas as $pizza): ?>
        <div class="col s6 md3">
          <div class="card z-depth-0">
            <img src="img/pizza.png" alt="Pizza" class="pizza">
            <div class="card-content center">
              <h5><?php echo htmlspecialchars($pizza['title']); ?></h5>
              <ul>
                <?php foreach (explode(',', $pizza['ingredients']) as $ing): ?>
                  <li><?php echo htmlspecialchars($ing); ?></li>
                <?php endforeach ?>
              </ul>
            </div>
            <div class="card-action right-align">
              <a href="details.php?id=<?php echo $pizza['id']; ?>" class="brand-text">More Info</a>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>

  <?php include('templates/footer.php'); ?>

</html>
