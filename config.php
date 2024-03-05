<?php

    $conn = mysqli_connect("localhost", "root", "", "myphp") or die ("database connection failed"); // database connectin kora holo.

    class dbOparetion{

            // delete method.....

        public function delateQuery($conn, $delateQuery, $location) {
            $sql = mysqli_query($conn, $delateQuery);
            if( $sql == true ) {
                header("location: $location");
            }
            else{
                header("location: $location");
            }
        }  // end delete method


                    // edit method....
                    public function updateQuery($conn, $updateQ) {
                        $sql = mysqli_query($conn, $updateQ);
                        if( $sql == true ) {
                            return $sql;
                        }
                        else{
                            return $sql;
                        }
                    } // end edit method


        // Update method

        public function uQuery($conn, $update, $location) {

            $uQuery = mysqli_query($conn, $update);

            if( $uQuery == true ) {
                header("location: $location");
            }
            else{
                header("location: $location");
            }
        } // end update method


                        // data insert method....
                        public function insertDB($conn, $query, $location){

                            if($conn == true){
                
                                // insert query
                            $sql=mysqli_query($conn,$query);
                            
                                if($sql){
                                    // echo 'done';
                                    header("location: $location");
                                }

                                else{
                                    echo 'sorry';
                                    // header("location: $location");
                                }
                            }
                            
                            else{
                                echo 'invalid db';
                            }
                        } // end data insert method

    }

    


?>