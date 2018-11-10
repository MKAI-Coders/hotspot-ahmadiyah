<?php
 
include '../koneksi.php';

$convert = $_POST['convert'];

$SQL = "";

if($convert == "1")
{
	$SQL = "SELECT * from new_user";
}
else if($convert == "2")
{
	$SQL = "SELECT * FROM login_user ORDER BY id DESC";
}
else if($convert == "3")
{
	$SQL = 	"SELECT distinct(username),
			sum(AcctSessionTime) as TotalTime,
			sum(AcctInputOctets) As Upload,
			sum(AcctOutputOctets) As Download,
			sum(AcctInputOctets + AcctOutputOctets) as Bandwidth
			FROM radacct
			GROUP BY username";
	 mysql_select_db('radius');	
			//ORDER BY $orderBy DESC";
}


//$SQL = "SELECT * FROM login_user ORDER BY id DESC";



$header = '';
$result ='';
$exportData = mysql_query ($SQL ) or die ( "Sql error : " . mysql_error( ) );
 
$fields = mysql_num_fields ( $exportData );
 
for ( $i = 0; $i < $fields; $i++ )
{
    $header .= mysql_field_name( $exportData , $i ) . "\t";
}
 
while( $row = mysql_fetch_row( $exportData ) )
{
    $line = '';
    foreach( $row as $value )
    {                                            
        if ( ( !isset( $value ) ) || ( $value == "" ) )
        {
            $value = "\t";
        }
        else
        {
            $value = str_replace( '"' , '""' , $value );
            $value = '"' . $value . '"' . "\t";
        }
        $line .= $value;
    }
    $result .= trim( $line ) . "\n";
}
$result = str_replace( "\r" , "" , $result );
 
if ( $result == "" )
{
    $result = "\nNo Record(s) Found!\n";                        
}
 
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=export.xls");
header("Pragma: no-cache");
header("Expires: 0");
print "$header\n$result";
 
?>