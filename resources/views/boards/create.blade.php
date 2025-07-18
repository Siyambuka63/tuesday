@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create a New Board</h1>
    <form action="{{ route('boards.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Board Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Board</button>
    </form>
</div>
@endsection