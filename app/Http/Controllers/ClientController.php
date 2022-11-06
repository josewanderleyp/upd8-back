<?php

namespace App\Http\Controllers;

use App\Models\Client;


use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $result  = Client::get();
        return response()->json($result);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        try {
            $Client = new Client();

            $Client -> name = $request -> name;
            $Client -> cpf = $request -> cpf;
            $Client -> date_birthday = $request -> date_birthday;
            $Client -> state = $request -> state;
            $Client -> city = $request -> city;
            $Client -> gender = $request -> gender;

            $Client -> save();

            return array('stats' => true, 'msg' => 'Usuário incluido com sucesso!', 'client' => $Client);
        } catch (\Throwable $th) {
            $result = array('stats' => false, 'msg' => $th->getMessage()."aq");
            return $result;
        }
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
        try {
            $result = Client::findOrFail($id);
            return response()->json($result);
        } catch (\Throwable $th) {
            $result = array('stats' => false, 'msg' => $th->getMessage()."aq2");
            return $result;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        //
        $status = Client::findOrFail($id);
        $status->update($request->all());
        $result = array('stats' => true, 'msg' => 'Usuário atualizado com sucesso!');

        return response()->json($result);
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
        try{
            Client::destroy($id);
            $result = array('stats' => true, 'msg' => 'Usuário removido com sucesso!');

            return response()->json($result);
        } catch (\Throwable $th) {
            $result = array('stats' => false, 'msg' => 'Nenhum registro encontrado!');
            return $result;
        }
    }
}
