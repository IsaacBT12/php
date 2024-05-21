<?php
// Función f(a) = 4a^3 + g(2a, -3a)
function f($a) {
    return 4 * pow($a, 3) + g(2 * $a, -3 * $a);
}

// Función g(b, c) = (7b - 3) % (c^2 + 1)
function g($b, $c) {
    return (7 * $b - 3) % (pow($c, 2) + 1);
}

// Función h(x, y, z) = f(x/y) + 3g(z/y, x)
function h($x, $y, $z) {
    return f($x / $y) + 3 * g($z / $y, $x);
}

// Obtener los valores de x, y, z del formulario
$x = isset($_POST['x']) ? intval($_POST['x']) : 0;
$y = isset($_POST['y']) ? intval($_POST['y']) : 0;
$z = isset($_POST['z']) ? intval($_POST['z']) : 0;

// Calcular h(x, y, z)
$resultado = h($x, $y, $z);

// Mostrar el resultado
echo "El resultado de h($x, $y, $z) es: $resultado";
?>
