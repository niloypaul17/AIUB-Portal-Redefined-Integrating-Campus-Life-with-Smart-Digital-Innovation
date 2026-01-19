<script>
    function checkclass() {
        let dept = document.getElementById("I2").value;
        let courses = document.querySelectorAll('input[name="courses[]"]:checked');
        let div = document.getElementById("c1");

        if (dept == "") {
            div.innerHTML = "Please Select Department";
            return false;
        }
        if (courses.length == 0) {
            div.innerHTML = "Select at least one completed course";
            return false;
        }
        return true;
    }
</script>