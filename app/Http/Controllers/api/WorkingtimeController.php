<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\employee;
use App\Models\User;
use Illuminate\Http\Request;

class WorkingtimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();

        if ($user->role == "admin" || $user->role == "employee") {
            $data = auth()->user()->employee->getworkingtime;

            $message = "Gebruiker met email: is opgehaald";
            $content =
                [
                'success' => true,
                'data' => $data,
                'message' => $message,
            ];
        }

        return response()->json($content, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sf  $sf
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sf  $sf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, )
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sf  $sf
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
