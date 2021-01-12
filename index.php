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
          <h1 class="title is-spaced">
          🎯 El objetivo
        </h1>
        <p class="subtitle">Averiguar de forma <strong>rápida, sencilla y visual</strong> las diferencias fiscales entre España y Andorra.</p>
        </div>
        <div class="column">
          <h1 class="title is-spaced">
          📝 Datos necesarios
        </h1>
        <p class="subtitle">Sólamente es necesario el <strong>salario bruto anual</strong> para conocer los tramos correspondientes del IRFP.</p>
        </div>
        <div class="column">
          <h1 class="title is-spaced">
          📊 Los resultados
        </h1>
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
              <form action="results.php" method="POST">
                <div class="field">
                  <label class="label">Salario anual bruto</label>
                  <div class="control">
                    <input class="input" type="text" name="salary" placeholder="30.000 €">
                  </div>
                  <?php
                  if ($error) {
                  ?>
                  <p class="help is-danger">Debes introducir un salario.</p>                  
                  <?php
                  } else {
                  ?>
                    <p class="help">No seas fantasma ;)</p>
                  <?php
                  }
                  ?>              
                </div>
                <div class="control has-text-centered">
                  <input class="button is-link is-outlined is-medium" type="submit" name="submit" value="Calcular">
                </div>       
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="content has-text-centered">
        <p>
          <strong>Andorra Simulator</strong> es un proyecto de <a href="https://mariofont.com" target="_blank">Mario Font</a>. ¿Sugerencias? Hablamos por <a href="https://twitter.com/mario_font" target="_blank">Twitter</a>.
        </p>
        <p class="is-italic">
          Versión 0.3.0
        </p>
      </div>
    </footer>

  </body>
</html>