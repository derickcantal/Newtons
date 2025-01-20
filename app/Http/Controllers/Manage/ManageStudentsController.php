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
        $timenow = Carbon::now()->timezone('Asia/Manila')->format('Y-m-d H:i:s');
        $yearlevel = yearlevel::where('levelid', $request->levelid)->get();
        $schoolyear = schoolyear::where('syid', $request->syid)->get();

        $user = student::create([
            'studentid' => '2024',
            'levelid' => '1',
            'levelname' => '1',
            'syid' => '1',
            'syname' => '1',
            'username' => $request->username,
            'avatar' => 'avatars/avatar-default.jpg',
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'lastname' => $request->lastname,
            'birthdate' => $request->birthdate,
            'house' => $request->house,
            'street' => $request->street,
            'brgy' => $request->brgy,
            'city' => $request->city,
            'province' => $request->province,
            'fathersname' => $request->fname,
            'foccupation' => $request->foccupation,
            'mothersname' => $request->mname,
            'moccupation' => $request->moccupation,
            'guardian' => $request->guardian,
            'relationship' => $request->relationship,
            'contact' => $request->contact,
            'accesstype' => 'Student',
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
            return redirect()->route('managestudents.index')
                        ->with('success','Student created successfully.');
        }else{
            return redirect()->route('managestudents.index')
                        ->with('failed','Student creation failed.');
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
    public function edit($sid)
    {
        $user = student::where('sid', $sid)->first();

        $yearlevel = yearlevel::orderBy('levelname', 'asc')->get();
        $schoolyear = schoolyear::orderBy('syname', 'asc')->get();
        
        return view('manage.students.edit')
                    ->with(['user' => $user])
                    ->with(['schoolyear' => $schoolyear])
                    ->with(['yearlevel' => $yearlevel]);
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
