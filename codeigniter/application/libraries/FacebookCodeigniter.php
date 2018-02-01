<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once __DIR__ . '/Facebook/autoload.php';

class FacebookCodeigniter
{
	protected $ci;	

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	public function saludo(){

		$fb = new Facebook\Facebook([
		  'app_id' => '167901477164526',
		  'app_secret' => '4c3b53183f8760bda5377482124e7f71',
		  'default_graph_version' => 'v2.11'
		]);
		
		$data = [
		  'message' => 'My awesome photo upload example.',
		  'source' => $fb->fileToUpload(FCPATH.'/imagenes_proyecto/01af1be59c830a8c09a80c89e430cb45.jpg'),
		];
		
		try {
		  // Returns a `Facebook\FacebookResponse` object
		  $response = $fb->post('/me/photos', $data, '{access-token}');
		} catch(Facebook\Exceptions\FacebookResponseException $e) {
		  echo 'Graph returned an error: ' . $e->getMessage();
		  exit;
		} catch(Facebook\Exceptions\FacebookSDKException $e) {
		  echo 'Facebook SDK returned an error: ' . $e->getMessage();
		  exit;
		}

		$graphNode = $response->getGraphNode();

		echo 'Photo ID: ' . $graphNode['id'];
	}

	

}

/* End of file FacebookCodeigniter.php */
/* Location: ./application/libraries/FacebookCodeigniter.php */
