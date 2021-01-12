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
      $type1 = 12449 * 0.19;
      $carryTax = ($salary - 12450) * 0.24;

      $net = $salary - ($type1 + $carryTax);

    } 
    elseif ($salary >= 20200 AND $salary < 35200) // type3
    {
      $type1 = 12449 * 0.19;
      $type2 = 7750 * 0.24;
      $carryTax = ($salary - 20200) * 0.30;

      $net = $salary - ($type1 + $type2 + $carryTax);
    } 
    elseif ($salary >= 35200 AND $salary < 60000) // type4
    {
      $type1 = 12449 * 0.19;
      $type2 = 7750 * 0.24;
      $type3 = 15000 * 0.30;
      $carryTax = ($salary - 35200) * 0.37;

      $net = $salary - ($type1 + $type2 + $type3 + $carryTax);
    } 
    elseif ($salary >= 60000) // type5
    {
      $type1 = 12449 * 0.19;
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
    <section class="container">
      <h1 class="title is-1">Resultados</h1>
      
      <?php
      // Comprobamos si se ha enviado el formulario 
      if (isset($_POST['submit']) AND (!empty($_POST["salary"]))) { 
        
        $salary = $_POST['salary']; 

        $netAndorra = netAndorra($salary);
        $netEspaña = netEspaña($salary);
        $netDifference = netDifference($netAndorra, $netEspaña);

        echo 'Tu salario neto en Andorra es de ' . $netAndorra . ' €/año.';
        echo 'Tu salario neto en España es de ' . $netEspaña . ' €/año.';
        echo 'La diferencia es de ' . $netDifference . ' €/año.';
        echo 'En 5 años la diferencia es de ' . $netDifference * 5 . ' €.';  
        
        exit; 

      } 
      elseif (empty($_POST["salary"])) 
      {
        header('Location: index.php');
      } 
      else header('Location: index.php');

      ?>

    </section>
  </body>
</html>