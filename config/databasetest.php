<?php

  class DatabaseTest {
    // DB Params
    private $username = "USER_NAME";
    private $password = "PASS_WORD";
    private $conn;

    private $EPTST9 = "(DESCRIPTION =
      (ADDRESS = (PROTOCOL = TCP)(HOST = tst-rac.erp.ufl.edu)(PORT = 1521))
      (CONNECT_DATA =
        (SERVER = DEDICATED)
        (SERVICE_NAME = EPTST9_PRI)
      )
    )";

    private $EPQAT9 = "(DESCRIPTION =
      (ADDRESS = (PROTOCOL = TCP)(HOST = qat-rac.erp.ufl.edu)(PORT = 1521))
      (ADDRESS = (PROTOCOL = TCP)(HOST = qat-rac-dg.erp.ufl.edu)(PORT = 1521))
      (CONNECT_DATA =
        (SERVER = DEDICATED)
        (SERVICE_NAME = EPQAT9_PRI)
      )
    )";

    private $EPPRD9 = "(DESCRIPTION =
      (ADDRESS = (PROTOCOL = TCP)(HOST = prd-rac.erp.ufl.edu)(PORT = 1521))
      (ADDRESS = (PROTOCOL = TCP)(HOST = prd-rac-dg.erp.ufl.edu)(PORT = 1521))
      (CONNECT_DATA =
        (SERVER = DEDICATED)
        (SERVICE_NAME = EPPRD9_PRI)
      )
    )";

    // DB connect
    public function connect(){
      echo "test from connect";

      // $this->conn = null;
      // $this->conn = oci_connect($this->username, $this->password, $this->EPTST9);

      // if(!$this->conn) {
      //   $e = oci_error();
      //   debug_to_console($e);
      // }

      // return debug_to_console( "Success" );
    }

    public function debug_to_console( $data ) {
      $output = $data;
      if ( is_array( $output ) )
          $output = implode( ',', $output);
  
      echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
    }
  }

  DatabaseTest.connect();

  echo "test";

  ?>