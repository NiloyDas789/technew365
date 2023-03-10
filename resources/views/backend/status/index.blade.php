@extends('layouts.backend')

@section('title', 'Status')


@section('content')

    <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Status</h2>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('backend') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Status
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row mb-30">
                        <div class="col-md-11">
                            <div class="mx-auto pull-right">
                                <div class="input-group mb-3">
                                    {{ Form::text('q',null,['class'=>'form-control','id'=>'q','placeholder'=>__('Search Here....')]) }}
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2"><i class="mdi mdi-magnify"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-primary btn-md waves-effect waves-light"
                                    data-bs-toggle="modal" data-bs-target="#create">Add
                            </button>
                            <!-- sample modal content -->
                            <div id="create" class="modal fade" tabindex="-1" role="dialog"
                                 aria-labelledby="createLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="createLabel">Create Status</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        {{ Form::open(['route' => 'status.store']) }}
                                        <div class="modal-body">
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            @include('backend.status.form')
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect"
                                                    data-bs-dismiss="modal">Close
                                            </button>
                                            <button type="submit"
                                                    class="btn btn-primary waves-effect waves-light">Create
                                            </button>
                                        </div>
                                        {{ Form::close() }}
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- ========== title-wrapper end ========== -->

        <!-- ========== tables-wrapper start ========== -->
        <div class="tables-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <div class="table-wrapper table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th><h6>#</h6></th>
                                    <th><h6>Name</h6></th>
                                    <th><h6>Status</h6></th>
                                    <th><h6>Action</h6></th>
                                </tr>
                                <!-- end table row-->
                                </thead>
                                <tbody>
                                @foreach($statuses as $status)
                                    <tr>
                                        <td>
                                            <div class="employee-image">
                                                <img src="backend/assets/images/lead/lead-1.png" alt=""/>
                                            </div>
                                        </td>
                                        <td class="min-width">
                                            <p>{{$status->name}}</p>
                                        </td>

                                        <td class="min-width">
                                            <span class="status-btn active-btn">Active</span>
                                        </td>
                                        <td>
                                            <div class="action">
                                                <button type="button" class="text-primary"
                                                        data-bs-toggle="modal" data-bs-target="#edit{{$status->id}}"><i
                                                        class="lni lni-highlight-alt"></i></button>

                                                {{ Form::open(['method' => 'DELETE', 'route' => ['status.destroy', $status->id], 'style' => 'display:inline']) }}
                                                {{ Form::button('<i class="lni lni-trash-can"  aria-hidden="true"></i>', ['class' => 'text-danger', 'type' => 'submit']) }}
                                                {{ Form::close() }}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                <!-- end table row -->

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
        <!-- ========== tables-wrapper end ========== -->
    </div>
@endsection
@push('style')
@endpush
@push('script')
    <script>
        $("#q").keyup(function () {
            var q = $(this).val();
            console.log(q);
            var csrf = "{{ @csrf_token() }}"
            $.ajax({
                url: "{{ route('status.search') }}",
                data: {
                    _token: csrf,
                    q: q
                },
                type: "POST",
            }).done(function (e) {
                console.log(e);
                $(".card-body").html(e);
            })
        })
    </script>
@endpush

