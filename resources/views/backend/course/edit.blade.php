@extends('layouts.backend')

@section('title', 'Course|Edit')


@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit Course</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Course</a></li>
                            <li class="breadcrumb-item active">Edit Course</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row d-flex justify-content-center">
            <div class="col-9">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">

                    <form action="{{ route('course.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="profile-info">
                            <div class="row">
                                @include('backend.course.form')
                                <div class="col-12">
                                    <button type="submit" class="main-btn primary-btn btn-hover">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->



    </div>
@endsection

@push('script')
    <script>
        function imageData(url) {
            const originalUrl = url || '';
            return {
                previewPhoto: originalUrl,
                fileName: null,
                emptyText: originalUrl ? 'No new file chosen' : 'No file chosen',
                updatePreview($refs) {
                    var reader,
                        files = $refs.input.files;
                    reader = new FileReader();
                    reader.onload = (e) => {
                        this.previewPhoto = e.target.result;
                        this.fileName = files[0].name;
                    };
                    reader.readAsDataURL(files[0]);
                },
                clearPreview($refs) {
                    $refs.input.value = null;
                    this.previewPhoto = originalUrl;
                    this.fileName = false;
                }
            };
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.summernote').summernote({
                placeholder: 'Course Description',
                height: 200
            });
        });
    </script>
@endpush

@push('style')
    <style>
        input[type="file"].custom {
            border: 0;
            clip: rect(0, 0, 0, 0);
            height: 1px;
            overflow: hidden;
            padding: 0;
            position: absolute !important;
            white-space: nowrap;
            width: 1px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush
