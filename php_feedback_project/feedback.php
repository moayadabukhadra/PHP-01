<?php include 'inc/header.php' ?>

<?php

$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<main>
  <div class="container d-flex flex-column align-items-center">

    <h2>Feedback</h2>
    <?php foreach ($feedback as $item) : ?>

      <div class="card my-3">
        <div class="card-body">
          <?php echo $item['body'] ?>
          <div class="text-secondary mt-2">
            By <?php echo $item['name']; ?> 
          </div>
        </div>
      </div>
    <?php endforeach ?>

  </div>
</main>


<?php include 'inc/footer.php' ?>