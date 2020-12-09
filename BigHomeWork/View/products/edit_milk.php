<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm Sữa</title>
	<style>
		*{
			margin: 0 auto;
		}

		.addMilk {
			text-align: center;
		}

		.btnSubmit {
			text-align: center;
		}

		.label {
			width: 25%;
			margin-left: 20px;
			float: left;
		}

		.input-data {
			width: 93%;
		    float: left;
		    margin-left: 20px;
		}
	</style>
</head>
<body>
	<table border="1" class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
		<form  enctype="multipart/form-data" method="POST">
			<tr>
				<th class="addMilk">Chỉnh Sửa Sản Phẩm</th>
			</tr>
			<tr>
				<td>
					<p class="label">Tên Sữa</p>
					<input class="input-data" type="text" name="newNameMilk" value="<?php echo $oldValue['NameMilk'] ?>">
				
					<p class="label">Tên Hãng Sữa</p>
					<input class="input-data" type="text" name="newNameCompany" value="<?php echo $oldValue['NameHS'] ?>">
				
					<p class="label">Loại Sữa</p>
					<input class="input-data" type="text" name="newKindMilk" value="<?php echo $oldValue['KindMilk'] ?>">
				
					<p class="label">Trọng Lượng</p>
					<input class="input-data" type="text" name="newWeightMilk" value="<?php echo $oldValue['WeightMilk'] ?>">
				
					<p class="label">Đơn Giá</p>
					<input class="input-data" type="text" name="newPrice" value="<?php echo $oldValue['Price'] ?>">
				</td>
			</tr>
			<tr>
				<th class="btnSubmit" colspan="9"><input type="submit" name="btnEditMilk" value="Chỉnh Sửa Sản Phẩm"></th>
			</tr>
		</form>
	</table>
</body>
</html>