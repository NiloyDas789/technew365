<div class="col-12">
    <div class="input-style-1">
        <label>Role Name</label>
        <input type="text" name="name" value="{{ $role->name ?? old('name') }}"
            class="@error('name') is-invalid @enderror" placeholder="Role Name">
        @error('name')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="col-12">
    <div class="select-style-2">
        <label>Permissions</label>
        <div class="select-position">
            <select class="select2" name="permissions[]" multiple>
                @foreach ($permissions as $permission)
                    <option value="{{ $permission->id }}"
                        {{ $role->hasPermissionTo($permission->id) ? 'selected' : '' }}>
                        {{ $permission->name }}</option>
                @endforeach
            </select>
            @error('permissions')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>
