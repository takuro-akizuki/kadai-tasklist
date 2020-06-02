@extends('layouts.app')

@section('content')

    <h1>{{ $task->id }} のタスク詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
       {!! link_to_route('tasks.create', 'タスクの編集', [], ['class' => 'btn btn-primary']) !!}
@endsection