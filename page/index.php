<?php

require_once '../app/Helpers/Core.php';

use App\Helpers\Core;

Core::AUTH();

Core::HEADER('Beranda');
?>

<div class="main-content">
	<div class="page-content">
		<div class="container-fluid">
			<?php

			// Ambil nilai dari URL
			@$page = $_GET['page'];
			@$aksi = $_GET['aksi'];

			// =================== HALAMAN PROFIL ===================
			if ($page == "profil") {
				if ($aksi == "") {
					include "profil/profil.php";
				} elseif ($aksi == "editsejarah") {
					include "profil/sejarah/edit.php";
				} elseif ($aksi == "editvisimisi") {
					include "profil/visimisi/edit.php";
				} elseif ($aksi == "tambahsarana") {
					include "profil/saranaprasarana/tambah.php";
				} elseif ($aksi == "editsarana") {
					include "profil/saranaprasarana/edit.php";
				} elseif ($aksi == "editeskul") {
					include "profil/eskul/edit.php";
				} elseif ($aksi == "tambaheskul") {
					include "profil/eskul/tambah.php";
				}

				// =================== HALAMAN BERANDA ===================
			} elseif ($page == "beranda") {
				include "beranda.php";

				// =================== HALAMAN GALERI ===================
			} elseif ($page == "galeri") {
				if ($aksi == "") {
					include "galeri/galeri.php";
				} elseif ($aksi == "tambahgaleri") {
					include "galeri/gambarsekolah/tambah.php";
				} elseif ($aksi == "editgaleri") {
					include "galeri/gambarsekolah/edit.php";
				} elseif ($aksi == "hapusgaleri") {
					include "galeri/gambarsekolah/hapus.php";
				}

				// =================== HALAMAN BLOG ===================
			} elseif ($page == "blog") {
				if ($aksi == "") {
					include "blog/blog.php";
				} elseif ($aksi == "tambahblog") {
					include "blog/blog/tambah.php";
				} elseif ($aksi == "editblog") {
					include "blog/blog/edit.php";
				} elseif ($aksi == "hapusblog") {
					include "blog/blog/hapus.php";
				}

				// =================== HALAMAN SDM ===================
			} elseif ($page == "sdm") {
				if ($aksi == "") {
					include "sdm/sdm.php";
				} elseif ($aksi == "tambahguru") {
					include "sdm/guru/tambah.php";
				} elseif ($aksi == "editguru") {
					include "sdm/guru/edit.php";
				} elseif ($aksi == "hapusguru") {
					include "sdm/guru/hapus.php";
				} elseif ($aksi == "tambahstaf") {
					include "sdm/staf/tambah.php";
				} elseif ($aksi == "editstaf") {
					include "sdm/staf/edit.php";
				} elseif ($aksi == "hapusstaf") {
					include "sdm/staf/hapus.php";
				}

				// =================== HALAMAN HOME ===================
			} elseif ($page == "home") {
				if ($aksi == "") {
					include "home/home.php";
				} elseif ($aksi == "tambahslogan") {
					include "home/slogan/tambah.php";
				} elseif ($aksi == "hapusslogan") {
					include "home/slogan/hapus.php";
				} elseif ($aksi == "editslogan") {
					include "home/slogan/edit.php";
				} elseif ($aksi == "editkepsek") {
					include "home/kepsek/edit.php";
				} elseif ($aksi == "tambahkepsek") {
					include "home/kepsek/tambah.php";
				} elseif ($aksi == "tambahberita") {
					include "home/berita/tambah.php";
				} elseif ($aksi == "editberita") {
					include "home/berita/edit.php";
				} elseif ($aksi == "hapusberita") {
					include "home/berita/hapus.php";
				} elseif ($aksi == "editsiswa") {
					include "home/siswa/edit.php";
				}

				// =================== HALAMAN PENGGUNA ===================
			} elseif ($page == "pengguna") {
				if ($aksi == "") {
					include "pengguna/index.php";
				} elseif ($aksi == "tambahpengguna") {
					include "pengguna/tambah.php";
				} elseif ($aksi == "editpengguna") {
					include "pengguna/edit.php";
				} elseif ($aksi == "hapuspengguna") {
					include "pengguna/hapus.php";
				}

				// =================== HALAMAN PENGATURAN ===================
			} elseif ($page == "pengaturan") {
				include "pengaturan/index.php";
			}

			?>
		</div>

	</div>
</div>

<script type="text/javascript" src="../assets/js/materialize.min.js"></script>

<script>
	const sideNav = document.querySelectorAll('.sidenav');
	M.Sidenav.init(sideNav);

	const slider = document.querySelectorAll('.slider');
	M.Slider.init(slider, {
		indicators: false,
		transition: 600,
		interval: 3000
	});

	const parallax = document.querySelectorAll('.parallax');
	M.Parallax.init(parallax);

	const materialbox = document.querySelectorAll('.materialboxed');
	M.Materialbox.init(materialbox);
</script>

<?php Core::FOOTER() ?>