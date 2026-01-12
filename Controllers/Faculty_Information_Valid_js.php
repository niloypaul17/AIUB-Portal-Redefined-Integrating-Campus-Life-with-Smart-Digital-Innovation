
<script>
    function ajaxapply(){
        let fname=document.getElementById("Input1").value;

        let faculty1 ={
            'name': fname
        };

        let data=JSON.stringify(faculty1);
        let xhttp = new XMLHttpRequest();
        xhttp.open('POST', '../Models/datafaculty.php', true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send('faculty='+data);
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                let userData = JSON.parse(this.responseText);
                document.getElementById('c1').innerHTML = `
                Name: ${userData.facultyname}<br><br>
                Position: ${userData.position}<br><br>
                Email: ${userData.email}<br><br>
                Room Number: ${userData.location}<br><br>`;
            }
        }
    }
</script>