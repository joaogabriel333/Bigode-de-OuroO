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
Route::put('senha/clientes', [clientecontroller::class, 'redefinirSenha']);
//-------------------------------------------------------------------------------------------------------------


//PROFISSIONAL:OK
Route::put('senha/profissional', [Profissionalcontroller::class, 'redefinirSenha']);
Route::post('cadastroProfissional', [ProfissionalController::class, 'cadastroProfissional']);
Route::post('pesquisarPorProfissional', [ProfissionalController::class, 'pesquisarPorProfissionalNome']);
Route::get('visualizarProfissional', [ProfissionalController::class, 'visualizarProfissional']);
Route::post('pesquisarPorCpf', [ProfissionalController::class, 'pesquisarPorCpf']);
Route::post('PesquisarPorCelular', [ProfissionalController::class, 'PesquisarPorCelular']);
Route::post('PesquisarPorEmail', [ProfissionalController::class, 'PesquisarPorEmail']);
Route::put('updateProfissional', [ProfissionalController::class,  'updateProfissional']);
Route::delete('deletarProficional/{id}', [ProfissionalController::class, 'deletarProfissional']);
Route::get('pesquisarPorIdProficional/{id}', [ProfissionalController::class, 'pesquisarPorIdProficional']);




//PROFISSIONAL:Cliente
Route::delete('profissional/excluir/{id}', [ClienteController::class, 'deletar']);
Route::post('profissional/cadastroCliente', [ClienteController::class,  'cadastroCliente']);
Route::post('profissional/buscarNomecliente', [ClienteController::class, 'pesquisarPorCliente']);
Route::post('profissional/CPF', [ClienteController::class, 'pesquisarPorCpf']);
Route::post('profissional/telefone', [ClienteController::class, 'PesquisarPorCelular']);
Route::post('profissional/email', [ClienteController::class, 'PesquisarPorEmail']);
Route::post('profissional/cep', [ClienteController::class, 'pesquisarPorCep']);
Route::put('profissional/updateCliente', [ClienteController::class,  'updateCliente']);
Route::get('profissional/visualizarCadastroCliente', [ClienteController::class, 'visualizarCadastroCliente']);
Route::get('profissional/pesquisarPorIdCleinte/{id}', [ClienteController::class, 'pesquisarPorIdCleinte']);
Route::put('profissional/senha/clientes', [clientecontroller::class, 'redefinirSenha']);



//PROFISSIONAL: CADASTROD DE Horarios
Route::post('profissional/cadastroAgenda', [AgendaController::class, 'cadastroAgenda']);
Route::delete('profissional/deleteAgenda/{id}', [AgendaController::class, 'excluir']);
Route::get('profissional/visualizarAgenda', [AgendaController::class, 'visualizarAgenda']);
Route::post('profissional/buscarPorData/', [AgendaController::class, 'buscarPorData']);
Route::post('profissional/buscarPorIdProfissional{profissional_id}', [AgendaController::class, 'buscarPorIdProfissional']);
route::get('profissional/find/agendamento/{id}', [AgendaController::class, 'pesquisarPorId']);
route::put('profissional/update/agendamento', [AgendaController::class, 'update']);



//CADASTROD DE Horarios

Route::post('cadastroAgenda', [AgendaController::class, 'cadastroAgenda']);
Route::delete('deleteAgenda/{id}', [AgendaController::class, 'excluir']);
Route::get('visualizarAgenda', [AgendaController::class, 'visualizarAgenda']);
Route::post('buscarPorData/', [AgendaController::class, 'buscarPorData']);
Route::post('buscarPorIdProfissional{profissional_id}', [AgendaController::class, 'buscarPorIdProfissional']);
route::get('find/agendamento/{id}', [AgendaController::class, 'pesquisarPorId']);
route::put('update/agendamento', [AgendaController::class, 'update']);

//Tipo de pagamento:
Route::put('editar/tipo/pagamento', [TipoDePagamentoController::class,  'updatepagamento']);
Route::post('cadastro/TipoPagame/nto', [TipoDePagamentoController::class, 'cadastroTipoPagamento']);
Route::post('pesquisar/nome/TipoPagame/nto', [TipoDePagamentoController::class, 'pesquisarPorTipoPagamento']);
Route::post('excluir/TipoPagame/nto', [TipoDePagamentoController::class, 'deletarpagamento']);
Route::delete('delete/TipoPagame/to/{id}', [TipoDePagamentoController::class, 'deletarpagamento']);
Route::get('visualizar/TipoPagame/nto', [TipoDePagamentoController::class, 'visualizarCadastroTipoPagamento']);
Route::get('visualizar/TipoPagame/nto/habilitado', [TipoDePagamentoController::class, 'visualizarCadastroTipoPagamentoHabilitado']);
Route::get('visualizar/TipoPagame/nto/desabilitado', [TipoDePagamentoController::class, 'visualizarCadastroTipoPagamentoDesabilitado']);


//-------------------------------------PERFIS:------------------------------------------------------------------
//ADM:
Route::post('adm/cpf/pesquisar', [AdiministradorController::class, 'pesquisarPorCpf']);
Route::post('adm/cadastro', [AdiministradorController::class,  'cadastroAdiministrador']);
Route::delete('adm/excluir/adm/{id}', [AdiministradorController::class, 'deletarAdiministrador']);
Route::post('adm/email/pesquisar', [AdiministradorController::class, 'PesquisarPorEmailAdiministrador']);
Route::put('adm/updateAdiministrador', [AdiministradorController::class,  'updateAdiministrador']);
Route::get('adm/visualizar/Cadastro/Adiministrador', [AdiministradorController::class, 'visualizarCadastroAdiministrador']);
Route::get('adm/pesquisar/Por/Id/Adiministrador/{id}', [AdiministradorController::class, 'pesquisarPorIdAdiministrador']);
Route::put('adm/redefinir/senha/Adiministrador', [AdiministradorController::class, 'redefinirSenha']);


