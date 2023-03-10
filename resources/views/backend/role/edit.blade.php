@extends('layouts.backend')

@section('title', 'Role|Edit')


@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Edit Role</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Role</a></li>
                        <li class="breadcrumb-item active">Edit Role</li>
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

                {{ Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'PUT', 'class' =>
                'form-horizontal']) }}
                <div class="card-body">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} mb-3">
                        {{ Form::label('name', 'Name', ['class' => 'col-sm-3 control-label']) }}
                        <div class="col-sm-9">
                            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter name',
                            'required' => 'required']) }}
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('permission') ? ' has-error' : '' }} mb-3">
                        {{ Form::label('permission', 'permission', ['class' => 'col-sm-3 control-label']) }}
                        <div class="col-sm-9">
                            {{ Form::select('permission[]', $permission, $role->permissions, ['class' => 'form-control
                            select2','multiple'=>'multiple', 'required' => 'required']) }}
                            <small class="text-danger">{{ $errors->first('permission') }}</small>
                        </div>
                    </div>


                    <div class="mt-5">
                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                    </div>
                </div>
                {{ Form::close() }}



            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->



</div>
@endsection
