<?php
class Model_Main extends Model
{
    public function get_data()
    {
        $news = mysqli_query($this->connect, "SELECT * FROM `news` ORDER BY id DESC LIMIT 3");
        $news = mysqli_fetch_all($news);
        $data['news'] = $news;
        return $data;

    }
}
?>