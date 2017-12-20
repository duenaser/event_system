<?php
	class MEvents extends MY_Model {
		/*Declare Entities*/
		//Ex.: private $event_id;
		private $event_id;
		private $event_date_start;
		private $event_date_end;
		private $no_tickets_total;
		private $event_status;
		private $event_name;
		private $event_details;
		private $event_category;
		private $event_venue;
		private $date_created;
		private $user_id;

		const DB_TABLE = "event_info";
    	const DB_TABLE_PK = "event_id";

    	public function __construct(){

		}
		public function getRevenue($eid){
			
			$this->db->select("ei.event_name, tt.ticket_name, COUNT(t.ticket_id) as cnt , tt.price");
			$this->db->from("event_info as ei");
			$this->db->join("ticket_type as tt","tt.event_id = ei.event_id","left");
			$this->db->join("ticket as t","t.ticket_type_id  = tt.ticket_type_id","left");
			$this->db->where("ei.event_id ",$eid);
			$this->db->group_by("tt.ticket_type_id");
			
			$query = $this->db->get();
			return $query->result();

		}

		//Class getters and setters.
		public function getTransHistory($id){
			$this->db->select('e.event_name AS  "Event", y.price AS "Paid", DATE_FORMAT(t.date_sold, "%d-%b-%y") AS "DatePaid"');
        	$this->db->from("event_info AS e");
	        $this->db->join("ticket_type as y","e.event_id = y.event_id");
	        $this->db->join("ticket AS t","t.ticket_type_id = y.ticket_type_id");
	        $this->db->join("user_account AS u","u.account_id = t.user_id");
	        $this->db->where(" u.account_id = '$id'");
	        $query = $this->db->get();
			return $query->result();
		}
		public function getEvent_id(){
			return $this->event_id;
		}

		public function setEccount_id($event_id){
			$this->event_id = $event_id;
		}

		public function getEvent_date_start(){
			return $this->event_date_start;
		}

		public function setEvent_date_start($event_date_start){
			$this->event_date_start = $event_date_start;
		}

		public function getEvent_date_end(){
			return $this->event_date_end;
		}

		public function setEvent_date_end($event_date_end){
			$this->event_date_end = $event_date_end;
		}

		public function getNo_tickets_total(){
			return $this->no_tickets_total;
		}

		public function setNo_tickets_total($no_tickets_total){
			$this->no_tickets_total = $no_tickets_total;
		}

		public function getEvent_status(){
			return $this->event_status;
		}

		public function setEvent_status($event_status){
			$this->event_status = $event_status;
		}

		public function getEvent_name(){
			return $this->event_name;
		}

		public function setEvent_name($event_name){
			$this->event_name = $event_name;
		}

		public function getEvent_details(){
			return $this->event_details;
		}

		public function setEvent_details($event_details){
			$this->event_details = $event_details;
		}

		public function getEvent_category(){
			return $this->event_category;
		}

		public function setEvent_category($event_category){
			$this->event_category = $event_category;
		}

		public function getEvent_venue(){
			return $this->event_venue;
		}

		public function setEvent_venue($event_venue){
			$this->event_venue = $event_venue;
		}

		public function getDate_created(){
			return $this->date_created;
		}

		public function setDate_created($date_created){
			$this->date_created = $date_created;
		}

		public function getUser_id(){
			return $this->user_id;
		}

		public function setUser_id($user_id){
			$this->user_id = $user_id;
		}

		//End of class getters and setters.

		public function updateEventStatus($id, $status)
		{
			$data = array('event_status' => $status );

			return $this->update($id,$data);

		}
		
		public function getAllEventsCreatedByRegularUser(){
			$query = "SELECT * FROM event_info ei, user_account ua WHERE ei.user_id = ua.account_id AND ua.user_type = 'Regular'";
			$db_result = $this->db->query($query);
			$result_object = $db_result->result();
			
			return $result_object;
		}

		public function getAllEvents(){
			//Sample code
			//find read_all function at application/core/MY_Model.php
			$this->db->select("*,asdasd");
			$this->db->select("DATE_FORMAT(event_info.event_date_start,'%d-%b-%y %H:%m') as dateStart");
			$this->db->from($this::DB_TABLE);
			$query = $this->db->get();
			return $query;
		}

		public function deleteEvent($event_id){
			$this->db->trans_begin();
			$this->delete($event_id);
			if ($this->db->trans_status() === FALSE){
        		$this->db->trans_rollback();
			}else{
        		$this->db->trans_commit();
			}
		}

		public function updateEvent($event_id,$data){
			$this->db->trans_begin();
			$this->update($event_id,$data);
			if ($this->db->trans_status() === FALSE){
        		$this->db->trans_rollback();
			}else{
        		$this->db->trans_commit();
			}
		}

		public function showUpcomingEvents(){
			$date = date('Y-m-d H:i:s');
			// $query = $this->db->get_where($this::DB_TABLE,array('event_date_start >' =>date('Y-m-d H:i:s')));

			$this->db->select('*');
			$this->db->from($this::DB_TABLE);
			$this->db->where('event_date_start >', $date);

			$query = $this->db->get();
			// $query = $this->db->get();

			return $query->result();

		}

		public function createEvent($data){
			$this->db->trans_begin();
			$this->insert($data);
			if ($this->db->trans_status() === FALSE){
        		$this->db->trans_rollback();
			}else{
        		$this->db->trans_commit();
			} 	
			return $this->db->insert_id();
		}
		public function getGoingToEvent($eId){
			$this->db->select("ua.account_id,ua.first_name, ua.last_name,ua.middle_initial");
			$this->db->from("event_info as ei");
			$this->db->join('ticket_type  as tt ', "tt.event_id = ei.event_id");
			$this->db->join('ticket as t', 't.ticket_type_id = tt.ticket_type_id');
			
			$this->db->join("user_account as ua", "ua.account_id = t.user_id");
			$this->db->where("ei.event_id",$eId);

			$query = $this->db->get();

			return $query->result();
		}
		public function joinEventTicketType($id)
		{
			$this->db->select('*');
			$this->db->from($this::DB_TABLE);
			$this->db->join('ticket_type as t', $this::DB_TABLE.'.event_id = t.event_id');
			$this->db->where( array($this::DB_TABLE.'.event_id' => $id, ));

			$query = $this->db->get();
			 return $query->result();
			# code...
		}
		public function Performance()
		{
			$select = array('event_info.event_name as Event_Name' , 'count(*) as Total_No_Of_Attendees');
			$this->db->select($select);
			$this->db->from($this::DB_TABLE);
			$this->db->join('ticket_type as tt', $this::DB_TABLE.'.event_id = tt.event_id');
			$this->db->join('ticket as t', 't.ticket_type_id = tt.ticket_type_id');
			$this->db->group_by($this::DB_TABLE.'.event_name');

			$query = $this->db->get();

			return $query->result();	
			# code...
		}

		public function getAllEventsByUser($id){
			//Sample code
			//find read_all function at application/core/MY_Model.php
			$this->db->select("*");
			$this->db->select("DATE_FORMAT(event_info.event_date_start,'%d-%b-%y %H:%m') as dateStart");
			$this->db->select("DATE_FORMAT(event_info.event_date_end,'%d-%b-%y %H:%m') as dateEnd");
			$this->db->from("event_info");
			$this->db->where("user_id = $id");
			$this->db->where(" event_info.event_isActive!=FALSE");
			$query = $this->db->get();
			return $query->result();			             
		}

		//get events that match the search word
		public function getSearchEvents($searchWord){
			//Sample code
			//find read_all function at application/core/MY_Model.php
			$this->db->select("*");
			$this->db->from("event_info");
			$this->db->where("event_name LIKE '%".$searchWord."%'");
			$query = $this->db->get();
			return $query->result();			             
		}
		
		public function getAllApprovedEvents(){
			//Sample code
			//find read_all function at application/core/MY_Model.php
			$this->db->select("*");
			$this->db->select("DATE_FORMAT(event_info.event_date_start,'%d-%b-%y %H:%m') as dateStart");
			$this->db->select("DATE_FORMAT(event_info.event_date_end,'%d-%b-%y %H:%m') as dateEnd");
			$this->db->from("event_info");
			$this->db->where("event_info.event_status = 'Approved'");
			$query = $this->db->get();
			return $query->result();			             
		}


		public function loadEventDetails($id)
		{
			$this->db->select('*');
			$this->db->from($this::DB_TABLE);
			$this->db->where('event_id', $id);

			$query = $this->db->get();

			return $query->result();
			# code...
		}

		public function do_upload_event($id)
	    {
	        $config = array(
				'upload_path' => "./images/events",
				'allowed_types' => "gif|jpg|png|jpeg",
				'overwrite' => TRUE,
				'max_size' => "100000000000000000000000000000000000000000000000000000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
				'max_height' => "1000000000000",
				'max_width' => "1000000000"
			);

	        $this->load->library('upload', $config);
	        
	        if ( ! $this->upload->do_upload('userfile'))
	        {
                $error = array('error' => $this->upload->display_errors());
                return false;
	        }
	        else
	        {
                $data = array('upload_data' => $this->upload->data()); //actual uploading
                
                if($this->insertPhotoEvent($this->upload->data()['file_name'], $id)) { //query to db
                	return true;	
                } else {
                	return false;
                }
	        }
	    }

	    public function insertPhotoEvent($filename,$id) { //called upon uploading file
	      // $now = new DateTime ( NULL, new DateTimeZone('UTC'));
	      // $station = new MStation();
	      // $id = $station->getLastAddedStation();

			$where = array(
				"event_picture" =>  "images/events/".$filename,
			);


			return $result = $this->update($id, $where);
	    }
	}
?>