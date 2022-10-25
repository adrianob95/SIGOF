@extends('layouts.template')

@section('title', 'SIGOF')
@section('content')
<div id="contact" class="contact-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">

            </div>

            <div class="col-lg-12 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">



                <div class="container mt-3">
                    <h2>Tabela de Ofícios </h2>
                    <p style="color: #fff;">
                        Digite algo no campo de entrada para pesquisar na tabela:
                    </p>
                    <input class="form-control" id="myInput" type="text" placeholder="Procurar..">
                    <br>
                    <table class="table table-bordered" style="color: #fff; text-align: center;">
                        <thead>
                            <tr>
                                <th>Distanatario</th>
                                <th>Numeração</th>
                                <th>Assunto</th>
                                <th>Data</th>
                                <th>Situação</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            @foreach($oficios as $oficio)
                            <tr>
                                <td>{{$oficio->destinatario}}</td>
                                <td>{{$oficio->numeracao}}/{{$oficio->ano}}</td>
                                <td>{{$oficio->assunto}}</td>
                                <td>{{strftime('%d de %B de %Y', strtotime($oficio->data))}}</td>
                                <td>{{$oficio->situacao}}</td>
                                <td>
                                    <form id="deletar" action="{{route('oficio.destroy',['oficio'=>$oficio])}}" method="POST">
                                        @csrf
                                        @method('DELETE')


                                    </form> <a href="#" onclick="document.getElementById('deletar').submit()">Excluir</a> <a href="{{route('oficio.edit',['oficio'=>$oficio])}}">Editar</a> <a href="{{route('pdf',['oficio'=>$oficio])}}">Abrir</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

                <script>
                    $(document).ready(function() {
                        $("#myInput").on("keyup", function() {
                            var value = $(this).val().toLowerCase();
                            $("#myTable tr").filter(function() {
                                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                            });
                        });
                    });
                </script>



            </div>
        </div>
    </div>
</div>
@stop