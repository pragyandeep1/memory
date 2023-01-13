<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="styles.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <script type="text/javascript" src="script.js" async></script>
  <title>Matching Game</title>
</head>
<body>
  <div class="title-container">
    <h1 class="page-title">Matching Game</h1>
  </div>
  <div class="overlay-text visible">
    Click to Begin
  </div>
  <div id="game-over-text" class="overlay-text">
    You Lose!
    <span class="overlay-text-small">Play Again!</span>
  </div>
  <div id="victory-text" class="overlay-text">
    You Win!
    <span class="overlay-text-small">Play Again!</span>
  </div>

  <div class="game-container">
    <div class="game-info-container">
      <div class="game-info">
        Remaining <span id="time-remaining">60</span>
      </div>
      <div class="game-info">
        Flips <span id="flips">0</span>
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">
        <img class="snowflake" src="Assets/Images/Snowflake.png">
      </div>
      <div class="card-front card-face">
        <img class="snowflakeFront snowflakeFront-top-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-top-right" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-right" src="Assets/Images/SnowBorder.png">
        <img class="card-value" src="Assets/Images/Watch.png">
        <h3>Watch</h3>
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">
        <img class="snowflake" src="Assets/Images/Snowflake.png">
      </div>
      <div class="card-front card-face">
        <img class="snowflakeFront snowflakeFront-top-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-top-right" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-right" src="Assets/Images/SnowBorder.png">
        <img class="card-value" src="Assets/Images/Watch.png">
        <h3>Watch</h3>
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">
        <img class="snowflake" src="Assets/Images/Snowflake.png">
      </div>
      <div class="card-front card-face">
        <img class="snowflakeFront snowflakeFront-top-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-top-right" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-right" src="Assets/Images/SnowBorder.png">
        <img class="card-value" src="Assets/Images/Podium.png">
        <h3>Podium</h3>
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">
        <img class="snowflake" src="Assets/Images/Snowflake.png">
      </div>
      <div class="card-front card-face">
        <img class="snowflakeFront snowflakeFront-top-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-top-right" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-right" src="Assets/Images/SnowBorder.png">
        <img class="card-value" src="Assets/Images/Podium.png">
        <h3>Podium</h3>
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">
        <img class="snowflake" src="Assets/Images/Snowflake.png">
      </div>
      <div class="card-front card-face">
        <img class="snowflakeFront snowflakeFront-top-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-top-right" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-right" src="Assets/Images/SnowBorder.png">
        <img class="card-value" src="Assets/Images/Cards.png">
        <h3>Cards</h3>
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">
        <img class="snowflake" src="Assets/Images/Snowflake.png">
      </div>
      <div class="card-front card-face">
        <img class="snowflakeFront snowflakeFront-top-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-top-right" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-right" src="Assets/Images/SnowBorder.png">
        <img class="card-value" src="Assets/Images/Cards.png">
        <h3>Cards</h3>
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">
        <img class="snowflake" src="Assets/Images/Snowflake.png">
      </div>
      <div class="card-front card-face">
        <img class="snowflakeFront snowflakeFront-top-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-top-right" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-right" src="Assets/Images/SnowBorder.png">
        <img class="card-value" src="Assets/Images/Reindeer.png">
        <h3>Reindeer</h3>
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">
        <img class="snowflake" src="Assets/Images/Snowflake.png">
      </div>
      <div class="card-front card-face">
        <img class="snowflakeFront snowflakeFront-top-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-top-right" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-right" src="Assets/Images/SnowBorder.png">
        <img class="card-value" src="Assets/Images/Reindeer.png">
        <h3>Reindeer</h3>
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">
        <img class="snowflake" src="Assets/Images/Snowflake.png">
      </div>
      <div class="card-front card-face">
        <img class="snowflakeFront snowflakeFront-top-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-top-right" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-right" src="Assets/Images/SnowBorder.png">
        <img class="card-value" src="Assets/Images/Snow.jpg">
        <h3>Snowflake</h3>
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">
        <img class="snowflake" src="Assets/Images/Snowflake.png">
      </div>
      <div class="card-front card-face">
        <img class="snowflakeFront snowflakeFront-top-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-top-right" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-right" src="Assets/Images/SnowBorder.png">
        <img class="card-value" src="Assets/Images/Snow.jpg">
        <h3>Snowflake</h3>
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">
        <img class="snowflake" src="Assets/Images/Snowflake.png">
      </div>
      <div class="card-front card-face">
        <img class="snowflakeFront snowflakeFront-top-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-top-right" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-right" src="Assets/Images/SnowBorder.png">
        <img class="card-value" src="Assets/Images/Elf.png">
        <h3>Elf</h3>
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">
        <img class="snowflake" src="Assets/Images/Snowflake.png">
      </div>
      <div class="card-front card-face">
        <img class="snowflakeFront snowflakeFront-top-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-top-right" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-right" src="Assets/Images/SnowBorder.png">
        <img class="card-value" src="Assets/Images/Elf.png">
        <h3>Elf</h3>
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">
        <img class="snowflake" src="Assets/Images/Snowflake.png">
      </div>
      <div class="card-front card-face">
        <img class="snowflakeFront snowflakeFront-top-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-top-right" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-right" src="Assets/Images/SnowBorder.png">
        <img class="card-value" src="Assets/Images/Socks.jpg">
        <h3>Socks</h3>
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">
        <img class="snowflake" src="Assets/Images/Snowflake.png">
      </div>
      <div class="card-front card-face">
        <img class="snowflakeFront snowflakeFront-top-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-top-right" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-right" src="Assets/Images/SnowBorder.png">
        <img class="card-value" src="Assets/Images/Socks.jpg">
        <h3>Socks</h3>
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">
        <img class="snowflake" src="Assets/Images/Snowflake.png">
      </div>
      <div class="card-front card-face">
        <img class="snowflakeFront snowflakeFront-top-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-top-right" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-right" src="Assets/Images/SnowBorder.png">
        <img class="card-value" src="Assets/Images/Candycane.png">
        <h3>Candy Cane</h3>
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">
        <img class="snowflake" src="Assets/Images/Snowflake.png">
      </div>
      <div class="card-front card-face">
        <img class="snowflakeFront snowflakeFront-top-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-top-right" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-left" src="Assets/Images/SnowBorder.png">
        <img class="snowflakeFront snowflakeFront-bottom-right" src="Assets/Images/SnowBorder.png">
        <img class="card-value" src="Assets/Images/Candycane.png">
        <h3>Candy Cane</h3>
      </div>
    </div>
  </div>

</body>
</html>