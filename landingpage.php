<?php
$file = basename($_SERVER['PHP_SELF']); // your file name 
$last_modified_time = filemtime($file);
$etag = md5_file($file);

header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified_time) . " GMT");
header("Etag: $etag");
?>

<?php include 'header.php'; ?>

<section class="nav relative">
    <img src="assets/img/landing-bg-header.jpg" class="widthfull nav-banner-desktop">
    <img src="assets/img/landing-bg-header-mobile.png" class="widthfull nav-banner-mobile">
    <div class="nav-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6 nav-left">
                    <img src="assets/img/vita.png" class="nav-vita">
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6 nav-right">
                    <a href="#0" class="text-uppercase nav-button colorPurple bold">
                        acessar portal vitaone <img src="assets/img/icon-window.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main">
    <div class="container landing-cliente-vendedores">
        <div class="row equipe-view">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
                <div class="colorPurple black text-uppercase">
                    contato cliente
                </div>
                <div class="equipe flex justifycenter margin_1_top">
                    <img src="assets/img/icon-user.png" class="cliente-img">

                </div>
                <div class="equipe-contato">
                    <div class="bold">
                        Mauricio Koji
                    </div>
                    <div>
                        <a href="mailto:mauriciokoji@msn.com">
                            mauriciokoji@msn.com
                        </a>
                    </div>
                    <div>
                        (11) 3336-3645
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center margin_2_top_mobile">
                <div class="text-uppercase colorPurple black">
                    contato comercial vita
                </div>
                <div class="equipe flex margin_1_top justifycenter">
                    <img src="assets/img/qrcode.png" alt="">
                    <img src="assets/img/catarina.png" alt="">
                </div>
                <div class="equipe-contato">
                    <div class="bold">
                        Catharina Brandão
                    </div>
                    <div>
                        <a href="mailto:mauriciokoji@msn.com">
                            cbrandao@vitait.com
                        </a>
                    </div>
                    <div>
                        (00) 99999-000
                    </div>
                </div>
                <div class="flex justifycenter">
                    <a href="#0" class="landing-regex flex colorPurple text-uppercase bold">
                        <img src="assets/img/icon-webex.png" alt="">
                        contato via webex
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center margin_2_top_mobile">
                <div class="text-uppercase colorPurple black">
                    solic vita
                </div>
                <div class="equipe flex justifycenter margin_1_top">
                    <img src="assets/img/qrcode.png" alt="">
                    <img src="assets/img/fernando.png" alt="">
                </div>
                <div class="equipe-contato">
                    <div class="bold">
                        Fernando F. Furman Filho
                    </div>
                    <div>
                        <a href="mailto:mauriciokoji@msn.com">
                            cbrandao@vitait.com
                        </a>
                    </div>
                    <div>
                        (00) 99999-0000
                    </div>
                </div>
                <div class="flex justifycenter">
                    <a href="#0" class="landing-regex flex colorPurple text-uppercase bold">
                        <img src="assets/img/icon-webex.png" alt="">
                        contato via webex
                    </a>
                </div>
            </div>
        </div>

        <div class="row equipe-view margin_2_top_mobile">
            <div class="landing-vita equipe text-center justifycenter">
                <a href="#0">
                    <img src="assets/img/qrcode.png" class="">
                    <img src="assets/img/vita-colorida.png" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

<section class="sectionStart relative">
    <img src="assets/img/landing-bg-contato.jpg" class="widthfull hideMobile">
    <img src="assets/img/landing-bg-contato-mobile.jpg" class="widthfull showMobile">
    <div class="proposta full_absolute">
        <div class="proposta-content flex justifycenter">
            <div>
                <div class="cliente-name-destaque black">
                    Mauricio,
                </div>
                <div class="proposta-apresentacao bold">
                    Essa proposta contém as melhores soluções para a sua transformação digital.
                </div>
                <p class="margin_2_top">
                    Somos uma empresa com DNA Digital, atuando como um organismo inteligente
                    que agiliza e simplifica o processo de transformação dos negócios.
                </p>
                <p>
                    Oferecemos soluções que se adequam
                    ao momento da sua transformação digital, com tudo que você precisa para ir mais
                    longe com estabilidade e segura
            </div>
        </div>
    </div>
</section>

