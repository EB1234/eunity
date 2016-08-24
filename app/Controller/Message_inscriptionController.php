<?php

namespace Controller;

use \W\Controller\Controller;
use Model\Message_inscriptionModel;


class Message_inscriptionController extends Controller
{

	public function message()
	{	
		$this->show('inscription/message_inscription');
	}

}


?>

