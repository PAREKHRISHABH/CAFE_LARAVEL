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

    <form action="{{url('/updatefoodchef',$data->id)}}" method="post" enctype="multipart/form-data">

        @csrf
        <div>
            <label>Chef name</label>
            <input style="color: blue"; type="text" name="name" value="{{$data->name}}">
        </div>

        <div>
            <label>speciality</label>
            <input style="color: blue"; type="text" name="speciality" value="{{$data->speciality}}">
        </div>

        <div>
            <label>old image</label>
            <img height="200" width="200" src="/chefimage/{{$data->image}}">
        </div>

        <div>
            <label>new image</label>
            <input type="file" name="image">
        </div>

        <div>
            <input style="background-color: gray;"  type="submit" value="update chef" required="">
        </div>
    </form>


</div>
@include("admin.adminscript")
</body>
</html>
