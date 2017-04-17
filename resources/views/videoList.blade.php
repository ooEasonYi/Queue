@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                <a class="btn btn-default" href="edit/">添加</a>
                <div class="table-responsive">
                    <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>title</th>
                            <th>keyword</th>
                            <th>status</th>
                            <th>beginDate</th>
                            <th>endDate</th>
                            <th>operate</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($videos as $v)
                        <tr>
                            <td>{{ $v->id }}</td>
                            <td>{{ $v->title }}</td>
                            <td>{{ $v->keywords }}</td>
                            <td>{{ $v->status }}</td>
                            <td>{{ $v->beginDate }}</td>
                            <td>{{ $v->endDate }}</td>
                            <td>
                                <a href="edit/{{$v->id}}">编辑</a>&nbsp;&nbsp;<a href="delete/{{$v->id}}">删除</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
