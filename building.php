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
  background-color: #2E8B57;
  text-align: center;
  cursor: pointer;
  width: 100%;
  display: flex; /* Center horizontally */
  justify-content: center; /* Center horizontally */
  align-items: center; /* Center vertically */
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
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: black;
}

.topnav a {
  float: left;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2E8B57;
  color: white;
}
.money {
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0;
}
.button-container {
  display: flex;
  justify-content: center; /* Center horizontally */
  align-items: center; /* Center vertically */
  height: 100vh; /* Optional: Center within the viewport height */
}
.button {
  /* Your button styles here */
}

</style>

</head>
<body>
<div class="about-section">
  <h1>ADPK Residents</h1>
  <p>หอพัก ADPK</p>
</div>
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="show_residents_a.php">Room</a>
  <a href="electric_water.php">Electric-Water</a> <!-- Set the href to "add_residents_a.php" -->
  <a href="#contract">Contract</a>
  <a href="#contact">Contact</a>
</div>


<div class="row">
  <div class="column">
    <div class="card">
      <img src="https://content.r9cdn.net/himg/a3/02/48/revato-3889-12303220-937041.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>A101</h2>
  <!-- Room details -->
        <p class="title">รายละเอียด :</p>
        <p>แอร์ 1 เครื่อง</p>
        <p>เครื่องทำน้ำอุ่น 1 เครื่อง</p>
        <p>TV 1 เครื่อง</p>
        <p a class="money">1200 บาท</p>
        
        

<div class="row">
  <!-- Your room card elements as shown in your previous code -->

  <div class="column">
    <div class="card">
      <!-- Your room card details -->
      <p><button class="button" onclick="reserveRoom('A101')">จอง</button></p>
    </div>
  </div>
</div>



<script>
// JavaScript function to handle room reservation
function reserveRoom(roomNumber) {
  // Assuming you want to redirect to the "room.php" page
  window.location.href = 'add_residents_a.php?room=' + roomNumber;
}
</script>

      </div>
    </div>
  </div>
   <div class="column">
    <div class="card">
      <img src="https://kokkinosvillas.gr/wp-content/uploads/2020/11/Special_Double-02.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>A102</h2>
        <p class="title">รายละเอียด :</p>
        <p>แอร์ 1 เครื่อง</p>
        <p>เครื่องทำน้ำอุ่น 1 เครื่อง</p>
        <p>TV 1 เครื่อง</p>
        <p class="money">1200 บาท</p>
        
        

<div class="row">
  <!-- Your room card elements as shown in your previous code -->

  <div class="column">
    <div class="card">
      <!-- Your room card details -->
      <p><button class="button" onclick="reserveRoom('A101')">จอง</button></p>
    </div>
  </div>
</div>



<script>
// JavaScript function to handle room reservation
function reserveRoom(roomNumber) {
  // Assuming you want to redirect to the "add_residents_a.php" page
  window.location.href = 'add_residents_a.php?room=' + roomNumber;
}
</script>

      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://kokkinosvillas.gr/wp-content/uploads/2020/11/Special_Double-02.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>A103</h2>
        <p class="title">รายละเอียด :</p>
        <p>แอร์ 1 เครื่อง</p>
        <p>เครื่องทำน้ำอุ่น 1 เครื่อง</p>
        <p>TV 1 เครื่อง</p>
        <p class="money">1200 บาท</p>
        
        

<div class="row">
  <!-- Your room card elements as shown in your previous code -->

  <div class="column">
    <div class="card">
      <!-- Your room card details -->
      <p><button class="button" onclick="reserveRoom('A101')">จอง</button></p>
    </div>
  </div>
</div>



