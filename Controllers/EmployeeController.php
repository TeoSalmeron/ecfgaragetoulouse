<?php

namespace App\Controllers;

class EmployeeController extends Controller
{
    public function index()
    {
        if(!isset($_SESSION["is_connected"]) || $_SESSION["user_role"] !== "employee") {
            http_response_code(404);
            die("Interdiction d'accéder à cette page");
        }
        $this->render("employee/employee", [
            "title" => "Pannel d'administration - Employé",
        ], ["nav", "create_review"]);    
    }

    public function create_review() {
        require_once ROOT . '/Controllers/functions/create_review.php';
        $response = create_review();
        echo json_encode($response);
    }
}