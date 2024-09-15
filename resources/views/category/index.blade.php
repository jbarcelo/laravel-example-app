<table>
@foreach ($categories as $category)
    <tr  >
        <td>{{ $category->id }}</td>
        <td>{{ $category->title }}</td>
        <td>{{ $category->url_clean }}</td>
        <td>{{ $category->start_date }}</td>
        <td>{{ $category->end_date }}</td>
        <td>{{ $category->created_at }}</td>
        <td>{{ $category->updated_at }}</td>
        <td>
            <form action="{{route('category.destroy' , $category->id)}}" method="POST" >
                @method('DELETE')
                @csrf
                <button type="submit" >Delete</button>
            </form>
        </td>
    </tr>
@endforeach
</table>