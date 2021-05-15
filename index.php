<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/starter-template/">
	<title>Liveness PHP</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/starter-template.css" rel="stylesheet">
	<script src="js/ie-emulation-modes-warning.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<style>
		#loader {
			position: absolute;
			left: 50%;
			top: 50%;
			z-index: 1;
			width: 120px;
			height: 120px;
			margin: -76px 0 0 -76px;
			border: 16px solid #f3f3f3;
			border-radius: 50%;
			border-top: 16px solid #3498db;
			-webkit-animation: spin 2s linear infinite;
			animation: spin 2s linear infinite;
		}

		@-webkit-keyframes spin {
			0% {
				-webkit-transform: rotate(0deg);
			}

			100% {
				-webkit-transform: rotate(360deg);
			}
		}

		@keyframes spin {
			0% {
				transform: rotate(0deg);
			}

			100% {
				transform: rotate(360deg);
			}
		}

		/* Add animation to "page content" */
		.animate-bottom {
			position: relative;
			-webkit-animation-name: animatebottom;
			-webkit-animation-duration: 1s;
			animation-name: animatebottom;
			animation-duration: 1s
		}

		@-webkit-keyframes animatebottom {
			from {
				bottom: -100px;
				opacity: 0
			}

			to {
				bottom: 0px;
				opacity: 1
			}
		}

		@keyframes animatebottom {
			from {
				bottom: -100px;
				opacity: 0
			}

			to {
				bottom: 0;
				opacity: 1
			}
		}

		#myDiv {
			display: none;
			text-align: center;
		}
	</style>
</head>

