<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
public function __construct() {
parent::__construct();
    $this->load->helper('url', 'form');
$this->load->model('login_database');
// Load form helper library
$this->load->helper('form');
$this->load->helper('url');

// Load form validation library
$this->load->library('form_validation');
$this->load->database();
  $this->load->helper('url');
    
        $this->load->library("pagination");

// Load session library


// Load database

$this->load->library("session");

}



	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{

				 	 $result['clients'] = $this->login_database->get_client();
		$this->load->view('index',$result);
	}
	public function feedback()
	{
		$this->load->view('installation');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function gallary()
	{
		$this->load->view('services');
	}
	public function blog()
	{
		$this->load->view('ac-repair',);
		
	}
	public function insertfeedback()
	{
		$this->load->view('duct-cleaning',);
		
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function allservices()
	{
		$this->load->view('allservices');
	}
	public function why()
	{
		$this->load->view('why');
	}
	public function painting_services()

	{
		
		$this->load->view('Painting');
	}
	public function Electrical()
	{
		$this->load->view('ser-drain-cleaning');
	}
	public function Paint()
	{
		$this->load->view('ser-water-treatment');
	}
	public function ac_maintenance()
	{
		$this->load->view('ser-heating-cooling');
	}
	public function Plumbing()
	{
		$this->load->view('Plumbing');
	}
	public function Building()
	{
		$this->load->view('ser-sewer-cleaning-repair');
	}
	public function heating()
	{
		$this->load->view('carpentry-services');
	}
	public function hvac()
	{
		$this->load->view('ser-plumbing-repairs');
	}
	public function duct_installation()
	{
		$this->load->view('ser-faucet-leak-reapirs');
	}
	public function geothermal()
	{
		$this->load->view('Damaged-Ceilings');
	}
	public function INTERIOR()
	{
		$this->load->view('interior');
	}
	public function buiilding()
	{
		$this->load->view('ser-sewer-cleaning-repair');
	}
	public function indoor()
	{
		$this->load->view('ser-sewer-cleaning-repair');
	}
	public function plaster()
	{
		$this->load->view('Plaster');
	}
	public function faq()
	{
		$this->load->view('faq');
	}
	public function get_appointment()
	{
		$this->load->view('appointment');
	}
		public function blog_single()
	{
		$this->load->view('blog-single');

	}
	public function blog_detail($id)
	{
			$result['blogs'] = $this->login_database->get_blog1($id);
		$this->load->view('single-blog',$result);
	}



public function ac_duct()
	{
		
		
		$this->load->view('ac-duct');
		
	}
	public function air_conditioner()
	{
		
		
		$this->load->view('coil-cleaning');
		
	}
	public function split_ac()
	{
		
		
		$this->load->view('faq');
		
	}public function ac_outdoor_unit()
	{
		
		
		$this->load->view('blog');
		
	}public function ac_indoor_unit()
	{
		
		
		$this->load->view('contact');
		
	}public function ac_installation()
	{
		
		
		$this->load->view('ac-quotes');
		
	}public function ac_grills()
	{
		
		
		$this->load->view('blog1');
		
	}public function sanitary_work()
	{
		
		
		$this->load->view('blog2');
		
	}public function pipe_fixing()
	{
		
		
		$this->load->view('blog3');
		
	}public function water_leakage()
	{
		
		
		$this->load->view('blog4');
		
	}public function pipe_repairs()
	{
		
		
		$this->load->view('blog5');
		
	}public function post_plumbing()
	{
		
		
		$this->load->view('blog6');
		
	}public function pipe_instalation()
	{
		
		
		$this->load->view('terms-condition');
		
	}public function flooring_tiling()
	{
		
		
		$this->load->view('privacy-policy');
		
	}public function granite_tiles()
	{
		
		
		$this->load->view('Pumps');
		
	}public function mosaic_tiles()
	{
		
		
		$this->load->view('Air-Blower');
		
	}public function marble_tiles()
	{
		
		
		$this->load->view('marble-tiles');
		
	}public function slate_tiles()
	{
		
		
		$this->load->view('Cofee');
		
	}public function skirting_grounting()
	{
		
		
		$this->load->view('Control');
		
	}public function bathroom_renovations()
	{
		
		
		$this->load->view('Transformer');
		
	}public function electrical_work()
	{
		
		
		$this->load->view('Vaccume');
		
	}public function cabling_work()
	{
		
		
		$this->load->view('cabling-work');
		
	}public function light_fitings()
	{
		
		
		$this->load->view('Electromechanical');
		
	}public function power_sockets()
	{
		
		
		$this->load->view('power-sockets');
		
	}public function wallpaper_fixing()
	{
		$result['results'] = $this->login_database->get_painting();
		
		$this->load->view('wallpaper-fixing');
		
	}public function fenomastic_paint()
	{
		
		
		$this->load->view('fenomastic-paint');
		
	}public function wood_polishing()
	{
		
		
		$this->load->view('wood-polishing');
		
	}public function door_polishing()
	{
		
		
		$this->load->view('door-polishing');
		
	}public function single_blog()
	{
		
		
		$this->load->view('Floor');
		
	}public function janitorial_services()
	{
		
		
		$this->load->view('janitorial-services');
		
	}public function deep_cleaning()
	{
		
		
		$this->load->view('deep-cleaning');
		
	}public function Furniture_Cleaning()
	{
		
		
		$this->load->view('Carpentry');
		
	}public function Damaged_Ceilings()
	{
		
		
		$this->load->view('Ceilling');
		
	}
	public function Commercial_Plastering()
	{
		
		
		$this->load->view('Engraving');
		
	}



public function blogdelete($id)
  {
   $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $status = $this->login_database->delete_blog($id);
      $result['results']= $this->login_database->get_blog();
        if($status == 1)
           {
             $this->session->set_flashdata('SUCCESS', "Record Deleted Successfully!!");
              $result['results'] = $this->login_database->get_blog();
                                               $result['status']= $this->login_database->get_admin2();
$this->load->view('admin/blog_detail2',$result);  
           }
           else{
           	 $result['results'] = $this->login_database->get_blog();
              
                                               $result['status']= $this->login_database->get_admin2();
$this->load->view('admin/blog_detail2',$result);  
           }
            
   
    }

	public function blog_detail1()
	{
		 $result['results'] = $this->login_database->get_blog();
		
   
	 		 	  
$this->load->view('admin/blog_detail1',$result);
	}

public function add_blogs()
	{
		                               
$this->load->view('admin/add_blogs');
	}
	public function insertblog()
	{
	 $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'jpg|png|jpeg';
            

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('images'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                        die();

                        $this->load->view('index', $error);
                }
                else
                {
                  $data=$this->upload->data();

        $data = array(
        	'date' => $this->input->post('date'),

'heading' => $this->input->post('heading'),
'detail' => $this->input->post('detail'),
'images' =>$data['file_name'] 


);

  
      }

              
               $status['status'] = $this->login_database->insert_blog($data);  
              $result['results'] = $this->login_database->get_blog();
		

		                               $result['status']= $this->login_database->get_admin2();
$this->load->view('admin/blog_detail',$result);

	}

	public function admin()
	{   
    // edit
    $data  = array();
          $data = array(
      'email' =>  trim(str_replace(' ', '', $this->input->post('email'))),
      'password' => trim(str_replace(' ', '', $this->input->post('password')))
       
      );
       $std = "";
      $std = $this->input->post('usertoken');
      
      
      $result    = array();
    if($std == 'adm')
    {
      $result['results'] =$this->login_database->get_admin($data);
               

    }
  
	   if(!empty($result['results'])) 

{
		

     $result['statuss']="0";
   
    $this->session->set_userdata('name','0');
                 

        $result['status']= $this->login_database->get_admin2();
    $this->load->view('admin/dashboard',$result);
        }
       
      
        else{
         // $this->session->set_flashdata("userloginerror", "Invalid user email or password");
          $this->load->view('admin/login');
        }
       
}








}
