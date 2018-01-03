<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cUser extends CI_Controller {

	public function __Construct(){
      parent::__Construct ();
      $this->load->database();
      $this->load->model('MUser');
      $this->load->model('MEvent');
      $this->load->model('MCardLoad');
	  $this->load->model('MAnnouncement');
      $this->load->library('session');
      $this->data = null;
  	}
  	public function index()
	{
		$data['users'] = $this->MUser->getAllUsers();
		$result_data = $this->MEvent->getAllApprovedEvents();
		$array = array();
		if($result_data){
			foreach ($result_data as $value) {
					$arrObj = new stdClass;
					$arrObj->event_id = $value->event_id;
					$arrObj->event_name = $value->event_name;
					$arrObj->dateStart = $value->dateStart;
					$arrObj->dateEnd = $value->event_date_end;
					$arrObj->event_category = $value->event_category;
					$array[] = $arrObj;
			}
		}
		////////////STOPS HERE///////////////////////////////////////////////////
		$data['events'] = $array;

		$this->data['custom_js']= '<script type="text/javascript">

                              $(function(){

                              	$("#dash").addClass("active");

                              });

                        </script>';

		$this->load->view('imports/vHeaderLandingPage');

		$this->load->view('vLandingPage',$data);

		$this->load->view('imports/vFooterLandingPage',$this->data);
	}
  	public function redeemCode(){

		$code = $this->input->post('ccode');
		echo "Code ID: ".$code;
		$card = $this->MCardLoad->read_where(array('cardCode'=> $code));

		if($card){
			$card = json_decode(json_encode($card));
			$u =  $this->MUser->read($this->session->userdata['userSession']->userID);
			if($card[0]->cardStatus==1){
				$cardNew = $u[0]->load_amt + $card[0]->cardAmount;
				$res = $this->MUser->update($this->session->userdata["userSession"]->userID,array('load_amt'=>$cardNew));

				if($res){
					$code = $card[0]->cardId;
					$res1 = $this->MCardLoad->update($code, array('cardStatus'=>0));
				}
			}
		}

		redirect("CEvent/viewEvents");
	}
	

	public function signuppage()
	{

		$this->load->view('user/vSignup.php');

	}


	public function signup()
	{
		$user = new MUser();

		$now = NEW DateTime(NULL, new DateTimeZone('UTC'));

		$data = array('user_name' => $this->input->post('uname'),
					  'password' => hash('sha512',$this->input->post('password')),
					  'first_name' => $this->input->post('fname'),
					  'last_name' => $this->input->post('lname'),
					  'middle_initial' => $this->input->post('miname'),
					  'email' => $this->input->post('email'),
					  'birthdate' => $this->input->post('bdate'),
					  'gender' => $this->input->post('gender'),
					  'contact_no' => $this->input->post('contact'),
					  'user_type' => 'Regular',
					  'addedAt' => $now->format('Y-m-d H:i:s')
					);


		$res = $this->MUser->read_where(array('user_name' => $data['user_name']));
		$res1 = $this->MUser->read_where(array('email' => $data['email']));

    	if($res){
    			$this->session->set_flashdata('error_msg','Username taken');
    			$this->data = $data;
    			$this->viewSignUp();

		}else if($res1){
			$this->session->set_flashdata('error_msg','Email taken');
			$this->data = $data;
				$this->viewSignUp();

		}else{

			$result = $user->insert($data);

			if($result){
			redirect('CEvent/viewEvents');
		}

		}

	}

	public function eventregister()
	{
		$this->load->view('imports/vHeader');
		$this->load->view('user/vEventRegistration.php');
		$this->load->view('imports/vFooter');
	}

	public function displayEvent()
	{

		$data['events'] = $this->MEvent->getAllEvents();
		$this->load->view('imports/vHeader');
		$this->load->view('user/vListEvents.php', $data);
		$this->load->view('imports/vFooter');
		# code...
	}

	public function displayEventDetails($id)
	{

		$uid = null;

		$data1 ['events']= $this->MEvent->loadEventDetails($id);
		$gID = $this->MEvent->loadEventDetails($id);
		foreach ($gID as $k) {
			$uid = $k->user_id;
		}
		$data2['users']	= $this->MUser->loadUserDetails($uid);

		$data = array_merge($data1,$data2);
		$this->load->view('imports/vHeader');
		$this->load->view('user/vEventRegistration.php', $data);
		$this->load->view('imports/vFooter');
	}

	public function search(){
		$data['events'] = $this->MEvent->getAllEvents();

		$this->load->view('imports/vHeaderLandingPage');
		$this->load->view('user/vSearch.php');
		$this->load->view('imports/vFooter');
	}
	public function viewSignUp()
	{
		if(!$this->data){
		$this->load->view('imports/vHeaderSignUpPage');
		$this->load->view('vSignUp');
		$this->load->view('imports/vFooterLandingPage');
		}else{
			$this->load->view('imports/vHeaderSignUpPage');
		$this->load->view('vSignUp',$this->data);
		$this->load->view('imports/vFooterLandingPage');
		}

	}

	public function viewAnnouncements()
	{
		$data['announcements'] = $this->MAnnouncement->loadAllAnnouncementDetails();
		$this->load->view('imports/vHeaderSignUpPage');
		$this->load->view('user/vAnnouncementPage.php', $data);
		$this->load->view('imports/vFooterLandingPage');

	}
}
