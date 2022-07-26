<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Developer: Makhmudov J.
 * Date: 10/01/2018
 * Email: applepopov803@gmail.com
 */

class Site extends MY_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->lang->load('information', 'english');
    }

    public function index()
    {
        $data['mainContent'] = 'index';
        $data['title'] = WEBSITE_NAME;
        $data['page_id'] = 0;
        $data['is_homepage'] = true;
        $data['page'] = $this->lang->line('home');
        $data['footer'] = $this->lang->line('footer');
        $data['link'] = $this->lang->line('link');
        $this->load->view('layout/template', $data);
    }

    public function about()
    {
        $data['mainContent'] = 'page/about';
        $data['title'] = 'About us ' . WEBSITE_NAME;
        $data['page_id'] = 1;
        $data['page'] = $this->lang->line('home');
        $data['footer'] = $this->lang->line('footer');
        $data['link'] = $this->lang->line('link');
        $this->load->view('layout/template', $data);
    }

    public function services()
    {
        $data['mainContent'] = 'page/services';
        $data['title'] = 'Services ' . WEBSITE_NAME;
        $data['page'] = $this->lang->line('services');
        $data['footer'] = $this->lang->line('footer');
        $data['link'] = $this->lang->line('link');
        $this->load->view('layout/template', $data);
    }

    public function contact()
    {
        $data['mainContent'] = 'page/contact';
        $data['title'] = 'Page ' . WEBSITE_NAME;
        $data['page_id'] = 3;
        $data['page'] = $this->lang->line('contact');
        $data['footer'] = $this->lang->line('footer');
        $data['link'] = $this->lang->line('link');
        $this->load->view('layout/template', $data);
    }

    public function howitworks()
    {
        $data['mainContent'] = 'page/howitworks';
        $data['title'] = 'Page ' . WEBSITE_NAME;
        $data['page_id'] = 5;
        $data['page'] = $this->lang->line('how_it_works');
        $data['footer'] = $this->lang->line('footer');
        $data['link'] = $this->lang->line('link');
        $this->load->view('layout/template', $data);
    }

    public function dashboard()
    {
        if ($this->session->userdata('status') == 'logged_in') {
            $data['mainContent'] = 'user/dashboard';
            $data['title'] = 'Account Dashboard ' . WEBSITE_NAME;
            $data['page_id'] = 4;
            $data['page'] = $this->lang->line('home');
            $data['footer'] = $this->lang->line('footer');
            $data['link'] = $this->lang->line('link');
            $this->load->model('transaction_model');

            if ($this->session->userdata('role') == 'Admin') {
                $this->load->model('user_model');
                $data['users'] = $this->user_model->get();
                $data['transactions'] = $this->transaction_model->get_transaction();
            } else {
                $data['my_transactions'] = $this->transaction_model->get_my_transaction($this->session->userdata('email'));
                $data['with_transactions'] = $this->transaction_model->get_with_transaction($this->session->userdata('email'));
            }
            $this->load->view('layout/template', $data);
        } else {
            redirect(site_url('login'));
        }
    }

    public function page()
    {
        $data['mainContent'] = 'page/page';
        $data['title'] = 'Page ' . WEBSITE_NAME;
        $data['page'] = $this->lang->line('home');
        $data['footer'] = $this->lang->line('footer');
        $data['link'] = $this->lang->line('link');
        $this->load->view('layout/template', $data);
    }

    public function legal_info()
    {
        $data['mainContent'] = 'page/legal-info';
        $data['title'] = 'About us ' . WEBSITE_NAME;
        $data['page'] = $this->lang->line('home');
        $data['footer'] = $this->lang->line('footer');
        $data['link'] = $this->lang->line('link');
        $this->load->view('layout/template', $data);
    }

    public function terms_and_conditions()
    {
        $data['mainContent'] = 'page/terms-and-conditions';
        $data['title'] = 'Terms and Conditions ' . WEBSITE_NAME;
        $data['page'] = $this->lang->line('home');
        $data['footer'] = $this->lang->line('footer');
        $data['link'] = $this->lang->line('link');
        $this->load->view('layout/template', $data);
    }

    public function error_404()
    {
        $data['mainContent'] = 'page/404';
        $data['title'] = '404 Page Not Found';
        $data['page'] = $this->lang->line('home');
        $data['footer'] = $this->lang->line('footer');
        $data['link'] = $this->lang->line('link');
        $this->load->view('layout/template', $data);
    }

    public function test()
    {
        // $data['mainContent'] = 'transaction/invoice_template';
        $this->load->view('transaction/invoice_template');
        // $data['title'] = 'Page ' . WEBSITE_NAME;
        // $data['page'] = $this->lang->line('home');
        // $data['footer'] = $this->lang->line('footer');
        // $data['link'] = $this->lang->line('link');
        // $this->load->view('layout/template', $data);
    }

}
