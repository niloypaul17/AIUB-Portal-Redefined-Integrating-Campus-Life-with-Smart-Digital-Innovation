<!DOCTYPE html>
<html>
    <script>
        function faculty(){
            let fid=document.getElementById("Input1");
            let div=document.getElementById("c1");

           if(fid=="" ){
               div.innerHTML="Fill name";
               return false;
            }
          else{
              div.innerHTML="Successfull";
              return false;
           }
           return false;
      }
    </script>
</html>