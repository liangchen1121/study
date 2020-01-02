<?php
require_once 'DAOPDO1.class.php';
$configs=array(
    'dbname'=>'study'
);
$dao=DAOPDO::getSingleton($configs);
$sql="select * from xinxi";
$arr=$dao->fetchAll($sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <th>姓名</th>
        <th>工资</th>
        <th>城市</th>
        <th>编辑</th>
    </tr>
    <?php foreach ($arr as $key=>$value) { ?>
    <tr>
        <td><?php echo $value['name'] ?></td>
        <td><?php echo $value['pass'] ?></td>
        <td><?php echo $value['email'] ?></td>
        <td><a id="<?php echo $value['id'] ?>" href="javascript:void(0)">删除</a></td>
    </tr>
    <?php } ?>
</table>
<script src="jquery.min.js"></script>
<script>
    $("a").click(function () {
        $id=$(this).attr('id');
        $.ajax({
            url:'03.php',
            type:'post',
            data:{id:$id},
            dataType:'json',
            success:function (data) {
                console.log(data);
                if(data.code==0){
                    alert('删除成功');
                }else{
                    alert('删除失败');
                }
            }
        })
    })
</script>
</body>
</html>
