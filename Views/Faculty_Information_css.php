<!DOCTYPE html>
<html>
<style>
header{
    position: relative;
    width: 100%;
    height: 100px;
    background-color: rgba(255, 255, 255, 0.9);
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
    width: 100%;
    height: 100%;
    z-index: -1;
}
#Title1{
    position: absolute;
    top: 180px;
    color: white;
    font-size: 75px;
    left: 150px;
    overflow: hidden;
    white-space: nowrap;
    border-right: .15em solid orange;
    margin: 0 auto;
    font-family: monospace;

    animation: 
              typing 3.5s steps(10,end),
              blink-caret .75s step-end infinite;
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

#F1{
    position: absolute;
    top: 350px;
    left: 650px;
    color: white;
    border: 1px solid white;
    background-color: transparent;
    backdrop-filter: blur(5px);
    border-radius: 20px;
    width: 500px;
    height: auto;
    padding: 10px;
}
#F1 h1{
    margin-bottom: 30px;
}
#Input2{
    padding: 5px;
    width: 450px;
    height: 35px;
    border: 1px solid white;
    background-color: transparent;
    backdrop-filter: blur(5px);
    color: black;
    border-radius: 50px;
    margin-bottom: 30px;
}
#Input1{
    padding: 5px;
    width: 450px;
    height: 25px;
    color: black;
    border: 1px solid white;
    background-color: transparent;
    backdrop-filter: blur(5px);
    border-radius: 50px;
    margin-bottom: 30px;
}

#c1{
    color: white;
    border: 1px solid white;
    background-color: transparent;
    backdrop-filter: blur(8px);
    border-radius: 20px;
    padding: 20px;
    font-size: 20px;
    position: absolute;
    width: auto;
    top: 350px;
    left: 1180px;
}
#INF1{
    color: black;
    background-color: rgba(255, 255, 255, 0.6);
    border-radius: 20px;
    padding: 10px;
    position: absolute;
    width: 300px;
    height: 230px;
    top: 350px;
    left: 250px;
    overflow: scroll;
}
#sub{
    width: 450px;
    height: 30px;
    border-radius: 50px;
    border: 1px solid transparent;
    background-color: blue;
    color: white;
    cursor: pointer;
    margin-bottom: 30px;
}
#sub:hover{
    border: 1px solid white;
    background-color: transparent;
    backdrop-filter: blur(5px);
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
</style>
</html>