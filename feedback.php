<?php include 'inc/header.php' ?>

<?php
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedbacks = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<h2>Feedbacks</h2>

<?php if (empty($feedbacks)) : ?>
  <p class="lead mt3">There is no feedbacks</p>
<?php endif; ?>

<?php foreach ($feedbacks as $item) : ?>
  <div class="card my-3 w-75">
    <div class="card-body text-center">
      <?php echo $item['body'] ?>
      <div class="text-secondary mt-2">
        <h6>By <?php echo $item['name'] ?></h6>
        <p class="">on <?php echo $item['date'] ?></p>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<?php include 'inc/footer.php' ?>