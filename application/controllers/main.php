<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Main extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
 
        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */ 
 
        $this->load->library('grocery_CRUD');
 
    }
 
    public function index()
    {
        echo "<h1>Welcome to the world of Codeigniter</h1>";//Just an example to ensure that we get into the function
                die();
    }
 
    public function employees()
    {
        $this->grocery_crud->set_table('employees');
        $container = grocery_crud('groups');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);        
    }
    
     public function tools()
    {
        $this->grocery_crud->set_table('tools');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);        
    }
    
     public function trucks()
    {
        $this->grocery_crud->set_table('trucks');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);        
    }

 
 	  public function groups()
    {
        $this->grocery_crud->set_table('groups');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);        
    }
    
    	  public function film()
    {
        $this->grocery_crud->set_table('film');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);        
    }
 
  	  public function actors()
    {
        $this->grocery_crud->set_table('actors');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);        
    }
    
     	  public function customers()
    {
        $this->grocery_crud->set_table('customers');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);        
    }
    
     	  public function category()
    {
        $this->grocery_crud->set_table('category');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);        
    }
    
     	  public function offices()
    {
        $this->grocery_crud->set_table('offices');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);        
    }
    
     	  public function orders()
    {
        $this->grocery_crud->set_table('orders');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);        
    }
    
     	  public function payments()
    {
        $this->grocery_crud->set_table('payments');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);        
    }
    
     	  public function products()
    {
        $this->grocery_crud->set_table('products');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);        
    }
 
}
 
/* End of file main.php */
/* Location: ./application/controllers/main.php */