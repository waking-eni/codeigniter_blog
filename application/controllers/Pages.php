<?php

class Pages extends CI_Controller {
    // home gets passed by default if we don't provide a page
    public function view($page = 'home') {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            show_404();
        }

        // variables that we want to pass to the view
        $data['title'] = ucfirst($page);

        $this->load->view('templates/header');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');
    }
}