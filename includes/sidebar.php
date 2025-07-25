<?php
session_start();
require_once '../function/functions.php';

if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}

$username = $_SESSION['username'];
$foto = $_SESSION['foto']; 
$role = $_SESSION['role']; 
?>

<div class="vertical-menu">
    <div data-simplebar class="h-100">

        <div class="user-sidebar text-center">
            <div class="dropdown">
                <div class="user-img position-relative d-inline-block">
                    <img src="assets/uploads/<?= htmlspecialchars($foto) ?>" alt="Foto Profil" class="rounded-circle" width="80" height="80">
                    <span class="avatar-online bg-success position-absolute bottom-0 end-0 border border-white rounded-circle" style="width: 12px; height: 12px;"></span>
                </div>
                <div class="user-info mt-3">
                    <h5 class="font-size-16 text-white mb-0"><?= htmlspecialchars($username) ?></h5>
                    <span class="font-size-13 text-white-50"><?= htmlspecialchars($role) ?></span>
                </div>
            </div>
        </div>


        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <?php
                $sidebar = require '../config/sidebar.php';

                $currentScript = basename($_SERVER['SCRIPT_NAME']);
                $currentPage = $_GET['page'] ?? null;

                foreach ($sidebar as $item) {
                    $route = $item['route'];
                    $isActive = false;

                    if (strpos($route, '?page=') !== false && $currentPage !== null) {
                        $routePage = explode('=', $route)[1];
                        if ($routePage === $currentPage) {
                            $isActive = true;
                        }
                    }

                    if ($currentPage === null && basename($route) === $currentScript) {
                        $isActive = true;
                    }

                    echo '
                            <li>
                                <a href="' . $route . '" class="waves-effect ' . ($isActive ? 'active' : '') . '">
                                    <i class="' . $item['icon'] . '"></i>
                                    <span>' . $item['title'] . '</span>
                                </a>
                            </li>';
                }
                ?>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>