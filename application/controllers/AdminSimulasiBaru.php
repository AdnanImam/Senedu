 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class AdminSimulasiBaru extends CI_Controller {
 
      public function index()
      {
           $this->load->view('admin/admin_simulasibaru');
      }
 }