<?php
// MySQLi
    // $servername="localhost";
    // $username ="root";
    // $password ="";
    // $database = "multiple_choice_question";

    // // Create connection
    // $conn = mysqli_connect($servername,$username,$password,$database);
    // mysqli_set_charset($conn,'UTF8');

    // // Check connection
    // if ($conn->connect_error) {
    // die("Connection failed: " . $conn->connect_error);
    // }
    // echo "Connected successfully";
    // mysqli_close($conn);

// PDO
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    
    // try {
    // $conn = new PDO("mysql:host=$servername;dbname=multiple_choice_question", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    // // set the PDO error mode to exception
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // // echo "Connected successfully";
    // } catch(PDOException $e) {
    //     echo "Connection failed: " . $e->getMessage();
    // }

    class Database {
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "multiple_choice_question";

        private $conn = null;
        private $result = null;

        // Create and check connection
        public function connect() {
            // Create connection
            $this->conn = mysqli_connect($this->servername,$this->username,$this->password,$this->database);

            // Check connection
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
            else {
                mysqli_set_charset($this->conn,'UTF8');
            }

            return $this->conn;
        }

        // Execute query
        public function execute($sql) {
            $this->result = $this->conn->query($sql);
            return $this->result;
        }

        // Get data
        public function getData() {
            if($this->result) {
                $data = mysqli_fetch_array($this->result);
            }
            else {
                $data = 0;
            }

            return $data;
        }
        
        // GET ALL
        public function getAllData($table) {
            $sql = "SELECT * FROM $table ORDER BY id DESC";
            $this->execute($sql);
            if($this->num_rows()==0) {
                $data = 0;
            }
            else {
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }

            return $data;
        }

        // GET DATA BY ID
        public function getDataByID($table, $id) {
            $sql = "SELECT * FROM $table WHERE id = '$id'";
            $this->execute($sql);

            if($this->num_rows() != 0) {
                $data = mysqli_fetch_array($this->result);
            }
            else {
                $data = 0;
            }

            return $data;
        }

        //Count row table
        public function num_rows() {
            if($this->result) {
                $num = mysqli_num_rows($this->result);
            }
            else {
                $num = 0;
            }

            return $num;
        }

        // LOGIN
        public function Login($username, $password) {
            $sql = "SELECT * FROM tbl_admins WHERE username = '$username' AND password = '$password'";
            $this->execute($sql);
            
            if($this->num_rows()==0) {
                $data = 0;
            }
            else {
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }

            return $data;
        }

        // INSERT
        public function InsertData($table, $params, $values) {
            $sql = "INSERT INTO $table($params)
            VALUES($values)";
            
            return $this->execute($sql);
        }

        // UPDATE
        public function UpdateData($table, $id, $params, $values) {
            $sql = "UPDATE $table 
            SET $params = '$values' 
            WHERE id = '$id'";

            return $this->execute($sql);
        }

        // INSERT QUESTION
        public function InsertQuestion($question, $option_a, $option_b, $option_c, $option_d, $answer) {
            $sql = "INSERT INTO tbl_questions(question, option_a, option_b, option_c, option_d, answer)
            VALUES('$question', '$option_a', '$option_b', '$option_c', '$option_d', '$answer')";
            
            return $this->execute($sql);
        }

        // UPDATE QUESTION
        public function UpdateQuestion($id, $question, $option_a, $option_b, $option_c, $option_d, $answer) {
            $sql = "UPDATE tbl_questions 
            SET question = '$question', option_a = '$option_a', option_b = '$option_b', option_c = '$option_c', option_d = '$option_d', answer = '$answer' 
            WHERE id = '$id'";

            return $this->execute($sql);
        }

        //INSERT USER
        public function InsertUser($username, $password, $full_name, $email, $phone, $address, $roleAdmin) {
            $sql = "INSERT INTO tbl_users(username, password, full_name, email, phone, address, roleAdmin)
            VALUES('$username', '$password', '$full_name', '$email', '$phone', '$address', '$roleAdmin')";
            
            return $this->execute($sql);
        }

        // INSERT CLASS
        public function InsertClass($class_name, $description) {
            $sql = "INSERT INTO tbl_classes(class_name, description)
            VALUES('$class_name', '$description')";
            
            return $this->execute($sql);
        }

        // UPDATE CLASS
        public function UpdateClass($id, $class_name, $description) {
            $sql = "UPDATE tbl_classes
            SET class_name = '$class_name', description = '$description' 
            WHERE id = '$id'";

            return $this->execute($sql);
        }
        //INSERT SUBJECT
        public function InsertSubject($id_class, $subject_name, $description) {
            $sql = "INSERT INTO tbl_subjects(id_class, subject_name, description)
            VALUES('$id_class', '$subject_name', '$description')";
            return $this->execute($sql);
        }
        //  UPDATE SUBJECT
        public function UpdateSubject($id, $id_class, $subject_name, $description) {
            $sql = "UPDATE tbl_subjects 
            SET id_class = '$id_class', subject_name = '$subject_name', description = '$description'
            WHERE id = '$id'";

            return $this->execute($sql);
        }
          
        // INSERT EXAM
       
        public function InsertExam($id_author, $id_subject, $exam_name, $start, $time, $number_question, $create_at) {
            $sql = "INSERT INTO tbl_subjects(id_author, id_subject, exam_name, start, time, number_question, create_at)
            VALUES('$id_author', '$id_subject', '$exam_name', '$start', '$time', '$number_question', '$create_at')";
            return $this->execute($sql);
        }
        //  UPDATE EXAM
        public function UpdateExam($id, $id_author, $id_subject, $exam_name, $start, $time, $number_question, $create_at) {
            $sql = "UPDATE tbl_exams 
            SET id_author = '$id_author', id_subject = '$id_subject', exam_name = '$exam_name', start = '$start', time = '$time', number_question = '$number_question', create_at = '$create_at'
            WHERE id = '$id'";

            return $this->execute($sql);
        }
        // DELETE
        public function DeleteData($id, $table) {
            $sql = "DELETE FROM $table WHERE id = '$id'";

            return $this->execute($sql);
        }

        // SEARCH
        public function SearchData($table, $col ,$input) {
            $sql = "SELECT * FROM $table WHERE $col REGEXP '$input' ORDER BY id DESC";
            $this->execute($sql);
            if($this->num_rows()==0) {
                $data = 0;
            }
            else {
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }

            return $data;
        }
    }
