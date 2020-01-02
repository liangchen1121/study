<?php
$id=$_POST['id'];
require_once 'DAOPDO1.class.php';
$configs=array(
    'dbname'=>'study'
);
$dao=DAOPDO1::getSingleton($configs);
$sql="delete from xinxi where id=$id";
$res=$dao->query($sql);
if($res==true){
    $arr=array(
        'code'=>0,
        'msg'=>'删除成功'
    );
    echo json_encode($arr);
}else{
    $arr=array(
        'code'=>1,
        'msg'=>'删除失败'
    );
    echo json_encode($arr);

}