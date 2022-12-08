<?php

namespace App\Http\Controllers;
use App\Models\Lokerja;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LokerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function lokerja(){
        return view('/lokerja');
    }

    public function datalokerja(){
        return view('/datalokerja');
    }

    public function lokerjaupdate(){
        return view('/lokerjaupdate');
    }
    
    public function index()
    {
        $data = lokerja::all();
        return view('/datalokerja', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Lokerja;
        return view('/lokerja', compact('model'));
    }

    function slug($string){
        $slug = trim($string); // trim the string
        $slug= preg_replace('/[^a-zA-Z0-9 -]/','',$slug ); // only take alphanumerical characters, but keep the spaces and dashes too...
        $slug= str_replace(' ','-', $slug); // replace spaces by dashes
        $slug= strtolower($slug).mt_rand(1,9);  // make it lowercase
        return $slug;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo 'test';
        
        $count = DB::table('perusahaan')->count();
        // dd($count);
        $validatedData = $request->validate([
            'nama'=> 'required',
            'email'=> 'required',
            'alamat'=> 'required',
            'pict' => 'required|mimes:jpg,jpeg,png,bmp,tiff'

        ]);

        $pict = $request->file('pict');
        $pictFolder = 'pict_folder';
        $pictName = $this->slug($pict->getClientOriginalName()).$this->slug($validatedData['nama']).'_'.$count.'.'.$pict->getCLientOriginalExtension();
        $pict->move($pictFolder, $pictName);

        $validatedData['relation_code'] = $validatedData['nama'].$count;
        $validatedData['pict'] = $pictName;
        // dd($validatedData);
        Perusahaan::create($validatedData);

        $validatedLoker = $request->validate([
            'email'=> 'required',
            'alamat'=> 'required',
            'posisi' => 'required',
            'deskripsi' => 'required'
        ]);
        $validatedLoker['relation_code'] = $validatedData['relation_code'];
        // dd($validatedLoker);
        Lokerja::create($validatedLoker);
        
        return redirect('/cbindex');
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
        $model = Lokerja::find($id);
        return view('/lokerjaupdate', compact('model'));
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
        $model = Lokerja::find($id);
        $model->nama = $request->nama;
        $model->email = $request->email;
        $model->alamat = $request->alamat;
        $model->posisi = $request->posisi;
        $model->deskripsi = $request->deskripsi;
        $model->save();

        return redirect('datalokerja');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Lokerja::find($id);
        $model->delete();
        return redirect('datalokerja');
    }
}
