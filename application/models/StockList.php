<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class stockList extends MY_Model2 {
    // constructor
    function __construct() {
        parent::__construct('transactions','Stock','DateTime');
    }
    
}
