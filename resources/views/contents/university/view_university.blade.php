<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, Crud!</title>
</head>

<body>
    <div class="container">
        <div class="text-center">
            <h1 class="p-5">CRUD Application</h1>
            <a href="{{route('addUniversity')}}" class="btn btn-rounded btn-success mb-5 mt-2">Add University</a>
            <!-- <a href="{{route('create')}}" class="btn btn-rounded btn-success mb-5 mt-2">Add Student</a> -->
        </div>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sl</th>
                    <th scope="col">University Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($university as $key=>$university)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$university->university_name}}</td>
                    <!-- <a href="{{route('edit',$student->id)}}" class="btn btn-info">Edit</a>
                    <a href="{{route('delete',$student->id)}}" class="btn btn-danger" id="delete">Delete</a><a href="{{route('delete',$student->id)}}" class="btn btn-danger" id="delete">Add Students</a>
                    <a href="{{route('show',$student->id)}}" class="btn btn-success" id="details">Show Details</a>
                    </td> -->
                </tr>

                @endforeach

            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>