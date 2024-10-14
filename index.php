<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página informativa sobre Google Académico.">
    <title><?php echo "Google Académico"; ?></title>
    <link rel="stylesheet" href="styles.css"> <!-- Enlace al archivo CSS externo -->
</head>
<body>

<header>
    <h1><?php echo "Google Académico"; ?></h1>
</header>

<!-- Menú jerárquico -->
<nav>
    <ul>
        <li><a href="#que-es">¿Qué es?</a>
            <ul>
                <li><a href="#que-es-definicion">Definición</a></li>
                <li><a href="#que-es-historia">Historia</a></li>
            </ul>
        </li>
        <li><a href="#funciones">Funciones</a>
            <ul>
                <li><a href="#funciones-busqueda">Búsqueda</a></li>
                <li><a href="#funciones-alertas">Alertas</a></li>
            </ul>
        </li>
        <li><a href="#ventajas">Ventajas</a></li>
    </ul>
</nav>

<section id="que-es" class="console">
    <h2>¿Qué es Google Académico?</h2>
    <p><?php echo "Google Académico es un motor de búsqueda especializado en literatura académica y científica. Fue lanzado por Google para ayudar a investigadores, estudiantes y profesores a encontrar artículos, libros, tesis, patentes y documentos científicos de una manera rápida y eficiente."; ?></p>
</section>

<section id="funciones" class="console">
    <h2><?php echo "Funciones de Google Académico"; ?></h2>
    <ul>
        <li><?php echo "Búsqueda de artículos académicos, libros y tesis."; ?></li>
        <li><?php echo "Acceso a fuentes académicas como revistas científicas, congresos y más."; ?></li>
        <li><?php echo "Herramientas de citación automática."; ?></li>
        <li><?php echo "Permite crear alertas para estar al tanto de nuevas publicaciones en áreas específicas."; ?></li>
        <li><?php echo "Generación de métricas de impacto para autores y publicaciones."; ?></li>
    </ul>
</section>

<section id="ventajas" class="console">
    <h2><?php echo "Ventajas de usar Google Académico"; ?></h2>
    <ul>
        <li><?php echo "Acceso gratuito a una amplia gama de artículos y recursos académicos."; ?></li>
        <li><?php echo "Fácil de usar con una interfaz intuitiva."; ?></li>
        <li><?php echo "Posibilidad de filtrar los resultados por año, autor y relevancia."; ?></li>
        <li><?php echo "Permite rastrear citas de trabajos y verificar su impacto académico."; ?></li>
    </ul>
</section>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Página Informativa sobre Google Académico</p>
</footer>

<script>
    // Función para detectar si un elemento está visible en la ventana
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Detecta el scroll y alterna entre mostrar/ocultar las consolas
    window.addEventListener('scroll', function() {
        let consoles = document.querySelectorAll('.console');
        consoles.forEach(function(console) {
            if (isInViewport(console)) {
                // Si la consola está en vista, añado la clase 'active'
                console.classList.add('active');
                console.classList.remove('hidden');
            } else {
                // Si no está en vista, añado la clase 'hidden' y quito la clase 'active'
                console.classList.remove('active');
                console.classList.add('hidden');
            }
        });
    });

    // También reviso al cargar la página si alguna consola está visible
    window.addEventListener('load', function() {
        let consoles = document.querySelectorAll('.console');
        consoles.forEach(function(console) {
            if (isInViewport(console)) {
                console.classList.add('active');
            } else {
                console.classList.add('hidden');
            }
        });
    });
</script>

<script>
    // Función para alternar el menú en dispositivos móviles
    function toggleMenu() {
        var menu = document.getElementById('mobileMenu');
        if (menu.style.display === 'block') {
            menu.style.display = 'none';
        } else {
            menu.style.display = 'block';
        }
    }

    // Oculta el menú en móvil al cargar la página
    window.addEventListener('load', function() {
        if (window.innerWidth <= 768) {
            document.getElementById('mobileMenu').style.display = 'none';
        }
    });

    // Detecta si la ventana se redimensiona (por ejemplo, si cambias la orientación del móvil)
    window.addEventListener('resize', function() {
        if (window.innerWidth <= 768) {
            document.getElementById('mobileMenu').style.display = 'none';
        } else {
            document.getElementById('mobileMenu').style.display = 'block';
        }
    });
</script>

</body>
</html>
