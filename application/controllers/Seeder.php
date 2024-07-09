<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seeder extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function index() {
        $this->seed_admin();
    }

    private function seed_admin() {
        // Data akun admin
        $data = [
            'id_admin' => 1,
            'nama_admin' => 'admin',
            'username' => 'admin',
            'password' => password_hash('password', PASSWORD_BCRYPT),
        ];

        // Insert data ke tabel admin
        $this->db->insert('admin', $data);

        echo "Seeder akun admin berhasil dijalankan.";
    }
}