<?php include('views/elements/vars.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php echo $title ?>
  </title>
  <link rel="stylesheet" href="src\css\normalize.css">
  <link rel="stylesheet" href="src\css\style.css">
  <!-- Drawe -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css" />
</head>

<body class="drawer drawer--left">
  <header>
    <div class="header mobile">
      <?php include('views/elements/header_mobile.php') ?>
    </div>
    <div class="header desk">
      <?php include('views/elements/header_desk.php') ?>
    </div>
    <div class="container flex f-justify-end center">
      <p class="title_label center">
        <?php echo $title ?>
      </p>
    </div>
  </header>

  <main>
    <?php
    $page = 1;
    include('views/elements/vars.php');
    include('views/' . $view);
    ?>
  </main>

  <footer>
    <div class="width">
      <img class="main_footer_img   " src="src\images\footer2.png">
      <?php include('views/elements/footer.php'); ?>
    </div>
  </footer>

  <!-- drawer.js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
  <script>
    $(document).ready(function () {
      $(".drawer").drawer();
    });
  </script>
</body>

</html>