<?php
// welcome.php
session_start();

if (!isset($_SESSION['email'])) {
    header("location: index.html");
    exit();
}

echo "Bienvenido " . $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrediBueno</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
</head>
<body>
    <div width="1290px">
        <form action="">
        <table >
            <tr>
                <td>
                    <img src="mascar1.jpg" alt="mascarLogo">
                </td>
                <td colspan="2">
                    <center>
                        <b><font size="5">COMERCIALIZADORA ALONDRA S.A</font></b>
                        <br><font size="2">RTN. 16019012518832</font>
                        <br><font size="1">Santa Barbara, Santa Barbara, Barrio Las Galeras, Calle Que Conduce A Universidad Pedagógica.</font>
                        <br><font size="1">comercializadoraalodra@gmial.com</font>
                        <br><font size="2">TEL. 2643-0901 2643-0902</font>
                    </center>
                </td>
                <td>
                    <img src="credibueno1.jpg" alt="credibuenoLogo">
                </td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td>
                <font size="1"><center><label id="fechaActual">fecha</label></center></font>
                </td>
            </tr>
        
            <tr>
                <td colspan="4" style="background-color: rgb(36, 64, 100);">
                    <center><font color="white"><b>DATOS DEL CLIENTE</b></font></center>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);">
                    <center><b>Nombre cliente:</b></center>
                </td>
                <td colspan="2">
                    <input type="text" name="Nombre" required style="width: 100%; text-align: center; background-color: rgb(235, 241, 222)" />
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);">
                    <center><b>Identidad o RTN:</b></center>
                </td>
                <td  colspan="2">
                    <input type="text" required style="width: 100%; background-color: rgb(235, 241, 222);text-align: center;" />
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);">
                    <center><b>Lugar:</b></center>
                </td>
                <td  colspan="2">
                    <input type="text" required style="width: 100%; background-color: rgb(235, 241, 222);text-align: center;" />
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);">
                    <center><b>Municipio:</b></center>
                </td>
                <td  colspan="2">
                    <input type="text" required style="width: 100%; background-color: rgb(235, 241, 222);text-align: center;"/>
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);">
                    <center><b>Departamento:</b></center>
                </td>
                <td  colspan="2">
                    <input type="text" required style="width: 100%; background-color: rgb(235, 241, 222);text-align: center;"/>
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);">
                    <center><b>Teléfono:</b></center>
                </td>
                <td  colspan="2">
                    <input type="text" required style="width: 100%; background-color: rgb(235, 241, 222);text-align: center;"/>
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);">
                    <center><b>Oficio:</b></center>
                </td>
                <td  colspan="2">
                    <input type="text" required style="width: 100%; background-color: rgb(235, 241, 222);text-align: center;"/>
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);">
                    <center><b>Estado civil:</b></center>
                </td>
                <td  colspan="2">
                    <input type="text" required style="width: 100%; background-color: rgb(235, 241, 222);text-align: center;"/>
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td colspan="4" style="background-color: rgb(36, 64, 100);">
                    <center><font color="white"><b>DATOS DEL AVAL</b></font></center>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);">
                    <center><b>Nombre de aval:</b></center>
                </td>
                <td  colspan="2">
                    <input type="text" required style="width: 100%; background-color: rgb(235, 241, 222);text-align: center;"/>
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);">
                    <center><b>Ident. De aval:</b></center>
                </td>
                <td  colspan="2">
                    <input type="text" required style="width: 100%; background-color: rgb(235, 241, 222);text-align: center;"/>
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td colspan="4" style="background-color: rgb(36, 64, 100);">
                    <center><font color="white"><b>DATOS DEL VEHICULO</b></font></center>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(149, 179, 215);">
                    <center><b>Marca:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(149, 179, 215);">
                    <label for="marca"></label>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(149, 179, 215);">
                    <center><b>Modelo:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(149, 179, 215);">
                    <label for="modelo"></label>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(149, 179, 215);">
                    <center><b>Año:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(149, 179, 215);">
                    <label for="año"></label>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(149, 179, 215);">
                    <center><b>Color:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(149, 179, 215);">
                    <label for="color"></label>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);">
                    <center><b>Motor:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(235, 241, 222);">
                    <select name="Motos" id="" required style="width: 100%; background-color: rgb(235, 241, 222);text-align: center;">
                        <option value=""></option>
                        <option value="BK 150">BK 150</option>
                        <option value="BK 150 2">BK 150 2</option>
                        <option value="CG 110">CG 110</option>
                        <option value="CG 110 2">CG 110 2</option>
                        <option value="VENTO CYCLONE">VENTO CYCLONE</option>
                        <option value="VENTO CYCLONE 2">VENTO CYCLONE 2</option>
                        <option value="DM 200">DM 200</option>
                        <option value="GSR 4">GSR 4</option>
                        <option value="GXT 200">GXT 200</option>
                        <option value="GXT 250">GXT 250</option>
                        <option value="HONDA TORNADO">HONDA TORNADO</option>
                        <option value="ITALIKA BIT">ITALIKA BIT</option>
                        <option value="ITALIKA FT 150">ITALIKA FT 150</option>
                        <option value="HONDA NAVI 110">HONDA NAVI 110</option>
                        <option value="PULSAR 125 NS">GENESIS MONTAÑESA</option>
                        <option value="PULSAR 150">PULSAR 150</option>
                        <option value="PULSAR 180">PULSAR 180</option>
                        <option value="RYDER 200">RYDER 200</option>
                        <option value="XBLADE">XBLADE</option>
                        <option value="XR 150">XR 150</option>
                        <option value="XR 190">XR 190</option>
                        <option value="ZX 200L">ZX 200L</option>
                    </select>
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(149, 179, 215);">
                    <center><b>Chasis:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(149, 179, 215);">
                    <label for="chasis"></label>
                </td>
            </tr>
            <tr>
                <td  colspan="4"></td>
            </tr>  
            <tr>
                <td colspan="4" style="background-color: rgb(36, 64, 100);">
                    <center><font color="white"><b>COSTO Y FINANCIAMIENTO</b></font></center>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(149, 179, 215);">
                    <center><b>Precio de contado:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(149, 179, 215);">
                    <label for="precio"></label>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);">
                    <center><b>Prima:</b></center>
                </td>
                <td  colspan="2">
                    <input type="text" required style="width: 100%; background-color: rgb(235, 241, 222);text-align: center;"/>
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(255, 192, 0);">
                    <center><b>Prima Sugerida:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(255, 192, 0);">
                    <label for="primaSugerida"></label>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(149, 179, 215);">
                    <center><b>Papelería:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(149, 179, 215);">
                    <label for="papeleria">700</label>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(149, 179, 215);">
                    <center><b>Seguro Total:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(149, 179, 215);">
                    <label for="seguro"></label>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(149, 179, 215);">
                    <center><b>Años de seguro:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(149, 179, 215);">
                    <label for="añosSeguro"></label>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(149, 179, 215);">
                    <center><b>Saldo a financiar:</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(149, 179, 215);">
                    <label for="saldoFinanciar"></label>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);">
                    <center><b>Cant. Meses</b></center>
                </td>
                <td  colspan="2">
                    <input type="text" required style="width: 100%; background-color: rgb(235, 241, 222);text-align: center;"/>
                </td>
                <td colspan="1">
                    <font color="red"><b>Digitar</b></font>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="background-color: rgb(196, 215, 155);">
                    <center><b>Forma de Pago</b></center>
                </td>
                <td  colspan="2" style="background-color: rgb(235, 241, 222);">
                    <select name="Motos" id="" required style="width: 100%; background-color: rgb(235, 241, 222);text-align: center;">
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
                <td colspan="4" style="background-color: rgb(36, 64, 100);">
                    <center><font color="white"><b>PLAN DE PAGO ACEPTADO POR EL CLIENTE</b></font></center>
                </td>
            </tr>
            <tr>
                <td style="background-color: rgb(36, 64, 100);">
                    <center><font color="white"><b>Cuotas.</b></font></center>
                </td>
                <td style="background-color: rgb(36, 64, 100);">
                    <center><font color="white"><b>Formas de Pagos.</b></font></center>
                </td>
                <td style="background-color: rgb(36, 64, 100);">
                    <center><font color="white"><b>Valor De Cuota.</b></font></center>
                </td>
                <td style="background-color: rgb(36, 64, 100);">
                    <center><font color="white"><b>Saldo Final.</b></font></center>
                </td>
            </tr>
            <tr>
                <td style="background-color: rgb(149, 179, 215);">
                    <center><label for="coutas">0</label></center>
                </td>
                <td style="background-color: rgb(149, 179, 215);">
                    <center><label for="formasPago">0</label></center>
                </td>
                <td style="background-color: rgb(0, 176, 80);">
                    <center><label for="valorCuota">0</label></center>
                </td>
                <td style="background-color: rgb(149, 179, 215);">
                    <center><label for="saldoFinal">0</label></center>
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
                <td colspan="4" style="background-color: rgb(149, 179, 215);">
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
    </form>
    </div>
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
</body>
</html>