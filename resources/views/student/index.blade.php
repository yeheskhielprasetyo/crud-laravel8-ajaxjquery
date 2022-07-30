@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Student Data
                        <a href="#" class="btn btn-primary float-end btn-sm" data-bs-toggle="modal" data-bs-target="#AddStudentModal">Add Student</a>
                    </h4>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Modal -->
    <div class="modal fade" id="AddStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-3">
                    <label for="">Student Name</label>
                    <input type="text" class="name form-control" name="" id="">
                </div>
                <div class="form-group mb-3">
                    <label for="">Email</label>
                    <input type="text" class="email form-control" name="" id="">
                </div>
                <div class="form-group mb-3">
                    <label for="">Phone</label>
                    <input type="text" class="phone form-control" name="" id="">
                </div>
                <div class="form-group mb-3">
                    <label for="">Course</label>
                    <input type="text" class="course form-control" name="" id="">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary add_student">Save</button>
            </div>
        </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $(document).on('click', '.add_student', function (e) {
                e.preventDefault();

                var data = {
                    'name' : $('.name').val(),
                    'email' : $('.email').val(),
                    'phone' : $('.phone').val(),
                    'course' : $('.course').val()
                }
                console.log(data);

            })
        })
    </script>
@endpush
