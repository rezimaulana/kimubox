<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function index(){
        $data['judul']="PT.KIMU SUKSES ABADI - Match Box Manufacturer";
        $this->load->view("header",$data);
        $this->load->view("main_header");
        $this->load->view("section_intro");
        $this->load->view("section_aboutus");
        $this->load->view("production");
        $this->load->view("dproduction");
        $this->load->view("clients");
        $this->load->view("contact");
        $this->load->view("main_footer");
        $this->load->view("footer");
    }
    function notify(){

        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        $this->load->library('email');

        $this->email->set_newline("\r\n");
        $this->email->from('system@kimubox.com');
        $this->email->to('pt.kimusuksesabadi@yahoo.co.id');
        
        $this->email->subject($name." - ".$subject);
        $this->email->message('Reply To: '.$email.' | Message: '.$message);
        if (!$this->email->send()){
            echo $this->email->print_debugger();
        }
        else{
            $this->load->view('notify');
        }
    }
}

/* $this->email->bcc($u_email); */

/*      ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );

        $from = "system@kimubox.com";
        $to = "maulanarosadi@yahoo.co.id";

        $name = $this->input->post('name');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');
        $replyto = $this->input->post('email');

        $subject = 'Contact Form: ' .$name. '-' .$subject;
        $message = $this->input->post('message');
        $headers = 'From: myemail@my_domain.com' . "\r\n" .
        'Reply-To: ' . $replyto . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        
        mail($to,$subject,$message, $headers);
        redirect(base_url()); */