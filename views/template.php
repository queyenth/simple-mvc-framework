<?php extract($data); ?>
<html>
<?php include 'views/header.php'; ?>
<body>
  <?php include 'views/navigation.php'; ?>
  <div class="container">
    <!-- Here goes user code -->
    <?php include 'views/' . $view . ".php"; ?>
    <?php include 'views/footer.php'; ?>
  </div>
  <?php include 'views/scripts.php'; ?>
</body>
</html>
