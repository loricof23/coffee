@extends('masteradmin')

@section('admin')
<div class="content">
    <H1>LIST PRODUCT</H1>
    <center>
        <table>
            <tr>
                <th>
                    Number
                </th>
                <th>
                    Name
                </th>
                <th>
                    Price
                </th>
                <th>
                    Type
                </th>
                <th>
                    Image
                </th>
                <th>
                    Action
                </th>
            </tr>
            @foreach($kopi as $key=> $k)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$k->name}}</td>
                <td>{{$k->price}}</td>
                <td>{{$k->type}}</td>
                <td>
                    <img src="{{ asset('image/' . $k->image) }}" />
                </td>
                <td>
                    <button><a href="/dashboard/view/update/{{$k->id}}">Update</a></button>
                    <button><a href="/dashboard/view/delete/{{$k->id}}">Delete</a></button>
                </td>
            </tr>
            @endforeach


        </table>
    </center>
</div>
@endsection
