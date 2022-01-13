<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datauser;

class DatauserController extends Controller
{
    public function index()
    {
        $datauser = Datauser::where ('user_role_id','=',1)->get();
        return view('datauser',compact('datauser'));
    }
}
