<link rel="stylesheet" href="../assets/css/form.css">
<script src="../assets/Js/form.js" ></script>
<div class="subheading">
<h3 class="sub-heading">BOOKING YOUR JOURNEY</h3>
</div>
<div class="container">
  <form>
    <div class="row">
      <h4>Personal Details</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Full Name"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="email" placeholder="Email Adress"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="tel" placeholder="(+94)xx xxx xxxx"/>
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
    </div>
    <div class="row">
    <div class="province-district-container">      <div class="col-half">
        <h4>Province</h4>
        <div class="input-group">
          <div class="col-third">
          <select name="province" id="province" onchange="updateDistricts()">
    <option value="" hidden>Select Your Province</option>
    <option value="Northern Province">Northern Province</option>
    <option value="North Central Province">North Central Province</option>
    <option value="North Western Province">North Western Province</option>
    <option value="Eastern Province">Eastern Province</option>
    <option value="Central Province">Central Province</option>
    <option value="Western Province">Western Province</option>
    <option value="Southern Province">Southern Province</option>
    <option value="Sabragamuwa Province">Sabragamuwa Province</option>
    <option value="Uva Province">Uva Province</option>
</select>

        </div>
        </div>
      </div>
      <div class="col-half">
        <h4>District</h4>
        <div class="input-group">
        <div class="col-third">
          <select name="district" id="district">
          <option value="" hidden>Select Your District</option>
    <option value="Puttalam">Puttalam</option>
    <option value="Kurunagala">Kurunagala</option>
    <option value="colombo">Colombo</option>
    <option value="Gampaha">Gampaha</option>
    <option value="Kalutara">Kalutara</option>
    <option value="Jaffna">Jaffna</option>
    <option value="Mannar">Mannar</option>
    <option value="Kilinochi">Kilinochi</option>
    <option value="Mullaitivu">Mullaitivu</option>
    <option value="Vavuniya">Vavuniya</option>
    <option value="Trincomalee">Trincomalee</option>
    <option value="Batticaloa">Batticaloa</option>
    <option value="Ampra">Ampara</option>
    <option value="Kandy">Kandy</option>
    <option value="Nuwaraliya">Nuwaraliya</option>
    <option value="Matala">Matala</option>
    <option value="Galle">Galle</option>
    <option value="Matara">Matara</option>
    <option value="Hambantota">Hambantota</option>
    <option value="Anuradapura">Anuradapura</option>
    <option value="Polanaruwa">Polanaruwa</option>
    <option value="Ratnapura">Ratnapura</option>
    <option value="Kegalle">Kegalle</option>
    <option value="Badulla">Badulla</option>
    <option value="Monaragala">Monaragala</option>

</select>

        </div>
        </div>
      </div>
      </div>
    </div>
    
    <div class="row">
      <h4>Terms and Conditions</h4>
      <div class="input-group">
        <input id="terms" type="checkbox"/>
        <label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
      </div>
    </div>
  </form>
</div>