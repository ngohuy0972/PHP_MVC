<?php
	include 'Model/modelMilk.php';

	class Controller {

	    function handleRequest() {

	    	$action = isset($_GET['action'])?$_GET['action']:'index';  	//kiểm tra xem action tồn tại chưa,, nếu chưa thì trả về index.

	    	switch ($action) {

	    	/*
	    		Handle for User.
	    	 */
	    		case 'list_user':
	    			$model = new Models();
	    			$list_user = $model->getUser();
	    			include'View/users/list_user.php';
	    			break;

	    		case 'add_user':
	    		//$maKH, $nameKH, $gender, $address, $phoneNumber, $email
	    			if (isset($_POST['btnAdditionUser'])) {
	    				$maKH = $_POST['MaKH'];
	    				$nameKH = $_POST['NameKH'];
	    				$gender = $_POST['Gender'];
	    				$address = $_POST['Address'];
	    				$phoneNumber = $_POST['PhoneNumber'];
	    				$email = $_POST['Email'];

	    				$model = new Models();
	    				if ($model->addUser($maKH, $nameKH, $gender, $address, $phoneNumber, $email) === TRUE) {
	    					header('Location:index.php?action=list_user');
	    				}

	    			}

	    			include'View/users/add_user.php';
	    			break;

	    		case 'edit_user':
	    			$id = $_GET['id'];
	    			$model = new Models();
	    			$editValue = $model->getUserById($id);
	    			$oldValue = $editValue->fetch_assoc();

	    			if (isset($_POST['btnEditUser'])) {
	    				$maKH = $_POST['newMaKH'];
	    				$nameKH = $_POST['newNameKH'];
	    				$gender = $_POST['newGender'];
	    				$address = $_POST['newAddress'];
	    				$phoneNumber = $_POST['newPhoneNumber'];
	    				$email = $_POST['newEmail'];

	    				$model = new Models();
	    				if ($model->editUser($id, $maKH, $nameKH, $gender, $address, $phoneNumber, $email) === TRUE) {
	    					header('Location:index.php?action=list_user');
	    				}
	    			}

	    			include'View/users/edit_user.php';

	    			break;

	    		case 'delete_user':
	    			$id = $_GET['id'];
	    			$model = new Models();
	    			if ($model->deleteUser($id) === TRUE) {
	    				header("Location:index.php?action=list_user");
	    			}
	    			break;

	    	/*
	    			Handle for Milk Company
	    	 */
	    		case 'list_milk_company':
	    			// code...
	    			$model = new Models();
	    			$list_milk_company = $model->getMilkCompany();
	    			include'View/companys/list_milk_company.php';
	    			break;

	    		case 'addition_milk_company':
	    			if (isset($_POST['btnAdditionCompany'])) {
	    				$maHS = $_POST['MaHS'];
	    				$nameCompany = $_POST['NameCompany'];
	    				$address = $_POST['Address'];
	    				$phoneNumber = $_POST['PhoneNumber'];
	    				$email = $_POST['Email'];

	    				$model = new Models();
		    			if ($model->additionMilkCompany($maHS, $nameCompany, $address, $phoneNumber, $email) === TRUE) {
		    			 	header('Location:index.php?action=list_milk_company');
		    			}
	    			}

	    			include'View/companys/addition_milk_company.php';
	    			break;

	    		case 'edit_milk_company':
	    			$id = $_GET['id'];
	    			$model = new Models();
	    			$editValue = $model->getMilkCompanyById($id);
	    			$oldValue = $editValue->fetch_assoc();
	    			if (isset($_POST['btnEditCompany'])) {
	    				$maHS = $_POST['newMaHS'];
	    				$nameCompany = $_POST['newNameCompany'];
	    				$address = $_POST['newAddress'];
	    				$phoneNumber = $_POST['newPhoneNumber'];
	    				$email = $_POST['newEmail'];

	    				$model = new Models();
	    				if ($model->editMilkCompany($id, $maHS, $nameCompany, $address, $phoneNumber, $email) === TRUE) {
	    					header('Location:index.php?action=list_milk_company');
	    				}
	    			}

	    			include'View/companys/edit_milk_company.php';

	    			break;

	    		case 'delete_milk_company':
	    			$id = $_GET['id'];
	    			$model = new Models();
	    			if ($model->deleteMilkCompany($id) === TRUE) {
	    				header('Location:index.php?action=list_milk_company');
	    			}
	    			break;

	    		default:
	    			// code...
	    			break;


	    		/*
	    			Handle for Milk
	    		 */
	    		case 'list_milk':

	    			$model = new Models();
	    			$itemLimitOnPage = 5;		//so item tren 1 trang
	    			$getItem = $model->getTotalProducts();
			        $row = mysqli_fetch_assoc($getItem);
			        $totalItem = $row['total'];
	    			// var_dump($totalItem);
	    			// exit();
	    			$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

	    			$totalPage = ceil($totalItem / $itemLimitOnPage);

	    			// Giới hạn current_page trong khoảng 1 đến nho hon total_page
			        if ($currentPage > $totalPage) {
			            $currentPage = $totalPage;
			        }
			        else if ($currentPage < 1){
			            $currentPage = 1;
			        }

			        // Tìm Start Page
        			$startPage = ($currentPage - 1) * $itemLimitOnPage;
        			$list_milk = $model->getProductsLimit($startPage, $itemLimitOnPage);


	    			include'View/products/list_milk.php';
	    			break;

	    		case 'add_milk':

	    			if (isset($_POST['btnAdditionMilk'])) {
	    				$name = $_POST['NameMilk'];
	    				$companyMilk = $_POST['NameCompany'];
	    				$kindMilk = $_POST['KindMilk'];
	    				$weightMilk = $_POST['WieghtMilk'];
	    				$price = $_POST['Price'];
	    				$ingradient = $_POST['Ingradient'];
	    				$benefit = $_POST['Benefit'];
	    				//$imageMilk = 'default.png';
	    				if ($_FILES['Image']['error'] == 0) {	//neu error = 0 thi upload. neu = 1 dung lai.
	    					$imageMilk = $_FILES['Image']['name'];
	    					move_uploaded_file($_FILES['Image']['tmp_name'],'uploads/products/'.$imageMilk);
	    				}
	    				$model = new Models();
	    				if ($model->addMilk($name, $companyMilk, $kindMilk, $weightMilk, $price, $ingradient, $benefit, $imageMilk) === TRUE) {
	    					header('Location:index.php?action=list_milk');
	    				}
	    			}

	    			include'View/products/add_milk.php';
	    			break;

	    		case 'add_milk_success':
	    			echo 'Them San Pham Thanh Cong';
	    			break;

	    		case 'edit_milk':
	    			$id = $_GET['id'];
	    			$model = new Models();
	    			$editValue = $model->getProductsById($id);
	    			$oldValue = $editValue->fetch_assoc();
	    			if (isset($_POST['btnEditMilk'])) {
	    				$name = $_POST['newNameMilk'];
	    				$companyMilk = $_POST['newNameCompany'];
	    				$kindMilk = $_POST['newKindMilk'];
	    				$weightMilk = $_POST['newWeightMilk'];
	    				$price = $_POST['newPrice'];
	    				// var_dump($name);
	    				// var_dump($companyMilk);
	    				// var_dump($kindMilk);
	    				// var_dump($weightMilk);
	    				// var_dump($price);
	    				$model = new Models();
	    				if ($test = $model->editMilk($id, $name, $companyMilk, $kindMilk, $weightMilk, $price)  === TRUE) {
	    					header('Location:index.php?action=list_milk');
	    				}
	    				//var_dump($test);
	    			}

	    			include'View/products/edit_milk.php';
	    			break;

	    		case 'delete_milk':
	    			$id = $_GET['id'];
	    			$model = new Models();
	    			if ($model->deleteMilk($id) === TRUE) {
	    				header('Location:index.php?action=list_milk');
	    			}
	    			break;

	    	}
	    }
	}

 ?>