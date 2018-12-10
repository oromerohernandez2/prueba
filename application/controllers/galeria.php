<?php

class galeria extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $data['res']=$this->modelo_galerias->consultar();
				$this->load->view('galeria_form', $data);
        }

        public function agregar()
        {
                $config['upload_path']          = './assets/images/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1024;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('archivo'))
                {
						$datos =array
							('imagen'=>$this->upload->data('file_name'));
                        

                        $this->modelo_galerias->insertar($dato);
                }
               
			redirect('http://localhost:4000/ci/index.php/galerias/index');

		}
}
?>