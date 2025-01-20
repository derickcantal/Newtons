<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Database\Eloquent\Builder;
use App\Models\schoolyear;


class ManageSchoolYearController extends Controller
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

        $user = schoolyear::orderBy('status','asc')
                    ->paginate(5);

        return view('manage.schoolyear.index',compact('user'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manage.schoolyear.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $timenow = Carbon::now()->timezone('Asia/Manila')->format('Y-m-d H:i:s');
        $schoolyear = $request->schoolyearstart . '-' . $request->schoolyearend;

        $user = schoolyear::create([
            'syname' => $schoolyear,
            'status' => 'Active',
            'notes' => '.',
            'created_by' => auth()->user()->email,
            'updated_by' => '.',
            'timerecorded' => $timenow,
            'posted' => 'N',
            'mod' => 0,
            'copied' => 'N',
        ]);
        if($user){
            return redirect()->route('managesy.index')
                        ->with('success','School Year created successfully.');
        }else{
            return redirect()->route('managesy.index')
                        ->with('failed','School Year creation failed.');
        }
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
