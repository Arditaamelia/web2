<?php
class Lingkaran{
     /**
     * Access Modifier:
     * 1. public: atribut / method dapat di akses walaupun di luar class
     * 2. private: atribut / method hanya dapat di akses di dalam class
     * 3. protrcted: mirip seperti private, tetapi dapat juga di akes oleh class
     */
      
     //  atribut / properti
     private $jari;
     const PHI = 3.14;
     
     // method: function yang ada dalam class
     public function __construct($r)
     {
        // isi atribut jarii saat pembuatan object
        $this->jari = $r;
     } 

     public function getLuas(){
        return 0.5 * self::PHI * $this->jari * $this->jari;
     }

     public function getKeliling()
     {
        return 2  * self::PHI * $this->jari;
     }
}
