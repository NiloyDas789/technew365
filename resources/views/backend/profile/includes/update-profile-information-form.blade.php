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
    <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-12">
                <div class="input-style-1">
                    <label>Full Name</label>
                    <input type="text" placeholder="Full Name" name="name" value="{{ old('name', $user->name) }}"
                        required autofocus autocomplete="name" class="@error('name') is-invalid @enderror" />
                    @error('name')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="input-style-1">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Email" value="{{ old('email', $user->email) }}"
                        required autocomplete="email" class="@error('email') is-invalid @enderror" />
                    @error('email')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="main-btn primary-btn btn-hover">
                    Update Profile
                </button>
            </div>
        </div>
    </form>
</div>
