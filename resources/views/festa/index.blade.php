@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <painel titulo="Calculador de Compras Para Festas">Painel
                    <painel>
                        <form class="form-group" method="post" action="{{route('calcular')}}" >
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="criancas">Quantidade de Crianças</label>
                                <input required name="criancas" type="number" class="form-control" id="criancas" placeholder="Quantidade de crianças">
                            </div>
                            <div class="form-group">
                                <label for="adultos">Quantidade de Adultos</label>
                                <input required type="number" name="adultos" class="form-control" id="adultos" placeholder="Quantidade de Adultos">
                            </div>
                            <div>
                                <label for="bebida">Bebida alcólica?</label>
                                <input required type="radio" id="bebida"  name="bebida" value="S"
                                       placeholder="Quantidade de Adultos">Sim
                                <input required type="radio" id="bebida" name="bebida"  value="N"
                                       placeholder="Quantidade de Adultos">Não
                            </div>
                            <div class="btn-group">
                                <button type="submit" class="btn btn-default">Calcular</button>
                            </div>
                        </form>
                    </painel>
                    <painel titulo="Dashboard" cor="panel-info">
                        <lista v-bind:resultado="{{$response}}"></lista>
                    </painel>
                </painel>
            </div>
        </div>
    </div>
@endsection
