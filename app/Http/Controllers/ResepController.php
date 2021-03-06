<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\storage;
use Illuminate\Support\Facades\file;
use Illuminate\Support\Facades\Response;
use App\Resep;

class ResepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data['data'] = Resep::all();
      return view('home')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resep.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // $input = $request->all();
      //
      // Resep::create($input);
      // if($request->hasFile('foto')){
      //   $foto = $request->file('foto');
      //   $ext = $modul->getClientOriginalExtension();

      //   if($request->hasFile('foto') && $request->file('foto')->isValid()){
      //     $foto = $request->file('foto');
      //     $foto_name = $foto->getClientOriginalName();
      //     $input['foto'] = $foto_name;
      //   }
      //
      //   if($request->hasFile('video') && $request->file('video')->isValid()){
      //     $foto = $request->file('video');
      //     $video_name = $video->getClientOriginalName();
      //     $input['video'] = $video_name;
      //   }
      //
      //   Resep::create($input);
      // // }

      // $input = $request->all();
      // $status = \App\Resep::create($input);

      $rules = [
        'id_resep'      => 'required|unique:t_resep',
        'id_resep'      => 'required',
        'judul'         => 'required',
        'deskripsi'     => 'required',
        'bahan'         => 'required',
        'cara_memasak'  => 'required',
        'foto'          => 'required|mimes:jpeg,png|max:512',
        'video'         => 'required'
      ];

      $this->validate($request, $rules);

      $input = $request->all();

      if($request->hasFile('foto') && $request->file('foto')->isValid()){
        $filename = $input['id_user'] . "." . $request->file('foto')->getClientOriginalExtension();
        $request->file('foto')->storeAs('', $filename);
        $input['foto'] = $filename;
      }
      //
      // if($request->hasFile('video') && $request->file('video')->isValid()){
      //   $filename = $input['id_user'] . "." . $request->file('video')->getClientOriginalExtension();
      //   $request->file('video')->storeAs($filename, $filename);
      //   $input['video'] = $filename;
      // }

      return "berhasil";


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