<body>
	<div id="loader"></div> <!-- Animation load data -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
					aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Liveness PHP</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Registration </a></li>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</nav>

	<div class="container">
		<br>
		<div class="col-lg-1">
		</div>
		<div id="token">
			<div class="col-lg-10">
				<h3 class="card-title">Client Detail</h3>
				<br>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-md-4">Cleint Name</label>
								<div class="col-md-8">
									<input class="form-control" name="clientname" required id="clientname">
								</div>
							</div>
							<div class="form-group row" id="NIK">
								<label class="col-md-4">Token API</label>
								<div class="col-md-8">
									<input class="form-control" name="clienttoken" required id="clienttoken">
								</div>
							</div>
							<button type="button" onclick="location.href='index.php'"
								class="btn btn-danger">Reset</button>
							<button type="button" id="tokennext" name="ocrnext" class="btn btn-primary"
								onclick="saveToken()">Next</button>

						</div>
					</div>
				</div>
			</div>
		</div>



		<div id="ocr">
			<div class="col-lg-10">
				<h3 class="card-title">OCR</h3>
				<div class="form-group">
					<label>Upload file KTP</label>
					<input id="inp" type='file'><br>
					<img id="img" height="150">

				</div>
				<div class="card border-bottom-danger" id="biodata-box">

					<div class="card-header">
						<h3 class="card-title">OCR Detail</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group row">
									<label class="col-md-4">Nama <small>( Sesuai KTP
											)</small></label>
									<div class="col-md-8">
										<input class="form-control" name="name" required id="name">
									</div>
								</div>
								<div class="form-group row" id="NIK">
									<label class="col-md-4">NIK</label>
									<div class="col-md-8">
										<input class="form-control" name="nik" required id="nik">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4">Tempat Lahir</label>
									<div class="col-md-8">
										<input class="form-control" name="pob" required id="birthplace">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4">Tanggal Lahir</label>
									<div class="col-md-8">
										<input class="form-control" name="dob" type="text" required id="birthdate">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-md-4">Jenis Kelamin</label>
									<div class="col-md-8">
										<input class="form-control" name="kelamin" required id="kelamin">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4">Gol Darah</label>
									<div class="col-md-8">
										<input class="form-control" name="darah" required id="darah">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-md-4">Agama</label>
									<div class="col-md-8">
										<input class="form-control" name="agama" required id="agama" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4">Pekerjaan</label>
									<div class="col-md-8">
										<input class="form-control" name="pekerjaan" required id="pekerjaan" required>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label class="col-md-4">Alamat <small>( Sekarang
											)</small></label>
									<div class="col-md-8">
										<input type="text" class="form-control" name="address" id="address" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4">RT/RW</label>
									<div class="col-md-8">
										<input class="form-control" name="rtrw" required id="rtrw" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4">Provinsi</label>
									<div class="col-md-8">
										<input class="form-control" name="provinsi" required id="provinsi" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4">Kota</label>
									<div class="col-md-8">
										<input class="form-control" name="kota" required id="kota" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4">Kecamatan</label>
									<div class="col-md-8">
										<input class="form-control" name="kecamatan" required id="kecamatan" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4">Desa</label>
									<div class="col-md-8">
										<input class="form-control" name="desa" required id="desa" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4">Status Kawin</label>
									<div class="col-md-8">
										<input name="kawin" required class="form-control" id="kawin" required>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-md-4">Kewarganegaraan</label>
									<div class="col-md-8">
										<input class="form-control" name="kewarganegaraan" required
											id="kewarganegaraan">
									</div>
								</div>

							</div>
						</div>
					</div>

				</div>
				<button type="button" onclick="location.href='index.php'" class="btn btn-danger">Back</button>
				<button type="button" id="ocrnext" name="ocrnext" class="btn btn-primary"
					onclick="ocrnext()">Next</button>
				<br><br>

			</div>

			<div class="row">
			</div>
		</div>
		<div id="liveness">
			<div class="row">
				<h3>Liveness</h3>
				<br>
				<div class="col-lg-3"></div>
				<div class="col-lg-3">
					<img src="assets/camera.png" alt="..." class="img-thumbnail" width="400" onclick="livenesspasif()"
						id="imgnormal">
					<small id="emailHelp" class="form-text text-muted">1. Ambil Swafoto dengan
						gerakan normal</small>
				</div>
				<div class="col-lg-3">

					<img src="assets/camera.png" alt="..." class="img-thumbnail" width="400" onclick="livenessacak()"
						id="imgacak">

					<small id="emailHelp" class="form-text text-muted">2. Ambil Swafoto dengan
						gerakan acak</small>
				</div>
				<div class="col-lg-3"></div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<br><br>
					<h4>Aturan umum Swafoto</h4>

					<ol>
						<li>Dilarang menggunakan topi, kacamata, ikat kepala, atau aksesoris lainnya
							yang menutupi
							wajah.</li>
						<li>Pandangan harus lurus ke kamera.</li>
						<li>Tidak ada efek mata merah atau fish.</li>
						<li>Pastikan pencahayaan bagus.</li>
						<li>foto harus berwarna dan belum diedit.</li>

					</ol>
					<input class="form-control" name="gesture" id="gesture">
				</div>
			</div><!-- /.row -->
			<div class="row">
				<div class="col-lg-10"></div>
				<div class="col-lg-2">
					<button type="button" onclick="livenessprev()" class="btn btn-danger">Cancel</button>
					<button type="button" onclick="ajaxpro()" class="btn btn-primary">Submit</button>
					<br><br>
					<div>
					</div>
				</div>
			</div>
		</div>
		<div id="livenessnormalbox">
			<div class="card-body">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-4 myauto">
						<div class="card border-bottom-danger" id="div-ktp">
							<div class="card-header asli">
								<h3 class="card-title tit">Swafoto Normal</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
									<video id="camera-normal" class="video img-responsive" width="100%" height="auto"
										autoplay=true></video>
									<canvas id="canvas-normal" width="380" height="280" class="hide-this">
										<img id="img-normal">
									</canvas>
								</div>
							</div>
							<div class="card-footer">

								<button class="btn btn-info btn-md jepret2 col-md-4" id="ktp-jepret-button"
									camera-target="camera-normal" canvas-target="canvas-normal"
									img-target="img-normal">Take
									Picture</button>
								&nbsp;
								<button type="button" onclick="livenessnormalprev()"
									class="btn btn-danger">Cancel</button>


								<input class="hide-this" name="ktp_photo" type="file" disabled="" required=""
									accept="image/*;capture=camera" id="input-img-ktp">

							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /.swafotonormal -->

		<div id=livenessacakbox>
			<div class="card-body">
				<div class="row">
					<div class="col-md-2 "></div>
					<div class="col-md-4">
						<div class="card border-bottom-danger" id="div-ktp">
							<div class="card-header asli">
								<h3 class="card-title tit">Swafoto Acak</h3>
								<h5 id="acak"></h5>
							</div>
							<div class="card-body">
								<div class="form-group">
									<video id="camera-acak" class="video img-responsive" width="100%" height="auto"
										autoplay=true></video>
									<canvas id="canvas-acak" width="380" height="280" class="hide-this">
										<img id="img-acak">
									</canvas>
								</div>
							</div>
							<div class="card-footer">

								<button class="btn btn-info btn-md jepret col-md-4" id="jepret" name="jepret"
									camera-target="camera-acak" canvas-target="canvas-acak"
									img-target="img-acak">Ambil</button>
								&nbsp;
								<button type="button" onclick="livenessacakprev()" class="btn btn-danger">Batal</button>


								<input class="hide-this" name="ktp_photo" type="file" disabled="" required=""
									accept="image/*;capture=camera" id="input-img-ktp">
							</div>
						</div>
					</div>
					<div class="col-md-3 ">
						<h3 class="card-title tit">Contoh</h3><br>
						<img id="contoh" src="assets/0.png" style=" padding: 1em;" alt="..." class="img-thumbnail">



					</div>
				</div>

			</div>
		</div><!-- /.livenessacakbox -->
		<div id="resultbox">
			<!-- resultbox, menampilkan hasil dari proses hit api proffesional dan liveness -->
			<h2>Result</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col"></th>
						<th scope="col">Name</th>
						<th scope="col">Result</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Name</td>
						<td id="resultname"></td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Birthdate</td>
						<td id="resultbirthdate"></td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Birthplace</td>
						<td id="resultbirthplace"></td>
					</tr>
					<tr>
						<th scope="row">4</th>
						<td>Selfie Score</td>
						<td id="resultselfie"></td>
					</tr>
					<tr>
						<th scope="row">5</th>
						<td>Liveness</td>
						<td id="resultliveness"></td>
					</tr>
				</tbody>
			</table>
			<button type="button" class="btn btn-primary" onclick="location.href='index.php'">Done</button>
		</div>
	</div><!-- /.container -->

	<script src="js/jquery.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
		crossorigin="anonymous"></script>
	<script>
		window.jQuery || document.write('<script src="js/jquery.js"><\/script>')
	</script>
	<script src="js/bootstrap.js"></script>


	<script>
		function readFile() {
			if (this.files && this.files[0]) {
				var FR = new FileReader();
				FR.addEventListener("load", function (e) {
					document.getElementById("img").src = e.target.result;
					var base64ktp = e.target.result.replace("data:image/jpeg;base64,", "");
					ajaxOcr(base64ktp);
				});
				FR.readAsDataURL(this.files[0]);
			}
		}
		document.getElementById("inp").addEventListener("change", readFile);
	</script>

	<!-- Ajax OCR, hit api ocr lalu menampilkannya kedalam form -->
	<script type="text/javascript">
		function ajaxOcr(x) {
			
			loadstart();
			var send_data = {};
			var clientname = document.getElementById("clientname").value;
			var clienttoken = document.getElementById("clienttoken").value;

			send_data['ktp_image'] = x;
			send_data['clienttoken'] = clientname;
			send_data['clientname'] = clienttoken;

			// OCR
			var url = "ocrcurl.php";
			var x = x;
			$.ajax({
				type: "POST",
				url: url,
				data:{
					ktp_image: x,
					clientname: clientname,
					clienttoken: clienttoken
					},
				success: function (response) {
					console.log(response)
					var response = JSON.parse(response)
					
					if (response['errors'].ktp_image) {
						// Show Allert
						console.log("error");
						loadstop();
					} else {
						console.log("ocr response: " + response);
						$("#address").val(response['data']['alamat'])
						$("#name").val(response['data']['nama'])
						$("#nik").val(response['data']['nik'])
						$("#birthdate").val(response['data']['tanggal_lahir'])
						$("#birthplace").val(response['data']['tempat_lahir'])
						$("#kelamin").val(response['data']['jenis_kelamin'])
						$("#agama").val(response['data']['agama'])
						$("#darah").val(response['data']['gol_darah'])
						$("#kawin").val(response['data']['status_perkawinan'])
						$("#pekerjaan").val(response['data']['pekerjaan'])
						$("#kewarganegaraan").val(response['data']['kewarganegaraan'])
						$("#provinsi").val(response['data']['provinsi'])
						$("#kecamatan").val(response['data']['kecamatan'])
						$("#kota").val(response['data']['kota'])
						$("#desa").val(response['data']['kelurahan/desa'])
						$("#rtrw").val(response['data']['rt/rw'])

						// Show Biodata Box
						$("#biodata-box").show();
						$("#ocrnext").prop('disabled', false);
						loadstop();

					}
				},

			});

		}
	</script>
	<!-- Melakukan setup page ketika pertama kali load -->
	<script type="text/javascript">
		$(document).ready(function (e) {
			$("#liveness").hide();
			$("#ocr").hide();
			$("#biodata-box").hide();
			$("#livenessnormalbox").hide();
			$("#livenessacakbox").hide();
			$("#resultbox").hide();
			$("#ocrnext").prop('disabled', true);
			$("#gesture").hide();
			$('.hide-this').hide()
			//memanggil function open camera
			openCamera($('#camera-normal')[0])
			openCamera($('#camera-acak')[0])
			document.getElementById("loader").style.display = "none";


		})
	</script>

	<script>
		function ocrnext() {
			$("#liveness").show();
			$("#ocr").hide();
		}

		function loadstop() {
			document.getElementById("loader").style.display = "none";
		}

		function loadstart() {
			document.getElementById("loader").style.display = "block";
		}

		function livenessprev() {
			$("#liveness").hide();
			$("#ocr").show();
		}

		function livenesspasif() {
			$("#liveness").hide();
			$("#livenessnormalbox").show();
		}

		function livenessnormalprev() {
			$("#liveness").show();
			$("#livenessnormalbox").hide();
		}

		function livenessacak() {
			$("#liveness").hide();
			$("#livenessacakbox").show();
		}

		function livenessacakprev() {
			$("#liveness").show();
			$("#livenessacakbox").hide();
		}
		function tokennext() {
			$("#ocr").show();
			$("#token").hide();
		}
	</script>


	<!-- Setting Up Camera -->
	<script type="text/javascript">
		$(".mirror-btn").on("click", function (e) {
			var target = $(this).attr('target');
			if ($(this).attr('mir') == "false") {
				$("#" + target).addClass('mirror')
				$(this).attr('mir', "true");
			} else {
				$("#" + target).attr('class', 'video img-responsive')
				$(this).attr('mir', "false");
			}
		})
	</script>

	<!-- Meminta permission ijin camera di browser -->
	<script type="text/javascript">
		function openCamera(video) {
			// minta izin user
			navigator.getUserMedia = navigator.getUserMedia ||
				navigator.webkitGetUserMedia ||
				navigator.mozGetUserMedia ||
				navigator.msGetUserMedia ||
				navigator.oGetUserMedia;

			// jika user memberikan izin
			if (navigator.getUserMedia) {
				// jalankan fungsi handleVideo, dan videoError jika izin ditolak
				// navigator.getUserMedia({ video: true }, handleVideo, videoError);
				navigator.getUserMedia({
					video: {
						minAspectRatio: 1.333,
						minFrameRate: 60,
						width: 640,
						heigth: 480
					}
				}, handleVideo, videoError);
			}

			// fungsi ini akan dieksekusi jika  izin telah diberikan
			function handleVideo(stream) {
				video.srcObject = stream;
			}

			// fungsi ini akan dieksekusi kalau user menolak izin
			function videoError(e) {
				// do something
				alert("Please Allow Webcam!")
				location.reload()
			}
		}
	</script>

	<!-- mengambil swafoto acak -->
	<script type="text/javascript">
		$(".jepret").on("click", function (e) {
			counterLiveness();
			for (i = 0; i < 8; i++) {

				var e = e;
				var video = $("#" + $(this).attr('camera-target'))[0]
				var canvas = $("#" + $(this).attr("canvas-target"))[0]
				var img = $("#" + $(this).attr("img-target"))[0]
				e.preventDefault();

				// buat elemen img
				var context;

				// ambil ukuran video
				var width = video.offsetWidth;
				var height = video.offsetHeight;

				// buat elemen canvas
				// canvas = $('#canvas-ktp')[0];
				canvas.width = width;
				canvas.height = height;

				// ambil gambar dari video dan masukan 
				// ke dalam canvas
				context = canvas.getContext('2d');
				context.drawImage(video, 0, 0, width, height);

				img.src = canvas.toDataURL('image/png');
				document.body.appendChild(img);
				$("#" + $(this).attr("img-target")).hide();
				var imgacak = document.getElementById("imgacak");

				imgacak.src = canvas.toDataURL('image/png');
				var dataURL = canvas.toDataURL('image/png', 1.0);
				var i = i;

				// menyimpan swafoto acak kedalam directory
				$.ajax({
					type: "POST",
					url: "http://localhost/livenessphp/saveimageacak.php",
					data: {
						imgBase64: dataURL,
						imagename: i
					}
				}).done(function (response) {
					setTimeout(function () {
						console.log('saved: ' + response);
					}, 1000);

				});
				if (i == 7) {
					livenessacakprev();
				}

			}
		});
	</script>

	<!-- set interval untuk melakukan swafoto acak selama 4 detik -->
	<script type="text/javascript">
		function counterLiveness() {
			loadstart();
			setTimeout(function () {
				loadstop();

			}, 4000);
		}
	</script>

	<!-- mengambil swafoto normal -->
	<script type="text/javascript">
		$(".jepret2").on("click", function (e) {
			var video = $("#" + $(this).attr('camera-target'))[0]
			var canvas = $("#" + $(this).attr("canvas-target"))[0]
			var img = $("#" + $(this).attr("img-target"))[0]


			e.preventDefault();
			// buat elemen img
			var context;

			// ambil ukuran video
			var width = video.offsetWidth;
			var height = video.offsetHeight;

			// buat elemen canvas
			// canvas = $('#canvas-ktp')[0];
			canvas.width = width;
			canvas.height = height;

			// ambil gambar dari video dan masukan 
			// ke dalam canvas
			context = canvas.getContext('2d');
			context.drawImage(video, 0, 0, width, height);


			img.src = canvas.toDataURL('image/png');
			document.body.appendChild(img);

			$("#" + $(this).attr("canvas-target")).show();
			$("#" + $(this).attr('camera-target')).hide();
			$("#" + $(this).attr("img-target")).hide();
			$(this).prop('disabled', true);

			livenessnormalprev();
			var imgacak = document.getElementById("imgnormal");
			imgacak.src = canvas.toDataURL('image/png');
			var dataURL = canvas.toDataURL();
			var dataURL2 = encodeImageFileAsURL($("#img-normal"));
		});
	</script>


	<!-- On CLick Button done this -->
	<script type="text/javascript">
		$("#done").on("click", function (e) {
			location.reload();
		});
	</script>

	<!-- Melakukan random number dari 0 sampai 7 untuk me-rundom gesture -->
	<script>
		var numberrandom = Math.floor(Math.random() * 7);
		if (numberrandom == 5) {
			numberrandom = Math.floor(Math.random() * 7);
		}
		document.getElementById("gesture").value = numberrandom;
		var description;
		switch (numberrandom) {
			case 0:
				description = "mata kiri tertutup, mulut tertutup, mata kanan tertutup";
				break;
			case 1:
				description = "mata kiri tertutup, mulut tertutup, mata kanan terbuka";
				break;
			case 2:
				description = "mata kiri tertutup, mulut terbuka, mata kanan tertutup";
				break;
			case 3:
				description = "mata kiri tertutup, mulut terbuka, mata kanan terbuka";
				break;
			case 4:
				description = "mata kiri terbuka, mulut tertutup, mata kanan tertutup";
				break;
			case 5:
				description = "mata kiri terbuka, mulut tertutup, mata kanan terbuka";
				break;
			case 6:
				description = "mata kiri terbuka, mulut terbuka, mata kanan tertutup";
				break;
			case 7:
				description = "mata kiri terbuka, mulut terbuka, mata kanan terbuka";
				break;
		}

		document.getElementById("acak").innerHTML = description;
		document.getElementById("contoh").src = "assets/" + numberrandom + ".png";
		// alert(numberrandom);
	</script>

	<!-- Ajax profesional -->
	<script type="text/javascript">
		function ajaxpro() {
			loadstart();
			var nik = document.getElementById("nik").value;
			var nama = document.getElementById("name").value;
			var birthdate = document.getElementById("birthdate").value;
			var birthplace = document.getElementById("birthplace").value;
			var clientname = document.getElementById("clientname").value;
			var clienttoken = document.getElementById("clienttoken").value;
			var base64 = encodeImageFileAsURL($("#img-normal"));
			var send_data = {};
			send_data['nik'] = nik;
			send_data['name'] = nama;
			send_data['birthdate'] = birthdate;
			send_data['birthplace'] = birthplace;
			send_data['identity_photo'] = "";
			send_data['selfie_photo'] = base64;
			send_data['clienttoken'] = clienttoken;
			send_data['clientname'] = clientname;

			// profesional
			var url = "profesionalcurl.php";
			$.ajax({
				type: "POST",
				url: url,
				data: send_data,
				success: function (response) {
					var response = JSON.parse(response)
					console.log("response profesional: " + response)
					if (response['errors'].ktp_image) {
						// Show Allert
						console.log("error");
					} else {
						// alert(response['data']['selfie_photo']);
						document.getElementById("resultname").innerHTML = response['data']['name'];
						document.getElementById("resultbirthdate").innerHTML = response['data']['birthdate'];
						document.getElementById("resultbirthplace").innerHTML = response['data'][
							'birthplace'
						];
						document.getElementById("resultselfie").innerHTML = response['data']['selfie_photo'];
						// document.getElementById("resultliveness").innerHTML = response['data']['name'];

						$("#resultbox").show();
						$("#liveness").hide();


					}
				},

			});
			// liveness
			var gesture = document.getElementById("gesture").value;
			var clientname = document.getElementById("clientname").value;
			var clienttoken = document.getElementById("clienttoken").value;
			var urlliveness = "livenesscurl.php";

			// hit api liveness
			$.ajax({
				type: "POST",
				url: urlliveness,
				data: {
					gestureset: gesture,
					clientname: clientname,
					clienttoken: clienttoken
				}
				


			}).done(function (response) {
				// console.log(response);
				var responsed = JSON.parse(response)

				console.log("liveness response: " + responsed['data']['passed']);
				$("#resultliveness").html(responsed['data']['passed']);
				loadstop();
			});

		}
	</script>

	<!-- Change Image to base64 -->
	<script type="text/javascript">
		function encodeImageFileAsURL(element) {
			var a = element[0];
			var b = $(a).attr('src');
			var base64 = b.split(",")[1];

			return base64
		}
	</script>

	<!-- Ajax liveness -->
	<script type="text/javascript">
		function ajaxliveness() {

			var gesture = document.getElementById("gesture").value;
			var clientname = document.getElementById("clientname").value;
			var clienttoken = document.getElementById("clienttoken").value;
			// liveness
			var urlliveness = "livenesscurl.php";
			$.ajax({
				type: "POST",
				url: urlliveness,
				gestureset: gesture

				success: function (response) {
					var response = JSON.parse(response)
					console.log(response)
					if (response['errors'].ktp_image) {
						// Show Allert
						console.log("error");
					} else {
						// alert(response['data']['selfie_photo']);
						alert(response['data']['passed']);
						console.log("liveness sukses" + response['data']['passed']);

					}
				},

			});
		}
	</script>
<script>
		function saveToken() {
			var clientname = document.getElementById("clientname").value;
			var clienttoken = document.getElementById("clienttoken").value;
			if(clientname != "" && clienttoken != ""){
				tokennext();
			}else{
				alert("Credential Required!")
			}
		}
		</script>
</body>

</html>