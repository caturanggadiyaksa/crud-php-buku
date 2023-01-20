<?php
class model{
    public $connect;

    function __construct() { 
        $this->connect = mysqli_connect("localhost", "root","","bukudb"); 
    }

    function execute($query) {
        return mysqli_query($this->connect, $query);
    }

    function select_all_buku() {
        $query  = "select * from buku"; 
        return $this->execute($query); 
        
    }

    function get_max_kd_buku() {
        $query = "select max(kode_buku) as kode from buku"; 
        return $this->execute ($query);
    }

    function select_id_buku($id) {
        $query = "select * from buku where kode_buku = '$id'"; 
        return $this->execute($query);
    }

    function update_buku($kode, $nama, $pengarang, $penerbit, $tahun, $tempatfile){
        $query = "update buku set kode_buku='$kode', nama_buku='$nama', pengarang='$pengarang', penerbit='$penerbit', tahun_terbit='$tahun, cover='$tempatfile' where kode_buku='$kode'"; 
        return $this->execute ($query);
    }

    function delete_buku($id) {
        $query = "delete from buku where kode_buku='$id'";
         return $this->execute($query);
    }

    function insert_buku($kode, $nama, $pengarang, $penerbit, $tahun, $tempat_file) { 
        $query = "insert into buku (kode_buku, nama_buku, pengarang, penerbit, tahun_terbit, cover) values ('$kode', '$nama', '$pengarang', '$penerbit', '$tahun', '$tempat_file')";
        return $this->execute ($query);
       
        
    }

    function fetch($var) { 
        return mysqli_fetch_array($var);
    }
   
    function destruct() {

    }
    



}
?>