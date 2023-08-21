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

function add_enquiry($name, $company, $email, $telephone, $message, $newsletter) {
    include 'connection.php';
        $sql = 'INSERT INTO enquiry(name, company, email, telephone, message, newsletter)
        VALUES(?, ?, ?, ?, ?, ?)';
    try {
        $results = $db->prepare($sql);
        $results -> bindValue(1, $name, PDO::PARAM_STR);
        $results -> bindValue(2, $company, PDO::PARAM_STR);
        $results -> bindValue(3, $email, PDO::PARAM_STR);
        $results -> bindValue(4, $telephone, PDO::PARAM_STR);
        $results -> bindValue(5, $message, PDO::PARAM_STR);
        $results -> bindValue(6, $newsletter, PDO::PARAM_INT);
        $results -> execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br>";
        return false;
    }
    return true;
}


?>
