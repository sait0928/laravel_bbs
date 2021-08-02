@extends('layout')
@section('content')

    <div class="container" style="padding: 30px">
        <form action="/insert_post" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputName">User Name</label>
                <input type="text" name="user_name" class="form-control" title="Type your name" />
            </div>
            <div class="form-group">
                <label for="exampleInputContent">Content</label>
                <textarea name="content" class="form-control" title="Type content"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" />
        </form>
    </div>

    <div class="container" style="padding: 30px">
        <table class="table table-bordered">
            <tr style="background-color: lightgray">
                <th style="width: 20%">name</th>
                <th>content</th>
            </tr>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->user_name }}</td>
                    <td>{{ $post->content }}</td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
