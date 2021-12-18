<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$student->fname}} {{$student->lname}} 's Subject</h1>
    <form action="{{route('students.subjects.store',$student->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label >Choose the Subject:</label>
        
         
                
                    
             
            @foreach ($subjects as $subject)
                    
         
                  
                    
                         <label for="{{$subject->id}}">
                         <input type="checkbox"  name="subject[]" id="{{$subject->id}}" value="{{$subject->id}}" 
                         {{ $student->subjects->contains($subject->id) ? 'checked' : '' }}>
                            
                         {{$subject->subject_name}}</label>
                 
          
             @endforeach
            <br><br>
            <button input type="submit">Submit</button>
    </form>
    
   
</body>
</html>