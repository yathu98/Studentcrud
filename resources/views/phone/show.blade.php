<h1>Show</h1>
<br>

<h2>ID:{{$student->id}}</h2>
<h2>First Name:{{$student->fname}}</h2>
<h2>Last Name:{{$student->lname}}</h2>
    <h2>Gender: {{$student->gender}}</h2>
     <h2>Grade: {{$student->grade}}</h2>
     <h2>Grade: {{$student->subject}}</h2>
        <h2>Address: {{$student->address}}</h2>
       <h2>Birthday: {{$student->birthday}}</h2>
       <h2>Email: {{$student->email}}</h2>
       <h2>Phone: {{$student->phone}}</h2>

    <button><a href="{{route('students.index',$student)}}">Back</a></button>