<?php
function get_news_list() {
    include 'connection.php';

    try {
        return $db->query('SELECT * 
        FROM news_articles
        INNER JOIN users ON news_user_name = user_name;
        ');
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br>";
        return false;
    }
}
?>
