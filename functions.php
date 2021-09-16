<?php
//Calculate date difference from $dob to current day, returns date different in years, months, days unless specified by $age = false
function dateDiff($dob, $age = true) {
    $date1 = new DateTime($dob);
    $date2 = new DateTime(date("Y-m-d"));
    $difference = $date1->diff($date2);
    if ($age) {
        return $difference->y . ' years old';
    }
    return $difference->y.' years, ' . $difference->m . ' months, ' . $difference->d . ' days';
}

//Display icons based on school year
function schoolYear($year) {
    $school_year = '';
    for ($i = 0; $i < (int)$year; $i++) {
        $school_year .= 'school';
    }
    return $school_year;
}

//Display cards
function displayCard($students) {
    for ($i = 0; $i < count($students); $i++) {?>
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s"
                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <!-- Team Thumb-->
                <div class="advisor_thumb">
                    <a href="detail.php?index=<?= $i ?>">
                        <img src="<?= $students[$i]["profile_pic"] ?>" alt="" style="width: 315px">
                    </a>
                    <!-- Social Info-->
                    <div class="social-info"><a href="detail.php?index=<?= $i ?>"><i class="fa fa-facebook"></i></a><a
                            href="detail.php?index=<?= $i ?>"><i class="fa fa-twitter"></i></a><a
                            href="detail.php?index=<?= $i ?>"><i class="fa fa-linkedin"></i></a></div>
                </div>
                <!-- Team Details-->
                <div class="single_advisor_details_info">
                    <h6>
                        <?= $students[$i]["name"] ?>
                    </h6>
                    <span class="material-icons" style="color: #FFC72C;">
                        <?= schoolYear($students[$i]['school_year']) ?>
                    </span>
                    <p>
                        <?= dateDiff($students[$i]['dob']) ?>
                    </p>
                    <p>
                        <?= dateDiff($students[$i]['dob'], false) ?>
                    </p>
                    <hr>
                    <p class="designation" style="font-weight: bold">
                        <?= $students[$i]['major'] ?>
                    </p>
                </div>
            </div>
        </div>
    <?php
    }        
}