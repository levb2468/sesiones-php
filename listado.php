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

	print_r(getProductos(1));

	function getProductos($id)
	{
		if ($id==1):
			return[
					'nombre'=>'Zapatillas',
					'precio'=> 200.00,
					'stock'=> 2
				  ];
		endif;

		if ($id==2):
			return[
					'nombre'=>'Pelota',
					'precio'=> 60.00,
					'stock'=> 5
				  ];
		endif;

		if ($id==3):
			return[
					'nombre'=>'Polo',
					'precio'=> 80.00,
					'stock'=> 10
				  ];
		endif;

    }
    
	 ?>
</body>
</html>