<?php include("controladores/verificador-permanencia.php");?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Dev. Watch</title> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <span class="logo_name">Dev. Watch</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="cadastro-produto.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Produto</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li>
                    <a href="controladores/logout.php">
                        <i class='bx bx-log-out bx-flip-horizontal'></i>
                        <span class="link-name">Logout</span>
                    </a>
                </li>   
                <li class="mode">
                    <a href="#">
                        <i class='bx bx-moon change-theme'></i>  
                        <span class="link-name">Dark Mode</span>
                    </a>
                    <div class="mode-toggle"><span class="switch"></span></div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Pesquisar">
            </div>
            
            <img src="assets/img/icon_admin.png" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class='bx bx-shopping-bag'></i>
                        <span class="text">Vendas</span>
                        <span class="number">178</span>
                    </div>
                    <div class="box box2">
                        <i class='bx bx-chat'></i>                        
                        <span class="text">Mensagens</span>
                        <span class="number">25</span>
                    </div>
                    <div class="box box3">
                        <i class='bx bx-dollar'></i>
                        <span class="text">Faturamento</span>
                        <span class="number">R$193.500</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Atividades Recentes</span>
                </div>

                <div class="activity-data">
                    <div class="data">
                        <span class="data-title">Protocolo</span>
                        <span class="data-list">20220609-21</span>
                        <span class="data-list">20220212-345</span>
                        <span class="data-list">20211210-843</span>
                    </div>
                    <div class="data">
                        <span class="data-title">Usuario</span>
                        <span class="data-list">Junior@Santos15</span>
                        <span class="data-list">AugustoMaia</span>
                        <span class="data-list">Otavio@augustoTiberio</span>
                    </div>
                    <div class="data">
                        <span class="data-title">Total</span>
                        <span class="data-list">R$29.990</span>
                        <span class="data-list">R$54.700</span>
                        <span class="data-list">R$108.900</span>
                    </div>
                    <div class="data">
                        <span class="data-title">Inicio</span>
                        <span class="data-list">09/06/2022</span>
                        <span class="data-list">12/02/2022</span>
                        <span class="data-list">10/12/2021</span>
                    </div>
                    <div class="data">
                        <span class="data-title">Situação</span>
                        <span class="data-list">Transito</span>
                        <span class="data-list">Entregue</span>
                        <span class="data-list">Entregue</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/main.js"></script>
</body>
</html>