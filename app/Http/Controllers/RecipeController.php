<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::paginate(5);
        return view('admin.recipes.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [

            'img' => 'required',
            'title' => 'required',
            'text' => 'required'
        ]);
        if ($file = $request->file('img')) {

            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $input['img'] = $name;
        }


        Recipe::create($input);
        return redirect('/admin/recipes')->with('success', 'Your Recipe has been successfully Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('admin.recipes.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $this->validate($request, [

            'title' => 'required',
            'text' => 'required'

        ]);


        if ($file = $request->file('img')) {

            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $input['img'] = $name;
        } else {
            $recipe = Recipe::findOrFail($id);
            $input['img']   = $recipe['img'];
        }



        Recipe::whereId($id)->first()->update($input);
        return redirect('/admin/recipes')->with('success', 'Your Recipe has been successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recipe = Recipe::findOrFail($id);
        $imagePath = $recipe['img'];
        unlink(public_path() . '/images/' . $imagePath);

        $recipe->delete();
        return redirect('/admin/recipes')->with('success', 'Your Recipe has been successfully Deleted');
    }

    public function recipes()
    {
        $recipes = Recipe::all();
        return $recipes;
    }



    public function recipe($id)
    {
        return Recipe::findOrFail($id);
    }
}
