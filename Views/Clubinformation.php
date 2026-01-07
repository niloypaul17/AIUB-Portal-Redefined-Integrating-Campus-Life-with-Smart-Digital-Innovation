<?php
   require_once('../Controllers/Authenticationcheck.php');
?>

<html>
<head>
    <title>University Clubs Page</title>
    <style>
        body {
            background-color: skyblue;
        }
        h1 {
            text-align: center;
        }
        h3 {
            text-align: center;
        }
        .card {
            display: inline-block;
            width: 250px;
            margin: 15px;
            padding: 20px;
            background-color: white;
            border: 2px solid black;
            text-align: center;
        }
        .card:hover {
            background-color: red;
        }
        .infoBox {
            width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border: 2px solid black;
            display: none;
        }
        a{
            text-align: center;
            margin-left: 205px;
        }
        img {
        margin-top: 50px;
        margin-left: 895px;
        }
    </style>
</head>
<body>
<img src="../Assests/AIUB_Logo.png" width="100">
<h1>Welcome to University Clubs Page</h1>
<h3>Please Click A Card To See Detailed Information About The Club</h3>

<div style="text-align: center;">

    <div class="card" onclick="showClubInfo('club1')">
        <h3>AIUB Computer Club</h3>
        <p>Click to view details</p>
    </div>

    <div class="card" onclick="showClubInfo('club2')">
        <h3>AIUB Environment Club</h3>
        <p>Click to view details</p>
    </div>

    <div class="card" onclick="showClubInfo('club3')">
        <h3>AIUB Robotic Crew</h3>
        <p>Click to view details</p>
    </div>

    <div class="card" onclick="showClubInfo('club4')">
        <h3>AIUB Photography Club</h3>
        <p>Click to view details</p>
    </div>

    <div class="card" onclick="showClubInfo('club5')">
        <h3>AIUB Social Welfare CLub</h3>
        <p>Click to view details</p>
    </div>
    <div class="card" onclick="showClubInfo('club6')">
        <h3>AIUB Peforming Arts Club</h3>
        <p>Click to view details</p>
    </div>
    
    <div class="card" onclick="showClubInfo('club7')">
        <h3>AIUB Business Club</h3>
        <p>Click to view details</p>
    </div>

    <div class="card" onclick="showClubInfo('club8')">
        <h3>AIUB Oratory Club</h3>
        <p>Click to view details</p>
    </div>

    <div class="card" onclick="showClubInfo('club9')">
        <h3>AIUB IEEE Student Chapter</h3>
        <p>Click to view details</p>
    </div>

    <div class="card" onclick="showClubInfo('club10')">
        <h3>AIUB Arts Club</h3>
        <p>Click to view details</p>
    </div>

</div>

<div class="infoBox" id="club1">
    <h3>AIUB Computer Club</h3>
    <p>ACC commenced in 2012 with the idea of creating a platform for students to spread out the light of technology, building skills in various sectors including Content Writing, Photojournalism, Video Editing, Event Organizing, Volunteering, Development, UI/UX Design, and Graphic Design, connect with a community of members, alumni, and faculties in order to learn about the demanding skills of the current and future professional domain, and organize programs that train and test their aptitudes in the field of computer science.</p>
    <p><b>Status: </b> Accepting members now</p>
    <a href="Clubapply.php">Apply Now</a>
</div>

<div class="infoBox" id="club2">
    <h3>AIUB Environment Club</h3>
    <p>With the increasing changes of global warming, since its inception in 2023, the AIUB Environment Club (AEC) works towards protecting and preserving the environment for future generations, creating a world where humans live in harmony with nature. AEC aims to spread awareness about climate change to all the students, offering students the opportunity to serve their community and expand their skills in the process.</p>
    <p><b>Status: </b> Not accepting members now. Please keep  an eye on membership in future.</p>
</div>

<div class="infoBox" id="club3">
    <h3>AIUB Robotic Crew</h3>
    <p>AIUB Robotic Crew (ARC) is a team of undergraduate students from American International University-Bangladesh (AIUB) who is passionate about the field of robotics. The team was formed with the purpose to compete in the University Rover Challenge (URC), an annual international robotics tournament for college students held Utah, USA since its inception in 2006. ARC started off as a young team (mostly 3rd year undergraduates) with little experience but they have made up for it with their passion to learn and excel in pursuing their dreams. The team was formed around the beginning of 2015 and soon got approval from their university to initiate their involvement in the competition, and have successfully participated in the competition as one of the teams selected and invited from Bangladesh 4 times in a row (2015-18) amongst the Top 36 Finalists at the URC. Even though hundreds of students were initially interested, the team had to be filtered down to only 18 of the best. The team comprises of 14 bright and hardworking students from the Electrical and Electronic Engineering Department of AIUB and 4 exceptionally talented stalwarts from the Computer Science Department of AIUB. Some of these members had participated in robotics and programming contests and won national awards. Even with such diverse backgrounds and disciplines, the members of ARC share one common goal and that is to represent themselves, their alma mater and their nation, at the highest platform. With strong determination and work ethics, this team has grown in strength and confidence exponentially over time. They believe that through this opportunity they will be part of something special and inspire the future generations to follow in their footsteps.</p>
    <p><b>Status: </b> Accepting members now</p>
    <a href="Clubapply.php">Apply Now</a>
