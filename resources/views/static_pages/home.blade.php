@extends('layouts.default')
@section('content')
	<div class="jumbotron">
	
		<h1>Hello Laravel</h1>
		
		<p class="lead">
			这是第一个页面
		</p>
		
		<p>
			一切，将从这里开始。
		</p>
		
		<p>
			<a href="{{ route('signup') }}" role="button" class="btn btn-lg btn-success">现在注册</a>
		</p>
	</div>
@stop