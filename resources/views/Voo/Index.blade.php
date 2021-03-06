@extends('Layout')

@section('content')
<h3 style="display: inline-block;margin: 15px;">Voos</h3>
<button type="button" class="btn btn-primary m-3" style="float:right; margin: 15px;" data-toggle="modal" data-target="#modalAdicionar">Adicionar</button>
<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content" style="overflow-x: scroll">
                    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                        <thead>
                            <tr>
                                <td>
                                    Data de Partida
                                </td>
                                <td>
                                    Valor da Passagem
                                </td>
                                <th class="text-right" data-sort-ignore="true">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($voos as $voo)
                                <tr>
                                    <td>
                                        {{$voo->dataPartida}}
                                    </td>
                                    <td>
                                        {{$voo->valorPassagem}}
                                    </td>
                            
                                    <td style="float: right;">
                                        <a href="#" data-toggle="modal" data-target="#modalEditar{{$voo->id}}" style="padding: 3px;"><i class="fa fa-pencil text-navy"></i></a>
                                        <a href="voos/delete/{{$voo->id}}" style="padding: 3px;"><i class="fa fa-trash text-danger"></i></a>
                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="9">
                                    <ul class="pagination pull-right"></ul>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@foreach ($voos as $voo)

<div class="modal" id="modalEditar{{$voo->id}}" tabindex="-1" role="dialog" aria-labelledby="labelModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h5 class="modal-title" id="labelModal">Editar Voo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form id="formAdicionar{{$voo->id}}" action="voos/edit/{{$voo->id}}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="inputAddTitulo">Data Partida</label>
                            <input type="date" class="form-control" class="form-control" id="dataPartida" name="dataPartida" value="{{$voo->dataPartida}}">
                        </div>
                        <div class="form-group">
                            <label for="inputAddTitulo">Valor Passagem</label>
                            <input type="text" class="form-control" id="valorPassagem" name="valorPassagem" value="{{$voo->valorPassagem}}">
                        </div>
                        <div class="form-group">
                            <label for="inputAddTitulo">Aeronave</label>
                                <select  class="form-control" name="aeronaveID" value="{{$voo->aeronaveID}}">                
                                @foreach($aeronaves as $aeronave)
                                    <option value="{{$aeronave->id}}" {{$voo->aeronaveID == $aeronave->id?'selected':''}}>{{$aeronave->modelo}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="adicionar btn btn-primary bg-dark border-dark">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach

<div class="modal" id="modalAdicionar" tabindex="-1" role="dialog" aria-labelledby="labelModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h5 class="modal-title" id="labelModal">Adicionar novo Voo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form id="formAdicionar" action="voos/create" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                        <label for="inputAddTitulo">Data Partida</label>
                            <input type="date" class="form-control" class="form-control" id="dataPartida" name="dataPartida">
                        </div>
                        <div class="form-group">
                            <label for="inputAddTitulo">Valor Passagem</label>
                            <input type="text" class="form-control" id="valorPassagem" name="valorPassagem">
                        </div>
                        <div class="form-group">
                            <label for="inputAddTitulo">Aeronave</label>
                            <select  class="form-control" name="aeronaveID">
                                @foreach($aeronaves as $aeronave)
                                <option value="{{$aeronave->id}}">{{$aeronave->modelo}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="adicionar btn btn-primary bg-dark border-dark">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection