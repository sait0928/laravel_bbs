@extends('layout')
@section('content')

    <div class="container" style="padding: 30px">
        <form action="">
            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputContent">Content</label>
                <textarea class="form-control"></textarea>
            </div>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>

    <div class="container" style="padding: 30px">
        <table class="table table-bordered">
            <tr style="background-color: lightgray">
                <th style="width: 20%">name</th>
                <th>content</th>
            </tr>
            <tr>
                <td>yuya</td>
                <td>hello,world!</td>
            </tr>
        </table>
    </div>

@endsection
