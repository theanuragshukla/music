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
    
    
    <form action="setEng128.php" method="post" id="myform">
        <textarea  readonly='true' id="input" type="hidden" name="data"></textarea>
    
    </form>
    
    
<script type="text/javascript">
var data;
function getdata(){
let xhr = new XMLHttpRequest();
xhr.open('get', 'https://script.google.com/macros/s/AKfycbz7iXA-oguI1MdxoiBmR2LjZ3-B3_7b3KS7blVROpY1DeXUXEJUqc8R0Lj6SUwZvahf2A/exec');
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