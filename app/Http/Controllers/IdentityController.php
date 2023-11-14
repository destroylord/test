<?php

namespace App\Http\Controllers;

use App\Http\Requests\IdentityRequest;
use App\Models\Identity;
use Illuminate\Http\Request;

class IdentityController extends Controller
{

    public function index(){
        $identity = Identity::paginate(5);
        return view("welcome", compact('identity'));
    }

    public function create(Identity $identity)
    {
        return view('common.create', compact('identity'));
    }

    public function show($identity)
    {
        $identityModel = Identity::find($identity);

        return view('show', [
            'identityId' => $identityModel
        ]);
    }

    public function store(Request $request)
    {
    
        $data = $request->only([
            'fullname', 'nickname', 'gender', 'place_of_birth', 'date_of_birth',
            'nationality', 'region', 'last_education', 'major', 'school', 'value', 'last_address'
        ]);

        $identity = Identity::firstOrNew(['fullname' => $request->fullname]);
        $identity->fill($data);
        $identity->save();

        return redirect()->route('indentites')
                        ->with('success', 'Identity created or updated successfully.');
    
    }

    public function edit($id)
    {
        $identity = Identity::find($id);
        return view('common.edit', compact('identity'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->only([
            'fullname', 'nickname', 'gender', 'place_of_birth', 'date_of_birth',
            'nationality', 'region', 'last_education', 'major', 'school', 'value', 'last_address'
        ]);

        $identity = Identity::find($id);
        $identity->fill($data);
        $identity->save();

        return redirect()->route('indentites')
                        ->with('success', 'Identity updated successfully.');
        
    }

    public function destroy($id)
    {
        $identity = Identity::find($id);
        $identity->delete();

        return redirect()->route('indentites')
                        ->with('success', 'Identity deleted successfully');
    }
}