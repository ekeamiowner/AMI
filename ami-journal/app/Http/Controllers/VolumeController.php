<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolumeController extends Controller 
{

  public function __construct()
  {
    $this->middleware('admin');
  }


  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $volumes = Volume::with('articles')->get();

        return view('pages.volumes.index', compact('volumes'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('pages.volumes.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $request->validate([
      'title' => 'required|max:255',
      // További validációs szabályok szükség szerint
  ]);

  $volume = new Volume();
  $volume->title = $request->title;
  // További attribútumok beállítása szükség szerint
  $volume->save();

  return redirect()->route('volumes.index')->with('success', 'Volume created successfully.');

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>