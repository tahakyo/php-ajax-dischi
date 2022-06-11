<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- boot-strap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- style-css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- Vue-js -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <!-- Axios -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <!-- header -->
  <header>

  </header>
  <!-- header -->
  <!-- main -->
  <main id="root">
    <div class="container">
      <div class="row row-cols-3 row-cols-lg-6 mt-2">
        <div v-for="data in database" class="track_card text-center mb-3 mx-3" >
          <img :src="data.poster" :alt="data.title">
          <h3>{{data.title}}</h3>
          <h4>{{data.author}}</h4>
          <h5>{{data.year}}</h5>

        </div>
      </div>
    </div>
  </main>
  <!-- main -->
  <script src="./js/script.js"></script>
</body>

</html>