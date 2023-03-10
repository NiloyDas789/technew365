<div class="card-style settings-card-1 mb-30">
    <div class="title mb-30 d-flex justify-content-between align-items-center">
        <h6>Update Password</h6>
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
    <form action="{{ route('password.update') }}" method="post">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-12">
                <div class="input-style-1">
                    <label for="current_password">Current Password</label>
                    <input type="password" placeholder="Current Password" name="current_password" id="current_password"
                        required autocomplete="current_password"
                        class="@error('current_password') is-invalid @enderror" />
                    @error('current_password')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="input-style-1">
                    <label for="password">New Password</label>
                    <input type="password" placeholder="New Password" name="password" id="password" required
                        autocomplete="new-password" />
                </div>
            </div>
            <div class="col-12">
                <div class="input-style-1">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" placeholder="Confirm Password" name="password_confirmation"
                        id="password_confirmation" required autocomplete="password_confirmation" />
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
