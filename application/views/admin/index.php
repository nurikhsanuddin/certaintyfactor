<?php
$this->load->view('admin/templates/header');
$this->load->view('admin/templates/navbar');
$this->load->view('admin/templates/sidebar');
$this->load->view('admin/' . $menu . '/index');
$this->load->view('admin/templates/footer');
