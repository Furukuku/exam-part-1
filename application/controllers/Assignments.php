<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assignments extends CI_Controller {
    /**
     * Loads the assignment model
     * @return void
     */
    public function __construct() {
        parent::__construct();
        $this->load->model("Assignment");
    }

    /**
     * Displays the index page that contains the table of assignments
     * @return void Renders the index view
     */
    public function index() {
        $assignments = $this->Assignment->getAllAssignments();
        $this->load->view("assignments/index", array(
            "assignments" => $assignments,
            "show_more" => (count($assignments) + 5)
        ));
    }

    /**
     * Displays the index page that contains the table of a specific number of assignments based on the parameter
     * @param int Number of assignments to be displayed
     * @return void Renders the index view
     */
    public function showMore($count) {
        $assignments = $this->Assignment->getAllAssignments((int)$count);
        $this->load->view("assignments/index", array(
            "assignments" => $assignments,
            "show_more" => (count($assignments) + 5)
        ));
    }
}