<?php

namespace App\Http\Controllers;

use App\Models\NFCToRegister;
use Illuminate\Http\Request;

class NFCToRegisterController extends Controller
{
    public function register(Request $request, $id)
    {
        $nfc = NFCToRegister::find($id);

        return view('users.register', [
            'nfc' => $nfc
        ]);
    }
}
