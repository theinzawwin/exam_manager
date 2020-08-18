@extends("layouts.app")

@section('title', 'Manage Grade')

@section('sidebar')
    @parent

    <p>Create Grade</p>
    <a class="btn btn-success" href="{{ route('subjects.create') }}"> Create New Grade</a>
@endsection
@section('content')
<div class="row">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Grade</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subjects as $subject)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$subject->name}}</td>
                <td>{{$subject->grade_name}}</td>
                <td>
                <form action="{{ route('subjects.destroy',$subject->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('subjects.show',$subject->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('subjects.edit',$subject->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
