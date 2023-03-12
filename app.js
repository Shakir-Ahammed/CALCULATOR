let x = (document.querySelector(".dis").value = "");
let dis = document.querySelector(".dis");
let st;

function myfun(val) {
  x = x + val;

  dis.value = x;
}

function ac() {
  x = document.querySelector(".dis").value = "";
  dis.value = x;
}

function result() {
  st = x;
  let res = eval(x);
  dis.value = res;
  x = res;

  $.ajax({
    url: "test.php",
    type: "POST",
    data: { data1: st, data2: res },
    success: function (result) {
      alert("succsesful");

      gethist();
    },

    error: function (result) {
      alert("faild");
    },
  });
}
function gethist() {
  $.ajax({
    url: "show.php",
    type: "GET",

    success: function (result) {
      $("#show").html(result);
    },
    error: function (result) {
      console.log(result);
    },
  });
}
