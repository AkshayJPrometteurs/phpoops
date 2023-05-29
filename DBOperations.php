<?php
    include_once('DBConfig.php');
    class DBOperations{
        public static function insert($table, $values){
            foreach($values as $key => $value){
                $dbfields[] = $key;
                $val[] = "'".$value."'";
            }
            $sql = 'INSERT INTO '.$table.'('.implode(',', $dbfields).')'.'VALUES'.'('.implode(',',$val).')';
            $result = DBConfig::prepare($sql);
            if($result){
                echo "Insertion Successfully";
            }else{
                echo "Insertion Not Successfully";
            }
        }

        public static function getData($table,$id){
            $sql = 'SELECT * FROM '.$table.' WHERE id = '.$id;
            $result = DBConfig::prepare($sql);
            $rows = mysqli_fetch_assoc($result);
            return $rows;
        }
    }
?>