<?php

namespace App\Http\Controllers;

use App\job_application;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->user()->is_admin) {
            return view('all_applications', [
                'applications' => job_application::all(),
            ]);
        } else {
            if ($request->user()->job_application) {
                return view('user_application', [
                    'job_application' => $request->user()->job_application,
                ]);
            } else {
                return redirect()->route('no_application')->with(['status' => 'No Application Found']);
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('job_applications_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'phone' => 'required',
            'date_of_birth' => 'required',
            'street_address' => 'required',
            'postal' => 'required',
            'country' => 'required',
            'sex' => 'required',
            'salary' => 'required',
            'latest_degree' => 'required',
        ]);

        //create_user
        $user = User::create([
            'name' => $request['first_name'] . ' ' . $request['last_name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        $user_id = $user->id;
        //
        $job_application = new job_application();
        $job_application->user_id = $user_id;
        $job_application->first_name = $request->first_name;
        $job_application->last_name = $request->last_name;
        $job_application->email = $request->email;
        $job_application->phone = $request->phone;
        $job_application->web_site = $request->web_site;
        $job_application->date_of_birth = $request->date_of_birth;
        $job_application->street_address = $request->street_address;
        $job_application->address_line_2 = $request->address_line_2;
        $job_application->city = $request->city;
        $job_application->state = $request->state;
        $job_application->postal = $request->postal;
        $job_application->country = $request->country;
        $job_application->sex = $request->sex;
        $job_application->bio = $request->bio;
        $job_application->divisions_of_internet = json_encode($request->division);
        $job_application->salary = $request->salary;
        $job_application->latest_degree = $request->latest_degree;
        $job_application->experience = $request->experience;
        $job_application->designation = $request->designation;
        $job_application->cv = $request->file('cv')->store('public/cv');
        $job_application->save();
        return redirect('/')->with(['success' => 'Application has been submitted successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\job_application  $job_application
     * @return \Illuminate\Http\Response
     */
    public function show(job_application $job_application)
    {
        return view('job_application', [
            'job_application' => $job_application
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\job_application  $job_application
     * @return \Illuminate\Http\Response
     */
    public function edit(job_application $job_application)
    {
        return view('job_application_edit', [
            'application' => $job_application
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\job_application  $job_application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, job_application $job_application)
    {
        $request->validate([
            'phone' => 'required',
            'date_of_birth' => 'required',
            'street_address' => 'required',
            'postal' => 'required',
            'country' => 'required',
            'salary' => 'required',
            'experience' => 'required',
            'latest_degree' => 'required',
        ]);

        $job_application->phone = $request->phone;
        $job_application->web_site = $request->web_site;
        $job_application->date_of_birth = $request->date_of_birth;
        $job_application->street_address = $request->street_address;
        $job_application->address_line_2 = $request->address_line_2;
        $job_application->city = $request->city;
        $job_application->state = $request->state;
        $job_application->postal = $request->postal;
        $job_application->country = $request->country;
        $job_application->bio = $request->bio;
        $job_application->divisions_of_internet = json_encode($request->division);
        $job_application->salary = $request->salary;
        $job_application->latest_degree = $request->latest_degree;
        $job_application->experience = $request->experience;
        $job_application->designation = $request->designation;
        $job_application->save();
        return redirect()->route('home')->with(['success' => 'Application has been updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\job_application  $job_application
     * @return \Illuminate\Http\Response
     */
    public function destroy(job_application $job_application)
    {
        $user = User::find($job_application->user_id);
        $user->delete();
        return redirect()->route('home')->with(['success' => 'Application has been deleted successfully']);
    }
}
