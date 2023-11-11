<link rel="stylesheet" href="../assets/css/form.css">
<script src="../assets/Js/form.js" ></script>
<div class="bg">
<div class="subheading">
<h1 class="sub-heading">Make Your</h3>
<h1 class="sub-heading">Booking</h3>
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
        <div class="input-icon"><i class="fa fa-envelope"></i></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="tel" placeholder="(+94)xx xxx xxxx"/>
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
    </div>

    <div class="row">
    <div class="province-district-container">      
    <div class="col-half">
        <h4>Vehicle</h4>
        <div class="input-group">
          <div class="col-third">
          <select name="car" id="car" onchange="Districts()">
    <option value="" hidden>Vehicle Type</option>
    <option value="Car">Car</option>
    <option value="Three Wheel">Three Wheel</option>
    <option value="Two Wheel">Two Wheel</option>
    </select>
          </div>
        </div>
    </div>
    </div></div>
    
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
          <select name="district" id="district" onchange="update()">
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
    <div class="province-district-container">      
      <div class="col-half">
        <h4>Starting From</h4>
        <div class="input-group">
          <div class="col-third">
          <select name="start" id="start">
    <option value="" hidden>Starting Point</option>
    <option value="Kalpitiya">Kalpitiya</option>
    <option value="Nuraicholai">Nuraicholai</option>
    <option value="Palavi">Palavi</option>
    <option value="Puttalam">Puttalam</option>
    <option value="Anuradapura">Anuradapura</option>
    <option value="Mihintala">Mihintala</option>
    <option value="Nochiyagama">Nochiyagama</option>
    <option value="Maradankadawala">maradankadawale</option>
    <option value="Trincomalee">Trincomalee</option>
    <option value="Kinniya">Kinniya</option>
    <option value="Thopur">Thopur</option>
    <option value="Mutur">Mutur</option>
    <option value="Vaharai">Vaharai</option>
    <option value="Valaichenai">Valaichenai</option>
    <option value="Eravur">Eravur</option>
    <option value="Batticaloa">Batticaloa</option>
    <option value="Kattankudy">Kattankudy</option>
    <option value="Kallaru">Kallaru</option>
    <option value="Maruthamunai">Maruthamunai</option>
    <option value="Kalmunai">Kalmunai</option>
    <option value="Saithamaruthu">Saithamaruthu</option>
    <option value="Sammanthurai">Sammanthurai</option>
    <option value="Nintavur">Nintavur</option>
    <option value="Akkaraipattu">Akkaraipattu</option>
    <option value="Colombo 1">colombo 1</option>
    <option value="Colombo 2">colombo 2</option>
    <option value="Colombo 3">colombo 3</option>
    <option value="Colombo 4">colombo 4</option>
    <option value="Colombo 5">colombo 5</option>
    <option value="Colombo 6">colombo 6</option>
</select>

        </div>
        </div>
      </div>
      <div class="col-half">
        <h4>Ending Point</h4>
        <div class="input-group">
        <div class="col-third">
          <select name="end" id="end">
          <option value="" hidden>Destination</option>
          <option value="Kalpitiya">Kalpitiya</option>
    <option value="Nuraicholai">Nuraicholai</option>
    <option value="Palavi">Palavi</option>
    <option value="Puttalam">Puttalam</option>
    <option value="Anuradapura">Anuradapura</option>
    <option value="Mihintala">Mihintala</option>
    <option value="Nochiyagama">Nochiyagama</option>
    <option value="Maradankadawala">maradankadawale</option>
    <option value="Trincomalee">Trincomalee</option>
    <option value="Kinniya">Kinniya</option>
    <option value="Thopur">Thopur</option>
    <option value="Mutur">Mutur</option>
    <option value="Vaharai">Vaharai</option>
    <option value="Valaichenai">Valaichenai</option>
    <option value="Eravur">Eravur</option>
    <option value="Batticaloa">Batticaloa</option>
    <option value="Kattankudy">Kattankudy</option>
    <option value="Kallaru">Kallaru</option>
    <option value="Maruthamunai">Maruthamunai</option>
    <option value="Kalmunai">Kalmunai</option>
    <option value="Saithamaruthu">Saithamaruthu</option>
    <option value="Sammanthurai">Sammanthurai</option>
    <option value="Nintavur">Nintavur</option>
    <option value="Akkaraipattu">Akkaraipattu</option>
    <option value="Colombo 1">colombo 1</option>
    <option value="Colombo 2">colombo 2</option>
    <option value="Colombo 3">colombo 3</option>
    <option value="Colombo 4">colombo 4</option>
    <option value="Colombo 5">colombo 5</option>
    <option value="Colombo 6">colombo 6</option>

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
  <a href="#" class="btns">Book Now</a>
</div>
</div>