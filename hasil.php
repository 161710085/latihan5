<?php
require_once'motor.php';

$identitas=new motor('Ali','Soul','12.000.000');
echo "Pemilik Motor..".$identitas->pemilik.'<br>';
echo "Merek Motor..".$identitas->merek.'<br>';
echo "Harga Motor..".$identitas->harga.'<br>'.'<br>';
$identitas=new motor('gema','ninja berebed','18.000.000');
echo "Pemilik Motor..".$identitas->pemilik.'<br>';
echo "Merek Motor..".$identitas->merek.'<br>';
echo "Harga Motor..".$identitas->harga.'<br>'.'<br>';
$identitas=new motor('haikal','mio','40.000.000');
echo "Pemilik Motor..".$identitas->pemilik.'<br>';
echo "Merek Motor..".$identitas->merek.'<br>';
echo "Harga Motor..".$identitas->harga.'<br>'.'<br>';
$identitas=new motor('fikri','beat','25.000.000');
echo "Pemilik Motor..".$identitas->pemilik.'<br>';
echo "Merek Motor..".$identitas->merek.'<br>';
echo "Harga Motor..".$identitas->harga.'<br>'.'<br>';
  ?>