<script>
// JavaScript function to handle room reservation
function reserveRoom(roomNumber) {
  // Assuming you want to redirect to the "add_residents_a.php" page
  window.location.href = 'add_residents_a.php?room=' + roomNumber;
}
</script>

      </div>
    </div>
  </div>
 <div class="column">
    <div class="card">
      <img src="https://kokkinosvillas.gr/wp-content/uploads/2020/11/Special_Double-02.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>A104</h2>
        <p class="title">รายละเอียด :</p>
        <p>แอร์ 1 เครื่อง</p>
        <p>เครื่องทำน้ำอุ่น 1 เครื่อง</p>
        <p>TV 1 เครื่อง</p>
        <p class="money">1200 บาท</p>
        
        

<div class="row">
  <!-- Your room card elements as shown in your previous code -->

  <div class="column">
    <div class="card">
      <!-- Your room card details -->
      <p><button class="button" onclick="reserveRoom('A102')">จอง</button></p>
    </div>
  </div>
</div>



<script>
// JavaScript function to handle room reservation
function reserveRoom(roomNumber) {
  // Assuming you want to redirect to the "add_residents_a.php" page
  window.location.href = 'add_residents_a.php?room=' + roomNumber;
}
</script>

      </div>
    </div>
  </div>
 <div class="column">
    <div class="card">
      <img src="https://kokkinosvillas.gr/wp-content/uploads/2020/11/Special_Double-02.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>A105</h2>
        <p class="title">รายละเอียด :</p>
        <p>แอร์ 1 เครื่อง</p>
        <p>เครื่องทำน้ำอุ่น 1 เครื่อง</p>
        <p>TV 1 เครื่อง</p>
        <p class="money">1200 บาท</p>
        
        

<div class="row">
  <!-- Your room card elements as shown in your previous code -->

  <div class="column">
    <div class="card">
      <!-- Your room card details -->
      <p><button class="button" onclick="reserveRoom('A101')">จอง</button></p>
    </div>
  </div>
</div>



<script>
// JavaScript function to handle room reservation
function reserveRoom(roomNumber) {
  // Assuming you want to redirect to the "add_residents_a.php" page
  window.location.href = 'add_residents_a.php?room=' + roomNumber;
}
</script>

      </div>
    </div>
  </div>

 <div class="column">
    <div class="card">
      <img src="https://kokkinosvillas.gr/wp-content/uploads/2020/11/Special_Double-02.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>A106</h2>
        <p class="title">รายละเอียด :</p>
        <p>แอร์ 1 เครื่อง</p>
        <p>เครื่องทำน้ำอุ่น 1 เครื่อง</p>
        <p>TV 1 เครื่อง</p>
        <p class="money">1200 บาท</p>
        
        

<div class="row">
  <!-- Your room card elements as shown in your previous code -->

  <div class="column">
    <div class="card">
      <!-- Your room card details -->
      <p><button class="button" onclick="reserveRoom('A101')">จอง</button></p>
    </div>
  </div>
</div>



<script>
// JavaScript function to handle room reservation
function reserveRoom(roomNumber) {
  // Assuming you want to redirect to the "add_residents_a.php" page
  window.location.href = 'add_residents_a.php?room=' + roomNumber;
}
</script>

      </div>
    </div>
  </div>
 <div class="column">
    <div class="card">
      <img src="https://kokkinosvillas.gr/wp-content/uploads/2020/11/Special_Double-02.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>A107</h2>
        <p class="title">รายละเอียด :</p>
        <p>แอร์ 1 เครื่อง</p>
        <p>เครื่องทำน้ำอุ่น 1 เครื่อง</p>
        <p>TV 1 เครื่อง</p>
        <p class="money">1200 บาท</p>
        
        

<div class="row">
  <!-- Your room card elements as shown in your previous code -->

  <div class="column">
    <div class="card">
      <!-- Your room card details -->
      <p><button class="button" onclick="reserveRoom('A101')">จอง</button></p>
    </div>
  </div>
</div>



