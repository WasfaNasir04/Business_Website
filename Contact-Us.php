
<link rel="stylesheet" href="css/style1.css">
<div id="container">
  <h3>CONTACT US</h3>
  <p> For furthur information please contact us <br> @WTech@gmail.com or visit our main office </p>
  <form action="userinfodata.php" method="post" id="contact_form">
    <div class="name">
      <label for="name"></label>
      <input type="text" placeholder="Name" name="name" id="name_input" required>
    </div>
    <div class="Category">
      <label for="Category"></label>
      <select placeholder="Category" name="Category" id="Category_input" required>
        <option disabled hidden selected>Category line</option>
        <option>Employee</option>
        <option>Freshie</option>
        <option>Dean</option>
      </select>
    </div>
    <div class="Phone">
      <label for="Phone"></label>
      <input type="text" placeholder="Phone" name="Phone" id="Phone_input" required>
    </div>

    <div class="City">
      <label for="City"></label>
      <select placeholder="City" name="City" id="City_input" required>
        <option disabled hidden selected>City</option>
        <option>Lahore</option>
        <option>Karachi</option>
        <option>Islamabad</option>
      </select>
    </div>

    <div class="email">
      <label for="email"></label>
      <input type="email" placeholder="Email" name="email" id="email_input" required>
    </div>

    <div class="message">
      <label for="message"></label>
      <textarea name="message" placeholder="Message" id="message_input" cols="30" rows="4" required></textarea>
    </div>
    <div class="submit">
      <input type="submit" value="Contact Us" id="form_button" />
    </div>
  </form><!-- // End form -->
</div><!-- // End #container -->


