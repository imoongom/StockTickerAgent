<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//the model for player table
class Player extends MY_Model {
    // constructor
    function __construct() {
        parent::__construct('players','Player');
    }
    
}