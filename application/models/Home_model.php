<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Home_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function namaProvinsi() {
        $hasil;
        $kueri = $this->db->query("select * from master_prov");
        foreach ($kueri->result_array() as $baris) {
            $hasil[$baris['kode_prov']] = $baris['provinsi'];
        }
        return $hasil;
    }

    public function namaKab($idProv) {
        $hasil = "";
        $kueri = $this->db->query("select * from master_kab where kode_prov=" . $idProv);

        foreach ($kueri->result_array() as $baris) {
            $hasil[$baris['kode_kab']] = $baris['kabupaten'];
            echo $baris['kabupaten'];
        }
        return $hasil;
    }

    public function jenisLayanan() {
        $hasil;
        $kueri = $this->db->query("select * from master_jenislayanan");

        foreach ($kueri->result_array() as $baris) {
            $hasil[$baris['id']] = $baris['layanan'];
        }
        return $hasil;
    }

    public function jenisKelamin() {
        $hasil;
        $kueri = $this->db->query("select * from master_jeniskelamin");

        foreach ($kueri->result_array() as $baris) {
            $hasil[$baris['id']] = $baris['jeniskelamin'];
        }
        return $hasil;
    }
    
    public function jenisLayanan1() {
        $hasil;
        $kueri = $this->db->query("select * from master_jenislayanan1");

        foreach ($kueri->result_array() as $baris) {
            $hasil[$baris['id']] = $baris['layanan'];
        }
        return $hasil;
    }

    public function salon_list($prov, $kab, $jenis_layanan, $jenis_kelamin, $jenis_layanan1) {
        //SELECT a.*,  b.jenis_salon, c.jeniskelamin, d.* from user_salon a inner join master_jenissalon b on a.jenissalon_id=b.id inner join master_jeniskelamin c on a.jeniskelamin_id = c.id inner join master_kab d on a.kab_id = d.kode_kab

//        echo $prov . " " . $kab . " " . $jenis_layanan . " " . $jenis_kelamin . " ".$jenis_layanan1."<br/>";

        $hasil = array();
        $sql;
//        if ($prov == 0) {
//            $sql = "SELECT * FROM view_salon_layanan WHERE jeniskelamin_id=$jenis_kelamin";
//        } else if ($kab == 0) {
//            $sql = "SELECT * FROM view_salon_layanan WHERE kode_prov = $prov and jeniskelamin_id=$jenis_kelamin";
//        } else if ($jenis_layanan == 0) {
//            $sql = "SELECT * FROM view_salon_layanan WHERE kode_kab = $kab and jeniskelamin_id=$jenis_kelamin";
//        } else {
//            $sql = "SELECT * FROM view_salon_layanan WHERE kode_kab = $kab and layanan_id = $jenis_layanan and jeniskelamin_id=$jenis_kelamin";
//        }

        if ($jenis_layanan1 == 0) {

            if ($prov == 0) {
                if ($jenis_layanan == 0) {
                    $sql = "SELECT * FROM view_salon_list WHERE jeniskelamin_id=$jenis_kelamin";
                } else {
                    $sql = "SELECT a.*, b.layanan_id, c.layanan FROM view_salon_list a inner join tarif b on a.id = b.user_salon_id inner join master_jenislayanan c on b.layanan_id = c.id WHERE jeniskelamin_id=$jenis_kelamin and layanan_id=$jenis_layanan";
                }
            } else if ($kab == 0) {
                if ($jenis_layanan == 0) {
                    $sql = "SELECT * FROM view_salon_list WHERE jeniskelamin_id=$jenis_kelamin and kode_prov=$prov";
                } else {
                    $sql = "SELECT a.*, b.layanan_id, c.layanan FROM view_salon_list a inner join tarif b on a.id = b.user_salon_id inner join master_jenislayanan c on b.layanan_id = c.id WHERE jeniskelamin_id=$jenis_kelamin and layanan_id=$jenis_layanan and kode_prov=$prov";
                }
            } else {
                if ($jenis_layanan == 0) {
                    $sql = "SELECT * FROM view_salon_list WHERE jeniskelamin_id=$jenis_kelamin and kode_kab=$kab";
                } else {
                    $sql = "SELECT a.*, b.layanan_id, c.layanan FROM view_salon_list a inner join tarif b on a.id = b.user_salon_id inner join master_jenislayanan c on b.layanan_id = c.id WHERE jeniskelamin_id=$jenis_kelamin and layanan_id=$jenis_layanan and kode_kab=$kab";
                }
            }
        }
        
        else{ //SELECT a.*, b.layanan_id, b.layanan1_id, c.layanan, d.layanan as layanan1 FROM view_salon_list a inner join tarif b on a.id = b.user_salon_id inner join master_jenislayanan c on b.layanan_id = c.id inner join master_jenislayanan1 d on b.layanan1_id = d.id 
            if ($prov == 0) {
                if ($jenis_layanan == 0) {
                    $sql = "SELECT a.*, b.layanan1_id, c.layanan FROM view_salon_list a inner join tarif b on a.id=b.user_salon_id inner join master_jenislayanan1 c on b.layanan1_id=c.id WHERE jeniskelamin_id=$jenis_kelamin and layanan1_id=$jenis_layanan1";
                } else {
                    $sql = "SELECT a.*, b.layanan1_id, c.layanan FROM view_salon_list a inner join tarif b on a.id=b.user_salon_id inner join master_jenislayanan1 c on b.layanan1_id=c.id WHERE jeniskelamin_id=$jenis_kelamin and layanan_id=$jenis_layanan and layanan1_id=$jenis_layanan1";
                }
            } else if ($kab == 0) {
                if ($jenis_layanan == 0) {
                    $sql = "SELECT a.*, b.layanan1_id, c.layanan FROM view_salon_list a inner join tarif b on a.id=b.user_salon_id inner join master_jenislayanan1 c on b.layanan1_id=c.id WHERE jeniskelamin_id=$jenis_kelamin and kode_prov=$prov and layanan1_id=$jenis_layanan1";
                } else {
                    $sql = "SELECT a.*, b.layanan1_id, c.layanan FROM view_salon_list a inner join tarif b on a.id=b.user_salon_id inner join master_jenislayanan1 c on b.layanan1_id=c.id WHERE jeniskelamin_id=$jenis_kelamin and kode_prov=$prov and layanan_id=$jenis_layanan and layanan1_id=$jenis_layanan1";
                }
            } else {
                if ($jenis_layanan == 0) {
                    $sql = "SELECT a.*, b.layanan1_id, c.layanan FROM view_salon_list a inner join tarif b on a.id=b.user_salon_id inner join master_jenislayanan1 c on b.layanan1_id=c.id WHERE jeniskelamin_id=$jenis_kelamin and kode_kab=$kab and layanan1_id=$jenis_layanan1";
                } else {
                    $sql = "SELECT a.*, b.layanan_id, c.layanan FROM view_salon_list a inner join tarif b on a.id = b.user_salon_id inner join master_jenislayanan c on b.layanan_id = c.id WHERE jeniskelamin_id=$jenis_kelamin and layanan_id=$jenis_layanan and kode_kab=$kab and layanan1_id=$jenis_layanan1";
                }
            }
        }
        
//        if ($jenis_layanan1 == 0) {
//
//            if ($prov == 0) {
//                if ($jenis_layanan == 0) {
//                    $sql = "SELECT * FROM view_salon_list WHERE jeniskelamin_id=$jenis_kelamin";
//                } else {
//                    $sql = "SELECT a.*, b.layanan_id, c.layanan FROM view_salon_list a inner join tarif b on a.id = b.user_salon_id inner join master_jenislayanan c on b.layanan_id = c.id WHERE jeniskelamin_id=$jenis_kelamin and layanan_id=$jenis_layanan";
//                }
//            } else if ($kab == 0) {
//                if ($jenis_layanan == 0) {
//                    $sql = "SELECT * FROM view_salon_list WHERE jeniskelamin_id=$jenis_kelamin and kode_prov=$prov";
//                } else {
//                    $sql = "SELECT a.*, b.layanan_id, c.layanan FROM view_salon_list a inner join tarif b on a.id = b.user_salon_id inner join master_jenislayanan c on b.layanan_id = c.id WHERE jeniskelamin_id=$jenis_kelamin and layanan_id=$jenis_layanan and kode_prov=$prov";
//                }
//            } else {
//                if ($jenis_layanan == 0) {
//                    $sql = "SELECT * FROM view_salon_list WHERE jeniskelamin_id=$jenis_kelamin and kode_kab=$kab";
//                } else {
//                    $sql = "SELECT a.*, b.layanan_id, c.layanan FROM view_salon_list a inner join tarif b on a.id = b.user_salon_id inner join master_jenislayanan c on b.layanan_id = c.id WHERE jeniskelamin_id=$jenis_kelamin and layanan_id=$jenis_layanan and kode_kab=$kab";
//                }
//            }
//            
//        }
//        else{ //SELECT a.*, b.layanan_id, b.layanan1_id, c.layanan, d.layanan as layanan1 FROM view_salon_list a inner join tarif b on a.id = b.user_salon_id inner join master_jenislayanan c on b.layanan_id = c.id inner join master_jenislayanan1 d on b.layanan1_id = d.id 
//            if ($prov == 0) {
//                if ($jenis_layanan == 0) {
//                    $sql = "SELECT * FROM view_salon_list WHERE jeniskelamin_id=$jenis_kelamin";
//                } else {
//                    $sql = "SELECT a.*, b.layanan_id, c.layanan FROM view_salon_list a inner join tarif b on a.id = b.user_salon_id inner join master_jenislayanan c on b.layanan_id = c.id WHERE jeniskelamin_id=$jenis_kelamin and layanan_id=$jenis_layanan";
//                }
//            } else if ($kab == 0) {
//                if ($jenis_layanan == 0) {
//                    $sql = "SELECT * FROM view_salon_list WHERE jeniskelamin_id=$jenis_kelamin and kode_prov=$prov";
//                } else {
//                    $sql = "SELECT a.*, b.layanan_id, c.layanan FROM view_salon_list a inner join tarif b on a.id = b.user_salon_id inner join master_jenislayanan c on b.layanan_id = c.id WHERE jeniskelamin_id=$jenis_kelamin and layanan_id=$jenis_layanan and kode_prov=$prov";
//                }
//            } else {
//                if ($jenis_layanan == 0) {
//                    $sql = "SELECT * FROM view_salon_list WHERE jeniskelamin_id=$jenis_kelamin and kode_kab=$kab";
//                } else {
//                    $sql = "SELECT a.*, b.layanan_id, c.layanan FROM view_salon_list a inner join tarif b on a.id = b.user_salon_id inner join master_jenislayanan c on b.layanan_id = c.id WHERE jeniskelamin_id=$jenis_kelamin and layanan_id=$jenis_layanan and kode_kab=$kab";
//                }
//            }
//        }

//        echo $sql . "<br/>";

        if ($kueri = $this->db->query($sql)) {

            foreach ($kueri->result_array() as $baris) {
                $jumlah_kunjungan = $this->home_model->lihatJumlahKunjungan($baris['id']);
                $jumlah_like = $this->home_model->lihatJumlahLike($baris['id']);
                $hasil[] = array(
                    "layanan_id" => $jenis_layanan,
                    "salon_id" => $baris["id"],
                    "nama" => $baris["nama"],
                    "password" => $baris["password"],
                    "jenissalon_id" => $baris["jenissalon_id"],
                    "namasalon" => $baris["namasalon"],
                    "email" => $baris["email"],
                    "jeniskelamin_id" => $baris["jeniskelamin_id"],
                    "tempatlahir" => $baris["tempatlahir"],
                    "tanggallahir" => $baris["tanggallahir"],
                    "noTelp" => $baris["noTelp"],
                    "alamat" => $baris["alamat"],
                    "pengalaman" => $baris["pengalaman"],
                    "fotoKTP" => $baris["fotoKTP"],
                    "kab_id" => $baris["kab_id"],
                    "jenis_salon" => $baris["jenis_salon"],
                    "jeniskelamin" => $baris["jeniskelamin"],
                    "kode_prov" => $baris["kode_prov"],
                    "provinsi" => $baris["provinsi"],
                    "kode_kab" => $baris["kode_kab"],
                    "kabupaten" => $baris["kabupaten"],
                    "jumlah_kunjungan" => $jumlah_kunjungan,
                    "jumlah_like" => $jumlah_like,
                );
            }
        }

        return $hasil;
    }

    public function lihat_detail_salon($id_salon) {
        $id_salon = addslashes($id_salon);
        $kueri = $this->db->query("select * from view_salon_list where id=$id_salon");

        $hasil = array();

        foreach ($kueri->result_array() as $baris) {
            $hasil[] = array(
                "salon_id" => $baris["id"],
                "nama" => $baris["nama"],
                "password" => $baris["password"],
                "jenissalon_id" => $baris["jenissalon_id"],
                "namasalon" => $baris["namasalon"],
                "email" => $baris["email"],
                "jeniskelamin_id" => $baris["jeniskelamin_id"],
                "tempatlahir" => $baris["tempatlahir"],
                "tanggallahir" => $baris["tanggallahir"],
                "noTelp" => $baris["noTelp"],
                "alamat" => $baris["alamat"],
                "pengalaman" => $baris["pengalaman"],
                "fotoKTP" => $baris["fotoKTP"],
                "kab_id" => $baris["kab_id"],
                "jenis_salon" => $baris["jenis_salon"],
                "jeniskelamin" => $baris["jeniskelamin"],
                "kode_prov" => $baris["kode_prov"],
                "provinsi" => $baris["provinsi"],
                "kode_kab" => $baris["kode_kab"],
                "kabupaten" => $baris["kabupaten"],
            );
        }
        return $hasil;
    }

    public function lihat_detail_salon_layanan($id) {
        $id = addslashes($id);
        $kueri = $this->db->query("select id, tarif, layanan from view_salon_layanan1 where id = $id");

        $hasil = array();

        foreach ($kueri->result_array() as $x) {
            $hasil[] = array(
                "id_layanan" => $x['id'],
                "tarif" => $x['tarif'],
                "layanan" => $x['layanan'],
            );
        }
        return $hasil;
    }
    
    public function lihatJumlahKunjungan($id){
        $id=  addslashes($id);
        $jumlah;
        $kueri = $this->db->query("select jumlahKunjungan from user_salon where id = ".$id);
        foreach ($kueri->result_array() as $baris){
            $jumlah = (int)$baris['jumlahKunjungan'];
        }
        return $jumlah;
    }
    
    public function tambahJumlahKunjungan($id){
        $id=  addslashes($id);
        $jumlah;
        $kueri = $this->db->query("select jumlahKunjungan from user_salon where id = ".$id);
        foreach ($kueri->result_array() as $baris){
            $jumlah = addslashes((int)$baris['jumlahKunjungan']+1);
        }
        $kueri = $this->db->query("UPDATE user_salon SET jumlahKunjungan = ".$jumlah. " where id = ".$id);
        
        return $jumlah;
        
    }
    
    public function lihatJumlahLike($idSalon){
        $idSalon = addslashes($idSalon);
        $kueri = $this->db->query("select count(*) from suka where user_salon_id = ".$idSalon);
        $jumlah;
        foreach ($kueri->result_array() as $baris){
            $jumlah = (int)$baris['count(*)'];
        }
        return $jumlah;
    }
    
    
    
}
