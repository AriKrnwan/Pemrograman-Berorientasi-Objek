<!-- Nama   : Ari Kurniawan -->
<!-- NIM    : 20051397057 -->
<!-- Kelas  : 2020 A - D4 Manajemen Informatika -->

<?php 

class Orang
{
    protected $nama, $umur;

    public function __construct($nama, $umur)
    {
        $this->nama = $nama;
        $this->umur = $umur;
    }

}

class Dosen extends Orang
{
    private $nip;

    public function __construct($nama, $umur, $nip)
    {
        $this->nip = $nip;
        parent::__construct($nama, $umur);
    }

    public function info(){
        return $this->nama . ' berumur '. $this->umur. ' dengan nip : '. $this->nip;
    }
}

$dosen1 = new Dosen('Ucok', 24, 91726);
echo $dosen1->info();
echo '<br></br>';

$dosen2 = new Dosen('Ling Lung', 50, 89162);
echo $dosen2->info();
echo '<br></br>';

$dosen3 = new Dosen('Jonathan', 33, 89619);
echo $dosen3->info();
echo '<br></br>';

?>

