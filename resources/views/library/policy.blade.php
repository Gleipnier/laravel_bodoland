@extends('layouts.bookapp')
@extends('layouts.bookcss')
@section('title', 'Library Services')
<style>
  .policy-section {
  padding: 50px 20px;
  background-color: #f9f9f9;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
}

.policy-title {
  text-align: center;
  font-size: 36px;
  color: #004d40;
  margin-bottom: 30px;
}

.policy-item {
  margin-bottom: 40px;
}

.policy-header {
  font-size: 24px;
  color: #004d40;
  margin-bottom: 10px;
}

.policy-item p, .policy-item ul {
  font-size: 16px;
  color: #555;
}

.policy-item ul {
  padding-left: 20px;
}

.policy-item ul li {
  list-style-type: disc;
  margin-bottom: 5px;
}

@media (max-width: 768px) {
  .policy-title {
    font-size: 28px;
  }

  .policy-header {
    font-size: 20px;
  }

  .policy-item p, .policy-item ul {
    font-size: 14px;
  }
}

</style>
@section('content')

<section class="policy-section">
  <div class="container">
    <h1 class="policy-title">Our Policies</h1>

    <!-- Privacy Policy Section -->
    <div class="policy-item">
      <h2 class="policy-header">Privacy Policy</h2>
      <p>
        We value your privacy and are committed to protecting your personal data. This privacy policy explains what information we collect, how we use it, and your rights regarding your data.
      </p>
      <ul>
        <li>Information we collect: personal information, usage data, etc.</li>
        <li>How we use your information: for improving user experience, providing services, etc.</li>
        <li>Your rights: you have the right to access, correct, or delete your personal data.</li>
      </ul>
    </div>

    <!-- Terms of Service Section -->
    <div class="policy-item">
      <h2 class="policy-header">Terms of Service</h2>
      <p>
        These terms govern your use of our website. By using our services, you agree to comply with these terms and any updates that may be applied from time to time.
      </p>
      <ul>
        <li>Usage restrictions: You agree not to misuse our services.</li>
        <li>Termination: We may terminate or suspend access to our services at any time.</li>
        <li>Liabilities: We are not liable for any indirect damages arising from the use of our services.</li>
      </ul>
    </div>

    <!-- Cookies Policy Section -->
    <div class="policy-item">
      <h2 class="policy-header">Cookies Policy</h2>
      <p>
        We use cookies to enhance your browsing experience. By continuing to use our site, you agree to our use of cookies as described in this policy.
      </p>
      <ul>
        <li>What are cookies: small data files that improve functionality and performance.</li>
        <li>Types of cookies we use: session cookies, preference cookies, analytics cookies, etc.</li>
        <li>How to manage cookies: You can control and delete cookies through your browser settings.</li>
      </ul>
    </div>

  </div>
</section>
@endsection

