<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
 
		$id= $_GET['id'];

	print_r(getProductos($id));

	function getProductos($id)
	{
		if ($id==1):
			return[
					'id'=>1,
					'nombre'=>'Zapatillas',
					'precio'=> 200.00,
					'stock'=> 2
				  ];
		endif;

		if ($id==2):
			return[
					'id'=>2,
					'nombre'=>'Pelota',
					'precio'=> 60.00,
					'stock'=> 5
				  ];
		endif;

		if ($id==3):
			return[
					'id'=>3,
					'nombre'=>'Polo',
					'precio'=> 80.00,
					'stock'=> 10
				  ];
		endif;

    }

	 ?>
</body>
</html>