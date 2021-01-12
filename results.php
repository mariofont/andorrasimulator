<?php
  
  function netAndorra($salary)
  {
    
    $net; // Final net salary

    if ($salary < 24000) 
    {
      $net = $salary;
    } 
    elseif ($salary >= 24000 AND $salary < 40000) 
    {
      $net = $salary - ($salary * 0.05);

    } 
    else
      $net = $salary - ($salary * 0.10);

    return $net;

  }

  function netEspaña($salary)
  {

    $net; // Final net salary

    $type1; // 19% (12450)
    $type2; // 24% (7750)
    $type3; // 30% (15000)
    $type4; // 37% (24800)
    $type5; // 45%

    $carryTax; // Var helper

    if ($salary < 12450) // type1
    {
      $net = $salary - ($salary * 0.19);
    } 
    elseif ($salary >= 12450 AND $salary < 20200) // type2
    {
      $type1 = 12450 * 0.19;
      $carryTax = ($salary - 12450) * 0.24;

      $net = $salary - ($type1 + $carryTax);

    } 
    elseif ($salary >= 20200 AND $salary < 35200) // type3
    {
      $type1 = 12450 * 0.19;
      $type2 = 7750 * 0.24;
      $carryTax = ($salary - 20200) * 0.30;

      $net = $salary - ($type1 + $type2 + $carryTax);
    } 
    elseif ($salary >= 35200 AND $salary < 60000) // type4
    {
      $type1 = 12450 * 0.19;
      $type2 = 7750 * 0.24;
      $type3 = 15000 * 0.30;
      $carryTax = ($salary - 35200) * 0.37;

      $net = $salary - ($type1 + $type2 + $type3 + $carryTax);
    } 
    elseif ($salary >= 60000) // type5
    {
      $type1 = 12450 * 0.19;
      $type2 = 7750 * 0.24;
      $type3 = 15000 * 0.30;
      $type4 = 24800 * 0.37;
      $carryTax = ($salary - 60000) * 0.45;

      $net = $salary - ($type1 + $type2 + $type3 + $type4 + $carryTax);
    }

    return $net;

  }

  function netDifference($andorra, $spain)
  {
    $netDifference = $andorra - $spain;

    return $netDifference;
  }

  function monthlyDifference($andorra, $spain)
  {
    $monthlyDifference = $andorra - $spain;

    return $monthlyDifference;
  }

  function fiveDifference($andorra, $spain)
  {
    $fiveDifference = $andorra - $spain;

    return $fiveDifference;
  }

  function quinceDifference($andorra, $spain)
  {
    $quinceDifference = $andorra - $spain;

    return $quinceDifference;
  }

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
    
    <footer class="footer">
      <div class="content has-text-centered">
        <p>
          <strong>Andorra Simulator</strong> es un proyecto de <a href="https://mariofont.com" target="_blank">Mario Font</a>. ¿Sugerencias? Hablamos por <a href="https://twitter.com/mario_font" target="_blank">Twitter</a>.
        </p>
        <p class="is-italic">
          Versión 0.5.0
        </p>
      </div>
    </footer>
    
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