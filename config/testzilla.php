<?php
  //COMPLETE: Test init echo
  //COMPLETE: Test func call to echo
  //COMPELTE: Test class with public func call to echo
  //TODO: Create conn in public func, see if echo still gets called
  //TODO: echo out conn

  //FIXME: Request continues on but never resolves

  class Testzilla {
    //DB Params
    private $username = "UF_ATTCITT_SVC";
    private $password = "TA92X9AwFa1mJha";
    private $conn;

    private $EPTST9 = "(DESCRIPTION =
      (ADDRESS = (PROTOCOL = TCP)(HOST = tst-rac.erp.ufl.edu)(PORT = 1521))
      (CONNECT_DATA =
        (SERVER = DEDICATED)
        (SERVICE_NAME = EPTST9_PRI)
      )
    )";

    // DB connect
    public function connect (){
      $this->conn = oci_connect($this->username, $this->password, $this->EPTST9);

      if($this->conn) {
        echo "TestZilla";
      } else {
        echo "ooh nooo :(";
      }
    }
  }

  echo "start";

  $testObj = new Testzilla();
  $testObj->connect();