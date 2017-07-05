<?php
namespace Portal\Form\Fieldset;

use Zend\Form\Fieldset;

class FornecedorFieldset extends Fieldset{
    
    public function __construct(){
        parent::__construct('fornecedor');
    }
  
    public function init(){
        $this->add(array(
            'name' => 'id',
            'attributes' => array(
                'type' => 'hidden',
            ),
        ));
        
        $this->add(array(
            'name' => 'razao_social',
            'attributes' => array(
                'type'  => 'text',
                'class' => 'form-control input-sm',
                'maxlength' => 60,
                'id' => 'razao_social',
                'onchange' => 'clonarNome()',
                'autofocus' => 'autofocus',
                'value' => '',  
                'required' => 'required', 
            ),
            'options' => array(
                'label' => 'Razão Social',
            ),
        ));
        
        $this->add(array(
            'name' => 'nome_fantasia',
            'attributes' => array(
                'type'  => 'text',
                'class' => 'form-control input-sm',
                'maxlength' => 60,
                'id' => 'nome_fantasia',
                'value' => '',  
                'required' => '', 
            ),
            'options' => array(
                'label' => 'Nome Fantasia',
            ),
        ));
        
        $this->add(array(
             'type' => 'Portal\Form\Fieldset\DocumentoFieldset',
             'name' => 'documento',
             'options' => array(
                 'label' => 'Documento',
             ),
        ));
        
        $this->add(array(
            'name' => 'enderecos',
            'type' => 'Zend\Form\Element\Collection',
            'options' => array(
                'label' => 'Indique Endereço',
                'count' => 1, // Quantidade inicial de elementos no Collection
                'should_create_template' => False, // Caso você queira que o form tenha o atributo data-template, para que você possa clonar o elemento quer ficará dentro do Collection
                'allow_add' => True, // Caso você queira que o Collection permita adição de elementos
                //'template_placeholder' => '__idx__',
                'target_element' => array(// Elemento que irá compor o Collection
                    'name' => 'enderecos',
                    'type' => 'Portal\Form\Fieldset\EnderecoFieldset',
                ), 
            ),
        ));
        
        $this->add(array(
            'name' => 'telefones',
            'type' => 'Zend\Form\Element\Collection',
            'options' => array(
                'label' => 'Indique Telefones',
                'count' => 1, // Quantidade inicial de elementos no Collection
                'should_create_template' => False, // Caso você queira que o form tenha o atributo data-template, para que você possa clonar o elemento quer ficará dentro do Collection
                'allow_add' => True, // Caso você queira que o Collection permita adição de elementos
                //'template_placeholder' => '__idx__',
                'target_element' => array(// Elemento que irá compor o Collection
                    'name' => 'telefones',
                    'type' => 'Portal\Form\Fieldset\TeledoneFieldset',
                ), 
            ),
        ));
    } 
}

