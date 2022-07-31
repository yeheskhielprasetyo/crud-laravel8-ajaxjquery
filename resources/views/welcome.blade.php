    <!DOCTYPE html>
    <html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App Laravel 8 & Ajax</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />
    </head>
    <body class="bg-light">
    <div class="container">
        <div class="row my-5">
        <div class="col-lg-12">
            <div class="card shadow">
            <div class="card-header bg-danger d-flex justify-content-between align-items-center">
                <h3 class="text-light">Manage Employees</h3>
                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addEmployeeModal"><i
                    class="bi-plus-circle me-2"></i>Add New Employee</button>
            </div>
            <div class="card-body" id="show_all_employees">
                <h1 class="text-center text-secondary my-5">Loading...</h1>
            </div>
            </div>
        </div>
        </div>
    </div>

    {{-- add new employee modal start --}}
    <div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Employee</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="POST" id="add_employee_form" enctype="multipart/form-data">
            @csrf
            <div class="modal-body p-4 bg-light">
            <div class="row">
                <div class="col-lg">
                <label for="fname">First Name</label>
                <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                </div>
                <div class="col-lg">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                </div>
            </div>
            <div class="my-2">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="E-mail" required>
            </div>
            <div class="my-2">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" class="form-control" placeholder="Phone" required>
            </div>
            <div class="my-2">
                <label for="post">Post</label>
                <input type="text" name="post" class="form-control" placeholder="Post" required>
            </div>
            <div class="my-2">
                <label for="avatar">Select Avatar</label>
                <input type="file" name="avatar" class="form-control" required>
            </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" id="add_employee_btn" class="btn btn-primary">Add Employee</button>
            </div>
        </form>
        </div>
    </div>
    </div>
    {{-- add new employee modal end --}}

    {{-- edit employee modal start --}}
    <div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Employee</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="POST" id="edit_employee_form" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="emp_id" id="emp_id">
            <input type="hidden" name="emp_avatar" id="emp_avatar">
            <div class="modal-body p-4 bg-light">
            <div class="row">
                <div class="col-lg">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" required>
                </div>
                <div class="col-lg">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" required>
                </div>
            </div>
            <div class="my-2">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required>
            </div>
            <div class="my-2">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone" required>
            </div>
            <div class="my-2">
                <label for="post">Post</label>
                <input type="text" name="post" id="post" class="form-control" placeholder="Post" required>
            </div>
            <div class="my-2">
                <label for="avatar">Select Avatar</label>
                <input type="file" name="avatar" class="form-control">
            </div>
            <div class="mt-2" id="avatar">
            </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" id="edit_employee_btn" class="btn btn-success">Update Employee</button>
            </div>
        </form>
        </div>
    </div>
    </div>
    {{-- edit employee modal end --}}




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
    </html>
