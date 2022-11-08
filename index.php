<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>croud iperation with ajax</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    

<div class="container">

  <div class="row justify-content-center mt-4">
    <div class="col-sm-8">
    <div class="shadow-sm mb-5 bg-body rounded">
        <h3 class="fs-4 text-center">User Info</h3>
        <div class="text-end">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#studentmodal">
       Add Student
         </button>
         </div>
        <table class="table" id="studentTable">

        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>CLASS</th>
                <th>Action</th>
            </tr>

            
        </thead>

        <tbody>

        </tbody>
        </table>
       </div>
    </div>
  </div>
</div>



<div class="modal fade" id="studentmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">User Info</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form  id="studentForm">
                <div class="from-group m-2">
                    <label for="id" class="form-label">student_id</label>
                    <input type="text"  class="form-control" name="student_id" id="student_id">
                </div>

                <div class="from-group m-2">
                    <label for="id" class="form-label">student_name</label>
                    <input type="text"  class="form-control" name="student_name" id="student_name">
                </div>

                <div class="from-group m-2">
                    <label for="id" class="form-label">student_class</label>
                    <input type="text"  class="form-control" name="student_class" id="student_class">
                </div>
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"  name="insert" class="btn btn-primary">Save Info</button>

      </div>
      </form>
    </div>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
 integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" 
 crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
 integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" 
 crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.6.1.min.js" 
 integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" 
 crossorigin="anonymous"></script>

 <script src="./main.js"></script>
</body>
</html>