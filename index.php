<?php
<<<<<<< HEAD
    //data.php contains all data for $students
    require_once('data.php');
    //functions.php contains all functions used
    require_once('functions.php');
    $title = "This is ASE 230 - class of Fall 2021";
    $classTitle = "Our ASE 230 Students";
    $classDescription = "Focus on the server-side component of websites and web applications. Design and develop software that rely on client-server synchronous and asynchronous interaction and on different types of databases to enable user authentication, dynamic content creation, and access control.";
=======
    //Variables
    $title = "This is ASE 230 - class of Fall 2021";
    $classTitle = "Our ASE 230 Students";
    $classDescription = "Focus on the server-side component of websites and web applications. Design and develop software that rely on client-server synchronous and asynchronous interaction and on different types of databases to enable user authentication, dynamic content creation, and access control.";
    $students = [
        [
            "name" => "Trung Cao",
            "school_year" => "Junior",
            "major" => "Computer Science & Applied Software Engineering",
            "profile_pic" => "./assets/images/trung-cao.jpg"
        ],
        [
            "name" => "Norton Gladwyn",
            "school_year" => "Senior",
            "major" => "Computer Information Technology",
            "profile_pic" => "./assets/images/norton-gladwyn.jpeg"
        ],
        [
            "name" => "Simon Todd",
            "school_year" => "Freshman",
            "major" => "Data Science & Applied Software Engineering",
            "profile_pic" => "./assets/images/simon-todd.jpeg"
        ],
        [
            "name" => "Eric Mitchell",
            "school_year" => "Sophomore",
            "major" => "Computer Information Technology & Cybersecurity",
            "profile_pic" => "./assets/images/eric-mitchell.jpeg"
        ]
    ];
>>>>>>> eea20ff0677fc006b324c9f27b5d2f3d8ba869bd
?>

<!doctype html>
<html lang="en">

<head>
<<<<<<< HEAD
=======
    <!-- https://www.bootdey.com/snippets/view/single-advisor-profile#html -->
>>>>>>> eea20ff0677fc006b324c9f27b5d2f3d8ba869bd
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/index.css" />
    <title>
        <?= $title ?>
    </title>
</head>

<body>
    <div class="container text-center">
        <h1>
            <?= $title ?>
        </h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-lg-6">
                <!-- Section Heading-->
                <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <h3>
                        <?= $classTitle ?>
                    </h3>
                    <p>
                        <?= $classDescription ?>
                    </p>
                    <div class="line"></div>
                </div>
            </div>
        </div>
<<<<<<< HEAD
        <!-- Display all cards -->
        <div class="row">
            <?= displayCard($students); ?>
=======
        <div class="row">
            <?php
                for ($i = 0; $i < count($students); $i++) {
                    $student = $students[$i];
                    switch ($student["school_year"]) {
                        case "Freshman":
                            $school_year = "school";
                            break;
                        case "Sophomore":
                            $school_year = "schoolschool";
                            break;
                        case "Junior":
                            $school_year = "schoolschoolschool";
                            break;
                        case "Senior":
                            $school_year = "schoolschoolschoolschool";
                            break;
                        default:
                            $school_year = "";
                    }
                    ?>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <!-- Team Thumb-->
                            <div class="advisor_thumb">
                                <a href="detail.php?index=<?= $i ?>">
                                    <img src="<?= $student["profile_pic"] ?>" alt="" style="width: 315px">
                                </a>
                                <!-- Social Info-->
                                <div class="social-info"><a href="detail.php?index=<?= $i ?>"><i class="fa fa-facebook"></i></a><a
                                        href="detail.php?index=<?= $i ?>"><i class="fa fa-twitter"></i></a><a href="detail.php?index=<?= $i ?>"><i
                                            class="fa fa-linkedin"></i></a></div>
                            </div>
                            <!-- Team Details-->
                            <div class="single_advisor_details_info">
                                <h6>
                                    <?= $student["name"] ?>
                                </h6>
                                <span class="material-icons" style="color: #FFC72C;">
                                    <?= $school_year ?>
                                </span>
                                <p class="designation">
                                    <?= $student["major"] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            ?>
>>>>>>> eea20ff0677fc006b324c9f27b5d2f3d8ba869bd
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>

</html>