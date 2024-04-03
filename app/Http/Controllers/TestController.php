<?php

namespace App\Http\Controllers;

use App\Models\test;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
	   $test = test::all();	
       return view('test.index',['test'=>$test]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {  
        return view('test.add'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
		
		$test = new test;
        $test->project_name  = $request->project_name;
		$test->project_description = $request->project_description;
		$test->save();
		
		return redirect()->route('test.index')
                        ->with('success','Test created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(test $test)
    {
        return view('test.show',['test'=>$test]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(test $test)
    {
       return view('test.edit',['test'=>$test]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, test $test)
    {
		
        $test = test::find($test->id);
        $test->project_name  = $request->project_name;
		$test->project_description = $request->project_description;
		$test->save();
		
		return redirect()->route('test.index')
                    ->with('success','Test updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(test $test)
    {
       $test = test::find($test->id);
       $test->delete();
	   
	   return redirect()->route('test.index')
                    ->with('success','Test deleted successfully.');
    }
}
