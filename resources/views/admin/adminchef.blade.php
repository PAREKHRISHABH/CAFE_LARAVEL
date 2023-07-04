<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>

    @include("admin.admincss")
</head>
<body>
<div class="container-scroller">
    @include("admin.navbar")

    <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">

        @csrf

        <div>
            <label>name</label>
            <input style="color: blue" type="text" name="name" required="" placeholder="Enter name">
        </div>

        <div>
            <label>speciality</label>
            <input style="color: blue" type="text" name="speciality" required="" placeholder="Enter the speciality">
        </div>

        <div>
            <input  type="file" name="image" required="">
        </div>

        <div>
            <input style="background-color: gray" type="submit" name="save">
        </div>
    </form>
    <div>
    <table bgcolor="black">

        <tr>
            <th style="padding:30px; ">chef name</th>
            <th style="padding:30px; ">speciality</th>
            <th style="padding:30px; ">image</th>
            <th style="padding:30px; ">action</th>
            <th style="padding:30px; ">action2</th>

        </tr>
@foreach($data as $data)
        <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->speciality}}</td>
            <td><img height="100" width="100" src="/chefimage/{{$data->image}}"></td>
            <td><a href="{{url('/updatechef',$data->id)}}">update</a> </td>
            <td><a href="{{url('/deletechef',$data->id)}}">delete</a> </td>
        </tr>
@endforeach
    </table>
    </div>
</div>
@include("admin.adminscript")
</body>
</html>
