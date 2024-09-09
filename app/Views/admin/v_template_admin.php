<!DOCTYPE html>
<html lang="en">

<?php include('layout/head.php') ?>

<body>

  <?php include('layout/header.php') ?>

  <?php include('layout/sidebar.php') ?>

  <main id="main" class="main">

    <?php if ($page) {
        echo view($page);
    } ?>

  </main><!-- End #main -->

  <?php include('layout/footer.php') ?>

</body>

</html>