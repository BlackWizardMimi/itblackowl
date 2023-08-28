<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MenuController extends Controller
{
    public function email(Request $request){
        $query = User::where('id', $request->id)->first();
        return response()->json($query);
    }

    public function code_acak(Request $request){
        $query = User::where('id', $request->id)->first();
        $query = [
            'code_acak' => $query->no_acak,
        ];
        return response()->json($query);
    }

    public function qrcode(Request $request){
        $query = User::where('id', $request->id)->first();
        $qrcode = "https://chart.apis.google.com/chart?chs=150x150&cht=qr&chl=".$query->qrcode."&choe=UTF-8";
        $query = [
            'qrcode' => $qrcode,
            'code_acak' => $query->no_acak,
        ];
        return response()->json($query);
    }

    public function masking(Request $request){
        $query = User::where('id', $request->id)->first();
        $masking= substr($query->no_acak, 0, 3)."****".substr($query->no_acak,-3);;
        $query = [
            'masking' => $masking,
        ];
        return response()->json($query);
    }

    public function parsing(Request $request){
        $query = User::where('id', $request->id)->first();
        $parsing = preg_replace('/[0-9]+/', '', $query->no_acak);
        $query = [
            'parsing' => $parsing,
        ];
        return response()->json($query);
    }

}

