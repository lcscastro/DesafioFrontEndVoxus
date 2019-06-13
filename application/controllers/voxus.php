<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 13/06/2019
 * Time: 17:05
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class voxus extends CI_Controller
{
    public function index(){

        $this->load->view('header');
        $this->load->view('desafio');
        $this->load->view('footer');

    }

}