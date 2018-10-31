@extends('layouts.app')
<style type="text/css">
		.separaDiv{
			width:100%;
			height:2px;
			background-color:#CCC;
		}
		.container h1, h3{
			text-align:center;
		}
		span {
			color: green;
		}
</style>
@section('content')
        <div class="container">
        	<span><h1>Editar Produto</h1></span><br/>
        	@include('partials._alert')            	 
			<div class="separaDiv"></div><br/>
			<form method="post" action="{{ url('/produtos/alterar/'.$produto->id)}}">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="item">Item</label>
					<input id="item" type="text" name="item" class="form-control" placeholder="Produto" value="{{$produto->item}}" >
				</div>
				<div class="form-group">
					<label for="preco">Preço</label>
					<input id="preco" type="text" name="preco" class="form-control"placeholder="Preço" value="{{$produto->valor}}" >
				</div>
				<div class="form-group">
					<input type="submit" value="Salvar" class="btn btn-primary">
					<a href="{{ url('/produtos')}}" class="btn btn-primary">Voltar</a>
				</div>							
			</form>
        </div>	
@endsection	