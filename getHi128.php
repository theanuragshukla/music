


<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
    #myform{
        opacity:0;
    }
</style>
</head>
<body>
    
    
    <form action="setHi128.php" method="post" id="myform">
        <textarea  readonly='true' id="input" type="hidden" name="data"></textarea>
    
    </form>
    
    
<script type="text/javascript">
var data;
function getdata(){
let xhr = new XMLHttpRequest();
xhr.open('get', 'https://script.google.com/macros/s/AKfycbzpyrPrILBo3h3oy0IzankybqESQDbtrec2Ut7Gmo1wg2ddaAhr_GalP6z82qzkXDqe/exec');
xhr.send();

xhr.onload = function() {
    data =(xhr.response);
    print();
    
};
};
function print(){
      document.getElementById('input').value=data;
      document.getElementById('myform').submit();
}

getdata();
</script>
</body>
</html>