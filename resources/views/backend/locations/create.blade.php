

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
    <form method="post" action="{{ route('location.index') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <input type="text" name="name" class="form-control" maxlength="128" id="name"/> 
        <label class="placeholder">Business Name <span class="error">*</span></label>
        <br>
        <input type="text" name="website_url" class="form-control" id="website_url"/>
        <label class="placeholder">Website <span class="error">*</span></label>
        <br>
        <select name="region_code" class="form-control pre-field-focused" id="region-code"><option value="India">India</option></select>
        <label class="placeholder">Country </label>
        <br>
        <select name="state_id" class="form-control pre-field-focused" id="state-id"><option value="">Select State</option><option value="4">Andaman &amp; Nicobar Islands</option><option value="5">Andhra Pradesh</option><option value="6">Arunachal Pradesh</option><option value="7">Assam</option><option value="8">Bihar</option><option value="9">Chandigarh</option><option value="10">Chattisgarh</option><option value="38">Chhattisgarh</option><option value="11">Dadra &amp; Nagar Haveli</option><option value="12">Daman &amp; Diu</option><option value="1">Delhi</option><option value="13">Goa</option><option value="14">Gujarat</option><option value="3">Haryana</option><option value="15">Himachal Pradesh</option><option value="16">Jammu &amp; Kashmir</option><option value="17">Jharkhand</option><option value="18">Karnataka</option><option value="19">Kerala</option><option value="20">Lakshadweep</option><option value="21">Madhya Pradesh</option><option value="22">Maharashtra</option><option value="23">Manipur</option><option value="24">Meghalaya</option><option value="25">Mizoram</option><option value="26">Nagaland</option><option value="37">Odisha</option><option value="27">Orissa</option><option value="28">Pondicherry</option><option value="29">Punjab</option><option value="30">Rajasthan</option><option value="31">Sikkim</option><option value="32">Tamil Nadu</option><option value="36">Telangana</option><option value="33">Tripura</option><option value="2">Uttar Pradesh</option><option value="34">Uttarakhand</option><option value="35">West Bengal</option></select>                                    <label class="placeholder">State <span class="error">*</span></label>
        <br>
        <select name="city_id" class="form-control pre-field-focused" id="city-id"><option value="1">Agra</option></select>
        <label class="placeholder">City <span class="error">*</span></label>
        <br>
        <input type="text" name="address" class="form-control" id="address"/>                                    <label class="placeholder">Address <span class="error">*</span></label>

        <input type="text" name="postal_code" class="form-control" maxlength="6" id="postal_code"/>                                    <label class="placeholder">Pin Code <span class="error">*</span></label>
        <br>
        <input type="text" name="latitude" class="form-control num-only" id="latitude"/>                                    <label class="placeholder">Latitude <span class="error">*</span></label>
        <br>
        <input type="text" name="longitude" class="form-control num-only" id="longitude"/>                                    <label class="placeholder">Longitude <span class="error">*</span></label>
        <br>
        <input type="text" name="storeCode" class="form-control" maxlength="8" id="storeCode"/>                                    <label class="placeholder">Store Code <span class="error">*</span></label>

        <br>
        <button class="btn btn-dark-blue round40" id="next-btn" type="submit">Save</button>



    </form>


</body>
</html>