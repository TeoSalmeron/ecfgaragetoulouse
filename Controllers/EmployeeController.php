<?php

namespace App\Controllers;

use App\Models\ReviewModel;

class EmployeeController extends Controller
{
    public function index()
    {
        if(!isset($_SESSION["is_connected"]) || $_SESSION["user_role"] !== "employee") {
            http_response_code(404);
            die("Interdiction d'accéder à cette page");
        }
        $review_model = new ReviewModel;
        $unmoderated_reviews = $review_model->findBy(["verified" => 0]);
        $this->render("employee/employee", [
            "title" => "Pannel d'administration - Employé",
            "unmoderated_reviews" => $unmoderated_reviews
        ], ["nav", "create_review", "create_car", "moderate_review"]);    
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

    public function moderate_review() {
        require_once ROOT . '/Controllers/functions/moderate_review.php';
        $response = moderate_review();
        echo json_encode($response);
    }

    public function delete_review() {
        require_once ROOT . '/Controllers/functions/delete_review.php';
        $response = delete_review();
        echo json_encode($response);
    }
}