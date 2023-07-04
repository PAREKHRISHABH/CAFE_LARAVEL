<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>

    <base href="/public">

    @include("admin.admincss")
</head>
<body>
<div class="container-scroller">
    @include("admin.navbar")

    <div style="position: relative; top: 60px; right: -150px">
        <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">

            @csrf

            <div>
                <label>Title</label>
                <input style="color: blue" type="text" name="title" value="{{$data->title}}" required>
            </div>

            <div>
                <label>price</label>
                <input style="color: blue" type="number" name="price" value="{{$data->price}}" required>
            </div>

            <div>
                <label>description</label>
                <input style="color: blue" type="text" name="description" value="{{$data->description}}" required>
            </div>

            <div>
                <label> old image</label>
                <img height="200" width="200" src="/foodimage/{{$data->image}}">
            </div>

            <div>
                <label> New image</label>
                <input type="file" name="image" required>
            </div>


            <div>
                <input type="submit" value="save">
            </div>


        </form>
</div>
@include("admin.adminscript")
</body>
</html>
