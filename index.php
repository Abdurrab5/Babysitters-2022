<?php
//require_once "navbar.php";
require_once "header.php";


?>
<div class="main">
  <h3>log</h3>alai
  <h1> babysitter </h1>
  Here is a list of services typically offered by a babysitter website:

  Babysitting services
  Nanny services
  Childcare services
  After-school care services
  Special needs care services
  Pet care services
  Housekeeping services
  Errand running services
  Tutoring services
  Meal preparation services
  Here is an example table schema for a MySQL database to store information about babysitters:

  Table Name: babysitters

  Column Name Data Type Description
  id INT Unique identifier for the babysitter
  name VARCHAR(255) Name of the babysitter
  email VARCHAR(255) Email address of the babysitter
  phone VARCHAR(20) Phone number of the babysitter
  bio TEXT A short bio about the babysitter
  hourly_rate DECIMAL(5,2) Hourly rate charged by the babysitter
  experience_years INT Number of years of babysitting experience
  background_check BOOLEAN Indicates whether the babysitter has passed a background check
  availability VARCHAR(255) Days/times of the week when the babysitter is available
  services TEXT A list of services the babysitter provides
  city VARCHAR(255) The city where the babysitter is located
  state VARCHAR(255) The state where the babysitter is located
  Note that this is just an example, and the specific attributes you need for your database may vary depending on your needs.