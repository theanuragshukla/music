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
    
    
    <form action="setArtEng.php" method="post" id="myform">
        <textarea  readonly='true' id="input" type="hidden" name="data"></textarea>
    
    </form>
    
    
<script type="text/javascript">
var data;
function getdata(){
let xhr = new XMLHttpRequest();
xhr.open('get', 'https://script.google.com/macros/s/AKfycbxbI-KNKivdVOflYVs_vsv_m1F1-tkwg9be_uklPIBfhP6Kaf7xmp7aNtAdYKwa5y4DuQ/exec');
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