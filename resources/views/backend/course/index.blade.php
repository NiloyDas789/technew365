@extends('layouts.backend')

@section('title', 'Course')


@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Course List</h2>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#0">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Course
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end page title -->
        <div class="tables-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <div class="mb-50">
                            {{-- <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#createCourse">Create</button> --}}

                            <!-- Button trigger modal -->
                            <a class="btn btn-primary float-end" href="{{ route('course.create') }}">Create</a>
                            {{-- <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                                data-bs-target="#createCourse">
                                Create
                            </button> --}}
                        </div>
                        <div class="table-wrapper table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <h6>Course title</h6>
                                        </th>
                                        <th>
                                            <h6>Status</h6>
                                        </th>
                                        <th>
                                            <h6>Action</h6>
                                        </th>
                                    </tr>
                                    <!-- end table row-->
                                </thead>
                                <tbody>
                                    @foreach ($courses as $course)
                                        <tr>
                                            <td class="min-width">
                                                <p>{{ $course->title }}</p>
                                            </td>
                                            <td class="min-width">
                                                @if ($course->status == 0)
                                                    <span class="status-btn close-btn">Inactive</span>
                                                @else
                                                    <span class="status-btn active-btn">Active</span>
                                                @endif
                                            </td>

                                            <td>
                                                <div class="action">
                                                    <button class="text-danger">
                                                        <i class="lni lni-trash-can"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <!-- end table row -->
                                </tbody>
                            </table>
                            <!-- end table -->
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end row -->
    </div>
@endsection

@push('script')
    <script>
        $('.select2').select2({
            dropdownParent: $('#createCourse'),
            placeholder: 'Select an option',
        });
    </script>
@endpush
