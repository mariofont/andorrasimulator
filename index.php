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
            Sí, esta web es verdadera, sigue leyendo...
          </h2>
        </div>
      </div>
    </section>
    
    <section class="section has-text-centered">
      <div class="container">
        <h1 class="title is-spaced">
          💡 La idea
        </h1>
        <p class="subtitle" style="margin-bottom: 3em">Averiguar de forma <strong>rápida y sencilla</strong> el ahorro de mudarnos a Andorra.</p>
        <h1 class="title is-spaced">
          📝 El proceso
        </h1>
        <p class="subtitle" style="margin-bottom: 3em">Introducir <strong>3</strong> datos esenciales sobre nosotros (o quien queramos).</p>
        <h1 class="title is-spaced">
          📊 Los resultados
        </h1>
        <p class="subtitle">El ahorro <strong>exacto</strong> en € y % a corto y largo plazo.</p>
      </div>
    </section>

    <section class="hero is-light">
      <div class="hero-body">
        <div class="container">
           <div class="container" style="max-width: 500px">
            <div class="box">
              <form action="results.php" method="POST">
                <div class="field">
                  <label class="label">Salario anual bruto</label>
                  <div class="control">
                    <input class="input" type="text" name="salary" placeholder="30.000 €">
                  </div>
                  <p class="help">No seas fantasma.</p>
                </div>

                <div class="field">
                  <label class="label">Edad</label>
                  <div class="control">
                    <input class="input" type="text" name="age" placeholder="69">
                  </div>
                  <p class="help">Abuelos no.</p>
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
          <strong>Andorra Simulator</strong> por <a href="https://mariofont.com">Mario Font</a>. Esta web está hecha con fines de entretenimiento.
        </p>
      </div>
    </footer>

  </body>
</html>