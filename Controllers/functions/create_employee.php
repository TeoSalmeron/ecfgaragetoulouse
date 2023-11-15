<?php

use App\Models\EmployeeModel;

function create_employee() {
    // Check if e-mail is correct
    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $response = [
            "error" => 1,
            "msg" => "L'e-mail est incorrect"
        ];
        return $response;
    } else {
        // Check if passwords are the same
        if($_POST["password"] !== $_POST["confirm_password"]) {
            $response = [
                "error" => 1,
                "msg" => "Les mots de passe doivent être identique"
            ];
            return $response;
        } else {
            // Check if password respect rules
            $password_regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/"; 
            if(!preg_match($password_regex, $_POST["password"]) || !preg_match($password_regex, $_POST["confirm_password"])) {
                $response = [
                    "error" => 1,
                    "msg" => "Les mots de passe doivent respecter les règles"
                ];
                return $response;
            } else {
                // Check if employee already exists
                $employee_model = new EmployeeModel;
                $email = $_POST["email"];
                $password = htmlspecialchars(strip_tags($_POST["password"]));
                $confirm_password = htmlspecialchars(strip_tags($_POST["confirm_password"]));

                if(!empty($employee_model->findBy(["email" => $email])[0])) {
                    $response = [
                        "error" => 1,
                        "msg" => "Cet employé existe déjà"
                    ];
                    return $response;
                } else {
                   // Create employee
                   $datas = [
                    "id" => uniqid("", true),
                    "email" => $email,
                    "password" => password_hash($password, PASSWORD_BCRYPT),
                    "works_for" => 1
                   ];
                   
                   if(!$employee_model->create($datas)) {
                        $response = [
                            "error" => 1,
                            "msg" => "Impossible de créer le nouvel employé"
                        ];
                        return $response;
                   } else {
                    $response = [
                        "error" => 0,
                        "msg" => "Employé créé"
                    ];
                    return $response;
                   }
                }
            }
        }
    }
}