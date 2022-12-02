<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswas = Mahasiswa::with('kartu_mahasiswa')->paginate(10);  
            return view('mahasiswa.index', [
                'mahasiswas' => $mahasiswas
            ]
        );
    }

    public function create(){
        return view('mahasiswa.create');
    }  

    public function insert(Request $request){
        $this->validate($request,[
            'npm'=>'required|char|unique:mahasiswas,npm|max:13',
            'nama'=>'required|string|max:50',
            'prodi' =>'required|enum',
            'no_ktm' => 'nullable|string|unique:mahasiswa,no_ktm|max:16',
            'masa_berlaku' =>'required|enum:',
        ]);

        $mahasiswa = Mahasiswa::create([
            'npm' => $request->npm,
            'nama' => $request->nama,
            'prodi'=> $request->prodi,
        ]);

        $mahasiswa->kartu_mahasiswa()->create([
            'no_ktm'=> $request->no_ktm,
            'masa_berlaku' => $request->masa_berlaku,
        ]);

        if($mahasiswa){
            return redirect()->route('mahasiswa.index')->with(['success' => 'Data mahasiswa berhasil ditambahkan']);
        }else{
            return redirect()->route('mahasiswa.create')->with('error');
        }
    }

    public function edit($id){
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit',compact('mahasiswa'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'npm'=>'required|char|unique:mahasiswas,npm|max:13',
            'nama'=>'required|string|max:50',
            'prodi' =>'required|enum',
            'no_ktm' => 'nullable|string|unique:mahasiswa,no_ktm|max:16',
            'masa_berlaku' =>'required|enum:',
        ]);

        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        $mahasiswa->kartu_mahasiswa()->update([
            'masa_berlaku'=>$request->masa_berlaku,
        ]);

        if($mahasiswa){
            return redirect()->route('mahasiswa.index')->with(['success' => 'Data mahasiswa berhasil diperbaharui']);
        }else{
            return redirect()->route('mahasiswa.edit')->with('error');
        }
    }

    public function delete($id){
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success',"Data mahasiswa berhasil dihapus");
    }
}
