<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?> | B</title>
    <?php echo $css;?>
  </head>
  <body>
    <header>
      <h1>Bavo Vanderghote portfolio</h1>
    </header>
      <?php
        if(!empty($_SESSION['error'])) {
          echo '<div class="error box">' . $_SESSION['error'] . '</div>';
        }
        if(!empty($_SESSION['info'])) {
          echo '<div class="info box">' . $_SESSION['info'] . '</div>';
        }
      ?>

      <section class="players">
        <?php echo $content;?>
        </section>
    <?php echo $js; ?>
  </body>
</html>
