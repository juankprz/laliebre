<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Hallways;

class HallwaysController extends Controller
{
  public function index()
  {
    if ( ! auth('api')->check()) {
      return response()->json(['error' => 'Unauthorized'], 401);
  } else{
    $hallways = Hallways::all();
    }
  }


  public function store(Request $request)
  {
    if ( ! auth('api')->check()) {
      return response()->json(['error' => 'Unauthorized'], 401);
  } else{ Hallways::create($request->all());}

  }


  public function update(Request $request, $id)
  {
    if ( ! auth('api')->check()) {
      return response()->json(['error' => 'Unauthorized'], 401);
  } else{$hallways = Hallways::find($id);
      $hallways->name = $request->name;
      $hallways->save();}

  }

  public function destroy($id)
  {
    if ( ! auth('api')->check()) {
      return response()->json(['error' => 'Unauthorized'], 401);
  } else{ Hallways::find($id)->delete();}

  }
}