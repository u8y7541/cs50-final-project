function jumbleEffect(value) {
    var root = document.getElementById("body");
    var t = document.createElement("table");
    var tb = document.createElement("tbody");
    var row = document.createElement("tr");
    value.split("").forEach(function(i) {
	var td = document.createElement("td");
	var p = document.createElement("p");
	td.appendChild(p);
	p.innerHTML = i;
	p.style = "font-size: 50px;";
	td.style = "border: solid 3px; text-align: center;";
	td.width = "60px";
	td.height = "60px";
	row.appendChild(td);
    })
    tb.appendChild(row);
    t.append(tb);
    root.append(t);
}
