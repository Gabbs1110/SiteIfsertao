@extends('layouts.app')

@section('content')
<section class="container">
		<div class="row">
		<h3 class="center-align">Cadastro de Informes</h3>
			
				<form method="POST" action="">
                @include('admin.CadInformes._formCadInforme')

				</form>

			
		</div>
	</section>



@endsection