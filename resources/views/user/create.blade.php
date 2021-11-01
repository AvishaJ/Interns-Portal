{{-- @extends('layouts.master')

@section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <div class="col d-flex justify-content-center">
  <div class="card" style="width: 40rem;" >
    <h2>Register</h2>
    <div class="card-body">
    <form method="POST" action="{{url('user-register')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Enter Name</label><br>
            <input type="text" name="uname" placeholder="Enter Firstname Lastname" class="form-control" required />
          </div>
    
            <div class="form-group">
            <label>Enter Address</label><br>
            
            <textarea name="adr" placeholder="Enter Address" class="form-control" required></textarea>
          </div>
          <div class="form-group">
            <label>Enter Email Address</label><br>
            <input type="email" name="email" class="form-control" placeholder="Enter Email Address" required />
          </div>
          <div class="form-group">
            <label>Enter Age</label><br>
            <input type="text" name="age" placeholder="Enter Age" class="form-control" pattern="\d*" required />
          </div>
          <div class=form-group>
            <label for="birthday">DOB:</label><br>
            <input type="date" id="dob" name="dob" placeholder="Enter Birthdate" class="form-control" pattern="\d*" required>
          </div>
          <div class="form-group">
            <label>Select Gender</label><br>
            <select name="gender" class="form-control" required>
              <option value="">Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div class="form-group">
            <label>Enter Mobile Number</label><br>
            <input type="text" name="phno" placeholder="Enter Mobile Number" class="form-control" pattern="\d*" required />
          </div>
          <div class="form-group">
            <label>Experience</label><br>
            <textarea name="exp" placeholder="Enter Address" class="form-control" required></textarea>
          </div>
          <div class="form-group">
            <label>Select Your Resume</label><br>
            <input type="file" name="resume" accept=".doc,.docx,.pdf" required />
          </div>
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
        {{-- @include('partials.formerrors') --}}
    </form>
  </div>
  </div>
  </div>
</body>
</html>
{{-- @endsection  --}}
 
 
