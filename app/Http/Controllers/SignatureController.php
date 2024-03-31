<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SignatureController extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'drink' => 'required|string',
        ]);
        $params = $validator->fails() ? $validator->messages() : $validator->validated()['drink'];

        $user = auth()->user();
        $name = $user->name;
        $document = Client::where('user_id', auth()->user()->id)->first()->document;
        $status = auth()->user()->client->signatures->first()->status->name;

        return view('test', [
            'name' => $name,
            'document' => $document,
            'status' => $status,
            'params' => $params,
        ]);
    }
}
