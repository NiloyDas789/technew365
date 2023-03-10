@extends('layouts.backend')

@section('title', 'Role|Create')

@section('content')
<div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="titlemb-30">
                    <h2>Role</h2>
                </div>
            </div>
            <!-- end col -->
            <div class="col-md-6">
                <div class="breadcrumb-wrapper mb-30">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('/')}}">Dashboard</a>
                            </li>
                            {{-- <li class="breadcrumb-item"><a href="#0">Pages</a></li> --}}
                            <li class="breadcrumb-item active" aria-current="page">
                                Role
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->

    <div class="row">
        <div class="col-lg-10">
            <div class="card-style settings-card-1 mb-30">
                <div class="title mb-30 d-flex justify-content-between align-items-center">
                    <h6>Role</h6>
                    <button class="border-0 bg-transparent">
                        <i class="lni lni-pencil-alt"></i>
                    </button>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('role.create') }}" method="post">
                    @csrf
                    <div class="profile-info">
                        <div class="row">
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Role Name</label>
                                    <input type="text" name="name" value="{{ old('name') }}"
                                        class="@error('name') is-invalid @enderror" placeholder="Role Name">
                                    @error('name')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="select-style-2">
                                    <label for="permission_id">Select Permission</label>
                                    <div class="select-position">
                                        <select class="select2" id="permission_id" name="permissions[]" multiple>
                                            @foreach($permissions as $permission)
                                                <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                                            @endforeach

                                        </select>
                                        @error('name')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="main-btn primary-btn btn-hover">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
@endsection
