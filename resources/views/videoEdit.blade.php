@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    
                    <form action="../save/{{$video['id']}}">
                    <div class="form-group">
                        <label for="title">title</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{$video['title']}}" placeholder="标题">
                    </div>
                    <div class="form-group">
                        <label for="keywords">keywords</label>
                        <input type="text" class="form-control" name="keywords" id="keywords" value="{{$video['keywords']}}" placeholder="关键字">
                    </div>
                    <div class="form-group">
                        <label for="linkaddress">linkaddress</label>
                        <input type="text" class="form-control" name="remotePath" id="linkaddress" value="{{$video['remotePath']}}" placeholder="地址">
                    </div>                    
                    <div class="form-group">
                        <label for="begainDate">begainDate</label>
                        <input type="text" class="form-control" name="beginDate" id="begainDate" value="{{$video['beginDate']}}" placeholder="有效开始时间">
                    </div>                
                    <div class="form-group">
                        <label for="endDate">endDate</label>
                        <input type="text" class="form-control" name="endDate" id="endDate" value="{{$video['endDate']}}" placeholder="结束时间">
                    </div>

                    <div class="form-group">
                        <label for="status">status</label>
                        <input type="text" class="form-control" name="status" id="status" value="{{$video['status']}}" placeholder="状态">
                    </div>
                     <button type="submit" class="btn btn-default">保存</button>
                     <button  class="btn btn-default">取消</button>
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
