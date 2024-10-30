    function myfunction() {
        var x = document.getElementById("input1");
        var y = document.getElementById("hide1");
        var z = document.getElementById("hide2");
        if (x.type === 'password') {
            x.type = "text";
            y.style.display = "block";
            z.style.display = "none";
        }
        else {
            x.type = "password";
            y.style.display = "none";
            z.style.display = "block";
      }
    }
    function myfunction1() {
        var w = document.getElementById("input2");
        var y = document.getElementById("hide3");
        var z = document.getElementById("hide4");
        if (w.type === 'password') {
            w.type = "text";
            y.style.display = "block";
            z.style.display = "none";
        }
        else {
            w.type = "password";
            y.style.display = "none";
            z.style.display = "block";
        }
    }