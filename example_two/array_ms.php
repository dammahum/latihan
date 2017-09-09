<?php
	$nilai =array(
		array(98,80,80),
		array(95,87,78),
		array(90,77,93)
	);
	
	echo "<ol>";
	for($baris=0;$baris<count($nilai);$baris++)
	{
		echo "<li>";
		 for($kolom=0;$kolom<count($nilai[$baris]);$kolom++)
		 {
		  echo $nilai[$baris][$kolom]."   ";
		 }
		 echo "</li>";
		echo "<br>";
	}
	echo "</ol>";
	
	$nilai=array(
		array("English"=>98,"Kimia"=>80,"Fisika"=>80),
		array("English"=>95,"Kimia"=>87,"Fisika"=>78),
		array("English"=>90,"Kimia"=>77,"Fisika"=>93)
	);
	
	echo "<ul>";
	for($r=0;$r < count($nilai);$r++)
	{
		echo "<li>";
		foreach($nilai[$r] as $key=>$value)
		{
			echo $key." = " .$value. " ";
		}
			echo "</li>";
			echo "<br><br>";
	}
	echo "</ul>";
	
	$nama = array (
	"Sukirman" => array ("English" => 89, "Matematika" => 88, "Fisika" => 70),
	"Sukijat" => array ("English" => 97, "Matematika" => 89, "Fisika" => 65),
	"Suparman" => array ("English" => 56, "Matematika" => 87, "Fisika" => 54)
	);
	
	 echo "Nilai Sukirman dalam mata pelajaran Bhs. Inggris : ".$nama['Sukirman']['English'] . "<br />" ;
  echo "Nilai Sukirman dalam mata pelajaran Matematika : ".$nama['Sukirman']['Matematika'] . "<br />" ; 
  echo "Nilai Sukirman dalam mata pelajaran Kimia : ".$nama['Sukirman']['Fisika'] . "<br />" ; 
  
  echo "Nilai Sukijat dalam mata pelajaran Bhs. Inggris : ".$nama['Sukijat']['English'] . "<br />" ;
  echo "Nilai Sukijat dalam mata pelajaran Matematika : ".$nama['Sukijat']['Matematika'] . "<br />" ; 
  echo "Nilai Sukijat dalam mata pelajaran Fisika : ".$nama['Sukijat']['Fisika'] . "<br />" ;
  
  
  echo "Nilai Suparman dalam mata pelajaran Bhs. Inggris : ".$nama['Suparman']['English'] . "<br />" ;
  echo "Nilai Suparman dalam mata pelajaran Matematika : ".$nama['Suparman']['Matematika'] . "<br />" ; 
  echo "Nilai Suparman dalam mata pelajaran Fisika : ".$nama['Suparman']['Fisika'] . "<br /></br>" ;
  
	foreach ($nama as $mahasiswa => $nilai)
 {
   
   foreach ($nilai as $nama => $value)
   {
     echo "Nilai"." ".$mahasiswa." dalam mata pelajaran ".$nama." adalah"." ".$value."<br>";
   }   
 }
?>