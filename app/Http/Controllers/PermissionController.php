<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    //
    public function index(Request $request)
    {
        // Get the currently authenticated user
        $user = $request->user();

        // Check if the user has permission to view permissions
        if (!$user->hasPermissionTo('view_permissions')) {
            abort(403, 'Unauthorized action.');
        }

        // Fetch all permissions
        $permissions = Permission::all();

        return view('permissions.index', compact('permissions'));
    }
}
