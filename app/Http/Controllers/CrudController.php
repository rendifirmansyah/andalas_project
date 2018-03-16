<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use \App\Crud;
use \App\Admin;
use \App\User;
use \App\produk;
use \App\about;
use \App\footer;
use \App\gambar_home;
use Auth;
use DB;
use GMaps;

class CrudController extends Controller
{
    /**
     * Creatasde a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Crud::all();
        $q = footer::all();
        $g = gambar_home::all();
        return view('show')->with('datas',$datas)->with('footer',$q)->with('slide',$g);
    }

    


    public function map()
    {
      $config['center'] = 'cyber building, jakarta selatan';
      $config['zoom'] = '17';
      $config['map_height'] = '500px';
      $conofig['scrollwheel'] = false;

      GMaps::initialize($config);

      $marker['position'] = 'cyber building, jakarta selatan';
      $marker['infowindow_content'] = 'cyber building';

      GMaps::add_marker($marker);

      $map = GMaps::create_map();

      return view('map')->with('map',$map);
    }

    public function lihat_berita(){        
        $q = Crud::all();
        return view('add')->with('datas',$q);
    }

    public function footer()
    {
      
    }

       public function destroy($id)

    {

        DB::table("cruds")->delete($id);
        return response()->json(['success'=>"Product Deleted successfully.", 'tr'=>'tr_'.$id]);

    }

    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        Crud::where('id',$ids)->delete();
        return response()->json(['success'=>"Products Deleted successfully."]);
    }

    public function gambar_home()
    {
      return view('gambar_home')->with('produk',$produk);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $a = Crud::all();
        return view('add')->with('datas',$a);
    }

    public function produk()
    {
        $produk = \App\produk::all();
        $q = footer::all();
        return view('produk')->with('produk',$produk)->with('footer',$q);
    }

    public function panel_gambar()
    {
      return view('panel_gambar');
    }

    public function allproduk()
    {
        $produk = \App\produk::all();
        return view('allproduk')->with('produk',$produk);
    }

    public function allabout()
    {
        $produk = \App\about::all();
        return view('allabout')->with('produk',$produk);
    }

    public function allfooter()
    {
        $produk = \App\footer::all();
        return view('allfooter')->with('produk',$produk);
    }

    public function allgambar()
    {
        $produk = \App\gambar_home::all();
        return view('gambar_home')->with('produk',$produk);
    }

    public function panel_about()
    {
      return view('panel_about');
    }

    public function panel_footer()
    {
      return view('panel_footer');
    }

    public function editproduk($id){
      $pro = \App\produk::find($id);
      return view('edit_produk')->with('produk',$pro);
    }

    public function deleteproduk($id){
      $pro = \App\produk::find($id);
      $pro->delete();
      return redirect('produk/all');
    }

    public function deletefooter($id){
      $pro = \App\footer::find($id);
      $pro->delete();
      return redirect('footer/all');
    }

    public function deleteabout($id){
      $pro = \App\about::find($id);
      $pro->delete();
      return redirect('about/all');
    }

    public function deletegambar($id){
      $pro = \App\gambar_home::find($id);
      $pro->delete();
      return redirect('gambar_home');
    }

    public function saveproduk(Request $r){
      $prod = new \App\produk;
      $prod->nama_produk = $r->input('namaproduk');
      $prod->isi_produk = $r->input('isian');
      $prod->save();
      return redirect(url('produk/all'));
    }

    public function saveabout(Request $r){
      $prod = new \App\about;
      $prod->isi = $r->input('namaproduk');
      $prod->save();
      return redirect(url('about/all'));
    }

    public function savefooter(Request $r){
      $prod = new \App\footer;
      $prod->isi = $r->input('namaproduk');
      $prod->save();
      return redirect(url('footer/all'));
    }


    public function save_update_produk(Request $r)
    {
      $pr = produk::find($r->input('id'));
      $pr->nama_produk = $r->input('namaproduk');
      $pr->isi_produk = $r->input('isian');
      $pr->save();
      return redirect(url('produk/all'));
    }

    public function update_about(Request $r)
    {
        $w = about::find($r->input('id'));
        $w->isi = $r->input('isi');
        $w->save();
        return redirect(url('panel_about'));
    }

    public function update_footer(Request $r)
    {
        $w = footer::find($r->input('id'));
        $w->isi = $r->input('isi');
        $w->save();
        return redirect(url('footer'));
    }

    public function about()
    {
        $tester = \App\about::all();
        $q = footer::all();
         return view('about')->with('tester',$tester)->with('footer',$q);
    }



    public function partner()
    {     
        $q = footer::all();
         return view('partner')->with('footer',$q);
    }


    public function add_about($id)
    {
      $tampil = about::where('id',$id)->first();
      return view('add_about')->with('tampil',$tampil);
    }

    public function add_footer($id)
    {
      $tampil = footer::where('id',$id)->first();
      return view('add_footer')->with('tampil',$tampil);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function post_berita()
    {

        $a = new Crud;
        $a->judul = Input::get('judul');
        $a->isi = Input::get('isi');
        if(Input::hasFile('sampul')){
            $sampul = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('sampul')->getClientOriginalExtension();
            Input::file('sampul')->move(storage_path('sampul'),$sampul);
            $a->sampul = $sampul;
        }   
 

        $a->save();

        if (Auth::user()->role_id==2) {
            return redirect(url('admin'));
        }
        else
        {
            return redirect(url('add'));
        }
    }    

    public function save_gambar()
    {
      $gam = new gambar_home;
      $gam->judul = Input::get('judul');
      $gam->teks1 = Input::get('text1');
      $gam->teks2 = Input::get('text2');
      if(Input::hasFile('home')){
            $gambar = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('home')->getClientOriginalExtension();
            Input::file('home')->move(storage_path('home'),$gambar);
            $gam->gambar_home = $gambar;
        }

        if(Input::hasFile('gamvar')){
            $gambar = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('gamvar')->getClientOriginalExtension();
            Input::file('gamvar')->move(storage_path('gamvar'),$gambar);
            $gam->gambar_isi = $gambar;
        }   

        $gam->save();

        return redirect(url('/gambar_home'));
    }

    

    public function post_about()
    {
      $a = new about;
      $a->isi = Input::get('isi');
      $a->save();
    }

    public function PanelAdmin()
    {
        $datas = Crud::orderBy('id','DESC')->paginate();
        $q = User::orderBy('id','DESC')->paginate();
        return view('admin')->with('datas',$datas)->with('admin',$q);
    }

    public function data_admin()
    {
        return view('add_admin');
    }

    public function data_berita()
    {
        return view('data_berita');
    }

    public function panel_produk(Request $r)
    {
      $data = $r->input('isian');
      return view('panel_produk')->with('data',$data);
    }

    public function edit_produk()
    {
      return view('edit_produk');
    }

    public function post_admin(Request $r){
        $q = new User;
        $q->name = $r->input('name');
        $q->email = $r->input('email');
        $q->password = bcrypt($r->input('password'));
        $q->no_telp = $r->input('no_telp');
        $q->alamat = $r->input('alamat');
        $q->role_id = 1;
        $q->save();

        return redirect(url('admin'));
    }

    public function update_admin(Request $r){
        $q = User::find($r->input('id'));
        $q->name = $r->input('name');
        $q->email = $r->input('email');
        $q->password = bcrypt($r->input('password'));
        $q->no_telp = $r->input('no_telp');
        $q->alamat = $r->input('alamat');
        $q->save();
        return redirect(url('admin'));
    }

    public function update_berita(Request $r)
    {
        $a = Crud::find($r->input('id'));
        $a->judul = $r->input('judul');
        $a->isi = $r->input('isi');
        if(Input::hasFile('sampul')){
            $sampul = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('sampul')->getClientOriginalExtension();
            Input::file('sampul')->move(storage_path('sampul'),$sampul);
            $a->sampul = $sampul;
        }

        $a->save();

        if (Auth::user()->role_id==2) {
            return redirect(url('admin'));
        }
        else
        {
            return redirect(url('add'));
        }
    }

    public function edit_admin($id){
        $q = User::find($id);
        return view('edit_admin')->with('admin',$q);
    }

    public function edit_berita($id)
    {
        $a = Crud::find($id);
        return view('edit_berita')->with('berita',$a);
    }

    public function delete_admin($id){
        $q = User::find($id);
        $q->delete();
        return redirect(url('admin'));
    }

    public function delete_berita($id)
    {
        $a = Crud::find($id);
        $a->delete();
        return redirect(url('add'));
    }

    public function deleteSelectedBerita(Request $request)
    {
        Crud::destroy($request->beritas);
        if (Auth::user()->role_id==2) {
             return redirect(url('admin'));
         }
         else
         {
            return redirect(url('add'));
         }
    }

    public function deleteSelectedAdminz(Request $request)
    {
        User::destroy($request->adminz); 
        return redirect(url('admin'));
  }

    public function search_berita(Request $r)
    {
      $query = $r->input('query');
      $admin = User::all();
      $tes = Crud::where('judul','like','%'.$query.'%')->orderBy('id','asc')->paginate(20);
      if(Auth::user()->role_id==2){
      return view('admin')->with('datas', $tes)->with('query', $query)->with('admin',$admin);
      }
      else{
        return view('add')->with('datas',$tes);
      }
        
    }


    public function search_admin(Request $r)
    {
      $query = $r->input('query2');
      $admin = Crud::all();
      $tes = User::where('name','like','%'.$query.'%')->orderBy('id','asc')->paginate(20);
      if(Auth::user()->role_id==2){
        return view('admin')->with('admin',$tes)->with('query',$query)->with('datas',$admin);
      }else{
        return redirect(url('add'));
      }
    }


}
