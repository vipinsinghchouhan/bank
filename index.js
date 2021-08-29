function check() {
    if (document.getElementById("name").value == ""){
        document.getElementById("name").style.border = "thick solid red"
        return false
    }
    return true
}