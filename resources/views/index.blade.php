<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Student Registation Form</title>
  </head>
  <body>
    <div class="container">
          <div class="form-group col-12 p-0">
                <div>
                  @if(Session::has('success'))
                      <div class="alert alert-success">
                          {{Session::get('success')}}
                      </div>
                      @endif
                </div>

                  <form action="{{route('store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                          <div class="col-sm-12">
                                <h2 style="text-align:center; color:blue">Student Details</h2>
                          </div>
                    </div>

  <hr/>
        <div class="row">
            <div class="form-group col-md-6">
                <lable>Student Name</lable>
                <input type="text" name="sname" class="form-control" id="sname" placeholder="Student Name">
            </div>

             <div class="form-group col-md-6">
                <lable>Course</lable>
                <input type="text" name="course" class="form-control" id="course" placeholder="Course">
            </div>

             <div class="form-group col-md-6">
                <lable>Fee</lable>
                <input type="text" name="fee" class="form-control" id="fee" placeholder="Fee">
            </div>

            <div class="form-group col-md-6 my-4" align="center" >
                <button class="btn btn-success" style="width:80px;">Submit</button>
            </div>
        </div>

                  </form>

          </div>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>