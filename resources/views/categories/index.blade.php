<a href="{{route('category.add')}}">ADD CATEGORYY</a>
<table>
    <tr>
        <th>STT</th>
        <th>NAME</th>
    </tr>
    {{ $stt = 0 }}
    @foreach($categories as $category)
        {{--<p>Ten danh Muc: {{$category->name}}</p>--}}
        {{--<a href="">EDIT</a>--}}
        {{--<a href="">DELETE</a>--}}

    <tr>
    <td>{{ $stt = $stt + 1   }}</td>
    <td>{{$category->name}} </td>
    <td><a href="{{route('category.edit', ['id' => $category->id, 'name' => $category->name])}}">EDIT</a></td>
    <td><a href="{{route('category.delete', ['id' => $category->id])}}">DELETE</a>   </td>
    </tr>
    @endforeach

</table>

