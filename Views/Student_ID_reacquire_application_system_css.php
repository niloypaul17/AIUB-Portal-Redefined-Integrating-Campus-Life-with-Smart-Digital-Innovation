<!DOCTYPE html>
<html>
<style>
header{
    position: relative;
    width: 1518px;
    height: 100px;
    background-color: transparent;
    backdrop-filter: blur(6px);
    border: 2px solid blue;
    color: white;
    border-radius: 20px;
}
#logo{
    position: absolute;
    top: 15px;
    left: 15px;
    width: 70px;
    height: 70px;
}
#BackImg{
    position: absolute;
    top: 0px;
    left: 0px;
    width: 1536px;
    height: 728px;
    z-index: -1;
}
#Title1{
    position: absolute;
    top: 140px;
    color: white;
    font-size: 75px;
    left: 550px;
    overflow: hidden;
    white-space: nowrap;
    margin: 0 auto;
    font-family: monospace;

    animation: appear-bottom 1.5s ease-out forwards;
}
#Title2{
    position: absolute;
    top: 290px;
    color: white;
    font-size: 48px;
    left: 160px;
    overflow: hidden;
    white-space: nowrap;
    margin: 0 auto;
    font-family: monospace;

    animation: appear-bottom 1.5s ease-out forwards;
}
@keyframes appear-bottom {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1; /* End fully visible */
    transform: translateY(0);
  }
}
@keyframes typing {
  from {
    width: 0;
  }
  to {
    width: 100%;
  }
}
@keyframes blink-caret {
  from, to {
    border-color: transparent;
  }
  50% {
    border-color: white;
  }
}
#Portal{
    position: absolute;
    top: 15px;
    left: 95px;
    width: auto;
    height: 70px;
}
#B1{
    position: absolute;
    top: 15px;
    right: 15px;
    width: 100px;
    height: 70px;
    border: 1px solid transparent;
    background-color: blue;
    color: white;
    border-radius: 10px;
    cursor: pointer;
}
#B1:hover{
    border: 1px solid white;
    background-color: transparent;
    backdrop-filter: blur(6px);
}
#a1{
    position: absolute;
    top: 40px;
    right: 125px;
    width: 100px;
    text-decoration: none;
    font-size: 20px;
    color: white;
}
#a2{
    position: absolute;
    top: 40px;
    right: 255px;
    width: 100px;
    text-decoration: none;
    font-size: 20px;
    color: white;
}
#a3{
    position: absolute;
    top: 40px;
    right: 365px;
    width: 100px;
    text-decoration: none;
    font-size: 20px;
    color: white;
}
#f1{
    position: absolute;
    top: 400px;
    left: 0;
    padding: 10px;
    width: auto;
    height: auto;
}
.div{
    font-size: 20px;
    margin: 10px;
    width: 1440px;
    height: 30px;
    background-color: transparent;
    backdrop-filter: blur(24px);
    color: white;
    border-radius: 20px;
    padding: 20px;
    border: 1px solid blue;
    animation: appear-bottom 1.5s ease-out forwards;
}
#I1{
    width: 1250px;
    background-color: rgba(255, 255, 255, 0.4);
    border: 1px solid white;
    border-radius: 10px;
}
#I2{
    width: 1250px;
    background-color: rgba(255, 255, 255, 0.4);
    border: 1px solid white;
    border-radius: 10px;
}
#IB1{
    margin: 10px;
    height: 30px;
    color: blue;
    width: 1480px;
    background-color: rgba(255, 255, 255, 1.0);
    border: 1px solid blue;
    border-radius: 10px;
    cursor: pointer;
    animation: appear-bottom 1.5s ease-out forwards;
}
#Valid{
    font-size: 20px;
    margin: 10px;
    height: 30px;
    color: red;
    margin-bottom: 30px;
}
#result{
    font-size: 20px;
    margin: 10px;
    height: 30px;
    color: red;
    margin-bottom: 30px;
}
#IB1:hover{
    background-color: transparent;
    backdrop-filter: blur(24px);
    color: white;
    border: 1px solid white;
}
</style>
</html>
