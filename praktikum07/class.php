<?php
// Bikin class BMIPASIEN
class bmiPasien {
    // Bikin Property
    public $nama, $berat, $tinggi, $umur, $jk;

    // construct : data nua di set seusai username
    function __construct($nama, $berat, $tinggi, $umur, $jk){
        // Masukin data
        $this->nama = $nama;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->umur = $umur;
        $this->jk = $jk;
    }

    // Bikin method
    public function hasilBMI()
    {
        // Logic
        $tinggi_m = $this->tinggi / 100;
        // Rumus BMI
        $bmi = $this->berat / ($tinggi_m * $tinggi_m);
        return round($bmi);
    }

    // Bikin method
    public function statusBMI()
    {
        $bmi = $this->hasilBMI();
        // Cek data menjadi status
        if ($bmi < 18.5) {
            return "Kekurangan Berat Badan";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            return "Normal (ideal)";
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            return "Kelebihan Berat Badan";
        } else {
            return "Obesitas";
        }
        
    }
}

// Bikin object
// $pasien = new bmiPasien("Hanna", "80", "163", "19", "P");
// echo "Nama : " . $pasien->nama . "<br>";
// echo "BMI : " . $pasien->hasilBMI() . "<br>";
// echo "Status BMI : " . $pasien->statusBMI() . "<br>";
?>