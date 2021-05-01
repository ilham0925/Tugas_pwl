<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\categorie;
use App\brand;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtproduct = product::with('categorie','brand')->paginate(10);
        return view('Halaman.Data-product',compact('dtproduct'));
    }

    public function cetakproduct()
    {
        $dtcetakproduct = product::with('categorie','brand')->get();
        return view('Halaman.Cetak-product',compact('dtcetakproduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $bra = brand::all();
        $cat = categorie::all();
        return view('Halaman.Create-product',compact('cat','bra'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        product::create([
            'name' => $request->name,
            'categorie_id' => $request->categorie_id,
            'brand_id' => $request->brand_id,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $request->gambar
            
        ]);
        return redirect('data-product')->with('success','Tambah Data Successfully!');

        $name = $request->gambar;
        $gambar = $name->getClientOriginalName();

        $dtproduct = new product;
        $dtproduct->gambar= $gambar;

        $name->move(public_path().'img',$gambar);
        $dtproduct->save();
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
        $bra = brand::all();
        $cat = categorie::all();
        $peg = product::with('categorie','brand')->findorfail($id);
        return view('Halaman.Edit-product',compact('peg','cat','bra'));
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
        $peg = product::findorfail($id);
        $peg->update($request->all());
        return redirect('data-product')->with('success','Update Data Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peg = product::findorfail($id);
        $peg->delete();
        return back()->with('success','Delete Data Successfully!');
    }
}
