<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverController extends Controller
{

    public function updateDisponibilite (){
        $divers=Auth::driver();
        $request->validate([
            'disponibilite' => 'required|boolean',
        ]);
        $driver->disponibilite = $request->disponibilite;
        $driver->save();
        return redirect()->back()->with('status', 'mise a jour avec succes');
    }
}
