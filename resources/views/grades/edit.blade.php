
@extends("layouts.app")

@section('title', 'Manage Grade')

@section('sidebar')
    @parent

    <p>Edit Grade</p>
@endsection
@section('content')
<div class="row">
    <form action="{{ route('grades.update',$grade->id) }}" method="post">
    @csrf
    @method('PUT')
        <div class="form-group">
        <label>Name:</label>
        
        <input type="text" name="name" class="form-control" value="{{$grade->name}}"/>
        </div>
       
        <div class="form-group">
            <input type="submit" value="Save" />
        </div>
    </form>
</div>
@endsection