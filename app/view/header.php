<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="theme-color" content="#ff500f"> 
        <meta name="apple-mobile-web-app-status-bar-style" content="#ff500f">
        <meta name="msapplication-navbutton-color" content="#ff500f">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title; ?></title>
        <link rel="stylesheet" href="<?= STYLESHEET.'security_copy.php'; ?>">
        <link rel="stylesheet" href="<?= OTHERS.'css/css/all.css'; ?>">
    </head>
    <body>
        <header class="header_template" id="home" style="background-image: url('<?= $dados['json']['HOME']['SECTION_UM']['imagem_de_fundo']; ?>');">
            <div class="big_filter">
                <div class="header_top_line">
                    <div class="logo">
                        <a href="#">
                            <img src="<?= $dados['json']['configuracoes']['website']['link_logo_web_site']; ?>" alt="">
                        </a>
                    </div>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#wrok">Como funciona?</a></li>
                        <li><a href="#faq">Dúvidas frequentes</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                    <p class="call_menu"><i class="fas fa-bars"></i></p>
                </div>
                <!-- FIXED HEADER -->
                    <div class="header_top_line" id="fixed_header">
                        <div class="logo">
                            <a href="#">
                                <img src="<?= $dados['json']['configuracoes']['website']['link_logo_web_site']; ?>" alt="">
                            </a>
                        </div>
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#wrok">Como funciona?</a></li>
                            <li><a href="#faq">Dúvidas frequentes</a></li>
                            <li><a href="#contato">Contato</a></li>
                        </ul>
                        <p class="call_menu"><i class="fas fa-bars"></i></p>
                    </div>
                <div class="banner_header">
                    <div class="left_side">
                        <h1><?= $dados['json']['HOME']['SECTION_UM']['titulo_principal']; ?></h1>
                        <p><?= $dados['json']['HOME']['SECTION_UM']['text_sub']; ?></p>
                    </div>
                    <div class="right_side">
                        <div class="container_simulation">
                            <div class="header_simulation">
                                <p>VALOR TOTAL</p>
                                <small>Quanto precisa ?</small>
                            </div>
                            <div class="valor_emprestimo">
                                <div class="submenu">
                                    <h1>R$</h1>
                                    <input type="text" id="valor" value="0,00">
                                </div>
                                <small>Valor mínimo de crédito pode variar de acordo com o convênio selecionado.</small>
                            </div>
                            <input type="range" id="range" tabindex="-1" min="0" max="<?= $dados['json']['HOME']['SECTION_UM']['valor_max_to_simulation']; ?>" value="0">
                            <div class="range_bar">
                                <span class="bar_global" id="bar_global">
                                    <div class="bar_interno" id="bar_intern"></div>
                                    <div class="btn" id="btn"></div>
                                </span>
                            </div>
                            <div class="parcelas">
                                <div class="header_parcelas">
                                    <p style="margin-top: 0px;">Quantas parcelas ?</p>
                                </div>
                                <ul>
                                    <li>
                                        <button class="button">36</button>
                                    </li>
                                    <li>
                                        <button class="button">48</button>
                                    </li>
                                    <li>
                                        <button class="button">60</button>
                                    </li>
                                    <li>
                                        <button class="button">72</button>
                                    </li>
                                    <li>
                                        <button class="button">84</button>
                                    </li>
                                    <li>
                                        <button class="button">96</button>
                                    </li>
                                </ul>
                                <div class="valor_parcelado">
                                    <p style="margin-top: 20px;">Valor da parcela em <span id="parcela"></span>x</p>
                                    <span class="max">
                                        <h1>R$ </h1>
                                        <h1 id="valor_par">0,00</h1>
                                    </span>
                                    <input type="hidden" id="taxa_am" value="<?= $dados['json']['HOME']['SECTION_UM']['juros_am_to_simulation']; ?>">
                                    <small>Taxa de juros <span id="text_juros"></span> a.m</small>
                                </div>
                                <a href="<?= $dados['json']['configuracoes']['redes_sociais']['whatsapp']; ?>"><i class="fab fa-whatsapp"></i> SIMULAR EMPRESTIMO</a>
                                <p>Para calcular sua taxa real, clique em <strong>SIMULAR EMPRESTIMO</strong> e finalize seu pedido sem compromisso.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="close" id="close">
                <div class="modal_menu" id="menu">
                    <div class="menu_filter">
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#wrok">Como funciona?</a></li>
                            <li><a href="#faq">Dúvidas frequentes</a></li>
                            <li><a href="#contato">Contato</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>   