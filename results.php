<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Andorra Simulator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
  </head>
  <body>
    <section class="container">
      <h1 class="title is-1">Andorra Simulator - Resultados</h1>
      <?php
      // Check if the form is submitted 
      if ( isset( $_POST['submit'] ) ) { 
        $salary = $_POST['salary']; 
        $age = $_POST['age']; // display the results
        echo 'Cobras ' . $salary . ' €/año y tienes ' . $age . ' años.'; 
      exit; 
      } 

      ?>
    </section>
  </body>
</html>