@extends('layout.master')

@section('delete_page')

<table class="table">
    <thead>
            <tr>
                <th>id</th>
                <th>text</th>
                <th>blog</th>
                <th>email</th>
            </tr>
    </thead>

    <tbody>
    @foreach($detail as $data)
            <tr>
                <td> {{ $data->id  }}</td>
                <td> {{ $data->text  }} </td>
                <td> {{ $data->blog  }} </td>
                <td> {{ $data->email  }}</td>
                <td>
                    <form action="/Signinusrs/{{ $data->id }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
    @endforeach
    </tbody>
</table>

@endsection
