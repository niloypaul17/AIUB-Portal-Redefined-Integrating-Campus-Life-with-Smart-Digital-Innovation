<!DOCTYPE html>
<html>
    <script>
        function checkstudent(){
            let department=document.getElementById("I1").value;
            let time=document.getElementById("I2").value;
            let div=document.getElementById("c1");

            if(department=="" && !time.value){
                div.innerHTML="Fill all boxs from js";
                return true;
            }
            else if(department=="" ){
                div.innerHTML="Fill department name from js";
                return true;
            }
            else if(!time.value){
                div.innerHTML="Fill time from js";
                return true;
            
            else{
                div.innerHTML="Successful from js";
                return true;
            }
            return true;
        }
    </script>
</html>