<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Trabajo practio n-1-Matias Marchini</h1>
    <?php
    //1. Imprima por pantalla: “Hola mundo”-------------------------------------------------

    echo "Hola mundo <br>";

    //2. Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.

    //Declaro variable

    $cadena = "Hola mundo <br>";
    
    //Muestro por pantalla

    echo $cadena;

    /*3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división entera y el resto de la división entera.*/

    //Declaro variables

    $numero1 = 10;
    $numero2 = 5;
    $suma;$resta;$multiplicacion;$divicion;$resto;

    //Realizo operaciones

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $divicion = $numero1 / $numero2;
    $resto = $numero1 % $numero2;

    // Mostrar el resultado
    echo "La suma de $numero1 y $numero2 es igual a $suma. <br>";
    echo "La resta de $numero1 y $numero2 es igual a $resta. <br>";
    echo "La multiplicacion de $numero1 y $numero2 es igual a $multiplicacion. <br>";
    echo "La divicion de $numero1 y $numero2 es igual a $divicion. <br>";
    echo "El resto de $numero1 y $numero2 es igual a $resto. <br>";

    //4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por pantalla.
 
    //Formula // F = (C · 1,8) + 32

    //Declaro variables

    $fahrenheit;
    $celsius = 20;

    //Realizo operaciones

    $fahrenheit = ($celsius * 1.8) + 32;

    //Mostrar el resultado

    echo "La transformacion  de grados Celsius a Fahrenheit, para el valor 20°C es: $fahrenheit grados Fahrenheit. <br>";

    //5. Implementar algoritmos que permitan:
    /*a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.*/

    //Perímetro = 2 * (Base + Altura)
    //Area = Base * Altura

    //Declaro variables------------------------------------------------
    $base = 18;
    $altura = 12;
    $area;$perimetro;

    //Realizo operaciones

    $perimetro = 2 * ($base + $altura);

    $area = $base * $altura;

    //Mostrar el resultado

    echo "5-a <br>El perimetro es $perimetro y el area es $area. <br>";

    //b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.
    
    //Circunferencia = 2 * π * Radio
    //Área = π * Radio^2
    
    //Declaro variables 

    $radio = 30;
    $pi = 3.14;
    $circunferencia;$area2;

    //Realizo operaciones

    $circunferencia = 2 * $pi * $radio;
    $area2 = $pi * ($radio) ** 2;

    //Mostrar el resultado

    echo "5-b <br> La circunferencia es: $circunferencia y el area es $area2. <br>";
    ?>
    
</body>
</html>