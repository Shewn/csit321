<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Arts;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;


class PagesController extends Controller
{
     /**
     * Create a new controller instance.
     *
     *  @return void
     */
    public function a()
    {
        return view('pages.a');
    }
    public function __construct()
    {
       $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function home()
    {
        return view('pages.home');
    }
    public function map()
    {
        $arts = Arts::all(); 
        return view('pages.map')->with('arts',$arts);
    }
    public function artworkDetails()
    {
        return view('pages.artworkDetail');
    }
    public function artwork()
    {
        $arts = DB::table('arts')->whereNull('Archieve')->paginate(3);
        
        return view('pages.artwork')->with('arts',$arts);
    }
    public function artworkArchive()
    {
        $arts = DB::table('arts')->whereNotNull('Archieve')

        ->paginate(3);
        
        return view('pages.artworkArchive')->with('arts',$arts);
    }
    public function getdata()
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://127.0.0.1:3000/a');
        $response = $request->getBody();
        echo $request->getBody();
        dd($response);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.addArtwork');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'accession' => 'required' ,
            'name' => 'required' ,
            'artist' => 'required' ,
            'building' => 'required' ,
            
            
            'image' => 'image|nullable|max:2048',
           
            
        ]);
        //handles
        if($request->hasFile('image')){
            //Get filename with the extension
            $filenameWithExt= $request->file('image')->getClientOriginalName();
            //Get just filename
            $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //FileNAme to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('image')->storeAs('public/images',$fileNameToStore);    
        }else{
            $fileNameToStore='noimage.jpg';
        }
        //Create Staff
        $art = new Arts;
        $art->Accession_number = $request->input('accession');
        $art->Name = $request->input('name');
        $art->Artist = $request->input('artist');
        $art->Location = $request->input('building');
        $art->Archieve = $request->input('archieve');
        $art->Tracker_ID = $request->input('tracker_id');
        $art->Image = $fileNameToStore; 

        
        $art->save();

        return back()->with('success','Art added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $arts = Arts::find($id); 
       
        return view('pages.artworkDetail')->with('arts',$arts);
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
  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'accession' => 'required' ,
            'name' => 'required' ,
            'artist' => 'required' ,
            'building' => 'required' ,
            
        ]);
        

        $art = Arts::find($id);
       
        $art->Accession_number = $request->input('accession');
        $art->Name = $request->input('name');
        $art->Artist = $request->input('artist');
        $art->Location = $request->input('building');
        $art->Tracker_ID = $request->input('tracker_id');
        $art->Archieve = $request->input('archive');
        $art->save();

        return back()->with('success','Arts Updated');
    }
     

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $art = Arts::find($id);
        $art->delete();
        return back()->with('success','Arts Deleted');
    }
}
