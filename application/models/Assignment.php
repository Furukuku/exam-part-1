<?php
class Assignment extends CI_Model {
    /**
     * Gets all the assignments in the database with a limit
     * @param int Limit of assignments that will be fetched in the database
     * @return array Array of fetched assignments
     */
    public function getAllAssignments($limit = 5) {
        return $this->db->query("SELECT * FROM assignments LIMIT ?;", array($limit))->result_array();
    }
}