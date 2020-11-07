<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="icon" type="text/css" href="log.png">
	<style type="text/css">

	</style>
  </head>
  <body>
	<div class="p-3 border-bottom sticky-top bg-white"> <!--шапка-->
		<div class="col-8 mx-auto">
			<div class="row">
				<div class="col-4">
					<div class="row">
						<div class="col-1 px-0">
							<img src="logo.png" class="w-100">
						</div>
						<div class="col-1 px-0 text-center">
							<img src="line.png" class="w-50">
						</div>
						<div class="col-4 px-0">
							<img src="logo2.png" class="w-100">
						</div>
					</div>
				</div>
				<div class="col-4">
					<input type="" name="" placeholder="поиск" class="border rounded text-center px-3 ml-5 border-secondary">
				</div>
				<div class="col-4">
					<div class="row">
						<div class="col-6"></div>
						<div class="col-2 px-0 pl-2">
							<img src="1.png" class="w-50">
						</div>
						<div class="col-2 px-0 pl-2">
							<div class="dropdown">
							  <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    <img src="2.png" class="w-50">
							  </a>
							</div>
						</div>
						<div class="col-2 px-0 pl-2">
							<img src="3.png" class="w-50">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-6 mx-auto" > <!--ГЛАВНЫЙ БЛОК-->
		<div class="row" > 
			<!--ЛЕВЫЙ БЛОК. ДИВ ДЛЯ ПОСТОВ-->
			<div class="col-8 px-0 my-2"> 
							
				<!--САМ ПОСТ-->
				<div class="mt-5 border rounded">   
					<div class="col-12 px-1">
						<div class="row">
							<div class="col-1 text-right pb-4 pt-2 px-0 ml-4">
								<img src="7.png" class="w-100 rounded-circle">
							</div>
							<div class="col-10 pb-4 pt-3 text-left">
								<h6 class="mb-0">Ko_iuliana</h6>
								<p class="mb-0">Yakutsk</p>	
							</div>													
						</div>
					</div>
						<?php
							$connect = mysqli_connect("127.0.0.1","root","","instagram");
							$text_zaprosa =  "SELECT * FROM posts";
							$zapros = mysqli_query($connect, $text_zaprosa);

							for ($i=0; $i < $zapros->num_rows; $i++) { 
								$result = $zapros->fetch_assoc();
						?>
					<div class="col-12 img0" style="height: 500px; background-image: url(<?php echo $result["img"]?>); background-size: 100% 100%"> <!--картинка поста-->
						<div class="col-8 bg-secondary mx-auto imgUP" style="position: absolute; top: 40%; left: 15%; display: none;">
							<form action="update.php" method="GET">
								<div class="mt-3 ">
									<input type="" name="img">
								</div>
								<h3 style="text-align: center;">Change image...</h3>
								<div class="row">
								<div  class="mt-3 pb-3 mx-auto">
									<button class="btn btn-success">YES</button>
								</div>
								<div  class="mt-3 pb-3 mx-auto" >
									<button class="btn btn-danger">NO</button>
								</div>
								</div>
							</form>
						</div>
					</div>

					<div class="col-12 py-2"> 
						 <!--текстовые элементы поста-->
			
						<div>
							<p class="font-weight-bold"><?php echo $result["user"] ?></p>
						</div>
						<div>
							<p class="txt"><?php echo $result["text"] ?></p>
						</div>
						<form action="update.php" method="GET">
							<div class="mt-3" >
								<input type="" name="text" placeholder="text" style="display: none;" class="uptxt">
							</div>
							<div class="mt-3" class="upimg">
								<input type="" name="img" style="display: none;">
							</div>
							<div class="mt-3">
								<input type="" name="id" value="<?php echo $result["id"] ?>" style="display: none;">
							</div>
							<button class="btn btn-success">Update</button>
						</form>
						<form action="delete.php" method="GET">
							<input type="" name="id" value="<?php echo $result["id"] ?>" style="display: none;">
							<button class="btn btn-danger">Delete</button>
						</form>
						<div class="mt-3">
							<p class="font-weight-light"><?php echo $result["date"] ?></p>
						</div>
						<?php
							}
						?>					
					</div>
				</div>
				<!-- ПОСТ ЗАКРЫЛСЯ-->
			</div>
			<!--ДИВ ДЛЯ ПОСТОВ закрылся-->


			<div class="col-4 mt-5">  <!--ПРАВЫЙ БЛОК. ПОДПИСКИ И ТД-->
				<div class="my-2 border rounded px-3 py-2">
					<div class="col-12">
						<div class="row">
							<div class="col-2 px-0">
								<img src="7.png" class="w-100 rounded-circle">
							</div>
							<div class="col-10">
								<h6 class="mb-0">Ko_iuliana</h6>
								<p class="text-secondary mb-0">Iuliana</p>
							</div>
						</div>
					</div>
				</div>
				<div class="mt-2 border my-2 rounded  px-3 py-2">
					<div class="col-12">
						<div class="row">
							<div class="col-4 text-left px-0 pb-3 pt-1">Истории</div>
							<div class="col-8 text-left pb-3 pt-1">Смотреть все</div>
						</div>
						<div class="row">
							<div class="col-3 px-1">
								<img src="4.png" class="w-100 rounded-circle">
							</div>
							<div class="col-9 py-2" >
								<p>nastyaswan</p>
							</div>
						</div>
						<div class="row mt-2">
							<div class=" col-3 px-1">
								<img src="4.png" class="w-100 rounded-circle">
							</div>
							<div class="col-9 py-2" >
								<p>linguamarina</p>
							</div>
						</div>
						<div class="row mt-2">
							<div class=" col-3 px-1">
								<img src="4.png" class="w-100 rounded-circle">
							</div>
							<div class="col-9 py-2" >
								<p>rosiehw</p>
							</div>
						</div>						
					</div>
				</div>
				<div class="my-2 border rounded px-3 py-2">  <!--ПРАВЫЙ БЛОК. РЕКОМЕНДАЦИИ-->
					<div class="col-12">
						<div class="row">
							<div class="col-8 text-left px-0 pb-3 pt-1">Рекомендации для вас</div>
							<div class="col-4 text-left pb-3 pt-1">Все</div>
						</div>
						<div class="row">
							<div class="col-3 px-2">
								<img src="4.png" class="rounded-circle w-100">
							</div>
							<div class="col-9 ">
								<p class="mb-0">noname</p>
								<a href="" class="mb-0">Подписаться</a>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-3  px-2" >
								<img src="4.png" class="rounded-circle w-100">
							</div>
							<div class="col-9 ">
								<p class="mb-0">yuuhg</p>
								<a href="" class="mb-0">Подписаться</a>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-3  px-2" >
								<img src="4.png" class="rounded-circle w-100">
							</div>
							<div class="col-9 " >
								<p class="mb-0">oook</p>
								<a href="" class="mb-0">Подписаться</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		let txt = document.querySelector(".txt");
		let img = document.querySelector(".img0");
		let uptxt = document.querySelector(".uptxt");
		
		let upimg = document.querySelector(".imgUP");
 		
 		img.onclick = function {
 			upimg.style.display = "block";
 		}
 		txt.onclick = function {
 			uptxt.style.display = "block";

 		}
	</script>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>