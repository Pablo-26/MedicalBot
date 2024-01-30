<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <section class="logo">
        <img src="images/logosTM.jpg" alt="">
    </section>
    
    <section class="container">
        <header class="cabeceraPrincipal">
            <article class="menuDB">
                <a href="#" id="cuentaDropdown1" onclick="toggleDropdown()">
                    <i class="fa-solid fa-bars"></i>
                </a>

                <aside class="cuentaDropdown1">
                    <ul>
                        <li><a href="#">Citas</a></li>
                        <li><a href="index.php">Solicitar asistencia</a></li>
                        <li><a href="#">Revision Medica</a></li>
                    </ul>
                </aside>
            </article>

            <article class="menu">
                <nav>
                    <a href="">Actualidad y prevencion</a>
                    <a href="index.php">Servicios</a>
                    <a href=""><i class="fa-solid fa-right-from-bracket"></i>Salir</a>
                </nav>
            </article>
        </header>

        <section class="chat">
            <img src="images/robotina.png" alt="">

            <section class="bot">
                <iframe src="https://copilotstudio.microsoft.com/environments/Default-6eeb49aa-436d-43e6-becd-bbdf79e5077d/bots/cr70a_medicalBot/webchat?__version__=2" 
                    frameborder="0" style="width: 100%; height: 100%;"></iframe>
            </section>
        </section>
    </section>
    
    <script>
        function toggleDropdown() {
            var dropdown = document.querySelector('.cuentaDropdown1');
            dropdown.style.display = (dropdown.style.display === 'none' || dropdown.style.display === '') ? 'block' : 'none';
        }
    </script>
    
</body>
</html>