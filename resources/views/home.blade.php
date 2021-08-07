@extends('layout')
@section('content')

    <div class="container" style="padding: 50px">
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

    <div class="container" style="padding: 50px">
        <table class="table table-bordered">
            <tr class="table-primary">
                <td style="width: 30%;">User Name</td>
                <td>Content</td>
            </tr>
            @foreach($posts as $post)
                <tr data-toggle="collapse" data-target="#collapse{{ $post->id }}" aria-expanded="false" aria-controls="collapse{{ $post->id }}">
                    <td>{{ $post->user_name }}</td>
                    <td>{{ $post->content }}</td>
                </tr>
                <tr class="collapse" id="collapse{{ $post->id }}">
                    <td colspan="2">
                        <div style="border: 1px solid #cbd5e0; padding: 10px; margin-bottom: 10px;" class="table-info">Content detail</div>
                        <table style="width: 100%;">
                            <tr class="table-secondary">
                                <th>ID</th>
                                <th>Created at</th>
                            </tr>
                            <tr>
                                <td style="width: 20%;">{{ $post->id }}</td>
                                <td>{{ $post->created_at }}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
