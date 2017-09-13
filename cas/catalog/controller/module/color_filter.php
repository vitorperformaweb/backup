<?php
class ControllerModuleColorFilter extends Controller {
	
	public function index($setting) {
		if ($this->request->server['REQUEST_METHOD'] == 'POST' && isset($this->request->post['color'])) {
		
			$this->filter($this->session->data['setting']);
		
		} else {
			
			$this->load->language('module/color_filter');
			
			$this->session->data['setting'] = $setting;
			
			$data['heading_title'] = $this->language->get('heading_title');

			$data['button_filter'] = $this->language->get('button_filter');
			
			$results = $setting['color'];
			
			$sort_order = array();
		
			foreach ($results as $result){
				$sort_order[] = $result['sort_order'];
			}
			
			array_multisort($sort_order,$results);
			
			$data['colors'] = $results;
			$data['setting'] = $setting;
			if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/color_filter.tpl')) {
				return $this->load->view($this->config->get('config_template') . '/template/module/color_filter.tpl', $data);
			} else {
				return $this->load->view('default/template/module/color_filter.tpl', $data);
			}
		}
	}
	
	public function filter($setting) {
		$this->load->language('module/color_filter');
		$json = array();
		
		if ($this->request->server['REQUEST_METHOD'] == 'POST' && isset($this->request->post['color'])) {
			
			$colors = explode(',',$this->request->post['color']);
			
			$products_arr = array();
			
			foreach ($setting['color'] as $setting_col) {
				foreach ($colors as $color) {
					if ($setting_col['color_name'] === $color) {
						$products_arr = array_merge($products_arr,array_values($setting_col['products']));
					}
				}
			}
			
			$this->load->model('catalog/product');
			
			$products =array();
			
			foreach ($products_arr as $product) {
				if (!in_array($product,$products)) {
					$products[] = $product;
				}
			}
		
			$json['success'] = $products;

		} else {
			//$json['error'] = $this->language->get('error_color');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
}