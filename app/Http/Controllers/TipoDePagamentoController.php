<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipoPagamentoFormRequest;
use App\Models\TipoPagamento;


use App\Http\Requests\TipoPagamentoFormRequestUpdate;

use Illuminate\Http\Request;

class TipoDePagamentoController extends Controller
{
    
    public function cadastroTipoPagamento(TipoPagamentoFormRequest $request)
    {

        $pagamento = TipoPagamento::create([
            'nome' => $request->nome,
            'taxa' => $request->taxa,
            
            
        ]);
        return response()->json([
            "success" => true,
            "message" => "Tipo de pagamento cadastrado com sucesso",
            "data" => $pagamento
        ], 200);
    }



    //PESQUISA POR NOME

    public function pesquisarPorTipoPagamento(Request $request)
    {


        $pagamento = TipoPagamento::where('nome', 'like', '%' . $request->nome . '%')->get();


        if (count($pagamento)) {

            return response()->json([
                'status' => true,
                'data' => $pagamento
            ]);
        }


        return response()->json([
            'status' => false,
            'data' => "Tipo de pagamento não encontrado"
        ]);
    }




//FUNÇÃO DE EXCLUIR

public function deletarpagamento($pagamento)
{
 $pagamento = TipoPagamento::find($pagamento);

 if (!isset($pagamento)) {
     return response()->json([
         'status' => false,
         'message' => "Tipo de pagamento não encontrado"
     ]);
 }

 $pagamento->delete();

 return response()->json(([
     'status' => true,
     'message' =>  "Tipo de pagamento excluido com sucesso"
 ]));
}






//ATUALIZAÇÃO DE pagamento

public function updatepagamento(TipoPagamentoFormRequestUpdate $request)
{


$pagamento = TipoPagamento::find($request->id);

if (!isset($pagamento)) {
    return response()->json([
        'status' => false,
        'message' => 'Tipo de pagamento não encontrado'
    ]);
}


if (isset($request->nome)) {
    $pagamento->nome = $request->nome;
}



if (isset($request->taxa)) {
    $pagamento->taxa = $request->taxa;
}


$pagamento->update();

return response()->json([
    'status' => true,
    'message' => 'Tipo de pagamento ataulizado'
]);
}






public function visualizarCadastroTipoPagamento()
{
 $pagamento = TipoPagamento::all();

 if (!isset($pagamento)) {

     return response()->json([
         'status' => false,
         'message' => 'Não há registros no sitema'
     ]);
 }
 return response()->json([
     'status' => true,
     'data' => $pagamento
 ]);
}
















}
