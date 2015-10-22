<?php
$donate_file = __DIR__ . '/__donate_list.tpl.php';
$donate_content = file_get_contents($donate_file);
$display_count = 52;
$donate_list = "";
if($donate_content)
{
    $line_list = explode("\n", $donate_content);
    foreach($line_list as $line)
    {
        if($display_count-- <= 0)
        {
            break;
        }
        $donate_list .= $line."\n";
    }
    $donate_list .= "	</tbody>
</table>";
}
echo $donate_list;
