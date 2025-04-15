<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>نحن متدربين الكلية التقنية .</p>
  <p>مشروع تخرج تخصص تقنية البرمجة و تطوير الويب .</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="ahmed.jpeg" alt="ahmed" style="width:100%">
      <div class="container">
        <h2>AHMED SHAL </h2>
        <p class="title">CEO & Founder</p>
        <p>Front and back end programmer</p>
        <p>main page and  Services</p>
        <p>ahmed@tvtc.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="sultan.jpeg" alt="Mike" style="width:79%">
      <div class="container">
        <h2>AHMED SULTAN</h2>
        <p class="title">CEO & Founder</p>
        <p>Front and back end programmer.</p>
        <p>login page and singin and admin page </p>
        <p>ahmed_sultan@.tvtc.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="/w3images/team3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>TAREQ NAIF</h2>
        <p class="title">Designer</p>
        <p>DATABASE.</p>
        <p>mysql.</p>
        <p>tareq@tvtc.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
