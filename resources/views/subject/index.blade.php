<h1>Index</h1>
<body>
    <h1>Student list</h1>
    <br>
    
  
  
    <br>
    @foreach ($students as $student)
        {{$student->id}}
        {{$student->fname}}
        {{$student->lname}}
        {{$student->gender}}
        {{$student->grade}}
        {{$student->address}}
        {{$student->birthday}}
        {{$student->email}}
        {{$student->phone}}
        <br>
    @endforeach
    <br>
    <table border="1">
        @foreach ($students as $student)
        <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->fname}}</td>
        <td>{{$student->lname}}</td>
       <td> {{$student->gender}}</td>
        <td>{{$student->grade}}</td>
        <td>{{$student->subject}}</td>
       <td> {{$student->address}}</td>
       <td> {{$student->birthday}}</td>
       <td> {{$student->email}}</td>
        <td>{{$student->phone}}</td>
        <td><a href="{{route('students.show',$student->id)}}">Show</td>
        <td><a href="{{route('students.edit',$student->id)}}">Edit</a></td>
            <td>
            <form onclick="return confirm('Are you confirm to delete?')"; action="{{route('students.destroy',$student->id)}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="delete">
            </form>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <button><a href="{{route('students.create',$student)}}">create</a></button>
</body>
</html>