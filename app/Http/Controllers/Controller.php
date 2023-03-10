<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Gate;

class Controller extends BaseController
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;


    public function checkPermission(String $permission)
    {
        abort_if(Gate::denies($permission), 403);
    }

    public function checkPermissions(array $permissions)
    {
        abort_if(Gate::none($permissions), 403);
    }

    protected $itemPerPage = 10;

    public function putSL($collection)
    {
        $start = ($collection->currentPage() * $this->itemPerPage - $this->itemPerPage) + 1;
        $collection->each(function ($value) use (&$start) {
            $value->sl = $start++;
        });
    }
}
