<?php

namespace App\Controllers;

class AdminController extends Controller
{
    public function index()
    {
        if(!isset($_SESSION["is_connected"]) || $_SESSION["user_role"] !== "admin") {
            http_response_code(404);
            die("Interdiction d'accéder à cette page");
        }
        $this->render("admin/admin", [
            "title" => "Pannel d'administration",
        ], ["nav", "create_employee", "manage_opening"]);    
    }

    public function create_employee() {
        require_once ROOT . '/Controllers/functions/create_employee.php';
        $response = create_employee();
        echo json_encode($response);
    }

    public function manage_opening() {
        require_once ROOT . '/Controllers/functions/manage_opening.php';
        $response = manage_opening();
        echo json_encode($response);
    }
}