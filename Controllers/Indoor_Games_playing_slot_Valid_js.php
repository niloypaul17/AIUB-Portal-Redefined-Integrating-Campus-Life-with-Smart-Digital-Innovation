<!DOCTYPE html>
<html>
    <script>
        function checkgame(){
            let gamename= document.getElementById("I2").value;
            let time=document.getElementById("I3").value;
            let div=document.getElementById("c1");

            if(gamename=="" && time==""){
                div.innerHTML="Fill All Fields";
                return true;
            }
            else{
                div.innerHTML="Successfully Submitted";
                return true;
            }
            return true;
        }
    </script>
</html>