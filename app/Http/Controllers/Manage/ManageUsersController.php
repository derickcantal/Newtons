<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use App\Models\user_login_log;
use \Carbon\Carbon;

class ManageUsersController extends Controller
{
    public function userlog($notes,$status){
        $timenow = Carbon::now()->timezone('Asia/Manila')->format('Y-m-d H:i:s');
        
        $userlog = user_login_log::query()->create([
            'userid' => auth()->user()->userid,
            'username' => auth()->user()->username,
            'firstname' => auth()->user()->firstname,
            'middlename' => auth()->user()->middlename,
            'lastname' => auth()->user()->lastname,
            'email' => auth()->user()->email,
            'accesstype' => auth()->user()->accesstype,
            'timerecorded'  => $timenow,
            'created_by' => auth()->user()->email,
            'updated_by' => 'Null',
            'mod'  => 0,
            'notes' => $notes,
            'status'  => $status,
        ]);
    }

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

        $user = User::orderBy('status','asc')
                    ->paginate(5);

        return view('manage.users.index',compact('user'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manage.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $timenow = Carbon::now()->timezone('Asia/Manila')->format('Y-m-d H:i:s');
        
        $user = User::create([
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
            'contact' => $request->contact,
            'accesstype' => $request->accesstype,
            'status' => 'Active',
            'notes' => '.',
            'created_by' => $request->email,
            'updated_by' => '.',
            'timerecorded' => $timenow,
            'posted' => 'N',
            'mod' => 0,
            'copied' => 'N',
        ]);
        if($user){
            return redirect()->route('manageusers.index')
                        ->with('success','User created successfully.');
        }else{
            return redirect()->route('manageusers.index')
                        ->with('failed','User creation failed.');
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
    public function edit(User $user)
    {
        return view('manage.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $timenow = Carbon::now()->timezone('Asia/Manila')->format('Y-m-d H:i:s');

        $mod = 0;
        $mod = $user->mod;

        if(auth()->user()->accesstype == 'Supervisor')
        {
            if($request->accesstype == 'Administrator')
            {
                $notes = 'Users. Create. Admin Account';
                $status = 'Failed';
                $this->userlog($notes,$status);
                
                return redirect()->route('manageusers.index')
                        ->with('failed','User update failed');
            }
            elseif($request->accesstype == 'Supervisor')
            {
                $notes = 'Users. Create. Supervisor Account';
                $status = 'Failed';
                $this->userlog($notes,$status);
                
                return redirect()->route('manageusers.index')
                        ->with('failed','User update failed');
            }
        }
        if(!empty($request->password) != !empty($request->password_confirmation)){
            $notes = 'Users. Create. Password Mismatched. ' . $request->lastname;
            $status = 'Failed';
            $this->userlog($notes,$status);
            
            return redirect()->route('manageusers.index')
                    ->with('failed','User update failed');
        }
        if(empty($request->password)){
            $user =User::where('userid',$user->userid)->update([
                'username' => $request->username,
                'email' => $request->email,
                'firstname' => $request->firstname,
                'middlename' => $request->middlename,
                'lastname' => $request->lastname,
                'birthdate' => $request->birthdate,
                'house' => $request->house,
                'street' => $request->street,
                'brgy' => $request->brgy,
                'city' => $request->city,
                'province' => $request->province,
                'contact' => $request->contact,
                'accesstype' => $request->accesstype,
                'updated_by' => auth()->user()->email,
                'mod' => $mod + 1,
                'status' => $request->status,
            ]);
            if($user){
                $notes = 'Users. Update.';
                $status = 'Success';
                $this->userlog($notes,$status);
               
                return redirect()->route('manageusers.index')
                            ->with('success','User updated successfully');
            }else{
                $notes = 'Users. Update.';
                $status = 'Failed';
                $this->userlog($notes,$status);

                return redirect()->route('manageusers.index')
                            ->with('failed','User update failed');
            }
        }else{
            $user =User::where('userid',$user->userid)->update([
                'username' => $request->username,
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
                'contact' => $request->contact,
                'accesstype' => $request->accesstype,
                'updated_by' => auth()->user()->email,
                'mod' => $mod + 1,
                'status' => $request->status,
            ]);
            if($user){
                $notes = 'Users. Update.';
                $status = 'Success';
                $this->userlog($notes,$status);

                
                return redirect()->route('manageusers.index')
                            ->with('success','User updated successfully');
            }else{
                $notes = 'Users. Update.';
                $status = 'Failed';
                $this->userlog($notes,$status);
                
                return redirect()->route('manageusers.index')
                            ->with('failed','User update failed');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $fullname = $user->lastname . ', ' . $user->firstname . ' ' . $user->middlename;

        if($user->userid == auth()->user()->userid){
            $notes = 'Users. Activation. Self Account. ' . $fullname;
                $status = 'Failed';
                $this->userlog($notes,$status);

                return redirect()->route('manageusers.index')
                        ->with('failed','User Update on own account not allowed.');
        }
        $timenow = Carbon::now()->timezone('Asia/Manila')->format('Y-m-d H:i:s');
        if(auth()->user()->accesstype == 'Supervisor')
        {
            if($user->accesstype == 'Administrator')
            {
                $notes = 'Users. Activation. Admin Account. ' . $fullname;
                $status = 'Failed';
                $this->userlog($notes,$status);

                return redirect()->route('manageusers.index')
                        ->with('failed','User update failed');
            }
            elseif($user->accesstype == 'Supervisor')
            {
                $notes = 'Users. Activation. Supervisor Account. ' . $fullname;
                $status = 'Failed';
                $this->userlog($notes,$status);

                return redirect()->route('manageusers.index')
                        ->with('failed','User update failed');
            }
        }

        if($user->status == 'Active')
        {
            User::where('userid', $user->userid)
            ->update([
            'status' => 'Inactive',
        ]);

        $user = User::wherenot('accesstype', 'Renters')->get();

        $notes = 'Users. Deactivate. ' . $fullname;
        $status = 'Success';
        $this->userlog($notes,$status);

        return redirect()->route('manageusers.index')
            ->with('success','User Decativated successfully');
        }
        elseif($user->status == 'Inactive')
        {
            User::where('userid', $user->userid)
            ->update([
            'status' => 'Active',
        ]);

        $user = User::wherenot('accesstype', 'Renters')->get();

        $notes = 'Users. Activate. ' . $fullname;
        $status = 'Success';
        $this->userlog($notes,$status);

        return redirect()->route('manageusers.index')
            ->with('success','User Activated successfully');
        }
    }
}
