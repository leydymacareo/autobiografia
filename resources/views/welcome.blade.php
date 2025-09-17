<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Biografía</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #fdf7ff; /* fondo lila muy clarito */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        header {
            background: linear-gradient(135deg, #a18cd1, #fbc2eb);
            color: white;
            padding: 2rem 0;
            text-align: center;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }
        section {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0px 6px 12px rgba(162, 112, 255, 0.2);
        }
        h2 {
            color: #8e44ad;
            font-weight: bold;
            margin-bottom: 1.5rem;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(174, 113, 255, 0.2);
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-title {
            color: #6a0dad;
            font-weight: bold;
        }
        footer {
            background: #a18cd1;
            color: white;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Mi Biografía</h1>
        <p class="lead">Proyecto en Laravel + GitHub</p>
    </header>

    <main class="container my-5">

        <!-- Sección Biografía -->
        <section id="biografia">
            <h2>Biografía</h2>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Nombre</h5>
                            <p class="card-text">Leydy Yohana Macareo Fuentes</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Lugar de Nacimiento y Familia</h5>
                            <p class="card-text">Nací en Floridablanca, Santander. Soy hija de Nelson Macareo Gutierrez y Elsa Fuentes. Tengo dos hermanos mayores, Alexander y Nelson.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Niñez</h5>
                            <p class="card-text">Crecí en La Mesa de los Santos, rodeada del cariño de mis papás y mis hermanos, quienes siempre me apoyaron y me hicieron sentir muy querida. Desde niña fui dedicada en el colegio y me gustaba aprender, pero también disfrutaba mucho de los juegos al aire libre, correr, inventar aventuras y compartir momentos sencillos que llenaban mi infancia de alegría.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Adolescencia</h5>
                            <p class="card-text">En mi adolescencia fui una niña tímida y juiciosa, pero igual disfrutaba compartir con mis amigos, estudiaba en el colegio del pueblo de Los Santos. Me gustaba estar en casa, pero también divertirme con juegos, risas y conversaciones sencillas que hacían que todo fuera especial. Fue una etapa tranquila, de estudio y de buenos momentos rodeada de personas que quería.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Actualidad</h5>
                            <p class="card-text">En la actualidad vivo en Bucaramanga, donde trabajo en una empresa de desarrollo que me ha permitido crecer profesionalmente y poner en práctica lo que me apasiona. Además, estudio Ingeniería de Sistemas en la Universidad Autónoma de Bucaramanga, lo que representa un gran reto pero también una oportunidad para seguir aprendiendo y cumpliendo mis metas. Mi vida gira entre el estudio, el trabajo y el tiempo con mi familia, siempre buscando un equilibrio para seguir avanzando y alcanzar mis sueños.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Aspiraciones y Metas</h5>
                            <p class="card-text">Mis aspiraciones están enfocadas en seguir creciendo profesionalmente, lograr graduarme como Ingeniera de Sistemas y abrirme camino en el mundo laboral con esfuerzo y dedicación. También deseo seguir conociéndome mejor a mí misma, fortalecer mis habilidades y crecer como persona, aprendiendo de cada experiencia para construir un futuro lleno de logros y satisfacción personal.</p>
                        </div>
                    </div>
                </div>

        </section>

        <!-- Sección Experiencia Laboral -->
        <section id="experiencia">
            <h2>Experiencia Laboral</h2>
        </section>

        <!-- Sección Habilidades -->
        <section id="habilidades">
            <h2>Habilidades</h2>
        </section>

        <!-- Sección Academia -->
        <section id="academia">
            <h2>Academia</h2>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Colegio Integrado Los Santos</h5>
                            <p class="card-text">Cursé mis estudios de primaria y bachillerato en el Colegio Integrado Los Santos, donde aprendí mucho y viví experiencias importantes que marcaron mi crecimiento personal. Fue una etapa de amistades, aprendizajes y momentos que siempre recordaré con cariño.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Universidad Autónoma de Bucaramanga – UNAB</h5>
                            <p class="card-text">Actualmente estudio Ingeniería de Sistemas en la Universidad Autónoma de Bucaramanga (UNAB). Esta etapa ha sido un gran reto académico y personal, ya que me ha permitido adquirir nuevos conocimientos, desarrollar proyectos y avanzar en la preparación para mi futuro profesional.</p>
                        </div>
                    </div>
                </div>
        </section>

    </main>

    <footer class="text-center py-4 mt-5">
        <p>&copy; 2025 - Proyecto Biografía con Laravel & GitHub 💜</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
