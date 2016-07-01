<?php
if (isset($GLOBALS["HTTP_RAW_POST_DATA"]))
{
  // Get the data
  $data=$GLOBALS['HTTP_RAW_POST_DATA'];
  // but a real application can specify filename in POST variable
  $filename = 'Request';
  $extension = '.txt';
  copy($filename.$extension,$filename.time().$extension);
  $fp = fopen( $filename.$extension, 'wb' );
  fwrite( $fp, $data);
  fclose( $fp );
}
?>
