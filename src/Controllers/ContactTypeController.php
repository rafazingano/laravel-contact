<?php

namespace ConfrariaWeb\Contact\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Response
     */
    public function index()
    {
        $data['types'] = resolve('ContactTypeService')->all();
        return view('contacts.types.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Response
     */
    public function create()
    {
        return view('contacts.types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Request $request
     * @return \Illuminate\Response
     */
    public function store(Request $request)
    {
        $contacts_types = resolve('ContactTypeService')->create($request->all());
        return redirect()
            ->route('contacts.types.edit', $contacts_types->id)
            ->with('status', 'Tipo de contato criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Response
     */
    public function edit($id)
    {
        $data['type'] = resolve('ContactTypeService')->find($id);
        return view('contacts.types.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Request $request
     * @param int $id
     * @return \Illuminate\Response
     */
    public function update(Request $request, $id)
    {
        $contact_type = resolve('ContactTypeService')->update($request->all(), $id);
        return redirect()
            ->route('contacts.types.edit', $contact_type->id)
            ->with('status', 'Tipo de contato editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Response
     */
    public function destroy($id)
    {
        $contact_type = resolve('ContactTypeService')->destroy($id);
        return redirect()
            ->route('contacts.types.index')
            ->with('status', 'Tipo de contato deletado com sucesso!');
    }
}
