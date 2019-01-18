<?php
 class beratbadan{
   

  public $berat; 
  public function beratideal($tinggi,$beratbadan, $jeniskelamin){
   echo "Berat badan ideal anda adalah ".$this->berat = $beratbadan / ($tinggi * $tinggi) * 10000;
  


   if ($berat < 17.0  ) {
   		echo "Kurus";
   } elseif ( $berat < 18.5) {
   	 echo "Gemuk";   
   	} elseif ($berat > 27) {
   		echo "gemuk";
   	}

  }
}
?>