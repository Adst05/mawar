<?php

include_once("Database.php");

class Penerbit extends Database{
    public function all(){
        $sql = "SELECT * from penerbit";

        return $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
    }

    public function find($id){
        $sql = "SELECT * FROM penerbit WHERE id='$id'";

        return $this->db->query($sql)->fetch_assoc();
    }

    public function create($data){
        $kode = $data["kode"];
        $nama = $data["nama"];
        $verif = $data["verif"];

        $sql = "INSERT INTO penerbit(kode, nama, verif) VAlUES('$kode', '$nama', '$verif')";

        if($this->db->query($sql) == true){
            echo "Berhasil";
        } else{
            echo "Gagal";
        }
    }

    public function update($id, $data){
        $kode = $data["kode"];
        $nama = $data["nama"];
        $verif = $data["verif"];

        $sql = "UPDATE penerbit SET kode='$kode', nama='$nama', verif='$verif' WHERE id='$id'";

        if($this->db->query($sql) == true){
            echo "Berhasil";
        } else{
            echo "Gagal";
        }
    }

    public function delete($id){

        $sql = "DELETE FROM penerbit WHERE id='$id'";

        if($this->db->query($sql) == true){
            echo "Berhasil";
        } else{
            echo "Gagal";
        }
    }
}