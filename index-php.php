<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!-- Data Base -->
<?php
require __DIR__ . "/api/database.php";
?>
<!-- Data Base -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- boot-strap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Style-css -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!-- header -->
  <header>

  </header>
  <!-- header -->
  <!-- main -->
  <main>
    <div class="container">
      <div class="row row-cols-3 row-cols-lg-6 mt-2">
        <?php foreach ($database as $data) { ?>
          <div class="track_card text-center mb-3 mx-3">
            <img src="<?php echo $data['poster']; ?>" alt="<?php echo $data['title']; ?>" />
            <h3><?php echo $data['title']; ?></h3>
            <h4><?php echo $data['author']; ?></h4>
            <h5><?php echo $data['year']; ?></h5>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </main>
  <!-- main -->
  <footer></footer>
</body>

</html>