<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Página súper divertida!</title>
    <style>
        body {
            /* Cambia el color de fondo y texto de forma aleatoria */
            background-color: <?php echo getRandomColor(); ?>;
            color: <?php echo getRandomColor(); ?>;
            text-align: center;
            font-family: Arial, sans-serif;
            padding: 20px;
            overflow: hidden; /* Evita scroll si el emoji se sale de pantalla */
        }
        h1 {
            font-size: 3em;
        }
        #reloj {
            font-size: 2em;
            margin-top: 20px;
        }
        .emoji {
            position: absolute;
            font-size: 4em;
            animation: moveEmoji 5s infinite;
        }

        /* Animación del emoji */
        @keyframes moveEmoji {
            0% { transform: translate(0, 0); }
            25% { transform: translate(100px, 100px); }
            50% { transform: translate(-100px, -50px); }
            75% { transform: translate(50px, 50px); }
            100% { transform: translate(0, 0); }
        }
    </style>
</head>
<body>
    <h1>
        <?php
        // Mensaje divertido según la hora del día
        $hour = date("H");
        
        if ($hour < 12) {
            echo "¡Buenos días!";
        } elseif ($hour < 18) {
            echo "¡Buenas tardes!";
        } else {
            echo "¡Buenas noches!";
        }
        ?>
    </h1>

    <p>
        <?php
        // Agrega un mensaje adicional aleatorio
        $messages = [
            "¡Espero que tengas un día fantástico!",
            "¿Listo para una aventura?",
            "¡El café sabe mejor después de las 3!",
            "¡Sonríe, la vida es corta!",
            "¡Algo genial te espera hoy!"
        ];

        // Elige un mensaje aleatorio
        echo $messages[array_rand($messages)];
        ?>
    </p>

    <!-- Reloj en tiempo real -->
    <div id="reloj"></div>

    <?php
    // Lista de emojis con sus rutas (código HTML para emojis)
    $emojis = [
        '😎', // Cool face
        '😃', // Grinning face
        '😂', // Face with tears of joy
        '🥳', // Party face
        '😜', // Winking face with tongue
        '😇', // Smiling face with halo
        '🤓', // Nerd face
        '🥰', // Smiling face with hearts
        '😱', // Face screaming in fear
        '💪', // Flexed biceps
        '🍕', // Pizza
        '🎉', // Party popper
        '🌟', // Glowing star
        '❤️', // Red heart
        '👻'  // Ghost
    ];

    // Función para generar un color aleatorio
    function getRandomColor() {
        $randomColor = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
        return $randomColor;
    }

    // Función para crear emojis aleatorios en la página
    function createRandomEmojis($emojis, $count = 10) {
        for ($i = 0; $i < $count; $i++) {
            $randomEmoji = $emojis[array_rand($emojis)];
            $randomX = rand(0, 90); // Dejar espacio para el emoji
            $randomY = rand(0, 90); // Dejar espacio para el emoji
            echo "<div class='emoji' style='left: {$randomX}%; top: {$randomY}%;'>$randomEmoji</div>";
        }
    }

    createRandomEmojis($emojis);
    ?>

    <script>
        // Actualizar el reloj en tiempo real
        function actualizarReloj() {
            var ahora = new Date();
            var horas = ahora.getHours().toString().padStart(2, '0');
            var minutos = ahora.getMinutes().toString().padStart(2, '0');
            var segundos = ahora.getSeconds().toString().padStart(2, '0');
            document.getElementById('reloj').innerHTML = horas + ':' + minutos + ':' + segundos;
        }

        // Actualiza el reloj cada segundo
        setInterval(actualizarReloj, 1000);
        actualizarReloj();
    </script>
</body>
</html>
