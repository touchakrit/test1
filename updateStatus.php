<?
      require("DBOperation/DBOperation.php");
      $Obj = new db_operation();
      $Obj->conn_db();


          $subtask_id = $_POST['subtask_id'];
          $status_id = $_POST['status_id']; 


          $srtquery ='update task  set status_id ='.$status_id."where task_id=".$subtask_id;
          mysql_query($sqlstatment) or die(mysql_error());         

?>