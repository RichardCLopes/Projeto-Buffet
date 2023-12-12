<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Buffet</title>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="subheader">
        <nav>
        <a href="{{ url('/') }}"><img src="img/logo.png"></a>
            <div class="nav-link">
               <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/') }}">Reservas</a></li>
                    <li><a href="{{ url('/sobre') }}">Sobre nós</a></li>
                    <li><a href="{{ url('/contatos') }}">Contato</a></li>
                </ul>
            </div>
            <div class="loginreg">
                    @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                            @endauth
                           </div>
                     @endif
            </div>
        </nav>
            <h1>Dúvidas sobre os nossos serviços ?
                Nos contate !
            </h1>

</section>
<section class="tabela">
    <div class="contato">
        <ul>
            <li><strong>Telefone:</strong> (19) 1234-5678</li>
            <li><strong>WhatsApp:</strong> (19) 98765-4321</li>
            <li><strong>E-mail:</strong> contato@festanca.com</li>
            <li><strong>Endereço:</strong> Rua Arantes do Nascimento, 1326, Jardim Boa Esperança - Campinas - SP</li>
        </ul>     
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1093.2153669112859!2d-47.05355541430335!3d-22.834918713938205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1702352164857!5m2!1spt-BR!2sbr" width="50%" height="500" style="border:2px solid gray;" allowfullscreen="" loading="lazy" breferrerpolicy="no-referrer-when-downgrade" class="mapa"></iframe>  
    </div>

</section>

<script>
    
</script>

</body>
</html>