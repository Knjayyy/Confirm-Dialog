<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function index() {
        $companies = Company::orderBy('name')->get();
        return inertia('companies/Index', [
        'companies' => $companies
    ]);
    }

    public function create() {
        return inertia('companies/Create');
    }

    public function store(Request $request) {
        $request->validate([
            'name'=>'required',
            'type'=>'required',
            'address'=>'required',
            'net_worth'=>'required'

        ]);

        Company::create([
            'name' => $request->name,
            'type' => $request->type,
            'address' => $request->address,
            'net_worth' => $request->net_worth
        ]);

        return redirect('/companies')->with('Info','A company has been added to the list.');
    }

    public function edit(Company $company)
    {
        return inertia('companies/Edit', [
            'company' => $company
        ]);
    }

    public function update(Request $request, Company $company) {
        $fields = $request->validate([
            'name'=>'required',
            'type'=>'required',
            'address' => 'required',
            'net_worth' => 'numeric|required',
        ]);

        $company->update($fields);

        return redirect('/companies');
    }

}
