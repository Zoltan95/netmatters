<?php
function get_news_list() {
    include 'connection.php';

    try {
        return $db->query('SELECT * 
        FROM news_articles
        INNER JOIN users ON news_user_name = user_name
        ORDER BY news_date DESC LIMIT 0, 3
        ');
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br>";
        return false;
    }
}

function get_address_list() {
    include 'connection.php';

    try {
        return $db->query('SELECT * FROM addresses');
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br>";
        return false;
    }
}

?>
