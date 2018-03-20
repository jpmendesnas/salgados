@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <painel titulo="Calculador de Compras Para Festas">Painel
                    <painel>
                        <form class="form-group" action="{{route('calcular')}}" >
                            <div class="form-group">
                                <label for="criancas">Quantidade de Crianças</label>
                                <input name="criancas" type="number" class="form-control" id="criancas" placeholder="Quantidade de crianças">
                            </div>
                            <div class="form-group">
                                <label for="adultos">Quantidade de Adultos</label>
                                <input type="number" name="adultos" class="form-control" id="adultos" placeholder="Quantidade de Adultos">
                            </div>
                            <div>
                                <label for="bebida">Bebida alcólica?</label>
                                <input type="radio" id="bebida"  name="bebida" value="N"
                                       placeholder="Quantidade de Adultos">Sim
                                <input type="radio" id="bebida" name="bebida"  value="S"
                                       placeholder="Quantidade de Adultos">Não
                            </div>
                            <div class="btn-group">
                                <button type="submit" class="btn btn-default">Calcular</button>
                            </div>
                        </form>
                    </painel>
                    <painel titulo="Dashboard" cor="panel-info">
                        <table class="table table-striped">

                            <tbody>
                                <tr>
                                    <td>Cerveja</td>
                                    <td>Whisky</td>
                                    <td>Doces</td>
                                    <td>Salgados</td>
                                    <td>Carne</td>
                                </tr>
                            </tbody>

                        </table>
                    </painel>
                </painel>
            </div>
        </div>
    </div>
@endsection
