<?php

namespace App\Controllers;

use App\Models\CarModel;
use App\Models\GarageModel;
use App\Models\ReviewModel;
use App\Controllers\Controller;
use App\Models\DayScheduleModel;

class DefaultController extends Controller
{
    public function index()
    {
        $review_model = new ReviewModel;
        $reviews = $review_model->findBy(["verified" => 1]);

        $garage_model = new GarageModel;
        $garage = $garage_model->findBy(["id" => 1])[0];

        $car_model = new CarModel;
        $cars = $car_model->findAll();

        $schedule_model = new DayScheduleModel;
        $schedules = $schedule_model->findAll();


        $this->render("home/home", [
            "title" => "Accueil",
            "garage" => $garage,
            "reviews" => $reviews,
            "cars" => $cars,
            "schedules" => $schedules
        ], ["nav", "delete_review", "create_visitor_review"]);
    }
}
