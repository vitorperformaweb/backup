<?php

class ControllerModuleHTML extends Controller {

	public function index($setting) {

		



		$data['banners1'] = $this->db->query("SELECT * FROM oc_banner_image WHERE banner_id = 12");
		$data['banners2'] = $this->db->query("SELECT * FROM oc_banner_image WHERE banner_id = 13");
		$data['banners3'] = $this->db->query("SELECT * FROM oc_banner_image WHERE banner_id = 14");
		$data['banners4'] = $this->db->query("SELECT * FROM oc_banner_image WHERE banner_id = 15");
		$data['banners5'] = $this->db->query("SELECT * FROM oc_banner_image WHERE banner_id = 16");
		$data['banners6'] = $this->db->query("SELECT * FROM oc_banner_image WHERE banner_id = 17");
		$data['banners7'] = $this->db->query("SELECT * FROM oc_banner_image WHERE banner_id = 18");





		if (isset($setting['module_description'][$this->config->get('config_language_id')])) {

			$data['heading_title'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8');

			$data['html'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['description'], ENT_QUOTES, 'UTF-8');

		

			if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/html.tpl')) {

				return $this->load->view($this->config->get('config_template') . '/template/module/html.tpl', $data);

			} else {

				return $this->load->view('default/template/module/html.tpl', $data);

			}

		}

	}

}