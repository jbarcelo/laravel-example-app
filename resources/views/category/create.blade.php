@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<form action="{{ route('category.store') }}" method="post">
@csrf
<label for="title">Títol</label>
<input type="text" name="title" value="{{ old('title') }}" />
<label for="url_clean">Url neta</label>
<input type="text" name="url_clean" value="{{ old('url_clean') }}" />
<label for="start_date">Data final</label>
<input type="date" name="start_date" >
<label for="end_date">Data final</label>
<input type="date" name="end_date" >
<input type="submit" value="Crear" >
</form>