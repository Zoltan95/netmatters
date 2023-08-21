<?php include 'functions.php'; ?>
<!--Breadcrumbs-->
<div id="middle">
    <div class="hidden-xs breadcrumb__container">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    Our Offices
                </li>
            </ul>
        </div>
    </div>

    <!--Head-->
    <div class="section top">
        <div class="page-head">
            <div class="container">
                <h1>Our Offices</h1>
            </div>
        </div>
    </div>

    <!--Office Adresses-->
    <div class="office-address">
        <div class="service-list container">
            <div class="row office-address-row">
                <?php
                foreach (get_address_list() as $item) {
                echo "<div class='col--lg spacer-sm'>";
                    echo "<div class='block address'>";
                        echo "<div class='image'>";
                            echo "<a href='#'>";
                                echo "<img class='img-full london-office-img' src='".$item["office_img"]."' alt='".$item["office_name"]."'>";
                            echo "</a>";
                        echo "</div>";
                        echo "<div class='content'>";
                            echo "<p class='h2'>";
                                echo "<a href='#'> ".$item["office_name"]." </a>";
                            echo "</p>";
                            echo "<p class='p'>";
                                echo $item["address_line1"];
                                echo "<br>";
                                echo $item["address_line2"];
                                echo "<br>";
                                echo $item["address_line3"];
                                echo "<br>";
                                echo $item["address_line4"];
                                echo "<br>";
                                echo $item["postcode"];
                            echo "</p>";
                            echo "<div class='tel'>";
                                echo "<a class='h3 text-web' href='#'>".$item["phone_number"]."</a>";
                            echo "</div>";
                            echo "<div class='view-more'>";
                                echo "<a class='btn btn--web' href='#'>View More</a>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                    echo "<div class='map'>";
                        echo "<img src='".$item["maps_img"]."' alt='".$item["office_name"]."'>";
                    echo "</div>";
                echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>