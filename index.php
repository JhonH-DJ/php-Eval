    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calcular Costo Total de Compra</title>
    </head>
    <body>

        <h1>Compras en Línea</h1>

        <p><u>Precio y cantidad de cada producto</u></p>

        <?php
        //Definir precio y cantidad de los productos
        $Precio1 = 8;
        $Cantidad1 = 5;
        $Precio2 = 10;
        $Cantidad2 = 5;
        $Precio3 = 28;
        $Cantidad3 = 10;

    //Definir % de impuesto y descuento
    $Impuesto = 0.18;
    $Descuento = 0.10;

     // Calcular el subtotal
    $Subtotal = ($Precio1 * $Cantidad1) + ($Precio2 * $Cantidad2) + ($Precio3 * $Cantidad3);

    // Calcular monto de impuestos y descuento
    $MontoImpuesto = $Subtotal * $Impuesto;
    $MontoDescuento = $Subtotal * $Descuento;

    // Calcular el total final
    $TotalFinal = $Subtotal + $MontoImpuesto - $MontoDescuento;
    ?>

    <p><?php echo "El subtotal de la compra es:".$Subtotal ?></p>
    <p><?php echo "El monto de impuestos es:".$MontoImpuesto ?></p>
    <p><?php echo "El descuento aplicado es:".$MontoDescuento ?></p>
    <p><?php echo "El total final de la compra es:".$TotalFinal ?></p>

    </body>
    </html>