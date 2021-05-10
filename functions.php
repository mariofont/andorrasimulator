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

  function sentences($salary)
  {
    
    $msg;

    if ($salary < 500) {
      $msg = "Poca diferencia pero ayudaría a gente en la calle";
    } elseif ($salary < 1000) {
      $msg = "Con ese dinero hay gente que paga su alquiler";
    } elseif ($salary < 2000) {
      $msg = "Estás dejando de pagar lo equivalente a un salario decente...";
    } else
      $msg = "Eres un sinverguenza";

    return $msg;
    
  }


?>