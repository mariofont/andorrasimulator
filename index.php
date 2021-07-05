<?php

require 'header.php';

?>
    
    <section class="hero is-medium is-primary is-bold has-text-centered">
      <div class="hero-body">
        <div class="container">
          <h1 class="title is-1 has-text-weight-bold">
            💸 Andorra Simulator <span class="tag is-warning">Beta</span>
          </h1>
          <h2 class="subtitle">
            Porqué decenas de YouTubers se están mudando al país vecino, en detalle
          </h2>
        </div>
      </div>
    </section>
    
    <section class="section has-text-centered">
      <div class="columns">
        <div class="column">
          <h4 class="title is-4 is-spaced has-text-weight-bold">
          🎯 Objetivo
          </h4>
          <p class="subtitle">Averiguar de forma <strong>rápida y sencilla</strong> las diferencias fiscales entre España y Andorra.</p>
        </div>
        <div class="column">
          <h4 class="title is-4 is-spaced has-text-weight-bold">
          📝 Datos necesarios
          </h4>
          <p class="subtitle">Solamente es necesario el <strong>salario bruto anual</strong> o los ingresos correspondientes.</p>
        </div>
        <div class="column">
          <h4 class="title is-4 is-spaced has-text-weight-bold">
          📊 Resultados
          </h4>
          <p class="subtitle">Los impuestos que se <strong>dejan de tributar</strong> en España a favor de Andorra.</p>
        </div>
      </div>
    </section>

    <section class="hero is-light">
      <div class="hero-body">
        <div class="container">
          <h1 class="title has-text-centered has-text-weight-bold">🚨 Al lío</h1>
           <div class="container" style="max-width: 500px">
            <div class="box">           
              <form action="results.php" method="GET">
                <div class="field">
                  <label class="label">Salario anual bruto</label>
                  <div class="control">
                    <input class="input" type="text" name="salary" placeholder="30.000 €">
                  </div>                  
                  <p class="help">Prima la exactitud</p>
                </div>
                <div class="field">
                  <div class="control has-text-centered">
                    <input type="submit" class="button is-link is-outlined is-rounded" value="Calcular">
                  </div>  
                </div>   
              </form>
            </div>
            <a class="button is-link is-light is-fullwidth" href="results.php?salary=<?php echo rand(100000, 2000000); ?>">¡Randomizar!</a>
          </div>
        </div>
      </div>
    </section>

    <?php include 'footer.php'; ?>

  </body>
</html>