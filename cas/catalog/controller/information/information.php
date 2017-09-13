<?php
class ControllerInformationInformation extends Controller {
	public function index() {

		$data['banners1'] = $this->db->query("SELECT * FROM oc_banner_image WHERE banner_id = 12");
		$data['banners2'] = $this->db->query("SELECT * FROM oc_banner_image WHERE banner_id = 13");
		$data['banners3'] = $this->db->query("SELECT * FROM oc_banner_image WHERE banner_id = 14");
		$data['banners4'] = $this->db->query("SELECT * FROM oc_banner_image WHERE banner_id = 15");
		$data['banners5'] = $this->db->query("SELECT * FROM oc_banner_image WHERE banner_id = 16");
		$data['banners6'] = $this->db->query("SELECT * FROM oc_banner_image WHERE banner_id = 17");

		$data['banners7'] = $this->db->query("SELECT * FROM oc_banner_image WHERE banner_id = 18");

		foreach ($data['banners7']->rows as $k => $v) {
			$query = $this->db->query("SELECT * FROM oc_banner_image_description WHERE banner_image_id = " . $v['banner_image_id']);
			//$description[$v['banner_image_id']] = $query->rows[0]['title'];
			$data['banners7']->rows[$k]['banner_image_id'] = $v['banner_image_id'];
			$data['banners7']->rows[$k]['title'] = $query->rows[0]['title'];
			$data['banners7']->rows[$k]['description'] = $query->rows[0]['description'];
			
		}

		
		
		$this->load->language('information/information');

		$this->load->model('catalog/information');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		if (isset($this->request->get['information_id'])) {
			$information_id = (int)$this->request->get['information_id'];
		} else {
			$information_id = 0;
		}

		$information_info = $this->model_catalog_information->getInformation($information_id);
		$information_layout = $this->model_catalog_information->getInformationLayoutId($information_id);

			// print_r($information_info);
			// exit();

		if ($information_info) {
			$this->document->setTitle($information_info['meta_title']);
			$this->document->setDescription($information_info['meta_description']);
			$this->document->setKeywords($information_info['meta_keyword']);

			$data['breadcrumbs'][] = array(
				'text' => $information_info['title'],
				'href' => $this->url->link('information/information', 'information_id=' .  $information_id)
			);

			$data['heading_title'] = $information_info['title'];

			$data['button_continue'] = $this->language->get('button_continue');

			$data['description'] = html_entity_decode($information_info['description'], ENT_QUOTES, 'UTF-8');

			$data['continue'] = $this->url->link('common/home');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$data['layout_id'] = $information_layout;



				if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/information/information.tpl')) {
					$this->response->setOutput($this->load->view($this->config->get('config_template') . '/template/information/information.tpl', $data));
				} else {
					$this->response->setOutput($this->load->view('default/template/information/information.tpl', $data));
				}

			
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_error'),
				'href' => $this->url->link('information/information', 'information_id=' . $information_id)
			);

			$this->document->setTitle($this->language->get('text_error'));

			$data['heading_title'] = $this->language->get('text_error');

			$data['text_error'] = $this->language->get('text_error');

			$data['button_continue'] = $this->language->get('button_continue');

			$data['continue'] = $this->url->link('common/home');

			$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/error/not_found.tpl')) {
				$this->response->setOutput($this->load->view($this->config->get('config_template') . '/template/error/not_found.tpl', $data));
			} else {
				$this->response->setOutput($this->load->view('default/template/error/not_found.tpl', $data));
			}
		}
	}

	public function agree() {
		$this->load->model('catalog/information');

		if (isset($this->request->get['information_id'])) {
			$information_id = (int)$this->request->get['information_id'];
		} else {
			$information_id = 0;
		}

		$output = '';

		$information_info = $this->model_catalog_information->getInformation($information_id);

		if ($information_info) {
			$output .= html_entity_decode($information_info['description'], ENT_QUOTES, 'UTF-8') . "\n";
		}

		$this->response->setOutput($output);
	}
}