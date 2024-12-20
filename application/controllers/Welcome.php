<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	function __construct()
	{	
		parent::__construct();
		$this->load->helper(array('form', 'url','notif','connexion'));
		$this->load->library('form_validation');
		$this->load->model('User_model','user');
	}

	// page d'accueil
	public function index()
	{
		$this->load->view('accueil');
	}

	public function test(){
		$this->load->view('coming-soon');
	}

	// page Mot du president
	public function presentation()
	{
		$this->load->view('president',['img'=>"/assets/img/subscribe.jpg","page"=>""]);
	}

    // qui sommes nous
	public function about()
	{   

		$this->load->view('about_us',['img'=>"/assets/img/subscribe.jpg","page"=>"qui-sommes-nous"]);
	}

    // que faisons nous
	public function propos()
	{
		$this->load->view('about',['img'=>"/assets/img/subscribe.jpg","page"=>"qui-sommes-nous"]);
	}

	// page bureau executif
	public function bureau()
	{
		$this->load->view('bureau',['img'=>"/assets/img/subscribe.jpg","page"=>"bureau-executif"]);
	}

	// page membres d'honneur
	public function membres()
	{
		$this->load->view('membres',['img'=>"/assets/img/subscribe.jpg","page"=>"membres-d-honneur"]);
	}

    // page membres d'honneur
	// public function president()
	// {
	// 	$this->load->view('president',['img'=>"/assets/img/subscribe.jpg"]);
	// }

	// page realisations
	public function realisations()
	{
		$this->load->view('realisations',['img'=>"/assets/img/subscribe.jpg","page"=>""]);
	}
    // page realisations
	public function actions()
	{
		$this->load->view('action',['img'=>"/assets/img/subscribe.jpg","page"=>""]);
	}

	// page Calendrier
	public function calendrier()
	{
		$this->load->view('calendrier',['img'=>"/assets/img/subscribe.jpg","page"=>""]);
	}

	// page Calendrier
	public function don()
	{
		$this->load->view('don',['img'=>"/assets/img/subscribe.jpg","page"=>""]);
	}

	public function mail_template(){
		$this->load->view('docs/mail-contact');
	}

	public function contact()
	{
		// execution de la validation du formulaire
		$this->contact_form_validation_request();
		// si la validation ne se passe pas bien
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('contact',['img'=>"/assets/img/subscribe.jpg","page"=>""]);
		}
		// si la validation se passe bien
		else
		{	
			// recuperation des valeurs
			$data=[
				"nom" => $this->input->post('nom'),
				"prenoms" => $this->input->post('prenoms'),
				"phone" => $this->input->post('phone'),
				"email" => $this->input->post('email'),
				"message" => $this->input->post('message'),
			];

			$mail = $this->load->view('docs/mail-contact',['data'=>$data],true);
			// $mail = "mail de prise de contact";

			// var_dump($mail);exit();
			// envoyer le mail
			$response = mailjet("dalomarc92@gmail.com","Prise de contact",$mail,"Association caritative");

			// var_dump($response); exit();

			if ($response->Messages[0]->Status == "success") {
				// retour du message
				$this->session->set_flashdata('msg','Votre message a été envoyé avec succès');
			}else{
				$this->session->set_flashdata('msg',"Une erreur s'est produite");
			}

			// affichage de l'interface
			$this->load->view('contact',['img'=>"/assets/img/subscribe.jpg","page"=>""]);
		}
	}

	
	// nous rejoindre
	// public function inscription()
	// {

	// 	$this->inscription_validation_request();

	// 	 // si la validation ne se passe pas bien
	// 	if ($this->form_validation->run() == FALSE)
	// 	{
	// 		$this->load->view('inscription',['img'=>"/assets/img/subscribe.jpg","page"=>""]);
	// 	}
	// 	else
	// 	{	
	// 		// si la validation se passe bien
	// 		//enregistrement des variable
	// 		$data = [
	// 			'nom' => $this->input->post('nom'),
	// 			'prenoms' => $this->input->post('prenoms'),
	// 			'email' => $this->input->post('email'),
	// 			'adresse' => $this->input->post('adresse'),
	// 			'telephone' => $this->input->post('phone'),
	// 			'date_nais' => $this->input->post('date_nais'),
	// 		];

	// 		// Exécution de la methode d'insertion
	// 		$add_response = $this->user->add_inscription($data);

	// 		// Mise en place du message
	// 		if ($add_response != NULL) {
	// 			$this->session->set_flashdata('msg', 'Infos utilisateur enregistré avec succès');
	// 		} else {
	// 			$this->session->set_flashdata('msg', 'Echec enregistrement utilisateur');
	// 		}

	// 		$this->load->view('inscription',['img'=>"/assets/img/subscribe.jpg","page"=>""]);
			
	// 		// si c'est bon on le connecte
	// 		// page de succes
	// 		// $this->load->view('formsuccess');
	// 	}
	// }

	public function contact_form_validation_request()
	{
		$this->form_validation->set_rules('nom', 'Nom', 'required',
			array(
				'required' => 'le champ %s est obligatoire.',
			)
		);

		$this->form_validation->set_rules('prenoms', 'Prenoms', 'required',
			array(
				'required' => 'le champ %s est obligatoire.',
			)
		);

		$this->form_validation->set_rules('phone', 'Telephone', 'required|numeric',
			array(
				'required' => 'le champ %s est obligatoire.',
				'numeric' => 'le champ %s doit contenir que chiffres.',
			)
		);

		$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email',
			array(
				'required' => 'le champ %s est obligatoire.',
				'valid_email'=> 'le champ %s doit être une adresse mail valide',
			)
		);

	}

	// operation validation du formulaire de connexion
	public function inscription_validation_request()
	{
		// lname validation
		$this->form_validation->set_rules('prenoms', 'Prenoms', 'required|min_length[3]',
			array(
				'required' => 'le champ %s est obligatoire.',
				'min_length'=> 'le champ %s doit contenir plus de 3 caractères',
			)
		);

		// fname validation
		$this->form_validation->set_rules('nom', 'Nom', 'required|min_length[3]',
			array(
				'required' => 'le champ %s est obligatoire.',
				'min_length'=> 'le champ %s doit contenir plus de 3 caractères',
			)
		);

		// email validation
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|differs[login]',
			array(
				'required' => 'le champ %s est obligatoire.',
				'differs'=>'le champ %s ne doit pas être identique au champ email',
				'valid_email'=> 'le champ %s n\'est pas une adresse mail valide',
			)
		);

		// login validation
		$this->form_validation->set_rules('date_nais', 'Date de naissance', 'required',
			array(
				'required' => 'le champ %s est obligatoire.',
			)
		);
		// login validation
		$this->form_validation->set_rules('adresse', 'Date de naissance', 'required',
			array(
				'required' => 'le champ %s est obligatoire.',
			)
		);

		// phone validation
		$this->form_validation->set_rules('phone', 'Phone', 'required|min_length[8]|trim|numeric',
			array(
				'required' => 'le champ %s est obligatoire.',
				'min_length'=> 'le champ %s est inférieur à 8 caractères',
				'numeric'=> 'le champ %s ne doit contenir que des chiffres',
			)
		);

	}

}
