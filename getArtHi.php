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
    
    
    <form action="setArtHi.php" method="post" id="myform">
        <textarea  readonly='true' id="input" type="hidden" name="data"></textarea>
    
    </form>
    
    
<script type="text/javascript">
var data;
function getdata(){
let xhr = new XMLHttpRequest();
xhr.open('get', 'https://script.google.com/macros/s/AKfycbyYSfKAwNTJqo1MSuS7eIOBd7ydd2O4WYDcw1XMUPwumS8xv6dykJ8IggAlfEI6j4Aa/exec');
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