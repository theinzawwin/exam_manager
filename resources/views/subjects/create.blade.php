
@extends("layouts.app")

@section('title', 'Manage Grade')

@section('sidebar')
    @parent
<p>Create Subject</p>
@endsection
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row">
    <form action="/subjects" method="post">
    @csrf
        <div class="form-group">
            <label>Grade</label>
            <select name="grade_id">
                @foreach($grades as $grade)
                <option value="{{$grade->id}}">{{$grade->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name" class="form-control" />
        </div>
       
        <div class="form-group">
            <input type="submit" value="Save" />
        </div>
    </form>
</div>
@endsection