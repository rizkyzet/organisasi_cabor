<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $data['title'] = 'Menu Management';

        $this->form_validation->set_rules('menu', 'Menu', 'required');
        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '
                    <div class="alert alert-success" role="alert">
                        New menu added!
                    </div>
                    ');
            redirect('menu');
        }
    }

    public function submenu()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Submenu Management';
        $this->load->model('Menu_model', 'menu');
        $data['submenu'] = $this->menu->getsubmenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];

            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '
                    <div class="alert alert-success" role="alert">
                        New Submenu added!
                    </div>
                    ');
            redirect('menu/submenu');
        }
    }

    public function hapusmenu($menu_id)
    {
        $this->db->delete('user_menu', ['id' => $menu_id]);
        $this->session->set_flashdata('message', '
        <div class="alert alert-success" role="alert">
            Menu deleted!
        </div>
        ');
        redirect('menu');
    }

    public function hapussubmenu($sub_menu_id)
    {
        $this->db->delete('user_sub_menu', ['id' => $sub_menu_id]);
        $this->session->set_flashdata('message', '
        <div class="alert alert-success" role="alert">
            Sub Menu deleted!
        </div>
        ');
        redirect('menu/submenu');
    }
}
