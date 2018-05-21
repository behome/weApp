<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Qcloud_WeApp_SDK\Constants as Constants;
class Test extends CI_Controller{
	public function index(){
		$data = $_POST['data'];
		$this->json([
			'code'=>0,
			'data'=>$data
		]);
	}
}
?>