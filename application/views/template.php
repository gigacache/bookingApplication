<?php
// Template Loading in header and footer from includes and a dynamic view

$this->load->view('includes/header');

$this->load->view($main_view);

$this->load->view('includes/footer');
