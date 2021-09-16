<?php
<<<<<<< HEAD
	//data.php contains all data for $students
    require_once('data.php');
	//functions.php contains all functions used
	require_once('functions.php');
=======
	//Variables
	$students = [
        [
            "name" => "Trung Cao",
            "school_year" => "Junior",
            "major" => "Computer Science & Applied Software Engineering",
            "profile_pic" => "./assets/images/trung-cao.jpg",
            "facebook" => "https://www.facebook.com/thtrungid/",
            "twitter" => "https://twitter.com/",
			"instagram" => "https://www.instagram.com/jayjason.c/",
            "linkedin" => "https://www.linkedin.com/in/trungcao/",
			"dream_profession" => "Full-stack Developer",
			"dream_company" => "Apple",
			"email" => "CAOT1@nku.edu",
			"short_intro" => "Hi everyone! My name is Trung Cao. I am an international student from Vietnam. I am currently a junior in Computer Science and Applied Software Engineering. My dream job is a Full-stack Developer. I am working as a Teaching Assistant for CSC 260 – Object-Oriented Programming with Dr. Frank and as a tutor at NKU PLUS Learning. I am also doing research and projects with professors to develop websites and web application. I am taking the ASE 230 – Server-side Programming to have a deeper insight into back-end development.",
			"goal" => "My goal for this class is that I can develop content management system using both front-end and back-end at the end of this course.",
			"skills" => [
				['Java', 85],
				['JavaScript', 80],
				['Node.js & Express.js', 75],
				['HTML5 & CSS3 & Bootstrap', 90],
				['SQL', 60]
			],
			"fun_facts" => "I somehow love coding... like a lot. I can spend hours sitting in front of my computer with a coffee (of course) coding (that sounds nerdy but... meh). I also love photography and videography."
        ],
        [
            "name" => "Norton Gladwyn",
            "school_year" => "Senior",
            "major" => "Computer Information Technology",
            "profile_pic" => "./assets/images/norton-gladwyn.jpeg",
            "facebook" => "https://www.facebook.com/",
            "twitter" => "https://twitter.com/",
			"instagram" => "https://www.instagram.com/",
            "linkedin" => "https://www.linkedin.com/",
			"dream_profession" => "Server-side developer",
			"dream_company" => "Google",
			"email" => "GLADWYNN1@nku.edu",
			"short_intro" => "I have just over a year of experience as a junior software engineer with First Technology. In my short time there, I've already contributed to over a dozen projects and assisted with managing one project for one of the firm's long-time clients. Ideally, I would like to continue to specialize in mobile software engineering, an area where I know your firm excels.",
			"goal" => "I want to gain a deeper insight into back-end development after this class",
			"skills" => [
				['Android Development', 70],
				['Python', 50],
				['JavaScript', 60],
				['C & C++', 70],
				['HTML5 & CSS3 & Bootstrap', 85],
				['Testing & Debugging', 70]			
			],
			"fun_facts" => "It is truly amazing the damage that we, as parents, can inflict on our children. So why do we do it? For the most part, we don’t do it intentionally or with malice. In the majority of cases, the cause is a well-meaning but unskilled or un-thinking parent, who says the wrong thing at the wrong time, and the message sticks – as simple as that!"
        ],
        [
            "name" => "Simon Todd",
            "school_year" => "Freshman",
            "major" => "Data Science & Applied Software Engineering",
            "profile_pic" => "./assets/images/simon-todd.jpeg",
            "facebook" => "https://www.facebook.com/",
            "twitter" => "https://twitter.com/",
			"instagram" => "https://www.instagram.com/",
            "linkedin" => "https://www.linkedin.com/",
			"dream_profession" => "Back-end Developer",
			"dream_company" => "Airbnb",
			"email" => "TODDS1@nku.edu",
			"short_intro" => "Hello everybody! My name is Simon and I’m just starting first year of my Data Science & Applied Software Engineerin studies at Northern Kentucky University. Previously I used to work as a part time freelancer since I was 18 year old. I’m very into web technologies and love intersection of programming, design and business. Love what Dr Caporusso started doing for students and so much effort they are putting into it.",
			"goal" => "This class seems a little bit challenging for me but I will try my best!",
			"skills" => [
				['JavaScript', 40],
				['HTML5 & CSS3 & Bootstrap', 60]
			],
			"fun_facts" => "I enjoy being outdoors in the nature and doing activities such as running, trekking, kayaking etc. I am a big fan of performing adventure sports. Not a long time
			ago I did skydiving and I am planning to do deep sea diving as well."
        ],
        [
            "name" => "Eric Mitchell",
            "school_year" => "Sophomore",
            "major" => "Computer Information Technology & Cybersecurity",
            "profile_pic" => "./assets/images/eric-mitchell.jpeg",
            "facebook" => "https://www.facebook.com/",
            "twitter" => "https://twitter.com/",
			"instagram" => "https://www.instagram.com/",
            "linkedin" => "https://www.linkedin.com/",
			"dream_profession" => "Front-end Developer",
			"dream_company" => "Facebook",
			"email" => "MITCHELLE1@nku.edu",
			"short_intro" => "Hard-working computer science specialist. Seeking to use proven skills in leadership, debugging, and coding to meet business needs at Meed. Created proprietary ecommerce sites for retail and restaurant use. Updated mobile site at MoneyMoneyWorld.com with 95% accuracy to goals.",
			"goal" => "I hope after this class, I can be able to develop my own web application.",
			"skills" => [
				['C & C++', 65],
				['JavaScript', 50],
				['HTML5 & CSS3 & Bootstrap', 70]
			],
			"fun_facts" => "I love different sports ranging from baseball to volleyball, but my favorite is
			baseball. I even have a little collection of Cincinnati Reds hats, they are my favorite team."
        ]
    ];
