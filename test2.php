<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Responsive Cards</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f2f5;
    margin: 20px;
  }

  .container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
  }

  .card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    width: 300px;
    max-width: 100%;
    overflow: hidden;
    display: flex;
    flex-direction: column;
  }

  .card img {
    width: 100%;
    height: auto;
    object-fit: cover;
  }

  .card-content {
    padding: 15px;
  }

  .card-title {
    font-weight: bold;
    font-size: 1.2em;
    margin-bottom: 10px;
  }

  .info {
    font-size: 0.9em;
    margin: 5px 0;
  }

  .apply-btn {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #f4b41a;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
    margin-top: 15px;
    text-align: center;
    transition: background-color 0.3s;
  }

  .apply-btn:hover {
    background-color: #d6a317;
  }

  /* Responsive adjustments */
  @media(max-width: 650px) {
    .container {
      flex-direction: column;
      align-items: center;
    }
  }
</style>
</head>
<body>

<div class="container">
  <!-- Card 1 -->
  <div class="card">
    <img src="img/profile/1.png" alt="Doctor Image" />
    <div class="card-content">
      <div class="card-title">Doctors</div>
      <div class="info">Munich, Germany</div>
      <div class="info">100+ jobs available</div>
      <div class="info"><a href="#">Eligibility Criteria</a></div>
      <button class="apply-btn">Apply Now</button>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="card">
    <img src="img/profile/1.png" alt="Physiotherapist Image" />
    <div class="card-content">
      <div class="card-title">Physiotherapists abskjd asdkasdj kjasdk</div>
      <div class="info">Berlin, Germany</div>
      <div class="info">100+ jobs available</div>
      <div class="info"><a href="#">Eligibility Criteria</a></div>
      <button class="apply-btn">Apply Now</button>
    </div>
  </div>
</div>

</body>
</html>