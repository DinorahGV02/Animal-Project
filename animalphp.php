<? php
$connect = mysqli_connect("localhost","root","root");
if(!$connect) die("Oopsie ERROR");
$sql =
		"INSERT INTO Animals.animal (animal_name, habitat, animal_type)
		VALUES ('".$_REQUEST['Name']."','".$_REQUEST['Habitat']."','".$_REQUEST['Type']."')";
		$result = mysqli_query($connect, $sql);
		if($result)
			echo "ANIMAL INSERTED";
		else
			echo "ANIMAL NOT INSERTED";

<?
