@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">提示</div>
               
                <div class="panel-body">
                     {{$msg}}
                     <br/>
                     <a class="btn btn-default" href=".." role="button">返回列表</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
