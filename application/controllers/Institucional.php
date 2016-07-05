<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Institucional
 *
 * @author admin
 */
class Institucional extends CI_Controller{

    public function index()
    {
    $this->load->view('home');
    }
    
    public function empresa()
    {
    $this->load->view('home');
    }
    
    public function servicos()
    {
    $this->load->view('home');
    }
}
