<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contact
 *
 * @author Wilson McCoubrey <wilson@mccoubreys.co.uk>
 */
class contact extends My_Controller {
    function __construct() {
        parent::__construct();
    }
    function index(){
        parent::loadPage('contact_us', 'Contact Us');
    }
}
