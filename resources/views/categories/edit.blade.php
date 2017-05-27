<form action="{{route('category.update')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label>EDIT Name:</label>
    <input type="text" name="name" value="{{$categoryName}}">
    <input type="hidden" name="id" value="{{$id}}">
    <input type="submit">
</form>