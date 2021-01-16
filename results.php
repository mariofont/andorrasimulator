<?php

  require 'functions.php';

  // Comprobamos si se ha enviado el formulario 
  if (isset($_GET['salary']) AND (!empty($_GET["salary"]))) { 
    
    $salary = $_GET['salary']; 

    $netAndorra = netAndorra($salary);
    $netEspaña = netEspaña($salary);  
    $netDifference = netDifference($netAndorra, $netEspaña);
    $perDifference = ($netDifference / $netAndorra) * 100;

    $monthlyAndorra = $netAndorra / 12;
    $monthlyEspaña = $netEspaña / 12;
    $monthlyDifference = monthlyDifference($monthlyAndorra, $monthlyEspaña);
    $perMonthlyDifference = ($monthlyDifference / $monthlyAndorra) * 100;

    $fiveAndorra = $netAndorra * 5;
    $fiveEspaña = $netEspaña * 5;
    $fiveDifference = fiveDifference($fiveAndorra, $fiveEspaña);
    $perFiveDifference = ($fiveDifference / $fiveAndorra) * 100;

    $quinceAndorra = $netAndorra * 15;
    $quinceEspaña = $netEspaña * 15;
    $quinceDifference = quinceDifference($quinceAndorra, $quinceEspaña);
    $perQuinceDifference = ($quinceDifference / $quinceAndorra) * 100;

?>
  

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

    <section class="hero is-medium is-warning is-bold has-text-centered">
      <div class="hero-body">
        <div class="container">
          <h1 class="title is-1 is-spaced">
            🎉 Resultados
          </h1>
          <h2 class="subtitle">
            Salario anual bruto de <strong><?php echo number_format( $_GET['salary'], 0, ',', '.' ); ?></strong> €/año
          </h2>
        </div>
      </div>
    </section>

    <section class="section has-text-centered">
      <div class="columns">
        <div class="column">
          <h2 class="title is-2">🇪🇸 España</h2>
          <div class="tile">
            <article class="tile is-child notification is-sucess">
              <p class="title"><?php echo number_format( $netEspaña, 2, ',', '.' ); ?> €/año</p>
              <p class="subtitle">Salario anual <strong>neto</strong></p>
            </article>
          </div> 
          
        </div>
        <div class="column">
          <h2 class="title is-2">🇦🇩 Andorra</h2>
          <div class="tile">
            <article class="tile is-child notification is-sucess">
              <p class="title"><?php echo number_format( $netAndorra, 2, ',', '.' ); ?> €/año</p>
              <p class="subtitle">Salario anual <strong>neto</strong></p>
            </article>
          </div>
          
        </div>
      </div>
      <div class="tile">
        <article class="tile is-child notification is-sucess">
          <p class="title">Te ahorrarías <?php echo number_format( $netDifference, 2, ',', '.' ); ?> € al año</p>
          <p class="subtitle">Equivalente a un <strong><?php echo number_format( $perDifference, 2, ',', '.' ); ?></strong> % del salario</p>
        </article>
      </div>
    </section>

    <h1 class="title has-text-centered">⬇️</h1> 

    <section class="section has-text-centered">
      <h1 class="title">¿Cuál sería la diferencia mensual?</h1>
      <div class="columns">
        <div class="column">
          <div class="tile">
            <article class="tile is-child notification is-sucess">
              <p class="title">🇪🇸 <?php echo number_format( $monthlyEspaña, 2, ',', '.' ); ?> €/mes</p>
              <p class="subtitle">Salario mensual <strong>neto</strong></p>
            </article>
          </div> 
          
        </div>
        <div class="column">
          <div class="tile">
            <article class="tile is-child notification is-sucess">
              <p class="title">🇦🇩 <?php echo number_format( $monthlyAndorra, 2, ',', '.' ); ?> €/mes</p>
              <p class="subtitle">Salario mensual <strong>neto</strong></p>
            </article>
          </div>
          
        </div>
      </div>
      <div class="tile">
        <article class="tile is-child notification is-sucess">
          <p class="title">Te ahorrarías <?php echo number_format( $monthlyDifference, 2, ',', '.' ); ?> € al mes</p>
          <p class="subtitle">Equivalente a un <strong><?php echo number_format( $perMonthlyDifference, 2, ',', '.' ); ?></strong> % del salario</p>
        </article>
      </div> 
    </section>

    <h1 class="title has-text-centered">⬇️</h1> 

    <section class="section has-text-centered">
      <h1 class="title">¿En 5 años?</h1>
      <div class="columns">
        <div class="column">
          <div class="tile">
            <article class="tile is-child notification is-sucess">
              <p class="title">🇪🇸 <?php echo number_format( $fiveEspaña, 2, ',', '.' ); ?> €</p>
              <p class="subtitle">Salario <strong>acumulado</strong></p>
            </article>
          </div> 
          
        </div>
        <div class="column">
          <div class="tile">
            <article class="tile is-child notification is-sucess">
              <p class="title">🇦🇩 <?php echo number_format( $fiveAndorra, 2, ',', '.' ); ?> €</p>
              <p class="subtitle">Salario <strong>acumulado</strong></p>
            </article>
          </div>
          
        </div>
      </div>
      <div class="tile">
        <article class="tile is-child notification is-sucess">
          <p class="title">Te ahorrarías <?php echo number_format( $fiveDifference, 2, ',', '.' ); ?> € en total</p>
          <p class="subtitle">Un <strong><?php echo number_format( $perFiveDifference, 2, ',', '.' ); ?></strong> % de todos los ingresos</p>
        </article>
      </div> 
    </section>

    <h1 class="title has-text-centered">⬇️</h1> 

    <section class="section has-text-centered">
      <h1 class="title">¿Y en 15 años?</h1>
      <div class="columns">
        <div class="column">
          <div class="tile">
            <article class="tile is-child notification is-sucess">
              <p class="title">🇪🇸 <?php echo number_format( $quinceEspaña, 2, ',', '.' ); ?> €</p>
              <p class="subtitle">Salario <strong>acumulado</strong></p>
            </article>
          </div> 
          
        </div>
        <div class="column">
          <div class="tile">
            <article class="tile is-child notification is-sucess">
              <p class="title">🇦🇩 <?php echo number_format( $quinceAndorra, 2, ',', '.' ); ?> €</p>
              <p class="subtitle">Salario <strong>acumulado</strong></p>
            </article>
          </div>
          
        </div>
      </div>
      <div class="tile">
        <article class="tile is-child notification is-sucess">
          <p class="title">Te ahorrarías <?php echo number_format( $quinceDifference, 2, ',', '.' ); ?> € en total</p>
          <p class="subtitle">Un <strong><?php echo number_format( $perQuinceDifference, 2, ',', '.' ); ?></strong> % de todos los ingresos</p>
        </article>
      </div> 
    </section>

    <section class="hero is-medium is-dark is-bold has-text-centered">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            ¿Crees que merece la pena?
          </h1>
          <h2 class="subtitle">
            Te ayudo con la respuesta: no
          </h2>
        </div>
      </div>
    </section>
    
    <?php include 'footer.php'; ?>
    
  </body>
</html>

<?php

}

elseif (empty($_POST["salary"])) 
  {
    header('Location: index.php');
  } 
  else header('Location: index.php');

?>