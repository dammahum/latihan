<?php
$nama=array("Muhammad"=>"9","Yahya"=>"3","Abid"=>"17");
ksort($nama);

foreach($nama as $x=>$x_nama)
    {
    echo "Nama=" . $x . ", umur=" . $x_nama;
    echo "<p></p>";
    }
	echo "<hr>";
	$nilai=array(9,7,6,5,4,3,2,1);
	sort($nilai);
	
	$arrlength=count($nilai);
	for ($x=0;$x < $arrlength;$x++)
	{
		echo $nilai[$x];
		echo "<p></p>";
	}
	echo "<hr>";
	$abjad=array("Z", "X", "C", "L", "P");
	sort($abjad);
	
	$clength=count($abjad);
	for($x=0; $x < $clength; $x++)
	{
		echo $abjad[$x];
		echo "<p></p>";
	}
?>
