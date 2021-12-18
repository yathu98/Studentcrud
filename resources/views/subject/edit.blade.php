
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
    <label for="grade">Choose the grade:</label>
    <select id="grade" name="grade" value={{$student->grade}} >
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="F">F</option>
    </select>
        <br>
     {{$student->subject}} 
     <?php $sub =explode(',',$student->subject)?>
     <?php print_r($sub)?><br>
     <label for="subject">Subjects:</label>
     <label for="Science">Science</label>
     <input type="checkbox" id="science" name="subject[]" value="Science"<?php
        if(in_Array('Science',$sub)){
            echo 'checked';
        }
        ?> >
        <label for="Science">Tamil</label>
        <input type="checkbox" id="Tamil" name="subject[]" value="Tamil"<?php
        if(in_Array('Tamil',$sub)){
            echo 'checked';
        }
        ?> >
        <label for="Tamil">English</label>
        <input type="checkbox" id="English" name="subject[]" value="English"<?php
        if(in_Array('English',$sub)){
            echo 'checked';
        }
        ?> >
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