<script>
// JavaScript function to handle room reservation
function reserveRoom(roomNumber) {
  // Assuming you want to redirect to the "add_residents_a.php" page
  window.location.href = 'add_residents_a.php?room=' + roomNumber;
}
</script>

      </div>
    </div>
  </div>
 <div class="column">
    <div class="card">
      <img src="https://kokkinosvillas.gr/wp-content/uploads/2020/11/Special_Double-02.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>A108</h2>
        <p class="title">รายละเอียด :</p>
        <p>แอร์ 1 เครื่อง</p>
        <p>เครื่องทำน้ำอุ่น 1 เครื่อง</p>
        <p>TV 1 เครื่อง</p>
        <p class="money">1200 บาท</p>
        

<div class="row">
  <!-- Your room card elements as shown in your previous code -->

  <div class="column">
    <div class="card">
      <!-- Your room card details -->
      <p><button class="button" onclick="reserveRoom('A101')">จอง</button></p>
    </div>
  </div>
</div>



<script>
// JavaScript function to handle room reservation
function reserveRoom(roomNumber) {
  // Assuming you want to redirect to the "add_residents_a.php" page
  window.location.href = 'add_residents_a.php?room=' + roomNumber;
}
</script>

      </div>
    </div>
  </div>
 <div class="column">
    <div class="card">
      <img src="https://kokkinosvillas.gr/wp-content/uploads/2020/11/Special_Double-02.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>A109</h2>
        <p class="title">รายละเอียด :</p>
        <p>แอร์ 1 เครื่อง</p>
        <p>เครื่องทำน้ำอุ่น 1 เครื่อง</p>
        <p>TV 1 เครื่อง</p>
        <p class="money">1200 บาท</p>
        

<div class="row">
  <!-- Your room card elements as shown in your previous code -->

  <div class="column">
    <div class="card">
      <!-- Your room card details -->
      <p><button class="button" onclick="reserveRoom('A101')">จอง</button></p>
    </div>
  </div>
</div>



<script>
// JavaScript function to handle room reservation
function reserveRoom(roomNumber) {
  // Assuming you want to redirect to the "add_residents_a.php" page
  window.location.href = 'add_residents_a.php?room=' + roomNumber;
}
</script>

      </div>
    </div>
  </div>
 <div class="column">
    <div class="card">
      <img src="https://kokkinosvillas.gr/wp-content/uploads/2020/11/Special_Double-02.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>A110</h2>
        <p class="title">รายละเอียด :</p>
        <p>แอร์ 1 เครื่อง</p>
        <p>เครื่องทำน้ำอุ่น 1 เครื่อง</p>
        <p>TV 1 เครื่อง</p>
        <p class="money">1200 บาท</p>
        

<div class="row">
  <!-- Your room card elements as shown in your previous code -->

  <div class="column">
    <div class="card">
      <!-- Your room card details -->
      <p><button class="button" onclick="reserveRoom('A101')">จอง</button></p>
    </div>
  </div>
</div>



<script>
// JavaScript function to handle room reservation
function reserveRoom(roomNumber) {
  // Assuming you want to redirect to the "add_residents_a.php" page
  window.location.href = 'add_residents_a.php?room=' + roomNumber;
}
</script>

      </div>
    </div>
  </div>
 <div class="column">
    <div class="card">
      <img src="https://kokkinosvillas.gr/wp-content/uploads/2020/11/Special_Double-02.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>A111</h2>
        <p class="title">รายละเอียด :</p>
        <p>แอร์ 1 เครื่อง</p>
        <p>เครื่องทำน้ำอุ่น 1 เครื่อง</p>
        <p>TV 1 เครื่อง</p>
        <p class="money">1200 บาท</p>
        

<div class="row">
  <!-- Your room card elements as shown in your previous code -->

  <div class="column">
    <div class="card">
      <!-- Your room card details -->
      <p><button class="button" onclick="reserveRoom('A101')">จอง</button></p>
    </div>
  </div>
</div>



