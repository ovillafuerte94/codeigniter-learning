<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    /**
     * Register new user
     *
     * @param array $data
     * @return bool
     */
    public function register_user($data)
    {
        /* Insert a new user in the database */
        $this->db->insert('users', $data);

        return true;
    }

    /**
     * Get a user by user name
     *
     * @param string $username
     * @return object|bool
     */
    public function get_user_by_username($username)
    {
        $this->db->where('username', $username);

        $query = $this->db->get('users');

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }
}
