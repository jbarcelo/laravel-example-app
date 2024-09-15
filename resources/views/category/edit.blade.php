@if ($errors->any())
    <div class="bg-red-400">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('category.update', $category->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="title">Títol</label>
    <input type="text" style="@error('title') border-color: RED;  @enderror"  value="{{ $category->title }}" name="title" />
    @error('title')
        <div>{{ $message }}</div>
    @enderror
    <label for="url_clean">Url neta</label>
    <input type="text" name="url_clean" value="{{ $category->url_clean }}" />
    @error('title')
        <div>{{ $message }}</div>
    @enderror
    <label for="start_date">Data inici</label>
    <input type=date name="start_date" value="{{$category->start_date}}" />
    <label for="end_date">Data fi</label>
    <input type=date name="end_date" value="{{$category->end_date}}" />
    <input type="submit" value="Editar" >
</form>