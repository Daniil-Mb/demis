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
        $data = [];
        $this->view->generate('feedback_view.php', 'template_view.php', $data);
    }
    function action_save()
    {
        if (!empty($_POST));
        $feedback_data = $this->model->get_data($_POST);
        $this->model->save_data($feedback_data);
        $data['feedback'] = $feedback_data;
        $this->view->generate('feedback_view.php', 'template_view.php', $data);
        header('Location: /feedback');
    }
}
?>