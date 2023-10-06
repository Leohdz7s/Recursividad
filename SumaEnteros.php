function sumaEnteros($n) {
    if ($n === 1) {
        return 1;
    } else {
        return $n + sumaEnteros($n - 1);
    }
}

// Ejemplo de uso:
$numero = 5;
$resultado = sumaEnteros($numero);
echo "La suma de los enteros desde 1 hasta $numero es $resultado.";
