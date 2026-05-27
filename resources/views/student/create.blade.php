@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Add New Student') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="alert alert-info">
                        This is the form for adding new students information
                    </div>

                    <div class="card">
                        <div class="card-body p-0">
                            <form action="{{ route('student.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" name="fname" id="fname" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input type="text" name="lname" id="lname" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="mname">Middle Name</label>
                                    <input type="text" name="mname" id="mname" class="form-control" required>
                                </div>  
                                <div class="form-group">
                                    <label for="add">Address</label>
                                    <input type="text" name="add" id="add" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="dobirth">Date of Birth</label>
                                    <input type="date" name="dobirth" id="dobirth" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Add Student</button>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection