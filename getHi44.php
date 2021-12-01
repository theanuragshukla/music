


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
    
    
    <form action="setHi44.php" method="post" id="myform">
        <textarea  readonly='true' id="input" type="hidden" name="data"></textarea>
    
    </form>
    
    
<script type="text/javascript">
var data;
function getdata(){
let xhr = new XMLHttpRequest();
xhr.open('get', 'https://script.google.com/macros/s/AKfycbxEE1ibCuyPpR3-6vA3tcqiFiuBfYf66_r5wiu_soxLXAWhy21i8SJQ0x8gc30NWpB4/exec');
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