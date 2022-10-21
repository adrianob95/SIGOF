@extends('layouts.template')

@section('title', 'SIGOF')
@section('content')

<div class="col-lg-12 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
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
@stop