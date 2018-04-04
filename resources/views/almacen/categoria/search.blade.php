{!!Form::open(array('url'=>'almacen/categoria','method'=>'GET','autocomplete'=>'off','role'=>'search'))!!}
<div class="form-group">
	<div class="input-group">
		<input type="text" class= "form-control" name="searchText" placeholder="BUSCAR CATEGORIA..." value="{{$searchText}}">
		<span class="input-group-btn">
			<button class="btn btn-primary" type="submit">BUSCAR</button>
		</span>
	</div>


</div>

{{Form::close()}}