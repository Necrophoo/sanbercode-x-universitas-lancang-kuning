<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name"><br><br>
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name"><br><br>

        <div class="form-group">
            <label for="gender">Gender:</label><br /><br />
            <input type="Radio" name="gender" id="male" /> Male <br />
            <input type="Radio" name="gender" id="female" /> Female <br />
            <input type="Radio" name="gender" id="other" /> Other <br /><br />
          </div>

          <div class="form-group">
            <label for="nationality">Nationality:</label><br /><br />
            <select name="nationality" id="">
              <option value="">Indonesia</option>
              <option value="">Malaysia</option>
              <option value="">Mexico</option>
            </select>
            <br /><br />
          </div>

          <div class="form-group">
            <label for="language">Language Spoken:</label> <br /><br />
            <input type="checkbox" id="bahasa" /> Indonesian
            <br />
            <input type="checkbox" id="english" /> English <br />
            <input type="checkbox" id="other" /> Other <br /><br />
          </div>

          <div class="form-group">
            <label for="bio">Bio:</label> <br />
            <textarea name="bio" id="" cols="30" rows="10"></textarea><br />
          </div>
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>
