<?php
session_start();
// Verifica se o usuário está logado
if (!isset($_SESSION['nome'])) { // Altere 'nome' para a chave que você usa para armazenar os dados de login
    header("Location: login.html"); // Redireciona para a página de login
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drones AIR PLACE</title>
    <link rel="stylesheet" href="estilos_/style_drones.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
          .link_saudacao {
            color: white;
            text-decoration: none;
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
               <div class="logo">
                   <img src="imagens_/drone_banner_white.png" alt="Logo AirPlace">
               </div>

               <div class="search-bar">
                   <input type="text" placeholder="BUSQUE NO AIRPLACE">
                   <button><i class="fas fa-search"></i></button>
                   <a href="venda.php"><button class="btn-vender">Vender</button></a>
               </div>
               <div class="right-info">
                   <div class="right-top">
                       <div class="icon">
                           <span class="location-icon">
                           <i class="fas fa-map-marker-alt"></i>
                       </span>
                       </div>
                       <div class="text-enter">
                           <p>Drones disponíveis na</br> minha região</p>
                       </div>
                   </div>
                   <div class="div_icones" class="dropdown">
                       <p class="icone_carrinho"><i class="fas fa-shopping-cart"></i></p>
                      <div class="dropdown">
                       <a href=""><i class="fas fa-user-circle" id="icone_perfil"></i></a>
                       <a class="link_saudacao" href="#login">Olá, <?php echo isset($_SESSION['nome']) ? $_SESSION['nome'] : 'Visitante'; ?></a>
                       <div class="dropdown-content">
                           <a href="meus_produtos.php" target="_blank"> Meus Produtos</a>
                           <a href="logout.php" class="btn_sair">Sair</a>
                       </div>
                   </div>

                  </div>
                   </div>
               </div>
           </div>
           <nav>
               <ul>
               <li><a href="tela_inicial.php">Home</a></li>
                       <li><a href="sobrenos.php">Sobre nós</a></li>
                       <li><a href="ofertas.php">Ofertas</a></li>
                       <li><a href="cupons.php">Cupons</a></li>
                       <li><a href="airplay.php">Air Play</a></li>
               </ul>
           </nav>
       </header>
       <div class="linha-laranja"></div>

    <main class="main_cupom">
        <div class="titulo_main_cupom">
            <img class="logo_main" src="imagens_/logo_drone_white.png" alt="">
            <p class="p_cupom">CONHEÇA NOSSOS DRONES</p>
        </div>
    </main>
    <main class="main_content">
        <div class="content-container">
            <h1>Por que utilizamos os drones?</h1>
            <p>Na Airplace, estamos redefinindo a maneira como você recebe suas encomendas! Nossos drones de última geração são a espinha dorsal do nosso serviço, projetados para oferecer entregas rápidas, seguras e sustentáveis. Com tecnologia de ponta, cada drone é equipado para navegar de forma eficiente em diversos ambientes, garantindo que seus produtos cheguem até você com agilidade e precisão.</p>
    
            <h2>Explore a nossa frota e descubra as características que tornam nossos drones especiais:</h2>
            <ul>
                <li><strong>Velocidade e Eficiência:</strong> Nossos drones são capazes de realizar entregas em tempo recorde, conectando você ao que há de melhor em comodidade.</li>
                <li><strong>Segurança:</strong> Cada drone é projetado com sistemas de segurança avançados, monitorando o trajeto em tempo real para garantir que suas encomendas cheguem intactas.</li>
                <li><strong>Sustentabilidade:</strong> Com uma operação que prioriza o uso de energia limpa, estamos comprometidos em minimizar nosso impacto ambiental.</li>
            </ul>
        </div>
    </main>
    
    <main class="main_drones">
    <div class="drones-container">
        <h2>Nossos Drones</h2>
        <div class="drone-card">
            <h3>DJI FLYCART</h3>
            <img src="imagens_/drone_front.png" alt="DJI Flycart" class="drone-image">
            <p>Este novo drone traz diversas características inovadoras. É capaz de transportar cargas de até 30 kg utilizando duas baterias, e 40 kg com uma única bateria, embora esta última opção reduza sua autonomia de voo e alcance.</p>
            <p>Empregando o sistema de comunicação e transmissão de imagens eficiente, chamado de O3 da própria DJI, o drone é capaz de cobrir distâncias de até 20 km, podendo se valer da tecnologia 4G para complementar sua comunicação de dados, caso o sinal sofra com interferências, destacando a sua segurança durante o voo, trazendo esse sistema de comunicação reforçado.</p>
        </div>

        <div class="drone-card">
            <h3>JOUAV PH-20</h3>
            <img src="imagens_/drone_voador.png" alt="JOUAV PH-20" class="drone-image">
            <p>O drone multirotor de carga útil pesada PH-20 é um hexacóptero robusto projetado para cargas pesadas, garantindo durabilidade, integração e confiabilidade. Feito de compósitos de fibra de carbono, seu design modular facilita o uso e a manutenção.</p>
            <p>Com seis rotores e inclinação interna do sistema do rotor, oferece estabilidade e resistência ao vento. Equipado com um controlador de voo inteligente e sensores redundantes, assegura voos seguros e confiáveis, prevenindo interferências e oferecendo proteção de emergência.</p>
        </div>
    </div>
</main>

</main>

<section class="secao-monitoramento">
    <div class="content-container">
        <h2>Temos um amplo sistema de monitoramento<br>
        que garante a integridade e segurança dos<br>
        seus produtos até o destino final.</h2>
    </div>
</section>

<footer>
    <div class="footer-links">
        <ul>
            <li><a href="#">Trabalhe conosco</a></li>
            <li><a href="#">Termos e condições</a></li>
            <li><a href="#">Como cuidamos da sua privacidade</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </div>
    <div class="footer-info">
        <p>CNPJ nº 00.000.000/0000-00 / Av. das Nações Unidas, nº 3.203, Bonfim, Osasco/SP - CEP 00000-000 - empresa do grupo AIR PLACE</p>
    </div>
</footer>
  
</body>

</html>
