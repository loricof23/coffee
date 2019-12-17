@extends('masteradmin')

@section('admin')
<div class="content">
    <H1>VIEW FEEDBACK</H1>
</div>
<center>
    <table border="1">
        <tr>
            <th>
                Name
            </th>
            <th>
                Email
            </th>
            <th>
                Message
            </th>
        </tr>
        @foreach ($pesan as $p)
        <tr>
            <td>{{$p->name}}</td>
            <td>{{$p->email}}</td>
            <td>{{$p->message}}</td>
        </tr>
        @endforeach

    </table>
</center>
@endsection
