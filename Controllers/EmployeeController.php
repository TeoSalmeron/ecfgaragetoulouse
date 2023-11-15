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
        ], ["nav", "create_review", "create_car"]);    
    }

    public function create_review() {
        require_once ROOT . '/Controllers/functions/create_review.php';
        $response = create_review();
        echo json_encode($response);
    }

    public function create_visitor_review() {
        require_once ROOT . '/Controllers/functions/create_visitor_review.php';
        $response = create_visitor_review();
        echo json_encode($response);
    }

    public function create_car() {
        require_once ROOT . '/Controllers/functions/create_car.php';
        $response = create_car();
        echo json_encode($response);
    }

    public function delete_review() {
        require_once ROOT . '/Controllers/functions/delete_review.php';
        $response = delete_review();
        echo json_encode($response);
    }
}