<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Grupo Damark :: Distribuidores autorizados Canon para Venezuela </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css" type="text/css" /> 
    <link rel="stylesheet" href="css/slick.css" type="text/css" />   
    <link rel="stylesheet" href="css/tooplate-simply-amazed.css" type="text/css" />
    <script>

        $("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
  $(e.target)
    .prev()
    .find("i:last-child")
    .toggleClass("fa-minus fa-plus");
});

    </script>

</head>

<body>
    <div id="outer">
        <header class="header order-last" id="tm-header">
            <nav class="navbar">
                <div class="collapse navbar-collapse single-page-nav">
                    <ul class="navbar-nav">
                        <li class="logogd_menu">
                            <!-- <a class="nav-link" href="#section-1"><span class="icn"><i class="fas fa-2x fa-air-freshener"></i></span> Quienes Somos</a> -->
                            <a class="nav-link" href="#section-1"><span class="icn"><img src="img/logo_grupodamark_titular.png"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section-2"><span class="icn"><img src="img/logo_damark_mini.png"></span> Avancorp Damark</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section-3"><span class="icn"><img src="img/logo_avanservices_mini.png"></span> Avanservices</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section-4"><span class="icn"><img src="img/logo_proimcotech_mini.png"></span> Proimco Tech</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section-5"><span class="icn"><img src="img/logo_dataservices_mini.png"></span> Data Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section-6"><span class="icn"><img src="img/logo_visualmedica_mini.png"></span> Visual Médica</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        
        <button class="navbar-button collapsed" type="button">
            <span class="menu_icon">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </span>
        </button>
        
        <main id="content-box" class="order-first">
            <div class="banner-section section parallax-window" data-parallax="scroll" data-image-src="img/section-1-grupodamark.jpg" id="section-1">
                <div class="container">
                    <div class="item">

                        <!-- <div class="bg-blue-transparent simple"><p>Your simplest HTML template, the most amazing page ever, yet free!</p></div> -->
                        
                        <!-- Respuesta de formulario enviado con exito -->
                        <?php 
                            if(isset($_GET['Ok'])){
                                echo "<div class='alert alert-success' role='alert'>" . 'Formulario enviado con exito.' . "</div>" ;
                            }
                            // var_dump($_GET);  
                        ?>

                        <div class="simple"><p><img src="img/logo-Damark-rect.png"></p></div>
                        <div id="accordion" class="myaccordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Representante Oficial Canon
                                            <span class="fa-stack fa-sm">
                                            <i class="fas fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </button>
                                    </h2>
                                </div>
                                <!-- Acordeon -->
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <p><b>Grupo Damark</b>, se proyecta como una compañía especialista en la distribución de productos CANON, a través de canales y/o distribuidores, con presencia comercial durante más de 20 años en Venezuela. </p>
                                        <p>En Canon, creemos en la filosofía Kyosei: “Todas las personas, sin distinción de raza, religión o cultura, viviendo y trabajando juntas en armonía en pro del futuro”. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Productos y Servicios
                                        <span class="fa-stack fa-2x">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </button>
                                    </h2>
                                </div>

                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-4"><p><i class="fas fa-print"> Fotocopiadoras</i></p>
                                                <p>
                                                    <i class="fas fa-angle-right"> Nuevas</i><br>
                                                    <i class="fas fa-angle-right"> Remarketing</i><br>
                                                    <i class="fas fa-angle-right"> Multifuncionales e Impresoras </i><br>
                                                </p>
                                            </div>

                                            <div class="col-md-4"><p><i class="fas fa-power-off"> Soluciones Digitales</i></p>
                                                <p>
                                                    <i class="fas fa-angle-right"> Equipos de Alto Volumen</i><br>
                                                    <i class="fas fa-angle-right"> Equipos Formato  Ancho </i><br>
                                                    <i class="fas fa-angle-right"> Multifuncionales e Impresoras </i><br>
                                                </p>
                                            </div>

                                            <div class="col-md-4"><p><i class="fas fa-box"> Consumibles</i></p>
                                                <p>
                                                    <i class="fas fa-angle-right"> Originales </i><br>
                                                    <i class="fas fa-angle-right"> Compatibles </i><br>
                                                </p>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6"><p><i class="fas fa-plug"> Repuestos</i></p>
                                                <p>
                                                    <i class="fas fa-angle-right"> Originales</i><br>
                                                    <i class="fas fa-angle-right"> Compatibles </i><br>
                                                    <i class="fas fa-angle-right"> Productos para Recarga </i><br>
                                                </p>
                                            </div>

                                            <div class="col-md-6"><p><i class="fas fa-house-user"> Servicios</i></p>
                                                <p>
                                                    <i class="fas fa-angle-right"> Centro de Diagnóstico de Garantia</i><br>
                                                </p>
                                            </div>
                                        </div>
                                        <p><hr></p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Contactos
                                        <span class="fa-stack fa-2x">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </button>
                                    </h2>
                                </div>

                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-8 contact-form bg-black-transparent">
                                                <div class="form tm-contact-item-inner ">
                                                    <p class="font-body-acccordeon">Comunicate con nosotros</p>
                                                    <form action="send.php" method="POST">
                                                        <div class="form-group">
                                                            <input name="nombre" type="text" class="form-control ont-body-acccordeon" placeholder="Nombre" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="email" type="text" class="form-control" placeholder="Email" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea name="mensaje" class="textarea form-control" placeholder="Mensaje" required></textarea>
                                                        </div>
                                                        <div class="form-group text-right">
                                                            <input type="submit" name="submit" class="btn btn-default" value="Enviar Formulario">
                                                            <!-- <input id="submit-send" name="submit" type="submit" value="Enviar Formulario"> -->
                                                            <input type="hidden"  name="empresa" value= "grupodamark">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <p><b>Dirección: <br></b> 4TA. Transv de Monte Cristo. <br> Edif. No. 11, Piso 1. <br> Urbanización Monte Cristo. <br> Caracas - Venezuela </p>
                                                <p><b>Teléfonos: </b> (+58 212) 2381141</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Acordeon -->
                    </div>
                </div>
            </div>

            <!-- AVANCORP DAMARK -->
            <section class="work-section section" id="section-2">
                <div class="container">
                    <div class="row">
                        <div class="item col-md-4">
                            <div class="tm-work-item-inner">
                                <a href="https://davidlandaeta4.wixsite.com/website" target="_blank">  <img src="img/logo-Avancorp.jpg"> </a><br><br>
                                <!-- <img src="img/logo-Avancorp.jpg"><br><br> -->
                                <!-- <div class="icn"><i class="fas fa-2x fa-icons"></i></div> -->
                                <h3>Remote Support Unit </h3>
                                <p>En la "Unidad de Soporte Remoto" de Grupo Damark, creemos que el conocimiento adecuado y la ventaja tecnológica pueden llevar a las empresas hacia un futuro exitoso.</p>
                            </div>                        
                        </div>
                        <div class="item col-md-4 one">
                            <div class="tm-work-item-inner">
                                <!-- <div class="icn"><i class="fas fa-2x fa-tools"></i></div> -->
                                <a href="https://www.cla.canon.com/cla/en/home" target="_blank">  <img src="img/logo-damark-square.jpg"> </a><br><br>
                                <h3>Mayoristas en productos de impresión y copiado</h3>
                                <p>Somos distriubuidores oficiales de productos Canon para latinoamerica. </p>
                                <p>Equipos Nuevos y Equipos Remarketing</p>
                                <p>Productos Originales</p>
                            </div>
                        </div>

                        <div class="item col-md-4 two">
                            <div class="tm-work-item-inner">
                                <!-- <div class="icn"><i class="fab fa-2x fa-phoenix-framework"></i></div> -->
                                <!-- <div class="">
                                    <img src="img/logocanon.png">
                                </div> -->

                                <div class="tm-contact-item-inner-2 contact-details data-serv">
                                    <!-- <p>Somos una empresa venezolana, con mas de 15 años de experiencia en la venta y distribuciòn de 
                                        productos y accesorios fotográficos de la prestigiosa marca
                                    </p> -->
                                    <img src="img/logocanon.png">
                                    <ul class="font-weight-light" style="list-style-type: none;">
                                        <li>
                                            <span class="no-bullets"><i class="fas fa-mobile-alt"></i></span>
                                            <span class="lbl">Tel:</span> <a href="#"> +58 2122381141</a>
                                        </li>
                                        <li>
                                            <span class="no-bullets"><i class="fas fa-at"></i></span>
                                            <span class="lbl">Email:</span> info@grupodamark.com
                                        </li>
                                        <li>
                                            <span class="no-bullets"><i class="fas fa-globe-asia"></i></span>
                                            <!-- <span class="lbl">URL:</span> <a href="https://www.damark.com.ve" target="_blank"> damark.com.ve</a> -->
                                            <span class="lbl">Estamos ubicados en:</span> Puerto la Cruz / Maturin / Caracas / Valencia
                                        </li>
                                    </ul>
                                </div>  

                                <!-- <h3>Visitanos en:</h3>
                                <p> <i class="fas fa-check"></i> <a href="https://www.cla.canon.com/cla/es/where_to_buy/office/hardware/multifunction_printers_copiers/imagerunner_advance_series/imagerunner_advance_dx_c478ifz?country=VENEZUELA&countryDisplayName=Venezuela&itemCid=0901e02481abb76a&fromModel=true&modelPageURL=%2Fcla%2Fes%2Foffice%2Fproducts%2Fhardware%2Fmultifunction_printers_copiers%2Fimagerunner_advance_series%2Fimagerunner_advance_dx_c478ifz" target="_blank">
                                     Listado de distribuidores oficiales Canon</a>
                                </p> -->
                                <!-- <p>
                                    <i class="fas fa-globe"></i> <a href="damark.com.ve" target="_blank"> Sitio Web </a>
                                </p> -->
                            </div>
                            
                        </div> 
                    </div>

                    <div class="title">
                        <h2>AVANCORP - DAMARK</h2>
                    </div>
                </div>
            </section>

             <!-- AVANSERVICES -->
            <section class="gallery-section section parallax-window work-section" data-parallax="scroll" data-image-src="img/section-bg-avanservices.jpg" id="section-3">
                <div class="container">
                    <div class="text-center">
                        <a href="https://www.avanservices.com" target="_blank">  <img src="img/logo-avanservices.jpg"> </a>
                    </div>
                        <h3><b>Renta de Equipos</b></h3>
                    <p> Somos una empresa OUTSORCING, con amplia experiencia en el área de servicio de copiadoras, 
                        impresoras y multifuncionales; contamos con una estructura de servicio especialmente diseñada 
                        para alcanzar altos estándares de calidad y un excelente grupo humano el cual se capacita en 
                        forma permanente a fin de estar actualizados en los cambios e innovaciones tecnológicas que 
                        se presentan en nuestro ámbito. 
                    </p>
                    
                    <div class="container-fluid">
                        <div class="row justify-content-end">
                            <div class="col-md-12">
                                <div class="tm-contact-item-inner-2 contact-details bkg_avan data-serv">
                                    <ul class="font-weight-light" style="list-style-type: none;">
                                        <li>
                                            <span class="no-bullets"><i class="fas fa-mobile-alt"></i></span>
                                            <span class="lbl">Tel:</span> <a href="#"> +58-212-2379755/8954</a>
                                        </li>
                                        <li>
                                            <span class="no-bullets"><i class="fas fa-at"></i></span>
                                            <span class="lbl">Email:</span> <a href="#"> ventas@avanservices.com</a>
                                        </li>
                                        <li>
                                            <span class="no-bullets"><i class="fas fa-globe-asia"></i></span>
                                            <span class="lbl">URL:</span> <a href="https://www.avanservices.com" target="_blank"> avanservices.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Galeria de Imagenes -->
                    <!-- <div class="mx-auto gallery-slider">
                        <figure class="effect-julia item">
                            <img src="img/gallery-img-01.jpg" alt="Image">
                            <figcaption>
                                <div>
                                    <p>Julia dances in the deep dark</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                        <figure class="effect-julia item">
                            <img src="img/gallery-img-02.jpg" alt="Image">
                            <figcaption>
                                <div>
                                    <p>Julia dances in the deep dark</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                        <figure class="effect-julia item">
                            <img src="img/gallery-img-03.jpg" alt="Image">
                            <figcaption>
                                <div>
                                    <p>Julia dances in the deep dark</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                        <figure class="effect-julia item">
                            <img src="img/gallery-img-04.jpg" alt="Image">
                            <figcaption>
                                <div>
                                    <p>Julia dances in the deep dark</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                        <figure class="effect-julia item">
                            <img src="img/gallery-img-05.jpg" alt="Image">
                            <figcaption>
                                <div>
                                    <p>Julia dances in the deep dark</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                        <figure class="effect-julia item">
                            <img src="img/gallery-img-06.jpg" alt="Image">
                            <figcaption>
                                <div>
                                    <p>Julia dances in the deep dark</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                        <figure class="effect-julia item">
                            <img src="img/gallery-img-07.jpg" alt="Image">
                            <figcaption>
                                <div>
                                    <p>Julia dances in the deep dark</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                        <figure class="effect-julia item">
                            <img src="img/gallery-img-08.jpg" alt="Image">
                            <figcaption>
                                <div>
                                    <p>Julia dances in the deep dark</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                        <figure class="effect-julia item">
                            <img src="img/gallery-img-09.jpg" alt="Image">
                            <figcaption>
                                <div>
                                    <p>Julia dances in the deep dark</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                    </div> -->
                    <!-- <div class="title">
                        <h2>AVANSERVICES</h2>
                    </div> -->
                    <div class="title">
                        <h2>AVANSERVICES</h2>
                    </div> 
                </div>
            </section>

             <!-- PROIMCOTECH TODOCANON -->
            <section class="contact-section section " id="section-4">
                <div class="container">
                    <div class="title">
                        <a href="https://www.todocanon.com" target="_blank">  <img src="img/Logo-ProincoTech.jpg"> </a>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-6 contact-form">
                            <!-- <p>
                                Somos una empresa venezolana, con mas de 15 años de experiencia en la venta y distribuciòn de productos 
                                y accesorios fotográficos de la prestigiosa marca CANON.
                            </p> -->
                            <p><img src="img/logotodocanon.png"></p>
                            <!-- <div class="form tm-contact-item-inner">
                                <form action="#" method="POST">
                                    <div class="form-group">
                                        <input name="name" type="text" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input name="email" type="text" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" class="textarea form-control" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group text-right">
                                        <input type="submit" class="btn btn-primary" value="Send it">
                                    </div>
                                </form>
                            </div> -->
                        </div>

                        <div class="col-lg-6 col-md-6 mb-6 contact-details ">
                            <div class="tm-contact-item-inner-2">
                                <p>Somos una empresa venezolana, con mas de 15 años de experiencia en la venta y distribuciòn de 
                                    productos y accesorios fotográficos de la prestigiosa marca CANON.
                                </p>
                                <ul class="font-weight-light">
                                    <li>
                                        <span class="icn"><i class="fas fa-mobile-alt"></i></span>
                                        <span class="lbl">Tel:</span> <a href="#">+58 212 2393373</a>
                                    </li>
                                    <li>
                                        <span class="icn"><i class="fas fa-at"></i></span>
                                        <span class="lbl">Email:</span> <a href="#">ventas@todocanon.com</a>
                                    </li>
                                    <li>
                                        <span class="icn"><i class="fas fa-globe-asia"></i></span>
                                        <span class="lbl">URL:</span> <a href="https://www.todocanon.com" target="_blank">todocanon.com</a>
                                    </li>
                                </ul>
                            </div>                        
                        </div>
                        
                        <!-- <div class="col-lg-3 col-md-12 map"> -->
                            <!-- Map -->
                            <!-- <div class="map-outer tm-mb-40">
                                <div class="gmap-canvas">
                                    <iframe width="100%" height="400" id="gmap-canvas"
                                        src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>
                            </div> -->
                        <!-- </div> -->
                    </div> 
                        <div class="title">
                            <h2>PROIMCOTECH</h2>
                            <hr>
                        </div>
                    </div>
            </section>

             <!-- DATA SERVICE -->
             <section class="gallery-section section parallax-window work-section" data-parallax="scroll" data-image-src="img/section-bg-dataservices.jpg" id="section-5">
                <div class="container">
                    <div class="text-center">
                        <a href="https://www.grupodataservicesve.com" target="_blank">  <img src="img/logo-dataservices-square.jpg"> </a>
                    </div> <br>
                        <h3><b>SERVICIOS DE IMPRESIÓN Y SOLUCIONES DE COPIADO</b></h3>
                    <p class="data-serv"> Somos una empresa OUTSORCING, con amplia experiencia en el área de servicio de copiadoras, 
                        impresoras y multifuncionales; contamos con una estructura de servicio especialmente diseñada 
                        para alcanzar altos estándares de calidad y un excelente grupo humano el cual se capacita en 
                        forma permanente a fin de estar actualizados en los cambios e innovaciones tecnológicas que 
                        se presentan en nuestro ámbito. 
                    </p>
                        <div class="row justify-content-end data-serv">
                            <div class="col-md-6">
                                <div class="tm-contact-item-inner-2 contact-details">
                                    <ul class="font-weight-light" style="list-style-type: none; width: max-content;">
                                        <li>
                                            <span class="no-bullets"><i class="fas fa-mobile-alt"></i></span>
                                            <span class="lbl">Tel:</span> <a href="#"> +58 4248241185</a>
                                        </li>
                                        <li>
                                            <span class="no-bullets"><i class="fas fa-at"></i></span>
                                            <span class="lbl">Email:</span> <a href="#"> info@grupodataservicesve.com</a>
                                        </li>
                                        <li>
                                            <span class="no-bullets"><i class="fas fa-globe-asia"></i></span>
                                            <span class="lbl">URL:</span> <a href="https://www.grupodataservicesve.com/" target="_blank"> grupodataservicesve.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <div class="title">
                        <h2>DATASERVICE</h2>
                    </div> 
                </div>
            </section>


             <!-- VISUAL MEDICA-->
             <section class="contact-section contact-section-vm section" id="section-6">
                <div class="container">
                    <div class="title">
                        <a href="https://www.visualmedica.com/" target="_blank">  <img src="img/logo-visualmedica.jpg"> </a>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-6 contact-form">
                            <!-- <p>
                                Somos una empresa venezolana, con mas de 15 años de experiencia en la venta y distribuciòn de productos 
                                y accesorios fotográficos de la prestigiosa marca CANON.
                            </p> -->
                            <h3><b>MANEJO DE IMAGENES RADIOLOGICAS</b></h3>
                            <!-- <div class="form tm-contact-item-inner">
                                <form action="#" method="POST">
                                    <div class="form-group">
                                        <input name="name" type="text" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input name="email" type="text" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" class="textarea form-control" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group text-right">
                                        <input type="submit" class="btn btn-primary" value="Send it">
                                    </div>
                                </form>
                            </div> -->
                        </div>

                        <div class="col-lg-6 col-md-6 mb-6 contact-details">
                            <div class="tm-contact-item-inner-2">
                                <p>Visual Medica es una empresa líder a nivel Latinoamericano en el desarrollo de sistemas y software  
                                para el diagnóstico por imágenes en el área médica. Hemos acompañado el progreso de centenares de instituciones 
                                médicas durante más de una década y media.
                                </p>
                                <ul class="font-weight-light">
                                    <li>
                                        <span class="icn"><i class="fas fa-mobile-alt"></i></span>
                                        <span class="lbl">Tel: </span> <a href="#"> + 1 754 301 4022</a>
                                    </li>
                                    <li>
                                        <span class="icn"><i class="fas fa-at"></i></span>
                                        <span class="lbl">Email: </span> <a href="#"> info@visualmedica.com</a>
                                    </li>
                                    <li>
                                        <span class="icn"><i class="fas fa-globe-asia"></i></span>
                                        <span class="lbl">URL:</span> <a href="https://www.visualmedica.com/" target="_blank">visualmedica.com</a>
                                    </li>
                                </ul>
                            </div>                        
                        </div>
                        <div class="title">
                            <h2>VISUAL MEDICA</h2>
                            <hr>
                        </div> 
                    </div>                
                </div>
            </section>
        </main>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>