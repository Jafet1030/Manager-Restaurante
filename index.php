<?php
// /index.php
session_start();
if (isset($_SESSION['id'])) {
    // Redirigir según rol
    switch ($_SESSION['rol']) {
        case 'gerente':
            header('Location: /Manager-Restaurante/gerente/menu.php');
            break;
        case 'mesero':
            header('Location: /Manager-Restaurante/mesero/ordenes.php');
            break;
        case 'cocina':
            header('Location: /Manager-Restaurante/cocina/ordenes-activas.php');
            break;
        default:
            header('Location: /Manager-Restaurante/login.php');
    }
    exit;
} else {
    header('Location: /Manager-Restaurante/login.php');
    exit;
}
