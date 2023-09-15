<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            // $token = request()->bearerToken();
            // if (!$token) {
            //     throw new Exception('Unauthorized', 401);
            // }

            $user = auth()->user();

            if ($user->role === 'admin' || $user->role === 'employee') {
                $data = auth()->user()->employee;

                $message = "Gebruiker met email: is opgehaald";
                $content =
                    [
                    'success' => true,
                    'data' => $data,
                    'message' => $message,
                ];
            } else {
                throw new Exception('Forbidden', 403);
            }

            return response()->json($content, 200);
        } catch (Exception $e) {
            $message = $e->getMessage();
            $status = $e->getCode();
            $content =
                [
                'success' => false,
                'message' => $message,
            ];

            return response()->json($content, $status);
        }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        try {
            $user = auth()->user();

            if ($user->role !== 'admin' || $user->role === 'employee') {
                throw new Exception('Forbidden', 403);
            }

            $employee->update($request->only([
                'city',
                'address',
                'zipcode',
                'housenumber',
                'phonenumber',
            ]));

            $message = "Gebruiker gegevens is/zijn geüpdatet";
            $content =
                [
                'success' => true,
                'data' => $employee,
                'message' => $message,
            ];

            return response()->json($content, 200);
        } catch (Exception $e) {
            $message = $e->getMessage();
            $status = $e->getCode();
            $content =
                [
                'success' => false,
                'message' => $message,
            ];

            return response()->json($content, $status);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}