<?php
$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
    $a = $_POST["v_a"];
    $b = $_POST["v_b"];
    $c = $_POST["v_c"];
    if ($a != 0) {
        $delta = pow($b, 2) - ((4 * $a) * $c);
        if ($delta == 0) {
            $raiz = - ($b) / (2 * $a);
            echo "<p>Uma única raiz real: quando delta for igual a zero. (nulo). Resultado: $raiz </p>";
        } elseif ($delta > 0) {
            $x1 = (- $b + sqrt($delta)) / (2 * $a);
            $x2 = (- $b - sqrt($delta)) / (2 * $a);
            $raiz = array(
                $x1,
                $x2
            );
            echo "<p> O valor de delta e: $delta</p>";
            echo "<p>Duas raízes reais: quando delta for maior que zero. (positivo)X1: $raiz[0] e X2: $raiz[1] </p>";
        } else {
            echo "<p>Nenhuma raiz real: quando delta for menor que zero. (negativo)</p>";
            echo "<p> O valor de delta e: $delta</p>";
        }
    } else {
        echo "Para executar o calculo da equação o valor de A preciza ser maior que zero";
        echo "<p> O valor de delta e: $delta</p>";
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
	<h4>O valor de delta (Δ = b² – 4ac) é igual a: <?php echo "$delta";?></h4>
	<a href="http://localhost/Gelvanne_Laboratorio/bhaskara/index.html">
		Calculadora Bhaskara</a>
</body>
</html>
