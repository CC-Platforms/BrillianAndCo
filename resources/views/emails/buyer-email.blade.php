<h2>New Buyer Submission</h2>
<p><strong>Full Name:</strong> {{ $data['full_name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] ?? 'N/A' }}</p>
<p><strong>Gender:</strong> {{ ucfirst($data['gender']) }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] }}</p>
<p><strong>Interest:</strong> {{ ucfirst($data['interest']) }}</p>
<p><strong>City:</strong> {{ $data['city'] }}</p>
<p><strong>Country:</strong> {{ $data['country'] }}</p>
<p><strong>Description:</strong> {{ $data['description'] }}</p>
<p><strong>Budget:</strong> {{ $data['budget'] }}</p>