<? php
$connect = mysqli_connect("localhost","root","root");
if(!$connect) die("ERROR");
$sql =
		"INSERT INTO Animals.animal (animal_name, habitat, animal_type)
		VALUES ('".$_REQUEST['animalName']."','".$_REQUEST['animalType']."','".$_REQUEST['habitat']."')";
		$result = mysqli_query($connect, $sql);
		if($result)
			echo "ANIMAL INSERTED";
		else
			echo "ANIMAL NOT INSERTED";

<?
