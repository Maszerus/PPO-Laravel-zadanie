<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $people = Person::all();

        return response()->json($people);
    }

    public function show($id)
    {
        $person = Person::find($id);

        if (!$person) {
            return response()->json(['error' => 'Person not found'], 404);
        }

        return response()->json($person);
    }

    public function store(Request $request)
    {
        $person = Person::create($request->all());

        return response()->json($person, 201);
    }

    public function update(Request $request, $id)
    {
        $person = Person::find($id);

        if (!$person) {
            return response()->json(['error' => 'Person not found'], 204);
        }

        $person->update($request->all());

        return response()->json($person);
    }

    public function destroy($id)
    {
        $person = Person::find($id);

        if (!$person) {
            return response()->json(['error' => 'Person not found'], 204);
        }

        $person->delete();

        return response()->json(['message' => 'Person deleted']);
    }
}
