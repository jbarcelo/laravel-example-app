@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<form action="{{ route('post.store') }}" method="post">
@csrf
<label for="title">Títol</label>
<input type="text" name="title" value="{{ old('title') }}" />
<label for="url_clean">Url neta</label>
<input type="text" name="url_clean" value="{{ old('title') }}" />
<label for="content">Contingut</label>
<textarea name="content" col="3" value="{{ old('title') }}" ></textarea>
<input type="submit" value="Crear" >
</form>