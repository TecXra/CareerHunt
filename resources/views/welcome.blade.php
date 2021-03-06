<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="{{ asset('css/jquery.js')}}"></script>
<style>
html, body
{
    height: 100%;
}
body
{
    margin: 0;
    padding: 0;
    width: 100%;
    display: table;
    font-weight: 100;
    font-family: 'Lato';
}
.container
{
    text-align: center;
    display: table-cell;
    vertical-align: middle;
}
.content
{
    text-align: center;
    display: inline-block;
}
.title
{
    font-size: 96px;
    transition: transform 3s;
}
.title:hover
{
    transform: scale(1.5,1.5);
/*    transform: rotate(360deg);*/
}
a
{
    text-decoration: none;
    font-family: Algerian;
    color: rgba(80,140,200,100);
}
a:hover
{
    text-shadow: 4px 10px 7px black;
}
</style>
</head>

<script type="text/javascript">
    $(function(){
        $('#asif').click(function(){
        window.alert('Loading: Please Wait...');
        })
    })
</script>

<body>
    <div class="container">
        <div class="content">
            <div class="title" id="asif"><a href="{{ URL:: to('index')}}">Career Hunt</a></div>
        </div>
    </div>
</body>
</html>
