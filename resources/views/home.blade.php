@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                  <painel titulo="Dashboard">Painel 1
                      <painel titulo="Dashboard" cor="panel-info">Painel 2</painel>
                      <painel titulo="Dashboard" cor="panel-success">Painel 23</painel>
                      <painel titulo="Dashboard" cor="panel-warning">Painel 23</painel>
                  </painel>
            </div>
        </div>
    </div>
@endsection
