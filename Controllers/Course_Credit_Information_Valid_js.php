<!DOCTYPE html>
<html>
    <script>
        function checkclass(){
        let credits=document.getElementById("I1").value;
        let department=document.getElementById("I2").value;
        let id=document.getElementById("I3").value;
        let div=document.getElementById("c1");

        if(credits=="" && department=="" && id==""){
             div.innerHTML="Fill every box from js";
             return true;
        }
        else if(credits=="" && department==""){
            div.innerHTML="Fill credit and department from js";
            return true;
        }
        else if(id==""&& department==""){
            div.innerHTML="Fill id and department from js";
            return true;
        }
        else if(id==""&& credits==""){
            div.innerHTML="Fill id and credit from js";
            return true;
        }
        else if(credits==""){
            div.innerHTML="Fill credit from js";
            return true;
        }
        else if(id==""){
            div.innerHTML="Fill id from js";
            return true;
        }
        else if(department==""){
            div.innerHTML="Fill depertment from js";
            return true;
        }else{
            div.innerHTML="successful from js";
            return true;
        }
        return true;
    }
    </script>
</html>