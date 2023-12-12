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
            <h1>Sobre nós</h1>
    </section>

<!------------------sobre------------>
<section class="sobre-nos">
    <div class="row">
        <div class="about-col">
            <h1>História</h1>
            <p>Bem-vindo ao "Gosto de Festança" - onde cada celebração se transforma em uma experiência gastronômica inesquecível.</p>
            <p>Nossa história começa em uma pequena cozinha, onde a paixão pela culinária se misturava com o amor por momentos especiais. Dois chefs, Isabel e Gustavo, uniram forças para criar algo verdadeiramente único. Inspirados por sabores autênticos, criatividade desenfreada e uma dedicação inabalável ao serviço excepcional, nasceu o "Gosto de Festança".</p>
            <p>Isabel, uma mestre na arte da confeitaria, trouxe consigo receitas familiares e um toque de doçura que tornou nossos eventos ainda mais especiais. Seus bolos meticulosamente decorados e sobremesas irresistíveis tornaram-se a marca registrada do "Gosto de Festança".</p>
            <p>Gustavo, um explorador de sabores e entusiasta da gastronomia, trouxe a experiência de viajar pelo mundo culinário. Ele não apenas domina pratos tradicionais, mas também adora criar combinações inovadoras que surpreendem e encantam o paladar.</p>
            <p>O "Gosto de Festança" nasceu da crença de que cada evento, seja um casamento, aniversário ou uma simples reunião familiar, merece uma experiência gastronômica excepcional. O buffet não é apenas sobre alimentar corpos; é sobre nutrir almas e criar memórias que duram para sempre.</p>
            <p>Nossa equipe, composta por chefs apaixonados, coordenadores de eventos dedicados e uma equipe de serviço impecável, trabalha incansavelmente para garantir que cada detalhe seja perfeito. Do primeiro contato à última mordida, estamos comprometidos em superar suas expectativas e tornar sua festa verdadeiramente única.</p>
            <p>No "Gosto de Festança", não apenas celebramos ocasiões especiais, mas também celebramos a vida, a amizade e a alegria que a boa comida e boa companhia podem proporcionar. Junte-se a nós nessa jornada deliciosa, onde cada festa se torna uma festança, e cada momento é digno de saborear.</p>
        </div>
        <div class="about-col"></div>
    </div>
</section>

<script>
    
</script>

</body>
</html>