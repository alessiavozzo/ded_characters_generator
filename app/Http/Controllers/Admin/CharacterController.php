<?php

namespace App\Http\Controllers\Admin;

use App\Models\Character;
use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Http\Controllers\Controller;
use App\Models\Type;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.characters.index', ['characters' => Character::paginate()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types=Type::all();
        return view('admin.characters.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCharacterRequest $request)
    {
        $val_data = $request->validated();

        //dd($request->all());
        //$data = $request->all();
        Character::create($val_data);

        return to_route('admin.characters.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        return view('admin.characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        $types = Type::all();
        return view('admin.characters.edit', compact('character', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCharacterRequest $request, Character $character)
    {
        $val_data = $request->validated();
        $character->update($val_data);

        return to_route('admin.characters.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Character $character)
    {
        $character->delete();

        return to_route('admin.characters.index');
    }
}