>>>>>>> eea20ff0677fc006b324c9f27b5d2f3d8ba869bd
	$student = $students[$_GET['index']];
?>
<html lang="en">
<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
<<<<<<< HEAD
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
    integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

<body>
    <link rel="stylesheet" href="assets/css/detail.css" />
    <title>ASE 230 - <?= $student['name'] ?></title>
    <a href="./index.php" style="text-decoration: none;">
        <button class="btn pull-left back-btn">
            <span class="material-icons">arrow_back_ios</span>
            <span>Back</span>
        </button>
    </a>
    <div class="container text-center mb-5">
        <h1>This is ASE230 - <?= $student['name'] ?></h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="mb-2">
                    <img class="w-100" src="<?= $student['profile_pic'] ?>" alt="">
                </div>
                <div class="mb-2 d-flex">
                    <h4 class="font-weight-normal">
                        <?= $student['name'] ?>
                    </h4>
                    <div class="social d-flex ml-auto">
                        <p class="pr-2 font-weight-normal">Follow on:</p>
                        <a href="<?= $student['facebook'] ?>" class="text-muted mr-1" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="<?= $student['twitter'] ?>" class="text-muted mr-1" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="<?= $student['instagram'] ?>" class="text-muted mr-1" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="<?= $student['linkedin'] ?>" class="text-muted" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
                <div class="mb-2">
                    <ul class="list-unstyled">
                        <li class="media">
                            <span class="w-30 text-black font-weight-normal">Age: </span>
                            <label class="media-body">
                                <?= dateDiff($student["dob"]) ?>
                            </label>
                        </li>
                        <li class="media">
                            <span class="w-30 text-black font-weight-normal">Since was born: </span>
                            <label class="media-body">
                                <?= dateDiff($student["dob"], false) ?>
                            </label>
                        </li>
                        <li class="media">
                            <span class="w-30 text-black font-weight-normal">Dream
                                profession: </span>
                            <label class="media-body">
                                <?= $student['dream_profession'] ?>
                            </label>
                        </li>
                        <li class="media">
                            <span class="w-30 text-black font-weight-normal">Dream company: </span>
                            <label class="media-body">
                                <?= $student['dream_company'] ?>
                            </label>
                        </li>
                        <li class="media">
                            <span class="w-30 text-black font-weight-normal">Email: </span>
                            <label class="media-body">
                                <?= $student['email'] ?>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 pl-xl-3">
                <h5 class="font-weight-normal">Short intro</h5>
                <p><?= $student['short_intro'] ?></p>
                <div class="my-2 bg-light p-2">
                    <p class="font-italic mb-0">
                        <?= $student['goal'] ?>
                    </p>
                </div>
                <div class="mb-2 mt-2 pt-1">
                    <h5 class="font-weight-normal">Top skills</h5>
                </div>
                <?php
					for ($i = 0; $i < count($student['skills']); $i++) { ?>
                <div class="py-1">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width:<?= $student['skills'][$i][1]?>%"
                            aria-valuenow="<?= $student['skills'][$i][1]?>" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar-title"><?= $student['skills'][$i][0]?></div>
                            <span class="progress-bar-number"><?= $student['skills'][$i][1]?>%</span>
                        </div>
                    </div>
                </div>
                <?php
					}
				?>
                <h5 class="font-weight-normal">Fun fact</h5>
                <p>
                    <?= $student['fun_facts'] ?>
                </p>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
