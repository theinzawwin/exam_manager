
@extends("layouts.app")

@section('title', 'Manage Grade')

@section('sidebar')
    @parent

    <p>Create Grade</p>
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
<form method="/attendances" method="post">
@csrf
    <table>
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Roll Call</th>
            </tr>
        </thead>
        
        <tbody>
        @for ($i = 0; $i < 10; $i++)
            <tr>
                <td><input type="text" name="attList[$i].name"></td>
                <td><select  name="attList[$i].status">
                        <option value="present">Present</option>
                        <option value="absent">Absent</option>
                    </select>
                </td>
            </tr>
        @endfor
        </tbody>
    </table>
    <input type="submit" value="Save Attendance" />
</div>
@endsection