<script>
// JavaScript function to handle room reservation
function reserveRoom(roomNumber) {
  // Assuming you want to redirect to the "add_residents_a.php" page
  window.location.href = 'add_residents_a.php?room=' + roomNumber;
}
</script>

      </div>
    </div>
  </div>
 <div class="column">
    <div class="card">
      <img src="https://kokkinosvillas.gr/wp-content/uploads/2020/11/Special_Double-02.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>A112</h2>
        <p class="title">รายละเอียด :</p>
        <p>แอร์ 1 เครื่อง</p>
        <p>เครื่องทำน้ำอุ่น 1 เครื่อง</p>
        <p>TV 1 เครื่อง</p>
        <p class="money">1200 บาท</p>
        

<div class="row">
  <!-- Your room card elements as shown in your previous code -->

  <div class="column">
    <div class="card">
      <!-- Your room card details -->
      <p><button class="button" onclick="reserveRoom('A101')">จอง</button></p>
    </div>
  </div>
</div>



<script>
// JavaScript function to handle room reservation
function reserveRoom(roomNumber) {
  // Assuming you want to redirect to the "add_residents_a.php" page
  window.location.href = 'add_residents_a.php?room=' + roomNumber;
}
</script>

      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="https://kokkinosvillas.gr/wp-content/uploads/2020/11/Special_Double-02.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>A113</h2>
        <p class="title">รายละเอียด :</p>
        <p>แอร์ 1 เครื่อง</p>
        <p>เครื่องทำน้ำอุ่น 1 เครื่อง</p>
        <p>TV 1 เครื่อง</p>
        <p class="money">1200 บาท</p>
        

<div class="row">
  <!-- Your room card elements as shown in your previous code -->

  <div class="column">
    <div class="card">
      <!-- Your room card details -->
      <p><button class="button" onclick="reserveRoom('A101')">จอง</button></p>
    </div>
  </div>
</div>



<script>
// JavaScript function to handle room reservation
function reserveRoom(roomNumber) {
  // Assuming you want to redirect to the "add_residents_a.php" page
  window.location.href = 'add_residents_a.php?room=' + roomNumber;
}
</script>

      </div>
    </div>
  </div>
 <div class="column">
    <div class="card">
      <img src="https://kokkinosvillas.gr/wp-content/uploads/2020/11/Special_Double-02.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>A114</h2>
        <p class="title">รายละเอียด :</p>
        <p>แอร์ 1 เครื่อง</p>
        <p>เครื่องทำน้ำอุ่น 1 เครื่อง</p>
        <p>TV 1 เครื่อง</p>
        <p class="money">1200 บาท</p>
        

<div class="row">
  <!-- Your room card elements as shown in your previous code -->

  <div class="column">
    <div class="card">
      <!-- Your room card details -->
      <p><button class="button" onclick="reserveRoom('A101')">จอง</button></p>
    </div>
  </div>
</div>



<script>
// JavaScript function to handle room reservation
function reserveRoom(roomNumber) {
  // Assuming you want to redirect to the "add_residents_a.php" page
  window.location.href = 'add_residents_a.php?room=' + roomNumber;
}
</script>

      </div>
    </div>
  </div>
 <div class="column">
    <div class="card">
      <img src="https://kokkinosvillas.gr/wp-content/uploads/2020/11/Special_Double-02.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>A115</h2>
        <p class="title">รายละเอียด :</p>
        <p>แอร์ 1 เครื่อง</p>
        <p>เครื่องทำน้ำอุ่น 1 เครื่อง</p>
        <p>TV 1 เครื่อง</p>
        <p class="money">1200 บาท</p>
        

<div class="row">
  <!-- Your room card elements as shown in your previous code -->

  <div class="column">
    <div class="card">
      <!-- Your room card details -->
      <p><button class="button" onclick="reserveRoom('A101')">จอง</button></p>
    </div>
  </div>
  <div class="row">
  <!-- Your room cards go here -->
</div>

<script>
// JavaScript function to handle room reservation
function reserveRoom(roomNumber) {
  // Assuming you want to redirect to the "add_residents_a.php" page
  window.location.href = 'add_residents_a.php?room=' + roomNumber;
}
</script>

<!-- Your closing HTML tags here -->
</body>
</html>