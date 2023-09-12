@extends('layouts.backend')

@section('title', 'Course Category')


@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Course Category List</h2>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Course Category
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
                            {{-- <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#createCourse Category">Create</button> --}}

                            <!-- Button trigger modal -->
                            <a class="btn btn-primary float-end" href="{{ route('course-category.create') }}">Create</a>
                            {{-- <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                                data-bs-target="#createCourse Category">
                                Create
                            </button> --}}
                        </div>
                        @include('backend.courseCategory.table')
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        {{ $courseCategories->links('vendor.pagination.bootstrap-5') }}
        <!-- end row -->
    </div>
@endsection
