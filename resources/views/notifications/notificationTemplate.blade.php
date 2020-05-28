@extends('dashboard.layout')
@section('title','Panel de control')
@section('content')



<div class="d-sm-flex align-items-center justify-content-between mb-4">
	 <h1 class="h3 mb-0 text-gray-800">{{Auth::user()->completeName()}}</h1>
	 <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<div class="row">
	
	<div class=" card col-md-8">
		 @foreach(Auth::user()->notifications as $notification)
 				<!--Llega el objeto JSON y lo decodifica para nosotros-->
 			<div class="card-header">
 			
				<h5>
					<a href="/x/{{$notification->data['user_id']}}" >
 						Ennviada por {{ $notification->data['name'] }} 					
 					</a>
 				</h5>

 			</div>		
 				
			<div class="card-body">
 				 <u>
 				 	<li>
 				 		{{ $notification}}
 				 	</li>
 				 </u>
 			</div>
 				 
 			<div class="card-footer">
 				<p>
 					Enviada {{ $notification->created_at->diffForHumans() }}
 				</p>
 			</div> 	

 			@endforeach
	</div>

	<div class="card col-md-4">
		<div class=" card-body">
			@foreach(Auth::user()->notifications as $notification)
 				<!--Llega el objeto JSON y lo decodifica para nosotros-->
 				
 				<h5>
					<a href="/x/{{$notification->data['user_id']}}" >
 						{{ $notification->data['name'] }} 
 						genero esta notificacion
 					</a>
 				</h5>
 			@endforeach
		</div>

	</div>
</div>


 		
@endsection