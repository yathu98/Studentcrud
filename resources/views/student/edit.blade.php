
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Student</h1>

    <form action="{{route('students.update',$student->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="fname">First Name</label>
        <input type="text" name="fname" id="fname" value={{$student->fname}}>
        <br>
        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="lname" value={{$student->lname}}>
        <br>
        <label for="gender">Gender</label><br>
        <input type="radio" name="gender" id="male" value="male" {{ $student->gender=='male' ? 'checked' : '' }}> <label for="male">Male</label>
        <input type="radio" name="gender" id="female" value="female" {{ $student->gender=='female' ? 'checked' : '' }}> <label for="female">Female</label><br><br>
    <br>
    {{-- <label for="gradeID">Choose the grade:</label>
    <select id="gradeID" name="gradeID">
      @foreach ($grades as $grade)
      @if($grade->id==$student->grade_id)
      <option value="{{$grade->grade_name}}" selected>{{$grade->grade_name}}</option>
      @else
      <option value="{{$grade->grade_name}}" >{{$grade->grade_name}}</option>
        @endif
      @endforeach
</select> --}}
<label for="gradeID">Choose the grade:</label>
<select id="gradeID" name="gradeID">
    @foreach ($grades as $grade)
    <option value="{{$grade->id}}" {{($grade->id==$student->grade_id)?'selected':''}}>{{$grade->grade_name}}</option>
   
    @endforeach
</select>


  
        <br>
  
     <br>    
        <label for="address">Address:</label>
        <br>
    <textarea id="address" name="address" rows="4" cols="50" value={{$student->address}}>
        </textarea>
<br><br>
<label for="birthday">Birthday:</label>
<input type="date" id="birthday" name="birthday" value={{$student->birthday}}>
<br><br>
@if ($errors->has('birthday'))
    <span class="alert alert-danger">
       
           {{$errors->first('birthday')}}
       
    </span>
@endif
<br>
<label for="email">Enter your email:</label>
<input type="email" id="email" name="email" value={{$student->email}}>
<br>
<label for="phone">Enter a phone number:</label><br><br>
  <input type="tel" id="phone" name="phone" placeholder="076-457-6788" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required value={{$student->phone}}><br>
  <br>    
  <button  input type="submit"> Save</button>
        <button><a href="{{route('students.index')}}">Back</a></button>  
    </form>
</body>
</html>