<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        $this->load->view('home');
    }

    public function imageRepost()
    {
        $this->load->view('image_repost');
    }

}

/* End of file Dashboard.php */

?>