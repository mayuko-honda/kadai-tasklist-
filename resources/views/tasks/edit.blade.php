@extends('layouts.app')

@section('content')
   <div class="row">
            <div class="col-xs-12">
     　　<div class="col-sm-3">col-sm-3</div>
        <div class="col-sm-offset-2 col-sm-5">col-sm-5</div>
        <div class="col-md-5">col-md-5</div>
        <div class="col-md-offset-2 col-md-5">col-md-5</div>
        <div class="col-lg-offset-3 ">col-lg-3</div>

    <h1>id: {{ $task->id }} のタスク編集ページ</h1>
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        
        <div class="form-group">
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}
        </div>
        
        <div class="form-group">
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
        </div>
        
        {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}


    {!! Form::close() !!}
    
     </div>
    </div>

@endsection

