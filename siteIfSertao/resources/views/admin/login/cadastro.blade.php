@extends('layouts.app')

@section('content')
<section class="container">
		<div class="row">
		<h3 class="center-align">Cadastro</h3>
			
				<form method="POST" action="">
                @include('admin.login._formCad')

				</form>

			
		</div>
	</section>



@endsection