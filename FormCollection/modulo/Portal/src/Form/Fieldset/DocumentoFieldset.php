<?php
namespace Portal\Form\Fieldset;

use Zend\Form\Fieldset;

class DocumentoFieldset extends Fieldset{
    
    public function __construct(){;
        parent::__construct('documento');
    }
    
    public function init(){
        $this->add(array(
            'name' => 'id',
            'attributes' => array(
                'type' => 'hidden',
            ),
        ));
        
        $this->add(array(
            'name' => 'cnpj',
            'attributes' => array(
                'type'  => 'text',
                'class' => 'form-control input-sm',
                'maxlength' => 20,
                'id' => 'cnpj',
                'value' => '',
            ),
            'options' => array(
                'label' => 'CNPJ',
            ),
        ));
        
        $this->add(array(
            'name' => 'cpf',
            'attributes' => array(
                'type'  => 'text',
                'class' => 'form-control input-sm',
                'maxlength' => 20,
                'id' => 'cpf',
                'value' => '',
                'onchange' => 'validacaoCPF()',
            ),
            'options' => array(
                'label' => 'CPF',
            ),
        ));
    } 
}

