<?php

namespace App\Http\Controllers;

use App\Models\Kordrink;
use Illuminate\Http\Request;

class IdController extends Controller
{
    public function getId(Request $request)
    {
        $id = $request->id;

        return Kordrink::find($id);
    }
}
