<?php

use App\Models\DayScheduleModel;

function manage_opening() {
    $day_schedule_model = new DayScheduleModel;
    $day_schedule_model->update(["is_opened" => $_POST["monday"]], 1);
    $day_schedule_model->update(["is_opened" => $_POST["tuesday"]], 2);
    $day_schedule_model->update(["is_opened" => $_POST["wednesday"]], 3);
    $day_schedule_model->update(["is_opened" => $_POST["thursday"]], 4);
    $day_schedule_model->update(["is_opened" => $_POST["friday"]], 5);
    $day_schedule_model->update(["is_opened" => $_POST["saturday"]], 6);
    $day_schedule_model->update(["is_opened" => $_POST["sunday"]], 7);

    $response = [
        "error" => 0,
        "msg" => "Planning mis à jour"
    ];
    return $response;
}