=======
	integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
	integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

<body>
	<link rel="stylesheet" href="assets/css/detail.css" />
	<title>ASE 230 - <?= $student['name'] ?></title>
	<a href="./index.php" style="text-decoration: none;">
		<button class="btn pull-left back-btn">
			<span class="material-icons">arrow_back_ios</span>
			<span>Back</span>
		</button>
	</a>
	<div class="container text-center mb-5">
		<h1>This is ASE230 - <?= $student['name'] ?></h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-6">
				<div class="mb-2">
					<img class="w-100" src="<?= $student['profile_pic'] ?>" alt="">
				</div>
				<div class="mb-2 d-flex">
					<h4 class="font-weight-normal">
						<?= $student['name'] ?>
					</h4>
					<div class="social d-flex ml-auto">
						<p class="pr-2 font-weight-normal">Follow on:</p>
						<a href="<?= $student['facebook'] ?>" class="text-muted mr-1" target="_blank">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a href="<?= $student['twitter'] ?>" class="text-muted mr-1" target="_blank">
							<i class="fab fa-twitter"></i>
						</a>
						<a href="<?= $student['instagram'] ?>" class="text-muted mr-1" target="_blank">
							<i class="fab fa-instagram"></i>
						</a>
						<a href="<?= $student['linkedin'] ?>" class="text-muted" target="_blank">
							<i class="fab fa-linkedin"></i>
						</a>
					</div>
				</div>
				<div class="mb-2">
					<ul class="list-unstyled">
						<li class="media">
							<span class="w-30 text-black font-weight-normal">Dream
								profession: </span>
							<label class="media-body">
								<?= $student['dream_profession'] ?>
							</label>
						</li>
						<li class="media">
							<span class="w-30 text-black font-weight-normal">Dream company: </span>
							<label class="media-body">
								<?= $student['dream_company'] ?>
							</label>
						</li>
						<li class="media">
							<span class="w-30 text-black font-weight-normal">Email: </span>
							<label class="media-body">
								<?= $student['email'] ?>
							</label>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-7 col-md-6 pl-xl-3">
				<h5 class="font-weight-normal">Short intro</h5>
				<p><?= $student['short_intro'] ?></p>
				<div class="my-2 bg-light p-2">
					<p class="font-italic mb-0">
						<?= $student['goal'] ?>
					</p>
				</div>
				<div class="mb-2 mt-2 pt-1">
					<h5 class="font-weight-normal">Top skills</h5>
				</div>
				<?php
					for ($i = 0; $i < count($student['skills']); $i++) { ?>
						<div class="py-1">
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width:<?= $student['skills'][$i][1]?>%" aria-valuenow="<?= $student['skills'][$i][1]?>" aria-valuemin="0" aria-valuemax="100">
								<div class="progress-bar-title"><?= $student['skills'][$i][0]?></div>
								<span class="progress-bar-number"><?= $student['skills'][$i][1]?>%</span>
								</div>
							</div>
						</div>
						<?php
					}
				?>
				<h5 class="font-weight-normal">Fun fact</h5>
				<p>
					<?= $student['fun_facts'] ?>
				</p>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
		crossorigin="anonymous"></script>
>>>>>>> eea20ff0677fc006b324c9f27b5d2f3d8ba869bd
