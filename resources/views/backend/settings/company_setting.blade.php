@extends('layouts.backend')

@section('title', 'Company Setting')


@section('content')
    <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="titlemb-30">
                        <h2>Settings</h2>
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
                                <li class="breadcrumb-item"><a href="#0">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Settings
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
                        <h6>My Profile</h6>
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
                    <form action="{{ route('company-setting.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="profile-info">
                            <div class="row d-flex">
                                <div class="col-lg-6">
                                    <section class="container max-w-xl mx-auto flex flex-col py-8">
                                        <div class="py-8">
                                            <div class="profile-meta">
                                                <h5 class="text-bold text-dark mb-10">Main Logo</h5>
                                            </div>
                                            <!-- If you wish to reference an existing file (i.e. from your database), pass the url into imageData() -->
                                            <div x-data="imageData()" class="file-input flex items-center">
                                                <!-- Preview Image -->
                                                <div class="p-3 rounded-full overflow-hidden bg-gray-100">
                                                    <!-- Placeholder image -->
                                                    <div x-show="!previewPhoto"  class="profile-image mb-1">
                                                        <img src="{{ setImage($company_setting->logo) }}" class="object-fit-cover" style="height: 75px; width:75px" alt=""
                                                            srcset="">
                                                    </div>
                                                    <!-- Show a preview of the photo -->
                                                    <div x-show="previewPhoto" class="profile-image mb-1">
                                                        <img :src="previewPhoto" class="object-fit-cover"
                                                            style="height: 75px; width:75px" alt="">
                                                    </div>
                                                </div>

                                                <div class="flex items-center">
                                                    <!-- File Input -->
                                                    <div class="ml-5 rounded-md shadow-sm">
                                                        <!-- Replace the file input styles with our own via the label -->
                                                        <input @change="updatePreview($refs)" x-ref="input" type="file"
                                                            accept="image/*,capture=camera" name="logo" id="logo"
                                                            class="custom">
                                                        <label for="logo"
                                                            class="py-2 px-3 border border-gray-300 rounded-md text-sm leading-4 font-medium text-gray-700 hover:text-indigo-500 hover:border-indigo-300 focus:outline-none focus:border-indigo-300 focus:shadow-outline-indigo active:bg-gray-50 active:text-indigo-800 transition duration-150 ease-in-out">
                                                            Upload Photo
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center text-sm text-gray-500 mx-2">
                                                        <!-- Display the file name when available -->
                                                        <span x-text="fileName || emptyText"></span>
                                                        <!-- Removes the selected file -->
                                                        <button x-show="fileName" @click="clearPreview($refs)"
                                                            type="button" aria-label="Remove image" class="mx-1 mt-1">
                                                            <svg viewBox="0 0 20 20" fill="currentColor" class="x-circle"
                                                                aria-hidden="true" height="20px" width="20px"
                                                                focusable="false">
                                                                <path fill-rule="evenodd"
                                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-lg-6">
                                    <section class="container max-w-xl mx-auto flex flex-col py-8">
                                        <div class="py-8">
                                            <div class="profile-meta">
                                                <h5 class="text-bold text-dark mb-10">Footer Logo</h5>
                                            </div>
                                            <!-- If you wish to reference an existing file (i.e. from your database), pass the url into imageData() -->
                                            <div x-data="imageData()" class="file-input flex items-center">
                                                <!-- Preview Image -->
                                                <div class="p-3 overflow-hidden bg-gray-100">
                                                    <!-- Placeholder image -->
                                                    <div x-show="!previewPhoto"  class="profile-image mb-1">
                                                        <img src="{{ setImage($company_setting->footer_logo) }}" class="object-fit-cover" style="height: 75px; width:75px" alt="" srcset="">
                                                    </div>
                                                    <!-- Show a preview of the photo -->
                                                    <div x-show="previewPhoto" class="profile-image mb-1">
                                                        <img :src="previewPhoto" class="object-fit-cover" style="height: 75px; width:75px"  alt="">
                                                    </div>
                                                </div>

                                                <div class="flex items-center">
                                                    <!-- File Input -->
                                                    <div class="ml-5 rounded-md shadow-sm">
                                                        <!-- Replace the file input styles with our own via the label -->
                                                        <input @change="updatePreview($refs)" x-ref="input" type="file"
                                                            accept="image/*,capture=camera" name="footer_logo"
                                                            id="footer_logo" class="custom">
                                                        <label for="footer_logo"
                                                            class="py-2 px-3 border border-gray-300 rounded-md text-sm leading-4 font-medium text-gray-700 hover:text-indigo-500 hover:border-indigo-300 focus:outline-none focus:border-indigo-300 focus:shadow-outline-indigo active:bg-gray-50 active:text-indigo-800 transition duration-150 ease-in-out">
                                                            Upload Photo
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center text-sm text-gray-500 mx-2">
                                                        <!-- Display the file name when available -->
                                                        <span x-text="fileName || emptyText"></span>
                                                        <!-- Removes the selected file -->
                                                        <button x-show="fileName" @click="clearPreview($refs)"
                                                            type="button" aria-label="Remove image" class="mx-1 mt-1">
                                                            <svg viewBox="0 0 20 20" fill="currentColor" class="x-circle"
                                                                aria-hidden="true" height="20px" width="20px"
                                                                focusable="false">
                                                                <path fill-rule="evenodd"
                                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <br />
                            <br />


                            <div class="row">

                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Company Name</label>
                                        <input type="text" name="name" value="{{ $company_setting->name }}"
                                            class="@error('name') is-invalid @enderror" placeholder="Company Name">
                                        @error('name')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Email</label>
                                        <input type="email" name="email" value="{{ $company_setting->email }}"
                                            class="@error('email') is-invalid @enderror" placeholder="Email">
                                        @error('email')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="input-style-1">
                                        <label>Mobile Number 1</label>
                                        <input type="text" name="mobile1" value="{{ $company_setting->mobile1 }}"
                                            class="@error('mobile1') is-invalid @enderror" placeholder="Mobile Number ">
                                        @error('mobile1')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="input-style-1">
                                        <label>Mobile Number 2</label>
                                        <input type="text" name="mobile2" value="{{ $company_setting->mobile2 }}"
                                            class="@error('mobile2') is-invalid @enderror" placeholder="Mobile Number ">
                                        @error('mobile2')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Location</label>
                                        <input type="text" name="location" value="{{ $company_setting->location }}"
                                            class="@error('location') is-invalid @enderror" placeholder="Location">
                                        @error('location')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="input-style-1">
                                        <label>Facebook</label>
                                        <input type="text" name="facebook" value="{{ $company_setting->facebook }}"
                                            class="@error('facebook') is-invalid @enderror" placeholder="Facebook">
                                        @error('facebook')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="input-style-1">
                                        <label>Twitter</label>
                                        <input type="text" name="twitter" value="{{ $company_setting->twitter }}"
                                            class="@error('twitter') is-invalid @enderror" placeholder="Twitter">
                                        @error('twitter')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="input-style-1">
                                        <label>Instagram</label>
                                        <input type="text" name="instagram" value="{{ $company_setting->instagram }}"
                                            class="@error('instagram') is-invalid @enderror" placeholder="Instagram">
                                        @error('instagram')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="input-style-1">
                                        <label>Whatsapp</label>
                                        <input type="text" name="whatsapp" value="{{ $company_setting->whatsapp }}"
                                            class="@error('whatsapp') is-invalid @enderror" placeholder="Whatsapp">
                                        @error('whatsapp')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>About</label>
                                        <textarea name="about" value="{{ $company_setting->about }}" class="@error('about') is-invalid @enderror"
                                            placeholder="Type here" rows="6"></textarea>
                                        @error('about')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="input-style-1">
                                        <label>Meta Title</label>
                                        <input type="text" name="meta_title"
                                            value="{{ $company_setting->meta_title }}"
                                            class="@error('meta_title') is-invalid @enderror" placeholder="Meta Title">
                                        @error('meta_title')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="input-style-1">
                                        <label>Meta Keywords</label>
                                        <input type="text" name="meta_keywords"
                                            value="{{ $company_setting->meta_keywords }}"
                                            class="@error('meta_keywords') is-invalid @enderror"
                                            placeholder="Meta Keywords">
                                        @error('meta_keywords')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Meta Description</label>
                                        <textarea name="meta_description" value="{{ $company_setting->meta_description }}"
                                            class="@error('meta_description') is-invalid @enderror" placeholder="Type here" rows="4"></textarea>
                                        @error('meta_description')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>About Footer</label>
                                        <textarea name="about_footer" value="{{ $company_setting->about_footer }}"
                                            class="@error('about_footer') is-invalid @enderror" placeholder="Type here" rows="2"></textarea>
                                        @error('about_footer')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="main-btn primary-btn btn-hover">
                                        Update Settings
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
@endpush
