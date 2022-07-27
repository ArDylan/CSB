<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;

class TestimoniController extends Controller
{
    public function index()
    {
        return view('admin.testimoni.index');
    }
    public function create()
    {
        return view('admin.testimoni.create');
    }

    public function store(Request $request)
    {
        $validate = [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'no_phone' => 'required|max:255',
            'message' => 'required|max:255',
        ];

        $validatedData = $request->validate($validate);

        $testimoni = Testimoni::create($validatedData);

        if ($request->image) {
            $nameFile = $testimoni->id . ".png";

            $request->image->storeAs(
                'public/testimoni-image', $nameFile
            );

            $testimoni->update([
                'image' => $nameFile,
            ]);
        }

        return redirect(route('testimoni'));
    }

    public function edit(Testimoni $testimoni)
    {
        return view('admin.testimoni.edit', compact('testimoni'));
    }

    public function update(Request $request, Testimoni $testimoni)
    {
        $validate = [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'no_phone' => 'required|max:255',
            'message' => 'required|max:255',
        ];

        $validatedData = $request->validate($validate);

        $testimoni->update($validatedData);

        if ($request->image) {
            $nameFile = $testimoni->id . ".png";

            $request->image->storeAs(
                'public/testimoni-image', $nameFile
            );
            $testimoni->update([
                'image' => $nameFile,
            ]);
        }

        return redirect(route('testimoni'));
    }

    public function delete(Testimoni $testimoni)
    {
        $testimoni->delete();
        return back();
    }
}
