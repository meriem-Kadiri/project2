<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\User;

class EnregisterController extends Controller
{
    //
    public function Enregistrer(Request $request) {
        $user = new file;
        $prof = auth()->user();
        $user->File=$request->File;
        $user->File_type=$request->File_type;
        $user->Prof=$prof->name;
        $prof->Last_name=$request->Last_name;
        $prof->date_birth=$request->date_birth;
        $prof->date_recrutement=$request->date_recrutement;
        $prof->state=$request->state;
        $prof->speciality=$request->speciality;
        
        $user->save();
        $prof->save();
        return redirect()->route('voyager.dashboard');;
    }

}
