<div class="col-lg-6">
    <section class="max-w-xl mx-auto flex flex-col py-8 mb-4">
        <div class="py-8">
            <div class="input-style-1">
                <label>Image @if (request()->routeIs('job.create'))
                        <span class="text-sm text-danger">*</span>
                    @endif
                    <sup>( Passport Size )</sup>
                </label>
            </div>
            <!-- If you wish to reference an existing file (i.e. from your database), pass the url into imageData() -->
            <div x-data="imageData()" class="file-input flex items-center">
                <!-- Preview Image -->
                <div class="py-3 rounded-full overflow-hidden bg-gray-100">
                    <!-- Placeholder image -->
                    <div x-show="!previewPhoto" class="profile-image mb-1">
                        <img src="{{ isset($job->image) ? setImage($job->image) : asset('backend\assets\images\default\default_image.jpg') }}"
                            class="object-fit-cover" style="height: 90px; width:100px" alt="" srcset="">
                    </div>
                    <!-- Show a preview of the photo -->
                    <div x-show="previewPhoto" class="profile-image mb-1">
                        <img :src="previewPhoto" class="object-fit-cover" style="height: 90px; width:100px"
                            alt="">
                    </div>
                </div>

                <div class="flex items-center">
                    <!-- File Input -->
                    <div class="ml-5 rounded-md shadow-sm">
                        <!-- Replace the file input styles with our own via the label -->
                        <input @change="updatePreview($refs)" x-ref="input" type="file"
                            accept="image/*,capture=camera" name="image" id="image" class="custom">
                        <label for="image"
                            class="py-2 px-3 border border-gray-300 rounded-md text-sm leading-4 font-medium text-gray-700 hover:text-indigo-500 hover:border-indigo-300 focus:outline-none focus:border-indigo-300 focus:shadow-outline-indigo active:bg-gray-50 active:text-indigo-800 transition duration-150 ease-in-out">
                            Upload Photo
                        </label>
                    </div>
                    <div class="flex items-center text-sm text-gray-500 mx-2">
                        <!-- Display the file name when available -->
                        <span x-text="fileName || emptyText"></span>
                        <!-- Removes the selected file -->
                        <button x-show="fileName" @click="clearPreview($refs)" type="button" aria-label="Remove image"
                            class="mx-1 mt-1">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="x-circle" aria-hidden="true"
                                height="20px" width="20px" focusable="false">
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
<div class="col-lg-12">
    <div class="input-style-1">
        <label for="title">Placement Title <span class="text-sm text-danger">*</span></label>
        <input type="text" name="title" value="{{ $job->title ?? old('title') }}" id="title"
            class="@error('title') is-invalid @enderror" placeholder="Placement Title">
        @error('title')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="col-lg-12">
    <div class="input-style-1">
        <label for="company_name">Company Name <span class="text-sm text-danger">*</span></label>
        <input type="text" name="company_name" value="{{ $job->company_name ?? old('company_name') }}"
            id="company_name" class="@error('company_name') is-invalid @enderror" placeholder="Company Name">
        @error('company_name')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="col-lg-12">
    <div class="input-style-1">
        <label for="designation">Designation <span class="text-sm text-danger">*</span></label>
        <input type="text" name="designation" value="{{ $job->designation ?? old('designation') }}" id="designation"
            class="@error('designation') is-invalid @enderror" placeholder="Designation">
        @error('designation')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="col-lg-12">
    <div class="form-check form-switch toggle-switch mb-30">
        <input class="form-check-input @error('status') is-invalid @enderror" name="status"
            value="{{ $job->status ?? 1 }}" type="checkbox" id="status"
            @if (isset($job->status) && $job->status == 1) checked @endif>
        <label class="form-check-label" for="status">Status</label>
        @error('status')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
</div>