//ADM:CADASTRO DE CLIENTES: OK
Route::delete('adm/cliente/excluir/{id}', [ClienteController::class, 'deletar']);
Route::post('adm/cliente/cadastroCliente', [ClienteController::class,  'cadastroCliente']);
Route::post('adm/cliente/buscarNomecliente', [ClienteController::class, 'pesquisarPorCliente']);
Route::post('adm/cliente/CPF', [ClienteController::class, 'pesquisarPorCpf']);
Route::post('adm/cliente/telefone', [ClienteController::class, 'PesquisarPorCelular']);
Route::post('adm/cliente/email', [ClienteController::class, 'PesquisarPorEmail']);
Route::post('adm/cliente/cep', [ClienteController::class, 'pesquisarPorCep']);
Route::put('adm/cliente/updateCliente', [ClienteController::class,  'updateCliente']);
Route::get('adm/cliente/visualizarCadastroCliente', [ClienteController::class, 'visualizarCadastroCliente']);
Route::get('adm/cliente/pesquisarPorIdCleinte/{id}', [ClienteController::class, 'pesquisarPorIdCleinte']);
Route::put('adm/cliente/senha/clientes', [clientecontroller::class, 'redefinirSenha']);

//ADM:PROFISSIONAL:OK
Route::put('adm/profissional/senha/profissional', [Profissionalcontroller::class, 'redefinirSenha']);
Route::post('adm/profissional/cadastroProfissional', [ProfissionalController::class, 'cadastroProfissional']);
Route::post('adm/profissional/pesquisarPorProfissional', [ProfissionalController::class, 'pesquisarPorProfissionalNome']);
Route::get('adm/profissional/visualizarProfissional', [ProfissionalController::class, 'visualizarProfissional']);
Route::post('adm/profissional/pesquisarPorCpf', [ProfissionalController::class, 'pesquisarPorCpf']);
Route::post('adm/profissional/PesquisarPorCelular', [ProfissionalController::class, 'PesquisarPorCelular']);
Route::post('adm/profissional/PesquisarPorEmail', [ProfissionalController::class, 'PesquisarPorEmail']);
Route::put('adm/profissional/updateProfissional', [ProfissionalController::class,  'updateProfissional']);
Route::delete('adm/profissional/deletarProficional/{id}', [ProfissionalController::class, 'deletarProfissional']);
Route::get('adm/profissional/pesquisarPorIdProficional/{id}', [ProfissionalController::class, 'pesquisarPorIdProficional']);


//ADM:CADASTROD DE agendamento

Route::post('adm/agenda/cadastroAgenda', [AgendaController::class, 'cadastroAgenda']);
Route::delete('adm/agenda/deleteAgenda/{id}', [AgendaController::class, 'excluir']);
Route::get('adm/agenda/visualizarAgenda', [AgendaController::class, 'visualizarAgenda']);
Route::post('adm/agenda/buscarPorData/', [AgendaController::class, 'buscarPorData']);
Route::post('adm/agenda/buscarPorIdProfissional{profissional_id}', [AgendaController::class, 'buscarPorIdProfissional']);
route::get('adm/agenda/find/agendamento/{id}', [AgendaController::class, 'pesquisarPorId']);
route::put('adm/agenda/update/agendamento', [AgendaController::class, 'update']);

//ADM:CADASTRO DE SERVIÇO:OK
Route::delete('adm/servico/delete/{id}', [ServicoController::class, 'excluir']);
Route::post('adm/servico/cadastrarServico', [ServicoController::class,  'servico']);
Route::post('adm/servico/buscarNome', [ServicoController::class, 'PesquisarPorNome']);
Route::post('adm/servico/pesquisar', [ServicoController::class, 'pesquisarPorDescricao']);
Route::put('adm/servico/updateServico', [ServicoController::class,  'update']);
Route::get('adm/servico/visualizarServico', [ServicoController::class, 'visualizarServico']);
Route::get('adm/servico/pesquisarPorIdServico/{id}', [ServicoController::class, 'pesquisarPorIdServico']);


//ADM:Tipo de pagamento:
Route::put('adm/tipo/pagamento/editar/tipo/pagamento', [TipoDePagamentoController::class,  'updatepagamento']);
Route::post('adm/tipo/pagamento/cadastro/TipoPagame/nto', [TipoDePagamentoController::class, 'cadastroTipoPagamento']);
Route::post('adm/tipo/pagamento/pesquisar/nome/TipoPagame/nto', [TipoDePagamentoController::class, 'pesquisarPorTipoPagamento']);
Route::post('adm/tipo/pagamento/excluir/TipoPagame/nto', [TipoDePagamentoController::class, 'deletarpagamento']);
Route::delete('adm/tipo/pagamento/delete/TipoPagame/to/{id}', [TipoDePagamentoController::class, 'deletarpagamento']);
Route::get('adm/tipo/pagamento/visualizar/TipoPagame/nto', [TipoDePagamentoController::class, 'visualizarCadastroTipoPagamento']);
Route::get('adm/tipo/pagamento/visualizar/TipoPagame/nto/habilitado', [TipoDePagamentoController::class, 'visualizarCadastroTipoPagamentoHabilitado']);
Route::get('adm/tipo/pagamento/visualizar/TipoPagame/nto/desabilitado', [TipoDePagamentoController::class, 'visualizarCadastroTipoPagamentoDesabilitado']);
