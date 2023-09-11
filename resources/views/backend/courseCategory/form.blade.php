<div class="col-lg-12">
    <div class="input-style-1">
        <label for="title">Category Name <span class="text-sm text-danger">*</span></label>
        <input type="text" name="title" value="{{ $courseCategory->title ?? old('title') }}" id="title"
            class="@error('title') is-invalid @enderror" placeholder="Category Title">
        @error('title')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
</div>
