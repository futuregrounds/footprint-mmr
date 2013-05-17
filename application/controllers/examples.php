<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Examples extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		
		$this->load->library('grocery_CRUD');	
	}
	
	function _example_output($output = null)
	{
		$this->load->view('example.php',$output);	
	}
	
	
	function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}	
	
	function trucks_management()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('Trucks');
			$crud->set_subject('Trucks');
			$crud->required_fields('city');
			$crud->columns('TruckName', 'TruckPic', 'TruckNumber','TruckDriver','TagNumber');
			$crud->set_field_upload('TruckPic','assets/uploads/files');
			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
	function employees_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('employees');
			$crud->set_subject('Employees');
			
			$crud->required_fields('lastName');
			
			$crud->set_field_upload('employeePic','assets/uploads/files');
			
			$output = $crud->render();

			$this->_example_output($output);
	}
	
	
	
	function tools_management()
	{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('tools');
			$crud->set_subject('Tools');
			$crud->unset_columns('ToolId');
			$crud->set_field_upload('ToolPic','assets/uploads/files');
			$output = $crud->render();
			
			$this->_example_output($output);
	}	
	
	function jobs_management()
	{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('jobs');
			$crud->set_subject('Jobs');
			$crud->unset_columns('JobId');
			$crud->set_field_upload('jobPic','assets/uploads/files');
			$output = $crud->render();
			
			$this->_example_output($output);
	}	
	
		function groups_management()
	{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('groups');
			$crud->set_subject('Groups');
			$crud->unset_columns('GroupId');
			$crud->set_field_upload('groupPic','assets/uploads/files');
			$output = $crud->render();
			
			$this->_example_output($output);
	}	
	
	function valueToEuro($value, $row)
	{
		return $value.' &euro;';
	}
	
	function film_management()
	{
		$crud = new grocery_CRUD();
		
		$crud->set_table('film');
		$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
		$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
		$crud->unset_columns('special_features','description','actors');
		
		$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');
		
		$output = $crud->render();
		
		$this->_example_output($output);
	}
	
}