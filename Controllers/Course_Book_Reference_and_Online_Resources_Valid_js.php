<!DOCTYPE html>
<html>
    <script>
        function checkbook(){
            let course=document.getElementById("I1").value;
            let div=document.getElementById("c1");

            if(course==""){
                div.innerHTML="Fill course name from js";
                return true;
            }
            else{
                div.innerHTML="successful from js";
                return true;
            }
            return true;
        }
    </script>
</html>