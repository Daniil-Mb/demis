<?php

class Controller_Feedback extends Controller
{
    function __construct()
    {
        $this->model = new Model_Feedback();
        $this->view = new View();
    }

    function action_index()
    {
        if (!empty($_POST) and $_SERVER["REQUEST_METHOD"] == "POST") {
            $feedback_data = $this->model->validate_data($_POST);
            $data['errors'] = isset($feedback_data['errors'])
                ? $feedback_data['errors']
                : '';
            if (empty($data['errors'])) {
                $this->model->save_data($feedback_data['data']);
                $data['feedback'] = $feedback_data['data'];
            }
        } else {
            $data = [];
        }
        $this->view->generate(
            'feedback_view.php',
            'template_view.php',
            $data);
    }
}

?>