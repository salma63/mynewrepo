var id = document.getElementById("length");
console.log("Hello, World!");
//console.log($('#length'));
//console.log(id.value);
//console.log(parseInt(id.value));
for (let i = 1; i <= parseInt(id.value); i++) {
  //  console.log(i);
    var x="color"
    var y="divColor";
    var idd = document.getElementById(x.concat(i));
    var iddivcolor = document.getElementById(y.concat(i));
  //  console.log(idd.dataset.style);
    idd.style.backgroundColor = idd.dataset.style;
    iddivcolor.style.backgroundColor = iddivcolor.dataset.style;
}

/*var color = document.getElementById("red").data.color;
console.log(color);*/
