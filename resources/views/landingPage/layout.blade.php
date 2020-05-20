<!DOCTYPE html>
<html lang="es">

<head>

	<title>Welcome</title>

	@include('dashboard.common.header')

	@stack('styles')
    
    @stack('scripts')

</head>

<!-- Le pongo el id para que el boton de abajo me lleve a esta seccion-->
<!--Si el usuario llega abajo aparece el boton y me regresa arriba-->
<body id="page-top">

<!----------------WRAPPER----------------------------->
<!--Wrapper solo evita que se salgan los elementos del area-->
<!--The wrapper holds a design within certain boundaries.-->
<!-- no semantic meaning, it just puts a fence around the content. -->
<!--Container is generally used for structures that can contain more than one element. A wrapper, is something that wraps around a single object to provide more functionality and interface to it.-->
	<div id="wrapper">
		<!----------- CONTENEDOR --------------------->
		<!-- En daschboard.css podemos manipular el color de fondo-->
		<!-- d-flex significa la direccion del flex que ahora esta
			 seteada como columnas-->
		<div id="content-wrapper" class="d-flex flex-column">

			<div id="content">
				@include('landingPage.topbar')

				<!-- ---------MAIN-PAGE-TABS---------->
				@include('landingPage.Tabs')

				<!-- ---------/MAIN-PAGE-TABS---------->

				<!-- ---------MAIN-PAGE-CONTENT---------->

				@section('content')
					<!-- Esto es como sifuera el layout de app, comienza de cero
					para que todo lo que se hga click en la barra se refleje solo aqui 
					manteniendo el layout principal -->
					<div class="col-md-10" style="padding-top: 10px">
						<div class="row">

							<div class="polaroid rotate_right">
	  							<img src="{{ URL::to('/') }}/DSC06584.JPG" alt="Pulpit rock" width="50%" height="auto">
	  							<p class="caption">The pulpit rock in Lysefjorden, Norway.</p>
							</div>

							<div class="polaroid rotate_left">
							  <img src="{{ URL::to('/') }}/DSC06584.JPG" alt="Monterosso al Mare" width="50%" height="auto">
							  <p class="caption">Monterosso al Mare. One of the five villages in Cinque Terre, Italy.</p>
							</div>
						</div>	
					</div>			
				@endsection

				<!-- ---------/MAIN-PAGE-CONTENT---------->

				<!-- ---------MAIN-PAGE-SIDEBAR---------->
				@section('sideBar')
					@include('layouts.sideBars.mainSideBar')
				@endsection
				<!-- ---------MAIN-PAGE-SIDEBAR---------->

				<!---------- Footer -------------->
				<footer class="sticky-footer bg-white">
					@include('dashboard.common.footer')
				</footer>
				<!----------- /Footer -------------->

		</div>
		<!----------- /CONTENEDOR --------------------->

	</div>
<!---------------- /WRAPPER----------------------------->

	<!-- Este boton me regresa a arriba en la pagina-->
	<!-- Le asigne el ID top-page al body para poder regresar-->
	<!-- Se lo paso como parametro al href-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>
</body>

</html>