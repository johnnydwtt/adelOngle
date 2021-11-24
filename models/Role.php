<?php
require_once(dirname(__FILE__).'/../utils/connect.php');

class Role{

    private $_role_id;
    private $_role_select;
    private $_customer_id;

    private $_pdo;

    public function __construct(    
                                    $role_id = null,
                                    $role_select = null,
                                    $customer_id = null,
                                    ){

        $this->_role_id = $role_id;
        $this->_role_select = $role_select; 
        $this->_customer_id = $customer_id;  

        $this->_pdo = Database::getInstance();
    
    }

    


}