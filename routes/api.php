<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\TipoDePagamentoController;

use App\Http\Controllers\AdiministradorController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\ProfissionalController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('adm/cadastroCliente', [AdiministradorController::class,  'cadastroAdiministrador']);

//CADASTRO DE SERVIÇO:OK

Route::delete('delete/{id}', [ServicoController::class, 'excluir']);
Route::post('cadastrarServico', [ServicoController::class,  'servico']);
Route::post('buscarNome', [ServicoController::class, 'PesquisarPorNome']);
Route::post('pesquisar', [ServicoController::class, 'pesquisarPorDescricao']);
Route::put('updateServico', [ServicoController::class,  'update']);
Route::get('visualizarServico', [ServicoController::class, 'visualizarServico']);
Route::get('pesquisarPorIdServico/{id}', [ServicoController::class, 'pesquisarPorIdServico']);
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


//CADASTRO DE CLIENTES: OK
Route::delete('excluir/{id}', [ClienteController::class, 'deletar']);
Route::post('cadastroCliente', [ClienteController::class,  'cadastroCliente']);
Route::post('buscarNomecliente', [ClienteController::class, 'pesquisarPorCliente']);
Route::post('CPF', [ClienteController::class, 'pesquisarPorCpf']);
Route::post('telefone', [ClienteController::class, 'PesquisarPorCelular']);
Route::post('email', [ClienteController::class, 'PesquisarPorEmail']);
Route::post('cep', [ClienteController::class, 'pesquisarPorCep']);
Route::put('updateCliente', [ClienteController::class,  'updateCliente']);
Route::get('visualizarCadastroCliente', [ClienteController::class, 'visualizarCadastroCliente']);
Route::get('pesquisarPorIdCleinte/{id}', [ClienteController::class, 'pesquisarPorIdCleinte']);
Route::put('senha/clientes',[clientecontroller::class, 'redefinirSenha']);
//-------------------------------------------------------------------------------------------------------------


//PROFISSIONAL:OK
Route::put('senha/profissional',[Profissionalcontroller::class, 'redefinirSenha']);
Route::post('cadastroProfissional', [ProfissionalController::class, 'cadastroProfissional']);
Route::post('pesquisarPorProfissional', [ProfissionalController::class, 'pesquisarPorProfissionalNome']);
Route::get('visualizarProfissional', [ProfissionalController::class, 'visualizarProfissional']);
Route::post('pesquisarPorCpf', [ProfissionalController::class, 'pesquisarPorCpf']);
Route::post('PesquisarPorCelular', [ProfissionalController::class, 'PesquisarPorCelular']);
Route::post('PesquisarPorEmail', [ProfissionalController::class, 'PesquisarPorEmail']);
Route::put('updateProfissional', [ProfissionalController::class,  'updateProfissional']);
Route::delete('deletarProficional/{id}', [ProfissionalController::class, 'deletarProfissional']);
Route::get('pesquisarPorIdProficional/{id}', [ProfissionalController::class, 'pesquisarPorIdProficional']);


//CADASTROD DE agendamento

Route::post('cadastroAgenda', [AgendaController::class, 'cadastroAgenda']);
Route::delete('deleteAgenda/{id}', [AgendaController::class, 'excluir']);
Route::get('visualizarAgenda', [AgendaController::class, 'visualizarAgenda']);
Route::post('buscarPorData/', [AgendaController::class, 'buscarPorData']);
Route::post('buscarPorIdProfissional{profissional_id}', [AgendaController::class, 'buscarPorIdProfissional']);
route::get('find/agendamento/{id}', [AgendaController::class, 'pesquisarPorId']);
route::put('update/agendamento', [AgendaController::class, 'update']);

//Tipo de pagamento:
Route::put('editar/tipo/pagamento', [TipoDePagamentoController::class,  'updatepagamento']);
Route::post('cadastro/TipoPagame/nto', [TipoDePagamentoController::class,'cadastroTipoPagamento']);
Route::post('pesquisar/nome/TipoPagame/nto', [TipoDePagamentoController::class,'pesquisarPorTipoPagamento']);
Route::post('excluir/TipoPagame/nto', [TipoDePagamentoController::class,'deletarpagamento']);
Route::delete('delete/TipoPagame/to/{id}', [TipoDePagamentoController::class, 'deletarpagamento']);
Route::get('visualizar/TipoPagame/nto', [TipoDePagamentoController::class,'visualizarCadastroTipoPagamento']);


//-------------------------------------PERFIS:------------------------------------------------------------------
//ADM:
Route::post('adm/cpf/pesquisar', [AdiministradorController::class, 'pesquisarPorCpf']);
Route::post('adm/cadastro', [AdiministradorController::class,  'cadastroAdiministrador']);
Route::delete('adm/excluir/adm/{id}', [AdiministradorController::class, 'deletarAdiministrador']);
Route::post('adm/email/pesquisar', [AdiministradorController::class, 'PesquisarPorEmailAdiministrador']);
Route::put('adm/updateAdiministrador', [AdiministradorController::class,  'updateAdiministrador']);
Route::get('adm/visualizar/Cadastro/Adiministrador', [AdiministradorController::class, 'visualizarCadastroAdiministrador']);
Route::get('adm/pesquisar/Por/Id/Adiministrador/{id}', [AdiministradorController::class, 'pesquisarPorIdAdiministrador']);
Route::put('redefinir/senha/Adiministrador',[AdiministradorController::class, 'redefinirSenha']);


  //ADM:CADASTRO DE CLIENTES: OK
