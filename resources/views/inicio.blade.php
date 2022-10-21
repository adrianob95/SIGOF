@extends('layouts.template')

@section('title', 'SIGOF')
@section('content')

<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                            <h6>Bem Vindo ao SIGOF</h6>
                            <h2>SI<em>stema de</em> G<em>erenciamento de </em> OF<em>icios</em></h2>
                            <p>Crie oficios, gerencie, e exporte em pdf de forma, rapida, segura e com numeração automatica. <a rel="nofollow" href="{{route('oficio.create')}}" target="_parent"> Criar agora</a>.</p>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="assets/images/banner-right-image.png" alt="team meeting">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="contact" class="contact-us section">
    <div class="container">


        <div class="row">
            <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
                <div class="section-heading">
                    <h2>FIQUE A VONTADE PARA NOS ENVIAR MENSAGENS!</h2>
                    <p>É um prazer lhe ouvir. Preencha o furmulario para mandar sua mensagem.</p>
                    <div class="phone-info">
                        <h4>Caso precise nos mande um email diretamente: <span><i style="margin-top: 15px;" class="fa fa-envelope"></i> <a href="mailto:adrianobarbosa95@gmail.com">adrianobarbosa95@gmail.com</a></span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
                <form id="contact" action="" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <fieldset>
                                <input type="name" name="name" id="name" placeholder="Nome" autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <input type="surname" name="surname" id="surname" placeholder="Sobrenome" autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Seu Email" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <textarea name="message" type="text" class="form-control" id="message" placeholder="Mensagem" required=""></textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-button ">Enviar Mensagem</button>
                            </fieldset>
                        </div>
                    </div>
                    <div class="contact-dec">
                        <img src="assets/images/contact-decoration.png" alt="">
                    </div>
                </form>
            </div>
        </div>


    </div>
</div>
@stop