<?php

namespace Portal\Form;

use Zend\Form\Form;
//use Portal\Form\Filter\AgendaFilter;

class FornecedorForm extends Form{

    public function __construct() {
        parent::__construct('FornecedorForm');
        $this->setAttribute('method', 'post');
        
        //$this->setInputFilter(new AgendaFilter());   
        
        $this->add(array(
             'type' => 'Portal\Form\Fieldset\FornecedorFieldset',
             'options' => array(
                 'use_as_base_fieldset' => true,
             ),
         ));

         $this->add(array(
             'type' => 'Zend\Form\Element\Csrf',
             'name' => 'csrf',
         ));
        
//         $this->add(array(
//             'name' => 'submit',
//             'attributes' => array(
//                 'type'  => 'submit',
//                 'class' => 'btn btn-success',                
//             ),
//         )); 
    }
}
         

