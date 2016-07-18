@extends('layouts.app')

@section('title')
    Albertino Carvalho
@endsection

@section('mainNav')
    @include('parts.mainNav')
@endsection

@section('content')

    <!-- ==============================================
    HEADER
    =============================================== -->
    <header id="home">
    
        <div class="container">
        
            <div class="row">
            
                <div class="col-sm-10 col-sm-offset-1 text-center">
                
                    <h1 class="scrollimation fade-down d1">Albertino Carvalho</h1>
                    <h2 class="scrollimation fade-down d3">Designer, Developer, Dreamer</h2>
                
                </div>
            
            </div>
        
            <div class="header-img scrollimation fade-up d1">
                <img class="img-responsive" src="assets/images/header-img.png" alt="" />
            </div>
        
        </div>
        
    </header><!--End header -->

    <div id="main-content">
        
        <div class="scroll-down">
            <a href="#services" class="scrollto">Saiba mais</a>
        </div>
        
        <!-- ==============================================
        SERVICES
        =============================================== -->
        <section id="services" class="big-padding">
        
            <div class="container">
                
                <h1 class="section-title">Meus Serviços<span class="main-color">1</span></h1>
                
                <div class="text-center">
                    <div class="btn-group">
                        <button type="button" href="#front-end" class="btn btn-default toggle-tabs active">Front End</button>
                        <button type="button" href="#back-end" class="btn btn-default toggle-tabs">Back End</button>
                    </div>
                </div>
                
                <div class="tab-content">
                
                    <div class="row tab-pane active" id="front-end">
                    
                        <div class="col-sm-4 service-item scrollimation fade-left">
                        
                            <div class="service-icon "><i class="fa fa-html5"></i></div>
                            
                            <h3>Code HTML5 Limpo</h3>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo.</p>
                            
                            
                        </div>
                    
                        <div class="col-sm-4 service-item scrollimation fade-left">
                        
                            <div class="service-icon "><i class="fa fa-css3"></i></div>
                            
                            <h3>styles CSS3 Modernos</h3>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo.</p>
                            
                            
                        </div>
                        
                        <div class="col-sm-4 service-item scrollimation fade-left">
                        
                            <div class="service-icon "><i class="fa fa-mobile"></i></div>
                            
                            <h3>Design Responsivo</h3>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo.</p>
                            
                        </div>
                        
                    </div>
                    
                    <div class="row tab-pane" id="back-end">
                    
                        <div class="col-sm-4 service-item">
                        
                            <div class="service-icon"><i class="fa fa-wordpress"></i></div>
                            
                            <h3>Wordpress</h3>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo.</p>
                            
                            
                        </div>
                    
                        <div class="col-sm-4 service-item">
                        
                            <div class="service-icon"><i class="fa fa-joomla"></i></div>
                            
                            <h3>Joomla</h3>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo.</p>
                            
                            
                        </div>
                        
                        <div class="col-sm-4 service-item">
                        
                            <div class="service-icon"><i class="fa fa-drupal"></i></div>
                            
                            <h3>Drupal</h3>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo.</p>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
        
        
        </section>
            
        <!-- ==============================================
        LATEST PROJECTS
        =============================================== -->
        
        <section class="big-padding gray-bg">
        
            <div class="container">
                
                <h1 class="section-title">Ultimos projetos<span class="main-color">2</span></h1>
            
                <div class="row">
                
                    <div class="col-sm-5 push-down scrollimation fade-right">
                    
                        <h2 class="row-title">Quattro - Agency Portfolio</h2>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget lorem orci. Suspendisse posuere tincidunt dui vel tempus. Fusce ut vulputate ipsum, id sodales arcu. Praesent ultricies pretium sem, fermentum sagittis.</p>
                    
                        <p><a class="btn btn-dc btn-small btn-main-color" href="#link">Visit Website</a></p>
                    
                    </div>
                
                    <div class="col-sm-6 col-sm-offset-1 scrollimation fade-left">
                    
                        <img class="img-responsive" src="assets/images/featured-2.png" alt="" />
                    
                    </div>
                
                </div>
            
                <hr>
            
                <div class="row">
                
                    <div class="col-sm-6 col-sm-push-6 push-down scrollimation fade-left">
                    
                        <h2 class="row-title">Graphista  - Personal Portfolio</h2>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget lorem orci. Suspendisse posuere tincidunt dui vel tempus. Fusce ut vulputate ipsum, id sodales arcu. Praesent ultricies pretium sem, fermentum sagittis.</p>
                    
                        <p>Suspendisse posuere tincidunt dui vel tempus. Fusce ut vulputate ipsum, id sodales arcu. Praesent ultricies pretium sem, fermentum sagittis.</p>
                    
                        <p><a class="btn btn-dc btn-small btn-main-color" href="#link">Visit Website</a></p>
                    
                    </div>
                
                    <div class="col-sm-6 col-sm-pull-6 scrollimation fade-right">
                        <img class="img-responsive" src="assets/images/featured-1.png" alt="" />
                    </div>
                
                </div>
                
            </div>
            
        </section>
        
        
        <!-- ==============================================
        CALL TO ACTION
        =============================================== -->
        <section id="cta1" class="bg-main-color cta">
        
            <div class="container text-center scrollimation fade-up">
            
                <p>Não é apenas ideias. É fazer ideias acontecer.</p>
                
                <a class="btn btn-dc btn-white scrollto" href="#contact">Contate Me</a>
            
            </div>
        
        </section>
            
        <!-- ==============================================
        ABOUT
        =============================================== -->
        <section id="about" class="big-padding">
        
            <div class="container">
                
                <h1 class="section-title">Meu Perfil<span class="main-color">3</span></h1>
            
                <div class="row profile">
                
                    <div class="col-sm-10 col-sm-offset-1 text-center">
                    
                        <figure class="hover-wrapper scrollimation fade-right">
                            <img class="img-responsive img-circle profile-img" src="assets/images/profile-img.png" alt="">
                            <figcaption class="hover-text">Esse sou eu!</figcaption>
                        </figure>
                        
                        <h2 class="scrollimation fade-left">Albertino Carvalho</h2>
                        <h3 class="scrollimation fade-left">UI / UX Expert</h3>
                    
                        <p class="margin-top scrollimation fade-right">Albertino Carvalho. Formado em Tecnologias de Sistemas para Internet, pela Universidade Adventista de São Paulo campus Engenheiro Coelho (UNASP-EC) em 2012, com 3 anos de experiencias profissional, grande parte em Desenvolvimento Web, casado com uma bela esposa, e ansioso pela chegada do nosso primeiro Bebé Melody.</p>
                        
                        <p class="lead margin-top scrollimation fade-left">Criar não é apenas um trabalho pra min, è uma paixão. </p>
                        <p class="scrollimation fade-left"><a class="btn btn-dc btn-main-color scrollto" href="#portfolio">Meu Portfolio</a></p>
                        
                    </div>
                    
                </div>
                
            </div>
        
        </section>
        
        <!-- ==============================================
        SKILLS
        =============================================== -->
        <section id="skills" class="small-padding dark-bg">
        
            <div class="container">
            
                <div class="row skills">

                    <div class="col-sm-6 col-md-3 text-center">
                        <span class="chart plus-symbol" data-percent="90"><span class="percent">90</span></span>
                        <h2 class="text-center">Front End</h2>
                    </div>
                    <div class="col-sm-6 col-md-3 text-center">
                        <span class="chart plus-symbol" data-percent="80"><span class="percent">80</span></span>
                        <h2 class="text-center">Back End</h2>
                    </div>
                    <div class="col-sm-6 col-md-3 text-center">
                        <span class="chart equal-symbol" data-percent="95"><span class="percent">95</span></span>
                        <h2 class="text-center">Support</h2>
                    </div>
                    <div class="col-sm-6 col-md-3 text-center">
                        <span class="chart" data-percent="90"><span class="percent">90</span></span>
                        <h2 class="text-center main-color">High Score</h2>
                    </div>
                    
                </div><!--End row -->
                
            </div>
        
        </section>
            
        <!-- ==============================================
        PORTFOLIO
        =============================================== -->
        <section id="portfolio" class="big-padding" >
        
            <div class="container">
            
                <h1 class="section-title">Meu portfolio<span class="main-color">4</span></h1>
                <p class="subtitle">Just an example of my work</p>
                
                <div class="text-center scrollimation fade-up">
                    <div id="filter-works" class="btn-group">
                        <button data-filter="*" type="button" class="btn btn-default active">All Items<span class="project-count"></span></button>
                        <button data-filter=".web" type="button" class="btn btn-default">Web<span class="project-count"></span></button>
                        <button data-filter=".print" type="button" class="btn btn-default">Print<span class="project-count"></span></button>
                        <button data-filter=".video" type="button" class="btn btn-default">Video<span class="project-count"></span></button>
                    </div>
                </div>
                
            </div>  
            
            <div class="container scrollimation fade-up">
        
                <div id="projects-container" class="row">
                
                    <!-- ==============================================
                    SINGLE PROJECT ITEM
                    =============================================== -->
                    
                    <a class="project-item col-sm-6 col-md-4 col-lg-3 web" href="#?slider-project.html">
                        
                        <img class="img-responsive project-image" src="assets/images/projects/thumb-1.jpg"  alt="">
                        
                        <div class="hover-title">
                            <h2 class="project-title">Projeto com Slider</h2><!--Project Title -->
                            <p>Brochure design</p><!--Project Subtitle -->
                        </div>
                        
                    </a>
                    
                    <a class="project-item col-sm-6 col-md-4 col-lg-3 web" href="#?youtube-project.html">
                        
                        <img class="img-responsive project-image" src="assets/images/projects/thumb-2.jpg"  alt="">
                        
                        <div class="hover-title">
                            <h2 class="project-title">Projetos Videos</h2><!--Project Title -->
                            <p>Youtube video</p><!--Project Subtitle -->
                        </div>
                        
                    </a>
                    
                    <a class="project-item col-sm-6 col-md-4 col-lg-3 web" href="#?images-project.html">
                        
                        <img class="img-responsive project-image" src="assets/images/projects/thumb-3.jpg"  alt="">
                        
                        <div class="hover-title">
                            <h2 class="project-title">Images Resoluções</h2><!--Project Title -->
                            <p>Professional Web Design</p><!--Project Subtitle -->
                        </div>
                        
                    </a>
                    
                    <a class="project-item col-sm-6 col-md-4 col-lg-3 web" href="#?vimeo-project.html">
                        
                        <img class="img-responsive project-image" src="assets/images/projects/thumb-4.jpg"  alt="">
                        
                        <div class="hover-title">
                            <h2 class="project-title">Outro projeto de video</h2><!--Project Title -->
                            <p>Vimeo video</p><!--Project Subtitle -->
                        </div>
                        
                    </a>
                    
                    <a class="project-item col-sm-6 col-md-4 col-lg-3 print" href="#?slider-project.html">
                        
                        <img class="img-responsive project-image" src="assets/images/projects/thumb-6.jpg"  alt="">
                        
                        <div class="hover-title">
                            <h2 class="project-title">Project with Slider</h2><!--Project Title -->
                            <p>Modern Business Card</p><!--Project Subtitle -->
                        </div>
                        
                    </a>
                    
                    <a class="project-item col-sm-6 col-md-4 col-lg-3 print" href="#?images-project.html">
                        
                        <img class="img-responsive project-image" src="assets/images/projects/thumb-7.jpg"  alt="">
                        
                        <div class="hover-title">
                            <h2 class="project-title">Fullwidth images</h2><!--Project Title -->
                            <p>Poster Design</p><!--Project Subtitle -->
                        </div>
                        
                    </a>
                    
                    <a class="project-item col-sm-6 col-md-4 col-lg-3 print" href="#?slider-project.html">
                        
                        <img class="img-responsive project-image" src="assets/images/projects/thumb-8.jpg"  alt="">
                        
                        <div class="hover-title">
                            <h2 class="project-title">Project with Slider</h2><!--Project Title -->
                            <p>Personal Business Card</p><!--Project Subtitle -->
                        </div>
                        
                    </a>
                    
                    <a class="project-item col-sm-6 col-md-4 col-lg-3 print" href="#?vimeo-project.html">
                        
                        <img class="img-responsive project-image" src="assets/images/projects/thumb-5.jpg"  alt="">
                        
                        <div class="hover-title">
                            <h2 class="project-title">Video project</h2><!--Project Title -->
                            <p>Vimeo video</p><!--Project Subtitle -->
                        </div>
                        
                    </a>
                    
                    <a class="project-item col-sm-6 col-md-4 col-lg-3 video" href="#?slider-project.html">
                        
                        <img class="img-responsive project-image" src="assets/images/projects/thumb-9.jpg"  alt="">
                        
                        <div class="hover-title">
                            <h2 class="project-title">Project with Slider</h2><!--Project Title -->
                            <p>Professional Brand Identity</p><!--Project Subtitle -->
                        </div>
                        
                    </a>
                    
                    <a class="project-item col-sm-6 col-md-4 col-lg-3 video" href="#?vimeo-project.html">
                        
                        <img class="img-responsive project-image" src="assets/images/projects/thumb-10.jpg"  alt="">
                        
                        <div class="hover-title">
                            <h2 class="project-title">Another Video project</h2><!--Project Title -->
                            <p>Vimeo video</p><!--Project Subtitle -->
                        </div>
                        
                    </a>
                    
                    <a class="project-item col-sm-6 col-md-4 col-lg-3 video" href="#?images-project.html">
                        
                        <img class="img-responsive project-image" src="assets/images/projects/thumb-11.jpg"  alt="">
                        
                        <div class="hover-title">
                            <h2 class="project-title">Fullwidth images</h2><!--Project Title -->
                            <p>Creative Business Card</p><!--Project Subtitle -->
                        </div>
                        
                    </a>
                    
                    <a class="project-item col-sm-6 col-md-4 col-lg-3 video" href="#?youtube-project.html">
                        
                        <img class="img-responsive project-image" src="assets/images/projects/thumb-12.jpg"  alt="">
                        
                        <div class="hover-title">
                            <h2 class="project-title">Video project</h2><!--Project Title -->
                            <p>Youtube video</p><!--Project Subtitle -->
                        </div>
                        
                    </a>
                    
                </div>  
                
                <p class="lead text-center">Gostou do que viu? Entre em contato pra discutirmos o seu projeto!</p>
                <p class="text-center"><a class="btn btn-dc btn-main-color scrollto" href="#contact">Contate Me</a></p>
                
            </div>  
            
        </section>
        
        <!-- ==============================================
        TWITTER
        =============================================== -->
        <section id="twitter-feeds" class="bg-main-color">
        
            <div class="container text-center scrollimation fade-right">
            
                <div class="row">
                
                    <div class="col-sm-10 col-sm-offset-1">
                    
                        <h1>Ultimos tweets</h1>
                        <p><i class="fa fa-twitter"></i></p>
                        
                        <div id="twitter-slider" class="flexslider" data-widget-id="386017398488186880" data-max-tweets="5"></div>
                
                        <!--<div id="twitter-slider" class="flexslider">
                            
                            <ul class="slides">
                            
                                <li>
                                    <p class="tweet">Over <a href="#">200 Sales for our #bootstrap</a> template Graphista already!! Check out our best-selling template @wrapbootstrap https://wrapbootstrap.com/theme/graphista-one-page-creative-portfolio-WB09S4JFK</p>
                                
                                    <p class="timePosted">60 seconds ago</p>
                        
                                </li>
                            
                                <li>
                                    <p class="tweet">Our new #bootstrap template Graphista is now available on @wrapbootstrap . Check it out https://wrapbootstrap.com/theme/graphista-one-page-creative-portfolio-WB09S4JFK  pic.twitter.com/p4tURuykgp</p>
                                
                                    <p class="timePosted">45 seconds ago</p>
                        
                                </li>
                                
                            </ul>
                            
                        </div>-->
                        
                        <p><a href="https://twitter.com/qthemes" data-toggle="tooltip" data-placement="bottom" title="Follow Me on Twitter" target="_blank">@tinoweb</a></p>
                    
                    </div>
                    
                </div>
                
            </div>
        
        </section>
        
        <!-- ==============================================
        TESTIMONIALS
        =============================================== -->
        <section id="testimonials" class="big-padding gray-bg">
        
            <div class="container">
            
                <h1 class="section-title">Clientes Felizes<span class="main-color">5</span></h1>
                <p class="subtitle">Veja o que pessoas falam do meu Trabalho</p>
                
                <div class="row">
                
                    <div class="col-lg-10 col-lg-offset-1 col-sm-12">
                    
                        
                        <div class="testimonial-controls">
                            <span class="previous"><i class="fa fa-angle-left"></i></span>
                            <span class="next"><i class="fa fa-angle-right"></i></span>
                        </div>
                        
                        <div id="testimonials-slider" class="flexslider">
                        
                            <ul class="slides">
                            
                                <li>
                                    <div class="media scrollimation fade-right">
                                    
                                        <div class="media-left">
                                        
                                            <img class="media-object img-circle" src="assets/images/client-1.jpg" alt="">
                                        
                                        </div>
                                        
                                        <div class="media-body">
                                        
                                            <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rhoncus nec magna eget ultricies. Class aptent taciti sociosqu ad litora torquent per conubia nostra Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rhoncus nec magna eget ultricies. Class aptent taciti sociosqu ad litora torquent per conubia nostra</p>
                                            <p class="client">John Doe / <a href="#link">Google Inc.</a></p>
                                            
                                        </div>
                                        
                                    </div>
                                
                                    <div class="media scrollimation fade-left">
                                    
                                        <div class="media-body">
                                        
                                            <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rhoncus nec magna eget ultricies. Class aptent taciti sociosqu ad litora torquent per conubia nostra</p>
                                            <p class="client">TinoWeb / <a href="#link">Google Inc.</a></p>
                                            
                                        </div>
                                        
                                        <div class="media-right">
                                        
                                            <img class="media-object img-circle" src="assets/images/client-2.jpg" alt="">
                                        
                                        </div>
                                        
                                    </div>
                                </li>
                                
                                <li>
                                
                                    <div class="media">
                                    
                                        <div class="media-body">
                                        
                                            <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rhoncus nec magna eget ultricies. Class aptent taciti sociosqu ad litora torquent per conubia nostra</p>
                                            <p class="client">John Doe / <a href="#link">Google Inc.</a></p>
                                            
                                        </div>
                                        
                                        <div class="media-right">
                                        
                                            <img class="media-object img-circle" src="assets/images/client-3.jpg" alt="">
                                        
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="media">
                                    
                                        <div class="media-left">
                                        
                                            <img class="media-object img-circle" src="assets/images/client-4.jpg" alt="">
                                        
                                        </div>
                                        
                                        <div class="media-body">
                                        
                                            <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rhoncus nec magna eget ultricies. Class aptent taciti sociosqu ad litora torquent per conubia nostra</p>
                                            <p class="client">John Doe / <a href="#link">Google Inc.</a></p>
                                            
                                        </div>
                                        
                                    </div>
                                
                                </li>
                            
                            </ul>
                            
                        </div>
                            
                    </div>
                
                </div>
                
            </div>
            
        </section>
        
        <div class="white-bg">
        
            <div class="container">
            
                <div class="row">
                
                    <div class="col-sm-3">
                    
                        <a href="#"><img class="img-responsive client-logo" src="assets/images/client-logo-1.png" alt="" /></a>
                    
                    </div>
                
                    <div class="col-sm-3">
                    
                        <a href="#"><img class="img-responsive client-logo" src="assets/images/client-logo-2.png" alt="" /></a>
                    
                    </div>
                    
                    <div class="col-sm-3">
                    
                        <a href="#"><img class="img-responsive client-logo" src="assets/images/client-logo-3.png" alt="" /></a>
                    
                    </div>
                    
                    <div class="col-sm-3">
                    
                        <a href="#"><img class="img-responsive client-logo" src="assets/images/client-logo-4.png" alt="" /></a>
                    
                    </div>
                </div>
            
            </div>
        
        </div>
        
        
        <!-- ==============================================
        CONTACT
        =============================================== -->
        <section id="contact" class="big-padding light-typo color-overlay">
        
            <div class="container">
            
                <h1 class="section-title">Contate Me<span class="main-color">6</span></h1>
                
                <div class="row">
                
                    <div class="col-sm-6 col-md-5 scrollimation fade-right">
                    
                        <p class="lead">I am available for freelance. <br/>Can't wait for the next exciting project! Could it be yours?</p>
                    
                        <p>
                            Alberto Carvalho<br/>
                            W325 State Road 123<br/>
                            Mondovi, WI(Wisconsin) 98746-54321<br/>
                            (123) 456 - 7890 <br/>
                        </p>
                    
                        <div class="social-links">
                            <a href="#"><i class="fa fa-fw fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-fw fa-facebook-square"></i></a>
                            <a href="#"><i class="fa fa-fw fa-linkedin-square"></i></a>
                        </div>
                    
                        <p><a class="mail-styled" href="mailto:mail@example.com">tino477@gmail.com</a></p>
                    
                    </div>
                
                    <!--=== Contact Form ===-->

                    <form id="contact-form" class="col-sm-6 col-md-offset-1 scrollimation fade-left" action="contact.php" method="post" novalidate>
                        
                        <div class="form-group">
                            <div class="controls">
                                <input id="contact-name" name="contactName" class="form-control requiredField" type="text" data-error-empty="is required">
                                <label class="control-label" for="contact-name">Nome</label>
                            </div>
                        </div><!-- End name input -->
                        
                        <div class="form-group">
                            <div class="controls">
                                <input id="contact-mail" name="email" class="form-control requiredField" type="email" data-error-empty="is required" data-error-invalid="is invalid">
                                <label class="control-label" for="contact-mail">Email</label>
                            </div>
                        </div><!-- End email input -->
                        
                        <div class="form-group">
                            <div class="controls">
                                <textarea id="contact-message" name="comments" class="form-control requiredField" rows="6" data-error-empty="is required"></textarea>
                                <label class="control-label" for="contact-message">Memsagem</label>
                            </div>
                        </div><!-- End textarea -->
                        
                        <button name="submit" type="submit" class="btn" data-error-message="Please fill the required fields" data-sending-message="Sending Message" data-ok-message="Your Message has been sent!">Enviar</button>
                        <input type="hidden" name="submitted" id="submitted" value="true" />
                        
                    </form><!-- End contact-form -->
                    
                </div>
                
            </div>
        
        </section>
        
        <!-- ==============================================
        FOOTER
        =============================================== --> 
        
        <footer id="main-footer">
        
            <div class="container">
            
                <div class="row">
                
                    <div class="col-sm-2">
                    
                        <a class="logo-link scrollto" href="#home">
                            <img class="img-responsive" src="assets/images/logo-bw.png" alt="" />
                        </a>
                        
                    </div>
                
                    <div class="col-sm-8">
                    
                        <nav>
                        
                            <ul class="footer-nav">
                                <li><a class="scrollto" href="#home">Home</a></li>
                                <li><a class="scrollto" href="#services">Seviços</a></li>
                                <li><a class="scrollto" href="#portfolio">Portfolio</a></li>
                                <li><a class="scrollto" href="#contact">Contato</a></li>
                            </ul>
                        
                        </nav>
                    
                    </div>
                
                    <div class="col-sm-2 text-right social-links">
                    
                        <a href="#" data-toggle="tooltip" title="Follow me on Twitter"><i class="fa fa-fw fa-twitter"></i></a>
                        <a href="#" data-toggle="tooltip" title="Follow me on Facebook"><i class="fa fa-fw fa-facebook"></i></a>
                        <a href="#" data-toggle="tooltip" title="Follow me on LinkedIn"><i class="fa fa-fw fa-linkedin"></i></a>
                    
                    </div>
                    
                </div>
            
            </div>
            
        </footer>
        
    </div>
    
    <div id="project-viewer" class="modal fade">
        
        <span id="close-project-viewer" data-dismiss="modal">&times;</span>
        
        <div class="container">
    
            <div id="project-viewer-content"></div>
            
            <div id="project-viewer-footer">
        
                <div class="project-nav">
                
                    <span class="previous-project" data-toggle="tooltip" data-placement="bottom" title="Previous Project"><i class="fa fa-long-arrow-left"></i></span>
                    <span class="back-to-portfolio" data-toggle="tooltip" data-placement="bottom" title="Back to Portfolio" data-dismiss="modal"><i class="fa fa-th-large"></i></span>
                    <span class="next-project" data-toggle="tooltip" data-placement="bottom" title="Next Project"><i class="fa fa-long-arrow-right"></i></span>
                
                </div>
            </div>
            
        </div>
        
    </div><!-- /.modal -->
    

@endsection
