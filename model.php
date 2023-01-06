
<?php
        
/* class siswa */
class siswa {

    /* method untuk menampilkan data siswa */
    function view() {
        // memanggil file database.php
        require_once "config/database.php";

        // membuat objek db dengan nama $db
        $db = new database();

        // membuka koneksi ke database
        $mysqli = $db->connect();

        // sql statement untuk mengambil semua data siswa
        $sql = "SELECT * FROM a ORDER BY a0 DESC";

        $result = $mysqli->query($sql);

        while ($data = $result->fetch_assoc()) {
            $hasil[] = $data;
        }

        // menutup koneksi database
        $mysqli->close();

        // nilai kembalian dalam bentuk array
        return $hasil;
    }

    /* Method untuk menyimpan data ke tabel siswa */
    function insert($x0, $x1, $x2, $x3, $x4, $x5, $x6, $x7, $x8, $x9) {
        // memanggil file database.php
        require_once "config/database.php";

        // membuat objek db dengan nama $db
        $db = new database();

        // membuka koneksi ke database
        $mysqli = $db->connect();

        $x0 = $mysqli->real_escape_string($x0);
        $x1 = $mysqli->real_escape_string($x1);
        $x2 = $mysqli->real_escape_string($x2);
        $x3 = $mysqli->real_escape_string($x3);
        $x6 = $mysqli->real_escape_string($x6);
        $x9 = $mysqli->real_escape_string($x9);

        // sql statement untuk insert data siswa
        $sql = "INSERT INTO a (a0,a1,a2,a3,a4,a5,a6,a7,a8,a9) 
                VALUES ('0','$x1','$x2','$x3','$x4','$x5','$x6','$x7','$x8','$x9')";

        $result = $mysqli->query($sql);

        // cek hasil query
        if($result){
            /* jika data berhasil disimpan alihkan ke halaman siswa dan tampilkan pesan = 2 */
            header("Location: sadmin?alert=2");
        }
        else{
            /* jika data gagal disimpan alihkan ke halaman siswa dan tampilkan pesan = 1 */
            header("Location: sadmin?alert=1");
        }

        // menutup koneksi database
        $mysqli->close();
    }

    /* Method untuk menampilkan data siswa berdasarkan nis */
    function get_siswa($x0) {
        // memanggil file database.php
        require_once "config/database.php";

        // membuat objek db dengan nama $db
        $db = new database();

        // membuka koneksi ke database
        $mysqli = $db->connect();

        // sql statement untuk mengambil data siswa berdasarkan nis
        $sql = "SELECT * FROM a WHERE a0='$x0'";

        $result = $mysqli->query($sql);
        $data   = $result->fetch_assoc();

        // menutup koneksi database
        $mysqli->close();
        
        // nilai kembalian dalam bentuk array
        return $data;
    }
    
    /* Method untuk mengubah data pada tabel siswa */
    function update($x1, $x2, $x3, $x4, $x5, $x6, $x7, $x8, $x9, $x0) {
        // memanggil file database.php
        require_once "config/database.php";

        // membuat objek db dengan nama $db
        $db = new database();

        // membuka koneksi ke database
        $mysqli = $db->connect();

        $x1 = $mysqli->real_escape_string($x1);
        $x2 = $mysqli->real_escape_string($x2);
        $x3 = $mysqli->real_escape_string($x3);
        $x6 = $mysqli->real_escape_string($x6);
        $x7 = $mysqli->real_escape_string($x7);

        // sql statement untuk update data siswa
        $sql = "UPDATE a SET a1 = '$x1',
                                    a2 = '$x2',
                                    a3 = '$x3',
                                    a4 = '$x4',
                                    a5 = '$x5',
                                    a6 = '$x6',
                                    a7 = '$x7',
                                    a8 = '$x8',
                                    a9 = '$x9'
                              WHERE a0 = '$x0'"; 

        $result = $mysqli->query($sql);

        // cek hasil query
        if($result){
            /* jika data berhasil disimpan alihkan ke halaman siswa dan tampilkan pesan = 3 */
            header("Location: sadmin?alert=3");
        }
        else{
            /* jika data gagal disimpan alihkan ke halaman siswa dan tampilkan pesan = 1 */
            header("Location: sadmin?alert=1");
        }

        // menutup koneksi database
        $mysqli->close();
    }
    
    /* Method untuk menghapus data pada tabel siswa */
    function delete($x0) {
        // memanggil file database.php
        require_once "config/database.php";

        // membuat objek db dengan nama $db
        $db = new database();

        // membuka koneksi ke database
        $mysqli = $db->connect();

        // sql statement untuk delete data siswa
        $sql = "DELETE FROM a WHERE a0 = '$x0'";

        $result = $mysqli->query($sql);

        // cek hasil query
        if($result){
            /* jika data berhasil disimpan alihkan ke halaman siswa dan tampilkan pesan = 4 */
            header("Location: sadmin?alert=4");
        }
        else{
            /* jika data gagal disimpan alihkan ke halaman siswa dan tampilkan pesan = 1 */
            header("Location: sadmin?alert=1");
        }

        // menutup koneksi database
        $mysqli->close();
    }
}
?>
