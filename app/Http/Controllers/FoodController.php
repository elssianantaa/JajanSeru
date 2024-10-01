<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FoodController extends Controller
{
    public function show(){
        $data['food'] = Food::all();
        $data['user'] = User::all();
        return view('food', $data);
    }

    public function showDb(){
        $data['user'] = User::all();
        $data['total_food'] = Food::count();
        $data['total_user'] = User::count();
        return view('dasboard', $data);
    }

    
    public function search(Request $request){
        $data['food'] = Food::where('foodname', $request->cari)->orWhere('lokasi', $request->cari)->get();
        return view('food', $data);
    }

    public function create(){
        $data['kategori'] = Kategori::all();
        return view('foodCreate', $data);
    }

    public function add(Request $request){
        $validateData = $request->validate([
            'foodname' => ['required', 'min:5'],
            'foto' => 'image',
            'lokasi' => ['required'],
            'longtitude' => ['required', 'numeric'],
            'latitude' => ['required', 'numeric'],
            'harga' => ['required'],
            'jam' => ['required'],
            'desk' => ['required'],
            'rating' => ['required', 'numeric', 'between:1,5'],
            'kategoris_id' => ['required', 'exists:kategoris,id'],
        ]);
    
        $fileName = '';
    
        if ($request->file('foto')) {
            $extFile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time() . "." . $extFile;
            $request->file('foto')->storeAs('public/'.$fileName);
        }
    
        $food = Food::create([
            'foodname' => $request->foodname,
            'foto' => $fileName,
            'lokasi' => $request->lokasi,
            'longtitude' => $request->longtitude,
            'latitude' => $request->latitude,
            'harga' => $request->harga,
            'jam' => $request->jam,
            'desk' => $request->desk,
            'rating' => $request->rating,
            'kategoris_id' => $request->kategoris_id
        ]);
    
        if ($food) {
            return redirect('food')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Gagal menyimpan data');
        }
    }
    

    public function edit(Request $request){
        $data['kategori'] = Kategori::all();
        $data['food'] = Food::find($request->id);
        return view('foodUpdate', $data); 
    }

    public function update(Request $request){
        $fileName = '';

        if ($request->file('foto')) {
            $extFile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time() . "." . $extFile;
            $request->file('foto')->storeAs('public/'.$fileName);
        }

        $update = Food::where('id', $request->id)->update([
            'foodname' => $request->foodname,
            'foto' => $fileName,
            'lokasi' => $request->lokasi,
            'longtitude' => $request->longtitude,
            'latitude' => $request->latitude,
            'harga' => $request->harga,
            'jam' => $request->jam,
            'desk' => $request->desk,
            'rating' => $request->rating,
            'kategoris_id' => $request->kategoris_id
        ]);

        $food = Food::findOrFail($request->id);

        return redirect('food');
    }

    public function delete(Request $request){
        $user = Food::find($request->id);
        $delete = Food::where('id', $request->id)->delete();
        if ($delete) {
            if ($user->foto) {
                Storage::delete('public' .$user->foto);
            }
        } 

        return redirect('food');

    }

    public function foodshow(){
        $data['food'] = Food::take(4)->get();
        return view('landingPage', $data);
    }

    public function showall(){
        $data['food'] = Food::all();
        return view('allFood', $data);
    }

    public function searchAll(Request $request){
        $keyword = $request->cari;
        $data['food'] = Food::where('foodname', 'like', '%' . $keyword . '%')
                            ->orWhere('lokasi', 'like', '%' . $keyword . '%')
                            ->get();
        return view('allFood', $data);
    }
    

    //noddles
    public function noodlesshow(){
        $data['food'] = Food::where('kategoris_id', 1)->get();
        

        return view('noodles', $data);
    }

    public function ndSearch(Request $request){
        $query = Food::where('kategoris_id', 1);

        // Cek apakah ada input pencarian
        if ($request->has('search')) {
            $search = $request->input('search');
        
            $query->where(function ($query) use ($search) {
                $query->where('foodname', 'like', "%$search%")
                      ->orWhere('lokasi', 'like', "%$search%");
            });
        }
        
        // Dapatkan hasil dari query
        $data['food'] = $query->get();
        
        return view('noodles', $data);
        
    }

    //category seblak
    public function sbShow(){
        $data['food'] = Food::where('foodname', 'like', '%seblak%')->get();
        return view('sbFood', $data);
    }
   
    public function sbSearch(Request $request){
        $query = Food::where('foodname', 'like', '%seblak%');

        // Cek apakah ada input pencarian
        if ($request->has('search')) {
            $search = $request->input('search');
        
            $query->where(function ($query) use ($search) {
                $query->where('foodname', 'like', "%$search%")
                      ->orWhere('lokasi', 'like', "%$search%");
            });
        }
    
        $data['food'] = $query->get();
    
        return view('sbFood', $data);
    }

    //category mochi
    public function mcShow(){
        $data['food'] = Food::where('foodname', 'like', '%mochi%')->get();
        return view('mochi', $data);
    }
   
    public function mcSearch(Request $request){
        $query = Food::where('foodname', 'like', '%mochi%');

        // Cek apakah ada input pencarian
        if ($request->has('search')) {
            $search = $request->input('search');
        
            $query->where(function ($query) use ($search) {
                $query->where('foodname', 'like', "%$search%")
                      ->orWhere('lokasi', 'like', "%$search%");
            });
        }
    
        $data['food'] = $query->get();
    
        return view('mochi', $data);
    }

    //smoothie
    public function smShow(){
        $data['food'] = Food::where('kategoris_id', 2)->get();
        return view('smoothie', $data);
    }
   
    public function smSearch(Request $request){
        $query = Food::where('foodname', 'like', '%mochi%');

        // Cek apakah ada input pencarian
        if ($request->has('search')) {
            $search = $request->input('search');
        
            $query->where(function ($query) use ($search) {
                $query->where('foodname', 'like', "%$search%")
                      ->orWhere('lokasi', 'like', "%$search%");
            });
        }
    
        $data['food'] = $query->get();
    
        return view('smoothie', $data);
    }

     //dimsum
     public function dsShow(){
        $data['food'] = Food::where('foodname', 'like', '%dimsum%')->get();
        return view('dimsum', $data);
    }
   
    public function dsSearch(Request $request){
        $query = Food::where('foodname', 'like', '%dimsum%');

        // Cek apakah ada input pencarian
        if ($request->has('search')) {
            $search = $request->input('search');
        
            $query->where(function ($query) use ($search) {
                $query->where('foodname', 'like', "%$search%")
                      ->orWhere('lokasi', 'like', "%$search%");
            });
        }
        $data['food'] = $query->get();
    
        return view('dimsum', $data);
    }

    public function showDetail($id){
        $data['food'] = Food::with('kategori')->findOrFail($id);
        return view('detail', $data);
    }

}
