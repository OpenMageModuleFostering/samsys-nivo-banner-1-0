<?php

class Samsys_Nivobanner_Model_Mysql4_Nivobanner extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the banner_id refers to the key field in your database table.
        $this->_init('nivobanner/nivobanner', 'banner_id');
    }
}