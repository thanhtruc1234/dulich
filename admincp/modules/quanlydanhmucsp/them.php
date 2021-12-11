
<div class="container">
 	<div class="row">
		<div class="col-md-auto ">
		<p class="display-6">Thêm danh mục dịch vụ</p>
		<form name="myForm" onsubmit="return validateForm()" class="form-group" action="modules/quanlydanhmucsp/xuly.php" method="post">
		<table class="table text-center">
		  <thead>
		    <tr>
		      <th scope="col">Tên danh mục</th>
		      <th scope="col">Thứ tự</th>
		      
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td><input required type="text" name="tendanhmuc" class="form-control" placeholder="Tên danh mục"></td>
		      <td><input required type="text" name="thutu" class="form-control" placeholder="Thứ tự"></td>
		    </tr> 
		    <tr>
		    	<td colspan="2"><button type="submit" name="themdanhmuc" class="btn btn-outline-dark ">Thêm danh mục</button></td>
		    </tr>  
		  </tbody>
		</table>
		
		</form>
		</div>

		</div>

	</div>	


</div>
