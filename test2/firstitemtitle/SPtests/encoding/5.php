<?php

$data = <<<EOD
<feed xmlns="http://www.w3.org/2005/Atom">
	<entry>
		<title type="text"><![CDATA[This &amp;amp; this]]></title>
	</entry>
</feed>
EOD;

$expected = 'This &amp;amp;amp; this';

?>