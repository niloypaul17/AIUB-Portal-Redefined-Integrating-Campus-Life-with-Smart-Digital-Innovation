<?php
   require_once('../Controllers/Authenticationcheck.php');
?>

<html>
<head>
    <title>Dashboard Page</title>
    <style>
        nav {
            background-color: skyblue;     
            padding: 20px;
            width: 98%;                
        }
        nav a {
            display: inline-block;       
            color: white;              
            padding: 5px;           
            text-decoration: none;       
            font-size: 17.5px;
        }
        nav a:hover {
            background-color: white;
            color: black;                
            border-radius: 5px;
        }
        
        div {
            width: 98%;
            font-size: 17.5px;
        }
        .logo {
        text-align: center;
        margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="logo">
    <img src="../Assests/AIUB_Logo.png" width="100">
    <h2>Welcome to Dashboard</h2>
    </div>
    <nav>
        <a href="Lost and Found.php">Lost and Found</a>
        <a href="Anonymousform.php">Complaint Form</a>
        <a href="STapplyform.php">ST Apply</a>
        <a href="Clubinformation.php">Clubs</a>
        <a href="#">Swimming Pool</a>
        <a href="#">Canteen</a>
        <a href="#">Lab slot</a>
        <a href="#">Parking</a>
        <a href="#">Alumni Information</a>
        <a href="#">Gymnasium</a>
        <a href="#">Printing</a>
        <a href="#">File sharing</a> 
        <a href="#">Events</a> 
        <a href="#">Map</a> 
        <a href="Faculty_Information_html.php">Faculty</a>
        <a href="Class_Routine_and_Upcoming_Registration_Course_Generator_html.php">Class Routine</a>
        <a href="Course_Book_Reference_and_Online_Resources_html.php">Book Reference</a>
        <a href="Indoor_Games_playing_slot_html.php">Indoor Games</a>
        <a href="Student_ID_reacquire_application_system_html.php">Student ID Reacqrire</a>      
    </nav>

    <h2><b>Introdcution: </b></h2>
    <div>Since its inception in 1994, AIUB has been at the forefront in Computing by producing technically skilled and competent IT Professionals to meet the needs of the local and international market. The faculty has experienced significant growth over the last few years and is now home of more than 100 full time faculty,with strong groups in theory, systems, graphics, media, programming languages, computational science, security, AI, Cloud Computing, IoT and robotics.</div>  
    <hr>
    <h2><b>Vision: </b></h2>
    <div>The Faculty of Science and Technology is committed to equip students with world class scientific research and industry-oriented knowledge and skills.</div>
    <hr>
    <h2><b>Mission: </b></h2>
    <div>Mission The mission of the Department of Computer Science of AIUB is to educate students in a student-centric dynamic learning environment; to provide advanced facilities for conducting innovative research and development to meet the challenges of the modern era of computing, and to motivate them towards a life-long learning process. To create highly skilled and globally competitive professionals with advanced theoretical and applied knowledge responsive to the needs of the society in the discipline of science and technology.</div>
    <hr>
    <h2><b>Goals: </b></h2>
    <div>
        <ul>
            <li>Enrich the computer education curriculum to suit the needs of the industry- wide standards for both domestic and international markets</li>
            <li>Equip the faculty and staff with professional, modern technological and research skills</li>
            <li>Upgrade continuously computer hardwares, facilities and instructional materials to cope with the challenges of the information technology age</li>
            <li>Initiate and conduct relevant research, software development and outreach services</li>
            <li>Establish linkage with industry and other IT-based organizations/institutions for sharing of resources and expertise, and better job opportunities for students</li>
        </ul>
    </div>
    <hr>
    <footer>
        <h2>Contact Us:</h2>
        <p>American International University-Bangladesh (AIUB)</p>
        <p>Faculty of Science and Technology</p>
        <p>Ka-66/1, Kuratoli Road, Kuril, Khilkhet, Dhaka 1229, Bangladesh</p>
        <p>Hotline: 01844115004</p>
    </footer>
    <a href="../Controllers/Logout.php">Logout</a>
</body>
</html>
