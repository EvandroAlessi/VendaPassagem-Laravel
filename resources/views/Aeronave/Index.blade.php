@extends('Layout')

@section('content')
<h3 style="display: inline-block;margin: 15px;">Aeronaves</h3>
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
                                    Destino
                                </td>
                                <td>
                                    Modelo
                                </td>
                                <td>
                                    Quantia de Assentos
                                </td>
                                <td>
                                    Quantia de Assentos Especiais
                                </td>
                                <th class="text-right" data-sort-ignore="true">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($aeronaves as $entidade)
                                <tr>
                                    <td>
                                        {{ $destinos[$entidade->destinoID]->nomeAeroporto }}
                                    </td>
                                    <td>
                                        {{ $entidade->modelo }}
                                    </td>
                                    <td>
                                        {{ $entidade->qntAssentos }}
                                    </td>
                                    <td>
                                        {{ $entidade->qntAssentosEspecial }}
                                    </td>
                                    
                                    <td style="float: right;">
                                        <a href="#" data-toggle="modal" data-target="#modalEditar{{ $entidade->id }}" style="padding: 3px;"><i class="fa fa-pencil text-navy"></i></a>
                                        <a href="aeronaves/delete/{{ $entidade->id }}" style="padding: 3px;"><i class="fa fa-trash text-danger"></i></a>
                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4">
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


@foreach ($aeronaves as $entidade) 

<div class="modal" id="modalEditar{{ $entidade->id }}" tabindex="-1" role="dialog" aria-labelledby="labelModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h5 class="modal-title" id="labelModal">Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form id="formAdicionar{{ $entidade->id }}" action="aeronaves/edit/{{ $entidade->id }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="inputAddTitulo">Destino</label>
                            <select  class="form-control" name="destinoid" value="{{ $entidade->destinoID }}">                
                                @foreach($destinos as $destino)
                                    <option value="{{ $destino->id }}" {{ $entidade->destinoID == $destino->id ? 'selected' : '' }}>{{ $destino->nomeAeroporto }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputAddTitulo">Modelo</label>
                            <input type="text" class="form-control" id="modelo" name="modelo" value="{{ $entidade->modelo }}">
                        </div>
                        <div class="form-group">
                            <label for="inputAddTitulo">Quantia de Assentos</label>
                            <input type="text" class="form-control" id="qntAssentos" name="qntAssentos" value="{{ $entidade->qntAssentos }}">
                        </div>
                        <div class="form-group">
                            <label for="inputAddTitulo">Quantia de Assentos Especiais</label>
                            <input type="text" class="form-control" id="qntAssentosEspecial" name="qntAssentosEspecial" value="{{ $entidade->qntAssentosEspecial }}">
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
                <h5 class="modal-title" id="labelModal">Adicionar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form id="formAdicionar" action="aeronaves/create" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="inputAddTitulo">Destino</label>
                            <select  class="form-control" name="destinoid">
                                 @foreach($destinos as $destino)
                                    <option value="{{ $destino->id }}" {{ $entidade->destinoID == $destino->id ? 'selected' : '' }}>{{ $destino->nomeAeroporto }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputAddTitulo">Modelo</label>
                            <input type="text" class="form-control" id="modelo" name="modelo">
                        </div>
                        <div class="form-group">
                            <label for="inputAddTitulo">Quantia de Assentos</label>
                            <input type="text" class="form-control" id="qntAssentos" name="qntAssentos">
                        </div>
                        <div class="form-group">
                            <label for="inputAddTitulo">Quantia de Assentos Especiais</label>
                            <input type="text" class="form-control" id="qntAssentosEspecial" name="qntAssentosEspecial">
                        </div>
                        <button type="submit" class="adicionar btn btn-primary bg-dark border-dark">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection