<?php

class ViewNews {

    public static function NewsByCategory($arr) {
        foreach ($arr as $value) {
            echo '<img src="data:image/jpeg;base64,' . base64_encode($value['picture']) . '" width=150 /><br>';
            echo "<h2 >" . $value['title'] . "<h2>";
            Controller::CommentsCount($value['id']);
            echo "<a href='news?id=" . $value['id'] . "'>More</a><br>";
        }
    }

    public static function AllNews($arr) {


        foreach ($arr as $value) {
            echo "<li >" . $value['title'];
            Controller::CommentsCount($value['id']);
            echo "<a href='news?id=" . $value['id'] . "'>More</a></li><br>";
        }
    }

    public static function ReadNews($n) {

        echo "<h2 >" . $n['title'] . "<h2>";
        echo '<br><img src="data:image/jpeg;base64,' . base64_encode($n['picture']) . '" width=150 /><br>';
        Controller::CommentsCountWithAncor($n['id']);
        echo "<p>" . $n['text'] . "<p>";
    }

// добавить методы для других видов представлений новостей
}

?>