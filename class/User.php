<?php
include_once("Database.php");

class User extends Database{
    public function all(){
        $sql = "SELECT * from user";

        return $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
    }

    public function find($id){
        $sql = "SELECT * from user where id='$id'";

        return $this->db->query($sql)->fetch_assoc();
    }

    public function getAnggota(){
        $sql = "SELECT * from user where role='user'";

        return $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
    }

    public function getAdmin(){
        $sql = "SELECT * from user where role='admin'";

        return $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
    }


    public function create($data){
        $kode = $data["kode"];
        $nis = $data["nis"];
        $fullname = $data["fullname"];
        $username = $data["username"];
        $password = $data["password"];
        $kelas = $data["kelas"];
        $alamat = $data["alamat"];
        $role = "user";
        $join_date = date("Y-m-d");
        $foto = $data["foto"];

        $sql = "INSERT into user(kode, nis, fullname, username, password, kelas, alamat, role, join_date, foto) values('$kode', '$nis', '$fullname', ' $username', '$password', '$kelas', '$alamat', '$role', ' $join_date', '$foto')";

        if($this->db->query($sql) == true){
            echo "Berhasil";
        } else{
            echo "Gagal";
        }
    }

    public function createAdmin($data){
        $kode = $data["kode"];
        $fullname = $data["fullname"];
        $username = $data["username"];
        $password = $data["password"];
        $role = "admin";
        $foto = $_POST["foto"];
        $join_date = date("Y-m-d");

        $sql = "INSERT into user(kode, fullname, username, password, role, join_date, foto) values('$kode', '$fullname', ' $username', '$password', '$role', ' $join_date', '$foto')";

        if($this->db->query($sql) == true){
            echo "Berhasil";
        } else{
            echo "Gagal";
        }
    }

    
    public function update($id, $data){
        // $kode = $data["kode"];
        $nis = $data["nis"];
        $fullname = $data["fullname"];
        $username = $data["username"];
        $password = $data["password"];
        $kelas = $data["kelas"];
        $alamat = $data["alamat"];
        $foto = $data["foto"];

        $sql = "UPDATE user set nis='$nis', fullname='$fullname', username='$username', password='$password', kelas='$kelas', alamat='$alamat', foto='$foto' where id='$id'";
        
        if($this->db->query($sql) == true){
            echo "Berhasil";
        } else{
            echo "Gagal";
        }

    }

    public function updateFotou($id, $data){
        // $kode = $data["kode"];
        $nis = $data["nis"];
        $fullname = $data["fullname"];
        $username = $data["username"];
        $password = $data["password"];
        $kelas = $data["kelas"];
        $alamat = $data["alamat"];
        $foto = $data["foto"];

        if($foto["error"] !== 4){
            $targetFile = "../assets/images" . date("YmdHis") . basename($foto["name"]);
            move_uploaded_file($foto["tmp_name"], $targetFile);
    
            $sql = "UPDATE user set nis='$nis', fullname='$fullname', username='$username', password='$password', kelas='$kelas', alamat='$alamat', foto='$targetFile' where id='$id'";
        } else{
            $sql = "UPDATE user set nis='$nis', fullname='$fullname', username='$username', password='$password', kelas='$kelas', alamat='$alamat' where id='$id'";
        }

        if($this->db->query($sql) == true){
            echo "Berhasil";
        } else{
            echo "Gagal";
        }
    }

    public function updateUser($id, $data)
    {
        $kode = $data["kode"];
        $nis = $data["nis"];
        $fullname = $data["fullname"];
        $username = $data["username"];
        $password = $data["password"];
        $kelas = $data["kelas"];
        $alamat = $data["alamat"];
        $foto = $data["foto"];
        $verif = $data["verif"];

        if ($foto["error"] !== 4) {
            $targetFile = "../../../assets/images" . date("YmdHis") . basename($foto["name"]);
            move_uploaded_file($foto["tmp_name"], $targetFile);

            $sql = "UPDATE user set kode='$kode', nis='$nis', fullname='$fullname', username='$username', password='$password', kelas='$kelas', alamat='$alamat', foto='$targetFile', verif='$verif' where id='$id'";
        } else {
            $sql = "UPDATE user set kode='$kode', nis='$nis', fullname='$fullname', username='$username', password='$password', kelas='$kelas', alamat='$alamat', verif='$verif' where id='$id'";
        }

        if ($this->db->query($sql) == true) {
            echo "Berhasil";
        } else {
            echo "Gagal";
        }
    }

    public function delete($id){

        $sql = "DELETE from user where id='$id'";

        if($this->db->query($sql) == true){
            echo "Berhasil";
        } else{
            echo "Gagal";
        }
    }
}