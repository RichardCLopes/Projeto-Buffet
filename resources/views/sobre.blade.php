<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Projeto Buffet</title>
    <link rel="stylesheet" href="{{ asset('/style1.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="subheader">
        <nav>
            <a href="{{ url('index1.html') }}"><img src="{{ asset('/Trab/logo.jpeg') }}"></a>
            <div class="nav-link">
               <ul>
                <li><a href="{{ url('index1.html') }}">Home</a></li>
                <li><a href="{{ url('') }}">Reservas</a></li>
                <li><a href="{{ url('sobre.html') }}">Sobre nós</a></li>
                <li><a href="{{ url('') }}">Espaço</a></li>
                <li><a href="{{ url('Contatos.html') }}">Contatos</a></li>
                </ul>
            </div>

        </nav>
            <h1>Sobre nos</h1>
</section>

<!------------------sobre------------>
<section class="sobre-nos">
    <div class="row">
        <div class="about-col">
            <h1>Tudo que você precisa saber sobre nos</h1>
            <p>Nós somos um grupo de buffet criado integralmente para fazer o trabalho do Xastre sobre Desenvolvimento de Sistemas Web </p>
        </div>
        <div class="about-col"></div>
        <img src="{{ asset('/Trab/Serio.jpeg') }}">
    </div>
</section>

<script>
    
</script>

</body>
</html>