</div>

<div class="infoBox" id="club4">
    <h3>AIUB Photography Club</h3>
    <p>The AIUB Photography Club (AIUBPC) has been dedicated to the art and practice of photography since its inception in 2005. The club aims to provide students with opportunities to learn about the basics of photography, develop their skills, share their work by collaborating with a network of professional photographers.</p>
    <p><b>Status: </b> Accepting members now</p>
    <a href="Clubapply.php">Apply Now</a>
</div>

<div class="infoBox" id="club5">
    <h3>AIUB Social Welfare CLub</h3>
    <p>Established in 2009, the AIUB Social Welfare Club – Shomoy (ASC), aims to provide students with opportunities to learn about social welfare issues, volunteer their time to help others, and develop leadership skills. ASC works towards educating students on concerns like poverty, gender discrimination, food insecurity, etc., creating awareness on the sustainable development goals (SDGs). They work towards building a community of change-makers and motivating the youth to take action through volunteerism, fundraisers, and advocacy, making a difference in the world.</p>
    <p><b>Status: </b> Not accepting members now. Please keep  an eye on membership in future.</p>
</div>

<div class="infoBox" id="club6">
    <h3>AIUB Peforming Arts Club</h3>
    <p>Established in 1998, the AIUB Performing Arts Club (APAC) aims to provide students with a platform to channel their creativity through music and dance. APAC promotes our cultural heritage through traditional Bengali songs and dance forms, while expanding their exposure through experiencing and experimenting with a diverse set of foreign genres, encouraging young talents to pursue their dreams in performing arts.</p>
    <p><b>Status: </b> Not accepting members now. Please keep  an eye on membership in future.</p>
</div>

<div class="infoBox" id="club7">
    <h3>AIUB Business Club</h3>
    <p>ABC was established in 2009 as a learning organization with the aim of providing students with the opportunity to learn about business, develop their entrepreneurial skills, and network with other students and professionals. The club works to equip students with the knowledge and skills they need to succeed in the business world, enabling them to develop their entrepreneurial spirit and leadership capabilities, building a network of business professionals and organizations to connect with, learn from, and collaborate.</p>
    <p><b>Status: </b> Not accepting members now. Please keep  an eye on membership in future.</p>
</div>

<div class="infoBox" id="club8">
    <h3>AIUB Oratory Club</h3>
    <p>The AIUB Oratory Club (AOC) was established in 2000 with the aim of providing students with the opportunity to develop their communications skills through the practice of debating. AOC focuses on equipping students with a platform to hone their critical thinking, research capabilities, articulation and diction in the format of oration.</p>
    <p><b>Status: </b> Not accepting members now. Please keep  an eye on membership in future.</p>
</div>

<div class="infoBox" id="club9">
    <h3>AIUB IEEE Student Chapter</h3>
    <p>Since its inception in 2006, the primary aim and objectives of IEEE are centered on fostering knowledge sharing, collaboration, and the establishment of standards within the worldwide technical community. Operating as an official IEEE Student Branch, the mission of the IEEE AIUB Student Branch (SB) is to extend STEM initiatives across the nation and beyond. This is accomplished through engaging educational and technical events, as well as networking opportunities. Additionally, the branch strives to leverage technology to address humanitarian challenges and further its applications and promote the international scientific community of IEEE.</p>
    <p><b>Status: </b> Not accepting members now. Please keep  an eye on membership in future.</p>
</div>

<div class="infoBox" id="club10">
    <h3>AIUB Arts Club</h3>
    <p>Established in 2006, the purpose of the AAC is to provide students with an opportunity to explore their creativity and artistic talents. The club aims to encourage students to explore their artistic talents, provide a platform for students to share their work with others, promote creativity and foster a sense of community among them.</p>
    <p><b>Status: </b>Accepting Now</p>
    <a href="Clubapply.php">Apply Now</a>
</div>
<br>
<br>
<a href="Dashboard.php">Back</a>

<script>
var currentBox = null;

function showClubInfo(id) {
    if (currentBox !== null) {
        currentBox.style.display = "none";
    }

    currentBox = document.getElementById(id);
    currentBox.style.display = "block";
}
</script>
</body>
</html>
