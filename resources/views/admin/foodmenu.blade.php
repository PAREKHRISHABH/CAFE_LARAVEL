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
    <div style="position: relative; top: 60px; right: -150px">
        <form action="{{url("/uploadfood")}}" method="post" enctype="multipart/form-data">

           @csrf

            <div>
                <label>Title</label>
                <input style="color: blue" type="text" name="title" placeholder="write a title" required>
            </div>

            <div>
                <label>price</label>
                <input style="color: blue" type="number" name="price" placeholder="price" required>
            </div>

            <div>
                <label>image</label>
                <input type="file" name="image" required>
            </div>

            <div>
                <label>description</label>
                <input style="color: blue" type="text" name="description" placeholder="description" required>
            </div>

            <div>
                <input type="submit" value="save">
            </div>


        </form>

        <div>
            <table bgcolor="black">
                <tr>
                    <th style="padding: 30px">Food Name</th>
                    <th style="padding: 30px">Price</th>
                    <th style="padding: 30px">Description</th>
                    <th style="padding: 30px">Image</th>
                    <th style="padding: 30px">action</th>
                    <th style="padding: 30px">action2</th>
                </tr>

                @foreach($data as $data)
                <tr align="center">
                    <td>{{$data->title}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->description}}</td>
                    <td><img height="200" width="200" src="/foodimage/{{$data->image}}"></td>
                    <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a> </td>
                    <td><a href="{{url('/updateview',$data->id)}}">Update</a> </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

</div>
@include("admin.adminscript")
</body>
</html>

