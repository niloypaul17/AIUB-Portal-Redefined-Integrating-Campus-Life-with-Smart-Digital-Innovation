<!DOCTYPE html>
<html>
    <script>
        function checkstudent(){
            let department=document.getElementById("I1").value;
            let time=document.getElementById("I2").value;
            let div=document.getElementById("c1");

            if(department=="" && !time.value){
                div.innerHTML="Fill All Fields";
                return true;
            }
            else if(department=="" ){
                div.innerHTML="Fill Department Name";
                return true;
            }
            else if(!time.value){
                div.innerHTML="Fill Date";
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