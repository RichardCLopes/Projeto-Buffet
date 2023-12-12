<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Projeto Buffet</title>
    <link rel="stylesheet" href="{{ asset("/style1.css") }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="header">
        <nav>
            <a href="{{ url("index1.html") }}"><img src="{{ asset("/Trab/logo.jpeg") }}"></a>
            <div class="nav-link">
               <ul>
                <li><a href="{{ url("index1.html") }}">Home</a></li>
                <li><a href="{{ url("") }}">Reservas</a></li>
                <li><a href="{{ url("sobre.html") }}">Sobre nós</a></li>
                <li><a href="{{ url("") }}">Espaço</a></li>
                <li><a href="{{ url("Contatos.html") }}">Contatos</a></li>
                </ul>
            </div>

        </nav>
<div class="text-box">
    <h1>Melhor Buffet</h1>
    <p>"Lugar para inserir texto"</p>
    <a href="{{ url("") }}" class="hero-btn">Nos contate para mais informações</a>
</div>
</section>


<section class="Pacotes">
    <h1>Pacotes que nos oferecemos</h1>
    <p>Pacote 1, Pacote 2, Pacote 3</p>

    <div class="row">
        <div class="pacote">
            <h3>Pacote 1</h3>
            <p>Soh comida</p>
        </div>
        <div class="pacote">
            <h3>Pacote 2</h3>
            <p>Soh bebida</p>
        </div>
        <div class="pacote">
            <h3>Pacote 3</h3>
            <p>Comida e bebida</p>
        </div>
    </div>



</section>

<script>
    
</script>

</body>
</html>