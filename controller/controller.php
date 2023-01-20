<?php
 
include "model/model.php";


class controller{
   
    public $model;

    function __construct() {
        $this->model = new model();
    }
    function view_login(){
        include "view/login.php";
    }
    function index() {
        include "view/home.php";
    }
    function index_buku() {
        $data = $this->model->select_all_buku();
        include "view/index_buku.php"; 
    }

    function view_insert_buku() {
        $data = $this->model->get_max_kd_buku();
        include "view/tambah_buku.php";
    }

    function view_edit_buku($id) {
        $data = $this->model->select_id_buku ($id); 
        $row = $this->model->fetch ($data); 
        include "view/edit_buku.php";
    }

    function update_buku() {
        $kode = $_POST['kdb'];
        $nama= $_POST['nm_buku'];
        $pengarang = $_POST['pg_buku']; 
        $penerbit = $_POST['pn_buku'];
        $tahun = $_POST['thn_buku'];
        
        $tipefile = $_FILES['cover']['type'];
        $lokasifile = $_FILES['cover']['tmp_name'];
        $ukuranfile = $_FILES['cover']['size'];
        $namafile = $_FILES['cover']['name']; 
        
        $namafoto = $kode.".".end(explode(".", $namafile));
        $tempatfile = "cover_buku/$namafoto";

        $cek = move_uploaded_file($lokasifile, $tempatfile);

        // if ($cek) {
            $update= $this->model->update_buku($kode, $nama, $pengarang, $penerbit, $tahun, $tempatfile);
            header("location:index.php?id=index_buku.php");
        // }

        
    }


    function delete_buku($id) {
        $delete = $this->model->delete_buku($id);
        header("location:index.php?id=index_buku.php");

    }

    function insert_buku() {
        $kode = $_POST['kd_buku']; 
        $nama= $_POST['nm_buku'];
        $pengarang = $_POST['pg_buku'];
        $penerbit = $_POST['pn_buku']; 
        $tahun = $_POST['thn_buku'];


       

        $tipefile = $_FILES['cover']['type'];
        $lokasifile = $_FILES['cover']['tmp_name'];
        $ukuranfile = $_FILES['cover']['size'];
        $namafile = $_FILES['cover']['name']; 
        
        $namafoto = $kode.".".end(explode(".", $namafile));
        $tempatfile = "cover_buku/$namafoto";

        $cek = move_uploaded_file($lokasifile, $tempatfile);

        if ($cek) {
            $insert = $this->model->insert_buku($kode, $nama, $pengarang, $penerbit, $tahun, $tempatfile);
            header("location:index.php?id=index_buku.php");
        }
        

    }

    function destruct() {
    }
    

}



?>