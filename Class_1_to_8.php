<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="CSS/class-1to8.css">
<head>
	  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="header and footer.css">
	<title>Class 1 to 8</title>
	
</head>
<style type="text/css">

	body{
		background-color: #ddd;
	}

	.side-menu{
	width: 100%;
	background-color: unset;
	height: 100%;
	display: flex;
}


.side-menu-content{
	background-color: green;
	display: block;
	width: 20%;
	text-align: center;
	overflow-y: scroll;
	height: 1000px;
}

.side-menu-content a, h2{
 
 text-decoration: none;
 color: white;
 display: block;
 padding: 10px;


}

.side-menu-links{
	width: 100%;
	margin-right: auto;
	margin-left: auto;
	text-align: center;
	padding: 10px;
	line-height: 0.6;

}

.side-menu-content a:hover{
 
 background-color: #ddd;
 color: black;



}


.main-menu{
	width: 80%;
	display: flex;
	float: right;
	height: auto;
	


}

.row-main-menu{
	width: 100%;
	overflow-y: scroll;
	height: 1000px;
	
}

.books-main-menu{
	display: flex;
	width: 19%;
	/*height: 300px;*/
	margin: 5px;
	float: left;
	background-color: white;

	
}



.books-main-menu-img{
	width: 100%;
}


.btn-downloads{
width: 100%;
}


.btn{
width: 100%;
padding: 5PX;
background-color: white;
border: 2px solid black;
}

.btn:hover{
	background-color: red;
	color: white;
	cursor: pointer;
}


@media screen and (max-width: 1320px) {

	.main-menu{
		width: 75%;
		display: block;
	}

	.books-main-menu{
		
		width: 30%;
	}

	.side-menu-content{
		width: 35%;
	}
	
}

@media screen and (max-width: 1040px) {

	.main-menu{
		width: 75%;
		display: block;
	}

	.books-main-menu{
		
		width: 30%;
	}

	.side-menu-content{
		width: 50%;
	}
	
}

@media screen and (max-width: 900px) {

	.main-menu{
		width: 75%;
		display: block;
	}

	.books-main-menu{
		
		width: 45%;
	}

	.side-menu-content{
		width: 50%;
	}
	
}



@media screen and (max-width: 600px) {

	.main-menu{
		width: 75%;
		display: block;
	}

	.books-main-menu{
		display: block;
		width: 100%;
	}

	.side-menu-content{
		width: 50%;
	}
	
}



</style>

<body>
	<?php include ("Main_Header.php"); ?>
<div class="side-menu">
	<div class="side-menu-content">
		<div class="side-menu-links">
			<h2>Class One</h2>
			<a href="#">English</a><br>
			<a href="#">Urdu</a><br>
			<a href="#">Social Studies</a><br>
			<a href="#">Mathamatics</a><br>
			<a href="#">Science</a><br>
			<a href="#">Mathamatics</a><br>
			<a href="#">Mathamatics</a><br>
			<a href="#">Mathamatics</a><br>
		</div>

		<div class="side-menu-links">
			<h2>Class One</h2>
			<a href="#">English</a><br>
			<a href="#">Urdu</a><br>
			<a href="#">Social Studies</a><br>
			<a href="#">Mathamatics</a><br>
			<a href="#">Science</a><br>
			<a href="#">Mathamatics</a><br>
			<a href="#">Mathamatics</a><br>
			<a href="#">Mathamatics</a><br>
		</div>

		<div class="side-menu-links">
			<h2>Class One</h2>
			<a href="#">English</a><br>
			<a href="#">Urdu</a><br>
			<a href="#">Social Studies</a><br>
			<a href="#">Mathamatics</a><br>
			<a href="#">Science</a><br>
			<a href="#">Mathamatics</a><br>
			<a href="#">Mathamatics</a><br>
			<a href="#">Mathamatics</a><br>
		</div>


		<div class="side-menu-links">
			<h2>Class One</h2>
			<a href="#">English</a><br>
			<a href="#">Urdu</a><br>
			<a href="#">Social Studies</a><br>
			<a href="#">Mathamatics</a><br>
			<a href="#">Science</a><br>
			<a href="#">Mathamatics</a><br>
			<a href="#">Mathamatics</a><br>
			<a href="#">Mathamatics</a><br>
		</div>


		<div class="side-menu-links">
			<h2>Class One</h2>
			<a href="#">English</a><br>
			<a href="#">Urdu</a><br>
			<a href="#">Social Studies</a><br>
			<a href="#">Mathamatics</a><br>
			<a href="#">Science</a><br>
			<a href="#">Mathamatics</a><br>
			<a href="#">Mathamatics</a><br>
			<a href="#">Mathamatics</a><br>
		</div>
	</div>

	<div class="main-menu">
		<div class="row-main-menu">
			<div class="books-main-menu">
				<div class="books-main-menu-img">
					<img src="IMAGES/12.jpeg" style="width: 100%; height: 300px;">
					<h2 style="line-height: 0.1; color: black; text-align: center;">You Can Win</h2>
					<div class="btn-downloads">
			    <button class="btn"><i class="fa fa-download"></i> Download Free PDF</button>
		    </div>
				</div>
			</div>

			<div class="books-main-menu">
			</div>

			<div class="books-main-menu">
			</div>

			<div class="books-main-menu">
			</div>

			<div class="books-main-menu">
			</div>

			<div class="books-main-menu">
			</div>

			<div class="books-main-menu">
			</div>

			<div class="books-main-menu">
			</div>

			<div class="books-main-menu">
			</div>

			<div class="books-main-menu">
			</div>
		</div>

	</div>

</div>


<?php include ("Main_Footer.php") ?>
	


</body>
</html>