
<?php
class DiLemas extends CI_Controller
{
    public function index(){
        // Memuat view tanpa meneruskan data
        $data['judul'] = "Halaman Depan";
        $this->load->view('view-dilemas', $data);
    }
}
?>
