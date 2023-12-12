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
    <section class="subheader">
        <nav>
            <a href="{{ url("index1.html") }}"><img src="{{ asset("/Trab/logo.jpeg") }}"></a>
            <div class="nav-link">
               <ul>
                    <li><a href="{{ url("index1.html") }}">Home</a></li>
                    <li><a href="{{ url("") }}">Reservas</a></li>
                    <li><a href="{{ url("sobre.html") }}">Sobre nós</a></li>
                    <li><a href="{{ url("") }}">Espaco</a></li>
                    <li><a href="{{ url("Contatos.html") }}">Contatos</a></li>
                </ul>
            </div>

        </nav>
            <h1>Dúvidas sobre os nossos serviços ?
                Nos contate !
            </h1>

</section>
<section class="tabela">
    <div class="contato">
        <form action="form.php" method="post">
            <input type="text" name="name" placeholder="Insira o seu nome" required>
            <input type="email"name="email" placeholder="Insira o seu email" required>
            <input type="text" name="subject" placeholder="Insira o assunto" required>
            <textarea rows="8" name="message" placeholder="Mensagem"></textarea>
            <button type="submit" class="hero-btn red-btn">Enviar</button>
        </form>
        
    </div>

</section>

<script>
    
</script>

</body>
</html>