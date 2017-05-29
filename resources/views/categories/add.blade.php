<h1>ADD CATEGORY</h1>

@if($errors->any())
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
@endif

<form action="{{route('category.store')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label>Add Name:</label>
    <input type="text" name="name">
    <input type="submit">
</form>

