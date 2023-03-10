<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->checkPermission('role.access');
        $roles = Role::orderBy('id', 'DESC')->paginate($this->itemPerPage);
        $permissions = Permission::select('name', 'id')->get();
        $this->putSL($roles);
        return view('backend.role.index', compact('roles', 'permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->checkPermission('role.create');
        $permissions = Permission::get();
        return view('backend.role.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->checkPermission('role.store');
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permissions' => 'required',
        ]);

        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permissions'));

        return redirect()->route('role.index')
                        ->with('success', 'Role created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        $this->checkPermission('role.show');
        return view('backend.role.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $this->checkPermission('role.edit');
        $permissions = Permission::pluck('name', 'id');

        return view('backend.role.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $this->checkPermission('role.update');
        $this->validate($request, [
            'name' => 'required',
            'permissions' => 'required',
        ]);

        $role->name = $request->input('name');
        $role->save();

        $role->syncPermissions($request->input('permissions'));

        return redirect()->route('role.index')
                        ->with('success', 'Role updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $this->checkPermission('role.destroy');
        $role->delete();
        return redirect()->route('role.index')
                        ->with('success', 'Role deleted successfully');
    }

    public function assign()
    {
        $this->checkPermission('role_permission.assign');
        $users = User::all();
        $roles = Role::all();
        return view('backend.role.assign', compact('users', 'roles'));
    }

    public function storeAssign(Request $request)
    {
        $this->checkPermission('role_permission.assign');
        User::findOrFail($request->input('user_id'))
            ->syncRoles($request->input('role_id'));

        return redirect()->route('role.assign')->with('success', 'Role assigned to user successfully.');
    }
}
