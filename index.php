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
    
    <section class="hero is-medium is-primary is-bold has-text-centered">
      <div class="hero-body">
        <div class="container">
          <h1 class="title is-1">
            💸 Andorra Simulator <span class="tag is-warning">Alpha</span>
          </h1>
          <h2 class="subtitle">
            Entiende porqué decenas de YouTubers se están mudando a Andorra, en detalle
          </h2>
        </div>
      </div>
    </section>
    
    <section class="section has-text-centered">
      <div class="columns">
        <div class="column">
          <h4 class="title is-4 is-spaced">
          🎯 El objetivo
          </h4>
          <p class="subtitle">Averiguar de forma <strong>rápida, sencilla y visual</strong> las diferencias fiscales entre España y Andorra.</p>
        </div>
        <div class="column">
          <h4 class="title is-4 is-spaced">
          📝 Datos necesarios
          </h4>
          <p class="subtitle">Sólamente es necesario el <strong>salario bruto anual</strong> para conocer los tramos correspondientes del IRFP.</p>
        </div>
        <div class="column">
          <h4 class="title is-4 is-spaced">
          📊 Los resultados
          </h4>
          <p class="subtitle">El ahorro <strong>exacto</strong> de tributar en Andorra visualizado de forma gráfica y entretenida.</p>
        </div>
      </div>
    </section>

    <section class="hero is-light">
      <div class="hero-body">
        <div class="container">
          <h1 class="title has-text-centered">🚨 Al lío</h1>
           <div class="container" style="max-width: 500px">
            <div class="box">           
              <form action="results.php" method="GET">
                <div class="field">
                  <label class="label">Salario anual bruto</label>
                  <div class="control">
                    <input class="input" type="text" name="salary" placeholder="30.000 €">
                  </div>                  
                  <p class="help">No seas fantasma ;)</p>
                </div>
                <div class="field">
                  <div class="control has-text-centered">
                    <input type="submit" class="button is-link is-outlined is-rounded" value="Calcular">
                  </div>  
                </div>   
              </form>
            </div>
            <a class="button is-link is-light is-fullwidth" href="results.php?salary=<?php echo rand(500000, 2000000); ?>">¡Randomizar!</a>
          </div>
        </div>
      </div>
    </section>

    <?php include 'footer.php'; ?>

  </body>
</html>