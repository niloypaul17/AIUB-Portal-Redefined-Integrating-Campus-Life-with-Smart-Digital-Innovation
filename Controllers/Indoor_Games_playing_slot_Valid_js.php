<script>
function checkslot() {
    let game = document.getElementById("I2").value;
    let time = document.getElementById("I3").value;
    if (game == "" || time == "") {
        document.getElementById("c1").innerHTML = " Please select all options.";
        return false;
    }
    return true;
}
</script>