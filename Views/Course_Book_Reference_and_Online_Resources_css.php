<style>
header {
    position: relative;
    width: 100%;
    height: 100px;
    background-color: rgba(255, 255, 255, 0.95);
    border-bottom: 3px solid #002147;
    border-radius: 0 0 10px 10px;
}
#logo {
    position: absolute;
    top: 15px;
    left: 15px;
    width: 70px;
    height: 70px;
}
#BackImg {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    filter: brightness(0.5);
}
#Title1 {
    position: absolute;
    top: 140px;
    color: #f2f2f2;
    font-size: 75px;
    text-align: center;
    left: 480px;
    font-family: serif;
    animation: appear-bottom 1.5s ease-out forwards;
}
#Title2 {
    position: absolute;
    top: 290px;
    color: #ffffff;
    text-align: center;
    font-size: 48px;
    left: 260px;
    font-family: serif;
    animation: appear-bottom 1.5s ease-out forwards;
}
@keyframes appear-bottom {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}
#Portal {
    position: absolute;
    top: 15px;
    left: 95px;
    height: 70px;
}
#B1 {
    position: absolute;
    top: 15px;
    right: 15px;
    width: 100px;
    height: 70px;
    background-color: #002147;
    color: #ffffff;
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
    top: 400px;
    left: 650px;
    width: 560px;
}
.div {
    font-size: 20px;
    margin-bottom: 10px;
    background-color: rgba(0, 33, 71, 0.7);
    color: #ffffff;
    border-radius: 10px;
    padding: 20px;
    border: 1px solid #ffffff;
}
#I1 {
    width: 300px;
    padding: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
}
#IB1 {
    width: 100%;
    height: 40px;
    color: #002147;
    background-color: #ffffff;
    border: 1px solid #002147;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
}
#IB1:hover {
    background-color: #002147;
    color: #ffffff;
}
#c1 {
    color: #ffffff;
    background-color: rgba(0, 0, 0, 0.5);
    border: 1px solid #ffffff;
    border-radius: 10px;
    padding: 15px;
    margin-top: 15px;
    text-align: center;
}
#c1 a {
    color: #00d4ff;
    text-decoration: underline;
    font-weight: bold;
}
#INF1 {
    color: #002147;
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 10px;
    text-align: center;
    padding: 50px 20px;
    position: absolute;
    width: 280px;
    top: 400px;
    left: 300px;
    border-top: 5px solid #002147;
}
</style>