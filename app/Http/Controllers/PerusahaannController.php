<?php

namespace App\Http\Controllers;
use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaannController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function peruad(){
        return view('/peruad');
    }

    public function dataperuad(){
        return view('/dataperuad');
    }

    public function peruadupdate(){
        return view('/peruadupdate');
    }

    
    public function index()
    {
        $data = perusahaan::all();
        return view('/dataperuad', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Perusahaan;
        return view('/peruad', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo "test";

        $validatedData = $request->validate([
            'nama'=> 'required',
            'email'=> 'required',
            'alamat'=> 'required',
        ]);
        // $protocol[] = [
        //     'nama'=>$request->nama,
        //     'email'=>$request->email,
        //     'alamat'=>$request->alamat,
        // ];

        // dd($protocol);

        Perusahaan::create($validatedData);
        return redirect('/peruad');

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
        $model = Perusahaan::find($id);
        return view('/peruadupdate', compact('model'));
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
        $model = Perusahaan::find($id);
        $model->nama = $request->nama;
        $model->email = $request->email;
        $model->alamat = $request->alamat;
        $model->save();

        return redirect('dataperuad');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Perusahaan::find($id);
        $model->delete();
        return redirect('dataperuad');
    }
}
