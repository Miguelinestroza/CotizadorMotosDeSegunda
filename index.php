<?php
session_start();
$error = '';
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CrediBueno</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap">
    <link rel="stylesheet" href="./style.css">
    <style>
        /* Estilos para la notificación flotante */
        .notification {
            visibility: hidden;
            min-width: 300px;
            margin-left: -150px;
            background-color: #f44336;
            color: white;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 30px;
            font-size: 17px;
        }

        .notification.show {
            visibility: visible;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @keyframes fadein {
            from {bottom: 0; opacity: 0;} 
            to {bottom: 30px; opacity: 1;}
        }

        @keyframes fadeout {
            from {bottom: 30px; opacity: 1;} 
            to {bottom: 0; opacity: 0;}
        }
    </style>
</head>
<body>
    <div class="screen-1">
        <img src="logo1.png" alt="" width="300" height="100" class="logo">
        <form action="login.php" method="POST">
            <div class="email">
                <label for="email">Usuario</label>
                <div class="sec-2">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="email" required/>
                </div>
            </div>
            <div class="password">
                <label for="password">Clave</label>
                <div class="sec-2">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input class="pas" type="password" name="password" required/>
                </div>
            </div>
            <button type="submit" class="login">Ingresar</button>
        </form>
        <div id="notification" class="notification">
            <?php echo $error; ?>
        </div>
    </div>

    <script>
        // Mostrar la notificación si hay un error
        var error = "<?php echo $error; ?>";
        if (error) {
            var notification = document.getElementById("notification");
            notification.classList.add("show");
            setTimeout(function(){
                notification.classList.remove("show");
            }, 3000);
        }
    </script>
</body>
</html>