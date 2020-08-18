@extends("layouts.app")

@section('title', 'Manage Grade')

@section('sidebar')
    @parent

    <p>Create Grade</p>
    <a class="btn btn-success" href="{{ route('grades.create') }}"> Create New Grade</a>
@endsection
@section('content')
<div class="row">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($grades as $grade)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$grade->name}}</td>
                <td>
                <form action="{{ route('grades.destroy',$grade->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('grades.show',$grade->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('grades.edit',$grade->id) }}">Edit</a>
   
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
