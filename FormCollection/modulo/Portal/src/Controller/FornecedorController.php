<?php

namespace Portal\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Portal\Form\FornecedorForm;

class FornecedorController extends AbstractActionController{
    
    //Index
    public function indexAction(){
        return new ViewModel();
    }
    
    public function cadastroAction(){
    //    $dados = [];
        
//        $dados['fornecedor'] = [
//            'id' => '',
//            'razao_social' => 'teste',
//            'nome_fantasia' => 'teste',
//            'documento' => [
//                    'id' => '', 
//                    'cnpj' => '',
//                    'cpf' => '',
//                ],
//
//            'enderecos' => [
//                    [   'id' => '', 
//                            'cep' => '', 
//                            'endereco' => 'teste1',
//                            'numero' => '', 
//                            'bairro' => '',
//                            'cidade' => '',
//                            'uf' => '',
//                            'complemento' => '',
//                        ],
//
//                       [   'id' => '', 
//                            'cep' => '', 
//                            'endereco' => 'teste2',
//                            'numero' => '', 
//                            'bairro' => '',
//                            'cidade' => '',
//                            'uf' => '',
//                            'complemento' => '',
//                        ],
//                        
//                        [   'id' => '', 
//                            'cep' => '', 
//                            'endereco' => 'teste',
//                            'numero' => '', 
//                            'bairro' => '',
//                            'cidade' => '',
//                            'uf' => '',
//                            'complemento' => '',
//                        ]
//                ],
//            'telefones' => [
//                        [
//                           'id' => '', 
//                            'ddd' => '13', 
//                            'numero' => '432423',
//                            'tipos_telefone' => '2', 
//                        ],
//                        [
//                            'id' => '', 
//                            'ddd' => '123', 
//                            'numero' => '432',
//                            'tipos_telefone' => '2', 
//                        ]
//            ]
//        ];  
        
        $form = new FornecedorForm();
        
//        if($dados){
//            $form->setData($dados);
//        }
        
        $request = $this->getRequest();
        
        if ($request->isPost()) {            
            //printDebug($request, true);
            $form->setData($request->getPost());

            if ($form->isValid()) {
                $dados_form = $form->getData();
                printDebug($dados_form, true);
            }
        }

        return array(
            'form' => $form,
//            'count' => $count,
        );
    }
}