<section class="bgPurpleDark landing-chamada">
    <div class="container text-center bold">
        <p>
            Em seguida você encontrará os detalhes da sua proposta, caso tenha dúvidas, basta clicar no ícone do Webex Teams para conversar com o seu Account Manager.
        </p>
        <p>
            Para nós, é um prazer te atender.
        </p>
        <div class="row landing-chamada-img">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
                <img src="assets/img/vita.png" class="">
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12 nopadding">
                <div class="flex justifycenter">
                    <a href="#0" class="landing-regex flex colorPurple text-uppercase bold landing-chamada-button">
                        <img src="assets/img/icon-webex.png" alt="">
                        contato via webex
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12 flex justifycenter landing-chamada-redes">
                <div>
                    <a href="#0" target="_blank">
                        <img src="assets/img/redes-linkedin-white.png" alt="">
                    </a>
                    <a href="#0" target="_blank">
                        <img src="assets/img/redes-instagram-white.png" alt="">
                    </a>
                    <a href="#0" target="_blank">
                        <img src="assets/img/redes-facebook-white.png" alt="">
                    </a>
                    <a href="#0" target="_blank">
                        <img src="assets/img/redes-twitter-white.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main">
    <div class="container">
        <div class="landing-main-nav">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 margin_2_top_mobile ">
                    <div class="nav-text">
                        <div class="text-uppercase black">
                            dados de faturamento do cliente
                        </div>
                        <div>
                            KIM NETO IND E COM DE PANIFICACAO LTDA
                        </div>
                        <div>
                            02.867.469/0001-58

                        </div>
                        <div>
                            Avenida Argentina - 7
                        </div>
                        <div>
                            Carapicuíba - Carapicuíba - 06342-180
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6  margin_2_top_mobile">
                    <div class="nav-text">
                        <div class="text-uppercase black">
                            dados de entrega do cliente
                        </div>
                        <div>
                            KIM NETO IND E COM DE PANIFICACAO LTDA
                        </div>
                        <div>
                            02.867.469/0001-58

                        </div>
                        <div>
                            Avenida Argentina - 7
                        </div>
                        <div>
                            Carapicuíba - Carapicuíba - 06342-180
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="landingDivider"></div>
            <div class="flex justifycenter itens-webex">
                <a href="#0" class="landing-regex flex colorPurple text-uppercase bold landing-chamada-button">
                    <img src="assets/img/icon-webex.png" alt="">
                    contato via webex
                </a>
            </div>
        </div>


        <div class="main-title colorPurple text-uppercase black sectionStart">
            1. produtos
        </div>

        <div class="table-responsive margin_2_top">
            <table class="table table-hover table-main-resumo main-table">
                <thead class="bold">
                    <tr class="text-uppercase">
                        <th scope="col" class="">item</th>
                        <th scope="col" class="">grupo</th>
                        <th scope="col" class="">unid fat</th>
                        <th scope="col">part number</th>
                        <th scope="col">descricao</th>
                        <th scope="col" class="table-head-small">site fat</th>
                        <th scope="col" class="table-head-small">site entrega</th>
                        <th scope="col" class="table-head-small">tipo</th>
                        <th scope="col" class="table-head-small">qtd</th>
                        <th scope="col" class="table-head-small">moeda</th>
                        <th scope="col" class="table-head-small">prazo</th>
                        <th scope="col">valor unit</th>
                        <th scope="col">sub total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td>VITA IT (SP)</td>
                        <td>CON-SNT-C920L48P-BR</td>
                        <td>Catalyst 9200L 48-port
                            PoE+, 4 x 10G, Network
                            Advantage</td>
                        <td></td>
                        <td></td>
                        <td>HW</td>
                        <TD>3</TD>
                        <TD>R$</TD>
                        <td>60</td>
                        <td>18,224.58</td>
                        <td>18,224.58</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td>VITA IT (SP)</td>
                        <td>CON-SNT-C920L48P-BR</td>
                        <td>Catalyst 9200L 48-port
                            PoE+, 4 x 10G, Network
                            Advantage</td>
                        <td></td>
                        <td></td>
                        <td>HW</td>
                        <TD>3</TD>
                        <TD>R$</TD>
                        <td>60</td>
                        <td>18,224.58</td>
                        <td>18,224.58</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td>VITA IT (SP)</td>
                        <td>CON-SNT-C920L48P-BR</td>
                        <td>Catalyst 9200L 48-port
                            PoE+, 4 x 10G, Network
                            Advantage</td>
                        <td></td>
                        <td></td>
                        <td>HW</td>
                        <TD>3</TD>
                        <TD>R$</TD>
                        <td>60</td>
                        <td>18,224.58</td>
                        <td>18,224.58</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row nomargin">
            <div class="price-table sectionStart bold text-uppercase">
                <div class="row nomargin">
                    <div class="col-sm-8 col-md-8 col-lg-10 col-xs-10">
                        total hw imp us$
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-2 col-xs-2">
                        0,00
                    </div>
                </div>
                <div class="row nomargin">
                    <div class="col-sm-8 col-md-8 col-lg-10 col-xs-10">
                        total gar. imp us$
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-2 col-xs-2">
                        0,00
                    </div>
                </div>
                <div class="row nomargin">
                    <div class="col-sm-8 col-md-8 col-lg-10 col-xs-10">
                        total hw nac (R$)
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-2 col-xs-2">
                        0,00
                    </div>
                </div>
                <div class="row nomargin">
                    <div class="col-sm-8 col-md-8 col-lg-10 col-xs-10">
                        total gar. nac (R$)
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-2 col-xs-2">
                        0,00
                    </div>
                </div>
                <div class="row nomargin bgPurpleDark" style="color: white">
                    <div class="col-sm-8 col-md-8 col-lg-10 col-xs-10">
                        total geral (R$)
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-2 col-xs-2">
                        0,00
                    </div>
                </div>
                <span class="colorPurpleDark">
                    *Valores em dólar serão convertidos pela PTAX no dia do faturamento
                </span>
            </div>

        </div>

        <div class="row">
            <div class="landingDivider"></div>
            <div class="flex justifycenter itens-webex">
                <a href="#0" class="landing-regex flex colorPurple text-uppercase bold landing-chamada-button">
                    <img src="assets/img/icon-webex.png" alt="">
                    contato via webex
                </a>
            </div>
        </div>

        <div class="main-title colorPurple text-uppercase black">
            serviços - advanced services
        </div>

        <div class="table-responsive margin_2_top">
            <table class="table table-hover table-main-resumo main-table">
                <thead class="bold">
                    <tr class="text-uppercase">
                        <th scope="col" class="">item</th>
                        <th scope="col" class="">grupo</th>
                        <th scope="col" class="">serviços</th>
                        <th scope="col">descricao</th>
                        <th scope="col">sub total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td>Instalação e configuração</td>
                        <td>Instalação e configuração</td>
                        <td>18,224.58</td>
                    </tr>
                </tbody>
            </table>
        </div>



        <div class="row nomargin">
            <div class="price-table sectionStart bold text-uppercase">

                <div class="row nomargin bgPurpleDark" style="color: white">
                    <div class="col-sm-8 col-md-8 col-lg-10 col-xs-10">
                        total serviços (R$)
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-2 col-xs-2">
                        0,00
                    </div>
                </div>
            </div>
        </div>

        <div class="landingDivider"></div>


        <div class="main-title colorPurple sectionStart text-uppercase black">
            condições comerciais
        </div>

        <div class="main-subtitle margin_2_vert colorPurple text-uppercase bold">
            produtos
        </div>

        <div class="produto-item">
            *Itens com procedência importada terão seus valores reajustados no momento do faturamento, conforme a PTAX do dia.
        </div>
        <div class="margin_2_vert colorBlack">
            <div class="faturamento bold">
                Dados de Faturamento
            </div>
            <div class="faturamento-text">
                Itens: 1,2,3 .Serão faturados por: VITA IT (SP) - VITA IT COMERCIO E SERVICOS DE SOLUCOES EM TI LTDA. - CNPJ: 18.261.828/0001-69 - IE: 142.261.828/0001- 69 - Rua Butantã, 434 - 7o andar - Pinheiros | São Paulo/SP - CEP: 04089-014
                Itens: 4 .Serão faturados por: VITA IT (ES) - VITA IT COMERCIO E SERVICOS DE SOLUCOES EM TI LTDA. - CNPJ: 18.261.828/0002-40 - IE: 082.982.55-4 - Av.Cem, s/n° - Mod 1 - Qra 1 - Piso 2 - SLA 1 - FASSIM - Serra/ES - CEP: 29161-384
            </div>
        </div>

        <div class="main-subtitle margin_2_vert colorPurple text-uppercase bold">
            serviços
        </div>
        <div class="margin_2_vert colorBlack">
            <div class="faturamento bold">
                Dados de Faturamento
            </div>
            <div class="faturamento-text">
                Itens: 1,2,3 .Serão faturados por: VITA IT (SP) - VITA IT COMERCIO E SERVICOS DE SOLUCOES EM TI LTDA. - CNPJ: 18.261.828/0001-69 - IE: 142.261.828/0001- 69 - Rua Butantã, 434 - 7o andar - Pinheiros | São Paulo/SP - CEP: 04089-014
                Itens: 4 .Serão faturados por: VITA IT (ES) - VITA IT COMERCIO E SERVICOS DE SOLUCOES EM TI LTDA. - CNPJ: 18.261.828/0002-40 - IE: 082.982.55-4 - Av.Cem, s/n° - Mod 1 - Qra 1 - Piso 2 - SLA 1 - FASSIM - Serra/ES - CEP: 29161-384
            </div>
        </div>

        <div class="main-title margin_3_top colorPurple text-uppercase black">
            condições gerais
        </div>

        <div class="sectionStart condicoes-list">
            <p>
                1) Validade da proposta: 7 dias úteis
            </p>
            <p>
                2) Condições de pagamento: 30DD.
            </p>
            <p>
                3) O prazo de entrega de equipamentos pode sofrer alteração e será confirmado na data de aprovação da proposta pelo cliente.
            </p>
            <p>
                4) A garantia dos produtos segue os prazos e condições conforme destacado acima.
            </p>
            <p>
                5) Todos os impostos incidentes nesta oferta estão inclusos no valor final da proposta, exceto valores referentes ao recolhimento do diferencial de alíquota e ou Substituição Tributária para estados
                conveniados, se for o caso.
            </p>
            <p>
                6) Valores dos produtos em US$ serão convertidos em R$ utilizando-se a cotação PTAX de Venda do dia do faturamento.
            </p>
            <p>
                7) Valores dos produtos e garantias em R$ estão sujeitos a variação de acordo com a política do fabricante e poderão sofrer alteração sem aviso prévio.
            </p>
            <p>
                8) Tipo de Transporte: frete
            </p>
            <p>
                9) Caso a legislação tributária venha a ser alterada até a data do faturamento, esta proposta deverá ser revisada e as condições atuais perdem a validade
            </p>
            <p>
                10) Dolar PTAX do dia 13/05/2019 : PTAX 3,8563
            </p>
        </div>

        <div class="row sectionStart">

            <div class="col-sm-4 col-md-8 col-lg-8 col-xs-12 nomargin">
                <a href="#0" class="landing-button-accept text-uppercase bgPurpleDark flex justifycenter">
                    aceitar proposta
                    <img src="assets/img/icon-check.png" class="iconRight">
                </a>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12 margin_2_top_mobile">
                <div class="flex colorPurpleDark alignCenter bold">
                    <img src="assets/img/icon-webex.png" class="iconLeft">
                    TIRE DÚVIDAS NO CHAT
                </div>
                <div class="margin_1_top">
                    <a href="#0">
                        <u>Clique aqui e fale com CATHARINA BRANDÃO para esclarecer suas dúvidas sobre a proposta.</u>
                        <P>Se preferir, entre em contato pelo telefone (11) 5095-8482</P>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="landing-footer sectionStart">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-lg-6 col-md-6">
                <div class="landing-footer-img-lineOne flex alignCenter justifyCenter">
                    <img src="assets/img/partner-cisco.png" alt="">
                    <img src="assets/img/partner-purestorage.png" alt="">
                    <img src="assets/img/partner-f5.png" alt="">
                </div>
                <div class="landing-footer-img-lineTwo flex alignCenter justifyCenter">
                    <img src="assets/img/partner-veeam.png" alt="">
                    <img src="assets/img/partner-netapp.png" alt="">
                    <img src="assets/img/partner-vmware.png" alt="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-1 col-lg-1 col-md-1">
            </div>
            <div class="col-xs-12 col-sm-5 col-lg-5 col-md-5 margin_2_top_mobile">
                <img src="assets/img/vita.png" alt="" class="landing-footer-vita">
                <div class="margin_2_top">
                    Rua Butantã, 434 - 7º Andar

                </div>
                <div>
                    Pinheiros - CEP: 05424-000 - São Paulo - SP
                </div>
                <div>
                    Telefone: (11) - 5095-8482
                </div>
                <div>
                    <a href="www.vitait.com" target="_blank">
                        Site: www.vitait.com
                    </a>
                </div>
                <div>
                    <a href="mailto:contato@vitait.com">
                        Contato: contato@vitait.com
                    </a>
                </div>
                <div class="flex alignCenter justifyCenter margin_2_top landing-footer-redes">
                    <div>
                        <a href="#0" target="_blank">
                            <img src="assets/img/redes-linkedin-white.png" alt="">
                        </a>
                        <a href="#0" target="_blank">
                            <img src="assets/img/redes-instagram-white.png" alt="">
                        </a>
                        <a href="#0" target="_blank">
                            <img src="assets/img/redes-facebook-white.png" alt="">
                        </a>
                        <a href="#0" target="_blank">
                            <img src="assets/img/redes-twitter-white.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<?php include 'assets/js/JS_includes.php'; ?>
</body>

</html>