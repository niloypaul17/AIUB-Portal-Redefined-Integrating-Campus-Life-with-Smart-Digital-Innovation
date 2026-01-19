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
    <img src="../Assets/AIUB_Logo.png" width="100">
    <h2>Welcome to Dashboard</h2>
    </div>
    <nav>
        <a href="Lost and Found.php"><b>Lost and Found</b></a>
        <a href="Anonymousform.php"><b>Complaint Form</b></a>
        <a href="STapplyform.php"><b>Student Tutor Apply</b></a>
        <a href="Clubinformation.php"><b>Clubs</b></a>
        <a href="Swimmingpoolregistration.php"><b>Swimming Pool</b></a>
        <a href="Canteenmenu.php"><b>Canteen</b></a>
        <a href="Labslotbooking.php"><b>Lab Slot</b></a>
        <a href="Carparkingmanagementsystem.php"><b>Vehicle Parking</b></a>
        <a href="Alumniinformationandinternshipfinder.php"><b>Alumni Information</b></a>
        <a href="Gymnasiumregistrationform.php"><b>Gymnasium</b></a>
        <a href="Documentprintingsytem.php"><b>Print Document</b></a>
        <a href="Universityfilesharingsystem.php"><b>File Share</b></a> 
        <a href="Eventandnoticedisplay.php"><b>Events</b></a> 
        <a href="Universityareasystem.php"><b>AIUB Map</b></a> 
        <a href="Faculty_Information_html.php"><b>Faculty Information</b></a>
        <a href="Course_Credit_Information_html.php"><b>Course & Credit Information</b></a>
        <a href="Course_Book_Reference_and_Online_Resources_html.php"><b>Book Reference</b></a>
        <a href="Indoor_Games_playing_slot_html.php"><b>Indoor Games</b></a>
        <a href="Student_ID_application_system_html.php"><b>Student ID Application System</b></a>      
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