<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Database\Eloquent\Builder;
use App\Models\student;
use App\Models\schoolyear;
use App\Models\yearlevel;


class ManageStudentsController extends Controller
{
    public function search()
    {
        //
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $timenow = Carbon::now()->timezone('Asia/Manila')->format('Y-m-d H:i:s');

        $user = student::orderBy('status','asc')
                    ->paginate(5);

        return view('manage.students.index',compact('user'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $yearlevel = yearlevel::orderBy('levelname', 'asc')->get();
        $schoolyear = schoolyear::orderBy('syname', 'asc')->get();
        
        return view('manage.students.create')
                    ->with(['schoolyear' => $schoolyear])
                    ->with(['yearlevel' => $yearlevel]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
