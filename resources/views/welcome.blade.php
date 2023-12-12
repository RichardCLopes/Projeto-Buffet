<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Buffet</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="css/style1.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

    </head>
    <body class="antialiased">
        <section class="header">
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
        <div class="text-box">
            <h1>Gosto de Festança Buffet</h1>
            <p>"Sua festa, nosso toque de sofisticação."</p>
            <a href="" class="hero-btn">Nos contate para mais informações</a>
        </div>
    </section>
    <section class="Pacotes">
    <h1>Pacotes que oferecemos</h1>

    <div class="row">
        <div class="pacote">
            <h3>Basic</h3>
            <h5>Pratos Principais:</h5>
            <p>Mini-pizza (margherita, pepperoni, frango)</p>
            <p>Mini Hot-Dog</p>
            <p>Nuggets de frango</p>
            <h5>Acompanhamentos:</h5>
            <p>Batata frita</p>
            <p>Pipoca</p>
            <p>Mini Salada</p>
            <h5>Bebidas:</h5>
            <p>Suco de fruta</p>
            <p>Refrigerante</p>
            <p>Água mineral</p>
        </div>
        <div class="pacote">
            <h3>Standard</h3>
            <h5>Pratos Principais:</h5>
            <p>Esfirra assada</p>
            <p>Frango a passarinho</p>
            <p>Mini-hambúrguer artesanal</p>
            <h5>Acompanhamentos:</h5>
            <p>Batata rústica</p>
            <p>Espetinho</p>
            <p>Legumes ao molho imperial</p>
            <h5>Bebidas:</h5>
            <p>Suco de frutas</p>
            <p>Refrigerante</p>
            <p>Água mineral</p>
            <p>Cerveja</p>
        </div>
        <div class="pacote">
            <h3>Premium</h3>
            <h5>Pratos Principais:</h5>
            <p>Salmão Grelhado</p>
            <p>Risoto de cogumelo</p>
            <p>Bobó de camarão</p>
            <h5>Acompanhamentos:</h5>
            <p>Salada de frutas exóticas</p>
            <p>Tábua de frios</p>
            <p>Bruschettas de tomate cereja e manjericão</p>
            <h5>Bebidas:</h5>
            <p>Suco de frutas</p>
            <p>Refrigerante</p>
            <p>Água mineral</p>
            <p>Cerveja artesanal</p>
            <p>Batidas variadas</p>
        </div>
    </div>

</section>
    </body>
</html>
