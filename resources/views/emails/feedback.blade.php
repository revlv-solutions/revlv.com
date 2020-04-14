<!DOCTYPE html>
<html>
<body>
<pre>
Message from: {{ $data['name'] }} ({{ $data['company'] }})
Email Address: {{ $data['email'] }}
Contact Number: {{ $data['contact_number'] }}

Subject: {{ $data['inquiry'] }}

Content:

{{ $data['message'] }}
</pre>
</body>
</html>
