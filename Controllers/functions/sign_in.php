<?php

use App\Models\AdminModel;
use App\Models\EmployeeModel;

function sign_in() {
    // Check if form is empty
    if(empty($_POST)) {
        $response = [
            "error" => 1,
            "msg" => "Vous devez remplir le formulaire"
        ];
        return $response;
    } else {
        // Check if email has good format
        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || empty($_POST["email"])) {
            $response = [
                "error" => 1,
                "msg" => "Le format de l'e-mail est incorrect"
            ];
            return $response;
        } else {
            // Check if password has been set
            if(empty($_POST["password"])) {
                $response = [
                    "error" => 1,
                    "msg" => "Veuillez saisir le mot de passe"
                ];
                return $response;
            } else {
                $email = $_POST["email"];
                $password = htmlspecialchars(strip_tags($_POST["password"]));
                // Check if user exists
                $admin_model = new AdminModel;
                $employee_model = new EmployeeModel;

                $admin = $admin_model->findBy(["email" => $email]);
                $employee = $employee_model->findBy(["email" => $email]);
                
                if(!empty($admin[0])) {
                    // Check if password is correct
                    if(!password_verify($password, $admin[0]["password"])) {
                        $response = [
                            "error" => 1,
                            "msg" => "Les mots de passe ne correspondent pas"
                        ];
                        return $response;
                    } else {
                        // Redirect to admin page
                        $_SESSION["is_connected"] = true;
                        $_SESSION["user_role"] = "admin";
                        $response = [
                            "error" => 0,
                            "msg" => "",
                            "location" => "admin"
                        ];
                        return $response;
                    }
                } elseif (!empty($employee[0])) {
                    // Check if password is correct
                    if(!password_verify($password, $employee[0]["password"])) {
                        $response = [
                            "error" => 1,
                            "msg" => "Les mots de passe ne correspondent pas"
                        ];
                        return $response;
                    } else {
                        // Redirect to admin page
                        $_SESSION["is_connected"] = true;
                        $_SESSION["user_role"] = "employee";
                        $response = [
                            "error" => 0,
                            "msg" => "",
                            "location" => "employee"
                        ];
                        return $response;
                    }
                } else {
                    $response = [
                        "error" => 1,
                        "msg" => "Utilisateur inexistant"
                    ];
                    return $response;
                }
            }
        }
    }
}