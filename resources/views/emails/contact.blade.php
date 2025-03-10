<!DOCTYPE html>
<html>
<head>
    <title>New Contact Message</title>
</head>
<body>
    <h1>New Message from {{ $contact->name }}</h1>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Message:</strong> {{ $contact->message }}</p>
</body>
</html>
