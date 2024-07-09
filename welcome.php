<?php
// welcome.php
session_start();

if (!isset($_SESSION['email'])) {
    header("location: index.html");
    exit();
}

echo "Bienvenido ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrediBueno</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts.js"></script>
    <style>
    @media print {
    body * {
        visibility: hidden;
    }
    .print-area, .print-area * {
        visibility: visible;
    }
    .print-area {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
    }
    .cell {
        -webkit-print-color-adjust: exact;
        print-color-adjust: exact;
    }
    .sin-borde {
        border: none;
        outline: none;
        }
}
    </style>
</head>
<body>
    <form action="">
    <div class="print-area">
        <table>
            <tr>
                <td>
                    <img src="mascar2.jpg" alt="mascarLogo" >
                </td>
                <td colspan="2">
                    <center>
                        <b><font size="4">COMERCIALIZADORA ALONDRA S.A</font></b>
                        <br><font size="2">RTN. 16019012518832</font>
                        <br><font size="1">Santa Barbara, Santa Barbara, Barrio Las Galeras, Calle Que Conduce A Universidad Pedagógica.</font>
                        <br><font size="1">comercializadoraalodra@gmial.com</font>
                        <br><font size="2">TEL. 2643-0901 2643-0902</font>
                    </center>
                </td>

                <td>
                    <img src="descarga2.jpg" alt="credibuenoLogo">
                </td>
            </tr>

        
            <tr>
                <td colspan="4" style="background-color: rgb(36, 64, 100);" class="cell">
                    <center><font color="white"><b>DATOS DEL CLIENTE</b></font></center>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);" class="cell">
                    <center><b>Nombre cliente:</b></center>
                </td>
                <td colspan="2" style="background-color: rgb(235, 241, 222);" class="cell">
                    <input type="text" name="Nombre" class="sin-borde" required style="width: 100%; height: 17px; text-align: center; background-color: rgb(235, 241, 222)" />
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);" class="cell">
                <center><b>Identidad o RTN:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(235, 241, 222);" class="cell">
                    <input type="text" class="sin-borde" required style="width: 100%; height: 17px; background-color: rgb(235, 241, 222); text-align: center;" />
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);" class="cell">
                    <center><b>Lugar:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(235, 241, 222);" class="cell">
                    <input type="text" class="sin-borde" required style="width: 100%; height: 17px; background-color: rgb(235, 241, 222);text-align: center;" />
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);" class="cell">
                    <center><b>Municipio:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(235, 241, 222);" class="cell">
                    <input type="text" class="sin-borde" required style="width: 100%; height: 17px; background-color: rgb(235, 241, 222);text-align: center;"/>
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);" class="cell">
                    <center><b>Departamento:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(235, 241, 222);" class="cell">
                    <input type="text" class="sin-borde" required style="width: 100%; height: 17px; background-color: rgb(235, 241, 222);text-align: center;"/>
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);" class="cell">
                    <center><b>Teléfono:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(235, 241, 222);" class="cell">
                    <input type="text" class="sin-borde" required style="width: 100%; height: 17px; background-color: rgb(235, 241, 222);text-align: center;"/>
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);" class="cell">
                    <center><b>Oficio:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(235, 241, 222);" class="cell">
                    <input type="text" class="sin-borde" required style="width: 100%; height: 17px; background-color: rgb(235, 241, 222);text-align: center;"/>
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);" class="cell">
                    <center><b>Estado civil:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(235, 241, 222);" class="cell">
                    <input type="text" class="sin-borde" required style="width: 100%; height: 17px; background-color: rgb(235, 241, 222);text-align: center;"/>
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td colspan="4" style="background-color: rgb(36, 64, 100);" class="cell" class="cell">
                    <center><font color="white"><b>DATOS DEL AVAL</b></font></center>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);" class="cell">
                    <center><b>Nombre de aval:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(235, 241, 222);" class="cell">
                    <input type="text" class="sin-borde" required style="width: 100%; height: 17px; background-color: rgb(235, 241, 222);text-align: center;"/>
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);" class="cell">
                    <center><b>Ident. De aval:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(235, 241, 222);" class="cell">
                    <input type="text" class="sin-borde" required style="width: 100%; height: 17px; background-color: rgb(235, 241, 222);text-align: center;"/>
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td colspan="4" style="background-color: rgb(36, 64, 100);"class="cell">
                    <center><font color="white"><b>DATOS DEL VEHICULO</b></font></center>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(149, 179, 215);" class="cell">
                    <center><b>Marca:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(149, 179, 215);" class="cell">
                    <center><label id="marca"></label></center>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(149, 179, 215);" class="cell">
                    <center><b>Modelo:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(149, 179, 215);" class="cell">
                    <center><label id="modelo"></label></center>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(149, 179, 215);" class="cell">
                    <center><b>Año:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(149, 179, 215);" class="cell">
                <center><label id="año"></label></center>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(149, 179, 215);" class="cell">
                    <center><b>Color:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(149, 179, 215);" class="cell">
                <center><label id="color"></label></center>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);" class="cell">
                    <center><b>Motor:</b></center>
                </td>
                <td colspan="2" style="background-color: rgb(235, 241, 222);" class="cell">
                    <select name="Motos" id="motos" class="sin-borde" required style="width: 100%; height: 17px; background-color: rgb(235, 241, 222);text-align: center;">
                        <?php include 'get_chasis.php'; ?>
                    </select>
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(149, 179, 215);" class="cell">
                    <center><b>Chasis:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(149, 179, 215);" class="cell">
                <center><label id="chasis"></label></center>
                </td>
            </tr>
            <tr>
                <td  colspan="4"></td>
            </tr>  
            <tr>
                <td colspan="4" style="background-color: rgb(36, 64, 100);" class="cell">
                    <center><font color="white"><b>COSTO Y FINANCIAMIENTO</b></font></center>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(149, 179, 215);" class="cell">
                    <center><b>Precio de contado:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(149, 179, 215);" class="cell">
                <center><label id="precio">0</label></center>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);" class="cell">
                    <center><b>Prima:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(235, 241, 222);" class="cell">
                <input type="text" id="prima" class="sin-borde" required style="width: 100%; height: 20px; background-color: rgb(235, 241, 222); text-align: center;" />
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(149, 179, 215);" class="cell">
                    <center><b>Papelería:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(149, 179, 215);" class="cell">
                <center><label id="papeleria">700</label></center>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(149, 179, 215);" class="cell">
                    <center><b>Seguro Total:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(149, 179, 215);" class="cell">
                <center><label id="seguro">0</label></center>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(149, 179, 215);" class="cell">
                    <center><b>Años de seguro:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(149, 179, 215);" class="cell">
                <center><label id="añosSeguro">0</label></center>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(149, 179, 215);" class="cell">
                    <center><b>Saldo a financiar:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(149, 179, 215);" class="cell">
                <center><label id="saldoFinanciar">0</label></center>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);" class="cell">
                    <center><b>Cant. Meses</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(235, 241, 222);" class="cell">
                <input type="text" value="12" class="sin-borde" id="cantidadMeses" required style="width: 100%; height: 20px; background-color: rgb(235, 241, 222);text-align: center;"/>
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);" class="cell">
                    <center><b>Forma de Pago</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(235, 241, 222);" class="cell">
                    <select name="Motos" class="sin-borde" id="tipoPago" required style="width: 100%; height: 17px; background-color: rgb(235, 241, 222);text-align: center;">
                    <option value=""></option>
                    <option value="PAGOS MENSUALES">PAGOS MENSUALES</option>
                    <option value="PAGOS QUINCENALES">PAGOS QUINCENALES</option>
                    <option value="PAGOS SEMANALES">PAGOS SEMANALES</option>
                </select>
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td  colspan="4"></td>
            </tr>
            <tr>
                <td colspan="4" style="background-color: rgb(36, 64, 100);" class="cell">
                    <center><font color="white"><b>PLAN DE PAGO ACEPTADO POR EL CLIENTE</b></font></center>
                </td>
            </tr>
            <tr>
                <td style="background-color: rgb(36, 64, 100);" class="cell">
                    <center><font color="white"><b>Cuotas.</b></font></center>
                </td>
                <td style="background-color: rgb(36, 64, 100);" class="cell">
                    <center><font color="white"><b>Formas de Pagos.</b></font></center>
                </td>
                <td style="background-color: rgb(36, 64, 100);" class="cell">
                    <center><font color="white"><b>Valor De Cuota.</b></font></center>
                </td>
                <td style="background-color: rgb(36, 64, 100);" class="cell">
                    <center><font color="white"><b>Saldo Final.</b></font></center>
                </td>
            </tr>
            <tr>
            <td style="background-color: rgb(149, 179, 215);" class="cell">
                <center><label for="cuotas" id="cuotas">0</label></center>
            </td>
                <td style="background-color: rgb(149, 179, 215);" class="cell">
                    <center><label id="formasPago">0</label></center>
                </td>
                <td colspan="1" style="background-color: rgb(0, 176, 80);" class="cell">
                    <center><label id="valorCuota">0.00</label></center>
                </td>
                <td style="background-color: rgb(149, 179, 215);" class="cell">
                    <center><label id="saldoFinal">0</label></center>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    
                </td>
            </tr>
            <tr>
                <td colspan="4" style="background-color: rgb(149, 179, 215);" class="cell">
                    <center><b>Nota: Cotizacion valida por 8 dias.</b></center>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center>________________________________</center>
                </td>
                <td colspan="2">
                    <center>________________________________</center>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center>Firma Del Cliente</center>
                </td>
                <td colspan="2">
                    <center>(f) Asesor De Ventas</center>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    
                </td>
                <td colspan="1">
                    <center>Nombre:</center>
                </td>
                <td colspan="1">
                    ________________
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    
                </td>
                <td colspan="1">
                    <center>Tel:</center>
                </td>
                <td colspan="1">
                    ________________
                </td>
            </tr>
        </table>
        </div>
        <input type="button" value="Credito" onclick="window.location.href='papeleria.html'">
        <input type="button" value="Crontado" onclick="window.location.href='Contado.html'">
        <button type="button" onclick="window.print();">Imprimir</button>
    </form>
    <script>
        // Obtener la fecha actual
        let today = new Date();

        // Días de la semana y meses en español
        const weekdays = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
        const months = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];

        // Obtener cada parte de la fecha
        let weekday = weekdays[today.getDay()];
        let day = today.getDate();
        let month = months[today.getMonth()];
        let year = today.getFullYear();

        // Construir la fecha formateada
        let formattedDate = `${weekday} ${day} de ${month} del ${year}`;

        // Mostrar la fecha formateada en el elemento div con id "fechaActual"
        document.getElementById('fechaActual').textContent = formattedDate;
    </script>
    <script>
        function printPage() {
            window.print();
        }
    </script>
    <script>
        $(document).ready(function() {
    // Función para obtener y mostrar la información del vehículo
    function obtenerInformacionVehiculo(motor) {
        $.ajax({
            url: 'get_moto_info.php',
            type: 'POST',
            data: { motor: motor },
            success: function(response) {
                var data = JSON.parse(response);
                if (!data.error) {
                    // Obtener el número de meses ingresado
                    var cantidadMeses = parseInt($('#cantidadMeses').val());

                    // Calcular el seguro dependiendo de los meses
                    if (cantidadMeses >= 1 && cantidadMeses <= 18) {
                        var seguro = data.Seguro.toFixed(2); // Seguro normal
                    } else if (cantidadMeses >= 19 && cantidadMeses <= 24) {
                        var seguro = (data.Seguro * 2).toFixed(2); // Doble seguro
                    } else {
                        var seguro = ''; // Si la cantidad de meses no está en ninguno de los rangos
                    }

                    // Mostrar los datos del vehículo y el seguro calculado
                    $('#marca').text(data.Marca);
                    $('#seguro').text(seguro);
                    $('#modelo').text(data.Modelo);
                    $('#año').text(data.Año);
                    $('#color').text(data.Color);
                    $('#chasis').text(data.Chasis);
                    $('#precio').text(data['PRECIO DE VENTA']);
                } else {
                    alert(data.error);
                }
            },
            error: function() {
                alert('Error al obtener los datos del vehículo.');
            }
        });
    }

    // Evento input para el campo cantidadMeses
    $('#cantidadMeses').on('input', function() {
        var motor = $('#motos').val();
        if (motor) {
            obtenerInformacionVehiculo(motor);
        } else {
            // Limpiar etiquetas si no hay selección de motor
            $('#marca').text('');
            $('#seguro').text('');
            $('#modelo').text('');
            $('#año').text('');
            $('#color').text('');
            $('#chasis').text('');
            $('#precio').text('');
        }
    });

    // Evento change para el campo motos
    $('#motos').on('change', function() {
        var motor = $(this).val();
        if (motor) {
            obtenerInformacionVehiculo(motor);
        } else {
            // Limpiar etiquetas si no hay selección de motor
            $('#marca').text('');
            $('#seguro').text('');
            $('#modelo').text('');
            $('#año').text('');
            $('#color').text('');
            $('#chasis').text('');
            $('#precio').text('');
        }
    });
});
    </script>
</body>
</html>