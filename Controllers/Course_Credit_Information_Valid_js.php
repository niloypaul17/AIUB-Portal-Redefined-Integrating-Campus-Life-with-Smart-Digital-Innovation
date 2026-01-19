<!DOCTYPE html>
<html>
    <script>
        function checkclass(){
        let credits=document.getElementById("I1").value;
        let department=document.getElementById("I2").value;
        let div=document.getElementById("c1");

        if(credits=="" && department==""){
             div.innerHTML="Fill All Fields";
             return true;
        }
        
        else if(credits==""){
            div.innerHTML="Fill Credit";
            return true;
        }
        
        else if(department==""){
            div.innerHTML="Fill Department";
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