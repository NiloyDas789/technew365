<div class="col-lg-12">
    <div class="input-style-1">
        <label for="name">Student Name <span class="text-sm text-danger">*</span></label>
        <input type="text" name="name" value="{{ $certification->name ?? old('name') }}" id="name"
            class="@error('name') is-invalid @enderror" placeholder="Student Name">
        @error('name')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="col-lg-12">
    <div class="input-style-1">
        <label for="student_id">Student ID <span class="text-sm text-danger">*</span></label>
        <input type="text" name="student_id" value="{{ $certification->student_id ?? old('student_id') }}"
            id="student_id" class="@error('student_id') is-invalid @enderror" placeholder="Student ID">
        @error('student_id')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="col-lg-12">
    <div class="input-style-1">
        <label for="course_title">Course Title <span class="text-sm text-danger">*</span></label>
        <input type="text" name="course_title" value="{{ $certification->course_title ?? old('course_title') }}"
            id="course_title" class="@error('course_title') is-invalid @enderror" placeholder="Course Title">
        @error('course_title')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="col-lg-12">
    <div class="input-style-1">
        <label for="completion_date">Course Completetion Date <span class="text-sm text-danger">*</span></label>
        <input type="date" name="completion_date"
            value="{{ $certification->completion_date ?? old('completion_date') }}" id="completion_date"
            class="@error('completion_date') is-invalid @enderror" placeholder="Course Completetion Date">
        @error('completion_date')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="col-lg-12">
    <div class="form-check form-switch toggle-switch mb-30">
        <input class="form-check-input @error('status') is-invalid @enderror" name="status"
            value="{{ $certification->status ?? 1 }}" type="checkbox" id="status"
            @if (isset($certification->status) && $certification->status == 1) checked @endif>
        <label class="form-check-label" for="status">Status</label>
        @error('status')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
</div>
