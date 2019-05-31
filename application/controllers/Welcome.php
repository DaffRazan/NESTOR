<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{ }
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
 * @see https://codeigniter.com/user_guide/general/urls.html
 */

	 /*
	public function index()
	{
		$this->load->view('login');
	}

	public function insertData()
	{
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password;
		if ($_POST['password1'] == $_POST['password2']) {
			$password = $_POST['password1'];
		} else {
			//kalo salah kekmana
		}

		$this->nelayan_model->create_user([
			'username' => $username,
			'email' => $email,
			'password' => $password
		]);
	}
}
}
