<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\{Contact};
use App\DataTables\ContactDataTable;
use Auth;

class ContactController extends Controller
{
    public function index(ContactDataTable $dataTable)
    {
        return $dataTable->render('admin.contact.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Contact $contact)
    {
        //
    }

    public function edit(Contact $contact)
    {
        //
    }

    public function update(Request $request, Contact $contact)
    {
        //
    }

    public function destroy($id)
    {
        // $Contact = Contact::where('id',$id)->update([
        //     'delete_by' => Auth::user()->id,
        // ]);
        // $Contact = Contact::where('id',$id)->delete();

        // return response()->json(['success'=>'Recode has been deleted!!!']);

        $Contact = Contact::where('id',$id)->delete();

        return response()->json(['success'=>'Recode has been deleted!!!']);
    }
}
