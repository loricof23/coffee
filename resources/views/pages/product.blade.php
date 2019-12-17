@extends('master')

@section('user')
<div class="content">
    <h1> ALL MENUS  </h1>
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
                <td><Button>Buy</button></td>
            </tr>
            @endforeach


        </table>
    </center>

</div>
@endsection
