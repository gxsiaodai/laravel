<!--<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 
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
    <form action="yun1" method="post">
    <div id=a>
    <p> 
         {{csrf_field()}} 
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

    <table border=1  width="800px"  align="center">
     <th>ID</th>
     <th>Img</th>
     <th>Pos</th> 

   @foreach($data as $value)
   <tr>
     <td>{{$value->id}}</td>
     <td>{{$value->img}}</td>
     <td>{{$value->pos}}</td>
    </tr> 
   @endforeach

    </table>

  </form>
 
</body>
</html>-->
<!DOCTYPE html>
<html>
<head>
   <meta charset='utf-8'/>
   <title>数据发送与接收</title>
</head>
<body>
<form action="yun1" method='post'>
  
<div>

{{csrf_field()}}
<input type='text' name='user' />

<input type='text' name='pass' />
<input type='submit' value='提交'/>
</div>
</form>
</body>
</html>