Route::delete('adm/excluir/{id}', [ClienteController::class, 'deletar']);
Route::post('adm/cadastroCliente', [ClienteController::class,  'cadastroCliente']);
Route::post('adm/buscarNomecliente', [ClienteController::class, 'pesquisarPorCliente']);
Route::post('adm/CPF', [ClienteController::class, 'pesquisarPorCpf']);
Route::post('adm/telefone', [ClienteController::class, 'PesquisarPorCelular']);
Route::post('adm/email', [ClienteController::class, 'PesquisarPorEmail']);
Route::post('adm/cep', [ClienteController::class, 'pesquisarPorCep']);
Route::put('adm/updateCliente', [ClienteController::class,  'updateCliente']);
Route::get('adm/visualizarCadastroCliente', [ClienteController::class, 'visualizarCadastroCliente']);
Route::get('adm/pesquisarPorIdCleinte/{id}', [ClienteController::class, 'pesquisarPorIdCleinte']);
Route::post('adm/senha/clientes',[clientecontroller::class, 'redefinirSenha']);

//ADM:PROFISSIONAL:OK
Route::post('adm/senha/profissional',[Profissionalcontroller::class, 'redefinirSenha']);
Route::post('adm/cadastroProfissional', [ProfissionalController::class, 'cadastroProfissional']);
Route::post('adm/pesquisarPorProfissional', [ProfissionalController::class, 'pesquisarPorProfissionalNome']);
Route::get('adm/visualizarProfissional', [ProfissionalController::class, 'visualizarProfissional']);
Route::post('adm/pesquisarPorCpf', [ProfissionalController::class, 'pesquisarPorCpf']);
Route::post('PesquisarPorCelular', [ProfissionalController::class, 'PesquisarPorCelular']);
Route::post('PesquisarPorEmail', [ProfissionalController::class, 'PesquisarPorEmail']);
Route::put('adm/updateProfissional', [ProfissionalController::class,  'updateProfissional']);
Route::delete('adm/deletarProficional/{id}', [ProfissionalController::class, 'deletarProfissional']);
Route::get('adm/pesquisarPorIdProficional/{id}', [ProfissionalController::class, 'pesquisarPorIdProficional']);


//ADM:CADASTROD DE agendamento

Route::post('adm/cadastroAgenda', [AgendaController::class, 'cadastroAgenda']);
Route::delete('adm/deleteAgenda/{id}', [AgendaController::class, 'excluir']);
Route::get('adm/visualizarAgenda', [AgendaController::class, 'visualizarAgenda']);
Route::post('adm/buscarPorData/', [AgendaController::class, 'buscarPorData']);
Route::post('adm/buscarPorIdProfissional{profissional_id}', [AgendaController::class, 'buscarPorIdProfissional']);
route::get('adm/find/agendamento/{id}', [AgendaController::class, 'pesquisarPorId']);
route::put('adm/update/agendamento', [AgendaController::class, 'update']);

//ADM:CADASTRO DE SERVIÇO:OK
Route::delete('adm/delete/{id}', [ServicoController::class, 'excluir']);
Route::post('adm/cadastrarServico', [ServicoController::class,  'servico']);
Route::post('adm/buscarNome', [ServicoController::class, 'PesquisarPorNome']);
Route::post('adm/pesquisar', [ServicoController::class, 'pesquisarPorDescricao']);
Route::put('adm/updateServico', [ServicoController::class,  'update']);
Route::get('adm/visualizarServico', [ServicoController::class, 'visualizarServico']);
Route::get('adm/pesquisarPorIdServico/{id}', [ServicoController::class, 'pesquisarPorIdServico']);


//ADM:Tipo de pagamento:
Route::put('adm/editar/tipo/pagamento', [TipoDePagamentoController::class,  'updatepagamento']);
Route::post('adm/cadastro/TipoPagame/nto', [TipoDePagamentoController::class,'cadastroTipoPagamento']);
Route::post('adm/pesquisar/nome/TipoPagame/nto', [TipoDePagamentoController::class,'pesquisarPorTipoPagamento']);
Route::post('adm/excluir/TipoPagame/nto', [TipoDePagamentoController::class,'deletarpagamento']);
Route::delete('adm/delete/TipoPagame/to/{id}', [TipoDePagamentoController::class, 'deletarpagamento']);
Route::get('adm/visualizar/TipoPagame/nto', [TipoDePagamentoController::class,'visualizarCadastroTipoPagamento']);

























