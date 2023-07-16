<?php
class Model_News extends Model
{
	public function get_data()
	{
        $news = mysqli_query($this->connect, "SELECT * FROM `news`");
        $news = mysqli_fetch_all($news);
        $data['news'] = $news;
        return $data;
	}
}
?>