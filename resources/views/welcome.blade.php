<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel To Do Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </head>
  <body>
    <h1 class="text-center mt-5">To-Do List Project</h1>
    <div class="container">
        <div class="float-end mt-4 mb-5">
          <a href="create" class="btn btn-primary">Add New Date</a>
</div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Created_At</th>
      <th scope="col">Updated_At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   
    @foreach($fetch_arr as $data)
    <tr>
    <td>
      {{$data->id}}
    </td>
    <td>
      {{$data->name}}
    </td>
    <td>
      {{$data->email}}
    </td>
    <td>
      {{$data->created_at}}
    </td>
    <td>
      {{$data->updated_at}}
    </td>
    <td> <a href="delete/{{$data->id}}" class="btn btn-danger">Delete</a> | <a href="edit/{{$data->id}}" class="btn btn-success">Edit</a>

</td>
</tr>
   @endforeach
  </tbody>
</table>
</div>
  </body>
</html>