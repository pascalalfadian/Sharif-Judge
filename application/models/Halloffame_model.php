<?php
/**
 * Sharif Judge online judge
 * @file Scoreboard_model.php
 * @author Mohammad Javad Naderi <mjnaderi@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Halloffame_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}
	// ------------------------------------------------------------------------


	/**
	 * Get Cached Scoreboard
	 *
	 * Returns the cached scoreboard of given assignment as a html text
	 *
	 * @param int $assignment_id
	 * @return string
	 */
	public function generate_halloffame()
	{
		$query =  $this->db->select('username, SUM(pre_score * coefficient / 100) AS totalscore')->get_where('submissions', array('is_final' => 1));
		if ($query->num_rows() != 1)
			return 'Halloffame not found';
		else
			return $query->row()->submissions;
	}
}
