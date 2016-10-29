<title>Create Image</title>
<? echo 'start saving image';

if (isset($_POST['base64'])) {
    echo $_POST['base64'];
    $data = $_POST['base64'];
}else{
	$data = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAMAAAC6sdbXAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdp
bj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6
eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0
NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJo
dHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlw
dGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAv
IiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RS
ZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpD
cmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFu
Y2VJRD0ieG1wLmlpZDo0QTA2MDE3OTk2NEIxMUU2QjZCQTkwNTYwOEREQTkxMiIgeG1wTU06RG9j
dW1lbnRJRD0ieG1wLmRpZDo0QTA2MDE3QTk2NEIxMUU2QjZCQTkwNTYwOEREQTkxMiI+IDx4bXBN
TTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjRBMDYwMTc3OTY0QjExRTZC
NkJBOTA1NjA4RERBOTEyIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjRBMDYwMTc4OTY0QjEx
RTZCNkJBOTA1NjA4RERBOTEyIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4
bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+U1ohVQAAAAZQTFRF/+QoAAAA+XH0zQAAAA5JREFU
eNpiYMAHAAIMAAAeAAHMILKLAAAAAElFTkSuQmCC';
}


// list($type, $data) = explode(';', $data);
// list(, $data)      = explode(',', $data);
// $data = base64_decode($data);
$data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $data));

$rand = substr(md5(microtime()),rand(0,26),3);
file_put_contents('../photos/img-'.date('m-d-Y-His A e').'-'.$rand.'.png', $data);


?>