<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	date_default_timezone_set("Asia/Jakarta");

	class Application extends CI_Controller {

		function __construct(){
			parent::__construct();
			$this->home = base_url();
			$this->profile = base_url("profile");
			$this->load->helper(array('form', 'url'));
			$this->load->model("UserModel");
			$this->load->model("ApplicationModel");
			
			// if($this->session->userdata("login") == null && $this->session->userdata("admin") != true){
			// 	redirect(base_url('login'));
			// }

			if($this->session->userdata("login") == null){
				redirect(base_url('login'));
			}

			$this->user = $this->UserModel->findOne("id", $this->session->userdata("login"));
		}

		public function admin(){
			$data = [
				"user" => $this->user,
				"posts" => $this->ApplicationModel->findAll()
			];
			 
			$this->load->view('application/admin', $data);
		}

		public function application_create(){
			$data = [
				"user" => $this->user,
			];
			 
			$this->load->view('application/create', $data);
		}

		private function _upload_document(){

			$config['upload_path']          = './document/';
			$config['allowed_types']        = 'jpeg|jpg|png|pdf|doc|docx';
			$config['file_name']            = "doc_" . uniqid();
			$config['overwrite']			= true;
			$config['max_size']             = 100000;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('document')){
				echo "
				<script>
					alert('Terjadi kesalahan upload');
					document.location.href = '" . base_url() . "member_application_create';
				</script>";die();
			}else{
				return $this->upload->data("file_name");
			}
		}

		public function application_create_post(){
			$user_id = $this->input->post("user_id");
			$name = $this->input->post("name");
			$email = $this->input->post("email");
			$phone = $this->input->post("phone");
			$gender = $this->input->post("gender");
			$position = $this->input->post("position");
			
			if (!empty($_FILES["document"]["name"])) {
				$document = $this->_upload_document();
			}

			$data = [
				"user_id" => $user_id,
				"name" => $name,
				"email" => $email,
				"phone" => $phone,
				"gender" => $gender,
				"position" => $position,
				"document" => $document,
				"status" => 2,
				"created_on" => date('Y-m-d H:i:s'),
			];

			if($this->ApplicationModel->create($data) == 1){
				echo "
				<script>
					alert('Lamaran berhasil di kirim');
					document.location.href = 'member';
				</script>";
			}else{
				echo "
				<script>
					alert('Gagal menginput data lamaran');
					document.location.href = 'member';
				</script>";
			}
		}

		public function application_update($id){
			$data = [
				"status" => 1,
			];
			
			if($this->ApplicationModel->update($data, $id) == 1){
				echo "
				<script>
					alert('Lamaran berhasil diupdate');
					document.location.href = '" . base_url() . "admin';
				</script>";
			}else {
				echo "
				<script>
					alert('Lamaran gagal diupdate');
					document.location.href = '" . base_url() . "admin';
				</script>";
			}
		}

		public function application_delete($id){

			$this->load->model("ApplicationModel");
        	
			if($this->ApplicationModel->delete($id) == 1){
				echo "
				<script>
					alert('Lamaran berhasil dihapus');
					document.location.href = '" . base_url() . "admin';
				</script>";
			}else{
				echo "
				<script>
					alert('Gagal menghapus lamaran');
					document.location.href = '" . base_url() . "admin';
				</script>";
			}
		}

		public function member(){ 

			$data = [
				"user" => $this->user,
				"posts" => $this->ApplicationModel->findMyApplication('user_id', $this->user->id)
			];
			 
			$this->load->view('application/member', $data);
		}

	}
