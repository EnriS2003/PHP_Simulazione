<?php
echo "Esercizio sui prodotti<br><br>";
$prodotti= array(
array("prodotto"=>"mela","prezzo"=>"1.0","quantita"=>"1"),
array("prodotto"=>"pera","prezzo"=>"1.4","quantita"=>"2"),
array("prodotto"=>"arancia","prezzo"=>"0.5","quantita"=>"1")
);
$numRow=count($prodotti);
for($i=0;$i<$numRow;$i++){
$row=$prodotti[$i];
$prodotto=$row["prodotto"];
$prezzo=$row["prezzo"];
//metto qua il clalcolo della variabile $prezzo +22%IVA
$iva=($prezzo*22)/100;
$prezzoIvato=$prezzo+$iva;
$quantita=$row["quantita"];
echo "Prodotto= $prodotto"."<br>"."Prezzo senza iva= $prezzo<br>".
"Prezzo ivato= $prezzoIvato<br>"."Quantità= $quantita<br><br>";
}
?>
<p>-----------------------------------------------------------------------------------------------------------------------</p>
<?php
echo "Esercizio sulle fatture<br><br>";
$fatture= array(
array("cliente"=>"Marco Ruella","importo"=>"3500.20","pagato"=>"si"),
array("cliente"=>"Franco Rossi","importo"=>"2344.15","pagato"=>"sospeso"),
array("cliente"=>"Gianni Rodai","importo"=>"7599.33","pagato"=>"no"),
array("cliente"=>"Giuseppe La Rosa","importo"=>"4000.01","pagato"=>"no")
);
$numRow=count($fatture);
$importiTot=0;
$importiTot1=0;
for($i=0;$i<$numRow;$i++){
$row=$fatture[$i];
$cliente=$row["cliente"];
$importo=$row["importo"];
$pagato=$row["pagato"];
  if($pagato=="no"){
	echo "<br>La seguente fattura:<br> 
    	 Cliente= $cliente<br>
    	 Importo= $importo<br>
		 Non è stata pagata!<br>
         ";
   $importiTot+=1;
   $importiTot1+=$importo;
  }
}
if($importiTot!=0){
echo "<br>Totale degli importi di cui si vuole esigere il pagamento= $importiTot";
echo "<br>Somma degli importi= $importiTot1 €";
}
?>


