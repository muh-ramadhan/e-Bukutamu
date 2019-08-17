setInterval(function(){
  var date = new Date();
  var format = "DD-MMM-YYYY DDD";
  dateConvert(date,format)
}, 1);

function dateConvert(dateobj,format){
 var year = dateobj.getFullYear();
 var month= ("0" + (dateobj.getMonth()+1)).slice(-2);
 var date = ("0" + dateobj.getDate()).slice(-2);
 var hours = ("0" + dateobj.getHours()).slice(-2);
 var minutes = ("0" + dateobj.getMinutes()).slice(-2);
 var seconds = ("0" + dateobj.getSeconds()).slice(-2);
 var day = dateobj.getDay();
 var months = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
 var converted_date = "";

switch(format){
 case "DD-MM-YYYY":
  converted_date = date + " / " + month + " / " + year;
  break;
case "DD-MMM-YYYY DDD":
  converted_date = date + " / " + months[parseInt(month)-1] + " / " + year
  + " # " + hours + ":" + minutes + ":" + seconds;
  break;
}
document.getElementById("waktu").innerHTML = converted_date;
}
