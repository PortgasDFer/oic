<form method="POST" action="/catforo/{{$id}}">
	@method('DELETE')
	@csrf
	<a href="/eventos/"><button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
</form> 