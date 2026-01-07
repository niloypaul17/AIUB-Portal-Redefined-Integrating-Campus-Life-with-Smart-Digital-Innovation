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
    top: 180px;
    color: white;
    font-size: 75px;
    left: 50px;
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
    left: 500px;
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
#Valid{
    font-size: 20px;
    margin: 10px;
    height: 30px;
    color: red;
    margin-bottom: 30px;
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
</style>
</html>
