<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Services\Customers\CustomerService;
use Models\Customers\CustomerModel;

class Welcome extends CI_Controller {
    protected $customerService;

	public function index()
	{
         $this->customerService = new CustomerService(new CustomerModel());
         foreach($this->customerService->getCustomers() as $customer) {
            echo "Customer ID:". $customer->id."<br>";
            echo "Customer Name:". $customer->name."<br>";
         }
		
		//$this->load->view('welcome_message');
	}
}
