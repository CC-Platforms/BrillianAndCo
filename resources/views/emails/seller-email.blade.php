<h2>New Seller Submission</h2>
<p><strong>Full Name:</strong> {{ $data['full_name'] }}</p>
<p style="color: white"><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Gender:</strong> {{ ucfirst($data['gender']) }}</p>
<p><strong>Phone Number:</strong> {{ $data['phone'] }}</p>
<p><strong>Item to Sell:</strong> {{ ucfirst($data['item']) }}</p>
<p><strong>Description:</strong> {{ $data['description'] }}</p>
<p><strong>Documents Available:</strong> {{ ucfirst($data['documents']) }}</p>
<p><strong>Condition:</strong> {{ $data['condition'] }}</p>
<p><strong>Asking Price:</strong> {{ $data['price'] }}</p>