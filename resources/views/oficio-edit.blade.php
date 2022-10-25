@extends('layouts.template')

@section('title', 'SIGOF')
@section('content')
<div id="contact" class="contact-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">

            </div>

            <div class="col-lg-10 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
                <h3 style="text-align: center; color: #fff; margin-bottom: 10px;">OFICIO N° {{$oficio->numeracao}}/{{$oficio->ano}}</h3>
                <form id="contact" action="{{route('oficio.update', ['oficio'=> $oficio])}}" method="post">

                    @method('PUT')
                    @csrf
                    <div class="row">

                        <div class="col-lg-7">

                            <fieldset>
                                <label>Destinatario</label>
                                <input list="destino" name="destinatario" id="destinatario" placeholder="" value="{{$oficio->destinatario}}">
                                <datalist id="destino">
                                    @foreach($oficios as $ofc)

                                    <option value="{{$ofc->tratamento}}: {{$ofc->destinatario}}, {{$ofc->cargodestino}} - {{$ofc->localdestino}}">

                                        @endforeach
                                </datalist>

                               
                                


                            </fieldset>
                        </div>
                        <div class="col-lg-5">
                            <fieldset>
                                <label>Tratamento do destinatario</label>
                                <input type="text" name="tratamento" id="tratamento" placeholder="A Sua Excelência o Senhor" autocomplete="on" required value="{{$oficio->tratamento}}">
                            </fieldset>
                        </div>

                        <div class="col-lg-6">
                            <fieldset>
                                <label>Cargo do destinatario</label>
                                <input value="{{$oficio->cargodestino}}" type="text" name="cargodestino" id="cargodestino" placeholder="Secretario de Educação" autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <label>Local do destinatario</label>
                            <fieldset>
                                <input value="{{$oficio->localdestino}}" type="text" name="localdestino" id="localdestino" placeholder="Secretaria de Educação" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-3">
                            <label>Data do oficio</label>
                            <fieldset>
                                <input style="text-align: center; background-color: #7aa;" type="date" name="data" id="data" required="" value="{{$oficio->data}}"">
                            </fieldset>
                        </div>

                        <div class=" col-lg-3">
                                <label>Numero do Oficio</label>
                                <fieldset>
                                    <input value="{{$oficio->numeracao}}" style="text-align: right; background-color: #7aa;" type="text" name="numeracao" id="numeracao" required="">
                                </fieldset>
                        </div>


                        <div class="col-lg-2">
                            <label>Ano do Oficio</label>
                            <fieldset>
                                <input value="{{$oficio->ano}}" type="text" name="ano" id="ano" style="text-align: left; background-color: #7aa;" value="{{date('Y')}}" required="">
                                <!-- <input type="text" name="situacao" id="situacao" value="cadastrado" required=""> -->
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset>
                                <label>Cidade</label>
                                <input list="Cidade" name="cidade" id="cidade" style="background-color: #7aa;" value="{{$oficio->cidade}}">
                                <datalist id="Cidade">
                                    @foreach($oficios as $oficio)

                                    <option value="{{$oficio->cidade}}">

                                        @endforeach
                                </datalist>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <label>Situação</label>
                            <fieldset>
                                <!-- <input value="{{$oficio->ano}}" type="text" name="ano" id="ano" style="text-align: left; background-color: #7aa;" value="{{date('Y')}}" required=""> -->
                                <input type="text" name="situacao" id="situacao" value="{{$oficio->situacao}}" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label>Assunto do oficio</label>
                                <input type="text" name="assunto" id="assunto" value="{{$oficio->assunto}}" placeholder="Solicitação de iluminação pública." autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <label>Conteudo</label>

                            <h6 style="font-size: 12px ;"> <br>Venho solicitar, pelo presente, </h6>
                            <fieldset>
                                <textarea name="conteudo" type="text" class="form-control" id="conteudo" placeholder="Continue o oficio aqui" required="">{{$oficio->conteudo}}</textarea>
                            </fieldset>
                        </div>





                        <div class="col-lg-12">

                            <fieldset>
                                <button type="submit" id="form-submit" class="main-button ">Atualizar Oficio</button>
                            </fieldset>
                        </div>
                    </div>
                    <div class="contact-dec">
                        <img src="{{asset('assets/images/contact-decoration.png')}}" alt="">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    // var qs = function(el) {
    //     return document.querySelector(el);
    // }


    // qs("#destinatario").addEventListener('input', function(e) {
    //     console.log('evento "input" %s', e.target.value);
    // });

    // qs("#destinatario").addEventListener('change', function(e) {
    //     document.getElementById('localdestino').value = e.target.value.slice(e.target.value.indexOf('-') + 2, e.target.value.length);
    //     document.getElementById('cargodestino').value = e.target.value.slice(e.target.value.indexOf(',') + 2, e.target.value.indexOf('-') - 1);
    //     document.getElementById('destinatario').value = e.target.value.slice(0, e.target.value.indexOf(','));
    //     console.log('evento "change" %s', e.target.value);
    // });

    function qs(query, context) {
        return (context || document).querySelector(query);
    }

    function qsa(query, context) {
        return (context || document).querySelectorAll(query);
    }

    qs("#destinatario").addEventListener('change', function(e) {

        var options = qsa('#' + e.target.getAttribute('list') + ' > option'),
            values = [];

        [].forEach.call(options, function(option) {
            values.push(option.value)
        });

        var currentValue = e.target.value;
        var currentValue2 = e.target.value;

        if (values.indexOf(currentValue) !== -1) {

            document.getElementById('localdestino').value = e.target.value.slice(e.target.value.indexOf('-') + 2, e.target.value.length);
            document.getElementById('cargodestino').value = e.target.value.slice(e.target.value.indexOf(',') + 2, e.target.value.indexOf('-') - 1);
            document.getElementById('destinatario').value = e.target.value.slice(e.target.value.indexOf(':') + 2, e.target.value.indexOf(','));
            document.getElementById('tratamento').value = currentValue2.slice(0, currentValue2.indexOf(':'));

            document.getElementById('localdestino').style = "background-color: #ccc";
            document.getElementById('cargodestino').style = "background-color: #ccc";
            document.getElementById('destinatario').style = "background-color: #ccc";
            document.getElementById('tratamento').style = "background-color: #ccc";
            console.log('evento "change" %s', currentValue2.slice(0, currentValue2.indexOf(':')));
        }

    });
</script>
@stop