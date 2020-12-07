<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="csrf-token" content="{{ csrf_token() }}">

 <title>用户表格</title>
 <style>
    #a{
        background:#ccc;
        color:blue;
        margin:0px auto;
        width:230px;
    }

 </style>
</head>

<body>
    <form action="put" method="post">
    <div id=a>
    <p> 
         {{csrf_field()}} 
         <input type="hidden" name="_method" value="put">
     User:

     <input type="text" name="user">
    </p>

    <p>
    
     Pass
     <input type="password" name="pass">
    </p>

    <p>
    <input type="submit" name="提交按钮">

    <input type="reset" name="重置">
    </p>
    </div>

    </table>

  </form>
 
</body>
</html>