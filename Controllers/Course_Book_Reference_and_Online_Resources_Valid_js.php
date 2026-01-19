<!DOCTYPE html>
<html>
    <script>
        function checkbook(){
            let course=document.getElementById("I1").value;
            let div=document.getElementById("c1");

            if(course==""){
                div.innerHTML="Fill Course Name";
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