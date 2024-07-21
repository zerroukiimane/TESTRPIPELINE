 "<? php 
if (strpos(file_get_contents(index.php'),'Hello,Jenkins!') !==false) {
echo "TestPassed";
} else { 
echo "Test Failed";
exit(1);
}
 ?> 
