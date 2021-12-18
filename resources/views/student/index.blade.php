<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<h1>Index</h1>
<body>
    <h1>Student list</h1>
    <br>
    <br>
    <div >
    <div class="table-responsive" class="col-md-12" >
      @if(Session::has('message'))
      <p style="color:blue">{{session::get('message')}}</p>
      @endif
    <table border="1" class="table">
        @foreach ($students as $student)
        <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->fname}}</td>
        <td>{{$student->lname}}</td>
       <td> {{$student->gender}}</td>
       <td>{{$student->grade->grade_name}}</td>
       <td> {{$student->address}}</td>
       <td> {{$student->birthday}}</td>
       <td> {{$student->email}}</td>
        <td>{{$student->phone}}</td>
        <td><a role="button"  class="btn btn-success" href="{{route('students.show',$student->id)}}">Show</td>
        <td><a role="button"  class="btn btn-warning" href="{{route('students.edit',$student->id)}}">Edit</a></td>
        <td><a role="button"  class="btn btn-warning" href="{{route('students.subjects.create',$student->id)}}">Add Subject</a></td>
            <td>
            <form onclick="return confirm('Are you confirm to delete?')"; action="{{route('students.destroy',$student->id)}}" method="POST">
                @csrf
                @method('delete')
                <button input type="submit" class="btn btn-danger" value="delete">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <a role="button" class="btn btn-primary" href="{{route('students.create',$student)}}">create</a>
    </div>
    </div>
</body>
</html>