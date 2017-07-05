<?php
namespace Portal\Form\Fieldset;

use Zend\Form\Fieldset;

class EnderecoFieldset extends Fieldset{
    
    public function __construct(){
        parent::__construct('endereco');
    }
    
    public function init(){
        $count_endereco = 0;
        $this->add(array(
            'name' => 'id',
            'attributes' => array(
                'type' => 'hidden',
            ),
        ));
        
        $this->add(array(
            'name' => 'cep',
            'attributes' => array(
                'type'  => 'text',
                'class' => 'form-control input-sm cep',
                'maxlength' => 9,
                'id' => 'cep',
                'onchange' => 'buscaCep(0)',
                'value' => '',
            ),
            'options' => array(
                'label' => 'CEP',
            ),
        ));
        
//        $this->add(array(
//            'name' => 'endereco',
//            'attributes' => array(
//                'type'  => 'text',
//                'class' => 'form-control input-sm',
//                'maxlength' => 60,
//                'id' => 'endereco',
//                'value' => '',
//            ),
//            'options' => array(
//                'label' => 'Endereço',
//            ),
//        ));
        
        $this->add(array(
            'name' => 'endereco',
            'attributes' => array(
                'type'  => 'text',
                'class' => 'form-control input-sm',
                'maxlength' => 60,
                'id' => 'endereco',
                'value' => '',
            ),
            'options' => array(
                'label' => 'Endereço',
            ),
        ));
        
        $this->add(array(
            'name' => 'numero',
            'attributes' => array(
                'type'  => 'text',
                'class' => 'form-control input-sm',
                'maxlength' => 10,
                'id' => 'numero',
                'value' => '',  
                'required' => '', 
            ),
            'options' => array(
                'label' => 'Nº',
            ),
        ));
        
        $this->add(array(
            'name' => 'bairro',
            'attributes' => array(
                'type'  => 'text',
                'class' => 'form-control input-sm',
                'maxlength' => 60,
                'id' => 'bairro',
                'value' => '',  
                'required' => '', 
            ),
            'options' => array(
                'label' => 'Bairro',
            ),
        ));
        
        $this->add(array(
            'name' => 'cidade',
            'attributes' => array(
                'type'  => 'text',
                'class' => 'form-control input-sm',
                'maxlength' => 60,
                'id' => 'cidade',
                'value' => '',  
                'required' => '', 
            ),
            'options' => array(
                'label' => 'Cidade',
            ),
        ));
        
        $this->add(array(
            'name' => 'uf',
            'attributes' => array(
                'type'  => 'text',
                'class' => 'form-control input-sm',
                'maxlength' => 2,
                'id' => 'uf',
                'value' => '',  
                'required' => '', 
            ),
            'options' => array(
                'label' => 'UF',
            ),
        ));

        $this->add(array(
            'name' => 'complemento',
            'attributes' => array(
                'type'  => 'text',
                'class' => 'form-control input-sm',
                'maxlength' => 60,
                'id' => 'complemento',
                'value' => '',  
                'required' => '', 
            ),
            'options' => array(
                'label' => 'Complemento',
            ),
        ));
    } 
}

