<?php

  require 'functions.php';

  // Comprobamos si se ha enviado el formulario 
  if (isset($_GET['salary']) AND (!empty($_GET["salary"]))) { 
    
    $salary = str_replace(".", "", $_GET['salary']); 

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

require 'header.php';

?>
  
  <body>
    <section class="hero is-medium is-warning is-bold has-text-centered">
      <div class="hero-body">
        <div class="container">
          <h1 class="title is-1 is-spaced">
            🎉 Resultados
          </h1>
          <h2 class="subtitle">
            Para unos ingresos brutos de <strong><?php echo number_format( $salary, 0, ',', '.' ); ?></strong> €/año
          </h2>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container" style="max-width: 900px">
        <section class="section has-text-centered">
          <div class="columns">
            <div class="column">
              <h2 class="title is-2">🇪🇸 España</h2>
              <div class="tile">
                <article class="tile is-child notification is-sucess">
                  <p class="title has-text-danger-dark"><?php echo number_format( $netEspaña, 0, ',', '.' ); ?> €/año</p>
                  <p class="subtitle">Salario <strong>neto</strong> anual</p>
                </article>
              </div> 
              
            </div>
            <div class="column">
              <h2 class="title is-2">🇦🇩 Andorra</h2>
              <div class="tile">
                <article class="tile is-child notification is-sucess">
                  <p class="title has-text-success-dark"><?php echo number_format( $netAndorra, 0, ',', '.' ); ?> €/año</p>
                  <p class="subtitle">Salario <strong>neto</strong> anual</p>
                </article>
              </div>
              
            </div>
          </div>
          <div class="tile">
            <article class="tile is-child notification is-sucess">
              <p class="title has-text-info-dark">🚨 <?php echo number_format( $netDifference, 0, ',', '.' ); ?> €/año en impuestos</p>
            </article>
          </div>
        </section>

        <h1 class="title has-text-centered">⬇️</h1> 
        <h1 class="title has-text-centered has-text-weight-normal">¿Cuál sería la diferencia mensual?</h1>
        
        <section class="section has-text-centered"> 
          <div class="columns">
            <div class="column">
              <div class="tile">
                <article class="tile is-child notification is-sucess">
                  <p class="title has-text-danger-dark">🇪🇸 <?php echo number_format( $monthlyEspaña, 0, ',', '.' ); ?> €/mes</p>
                  <p class="subtitle">Salario <strong>neto</strong> mensual</p>
                </article>
              </div> 
              
            </div>
            <div class="column">
              <div class="tile">
                <article class="tile is-child notification is-sucess">
                  <p class="title has-text-success-dark">🇦🇩 <?php echo number_format( $monthlyAndorra, 0, ',', '.' ); ?> €/mes</p>
                  <p class="subtitle">Salario <strong>neto</strong> mensual</p>
                </article>
              </div>
              
            </div>
          </div>
          <div class="tile">
            <article class="tile is-child notification is-sucess">
              <p class="title has-text-info-dark">🚨 <?php echo number_format( $monthlyDifference, 0, ',', '.' ); ?> €/mes en impuestos</p>
            </article>
          </div> 
        </section>

        <h1 class="title has-text-centered">⬇️</h1> 
        <h1 class="title has-text-centered has-text-weight-normal">¿En 5 años?</h1>

        <section class="section has-text-centered">       
          <div class="columns">
            <div class="column">
              <div class="tile">
                <article class="tile is-child notification is-sucess">
                  <p class="title has-text-danger-dark">🇪🇸 <?php echo number_format( $fiveEspaña, 0, ',', '.' ); ?> €</p>
                  <p class="subtitle">Salario <strong>acumulado</strong></p>
                </article>
              </div> 
              
            </div>
            <div class="column">
              <div class="tile">
                <article class="tile is-child notification is-sucess">
                  <p class="title has-text-success-dark">🇦🇩 <?php echo number_format( $fiveAndorra, 0, ',', '.' ); ?> €</p>
                  <p class="subtitle">Salario <strong>acumulado</strong></p>
                </article>
              </div>
              
            </div>
          </div>
          <div class="tile">
            <article class="tile is-child notification is-sucess">
              <p class="title has-text-info-dark">🚨 <?php echo number_format( $fiveDifference, 0, ',', '.' ); ?> € en 5 años</p>
            </article>
          </div> 
        </section>

        <h1 class="title has-text-centered">⬇️</h1> 
        <h1 class="title has-text-centered has-text-weight-normal">¿Y en 15 años?</h1>

        <section class="section has-text-centered">  
          <div class="columns">
            <div class="column">
              <div class="tile">
                <article class="tile is-child notification is-sucess">
                  <p class="title has-text-danger-dark">🇪🇸 <?php echo number_format( $quinceEspaña, 2, ',', '.' ); ?> €</p>
                  <p class="subtitle">Salario <strong>acumulado</strong></p>
                </article>
              </div> 
              
            </div>
            <div class="column">
              <div class="tile">
                <article class="tile is-child notification is-sucess">
                  <p class="title has-text-success-dark">🇦🇩 <?php echo number_format( $quinceAndorra, 2, ',', '.' ); ?> €</p>
                  <p class="subtitle">Salario <strong>acumulado</strong></p>
                </article>
              </div>
              
            </div>
          </div>
          <div class="tile">
            <article class="tile is-child notification is-sucess">
              <p class="title has-text-info-dark">🚨 <?php echo number_format( $quinceDifference, 0, ',', '.' ); ?> € en 15 años</p>
            </article>
          </div> 
        </section>

      </div>    
    </section>

    

    <section class="hero is-medium is-dark is-bold has-text-centered">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            ¿Crees que merece la pena?
          </h1>
          <br>
          <h2 class="subtitle">
            <a href="https://twitter.com/intent/tweet?screen_name=mario_font&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @mario_font</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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