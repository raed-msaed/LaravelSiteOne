<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
class ComputersController extends Controller
{
    // Array of static data
   /* private static function getData(){
        return[
            ['id'=> 1, 'name'=> 'LG', 'origin'=> 'Koria'],
            ['id'=> 2, 'name'=> 'HP', 'origin'=> 'USA'],
            ['id'=> 3, 'name'=> 'Siemens', 'origin'=> 'Germany'],
        ];
    }*/
    
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('computers.index',[
            'computers' => Computer::all()
        ] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $computer = new Computer();
        $computer->name = $request->input('computer-name');
        $computer->origin = $request->input('computer-origin');
        $computer->price = $request->input('computer-price');
        $computer->save();
        return redirect()->route('computers.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(String $computer)
    {
       // $computers = self::getData();

       // $index = array_search($computer, array_column($computers, 'id'));

        $index = Computer::findOrFail($computer);

        if($index === false){
            abort(404);
        }

        return view('computers.show', [
            'computer' => $index
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
