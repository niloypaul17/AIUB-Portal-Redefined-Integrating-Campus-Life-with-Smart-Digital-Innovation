<script>
function checkclass(){
    let checked = document.querySelectorAll('input[name="completed_courses[]"]:checked');
    if(checked.length == 0) {
        alert("Please mark at least one course if completed.");
        return false;
    }
    return true;
}
</script>