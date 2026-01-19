<style>
header {
position: relative;
width: 100%;
height: 100px;
background-color: rgba(255, 255, 255, 0.95);
border-bottom: 3px solid #002147;
border-radius: 0 0 15px 15px;
}
#logo {
position: absolute;
top: 15px;
left: 15px;
width: 70px;
height: 70px;
}
#Portal {
position: absolute;
top: 15px;
left: 95px;
height: 70px;
}
#BackImg {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
z-index: -1;
filter: brightness(0.4);
object-fit: cover;
}
#Title1 {
position: absolute;
top: 130px;
color: #ffffff;
width: 100%;
text-align: center;
font-size: 60px;
font-family: serif;
animation: appear-bottom 1.5s ease-out;
}
#Title2 {
position: absolute;
top: 210px;
color: #f2f2f2;
width: 100%;
text-align: center;
font-size: 30px;
font-family: serif;
animation: appear-bottom 1.5s ease-out;
}
@keyframes appear-bottom {
from { opacity: 0; transform: translateY(30px); }
to { opacity: 1; transform: translateY(0); }
}
#B1 {
position: absolute;
top: 25px;
right: 25px;
width: 120px;
height: 50px;
background-color: #002147;
color: white;
border: none;
border-radius: 5px;
cursor: pointer;
}
#B1:hover {
background-color: #ffffff;
color: #002147;
border: 1px solid #002147;
}
#f1 {
position: absolute;
top: 320px;
left: 50%;
transform: translateX(-50%);
width: 550px;
}
.div {
font-size: 18px;
margin-bottom: 15px;
padding: 20px;
background: rgba(0, 33, 71, 0.8);
color: white;
border-radius: 10px;
border: 1px solid white;
}
#I2, #I3 {
width: 100%;
padding: 10px;
border-radius: 5px;
margin-top: 10px;
border: none;
}
#IB1 {
width: 100%;
height: 45px;
background-color: white;
color: #002147;
font-weight: bold;
border-radius: 5px;
cursor: pointer;
border: none;
}
#IB1:hover {
background-color: #002147;
color: white;
border: 1px solid white;
}
#c1 {
margin-top: 15px;
padding: 15px;
background: rgba(0,0,0,0.6);
color: #00ffcc;
border-radius: 10px;
text-align: center;
font-weight: bold;
}
#INF1 {
position: absolute;
top: 320px;
left: 50px;
width: 300px;
background: rgba(255,255,255,0.95);
padding: 20px;
border-radius: 10px;
border-left: 8px solid #002147;
color: #333;
}
#BookingTable {
position: absolute;
top: 700px;
left: 50%;
transform: translateX(-50%);
width: 900px;
background: rgba(255,255,255,0.95);
border-radius: 10px;
padding: 30px;
box-shadow: 0 0 20px rgba(0,0,0,0.4);
margin-bottom: 100px;
}
table {
width: 100%;
border-collapse: collapse;
}
th {
background: #002147;
color: white;
padding: 15px;
}
td {
padding: 15px;
border-bottom: 1px solid #ddd;
text-align: center;
color: #222;
}
</style>