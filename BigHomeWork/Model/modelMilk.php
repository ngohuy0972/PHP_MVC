<?php 
	include'config/database.php';

	class Models extends ConnectDB
	{
		// 	USER
		function getUser() {
			$sql = "SELECT * FROM milk_user";
			return mysqli_query($this->connect(), $sql);
		}

		function getUserById($id) {
			$sql = "SELECT * FROM milk_user WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}

		function addUser($maKH, $nameKH, $gender, $address, $phoneNumber, $email) {
			$sql = "INSERT INTO milk_user(MaKH, NameKH, Gender, Address, PhoneNumber, Email) VALUES('$maKH', '$nameKH', '$gender', '$address', '$phoneNumber', '$email')";
			return mysqli_query($this->connect(), $sql);
		}

		function editUser($id, $maKH, $nameKH, $gender, $address, $phoneNumber, $email) {
			$sql = "UPDATE milk_user SET MaKH = '$maKH', NameKH = '$nameKH', Gender = '$gender', Address = '$address', PhoneNumber = '$phoneNumber', Email = '$email' WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}

		function deleteUser($id) {
			$sql = "DELETE FROM milk_user WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}

		//	MILK PRODUCTS
	    function getProducts() {
	    	$sql = "SELECT id, NameMilk, NameHS, KindMilk, WeightMilk, Price FROM milk_info";
	    	return mysqli_query($this->connect(), $sql);
	    }

	    function getTotalProducts() {
	    	$sql = "SELECT count(id) AS total FROM milk_info";
	    	return mysqli_query($this->connect(), $sql);
	    }

	    function getProductsLimit($startPage, $limitPage) {
	    	$sql = "SELECT id, NameMilk, NameHS, KindMilk, WeightMilk, Price FROM milk_info LIMIT $startPage, $limitPage";
	    	return mysqli_query($this->connect(), $sql);
	    }

	    function getProductsById($id) {
	    	$sql = "SELECT id, NameMilk, NameHS, KindMilk, WeightMilk, Price FROM milk_info WHERE id = $id";
	    	return mysqli_query($this->connect(), $sql);
	    }

	    function addMilk($name, $companyMilk, $kindMilk, $weightMilk, $price, $ingradient, $benefit, $imageMilk) {
	    	$sql = "INSERT INTO milk_info(NameMilk, NameHS, KindMilk, WeightMilk, Price, Ingradient, Benefit, ImageMilk) VALUES('$name', '$companyMilk', '$kindMilk', '$weightMilk', '$price', '$ingradient', '$benefit', '$imageMilk')";
	    	return mysqli_query($this->connect(), $sql);
	    }

	    function editMilk($id, $name, $companyMilk, $kindMilk, $weightMilk, $price) {
	    	$sql ="UPDATE milk_info SET NameMilk = '$name', NameHS = '$companyMilk', KindMilk = '$kindMilk', WeightMilk = '$weightMilk', Price = '$price' WHERE id = $id ";
	    	return mysqli_query($this->connect(), $sql);
	    }

	    function deleteMilk($id){
	    	$sql = "DELETE FROM milk_info WHERE id = $id";
	    	mysqli_query($this->connect(), $sql);
	    }


	    //	MILK COMPANY
	    function getMilkCompany() {
	    	$sql = "SELECT * FROM milk_company";
	    	return mysqli_query($this->connect(), $sql);
	    }

	    function getMilkCompanyById($id) {
	    	$sql = "SELECT * FROM milk_company WHERE id = $id";
	    	return mysqli_query($this->connect(), $sql);
	    }

	    function additionMilkCompany($maHS, $nameCompany, $address, $phoneNumber, $email) {
	    	$sql = "INSERT INTO milk_company(MaHS, NameHS, Address, PhoneNumber, Email) VALUES('$maHS','$nameCompany', '$address', '$phoneNumber', '$email')";
	    	return mysqli_query($this->connect(), $sql);
	    }

	    function editMilkCompany($id, $maHS, $nameCompany, $address, $phoneNumber, $email) {
	    	$sql = "UPDATE milk_company SET MaHS = '$maHS', NameHS = '$nameCompany', Address = '$address', PhoneNumber = '$phoneNumber', Email = '$email' WHERE id = $id ";
	    	return mysqli_query($this->connect(), $sql);
	    }

	    function deleteMilkCompany($id) {
	    	$sql = "DELETE FROM milk_company WHERE id = '$id'";
	    	return mysqli_query($this->connect(), $sql);
	    }
	}

 ?>