<?php
require_once("Indoor_Games_playing_slot_css.php");
require_once("../Controllers/Indoor_Games_playing_slot_Valid.php");
require_once("../Controllers/Indoor_Games_playing_slot_Valid_js.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>AIUB Indoor Games</title>
</head>
<body>
    <header>
        <img src="../Assets/AIUB_Logo.png" id="logo">
        <img src="../Assets/aiub_200X70.png" id="Portal">
        <button id="B1" onclick="window.location.href='Dashboard.php'">Dashboard</button>
    </header>
    <img src="../Assets/indoor_games_bg.jpg" id="BackImg">

    <h1 id="Title1">INDOOR GAMES</h1>
    <h1 id="Title2">Slot Reservation System</h1>

    <div id="INF1">
        <center><b>BOOKING RULES</b></center>
        <hr>
        1. Pick a game & 1-hour slot.<br>
        2. Cannot book 2 games at the same time.<br>
        3. Cannot book the same game twice.<br>
        4. Check your status below.
    </div>

    <form method="post" id="f1" onsubmit="return checkslot()">
        <div class="div">
            Game: 
            <select name="gamename" id="I2">
                <option value="">-- Select Game --</option>
                <option value="Table Tennis">Table Tennis</option>
                <option value="Pool Board">Pool Board</option>
                <option value="Carrom Board">Carrom Board</option>
                <option value="Chess">Chess</option>
                <option value="PlayStation 5">PlayStation 5</option>
            </select>
        </div>
        <div class="div">
            Slot:
            <select name="time" id="I3">
                <option value="">-- Select Slot --</option>
                <option value="11:00-12:00">11:00 AM - 12:00 PM</option>
                <option value="12:00-13:00">12:00 PM - 01:00 PM</option>
                <option value="13:00-14:00">01:00 PM - 02:00 PM</option>
                <option value="14:00-15:00">02:00 PM - 03:00 PM</option>
            </select>
        </div>
        <input type="submit" id="IB1" value="RESERVE SLOT">
        <div id="c1">
            <?php echo $massage ? $massage : "Welcome! Please select a slot."; ?>
        </div>
    </form>

    <div id="BookingTable">
        <center><h3>MY RESERVATION STATUS</h3></center>
        <table>
            <tr>
                <th>Game Name</th>
                <th>Time Slot</th>
                <th>Status</th>
            </tr>
            <?php while($row = mysqli_fetch_assoc($myList)) { ?>
            <tr>
                <td><?php echo $row['gamename']; ?></td>
                <td><?php echo $row['time']; ?></td>
                <td style="color: green; font-weight: bold;">Confirmed</td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>