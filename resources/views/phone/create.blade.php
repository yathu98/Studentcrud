<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>
<body>
<h1>Create</h1>

<form action="{{route('students.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="fname">First Name</label>
    <input type="text" name="fname" id="fname">
    <br>
    <label for="lname">Last Name</label>
    <input type="text" name="lname" id="lname">
    <br>
    <label for="gender">Gender</label><br>
      <input type="radio" name="gender" id="male" value="male"> <label for="male">Male</label>
			<input type="radio" name="gender" id="female" value="female"> <label for="female">Female</label><br>


   <br>
   <label for="subject">Subjects :</label>
    <label for="subject">Science</label>
    <input type="checkbox" id="science" name="subject[]" value="Science">
    <label for="subject">Tamil</label>
    <input type="checkbox" id="Tamil" name="subject[]" value="Tamil">
    <label for="subject">English</label>
    <input type="checkbox" id="English" name="subject[]" value="English">
    <br>
    <label for="grade">Choose the grade:</label>
    <select id="grade" name="grade">
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="F">F</option>
</select>
<br>
<label for="address">Address:</label>
<br>
<textarea id="address" name="address" rows="4" cols="50">
</textarea>
<br>
<label for="birthday">Birthday:</label>
<input type="date" id="birthday" name="birthday">
<br><br>
@if ($errors->has('birthday'))
    <span class="alert alert-danger">
       
           {{$errors->first('birthday')}}
       
    </span>
@endif
<br><br>
<label for="email">Enter your email:</label>
<input type="email" id="email" name="email">
<br>
<label for="phone">Enter a phone number:</label><br><br>
  <input type="tel" id="phone" name="phone" placeholder="076-457-6788" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required><br>
   <br>
  
  <button input type="submit">Submit</button>
  <button><a href="{{route('students.index')}}">Back</a></button>
    
</form>
</body>
</html>