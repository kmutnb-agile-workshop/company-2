<?php

use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase {
  public function testTopup() {
    $User = new User();
    $result = $User->topup('0899070745',1000);
    $this->assertEquals('การเติมเงินเสร็จสมบูรณ์',$result);
  }
}
