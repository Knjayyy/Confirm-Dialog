<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    public function index() {
        return inertia('members/Index', [
            'members' => Member::orderBy('last_name')
                        ->with('company')
                        ->get()
        ]);
    }

    public function create()
    {
        $companies = Company::orderBy('name')->get();
        return inertia('members/Create', [
            'companies' => $companies
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'last_name' => 'required',
            'first_name' => 'required',
            'designation' => 'required',
            'company_id' => 'required',
        ]);

        Member::create([
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'designation' => $request->designation,
            'company_id' => $request->company_id,
        ]);

        return redirect('/members')->with('message', 'Member added successfully!');
    }

    public function edit(Member $member)
    {

        $companies = Company::orderBy('id')->get();

        return inertia('members/Edit', [
            'member' => $member,
            'companies' => $companies
        ]);
    }

    public function update(Request $request, Member $member)
    {
        $fields = $request->validate([
            'last_name' => 'required',
            'first_name' => 'required',
            'designation' => 'required',
            'company_id' => 'required',
        ]);

        $member->update($fields);

        return redirect('/members')->with('message', 'Member updated successfully!');
    }
}
