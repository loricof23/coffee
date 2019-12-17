@extends('masteradmin')

@section('admin')
<div class="content">
    <H1>INSERT PRODUCT</H1>
</div>
<form action="/dashboard/insert/process" method="post">
    @csrf
    <center>
        <table>
            <tr>
                <td>
                    Name
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>
                    Price
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" name="price">
                </td>
            </tr>
            <tr>
                <td>
                    Type
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" name="type">
                </td>
            </tr>
            <tr>
                <tr>
                    <td>
                        Upload Image
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="file" name="file_upload">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit">Submit</button>
                    </td>
                </tr>
            </table>
        </center>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
    </form>
    @endsection
