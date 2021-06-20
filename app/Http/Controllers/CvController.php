<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCvRequest;
use Illuminate\Http\Request;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cvs = auth()->user()->cvs;

        return view('jobseeker.cv.index', [
            'cvs' => $cvs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCvRequest $request)
    {
        $file = $request->file('cv');

        try {
            // Store file to storage
            $storagePath = $file->store('cv');

            $cv = auth()->user()->cvs()->create([
                'original_name' => $file->getClientOriginalName(),
                'extension' => $file->extension(),
                'storage_path' => $storagePath
            ]);

            session()->flash('success', 'CV stored successfully');
            return redirect(route('cv.index'));

        } catch (\Exception $ex) {
            // An error has been occured
            return $ex->getMessage();
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
